<?php
require_once "model/recaptchalib.php";
$title ="Nous contacter";?>

<?php ob_start();?>

    <div class="row justify-content-center mt-sm-5 mb-sm-5">
        <h1 class="align-items-center text-uppercase row h1-content">Nous contacter</h1>
    </div>
    <div class="row justify-content-center">
        <p class="align-items-center txt-content">Vous pouvez nous contacter via le formulaire de contact suivant :</p>
    </div>

    <div class="row justify-content-center myform" >
        <form method='POST' action=''.PATH.'?page=contact' class="col-sm-12 col-md-8 col-lg-6 align-items-center">
            <div class="row form-group">
                <div class="col s6">

                    <input class="form-control" type=text name=firstname value="" required>
                    <label class="firstname">Nom </label>
                </div>
                <div class="col s6">

                    <input class="form-control" type=text name=lastname value="" required>
                    <label class="lastname">Prénom </label>
                </div>
            </div>


            <div class="row form-group">
                <div class="col s8">

                    <input class="form-control" type=text name=email value="" required>
                    <label class="email">Email </label>
                </div>
                <div class="col s4">

                    <input class="form-control" type=text name=mobile value="" required>
                    <label class="mobile">Mobile/Fixe </label>
                </div>
            </div>

            <div class="row form-group">
                <div class="col s12">

                    <textarea class="form-control" name=content rows="10" cols="20" required></textarea>
                    <label class="content">Message </label>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="g-recaptcha col-6" data-sitekey="<?php echo PUBLIC_KEY; ?>"></div>
                    <input class="connect right btn btn-primary col-3" type='submit' name='contact' value="Valider">
            </div>
            <?php if(isset($Result) && $Result!="OK"){
                echo "<span>". $Result."</span>";
            }?>

        </form>
    </div>
    <script src="https://www.google.com/recaptcha/api.js"></script>

<?php $content = ob_get_clean();
//TODO verification catchpa?>
<?php require_once("template.php");?>