<?php
//session_start();
include_once ("bdd-connect.php");


if((isset($_SESSION["admin"]) && $_SESSION["admin"]==1) || (isset($_COOKIE["admin"]) && $_COOKIE["admin"]==1))
{

    if(isset($_SESSION["admin"]) && $_SESSION["admin"]==1){
        $name=$_SESSION['name'];
        $email=$_SESSION["email"];
    }else if(isset($_COOKIE["admin"]) && $_COOKIE["admin"]==1){
    $name=$_COOKIE['name'];
    $email=$_COOKIE["email"];
    }

    include_once "menu.php";
    if(isset($_GET['result']) && $_GET['result'] == "valid")
    {
        echo "<span> c'est bon !</span>";
    }

?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
         <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="style.css">
        <title>Admin</title>
    </head>
    <body>
    <h1 class="center-align">Admin page</h1>
    <div class="row formulaire">
        <div class="col l8 m10 s12 offset-l2 offset-m1">
            <div class="row">
               <a href="manage-users.php" class="left-align col l4 m4 s10"><span>Manage Users</span></a>
                <a href="manage-products.php" class="center-align col l4 m4 s10"><span>Manage Products</span></a>
               <a href="manage-categories.php" class="right-align col l4 m4 s10"><span>Manage Categories</span></a>
            </div>
        </div>
    </div>
    </body>
    </html>


    <?php

}else{
    header("Location:index.php");
}
?>