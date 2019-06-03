<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Forgot Password</title>
	<!-- un CSS pour formatter la page web -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/log6.css'); ?>" />
	<!-- On charge les polices Google -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,500|Roboto:300,400,500,700">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
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

		<div class="loginBox">

			<img src="<?php echo base_url('assets/images/lock.png'); ?>" class="lock">

			<h2>Forgot Password ?</h2>

			<form action="" method="POST">
				<label>If you are not the Data Manager, please ask him your password.
				If you are the Data Manager, please answer this secret question to recover your password.</label><br><br>

				<p class="up">Quels sont les noms des pionniers ?<p>

				<input type='text' name='answer' required>

				<input class="top" type='submit' name='action' value='Validate'>

				<div class="msg up">
					<h4><?php echo $msg; ?></h4>
				</div>

			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
</body>

</html>