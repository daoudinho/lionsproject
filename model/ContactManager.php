<?php
class ContactManager
{
      public function capctha($captcha){
            $reCaptcha = new ReCaptcha(SECRET_KEY);
            if(isset($captcha)) {
                  $resp = $reCaptcha->verifyResponse(
                      $_SERVER["REMOTE_ADDR"],
                      $captcha
                  );
                  if ($resp != null && $resp->success) {return "OK";}
                  else {return "CAPTCHA incorrect";}
            }
      }
      public function sendmail($firstname, $lastname, $email, $mobile, $content){
            $header="MIME-Version: 1.0\r\n";
            $header.='From:"'.$firstname.'"<'.$email.'>'."\n";
            $header.='Content-Type:text/html; charset="utf-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';

            $message='
                  <html>
                      <body>
                          <div align="justify">
                              <h3>Un contact à laisser le message suivante sur le site internet</h3>
                              <br />
                              <p>De '.$firstname.' '. $lastname.':</p>
                              <p>Mail: '.$email.':</p>
                              <p>Tel: '.$mobile.':</p>
                              <p>'.$content.'</p>
                          </div>
                      </body>
                  </html>
                  ' ;

            mail("lionsnicedoyen@gmail.com",'contact',$message, $header);
            return "Votre message à été envoyé. Nous vous contacterons dans les plus brefs délais.";
      }
      //TODO mettre adresse des admins

      public function newPwd($email, $password){
            $header="MIME-Version: 1.0\r\n";
            $header.='From:"contactLionsClubNiceDoyen"<"contactLionsClubNiceDoyen@gmail.com">'."\n";
            $header.='Content-Type:text/html; charset="utf-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';

            $message='
                  <html>
                      <body>
                          <div align="justify">
                              <h3>Réinitialisation du mot de passe</h3>
                              <br />
                              <p>Vous avez demandé la réinitialisation de votre mot de passe.</p>
                              <p>Voici votre mot de passe temporaire: '.$password.'</p>
                              <a href="'.PATH.'/lions/?page=log"><p>Veuillez vous connecter avec celui-ci afin de le modifier.</p></a>
                          </div>
                      </body>
                  </html>
                  ' ;

            mail($email,'Réinitialisation du mot de passe',$message, $header);
            return "Votre message à été envoyé. Nous vous contacterons dans les plus brefs délais.";
      }
      public function newUser($email, $name){
            $header="MIME-Version: 1.0\r\n";
            $header.='From:"contactLionsClubNiceDoyen"<"contactLionsClubNiceDoyen@gmail.com">'."\n";
            $header.='Content-Type:text/html; charset="utf-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';

            $message='
                  <html>
                      <body>
                          <div align="justify">
                              <h3>Validation utilisateur</h3>
                              <br />
                              <p>'.$name.'vient de s\'inscrire avec l\'adresse :'.$email.'</p>
                              <p>Pour valider son inscription, veuillez vous rendre sur votre compte lions club
                                 nice doyen, rubrique \" <a href="'.PATH .'/lions/?page=adminUser">gerer les utilisateurs</a>\"."</p>
                          </div>
                      </body>
                  </html>
                  ' ;

            mail("daoudinho@hotmail.fr",'Nouvelle inscription',$message, $header);
            return "Le mail à été correctement envoyé";
      }
}
//Todo Corriger redirection liens
?>