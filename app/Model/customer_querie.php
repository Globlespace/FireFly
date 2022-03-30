<?php


namespace app\Model;


class customer_querie extends Model
{

    public function GetQuerys()
    {
        $Query=$this->createQuoteQuery();
        $Query .=" status=1 ORDER BY `cq`.`id` DESC";
        $this->query($Query);

    }
    public function GetQuerysForQuotationFollowUp(){
        $Query=$this->createQuoteQuery();


        if($this->tab == "followed"){
            $Query .=" status = 3";
        }else {
            if ($this->tab == "pendingFollowUp") {
                switch ($this->FollowedUp) {
                    case "1 day":
                        $Query .= " TIMESTAMPDIFF(hour, cq.`added_on`,CURRENT_TIMESTAMP) BETWEEN 0 AND 24 and status = 2";
                        break;
                    case "2 days":
                        $Query .= " TIMESTAMPDIFF(hour, cq.`added_on`,CURRENT_TIMESTAMP) BETWEEN 25 AND 48 and status = 2";
                        break;
                    case "3 days":
                        $Query .= " TIMESTAMPDIFF(hour, cq.`added_on`,CURRENT_TIMESTAMP) BETWEEN 49 AND 72 and status = 2";
                        break;
                    case "4 days":
                        $Query .= " TIMESTAMPDIFF(hour, cq.`added_on`,CURRENT_TIMESTAMP) > 72 and status = 2";
                        break;
                    default:
                        $Query .= " status = 2";
                        break;
                }
            } else {
                switch ($this->FollowedUp) {
                    case "1 day":
                        $Query .= " TIMESTAMPDIFF(hour, cq.`added_on`,CURRENT_TIMESTAMP) BETWEEN 0 AND 24 and status = 2";
                        break;
                    case "2 days":
                        $Query .= " TIMESTAMPDIFF(hour, cq.`added_on`,CURRENT_TIMESTAMP) BETWEEN 25 AND 48 and status = 2";
                        break;
                    case "3 days":
                        $Query .= " TIMESTAMPDIFF(hour, cq.`added_on`,CURRENT_TIMESTAMP) BETWEEN 49 AND 72 and status = 2";
                        break;
                    case "4 days":
                        $Query .= " TIMESTAMPDIFF(hour, cq.`added_on`,CURRENT_TIMESTAMP) > 72 and status = 2";
                        break;
                    default:
                        $Query .= " (status = 2 or status = 3)";
                        break;
                }

            }
        }

        $Query = trim($Query, "where ");
        $Query = trim($Query, "and ");

        $this->query($Query);
        //echo $Query;
    }
    private function createQuoteQuery()
    {
        $Query = "Select cq.*,a.name from customer_queries cq ";
        $Query .= "left join agentqueryassineds aqs on cq.id = aqs.c_q_id
                    left join agents a on a.id=aqs.agent_id
                    where ";
        if($_SESSION["fullPrivilege"]==0){
            $this->agent=array($_SESSION["id"]);
        }
        if($this->agent!="")
        {

            if(count($this->agent) > 0) {
                $Query .= "a.id IN (";

                foreach ($this->agent as $value) {

                    $Query .= "$value,";

                }
                $Query = trim($Query, " , ");
                $Query .= ") and ";

            }
        }else{
            $Query .= "a.id IS NULL and ";
        }
        if($this->destination!="")
        {
            if(count($this->destination) > 0){
                $Query .= " destination IN (";
                foreach ($this->destination as   $value) {
                    $Query.="'$value' , ";
                }
                $Query = trim($Query, " , ");
                $Query .=") and ";
            }
        }
        if($this->month != ""){
            $Query .= " MONTH(FROM_UNIXTIME(UNIX_TIMESTAMP(cq.`added_on`)))= $this->month and";
        }
        if($this->leadType != ""){
            switch ($this->leadType){
                case 1:
                    $Query .= " i_will_book_in = 'In Next 2-3 Days' || i_will_book_in = 'In This Week' and ";
                    break;
                case 2:
                    $Query .= " i_will_book_in = 'In This Month' and";
                    break;
                case 3:
                    $Query .= " i_will_book_in = 'Later Sometime' and";
                    break;
                case 4:
                    $Query .= " i_will_book_in = 'Just Checking Price' and";
                    break;
            }
        }

        return $Query;
    }
    public function getData($tripid){
        $agent=$_SESSION["id"];
        if($_SESSION["fullPrivilege"]==1){
            $this->get($tripid);
        }else{
            $query="Select * from `$this->table` cq join `agentqueryassineds` aqa on cq.id=aqa.c_q_id join agents a on aqa.agent_id=a.id where cq.id=$tripid and a.id=$agent";
            $this->query($query);
        }

    }
    public function iSFollowedUp(){
        $this->get("status",3);
        return $this->next();
    }
    public function GetQuerysForDuringStay($limit){
        $Query = "Select cq.*,a.name from customer_queries cq ";
        $Query .= "left join agentqueryassineds aqs on cq.id = aqs.c_q_id
                    left join agents a on a.id=aqs.agent_id join give_quotations gv on cq.id=gv.c_q_id
                    where ";
        if($_SESSION["fullPrivilege"]==0){
            $this->agent=array($_SESSION["id"]);
        }
        if($this->agent!="")
        {
            if(count($this->agent) > 0) {
                $Query .= "a.id IN (";

                foreach ($this->agent as $value) {

                    $Query .= "$value,";

                }
                $Query = trim($Query, " , ");
                $Query .= ") and ";

            }
        }else{
            $Query .= "a.id IS NULL and ";
        }
        if($this->destination!="")
        {
            if(count($this->destination) > 0){
                $Query .= " destination IN (";
                foreach ($this->destination as   $value) {
                    $Query.="'$value' , ";
                }
                $Query = trim($Query, " , ");
                $Query .=") and ";
            }
        }
        //5  10
        $Query.="cq.status=4 and gv.status=2 ORDER BY `dateOfJourney` DESC limit ".(($limit-1)*10).", 10 ";
        $Query = trim($Query, "where ");
        $Query = trim($Query, "and ");
        $this->query($Query);
    }
    public function GetQuerysForPostStay($limit){
        $Query = "Select cq.*,a.name from customer_queries cq ";
        $Query .= "left join agentqueryassineds aqs on cq.id = aqs.c_q_id
                    left join agents a on a.id=aqs.agent_id join give_quotations gv on cq.id=gv.c_q_id 
                    where ";
        if($_SESSION["fullPrivilege"]==0){
            $this->agent=array($_SESSION["id"]);
        }
        if($this->agent!="")
        {
            if(count($this->agent) > 0) {
                $Query .= "a.id IN (";

                foreach ($this->agent as $value) {

                    $Query .= "$value,";

                }
                $Query = trim($Query, " , ");
                $Query .= ") and ";

            }
        }else{
            $Query .= "a.id IS NULL and ";
        }
        if($this->destination!="")
        {
            if(count($this->destination) > 0){
                $Query .= " destination IN (";
                foreach ($this->destination as   $value) {
                    $Query.="'$value' , ";
                }
                $Query = trim($Query, " , ");
                $Query .=") and ";
            }
        }

        $Query.="cq.status=4 and gv.status=2 ORDER BY `dateOfJourney` DESC limit ".(($limit-1)*10).", 10 ";

        $Query = trim($Query, "where ");
        $Query = trim($Query, "and ");

        $this->query($Query);
    }


}