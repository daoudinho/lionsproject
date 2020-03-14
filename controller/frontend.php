<?php
//session_start();
function login(){
      $message="";
      if(isset($_GET['succeed'])){
            $message= "<span>Inscription reussie !</span>";
      }
    include_once ("view/frontend/login-form.php");
}
function logout()
{
    //session_start();
    if(isset($_COOKIE['id']))
    {
        setcookie('id','',time() - 200,'/');
        unset($_COOKIE['id']);
    }
      if(isset($_COOKIE['admin']))
      {
            setcookie("admin",'',time() -200, '/');
            unset($_COOKIE['admin']);
      }
    if(isset($_SESSION['id']))
    {
        $_SESSION = array();
        session_destroy();
    }

    header('Location:'.PATH.'/lions/');
}
function loginCheck($email, $password)
{
    include_once ("model/Login.php");
    $login= new Login();
    $login->log($email, $password);
    $message="";
    include_once ("view/frontend/login-form.php");

}
 function welcome(){
      /*include_once ("model/ArticleManager.php");
      $list= new ArticleManager();
      $data=$list->getArticles();*/
      include_once ("model/HomepageManager.php");
      $homepage= new HomepageManager();
      $data=$homepage->getActifArticles();
      include_once ("view/frontend/accueil.php") ;
 }

 function listArticles()
 {
     include_once('model/ArticleManager.php');
     $aM = new ArticleManager();
     $articles= $aM->getArticles();
     include_once ('view/frontend/list_article_view.php');
 }

 function article($id)
 {
     include_once ('model/ArticleManager.php');
     $aM= new ArticleManager();
     $data=$aM->getArticle($id);
     $content= nl2br($data['content']);
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

 function dashboard($id,$compte, $comptem)
 {
     include_once ('model/User.php');
     $user = new User();
     $user_data=$user->get_user_by_id($id);
     include_once ('view/frontend/dashboard.php');
 }

 function editUser($id)
 {
     include_once ('model/User.php');
     $user = new User();
     $data = $user->get_user_by_id($id);
     if(isset($_POST['edit_user'])){

           $username = htmlspecialchars($_POST['username']);
           $email = htmlspecialchars($_POST['email']);
           $password = htmlspecialchars($_POST['newpassword']);
           $cpassword = htmlspecialchars($_POST['cnewpassword']);
           $oldpassword = htmlspecialchars($_POST['oldpassword']);

         if($password != "" && $cpassword !="")
         {
            $user->edit_user_password($id,$username,$email,$password,$cpassword, $oldpassword ,$data['password']);
         }else
         {
             $user->editUser($id,$username,$email, $oldpassword, $data['password'] );
         }
     }elseif(isset($_GET['action']) && $_GET['action']=='succeed')
     {
         echo "<span>Les modifications ont bien été prise en compte</span>";
     }
     include_once ('view/frontend/edit_info_user.php');
 }

function writeArticle()
{
    if(isset($_POST['new_article']))
    {
        include_once ('model/ArticleManager.php');
        $article = new ArticleManager();
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $last = htmlspecialchars($_POST['last']);
        if($last==""){
              $last=date("Y/m/d");
        }
        $next = htmlspecialchars($_POST['next']);
        if($next==""){
              $next=date("Y/m/d");
        }
        $article->createEvent($title, $content, $last,$next);
        header('Location:'.PATH.'/lions/?page=manage_events');
    }else
        include_once ('view/frontend/article_form.php');

}

function editArticle()
{
    include_once ('model/ArticleManager.php');
    $article = new ArticleManager();
    $id = htmlspecialchars($_GET['id']);
    $data=$article->getArticle($id);
      if(isset($_POST['actif_next'])){
            $actifNext=true;
      }else{
            $actifNext=0;
      }
      if(isset($_POST['actif_last'])){
            $actifLast=true;
      }else{
            $actifLast=0;
      }
    $message="";
    if(isset($_SERVER["REQUEST_METHOD"]) && isset($_FILES["photo"]))
      {
            include_once('model/uploadImage.php');
            $message = upload();
            if($message === "Votre fichier a été téléchargé avec succès."){
                  $article = new ArticleManager();
                  $message = $article->uploadImageDb($_FILES["photo"]["name"],$id);
                  header('Location:'.PATH.'/lions/?page=edit_article&id='.$id.'');
            }
      }
    if(isset($_POST['edit_article']))
    {
        $article = new ArticleManager();
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $last = htmlspecialchars($_POST['last']);
        $next = htmlspecialchars($_POST['next']);
        $message = $article->editEvent($title, $content, $last,$next,$id, $actifLast, $actifNext);
          header('Location:'.PATH.'/lions/?page=manage_events');
    }
    include_once ('view/frontend/edit_article_form.php');
}

function eventsManager()
{
    include_once ('model/ArticleManager.php');
    $managers = new ArticleManager();
    $articles_data=$managers->getArticles();
    if(isset($_GET['delete'])){
          $id=htmlspecialchars($_GET['delete']);
          $message=$managers->deleteArticle($id);
          header('Location:'.PATH.'/lions/?page=manage_events');
    }
      if(isset($_GET['actif'])){
            $actif=htmlspecialchars($_GET['actif']);
            if($actif==0) {
                  $actif = 1;
            }else{
                  $actif=0;
            }
            $id=htmlspecialchars($_GET['id']);
            $message=$managers->toggleEvent($id, $actif);
            header('Location:'.PATH.'/lions/?page=manage_events');
      }
    include_once ('view/frontend/events_manager_view.php');
}

function contact()
{
      include_once ('view/frontend/contact_form.php');
      include_once ('model/recaptchalib.php');
}

function sendContact($firstname, $lastname, $email, $mobile, $content, $captcha)
{
      include_once ('model/ContactManager.php');
      include_once ('model/recaptchalib.php');
      $Contact= new ContactManager();
      $Result=$Contact->capctha($captcha);
      if($Result != "OK")
      {
            $Result= $Contact->sendmail($firstname, $lastname, $email, $mobile, $content);
      }
      include_once ('view/frontend/contact_form.php');
}
function invitation()
{
      include_once ('view/frontend/invitation_view.php');
}
function editHomepage()
{
      if(isset($_POST['title'])){
            $title=htmlspecialchars($_POST['title']);
      }else{
            $title=null;
      }
      if(isset($_POST['content'])){
            $content=htmlspecialchars($_POST['content']);
      }else{
            $content=null;
      }
      if(isset($_POST['related-article'])){
            $relatedArticle=htmlspecialchars($_POST['related-article']);
      }else{
            $relatedArticle=null;
      }
      if(isset($_POST['id'])){
            $id=htmlspecialchars($_POST['id']);
      }else{
            $id=null;
      }
      if(isset($_POST['actif'])){
            $actif=true;
      }else{
            $actif=0;
      }
      if(isset($_GET['delete'])){
            $id2=$_GET['delete'];
      }

      include_once ('model/HomepageManager.php');
      $Homepage= new HomepageManager();

      if(isset($_SERVER["REQUEST_METHOD"]) && isset($_FILES["photo"]))
      {

            include_once('model/uploadImage.php');
            $message = upload();
            if($message === "Votre fichier a été téléchargé avec succès."){
                  $message = $Homepage->uploadImageDb($_FILES["photo"]["name"],$_POST['id']);
            }
      }elseif (isset($_GET['delete'])){
            $message=$Homepage->deleteArticle($id2);
      }elseif (isset($_POST['create'])){
            $Homepage->createEvent();
      }

      if (isset($_POST['news'])){
            $Homepage->editEvent($title, $content, $relatedArticle,$id, $actif);
      }
      header('Location:'.PATH.'/lions/?page=homepageManager');
}

function homepageManager()
{
      include_once ('model/ArticleManager.php');
      $managers = new ArticleManager();
      $articles_data=$managers->getArticles();

      include_once ('model/HomepageManager.php');
      $homepage = new HomepageManager();
      $homepage_data=$homepage->getArticles();

      include_once ('view/frontend/edit_homepage_view.php');
}

function adminUserManager()
{
      include_once ('model/User.php');
      $data = new User();
      $user_data=$data->getUsers();
      if(isset($_GET['action'])){
            if($_GET['action']=="succeed"){
                  $message="Modification prise en compte";
            }else{
                  $message="Modification non prise en compte";
            }
      }
      include_once ('view/frontend/admin_user_view.php');
}

function adminUserEdit(){
      include_once ('model/User.php');
      $id=htmlspecialchars($_POST['id']);
      $username=htmlspecialchars($_POST['username']);
      $email=htmlspecialchars($_POST['email']);
      if(isset($_POST['actif'])){
            $actif=true;
      }else{
            $actif=0;
      }
      if(isset($_POST['admin'])){
            $admin=true;
      }else{
            $admin=0;
      }
      $user = new User();
      $user->editUserAdmin($id,$username,$email,$actif, $admin);
}
function deleteUser(){
      include_once ('model/User.php');
      $id=htmlspecialchars($_GET['delete']);

      $user = new User();
      $user->delete_user($id);
}

function newPwd(){
      include_once ('model/User.php');
      $id=htmlspecialchars($_POST['id']);
      $email=htmlspecialchars($_POST['email']);
      $user = new User();
      $user->newPwd($id,$email);
}
function donation(){
      $message="";
      include_once ('view/frontend/cotisation.php');
}

function EditServices(){
      include_once ('model/OthersManager.php');
      $services = new OthersManager();
      $data=$services->getServices();
      if(isset($_POST['edit_services'])){
            $content= htmlspecialchars($_POST['content']);
            $services->editServices($content);
            header('Location:'.PATH.'/lions/?page=edit_services');
      }
      include_once ('view/frontend/edit_services.php');
}

function services(){
      include_once ('model/OthersManager.php');
      $services = new OthersManager();
      $data=$services->getServices();
      $data= nl2br($data["content"]);
      include_once ('view/frontend/services.php');
}

function historique(){
      include_once ('model/OthersManager.php');
      $story = new OthersManager();
      $data=$story->getStory();
      $dataContent= nl2br($data["content"]);
      include_once ('view/frontend/story.php');
}

function EditStory(){
      include_once ('model/OthersManager.php');
      $story = new OthersManager();
      $data=$services->getStory();
      if(isset($_POST['edit_story'])){
            $content= htmlspecialchars($_POST['content']);
            $story->editStory($content);
            header('Location:'.PATH.'/lions/?page=edit_story');
      }
      include_once ('view/frontend/edit_story.php');
}