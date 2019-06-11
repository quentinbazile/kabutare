<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Operating Room</title>
		<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bs-css.css'); ?>" />
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/recherche15.css'); ?>" />
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
			<h2>Operating Room - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('add_date'))); ?></h2>
      <div>
        <form method="post" action="" class="form-inline">
					<h4>Surgery</h4>
		      <table id="XII" class="center">
						<thead>
		          <tr>
		            <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Service<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Type of surgical intervention<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Urgent interventions<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Planned interventions<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Post-surgical infection total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		          </tr>
		        </thead>
		        <tbody>
							<tr>
		            <td rowspan="12">1</td>
		            <td rowspan="12">Gyneco-obstetrical</td>
		            <td class="left">1. Cesarean section</td>
		            <td><input type="number" min="0" name="cesarean_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="cesarean_plan" class="form-control"></td>
		            <td rowspan="12"><input type="number" min="0" name="go_total" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">2.1 Gynecological hysterectomy</td>
		            <td><input type="number" min="0" name="gyneco_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="gyneco_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">2.2 Obstetrical hysterectomy</td>
		            <td><input type="number" min="0" name="obste_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="obste_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">3.1 Laparotomy for extra uterine pregnancy</td>
		            <td><input type="number" min="0" name="laparo_preg_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="laparo_preg_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">3.2 Laparotomy for uterine rupture</td>
		            <td><input type="number" min="0" name="laparo_rupt_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="laparo_rupt_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">3.3 Laparotomy for peritonitis</td>
		            <td><input type="number" min="0" name="laparo_perit_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="laparo_perit_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">3.4. Laparatomy for myomectomy</td>
		            <td><input type="number" min="0" name="laparo_myomec_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="laparo_myomec_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">4.1 Vesico vaginal fistula repaired</td>
		            <td class="grey"></td>
		            <td><input type="number" min="0" name="vesico_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">4.2 Recto vaginal fistula repaired</td>
		            <td class="grey"></td>
		            <td><input type="number" min="0" name="recto_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">4.3 Ureteric vaginal fistula repaired</td>
		            <td class="grey"></td>
		            <td><input type="number" min="0" name="ureteric_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">5. Biopsy curettage</td>
		            <td class="grey"></td>
		            <td><input type="number" min="0" name="biopsy_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">6. Gyneco-obstetrical surgery other</td>
		            <td><input type="number" min="0" name="go_other_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="go_other_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td rowspan="3">2</td>
		            <td colspan="2">Surgical Interventions Total</td>
		            <td><input type="number" min="0" name="total_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="total_plan" class="form-control"></td>
		            <td rowspan="3" class="grey"></td>
							</tr>
							<tr>
								<td rowspan="2">Of which</td>
		            <td class="left">1. Major surgery</td>
		            <td><input type="number" min="0" name="major_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="major_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">2. Minor surgery</td>
		            <td><input type="number" min="0" name="minor_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="minor_plan" class="form-control"></td>
							</tr>
		        </tbody>
		      </table>
					<br>
					<h4>Anesthesia</h4>
		      <table id="XIII" class="center">
		        <thead>
		          <tr>
								<th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
								<td>1</td>
		            <td class="left">General anesthesia</td>
		            <td><input type="number" min="0" name="general" class="form-control"></td>
		          </tr>
		          <tr>
								<td>2</td>
		            <td class="left">Regional anesthesia</td>
		            <td><input type="number" min="0" name="regional" class="form-control"></td>
		          </tr>
							<tr>
								<td>3</td>
		            <td class="left">Local anesthesia</td>
		            <td><input type="number" min="0" name="local" class="form-control"></td>
		          </tr>
							<tr>
								<td>4</td>
		            <td class="left">Other types of anesthesia</td>
		            <td><input type="number" min="0" name="other_type" class="form-control"></td>
		          </tr>
		        </tbody>
		      </table>
					<br>
      		<center><button type="submit">Validate</button></center>
				</form>
    	</div>
	    <script src="<?php echo base_url('assets/js/jquery2.min.js'); ?>"></script>
		  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		  <script src="<?php echo base_url('assets/js/bootstrap-select.min.js'); ?>"></script>
			<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
		</div>
	</body>
</html>
<script>

	$('#XIII').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	});
	$('#XII').DataTable();
	$('.dataTables_length').addClass('bs-select');
</script>
