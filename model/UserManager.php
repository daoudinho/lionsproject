<?php
include_once "model/Login.php";

if(isset($_SESSION['name']) OR isset($_COOKIE['name']))
{
    header('Location: index.php');
}
else if(isset($_POST["login"]))
{
    $login= new Login();
    $login->log($_POST['email'], $_POST['password']);
}
else if(isset($_GET["status"]))
{
    echo "<span>User successfully created.</span>";
}
