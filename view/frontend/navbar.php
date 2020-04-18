
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-end">
    <!--<a class="navbar-brand ml-3" href="https://www.lions-france.org/">
        <img src="public/media/logo.gif" width="30" height="30" class="d-inline-block align-top mr-3" alt="logo lions club">
        Lions Club Nice Doyen
    </a>-->

            <ul class=" nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo PATH ?>?page=log">Accès Membre</a>
                </li>
                  <?php if(isset($_SESSION['id']) || isset($_COOKIE['id']))
                  {
                        ?>
                      <li class="nav-item">
                          <a class="nav-link" href="<?php echo PATH ?>?page=logout">Deconnexion</a>
                      </li>
                        <?php
                  }?>
            </ul>
</nav>
