<?php
$title ="Reunions/Meetings";?>

<?php ob_start();?>
<div style="margin-bottom: 300px">
      <div class="container justify-content-md-center">
            <h1 class="text-uppercase text-center mb-5 mt-4">Invitation</h1><br>
            <p>Tout membre du Lions Club International du monde entier est cordialement invité à nos réunions et/ou manifestations
                  ainsi qu'à notre table ouverte .</p>
            <p>Nous tenons une réunion statutaire le deuxième mardi de chaque mois.</p>
            <p>Ainsi qu'un repas statutaire le 4ème mardi de chaque mois</p>

            <div class="row">
                  <p><a href="<?php echo PATH ?>/lions/?page=contact">Pour nous rejoindre il suffit de nous en informer par le biais du formulaire de contact.</a></p>

            </div>
      </div>
</div>


<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>
