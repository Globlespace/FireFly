<?php

namespace app\Controller;

use app\Model\customer_querie;
use app\Model\give_quotation;
use app\Model\Model;
use framework\Request\Request;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class give_quotationController extends dayController
{
    public function _give(Request $request)
    {
        $quo = new give_quotation();
        $this->filldata($quo);
        $this->filterGiveQuote($quo);
        $sts=2;
        if ($quo->isExist()) {
            $sts=3;
        }
        $quo = new give_quotation();
        $this->filldata($quo);
        $this->filterGiveQuote($quo);
            $quoId = $this->InsertQuote($quo);
            $quo->Message = "Inserted Successfully";
            $quo->Success = true;
            $quo->Code = 200;
            $this->insertDays($quoId);
            $gc = new customer_querie();
            $gc->status = $sts;
            $gc->update("id=" . $quo->c_q_id);
           $this->preparePdf($quo,$quoId);
           $quou=new give_quotation();
           $quou->pdf=$quo->json["PDF"];
           $quou->update("id=".$quoId);
        $quo->Json();
    }
    private function filldata($quo)
    {
        $data = $_POST;
        $quo->c_q_id = $data['c_q_id'];
        $quo->flight = $data['flight'];
        $quo->vehicleType = $data['vehicleType'];
        $quo->quotationPrice = $data['totalprice'];
        $quo->advanceAmountToPay = $data['halfbooking'];
        $quo->dateOfJourney = $data['dateofjourney'];
        $quo->Inclusions = $data['inclusions'];
        $quo->Exclusions = $data['exclusions'];

    }
    private function filterGiveQuote(give_quotation $quo)
    {
        $connection = Model::Connection();
        $quo->flight = mysqli_real_escape_string($connection, $quo->flight) and htmlspecialchars($quo->flight);
        $quo->vehicleType = mysqli_real_escape_string($connection, $quo->vehicleType) and htmlspecialchars($quo->vehicleType);
        $quo->quotationPrice = mysqli_real_escape_string($connection, $quo->quotationPrice) and htmlspecialchars($quo->quotationPrice);
        $quo->advanceAmountToPay = mysqli_real_escape_string($connection,$quo->advanceAmountToPay) and htmlspecialchars($quo->advanceAmountToPay);
        $quo->dateOfJourney = mysqli_real_escape_string($connection, $quo->dateOfJourney) and htmlspecialchars($quo->dateOfJourney);
        $quo->Inclusions = mysqli_real_escape_string($connection, $quo->Inclusions) and htmlspecialchars($quo->Inclusions);
        $quo->Exclusions = mysqli_real_escape_string($connection, $quo->Exclusions) and htmlspecialchars($quo->Exclusions);

    }
    private function InsertQuote(give_quotation $quo)
    {
        return $quo->insertGetId();
    }
    private function insertDays($quoId)
    {
        $data = $_POST;
        $dayCount = 1;
        foreach ($data as $key => $value) {
            if ($key != 'Day-' . $dayCount) continue;
            $dayid = $this->InsertDay($value);
            $qdc = new quotation_daysController();
            $qdc->JoinQuotDays($dayid, $quoId);
            $dayCount++;
        }
    }
    private function preparePdf($quo,$quoId)
    {
        $query = "SELECT *,cq.id as tripId,cq.email as customerEmail FROM `give_quotations` gv JOIN `customer_queries` cq on cq.id = gv.c_q_id JOIN `quotation_days` qd on gv.id = qd.g_q_id JOIN days d on qd.d_id = d.id LEFT JOIN `agentqueryassineds` aqa on cq.id = aqa.c_q_id LEFT JOIN `agents` age on aqa.agent_id=age.id WHERE gv.id= $quoId and gv.c_q_id= " . $quo->c_q_id . ";";
        $result = mysqli_query(Model::Connection(), $query);
        $table=mysqli_fetch_all($result,MYSQLI_ASSOC);
        $pdfname="flyparadise_";
        $pdfname.=$table[0]["customerName"]."_".$table[0]["name"]."_".uniqid();
        $pdfname=str_replace(" ","",$pdfname);
        ob_start();
            $mpdf=new MakePdf();
            $mpdf->GetPdf($table , $pdfname);
        $file=ob_get_clean();
        $table[0]["fileName"]=$pdfname.".pdf";
        $ismailed=$this->pdfmail($file,$table);
        if($ismailed===true){
            $quo->Success=true;
            $quo->Message="Email has been sent successfully";
        }else{
            $quo->Success=false;
            $quo->Message=$ismailed;
        }
        $quo->json["PDF"]=$pdfname.".pdf";
        $quo->json["Phone"]=$table[0]["contact_number"];
        $quo->json["NAME"]=$table[0]["customerName"];
    }
    public function pdfmail($file,$table)
    {
        require VENDOR_DIR ."autoload.php";
        //PHPMailer Object
        $to=$table[0]["customerEmail"];
        $PdfName=$table[0]["fileName"];
        $subject="Holiday Package";
        $msg="Dear ".$table[0]["customerName"].",
Greetings from FlyParadise.in!
Fly Paradise Travels Private Limited, designed below holiday package for your requested trip on
FlyParadise.in, if you need any modifications in travel package you can contact Fly Paradise Travels
Private Limited on 9906444456 keep your Trip ID: ".$table[0]["tripId"]." as a reference while contacting with executive.";
        require VENDOR_DIR ."autoload.php";
        //PHPMailer Object
        $mail = new PHPMailer();
        $mail->SMTPDebug  = 0;
        if(!empty(ADMIN_MAIL_HOST)){
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Host = ADMIN_MAIL_HOST;
            $mail->Port = 587;
            $mail->Username = ADMIN_MAIL;
            $mail->Password = ADMIN_MAIL_PASS;
            $mail->SMTPOptions=array('ssl'=>array(
                'verify_peer'=>false,
                'verify_peer_name'=>false,
                'allow_self_signed'=>false
            ));
        }
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->SetFrom(ADMIN_MAIL);
        $mail->Subject = $subject;
        $mail->Body =$msg;
        $mail->AddAddress($to);

        $mail->addStringAttachment($file,$PdfName);

        if(!$mail->Send()){
            return $mail->ErrorInfo;
        }else{
            return true;
        }

    }

}