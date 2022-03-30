<?php


namespace app\Model;


class give_quotation extends Model
{
    public function  isExist(){
        $this->get("c_q_id",$this->c_q_id);
        return $this->next();
    }
    public function TotalDays($id){
        $query="SELECT * FROM give_quotations gv JOIN quotation_days qd on gv.id = qd.g_q_id JOIN days d on qd.d_id = d.id WHERE gv.status=2 and gv.c_q_id=$id;";
        $this->query($query);
        $this->next();
        $this->days=$this->result->num_rows;
        return $this->days;
    }
}