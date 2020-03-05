<?php $title ="Gerer la page d'accueil";?>

<?php ob_start();
$path = $rest = substr(PATH, 0, -1);
$path ="'.$path .'";
?>
    <a href="<?php echo PATH ?>/lions/?page=dashboard">Retour</a>


<div class="justify-content-md-center ml-3 mr-3 row">
    <h1 class="mt-2">Gérer la page d'acceuil</h1>

            <?php
            if( !empty($message) )
            {
                  echo '<p>',"\n";
                  echo "\t\t<strong>", htmlspecialchars($message) ,"</strong>\n";
                  echo "\t</p>\n\n";
            }
            ?>

            <div class="col-10 mb-2 mt-4">
                <p>Dans cet onglet, vous pouvez gerer la page d'accueil.</p>
                <p>Elle est composé de plusieurs news. Les news correspondent aux images qui défilent sur la page d'accueil du site. Une news = une image.</p>
                <p>Vous avez la possibilité de créer une news avec le bouton "Créer une news". Une fois celle-ci crée, elle apparaitra ci-dessous dans
                    la liste des news. Vous aurez alors la possibilité de l'éditer (Titre, texte, photo) de l'activer/desactiver ou de l'effacer.</p>
                <p>Quand une news n'est pas active, elle n'apparait pas sur la page d'accueil.</p>
                <p class="mb-4">
                Enfin l'onglet "Action" permet de relier la news avec une action. Cela aura pour effet de créer un lien cliquable vers l'action selectionée.</p>
                <form action='<?php PATH?>/lions/?page=edit_homepage' method="post">
                    <input type="submit" class="btn btn-primary btn-lg" value="Créer une News" name="create">
                </form>
      <?php
      $i=1;
      foreach ($homepage_data as $new)
      {?>
                <form action='<?php PATH?>/lions/?page=edit_homepage' method="post" enctype="multipart/form-data">
                  <div class="card mt-4">
                        <div class="card-header">
                              <h2>News <?php echo $i ?></h2>
                            <div class="form-check float-right">
                                <input type="checkbox" class="form-check-input" id="actif" name="actif" <?php if($new['actif']== 1)echo "checked"; ?>>
                                <label class="form-check-label" for="actif">Actif</label>
                            </div>
                        </div>
                        <div class="card-body row">
                              <div class="col-10">
                                    <div class="form-group col-12">
                                          <label for="title" >Titre</label>
                                          <input type="text" id="title" class="form-control" name="title" value="<?php echo  $new['title'] ?>"/>
                                            <input type="hidden" name="id" value="<?php echo $new['id'] ?>"/>
                                    </div>
                                    <div class="form-group col-12">
                                          <label for="title">Contenu</label>
                                          <textarea type="text" id="content" class="form-control" name="content"><?php echo  $new['content'] ?></textarea>
                                    </div>

                                    <div class="form-group col-12">
                                          <label for="selectArticles">Action</label>
                                          <select class="form-control" id="selectArticles" name="related-article">
                                                <option class="form-control" value="0"></option>
                                                <?php
                                                foreach ($articles_data as $article)
                                                {
                                                ?> <option class="form-control" value="<?php echo $article['id']?>" <?php if($new['article_id']==$article['id'])echo "selected" ?>><?php echo $article['title']?></option><?php
                                                }
                                                ?>
                                          </select>
                                    </div>

                                    <div class="col-12 mt-2 mb-4">
                                          <form action="'.PATH.'/lions/?page=edit_homepage" method="post" enctype="multipart/form-data">
                                                <h5>Sélectionner une Image</h5>
                                                <label for="fileUpload">Fichier:</label>
                                                <input type="file" name="photo" id="fileUpload">
                                              <p>Les images doivent être au format JPG, JPEG, PNG ou GIF. </p>
                                                <input type="submit" name="file" value="Upload">
                                          </form>
                                    </div>
                                  <div class="row justify-content-between m-2">
                                      <input type="submit" class="btn btn-primary" value="Valider" name="news" >
                                          <btn type="submit" class="btn btn-danger" value="Supprimer" name="delete" onclick="confirmation(<?=$new['id']?>,<?php echo $path ?>)">Supprimer</btn>
                                  </div>
                              </div>
                              <div class="col-2">
                                    <img src="upload/<?php echo $new['file'] ?>" alt="image de l'évenement" class="picpreview" style="max-width: 100%; max-height: 100px">
                              </div>
                        </div>
                  </div>
                </form>

            <?php
      $i++;}
      ?>
            </div>
</div>
<script type="text/javascript">
      function test(list){
          var numero = list.selectedIndex;
          var valeur = list.options[numero].value;
          var i = valeur;
          console.log(valeur)
      }
      function confirmation(id, path){
          if (confirm("Voulez-vous vraiment supprimer l'article ?")) {
              let path1=path.substr(1);
              let l=path1.length;
              l--;
              l--;
              let path3=path1.substr(0,l)
              let url= path3+"/lions/?page=edit_homepage&delete="+id;
              document.location.href=url;
          } else {
              console.log("annuler");
          }
      }

</script>

<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>