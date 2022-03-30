<?php

namespace app\Controller;
use app\Model\agentqueryassined;
use app\Model\customer_querie;
use app\Model\give_quotation;
use framework\Request\Request;
use app\Model\Model;

class TravellerDetails extends controller
{
    public function page(Request $request){

        $this->setLayout = false;
        echo $this->view('traveller', $request->values);
     }
}


?>