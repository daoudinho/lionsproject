<?php
$title ="Reunions/Meetings";?>

<?php ob_start();?>
<div style="margin-bottom: 300px">
      <div class="container justify-content-md-center">
            <h1 class="text-uppercase text-center mb-5 mt-4">Invitation</h1><br>
            <p>Tout membre du Lions Club International du monde entier est cordialement invité à nos réunions et/ou manifestations
                  ainsi qu'à notre table ouverte .</p>
          <br><b>Reunions du club</b></p>
          <p>- 2 ° Mardi du mois à 19:30 (Apéritif)</p>
          <p>  chez GIGI quai des deux Emmanuel 06300 NICE</p>
          <p>- 4 ° Mardi du mois à 19:30 (Dîner avec conjoints dans un restaurant niçois différent chaque fois)</p>
          <p>  - tous les mardi midi , table ouverte dans un restaurant niçois où nous vous accueillerons avec plaisir.</p>

            <div class="row">
                  <p><a href="<?php echo PATH ?>?page=contact">Pour nous rejoindre il suffit de nous en informer par le biais du "formulaire de contact" et nous vous indiquerons l’adresse du restaurant par retour de mail.</a></p>

            </div>
      </div>
</div>


<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>
