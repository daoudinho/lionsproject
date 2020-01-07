<?php
session_start();
function login(){
    include_once ("view/frontend/login-form.php");
    if(isset($_GET['succeed'])){
        echo "<span>L'utilisateur a été correctement ajouté</span>";
    }
}
function logout()
{
    session_start();
    if(isset($_COOKIE['id']))
    {
        setcookie('id','',time() - 200,'/');
        unset($_COOKIE['id']);
    }
    if(isset($_SESSION['id']))
    {
        $_SESSION = array();
        session_destroy();
    }
    header('Location://projet/lions/');
}
function login_check($email, $password)
{
    include_once ("model/Login.php");
    $login= new Login();
    $login->log($email, $password);
    include_once ("view/frontend/login-form.php");

}
 function welcolme(){
    include_once ("view/frontend/accueil.php") ;
 }

 function list_articles()
 {
     include_once('model/ArticleManager.php');
     $aM = new ArticleManager();
     $articles= $aM->get_articles();
     include_once ('view/frontend/list_article_view.php');
 }

 function article($name)
 {
     include_once ('model/ArticleManager.php');
     $aM= new ArticleManager();
     $data=$aM->get_one_article($name);
     include_once ('view/frontend/article_view.php');
 }
 function subscribe()
 {
     include_once ('model/UserManager.php');
     if(isset($_POST['submit']))
     {
         $user = new User();
         $user->create_user($_POST['name'],$_POST['email'],$_POST['password'],$_POST['cpassword']);
     }
     include_once ('view/frontend/subscription_form.php');
 }

 function dashboard($id)
 {
     include_once ('model/User.php');
     $user = new User();
     $user_data=$user->get_user_by_id($id);
     include_once ('view/frontend/dashboard.php');
     //TODO page d'accueil adherent
     //lien vers drive
     //modifier son profil
 }

 function edit_user($id)
 {
     include_once ('model/User.php');
     $user = new User();
     $data = $user->get_user_by_id($id);
     if(isset($_POST['edit_user'])){
         if($_POST['newpassword']!= "" && $_POST['cnewpassword'] !="")
         {
             var_dump("a");
            $user->edit_user_password($id,$_POST['username'],$_POST['email'],$_POST['newpassword'],$_POST['cnewpassword'],$_POST['oldpassword'],$data['password']);
         }else
         {
             var_dump("b");
             $user->edit_user($id,$_POST['username'],$_POST['email'],$_POST['oldpassword'],$data['password'] );
         }
     }elseif(isset($_GET['action']) && $_GET['action']=='succeed')
     {
         echo "<span>Les modifications ont bien été prise en compte</span>";
     }
     include_once ('view/frontend/edit_info_user.php');
 }

function write_article()
{
    if(isset($_POST['new_article']))
    {
        include_once ('model/ArticleManager.php');
        $article = new ArticleManager();
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $last = htmlspecialchars($_POST['last']);
        $next = htmlspecialchars($_POST['next']);
        $article->create_event($title, $content, $last,$next);
    }else
        include_once ('view/frontend/article_form.php');

}

function edit_article()
{
    include_once ('model/ArticleManager.php');
    $article = new ArticleManager();
    $id = htmlspecialchars($_GET['id']);
    $data=$article->get_article($id);
    if(isset($_POST['edit_article']))
    {
        include_once ('model/ArticleManager.php');
        $article = new ArticleManager();
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $last = htmlspecialchars($_POST['last']);
        $next = htmlspecialchars($_POST['next']);
        $article->edit_event($title, $content, $last,$next,$id);
    }else
        include_once ('view/frontend/edit_article_form.php');
}

function events_manager()
{
    include_once ('model/ArticleManager.php');
    $managers = new ArticleManager();
    $articles_data=$managers->get_articles();
    if(isset($_POST['edit_events']))
    {
        include_once ('model/ArticleManager.php');
        $article = new ArticleManager();
        $last = htmlspecialchars($_POST['last']);
        $next = htmlspecialchars($_POST['next']);
        $article->edit_event($title, $content, $last,$next,$id);
    }else
        include_once ('view/frontend/events_manager_view.php');

}

