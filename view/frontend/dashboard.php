<?php $title ="Mon compte Lions Club Nice Doyen";
        $drive ="https://drive.google.com/drive/folders/1w0BNGf9ew2bNd4Z55ihdlDBPC5j7Ow-D?usp=sharing" ?>

<?php ob_start();?>
<div style="margin-top: 50px;
    margin-bottom: 300px;">
    <div class="container" >
        <h1 class="mt-5 mb-5">Bienvenue <?php echo $user_data['username'] ?></h1>
        <div class="m-5 row">
            <div class="m-3 row">
                <h3 class="col-12">Mon Compte</h3>
                <div class="col-12">
                    <a href="<?php echo PATH ?>/lions/?page=edit_user"><button type="button" class="btn btn-primary btn-lg">Modifier mon profil</button></a>
                    <a href="<?php echo $drive ?>" target="_blank"><button type="button" class="btn btn-primary btn-lg"> Mon drive</button></a>
                </div>
            </div>
    <?php if(isset($_COOKIE['admin']) || isset($_SESSION['admin'])){?>
            <div class=" m-3 row">
                <h3 class="col-12">Gestion du site</h3>
                <div class="col-12">
                    <a href="<?php echo PATH ?>/lions/?page=homepageManager"><button type="button" class="btn btn-primary btn-lg mt-3">Gestion de la page d'accueil</button></a>
                    <a href="<?php echo PATH ?>/lions/?page=edit_story"><button type="button" class="btn btn-primary btn-lg mt-3"> Gestion de "Qui sommes-nous ?"</button></a>
                    <a href="<?php echo PATH ?>/lions/?page=manage_events"><button type="button" class="btn btn-primary btn-lg mt-3"> Gestion des actions</button></a>
                    <a href="<?php echo PATH ?>/lions/?page=edit_services"><button type="button" class="btn btn-primary btn-lg mt-3"> Gestion des services</button></a>
                    <a href="<?php echo PATH ?>/lions/?page=adminUser" ><button type="button" class="btn btn-primary btn-lg mt-3" >Gestion des membres</button></a>
                </div>
            </div>
    <?php }; ?>
            <div class="m-3 row">
                <h3 class="col-12">Nombre de visiteurs: <?=$compte?></h3>
            </div>
            <div class="m-3 row">
                <h3 class="col-12">Nombre de visiteurs membres: <?=$comptem?></h3>
            </div>
        </div>

    </div>
</div>
<?php
$content = ob_get_clean();?>
<?php require_once("template.php");?>

