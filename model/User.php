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
                $entetes = "From : khaoulani.laurent@gmail.com\n";
                mail("daoudinho@hotmail.fr","Validation utilisateur",$name." vient de s'inscrire avec l'adresse ".$email.". Pour valider son inscription, veuillez vous rendre sur votre compte lions club
                nice doyen, rubrique \"gerer les utilisateurs\".",$entetes);
                header('Location://projet/lions/?page=log&succeed=yes');
            }
            else
            {
                echo "<span>Bad password</span>";
            }
        } else
            {
                $error="Le mail existe déja";
                return $error;
            }

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

    public function edit_user($id,$username, $email, $oldpassword, $stored)
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
            //TODO MAJ COOKIE ET SESSION
            header('Location://projet/lions/?page=edit_user&action=succeed');
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
                //TODO MAJ COOKIE ET SESSION
                header('Location://projet/lions/?page=edit_user&action=succeed');
            }
        }
        else
        {
            echo "<span>Bad password</span>";
        }
    }


    public function logout()
    {
        //TODO logout
    }
    public function delete_user()
    {
        //TODO requete delete user
    }
}