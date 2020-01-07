<?php
require_once('controller/frontend.php');
try {
    if (isset($_GET['page'])) {

        if ($_GET['page'] == 'log') {
            if (isset($_SESSION['id']) || isset($_COOKIE['id']))
            {
                header('Location://projet/lions/?page=dashboard');
            } elseif (isset($_POST['login']))
            {
                login_check($_POST['email'], $_POST['password']);
            }else
                {
                    login();
                }

        } elseif ($_GET['page'] == 'newlog')
        {
            subscribe();
        } elseif ($_GET['page'] == 'edit_user')
        {
            if (isset($_SESSION['id'])) {
                $id = $_SESSION['id'];
            } else {
                $id = $_COOKIE['id'];
            }
            //TODO redirection si pas de session ni cookie
            edit_user($id);
        } elseif ($_GET['page'] == 'dashboard') {
            if (isset($_SESSION['id']) || isset($_COOKIE['id'])) {
                if (isset($_SESSION['id'])) {
                    $id = $_SESSION['id'];
                } else {
                    $id = $_COOKIE['id'];
                }
                dashboard($id);
            } else {
                header('Location://projet/lions/');
            }
        } elseif ($_GET['page'] == 'article') {
            if (isset($_GET['article'])) {
                article($_GET['article']);
            } else {
                list_articles();
            }
        } elseif ($_GET['page'] == 'new_article') {
            write_article();
        } elseif ($_GET['page'] == 'edit_article') {
            edit_article();
        } elseif ($_GET['page'] == 'manage_events') {
            events_manager();
        }
        elseif ($_GET['page'] == 'logout') {
        logout();
    }
    } else {
        welcolme();
    }
}

catch(Exception $e){
    echo'Erreur:'.$e->getMessage();
}