<?php
require_once "model/recaptchalib.php";
$title ="Nous contacter";?>

<?php ob_start();?>
    <div class="row justify-content-md-center mt-5 mb-5">
        <h1 class="align-items-center text-uppercase row">Nous contacter</h1>
    </div>
    <div class="row justify-content-md-center">
        <p class="align-items-center">Vous pouvez nous contacter par mail à l'adresse suivante : <a href="mailto:lionsnicedoyen@gmail.com">lionsnicedoyen@gmail.com</a></p>
    </div>

    <div class="row justify-content-md-center mb-5">
        <p class="align-items-center">Ou via le formulaire de contact.</p>
    </div>

    <div class="row justify-content-md-center myform" >
        <form method='POST' action=''.PATH.'/lions/?page=contact' class="col-sm-12 col-md-8 col-lg-6 align-items-center">
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

                    <textarea class="form-control" name=content rows="10" required>
                    </textarea>
                    <label class="content">Message </label>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="g-recaptcha col-6" data-sitekey="<?php echo PUBLIC_KEY; ?>"></div>
                    <input class="connect right btn btn-primary col-3" type='submit' name='contact'>
            </div>
            <?php if(isset($Result)){
                echo "<span>". $Result."</span>";
            }?>

        </form>
    </div>
    <script src="https://www.google.com/recaptcha/api.js"></script>

<?php $content = ob_get_clean();
//TODO verification catchpa?>
<?php require_once("template.php");?>