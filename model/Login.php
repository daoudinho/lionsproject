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

        $stored= $data["password"];
        $username= $data["username"];
        if(password_verify($password,$stored))
        {
            session_start();
            $_SESSION["id"]=$data["id"];
            if(isset($_POST["remember_me"]))
            {
                setcookie("id",$data["id"], time()+time()+365*24*3600,'/');
            }
            header("Location://projet/lions/?page=dashboard");

        }
        else {
            echo "<span>email / password incorrect</span>";
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



