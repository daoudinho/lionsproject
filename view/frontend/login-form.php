<?php
require_once "model/recaptchalib.php";
$title ="Se Connecter";?>

<?php ob_start();
echo $message;?>
    <div style="max-height: 100%" class="container">
        <a href="<?php echo PATH ?>?page=newlog" class="login-txt"><p class="text-right text-primary">Pas encore inscrit ?</p></a>

        <div class="justify-content-center myform mt-5 mb-5"  >
            <form method="POST" action="<?=PATH ?>?page=log" class="col-12 m-3 align-items-center">
                <div class="row form-group">
                    <div class="col s12">

                        <input class="form-control" type=text name=email value="" required>
                        <label class="emaillab">Email </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <input  class="form-control" type=password name=password minlength='3' maxlength='30' value="" required>
                        <label class="passlab">Password</label>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="">
                        <label>
                        <input type="checkbox" name="remember_me" class="form-check-input ml-3" checked>
                            <span class="login-txt ml-5">Rester connecté</span>
                        </label>
                    </div>

                </div>
                <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="g-recaptcha col-lg-6 col-md-6 col-sm-6 m-md-2 m-sm-2" data-sitekey="<?php echo PUBLIC_KEY; ?>"></div>
                    <input class="connect col-lg-4 col-md-12 col-sm-12  m-md-2 m-sm-2" type='submit' name='login' value="Valider"
                </div>
              <?php if(isset($Result) && $Result!="OK"){
                    echo "<span>". $Result."</span>";
              }?>
            </form>
    </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js"></script>
<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>