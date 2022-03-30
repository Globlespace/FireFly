<?php


namespace app\Controller;


use app\Model\Model;
use framework\Request\Request;
use http\Env\Response;

class Note extends controller
{
    public function Save(Request $request){
        $note=$this->filldata($request);
        $this->filterdata($note);
        if($this->validate()){
            $note->insert();
        }
        $note->Json();
    }
    private function validate(){
        return true;
    }
    private function filldata(Request $request){
        $note=new \app\Model\note();
        $data = $_POST;
        $note->info = $data['info'];
        $note->reminder = $data['date'];
        $note->stage = $data['stage'];
        $note->type = $data['type'];
        $note->tripid=$request->values['tripid'];
        return $note;
    }
    private function filterdata($note){
        $connection = Model::Connection();
        $note->info = mysqli_real_escape_string($connection, $note->info) and htmlspecialchars($note->info);
        $note->date = mysqli_real_escape_string($connection, $note->date) and htmlspecialchars($note->date);
        $note->stage = mysqli_real_escape_string($connection, $note->stage) and htmlspecialchars($note->stage);
        $note->type = mysqli_real_escape_string($connection, $note->type) and htmlspecialchars($note->type);
    }
}