<?php include_once ('model/ArticleManager.php');
$manager = new ArticleManager();
$articles=$manager->get_articles() ?>
<nav class="navbar navbar-light navbar-expand-lg border" id="second_nav">
    <nav class="navbar-brand navbar-light col-3 offset-1">
        <a class="navbar-brand text-uppercase font-weight-bold" href="//projet/lions/"><h1>Nice Doyen</h1></a>
        <img src="public/media/logo.gif" width="120" height="120" alt="" href="//projet/lions/?page=log">
    </nav>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler1" aria-controls="navbarToggler1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbara  col-8 collapse navbar-collapse" id="navbarToggler1" " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-uppercase" href="//projet/lions/">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Le lions Clubs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Le Lions Club dans le monde</a>
                        <a class="dropdown-item" href="#">Valeurs et objectifs</a>
                        <a class="dropdown-item" href="#">Symbole et embleme</a>
                        <a class="dropdown-item" href="#">Les rencontres internationales</a>
                        <a class="dropdown-item" href="#">Les actions prioritaires</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nos evenements
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php
                            foreach ($articles as $article)
                            {
                                echo "<a class=\"dropdown-item\" href=\"//projet/lions/?page=article&article=".$article['title']."\">".$article['title']."</a>";
                            }
                        ?>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#">Lions de passage <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#">Nous Contacter <span class="sr-only">(current)</span></a>
                </li>
            </ul>
    </div>
</nav>
