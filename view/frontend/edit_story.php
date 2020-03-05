<?php
$title ="Modifier les services";?>

<?php ob_start();?>
<a href="<?php echo PATH ?>/lions/?page=dashboard">Retour</a>
<div class="justify-content-lg-center container myform" style="margin-bottom: 200px">
      <h1 class="mt-2 mb-4 text-center text-uppercase">Editer les Services</h1>
      <form method='POST' action="<?=PATH?>/lions/?page=edit_story" class="col s12 m8 l6 offset-l3 offset-m2 form-group ">
            <p class="mb-4">Dans cet onglet, vous pouvez gérer les informations qui seront affichées dans l'onglet "Qui sommes-nous ?".</p>
            <!--<div class="row">
                  <div class="col-lg-12">
                        <label for="title">Titre</label>
                        <input type=text name=title class="form-control" minlength='3' maxlength='50' value="" id="title" required><br>
                  </div>
            </div>-->
            <div class="row">
                  <div class="col-lg-12">
                        <label for="content">Contenu</label>
                        <textarea type='text' name=content value="" class="form-control" rows="10" id="content" required><?=$data['content']?></textarea><br>
                  </div>
            </div>
            <!--<div class="row">

                  <div class="col-lg-6 col-sm-12">
                        <label for="last">Date de la derniere édition</label>
                        <input type=date name=last class="form-control" value=""  id="last"><br>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                        <label for="next">Date de la prochaine édition</label>
                        <input type=date name='next'  class="form-control" value="" id="next"><br>
                  </div>
            </div>-->
            <div class="row justify-content-between">
                  <input class="btn btn-primary" type='submit' name='edit_story'>

            </div>
      </form>
</div>
<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>
