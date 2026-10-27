<?php $title ="Lions Club Nice Doyen";?>

<?php ob_start();?>
   <!--1--> <div class="container-fluid col-12">
    <!--2-->  <div class="row justify-content-center mb-2">
        <!--3-->   <div class="col-lg-12">
            <!--4-->    <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                          <?php
                                $i=0;
                                foreach ($data as $new){
                                      $actives='';
                                      if($i==0){
                                            $actives='active';
                                      }
                          ?>
                            <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>
                        <?php $i++; } ?>
                    </ul>
                    <!-- slideshow -->
                <!--5-->    <div class="carousel-inner">
                                <?php
                               $i=0;
                               foreach ($data as $new){
                                   $actives='';
                                     $content= nl2br($new['content']);
                                   if($i==0){
                                       $actives='active';
                                   }
                                   ?>
                            <!--6-->   <div class="carousel-item justify-content-center  <?= $actives; ?>">
                                             <img src="upload/<?php echo $new['file'] ;?>" alt="Second slide" id="slide" class="mx-auto d-block">
                                       <?php if($new['article_id'] !=0){?><a href="<?= PATH ?>?page=article&article=<?=$new['article_id']?>"><?php }?>

                                               <div class="carousel-caption">
                                                    <h4 class="white-font-text1"><i class="fas fa-hand-pointer"></i> <?php echo $new['title']?></h4>
                                                    <p class="white-font-text"><?php echo $content?></p>
                                               </div>
                                     <?php if($new['article_id'] !=0){?></a><?php }?>
                            <!--6-->   </div>
                                     <?php $i++;} ?>
                <!--5-->    </div>
                <!-- controller -->
                        <a class="carousel-control-prev ccp-btn" href="#demo" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #1a16ff; height: 50px"></span>
                        </a>
                        <a class="carousel-control-next ccp-btn" href="#demo" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #1a16ff; height: 50px" ></span>
                        </a>
            <!--4--> </div>
        <!--3--> </div>
    <!--2--> </div>
    <!--1--></div>


<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>