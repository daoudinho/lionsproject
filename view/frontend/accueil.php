<?php $title ="Lions Club Nice Doyen";?>

<?php ob_start();?>
<div class="container">
    <div id="carouselIndicators" class="carousel slide align-content-center" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-90" src="public/media/img_1.jpg" alt="Luna Park">
            </div>
            <div class="carousel-item">
                <img class="d-block w-90" src="public/media/img_2.jpg" alt="Coeur d'opera">
            </div>
            <div class="carousel-item">
                <img class="d-block w-90" src="public/media/img_3.jpg" alt="La foire au livres">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<?php $content = ob_get_clean();?>
<?php require_once("template.php");?>

