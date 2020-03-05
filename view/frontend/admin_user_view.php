<?php $title ="Administration des membres";?>

<?php ob_start();?>
      <a href="<?php echo PATH ?>/lions/?page=dashboard">Retour</a>
        <?php
        $path = $rest = substr(PATH, 0, -1);
        $path ="'.$path .'";
        if( !empty($message) )
        {
              echo '<p>',"\n";
              echo "\t\t<strong>", htmlspecialchars($message) ,"</strong>\n";
              echo "\t</p>\n\n";
        }
        ?>
    <div class="justify-content-md-center ml-3 mr-3 row" id="test">
        <h1 class="mt-2 text-center">Gérer les Membres</h1>
    </div>
      <div class="justify-content-md-center ml-3 mr-3 row">


            <div class="col-10 mb-2 mt-2">

                  <?php
                  foreach ($user_data as $user)
                  {?>
                        <form action='<?php PATH?>/lions/?page=adminUser' method="post">
                              <div class="card mt-4">
                                    <div class="card-header">
                                        <div class="row justify-content-between">
                                            <h2 class="align-middle ml-4"><?php echo $user['username'] ?></h2>
                                            <div class="mr-4">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="actif" name="actif" <?php if($user['activate']== 1)echo "checked"; ?>>
                                                    <label class="form-check-label" for="actif">Actif</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="admin" name="admin" <?php if($user['admin']== 1)echo "checked"; ?>>
                                                    <label class="form-check-label" for="admin">Admin</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body row">
                                          <div class="col-12">
                                                <div class="form-group col-12">
                                                      <label for="username" >Nom d'utilisateur</label>
                                                      <input type="text" id="username" class="form-control" name="username" value="<?php echo  $user['username'] ?>"/>
                                                      <input type="hidden" name="id" value="<?php echo $user['id'] ?>"/>
                                                </div>
                                                <div class="form-group col-12">
                                                      <label for="email">E-Mail</label>
                                                      <input type="email" id="email" class="form-control" name="email" value="<?php echo  $user['email'] ?>"/>
                                                </div>
                                                <div class="row justify-content-between m-2">
                                                      <input type="submit" class="btn btn-primary" value="Valider" name="editadminuser" >
                                                    <input type="submit" class="btn btn-primary" value="Réinitialiser le mot de passe" name="newMp" >
                                                      <btn type="submit" class="btn btn-danger" value="Supprimer" name="delete" onclick="confirmation(<?=$user['id']?>,<?php echo $path; ?>)">Supprimer</btn>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </form>

                        <?php
                  }
                  ?>
            </div>
      </div>
      <script type="text/javascript">
          function confirmation(id, path){
              if (confirm("Voulez-vous vraiment supprimer l'article ?")) {
                  let path1=path.substr(1);
                  let l=path1.length;
                  l--;
                  l--;
                  let path3=path1.substr(0,l)
                  let url= path3+"/lions/?page=adminUser&delete="+id;
                  document.location.href=url;
              } else {
                  console.log("annuler");
              }
          }

      </script>

<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>