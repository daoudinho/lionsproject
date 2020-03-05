<?php $title ="Nos Services";
?>

<?php ob_start();?>
<div class="container " style="margin-top: 50px;
    margin-bottom: 500px;">
      <h1 class="mb-5 text-center text-uppercase">Les services du Lions Club Nice Doyen</h1>
      <p>
            <?php echo $data ?>
      </p>
</div>

<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>
