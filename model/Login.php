<?php
include_once "User.php";
class Login
{
    private $user;

    function __construct()
    {
        $this->user = new User();
    }

    function log($email, $password){
        $data=$this->getUser()->get_user($email);
        if($data==null){
              return "email / password incorrect";
        }

        $stored= $data["password"];
        $username= $data["username"];
        if($data['activate']==0)
        {
              echo "<span>Votre compte n'est pas encore activé</span>";
        }elseif(password_verify($password,$stored))
        {
            //session_start();
            $_SESSION["id"]=$data["id"];
            if($data['admin']==true){
                    $_SESSION["admin"]=$data["admin"];
                    setcookie("admin",true, time()+time()+365*24*3600,'/');
              }

            if(isset($_POST["remember_me"]))
            {
                setcookie("id",$data["id"], time()+time()+365*24*3600,'/');
            }
            header('Location:'.PATH.'/?page=dashboard');


        }
        else {
            echo "<span>email / password incorrect</span>";
            return "email / password incorrect";
        }
        if(isset($_GET["status"]))
        {
            echo "<span>User successfully created.</span>";
        }
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }


}



