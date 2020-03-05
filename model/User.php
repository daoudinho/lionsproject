<?php

include_once "DbConnect.php";
class User extends DbConnect
{
    public function create_user($name, $email, $password, $cpassword)
    {
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $password = htmlspecialchars($password);
        $cpassword = htmlspecialchars($cpassword);
        if($this->get_user($email) == null)
        {
            if ($password == $cpassword)
            {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $req = $this->getDb()->prepare('INSERT INTO users (username, password, email, admin) VALUES (:name, :password, :email,\'0\')');
                $req->execute(array(
                    "name" => $name,
                    "email" => $email,
                    "password" => $password
                ));
                include_once "ContactManager.php";
                $contact = new ContactManager();
                $contact->newUser($email,$name);
                header('Location:'.PATH.'/lions/?page=log&succeed=yes');
            }
            else
            {
                echo "<span>Bad password</span>";
            }
        } else
            {
                return ("Le mail existe déja");
            }

    }

      public function getUsers()
      {
            $req = $this->getDb()->query('SELECT * FROM users');
            $data=$req->fetchall();
            return $data;
      }
    public function get_user($email)
    {
        $req = $this->getDb()->prepare('SELECT * FROM users WHERE email= :email');
        $req->execute(array(
            "email" => $email,
        ));
        $data=$req->fetch();
        return $data;
    }

    public function get_user_by_id($id)
    {
        $req = $this->getDb()->prepare('SELECT * FROM users WHERE id= :id');
        $req->execute(array(
            "id" => $id,
        ));
        $data=$req->fetch();
        return $data;
    }

    public function editUser($id,$username, $email, $oldpassword, $stored)
    {
        $username = htmlspecialchars($username);
        $email = htmlspecialchars($email);
        $oldpassword = htmlspecialchars($oldpassword);
        if(password_verify($oldpassword, $stored)) {
            $req = $this->getDb()->prepare('UPDATE users SET username = :username, email = :email WHERE id = :id');
            $req -> execute(array(
                'username' => $username,
                'email' => $email,
                'id' => $id
            ));
            header('Location:'.PATH.'/lions/?page=edit_user&action=succeed');
        }else{
            echo "<span>Bad password</span>";
        }
    }

    public function edit_user_password($id,$username, $email,$password,$cpassword, $oldpassword, $stored)
    {
        $username = htmlspecialchars($username);
        $email = htmlspecialchars($email);
        $password = htmlspecialchars($password);
        $cpassword = htmlspecialchars($cpassword);
        $oldpassword = htmlspecialchars($oldpassword);
        if(password_verify($oldpassword, $stored))
        {
            if ($password == $cpassword)
            {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $req = $this->getDb()->prepare('UPDATE users SET username= :username,email=:email, password= :password
            WHERE id = :id');
                $req->execute(array(
                    'username'=>$username,
                    'email'=>$email,
                    'password'=>$password,
                    'id'=>$id
                ));
                header('Location:'.PATH.'/lions/?page=edit_user&action=succeed');
            }
        }
        else
        {
            echo "<span>Bad password</span>";
        }
    }


    /*public function logout()
    {
          //TODO effacer ts les cookies
        session_start();
        if($_COOKIE['id']){
            setcookie("id");
            unset($_COOKIE['id']);
        }
        if($_SESSION['id'])
        {
            session_unset();
        }
          if($_COOKIE['admin'])
          {
                setcookie("admin");
                unset($_COOKIE['admin']);
          }

    }*/
    public function delete_user($id)
    {
          $req = $this->getDb()->prepare('DELETE FROM users WHERE id=:id');
          $req->execute(array(
              'id'=> $id
          ));
          header('Location:'.PATH.'/lions/?page=adminUser&action=succeed');
    }


      public function editUserAdmin($id,$username,$email,$actif, $admin)
      {
                  $req = $this->getDb()->prepare('UPDATE users SET username = :username, email = :email, activate=:activate, admin=:admin WHERE id = :id');
                  $req -> execute(array(
                      'username' => $username,
                      'email' => $email,
                      'id' => $id,
                        'activate'=>$actif,
                        'admin'=>$admin
                  ));
                  header('Location:'.PATH.'/lions/?page=adminUser&action=succeed');
      }

      public function newPwd($id,$email)
      {
            $gpassword=$this->randomPassword();
            $password = password_hash($gpassword, PASSWORD_DEFAULT);
            $req = $this->getDb()->prepare('UPDATE users SET password = :password WHERE id = :id');
            $req->execute(array(
                "password" => $password,
                  "id"=> $id
            ));
            include_once 'ContactManager.php';
            $contact= new ContactManager();
            $contact->newPwd($email, $gpassword);
            header('Location:'.PATH.'/lions/?page=adminUser&action=succeed');

      }

      private function randomPassword() {
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array(); //remember to declare $pass as an array
            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
            for ($i = 0; $i < 8; $i++) {
                  $n = rand(0, $alphaLength);
                  $pass[] = $alphabet[$n];
            }
            return implode($pass); //turn the array into a string
      }
}