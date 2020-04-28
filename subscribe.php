<?php include('serveur.php') ?>
<!DOCTYPE HTML>

<!--

CONNEXION/INSCRIPTION PAR DIMITRI 'Thryn' L.
site : https://thryn.fr
@ : contact@thryn.fr

-->


<html>
	<head>
		<title>Inscription</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing">

					<!-- Debut vue -->

					<form method="post" action="subscribe.php">
  					<?php include('erreur.php'); ?>
  					<div class="input-group">
  						<br>
  					  <label>Nom de Compte</label>
  					  <input type="text" name="username" value="<?php echo $username; ?>">
  					</div>
  					<br>
  					<div class="input-group">
  					  <label>Mot de passe</label>
  					  <input type="password" name="password">
  					</div>
  					<br>
  					<div class="input-group">
  					  <input type="hidden" name="geolog" value="">
  					</div>
  					<br>
  					<p>
  						Déjà membre ? <a href="login.php">Connectez-vous</a>
  					</p>
  					<div class="input-group">
  					  <button type="submit" class="btn" name="enregistrer">Inscrivez-vous</button>
  					</div>
  					
  				    </form>

					<!-- Fin -->


				</div>
			</section>

		
		<!-- Footer -->
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