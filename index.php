<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>DFA | Data From Anywhere</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="fonts/css/all.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Data From Anywhere</h1>
            <p class="animated fadeInRightBig">Infrastructures virtuelles - Sauvegardes - Applications distantes</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#pricing">Lancez-vous</a>
          </div>
        </div>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

  <?php include_once("nav.php")?>


  </header><!--/#home-->
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Nos services</h2>
          </div>
        </div>
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-cloud"></i>
            </div>
            <div class="service-info">
              <h3>Sauvegardes Cloud</h3>
              <p>Notre équipe vous propose des systèmes de stockages sur notre cloud privé, ces derniers sont controlés 24/24h 7/7j de manière à prévenir tout incidents</p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-desktop"></i>
            </div>
            <div class="service-info">
              <h3>Remotes Apps</h3>
                <p>Votre PC n'est pas assez puissant pour faire tourner certains logiciel ?</p>
                <p>Nos serveurs peuvent repondre à ce besoin. Grâce à DFA votre PC bénéficie d'une connexion à distance pour utiliser n'importe quels logiciels demandant de grosses ressources matérielles</p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-server"></i>
            </div>
            <div class="service-info">
              <h3>Machines distantes</h3>
              <p>Vous chercher à utiliser une machine puissante sans l'avoir chez vous ? DFA répond à vos attentes en mettant en place différentes machines</p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fa fa-network-wired"></i>
            </div>
            <div class="service-info">
              <h3>Infrastructures virtuelles</h3>
              <p>Vous souhaitez avoir la structure informatique d'une grosse entreprise ? DFA met à votre dispositon un réseau virtuel sur lequel vous pouvez créer votre réseau d'entreprise accessible depuis le monde entier</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#services-->
  <section id="about-us" class="parallax">
    <div class="flou">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" style="margin:45px">
              <h2>Qui sommes nous ?</h2>
              <p>Que ce soit pour des raisons de sécurité, de coût ou de fiabilité le cloud reste une solution facile d'accès et disponible partout dans le monde.
              <br />Notre équipe facilite l’accès à cette technologie et la propose aux particuliers ou aux professionnels en tant que service.
              <br />De la sauvegarde en passant par l’application distante ou encore une infrastructure complète dans nos locaux, ces services s’adaptent à vos envies mais surtout à vos besoins.
              <br />En contact direct avec le client nous concevons une maquette de chaque projet que vous envisagez de faire.</p>
              <br /><i class="fa fa-envelope"></i> <span> Mail:</span><a style="color: white" href="mailto:contact@dfanetwork.fr"> contact@dfanetwork.fr</a>
            </div>
          </div>
          <div class="col-sm-6">
              <div class="text-center">
                  <img class="rounded mx-auto d-block"src="images/logo_2.png" alt="logo" style="margin:45px">
              </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Nos offres</h2>
        </div>
      </div>
      <div class="pricing-table">
        <div class="row">
          <div class="col-sm-4">
            <div class="single-table wow flipInY" style="color:black" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h3>Sauvegarde Cloud</h3>

              <span>À partir de</span>
              <div class="price">4.99€<span>/Mois</span></div>
              <ul>
                <li>Hébergé en france</li>
                <li>50Go à 512Go de stockage</li>
                <li>Haut débit</li>
                <li>Haute disponibilité du service</li>
              </ul>
              <a href="sauvegarde.php" class="btn btn-lg btn-primary">Voir les offres</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="single-table wow flipInY" style="background-color: #686868; color:white" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h3 style="color:white">Machines distantes</h3>

              <span>À partir de</span>
              <div class="price">19.99€<span>/Mois</span></div>
              <ul>
                <li>Plus de 100 Sytèmes d'exploitations disponibles</li>
                <li>80Go à 512Go de stockage</li>
                <li>Processeur: 2 à 10 coeurs (3.33Ghz)</li>
                <li>Autres options à la demande</li>
              </ul>
              <a href="machine.php" class="btn btn-lg btn-primary">Voir les offres</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="single-table wow flipInY" style="background-color: #3C3C3C; color:white" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3 style="color:white">Infrastructure virtuelle</h3>

              <br />
              <div class="price" style="font-size: 20px">Prix sur demande</div>
              <ul>
                <li>Multiple commutateurs virtuels</li>
                <li>Réseau 10Go/s en local*</li>
                <li>Réseau sécurisé (Firewall et Routeur privés)</li>
                <li>Racordement aux locaux sur devis</li>
              </ul>
              <a href="infrastructure.php" class="btn btn-lg btn-primary">Voir les offres</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#pricing-->

  <section id="contact">

    <div id="contact-us" class="parallax">
      <div class="flou">
        <div class="container">
          <div class="row">
            <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h2>Contactez nous</h2>
              <p>Notre équipe étudie chaques projets en détails afin de répondre au mieux à vos besoins</p>
              <p>N'hésitez pas à nous contacter pour plus de renseignement en nous écrivant juste en dessous</p>
            </div>
          </div>
          <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
              <!--
              <div class="col-sm-6">

                <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                  <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Nom" required="required">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Adresse mail" required="required">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" name="subject" class="form-control" placeholder="Objet" required="required">
                  </div>
                  <div class="form-group">
                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Votre message" required="required"></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn-submit">Envoyer</button>
                  </div>
                </form>

              </div>
              -->
              <div class="col-sm-6" style="margin-bottom:5%">
                <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>L'équipe de DFA intervient sur les départements du :</p>
                  <p>Rhône(69), de l'Isère(38), de l'Ardèche(07) et de la Loire(42)</p>
                  <ul class="address">
                    <li><i class="fa fa-map-marker"></i> <span> Adresse:</span> Lyon </li>
                    <li><i class="fa fa-phone"></i> <span> Téléphone:</span> +33 6 32 08 07 04  </li>
                    <li><i class="fa fa-envelope"></i> <span> Mail:</span><a href="mailto:contact@dfanetwork.fr"> contact@dfanetwork.fr</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.php"><img class="img-responsive" src="images/logo.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="mailto:contact@dfanetwork.fr"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href=""><i class="fab fa-twitter"></i></a></li>
            <li><a class="dribbble" href=""><i class="fab fa-dribbble"></i></a></li>
            <li><a class="facebook" href=""><i class="fab fa-facebook"></i></a></li>
            <li><a class="linkedin" href=""><i class="fab fa-linkedin"></i></a></li>
            <li><a class="tumblr" href=""><i class="fab fa-tumblr-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <p class="pull-right">©2019 DFA network</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script defer src="fonts/js/all.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>
