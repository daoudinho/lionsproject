<?php
require_once('controller/frontend.php');
include_once ("config.php");
try {
    if (isset($_GET['page'])) {

          //Page with log require
          if (isset($_SESSION['id']) || isset($_COOKIE['id'])) {
                //if session is open send id by session
                if (isset($_SESSION['id'])) {
                      $id = $_SESSION['id'];
                }
                //else send id by cookie
                else {
                      $id = $_COOKIE['id'];
                }

                // path if is admin

                if((isset($_COOKIE['admin']) && $_COOKIE['admin']==1) || (isset($_SESSION['admin']) && $_SESSION['admin']==1)){
                      //if path to the form to create articles
                      if ($_GET['page'] == 'new_article') {
                            writeArticle();
                            exit();
                      }
                            //if path to the form to edit articles
                      elseif ($_GET['page'] == 'edit_article') {
                            editArticle();
                            exit();
                      }
                            //if path to article dashboard
                      elseif ($_GET['page'] == 'manage_events') {
                            eventsManager();
                            exit();
                      }
                      elseif ($_GET['page'] == 'edit_homepage') {
                            editHomepage();
                            exit();
                      }
                      // path to the dashboard homepage article
                      elseif ($_GET['page'] == 'homepageManager') {
                            homepageManager();
                            exit();
                      }
                      // path to the admin manager page
                      elseif ($_GET['page'] == 'adminUser'){
                            if(isset($_POST['editadminuser'])){
                                  adminUserEdit();
                            }elseif (isset($_POST['newMp'])){
                                  newPwd();
                            }elseif (isset($_GET['delete'])){
                                  deleteUser();
                            }
                            adminUserManager();
                            exit();
                      }
                      // path to the services manager page
                      elseif ($_GET['page'] == 'edit_services') {
                            editServices();
                            exit();
                      }
                      // path to the services manager page
                      elseif ($_GET['page'] == 'edit_story') {
                            editStory();
                            exit();
                      }
                }
                // if chemin pour page identification
                if ($_GET['page'] == 'log') {
                      //if déja log avec session ou cookie
                            header('Location:'.PATH .'/lions/?page=dashboard');
                      }
                //if path to edit user data
                elseif ($_GET['page'] == 'edit_user') {
                      editUser($id);
                      exit();
                }

                //if path to the user dashboard
                elseif ($_GET['page'] == 'dashboard') {
                      dashboard($id);
                      exit();
                }


                //if path to the logout
                elseif ($_GET['page'] == 'logout') {
                      logout();
                      exit();
                }
          }
          //page without log require

          // if chemin pour page identification
          if ($_GET['page'] == 'log') {
                //if en cours de connexion
                if (isset($_POST['login'])) {
                      loginCheck($_POST['email'], $_POST['password']);
                } //if souhaite se connecter
                else {
                            login();
                      }
          }//if subscription path
          elseif ($_GET['page'] == 'newlog') {
                subscribe();
          }

          //if path to the articles
          elseif ($_GET['page'] == 'article') {
                if (isset($_GET['article'])) {
                      article($_GET['article']);
                } else {
                      listArticles();
                }
          }

          //path to contact page
          elseif ($_GET['page'] == 'contact') {
                if(isset($_POST['contact'])){
                      $firstname=htmlspecialchars($_POST['firstname']);
                      $lastname=htmlspecialchars($_POST['lastname']);
                      $email=htmlspecialchars($_POST['email']);
                      $mobile=htmlspecialchars($_POST['mobile']);
                      $content=htmlspecialchars($_POST['content']);
                      sendContact($firstname, $lastname, $email, $mobile, $content, $_POST["g-recaptcha-response"]);
                }
                contact();
          }

          //path to invitation page
          elseif ($_GET['page'] == 'invitation') {
                invitation();
          }
          //path to invitation page
          elseif ($_GET['page'] == 'welcome') {
                welcome();
          }
          //path to services page
          elseif ($_GET['page'] == 'services') {
                services();
          }
          //path to "qui sommes nous" page
          elseif ($_GET['page'] == 'historique') {
                historique();
          }
             //path to paypal donation
          elseif ($_GET['page'] == 'cotisation') {
                historique();
          }
          //if there is no path
          else {
                header('Location:'.PATH.'/lions/?page=welcome');
          }

    }
    else {
          header('Location:'.PATH.'/lions/?page=welcome');
    }

}
catch(Exception $e){
    echo'Erreur:'.$e->getMessage();
}

//TODO Gestion de la page d'accueil
