<?php $title ="Editer mes infos";?>

<?php ob_start();?>
    <div class="justify-content-lg-center container myform">
        <form method='POST' action='//projet/lions/?page=edit_user' class="col s12 m8 l6 offset-l3 offset-m2 form-group ">

            <div class="row">
                <div class="col-lg-12">
                    <label>Nom</label>
                    <input type=text name=username class="form-control" minlength='3' maxlength='10' value="<?php echo $data['username'] ?>" required><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label>Email</label>
                    <input type='email' name=email value="<?php echo $data['email'] ?>" class="form-control" required><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label>Mot de Passe</label>
                    <input type='password' name=oldpassword value="" class="form-control" required><br>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6 col-sm-12">
                    <label>Nouveau Mot de Passe</label>
                    <input type=password name=newpassword class="form-control" minlength='5' maxlength='30' value=""><br>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label>Confirmation Nouveau Mot de Passe</label>
                    <input type=password value="" class="form-control" name='cnewpassword' minlength='5' maxlength='30'><br>
                </div>
            </div>
            <div class="row justify-content-between">
                <input class="" type='submit' name='edit_user' value="Valider">
            </div>
        </form>
    </div>
<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>