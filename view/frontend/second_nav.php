<?php include_once ('model/ArticleManager.php');
$manager = new ArticleManager();
$articles=$manager->getActifArticles() ?>
<nav class="navbar navbar-light navbar-expand-lg border" id="second_nav">
        <a class="navbar-brand text-uppercase font-weight-bold row ml-5 mr-5" id="mainTitle" href="<?php echo PATH ?>/lions/">
            <img src="public/media/logo.gif" class="d-inline-block align-top ml-5 mr-3" width="150" height="150" alt="" href="<?php echo PATH ?>/lions/?page=log">
            Nice Doyen
            <img src="public/media/faniontr.gif" id="toggle" class="ml-3" width="120" height="150" alt="fanion du club" href="<?php echo PATH ?>/lions/?page=log">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler1" aria-controls="navbarToggler1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-5 " id="navbarToggler1" id="navbarNav">
            <ul class="navbar-nav" id="second_navUl">
                <li class="nav-item active">
                    <a class="nav-link text-uppercase" href="<?php echo PATH ?>/lions/">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-uppercase" href="<?php echo PATH ?>/lions/?page=historique">Qui Sommes nous ? <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nos actions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php
                            foreach ($articles as $article)
                            {
                                echo "<a class=\"dropdown-item\" href=\"".PATH."/lions/?page=article&article=".$article['id']."\">".$article['title']."</a>";
                            }
                        ?>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="<?php echo PATH ?>/lions/?page=services">Nos services <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="<?php echo PATH ?>/lions/?page=invitation">Lions de passage <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="<?php echo PATH ?>/lions/?page=contact">Nous Contacter <span class="sr-only">(current)</span></a>
                </li>
            </ul>
    </div>
    <script>


        $(document).ready(function () {
            let i=true;
            function toggleImage(){
                if(i===true){
                    $( "#toggle" ).attr('src','public/media/licoctsm1trsp.gif');
                    i=false;
                }else{
                    $( "#toggle" ).attr('src','public/media/faniontr.gif');
                    i=true;
                }

            };
            setInterval(toggleImage, 5000);
        })

    </script>
</nav>
