<?php $title ="Se Connecter";?>

<?php ob_start();
echo $message;?>
    <div style="margin-top: 100px;
    margin-bottom: 300px;">
    <div class="row justify-content-md-center myform mt-5 mb-5"  >
        <form method='POST' action=''.PATH.'/lions/?page=log' class="col-sm-12 col-md-8 col-lg-6 align-items-center">
            <div class="row form-group">
                <div class="col s12">

                    <input class="form-control" type=text name=email value="" required>
                    <label class="emaillab">Email </label>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <input  class="form-control" type=password name=password minlength='3' maxlength='10' value="" required>
                    <label class="passlab">Password</label>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <label>
                    <input type="checkbox" name="remember_me" class="form-check-input" checked>
                        <span>Rester connecter</span>
                    </label>
                </div>
            </div>
            <div class="row justify-content-between">
                    <input class="connect left" type='submit' name='login'>
                    <a href="<?php echo PATH ?>/lions/?page=newlog" class="waves-effect waves-light btn-small right"><span>Pas encore inscrit ?</span></a>
            </div>
        </form>
    </div>
    </div>
<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>