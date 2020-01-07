
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand col-md-2" href="https://www.lions-france.org/">
        <img src="public/media/logo.gif" width="30" height="30" class="d-inline-block align-top" alt="">
        Lions Club International
    </a>
    <div class="collapse navbar-collapse col-md-4 offset-md-6" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php //TODO MAJ bouton log out quand connecté ?>
            <li class="nav-item">
                <a class="nav-link" href="//projet/lions/?page=log">Accès Membre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.lions-france.org/documents">Ressources</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.lions-france.org/boutique">Boutique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.lions-france.org/la-revue-lions">LION Magazine</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.lions-france.org/faire-un-don">Faire un don</a>
            </li>
            <?php if(isset($_SESSION['id']) || isset($_COOKIE['id']))
            {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="//projet/lions/?page=logout">Deconnexion</a>
                </li>
                <?php
            }?>
        </ul>
    </div>
</nav>
