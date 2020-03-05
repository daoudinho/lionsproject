<?php $title ="Lions Club Nice Doyen";?>

<?php ob_start();?>
<div style="margin-top: 100px;
    margin-bottom: 300px">
    <div class="justify-content-lg-center container myform mt-5 mb-5">
        <form method='POST' action=''.PATH.'/lions/?page=newlog' class="col s12 m8 l6 offset-l3 offset-m2 form-group ">

            <div class="row">
                <div class="col-lg-12">
                <label for="username">Nom d'utilisateur</label>
                <input type=text name=name class="form-control" id=username minlength='3' maxlength='10' value="" required><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <label for="email">Email</label>
                <input type='email' name=email id="email" value="" class="form-control" required><br>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6 col-sm-12">
                    <label for="password">Password</label>
                    <input type=password id="password" name=password class="form-control" minlength='5' maxlength='30' value="" required><br>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="cpassword">Password confirmation</label>
                    <input type=password id="cpassword" value="" class="form-control" name='cpassword' required><br>
                </div>
            </div>
            <div class="row justify-content-between">
                <input class="" type='submit' name='submit'>

                <a class="waves-effect waves-light btn-small right" href="<?php echo PATH ?>/lions/?page=log"><span>Déjà inscrit ?</span></a>
            </div>
        </form>
    </div>
</div>
<?php $content = ob_get_clean();?>
<?php include_once("template.php");?>