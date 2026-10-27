<?php
$title ="Reunions/Meetings";?>

<?php ob_start();?>
<div>
      <div class="container justify-content-center">
            <h1 class="text-uppercase text-center mb-5 mt-4 h1-content">Invitation</h1><br>
<!--            <p class="txt-content">Tout membre du Lions Club International du monde entier est cordialement invité à nos réunions et/ou manifestations-->
<!--                  ainsi qu'à notre table ouverte .</p>-->
<!--          <br><b class="h1-content">Reunions du club</b></p>-->
<!--          <p class="txt-content">- 2 ° Mardi du mois à 19:30 au restaurant" Le Ligure " 15 rue Biscarra  à NICE</p>-->
<!--          <p class="txt-content">- 4 ° Mardi du mois à 19:30 (Dîner avec conjoints dans un restaurant niçois différent chaque fois)</p>-->
<!--          <p class="txt-content">- tous les mardi midi , table ouverte au restaurant " L’Authentic " 18 rue Biscarra à Nice , téléphone 04 93 62 48 88,  où nous vous accueillerons avec plaisir.</p>-->
            <?php echo $data ?>
            <div class="row">
                  <p class="mt-5"><a href="<?php echo PATH ?>?page=contact" class="txt-content">Pour nous rejoindre il suffit de nous en informer par le biais du "formulaire de contact" et nous vous indiquerons l’adresse du restaurant par retour de mail.</a></p>
            </div>
      </div>
</div>


<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>
Reunions du club

 

