<?php $title =$data["title"];
    if($data['actif_last'] == 1) {
          $statutLast = "<p >Date de la dernière édition: ". $data['last_edition']."</p>";
    }else{
          $statutLast="";
    }

    if($data['actif_next'] == 1) {
          $statutNext ="<p >Date de la prochaine édition: ". $data['next_edition']."</p>";
    }else{
          $statutNext="";
    }


?>

<?php ob_start();?>
<div class="container " style="margin-top: 50px;
    margin-bottom: 200px;">
    <h1><?php echo $data["title"] ?></h1>
      <?=$statutLast?>
      <?=$statutNext?>
    <!--<div class="row">
        <div class="col-6">
            <p>
                  <?php echo $content ?>
            </p>
        </div>
        <div class="col-6">
            <img src="upload/<?php echo $data['file'] ?>" alt="<?php echo $data['file'] ?>" style="max-width: 100%">
        </div>
    </div>-->
    <p><img src="upload/<?php echo $data['file'] ?>" alt="<?php echo $data['file'] ?>" style="max-width: 40%; float:right; margin-left:15px"><?php echo $content ?> </p>
</div>

<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>
