<?php $title ="Lions Club Nice Doyen";?>

<?php ob_start();?>
    <div class="justify-content-lg-center container myform">
        <form method='POST' action='//projet/lions/?page=newlog' class="col s12 m8 l6 offset-l3 offset-m2 form-group ">

            <div class="row">
                <div class="col-lg-12">
                <label>Nom</label>
                <input type=text name=name class="form-control" minlength='3' maxlength='10' value="" required><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <label>Email</label>
                <input type='email' name=email value="" class="form-control" required><br>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6 col-sm-12">
                    <label>Password</label>
                    <input type=password name=password class="form-control" minlength='3' maxlength='10' value="" required><br>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label>Password confirmation</label>
                    <input type=password value="" class="form-control" name='cpassword' required><br>
                </div>
            </div>
            <div class="row justify-content-between">
                <input class="" type='submit' name='submit'>

                <a class="waves-effect waves-light btn-small right" href="//projet/lions/?page=log"><span>Déjà inscrit ?</span></a>
            </div>
        </form>
    </div>
<?php $content = ob_get_clean();?>
<?php include_once("template.php");?>