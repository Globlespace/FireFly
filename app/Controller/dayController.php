<?php


namespace app\Controller;


use app\Model\day;
use app\Model\Model;

class dayController extends controller
{
    public function InsertDay($value){
        $dm=new day();
        $this->fillDayData($dm, $value);
        $this->filterDay($dm, $value);
        if (!$dm->isExist()) {
            $dayid = $dm->insertGetId();
        } else {
            $dayid = $dm->GetId();
        }
        return $dayid;
    }
    private function fillDayData(day $day,$data){
        $day->day=$data['day'];
        $day->distinationPoint=$data['destinationPoint'];
        $day->hotelName=$data['hotelName'];
        $day->hotelRoomType=$data['hotelRoomType'];
        $day->hotelRating=$data['hotelRating'];
        $day->itenary=$data['itenary'];
        $day->itenaryHeading=$data['itenaryheading'];
        $day->breakfast = $data['breakfast'];
        $day->dinner = $data['dinner'];
        $day->status=1;
    }
    private function  filterDay(day $day, $data)
    {
        $connection = Model::Connection();
        $day->day = mysqli_real_escape_string($connection, $day->day) and htmlspecialchars($day->day);
        $day->distinationPoint = mysqli_real_escape_string($connection, $day->distinationPoint) and htmlspecialchars($day->distinationPoint);
        $day->hotelName = mysqli_real_escape_string($connection, $day->hotelName) and htmlspecialchars($day->hotelName);
        $day->hotelRoomType = mysqli_real_escape_string($connection,  $day->hotelRoomType) and htmlspecialchars($data['hotelRoomType']);
        $day->hotelRating = mysqli_real_escape_string($connection, $day->hotelRating) and htmlspecialchars($day->hotelRating);
        $day->itenary = mysqli_real_escape_string($connection, $day->itenary) and htmlspecialchars($day->itenary);
        $day->itenaryHeading = mysqli_real_escape_string($connection, $day->itenaryHeading) and htmlspecialchars($day->itenaryHeading);
        $day->breakfast = mysqli_real_escape_string($connection, $day->breakfast) and htmlspecialchars($day->breakfast);
        $day->dinner = mysqli_real_escape_string($connection, $day->dinner) and htmlspecialchars($day->dinner);

    }


}