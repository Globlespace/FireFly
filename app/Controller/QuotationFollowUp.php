<?php


namespace app\Controller;
use app\Model\customer_querie;
use app\Model\Model;
use framework\Request\Request;

class QuotationFollowUp extends createquote
{
    
    public function pagee(Request $request){

        echo $this->view('quotationfollowup', $request->values);
      
    }

    public function quotationFollowupCard(Request $request)
    {
        $file=COMPONENTS_DIR."Quotationfollowup".DS."quotationfollowupcard.php";
        $cs = new customer_querie();
        $this->getFilterParamsOfQuotationFollowUp($cs);
        $cs->GetQuerysForQuotationFollowUp();
        $card=1;
        while($cs->next()){
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
    public function getFilterParamsOfQuotationFollowUp(customer_querie $cs)
    {
        $connection = Model::Connection();
        $this->getFilterParams($cs);
        $FollowedUp = isset($_POST['FollowedUp']) ? $_POST['FollowedUp'] : "";
        $SpecialLeads = isset($_POST['SpecialLeads']) ? $_POST['SpecialLeads'] : "";
        $tab = isset($_POST["tab"]) ? $_POST["tab"] : "";
        if(!empty($FollowedUp)){
            $FollowedUp = mysqli_real_escape_string($connection, $FollowedUp) and htmlspecialchars($FollowedUp);
            $cs->FollowedUp = $FollowedUp;
        }
        if(!empty($SpecialLeads)){
            $SpecialLeads = mysqli_real_escape_string($connection, $SpecialLeads) and htmlspecialchars($SpecialLeads);
            $cs->SpecialLeads = $SpecialLeads;
        }
        if(!empty($tab)){
            $tab = mysqli_real_escape_string($connection, $tab) and htmlspecialchars($tab);
            $cs->tab = $tab;
        }

    }

    public function getQuoteforQuoteid(Request $request)
    {
        $this->setLayout = False;
        $file=COMPONENTS_DIR."traveller".DS."quotation.php";
        extract($request->values);
        include $file;
    }
}
