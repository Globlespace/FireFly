<?php


namespace app\Model;


class day extends Model
{
    private $ins;
    public function GetId(){
        return $this->ins->id;
    }
    public function isExist(){

        $day= clone $this;
        $Query="Select * from days where ";
        $Query.="`day` = '".$day->day."' and ";
        $Query.="`distinationPoint` = '".$day->distinationPoint."' and ";
        $Query.="`hotelName` = '".$day->hotelName."' and ";
        $Query.="`hotelRating` = '".$day->hotelRating."' and ";
        $Query.="`hotelRoomType` = '".$day->hotelRoomType."' and ";
        $Query.="`itenary` = '".$day->itenary."' and ";
        $Query.="`status` = 1 ;";
        $day->query($Query);
        $result=$day->next();
        $this->ins=$day;
        return $result;
    }
}