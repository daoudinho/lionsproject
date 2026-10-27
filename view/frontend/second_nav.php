<?php include_once ('model/ArticleManager.php');
$manager = new ArticleManager();
$articles=$manager->getActifArticles() ?>
<nav class="navbar navbar-light navbar-expand border justify-content-between flex-wrap" id="second_nav">

        <a class="text-uppercase font-weight-bold col-lg-5 col-md-12 " style="text-decoration:none" href="<?php echo PATH ?>">
            <div class="row align-items-center justify-content-between">
                <img src="public/media/logo.gif" class="" id="logo-lions" alt="logo lions" href="<?php echo PATH ?>?page=log">
                <span id="mainTitle" class="text-center align-middle">Nice Doyen</span>
                <img src="public/media/faniontr.gif"  class="" id="toggle" alt="fanion du club" href="<?php echo PATH ?>?page=log">
            </div>

        </a>

    <div class="col-lg-7 col-md-12 pl-lg-4 pl-0" >
            <ul class="navbar-nav navbar-expand-lg justify-content-center" id="second_navUl">
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="<?php echo PATH ?>">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="<?php echo PATH ?>?page=historique">Qui Sommes nous ? <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nos actions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php
                            foreach ($articles as $article)
                            {
                                echo "<a class=\"dropdown-item\" id='sub-nav' href=\"".PATH."?page=article&article=".$article['id']."\">".$article['title']."</a>";
                            }
                        ?>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="<?php echo PATH ?>?page=services">Nos services <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-uppercase" href="<?php echo PATH ?>?page=invitation">Lions de passage <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="<?php echo PATH ?>?page=contact">Nous Contacter <span class="sr-only">(current)</span></a>
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
