<?php $title ="Actions du Lions Club Nice Doyen";?>

<?php ob_start();?>
    <h1>Titre de L'event</h1>
        <div class="row">
            <?php foreach ($articles as $article)
                {?>
                    <div class="card col-6" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $article['title'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text"><?php echo $article['content'] ?></p>
                            <a href="<?php echo PATH ?>/lions/?page=article&article=<?php echo $article['title']?>" class="card-link">Voir plus</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
               <?php }?>
        </div>
<?php
$content = ob_get_clean();?>
<?php require_once("template.php");?>