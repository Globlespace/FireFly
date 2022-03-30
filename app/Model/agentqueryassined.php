<?php


namespace app\Model;


class agentqueryassined extends Model
{
    public function isExist(){
        $this->get("c_q_id",$this->c_q_id);
        return $this->next();
    }

}