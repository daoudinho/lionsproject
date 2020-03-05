<?php $title ="Modifier les évenements";?>

<?php ob_start();

$path = $rest = substr(PATH, 0, -1);
$path ="'.$path .'";?>
<a href="<?php echo PATH ?>/lions/?page=dashboard">Retour</a>
        <div class="justify-content-md-center ml-3 mr-3 row" id="test">
            <h1 class="">Les Actions du Lions club nice Doyen</h1>
        </div>
    <div class="justify-content-md-center ml-3 mr-3 row">
        <div class="col-10 mt-4" >
            <p class="mb-4">Dans cet onglet, vous pouvez gérer les grandes actions du Lions club Nice Doyen.
                Vous avez la possibilité de créer une nouvelle action avec le bouton "Créer une action".
                Une fois celle-ci crée, elle apparaitra ci-dessous dans la liste des actions. Vous aurez alors la possibilité de l'éditer (Titre, texte, date, photo) de l'activer/desactiver
                ou de l'effacer.</p>
            <a href="<?php echo PATH ?>/lions/?page=new_article"><button type="button" class="btn btn-primary btn-lg" >Créer une Action</button></a>
        </div>
    </div>
        <div class="justify-content-md-center ml-3 mr-3 mb-5 row">
        <?php
    foreach ($articles_data as $data)
    {
          if($data['actif'] == 1) {
                $statut = "Desactiver";
                $btn= "bg-danger";
              }else{
                  $statut="Activer";
                $btn= "bg-success";
                }
          if($data['actif_last'] == 1) {
                $statutLast = "<p class=\"card-text col-12\">Date de la dernière édition: ". $data['last_edition']."</p>";
          }else{
                $statutLast="";
          }

          if($data['actif_next'] == 1) {
                $statutNext ="<p class=\"card-text col-12\">Date de la prochaine édition: ". $data['next_edition']."</p>";
          }else{
                $statutNext="";
          }
    ?>
                <div class="col-10 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="row w-100 justify-content-between">
                              <h2 class="ml-4"><?php echo $data['title']?></h2>
                                <a class="float-right" href="<?=PATH ?>/lions/?page=manage_events&actif=<?=$data['actif']?>&id=<?=$data['id']?>"><btn class="btn <?=$btn ?>"><?=$statut ?></btn></a>
                            </div>
                        </div>
                        <div class="card-body row">
                            <div class="col-10">
                                <h5 class="card-title text-truncate col-12 mb-4"><?php echo $data['content']?></h5>
                                  <?=$statutLast?>
                                  <?=$statutNext?>

                                  <?php
                                  if( !empty($message) )
                                  {
                                        echo '<p>',"\n";
                                        echo "\t\t<strong>", htmlspecialchars($message) ,"</strong>\n";
                                        echo "\t</p>\n\n";
                                  }
                                  ?>
                                <div class="row">
                                    <a href="<?php echo PATH ?>/lions/?page=edit_article&id=<?php echo $data['id'] ?>" class="btn btn-primary m-2">Editer</a>
                                    <btn type="submit" class="btn btn-danger m-2" value="Supprimer" name="delete" onclick="confirmation(<?=$data['id']?>,<?php echo $path ?>)">Supprimer</btn>
                                </div>


                            </div>
                            <div class="col-2">
                                <img src="upload/<?php echo $data['file']?>" alt="image de l'évenement" class="picpreview" style="max-width: 100%; max-height: 100px">
                            </div>
                        </div>
                    </div>
                </div>
<?php
    }
?>
            <script type="text/javascript">
                function confirmation(id, path){
                    if (confirm("Voulez-vous vraiment supprimer l'article ?")) {
                        let path1=path.substr(1);
                        let l=path1.length;
                        l--;
                        l--;
                        let path3=path1.substr(0,l)
                        let url= path3+"/lions/?page=manage_events&delete="+id;
                        document.location.href=url;
                    } else {
                        console.log("annuler");
                    }
                }

            </script>
        </div>

<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>
