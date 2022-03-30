<?php

namespace app\Controller;

use app\Model\customer_querie;
use app\Model\give_quotation;
use app\Model\Model;
use framework\Request\Request;

class PostStay extends  createquote
{
    public function page(){
       echo $this->view('poststay');
    }
    public function card(Request $request)
    {
        $file=COMPONENTS_DIR."PostStay".DS."PostStay.php";
        $cs = new customer_querie();
        $this->getFilterParamsOfPostStay($cs);
        $From=$cs->From;
        $cs->GetQuerysForPostStay((int) $cs->limit);
        $card=1;
        while($cs->next()){
            $cs->From=$From;
            if(!$this->isPostStay($cs)){
                continue;
            }
            $name=$this->GetAgent($cs->name);
            $data=array(
                "id"=>$cs->id,
                "name"=>$cs->customerName,
                "destination"=>$cs->destination,
                "duration"=>$cs->duration,
                "email"=>$cs->email,
                "contact_number"=>$cs->contact_number,
                "hotel_category"=>$cs->hotel_category,
                "flight"=>$cs->flight,
                "cab"=>$cs->cab,
                "budget"=>$cs->budget,
                "adults"=>$cs->adults,
                "children"=>$cs->children,
                "infants"=>$cs->infants,
                "departure_date"=>$cs->departure_date,
                "i_will_book_in"=>$cs->i_will_book_in,
                "type_of_package"=>$cs->type_of_package,
                "prefered_time_to_call"=>$cs->prefered_time_to_call,
                "driver_language"=>$cs->driver_language,
                "tour_type"=>$cs->tour_type,
                "Additional_Details"=>$cs->Additional_Details,
                "Active"=>$cs->status?"Active":"Not Active",
                "agent"=>$name,
                "card"=>$card
            );
            $card++;
            echo $this->replacePlaceholders($file,$data);
        }
    }
    private function isPostStay($cs){
        $From=$cs->From;
        $gv=new give_quotation();
        $tdays=$gv->TotalDays($cs->id);
        $sdate=$gv->dateOfJourney;
        $edate=date('Y-m-d', strtotime($sdate. " + $tdays days"));
        $cdate=date("Y-m-d");

        if(!empty($From)){
            $cdate=$From;
        }

        return $cdate > $sdate &&  $cdate > $edate;
    }
    public function getFilterParamsOfPostStay(customer_querie $cs)
    {
        $connection = Model::Connection();
        $this->getFilterParams($cs);
        $From = isset($_POST['From']) ? $_POST['From'] : "";
        $To = isset($_POST['To']) ? $_POST['To'] : "";
        $limit = isset($_POST['limit']) ? $_POST['limit'] : "";
        $tab = isset($_POST["tab"]) ? $_POST["tab"] : "";
        if(!empty($To)){
            $To = mysqli_real_escape_string($connection, $To) and htmlspecialchars($To);
            $cs->To = $To;
        }
        if(!empty($From)){
            $From = mysqli_real_escape_string($connection, $From) and htmlspecialchars($From);
            $cs->From = $From;
        }
        if(!empty($limit)){
            $limit = mysqli_real_escape_string($connection, $limit) and htmlspecialchars($limit);
            $cs->limit = $limit;
        }
        if(!empty($tab)){
            $tab = mysqli_real_escape_string($connection, $tab) and htmlspecialchars($tab);
            $cs->tab = $tab;
        }

    }
}