<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Daily HMIS Report</title>
	<!-- un CSS pour formatter la page web -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/log6.css'); ?>" />
	<!-- On charge les polices Google -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bs-css.css'); ?>" />
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-select.min.css'); ?>">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
	<div class="container">

		<!-- Logos -->

		<div class="row">
			<div class="col-xs-offset-1 col-xs-2">
				<img src="<?php echo base_url('assets/images/rwanda.png'); ?>" class="img-responsive top-buffer" alt="Responsive image" width="57%">
			</div>
			<div class="col-xs-6">
				<h1>Daily HMIS Report</h1>
			</div>
			<div class="col-xs-offset-1 col-xs-2">
				<img src="<?php echo base_url('assets/images/isis.png'); ?>" class="img-responsive top-buffer" alt="Responsive image" width="63%">
			</div>
		</div>

		<!-- La box du login -->

		<div class="loginBox">

			<!-- L'image cadenas -->

			<img src="<?php echo base_url('assets/images/lock.png'); ?>" class="lock">

			<h2>Log In</h2>

			<!-- Un formulaire pour renvoyer les paramètres saisis par l'utilisateur -->

			<form action="" method="POST">
				<p>Username</p>
				<input type='text' name='pseudo' required>
				<p>Password</p>
				<input type='password' name='mdp' required>

				<a href="forgot_password" class="right">Forgot Password ?</a>

				<!-- Le bouton Connexion -->

				<input class="top" type='submit' name='action' value='Sign In'>

				<!-- Le message d'erreur -->

				<div class="msg up">
					<h4><?php echo $msg; ?></h4>
				</div>

			</form>
		</div>

		<div class="footer">
			<a href="">HMIS</a> |
			<a href="">Logistics & Store</a> |
			<a href="">Archives</a> |
			<a href="">Customers Care & Social</a> |
			<a href="">Monitoring & Evaluation</a>
	  </div>

	</div>

	<!-- Importation jQuery et BootStrap -->

	<script src="<?php echo base_url('assets/js/jquery2.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-select.min.js'); ?>"></script>
</body>

</html>
