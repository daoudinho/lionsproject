<?php $title ="Nos Services";
?>

<?php ob_start();?>
<div class="container txt-content " style="margin-top: 50px">
      <h1 class="mb-5 text-center text-uppercase h1-content">Qui sommes-nous ?</h1>
      <p class="txt-content">
            <?php echo $dataContent ?>
      </p>
</div>

<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>
