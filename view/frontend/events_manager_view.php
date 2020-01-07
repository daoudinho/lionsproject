<?php $title ="Modifier les évenements";?>

<?php ob_start();?>
    <ul>
        <?php
    foreach ($articles_data as $data)
    {
    ?>
        <li><?php echo $data['title'] ?> <form><label for="next"><input type="date" value="<?php echo $data['next_edition'] ?>" name="<?php $data['id'] ?>" id="next"></label></form><input type="submit" name="edit_date" value=" modifier la date"><a href="#">Modifier l'évenement</a></li>
<?php
    }
?>
    </ul>

<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>
