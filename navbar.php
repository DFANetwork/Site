<?php session_start(); ?>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
  <div class="container">
    <div class="navbar-header">
      <!-- Button for smallest screens -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav pull-right">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="products.php">Nos offres</a></li>
        <li><a href="#">Nous contacter</a></li>
        <?php if(isset($_SESSION['code'])){ ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $_SESSION['code'] ?> MON PROFIL
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Tableau de bord</a>
                  <a class="dropdown-item" href="formulaire/deconnexion.php">Déconnexion</a>
                </div>
            </li>
        <?php
        }
        else{ ?>
            <li class="active"><a class="btn" href="signin.php">CONNEXION</a></li>
        <?php } ?>

      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
<!-- /.navbar -->
