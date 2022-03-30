<?php


namespace app\Model;


class note extends Model
{
    function getdes($col,$val){
        $query = "select * from  $this->table where $col ='$val' order by added_on desc" ;
        $this->Message= $query;
        $this->result = mysqli_query($this->con, $query);
    }
}