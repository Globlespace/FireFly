<?php


namespace app\Model;


class Agent extends Model
{
    protected $table="agents";
    public function GetQueries()
    {
        $password=$this->password;
        $this->get('email',$this->email);
        if ($this->next()){
            if(check($password,$this->password)){
                $this->Code=200;
                $this->Success=true;
                $this->Message="success";
                return true;
            }
        }
        $this->Code=404;
        $this->Success=false;
        $this->Message="email/password is incorrect";
        //$this->Message=encrypt("danish@admin");
        return false;

    }
}