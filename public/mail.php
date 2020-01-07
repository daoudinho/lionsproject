<?php
ini_set( 'display_errors', 1 );

error_reporting( E_ALL );

$from = "daoudinho@hotmail.fr";

$to = "khaoulani.laurent@gmail.com";

$subject = "Confirmation inscription";

$message = " Un nouvel utilisateur vient de s'inscrire avec l'adresse. Veuillez vous rendre sur votre compte lions club
                nice doyen, rubrique \"gerer les utilisateurs\". pour valider son inscription";

$headers = "From:" . $from;

mail($to,$subject,$message, $headers);

echo "L'email a été envoyé.";