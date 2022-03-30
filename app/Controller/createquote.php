<?php
namespace app\Controller;
use app\Model\agentqueryassined;
use app\Model\customer_querie;
use app\Model\give_quotation;
use framework\Request\Request;
use app\Model\Model;
class createquote extends controller
{
    public function page(){
       echo $this->view('createquote');
    }
    public function quote(Request $request){
        $file=COMPONENTS_DIR."createquote".DS."quote.php";
        $cs = new customer_querie();
        $this->getFilterParams($cs);
        $cs->GetQuerys();
        $card=1;
        while($cs->next()){
            $name=$this->GetAgent($cs->name);
            $data=array(
                "id"=>$cs->id,
                "name"=>$cs->customerName,
                "explorer"=>$cs->explorer,
                "destination"=>$cs->destination,
                "departure"=>$cs->departure,
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
    Protected function GetAgent($agentName){

            if($_SESSION["fullPrivilege"]==1){
                $agent=new \app\Model\Agent();
                $agent->get();
                $name='<select class="AssignAgent" style="display: inline-block; height: unset; padding: 2px; border: 1px solid #00000030; width: 40%; font-size: .85rem; min-width: 20%;" name="" id="">
                        <option value="0">Agent</option>';
                while ($agent->next()) {
                    $select=$agent->name==$agentName? 'Selected':'';
                    $name.='<option '.$select.' value="'.$agent->id.'">'.$agent->name.'</option>';
                }
                $name.='</select>';

                $name.='';
            }else{
                $name='<h6 style="font-size: 1.45rem; line-height: 60%;">'.$agentName.'</h6>';
            }


        return $name;
    }
    public function  discardQuote(Request $request)
    {
        $cs = new customer_querie();
        if($_SESSION["fullPrivilege"]==1){
            $cs->status = 0;
            $cs->update("id = $request->id");
            $cs->Success=true;
            $cs->Message="Quote Discarded";
        }else{
            $cs->Success=false;
            $cs->Message="You Don't have Permission To Discard Quote ";
        }
        $cs->Json();

    }
    public function getFilterParams(customer_querie $cs)
    {
            $connection = Model::Connection();

            $destination = isset($_POST['Destination']) ? $_POST['Destination'] : "";
            $agent = isset($_POST['Agent']) ? $_POST['Agent'] : "";
            $leadType = isset($_POST['LeadType']) ? $_POST['LeadType'] : "";
            $month = isset($_POST['Month']) ? $_POST['Month'] : "";
            if (!empty($destination)) {
                foreach ($destination as $key=>$value) {

                    $value = mysqli_real_escape_string($connection, $value);
                    $value=htmlspecialchars($value);
                    $destination[$key] = $value;

                }
                $cs->destination = $destination;

            }
            if(!empty($agent))
            {
                foreach ($agent as $key=>$value){
                    $value = mysqli_real_escape_string($connection, $value) and htmlspecialchars($value);
                    $agent[$key] = $value;
                }
                $cs->agent = $agent;
            }
            if(!empty($month))
            {
                $month = mysqli_real_escape_string($connection, $month) and htmlspecialchars($month);
                $cs->month = $month;

            }
            if(!empty($leadType)){
                $leadType = mysqli_real_escape_string($connection, $leadType) and htmlspecialchars($leadType);
                $cs->leadType = $leadType;
            }

        }
    public function getQuoteform(Request $request){
       include_once COMPONENTS_DIR."createquote/quotationform.php";
    }
    public function getfiledQuoteform(Request $request){
       include_once COMPONENTS_DIR."createquote/quotationformprefilled.php";
    }
    public function getAlredyGivenQuote(Request $request){
       $gvm=new give_quotation();
       $Query="SELECT * FROM `give_quotations` WHERE `c_q_id` LIKE '%$request->srch%' ORDER BY id DESC LIMIT 15";
       $gvm->query($Query);
       while ($gvm->next()){
            echo '<li><a onclick="getfilledQuoteform(this,'.$gvm->id.','.$gvm->c_q_id.')">TRIP ID '.$gvm->c_q_id.'</a></li>';
       }
    }
    public function AssignAgent(Request $request){
        $aqa=new agentqueryassined();
        if($_SESSION["fullPrivilege"]==1) {
            if ($request->agent_id != 0 ) {
                $aqa->agent_id = $request->agent_id;
                $aqa->c_q_id = $request->cq_id;
                if(!$aqa->isExist()){
                    $aqa->insert();
                    $aqa->Success = true;
                    $aqa->Message = "Quotation Assigned ";
                    $aqa->Code = 200;
                }else{
                    $aqa->c_q_id = "";
                    $aqa->id = "";
                    $aqa->agent_id = $request->agent_id;
                    $aqa->update("c_q_id=".$request->cq_id);
                    $aqa->Success = true;
                    $aqa->Message = "Quotation Assigned";
                    $aqa->Code = 200;
                }
            }else {
                $aqa->c_q_id = $request->cq_id;
                $aqa->delete();
                $aqa->Success = true;
                $aqa->Message = "Quotation Removed";
                $aqa->Message = $aqa->c_q_id;
                $aqa->Code = 201;
            }
        }else{
            $aqa->Success = false;
            $aqa->Message = "Permission denied";
        }
        $aqa->Json();
    }
}