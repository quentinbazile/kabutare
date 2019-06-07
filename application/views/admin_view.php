<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,500|Roboto:300,400,500,700">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/recherche15.css'); ?>" />
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<div class="container" id="all">

			<h2>Research a report</h2>

			<center><button type="button" onclick="location.href='<?php echo base_url();?>research'">Research</button></center>

			<div id="users">
				<h2>Users passwords</h2>
				<center><button type="button" onclick="location.href='<?php echo base_url();?>loginpws'">Passwords</button></center>
			</div>

			<div class="row">
				<div class="col-xs-offset-11">
					<button class="center" type="button" onclick="location.href='<?php echo base_url();?>home/logout'">Log Out</button>
				</div>
			</div>

			<div id="changePassword">
				<div class="row">
        	<h2>Change Password</h2>
					<?php echo form_open('home/changePassword')?>
					<div class="col-xs-offset-2 col-xs-2">
	          <input type="password" name="oldpass" id="oldpass" class="form-control" placeholder="Old Password" />
	          <?php echo form_error('oldpass', '<div class="error">', '</div>')?>
					</div>
					<div class="col-xs-2">
	          <input type="password" name="newpass" id="newpass" class="form-control" placeholder="New Password" />
	          <?php echo form_error('newpass', '<div class="error">', '</div>')?>
					</div>
					<div class="col-xs-2">
	          <input type="password" name="passconf" id="passconf" class="form-control" placeholder="Confirm Password" />
	          <?php echo form_error('passconf', '<div class="error">', '</div>')?>
					</div>
					<div class="col-xs-2">
	          <button type="submit">Change</button>
					</div>
		        <?php echo form_close(); ?>
				</div>
			</div>


		</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  </body>
</html>

<script>
<?php $this->load->model('home_model');
if ($this->home_model->check_service('data_manager')) {
    ?>
	  document.getElementById('users').style.display = 'block';
<?php
} else {
        ?>
		document.getElementById('users').style.display = 'none';
<?php
    } ?>
</script>
