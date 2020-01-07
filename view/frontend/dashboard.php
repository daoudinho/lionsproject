<?php $title ="Mon compte Lions Club Nice Doyen";?>

<?php ob_start();?>
<div class="container">
    <h1>Bienvenue <?php echo $user_data['username'] ?></h1>
    <a href="//projet/lions/?page=edit_user">Modifier mon profil</a>
    <a href="//projet/lions/?page=manage_events"> Gestion des actions</a>
    <a href="#">Aller sur mon drive</a>
<?php
//todo liens vers drive
$content = ob_get_clean();?>
<?php require_once("template.php");?>

