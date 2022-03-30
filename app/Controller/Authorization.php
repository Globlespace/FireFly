<?php


namespace app\Controller;


use app\Model\Agent;
use app\Model\Model;
use framework\Request\Request;

class Authorization extends controller
{
    public function ViewLogin(){
        $this->setLayout = false;
        echo $this->view('login');
    }
    public function Login(Request $request){

            $agent = new Agent();
            $this->filterParams($agent);
            if($agent->GetQueries()){
                $this->Authorize($agent);
            }
            $agent->Json();
    }
    private function filterParams(Agent $agent){

        $connection = Model::Connection();
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";
        $rememberme = isset($_POST['rememberme']) ? $_POST['rememberme'] : "";
        if(!empty($email))
        {
            $email = mysqli_real_escape_string($connection, $email )and htmlspecialchars($email);

        }
        if(!empty($password))
        {
            $password = mysqli_real_escape_string($connection, $password )and htmlspecialchars($password);

        }
        if(!empty($rememberme))
        {
            $rememberme = mysqli_real_escape_string($connection, $rememberme )and htmlspecialchars($rememberme);

        }
        $agent->email = $email;
        $agent->password = $password;
    }
    private function Authorize(Agent $agent){
            $_SESSION["isAuthorized"]=true;
            $_SESSION["fullPrivilege"]=$agent->fullPrivilege;
            $_SESSION["id"]=$agent->id;
            $_SESSION["username"]=$agent->username;
            $_SESSION["email"]=$agent->email;
            $_SESSION["name"]=$agent->username;
    }
    public function isAuthorize(){
        if(!isset($_SESSION["isAuthorized"])){
            header("Location: ".HTTP_HOST."login");
            exit();
        }
    }
}