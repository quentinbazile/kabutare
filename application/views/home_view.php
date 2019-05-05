<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
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
			<div id="fill">
					<div class="row">
			<h2>Fill out a report</h2>
<div class="col-xs-offset-4 col-xs-2">
			<form action="" method="POST">

			<select name="add" id="add" class="form-control" required>
				<?php $array = array(date('Y-m-d', strtotime('-4 days')),
                             date('Y-m-d', strtotime('-3 days')),
                             date('Y-m-d', strtotime('-2 days')),
                             date('Y-m-d', strtotime('-1 day')),
                             date('Y-m-d'));
          foreach ($dates as $date):
             if (($val = array_search($date->date_rapport, $array)) !== false) {
                 unset($array[$val]);
             }
          endforeach;
          foreach ($array as $value):?>
					<option value="<?php echo $value; ?>"><?php echo date('d/m/Y', strtotime($value)); ?></option>
				<?php endforeach; ?>
			</select>
</div>
	<div class="col-xs-2">
			<button type="submit">Validate</button>
</div>
		</form>
	</div></div>
	<div id="update">
	<h2>Update a report</h2>
</div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  </body>
</html>

<script>
if (document.getElementById('add').options.length == 0)
  document.getElementById('fill').style.display = 'none';
else
	document.getElementById('fill').style.display = 'block'
</script>