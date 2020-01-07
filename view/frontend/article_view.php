<?php $title =$data["title"];?>

<?php ob_start();?>
    <h1><?php echo $data["title"] ?></h1>
    <img src="public/media/img_<?php echo $data['id'] ?>.jpg" alt="Les membres du lions club nice doyen avec des enfants">
    <p>
        <?php echo $data["content"] ?>
    </p>
<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>
