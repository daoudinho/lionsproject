<?php
$title ="Modifier les services";?>

<?php ob_start();?>
<a href="<?php echo PATH ?>?page=dashboard">Retour</a>
<div class="justify-content-lg-center container myform" style="margin-bottom: 200px">
      <h1 class="mt-2 mb-4 text-center text-uppercase">Editer "Lions de passage"</h1>
      <form method='POST' action="<?=PATH?>?page=edit_invitation" class="col s12 m8 l6 offset-l3 offset-m2 form-group ">
            <p class="mb-4">Dans cet onglet, vous pouvez gérer les informations qui seront affichées dans l'onglet "Lions de passage".</p>
            <div class="row">
                  <div class="col-lg-12">
                        <label for="content">Contenu</label>
                        <textarea type='text' name=content value="" class="form-control" rows="10" id="content" required><?=$data['content']?></textarea><br>
                  </div>
            </div>
            <div class="row justify-content-between">
                  <input class="btn btn-primary" type='submit' name='edit_invitation' value="Editer">
            </div>
      </form>
      <?php include_once("view/frontend/tuto_mise_en_page.php")?>
</div>
<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>
