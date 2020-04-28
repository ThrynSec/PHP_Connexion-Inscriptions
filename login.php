<?php include('serveur.php') ?>
<!DOCTYPE HTML>

<!--

CONNEXION/INSCRIPTION PAR DIMITRI 'Thryn' L.
site : https://thryn.fr
@ : contact@thryn.fr

-->

<html>
	<head>
		<title>Connexion</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing">

		<!-- Debut Vue -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>Connectez-vous</h2>
					</header>

					<form method="post" action="login.php">
  					<?php include('erreur.php'); ?>
  					<div class="input-group">
  						<label>Nom de compte</label>
  						<input type="text" name="username" >
  					</div>
  					<div class="input-group">
  						<label>Mot de passe</label>
  						<input type="password" name="password">
  					</div>
  					<p>
  						Pas encore membre ? <a href="subscribe.php">Inscrivez-vous</a>
  					</p>
  					<br>
  					<div class="input-group">
  						<button type="submit" class="btn" name="login">Connectez-vous</button>
  					</div>
  					
 				 </form>

				</div>
			</section>
		<!-- Fin Vue -->

		
		<!-- Crédits -->
			<footer id="footer">
				<div class="container">
					<ul class="copyright">
						<li>&copy; <a href='https://thryn.fr'>Thryn</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


	</body>
</html>