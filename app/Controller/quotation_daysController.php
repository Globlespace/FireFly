<?php


namespace app\Controller;


use app\Model\Model;
use app\Model\quotation_days;

class quotation_daysController extends controller
{
    public function JoinQuotDays($dayid,$Quotid){
        $qdm=new quotation_days();
        $this->fillData($qdm,$Quotid,$dayid);
        $this->filterData($qdm);
        $qdm->insert();
        echo $qdm->mysql_error;

    }
    public function fillData($qdm,$Quotid,$dayid){
        $qdm->g_q_id=$Quotid;
        $qdm->d_id=$dayid;
    }
    private function filterData($qdm){
        $connection = Model::Connection();
        $qdm->g_q_id = mysqli_real_escape_string($connection, $qdm->g_q_id) and htmlspecialchars($qdm->g_q_id);
        $qdm->d_id = mysqli_real_escape_string($connection, $qdm->d_id) and htmlspecialchars($qdm->d_id);
    }
}