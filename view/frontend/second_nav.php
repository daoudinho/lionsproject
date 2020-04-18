<?php include_once ('model/ArticleManager.php');
$manager = new ArticleManager();
$articles=$manager->getActifArticles() ?>
<nav class="navbar navbar-light navbar-expand border justify-content-between" id="second_nav">

        <a class="navbar-brand text-uppercase font-weight-bold row col-lg-4 col-md-12" id="mainTitle" href="<?php echo PATH ?>">
            <img src="public/media/logo.gif" class="d-inline-block align-top" width="150" height="150" alt="" href="<?php echo PATH ?>?page=log">
            Nice Doyen
            <img src="public/media/faniontr.gif" id="toggle" class="" width="120" height="150" alt="fanion du club" href="<?php echo PATH ?>?page=log">
        </a>

    <div class="col-lg-7 col-md-12 justify-content-end">
            <ul class="navbar-nav navbar-expand-lg" id="second_navUl">
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="<?php echo PATH ?>">test <span class="sr-only">(current)</span></a>
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
                                echo "<a class=\"dropdown-item\" href=\"".PATH."?page=article&article=".$article['id']."\">".$article['title']."</a>";
                            }
                        ?>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="<?php echo PATH ?>?page=services">Nos services <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
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
