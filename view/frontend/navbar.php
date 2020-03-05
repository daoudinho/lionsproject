
<nav class="navbar navbar-toggleable-md navbar-expand-lg navbar-light bg-light">
    <!--<a class="navbar-brand ml-3" href="https://www.lions-france.org/">
        <img src="public/media/logo.gif" width="30" height="30" class="d-inline-block align-top mr-3" alt="logo lions club">
        Lions Club Nice Doyen
    </a>-->
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class=" nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo PATH ?>/lions/?page=log">Accès Membre</a>
                </li>
                  <?php if(isset($_SESSION['id']) || isset($_COOKIE['id']))
                  {
                        ?>
                      <li class="nav-item">
                          <a class="nav-link" href="<?php echo PATH ?>/lions/?page=logout">Deconnexion</a>
                      </li>
                        <?php
                  }?>
            </ul>
</nav>
