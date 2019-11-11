<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

	<title>Sign up - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<?php include 'navbar.php' ?>
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Accueil</a></li>
			<li class="active">Inscription</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Inscription</h1>
				</header>

				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Créer un nouveau compte</h3>
							<p class="text-center text-muted">Vous possedez déjà un compte? <a href="signin.php">Connectez-vous</a></p>
							<hr>
							<div id="erreur">
							    <p>Vous n'avez pas rempli correctement les champs du formulaire !</p>
							</div>
							<form action="formulaire/s_inscrire.php" method="post">
								<div class="form-row">
									<div class="top-margin">
										<label>Prénom</label>
										<input type="text" class="form-control" name="prenom" id="prenom">
									</div>
									<div class="top-margin">
										<label>Nom</label>
										<input type="text" class="form-control" name="nom" id="nom">
									</div>
									<div class="top-margin">
										<label>Email<span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="email" id="email">
									</div>
									<div class="top-margin">
										<label>Nom de l'entreprise</label>
										<input type="text" class="form-control" name="entreprise" id="entreprise">
									</div>

									<div class="row top-margin">
										<div class="col-sm-6">
											<label>Mot de passe<span class="text-danger">*</span></label>
											<input type="password" class="form-control" name="mdp"  id="mdp">
										</div>
										<div class="col-sm-6">
											<label>Confirmer le mot de passe<span class="text-danger">*</span></label>
											<input type="password" class="form-control" id="confirmation">
										</div>
									</div>

									<hr>

									<div class="row">
										<div class="col-lg-8">
											<label class="checkbox">
												<input type="checkbox" id="chk">
												J'ai lu les <a href="page_terms.html">Termes et conditons</a>
											</label>
										</div>
										<div class="col-lg-4 text-right">
											<button class="btn btn-action" type="submit" id="envoi">S'inscrire</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>

			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->

	<?php include 'footer.php' ?>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	<script src="assets/js/verif_form.js"></script>
</body>
</html>
