<?php $title ="Editer un évenement";?>

<?php ob_start();
if(isset($message)){
    ?><span><?php  echo $message?></span><?php
}
?>
<a href="<?php echo PATH ?>/lions/?page=manage_events">Retour</a>
<div class="container mt-5 mb-5">
    <h1 class="mt-2 mb-4 text-center">Editer une action</h1>
    <div class="row">
        <div class="col-9" >
                <form method='POST' action="<?=PATH?>/lions/?page=edit_article&id=<?php echo $data['id'] ?>" class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <label for="title">Titre</label>
                            <input type=text name=title class="form-control" minlength='3' maxlength='50' value="<?php echo $data['title']?>" id="title" required><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="content">Présentation</label>
                            <textarea type='text' name=content class="form-control" rows="10" id="content" required> <?php echo $data['content']?></textarea><br>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 col-sm-12">
                            <label for="last">Date de la derniere édition</label>
                            <input type="checkbox" class="ml-2" name="actif_last" <?php if($data['actif_last']== 1)echo "checked"; ?> >
                            <input type=date name=last class="form-control" value="<?php echo $data['last_edition']?>" id="last"><br>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <label for="next">Date de la prochaine édition</label>
                            <input type="checkbox" class="ml-2" name="actif_next" <?php if($data['actif_next']== 1)echo "checked"; ?> >
                            <input type=date name='next' value="<?php echo $data['next_edition']?>" class="form-control" id="next"><br>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <input class="btn btn-primary" type='submit' name='edit_article'>

                    </div>
                </form>
        </div>
        <div class="col-3 p-4" >
            <div class="row">
                <form action="<?=PATH?>/lions/?page=edit_article&id=<?php echo $data['id'] ?>" method="post" enctype="multipart/form-data">
                    <h5>Sélectionner une Image</h5>
                    <label for="fileUpload">Fichier:</label>
                    <input type="file" name="photo" id="fileUpload" required>
                    <p>Les images doivent être au format JPG, JPEG, PNG ou GIF. </p>
                    <input type="submit" name="file" value="Upload">
                </form>
            </div>
            <div class="row mt-5">
                <img src="upload/<?php echo $data['file'] ?>" alt="image de l'évenement" class="picpreview" style="max-width: 100%; max-height: 100px">
            </div>

        </div>
    </div>

</div>
<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>
