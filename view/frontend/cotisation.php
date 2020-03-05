<?php $title ="Cotisation";?>

<?php ob_start();
echo $message;?>
    <a href="<?php echo PATH ?>/lions/?page=welcome">Retour</a>

     <div class="container" style="margin-top: 100px;
    margin-bottom: 300px;">
         <h1 class="mt-2 mb-5 text-center">Ma cotisation</h1>
         <div class="row justify-content-center mb-5">
             <img src="public/media/pp1.jpg" class="d-inline-block align-top ml-5 mr-3" id="toggle1" width="180" height="250" alt="Ange">

         </div>
         <h4 class="mt-2 text-center">Chers amis, c'est Ange, votre trésorier</h4>
         <h6 class="mt-2 text-center mb-5">Allez vite chercher votre carte de paimentet cliquez sur le bouton ci-dessous, sinon ...</h6>

            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" class="row justify-content-center" >
                <input type="hidden" name="cmd" value="_s-xclick" />
                <input type="hidden" name="hosted_button_id" value="BYQ9U7EFFDYD4" />
                <input type="submit" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donate_SM.gif" class="btn btn-primary btn-lg" value="Payer sa cotisation" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <!--<img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1" />-->
            </form>

     </div>
      <script>


          $(document).ready(function () {
              let i=true;
              function toggleImage(){
                  if(i===true){
                      $( "#toggle1" ).attr('src','public/media/lion.jpg');
                      i=false;
                  }else{
                      $( "#toggle1" ).attr('src','public/media/pp1.jpg');
                      i=true;
                  }

              };
              setInterval(toggleImage, 5000);
          })

      </script>
<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>