<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Operating Room</title>
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
		<div class="container">
			<h2>Operating Room - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('update_date'))); ?></h2>
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
		            <td><input type="number" min="0" name="cesarean_urg" class="form-control" value="<?php echo $table1->cesarean_urg; ?>"></td>
		            <td><input type="number" min="0" name="cesarean_plan" class="form-control" value="<?php echo $table1->cesarean_plan; ?>"></td>
		            <td rowspan="12"><input type="number" min="0" name="go_total" class="form-control" value="<?php echo $table1->go_total; ?>"></td>
							</tr>
							<tr>
		            <td class="left">2.1 Gynecological hysterectomy</td>
		            <td><input type="number" min="0" name="gyneco_urg" class="form-control" value="<?php echo $table1->gyneco_urg; ?>"></td>
		            <td><input type="number" min="0" name="gyneco_plan" class="form-control" value="<?php echo $table1->gyneco_plan; ?>"></td>
							</tr>
							<tr>
		            <td class="left">2.2 Obstetrical hysterectomy</td>
		            <td><input type="number" min="0" name="obste_urg" class="form-control" value="<?php echo $table1->obste_urg; ?>"></td>
		            <td><input type="number" min="0" name="obste_plan" class="form-control" value="<?php echo $table1->obste_plan; ?>"></td>
							</tr>
							<tr>
		            <td class="left">3.1 Laparotomy for extra uterine pregnancy</td>
		            <td><input type="number" min="0" name="laparo_preg_urg" class="form-control" value="<?php echo $table1->laparo_preg_urg; ?>"></td>
		            <td><input type="number" min="0" name="laparo_preg_plan" class="form-control" value="<?php echo $table1->laparo_preg_plan; ?>"></td>
							</tr>
							<tr>
		            <td class="left">3.2 Laparotomy for uterine rupture</td>
		            <td><input type="number" min="0" name="laparo_rupt_urg" class="form-control" value="<?php echo $table1->laparo_rupt_urg; ?>"></td>
		            <td><input type="number" min="0" name="laparo_rupt_plan" class="form-control" value="<?php echo $table1->laparo_rupt_plan; ?>"></td>
							</tr>
							<tr>
		            <td class="left">3.3 Laparotomy for peritonitis</td>
		            <td><input type="number" min="0" name="laparo_perit_urg" class="form-control" value="<?php echo $table1->laparo_perit_urg; ?>"></td>
		            <td><input type="number" min="0" name="laparo_perit_plan" class="form-control" value="<?php echo $table1->laparo_perit_plan; ?>"></td>
							</tr>
							<tr>
		            <td class="left">3.4. Laparatomy for myomectomy</td>
		            <td><input type="number" min="0" name="laparo_myomec_urg" class="form-control" value="<?php echo $table1->laparo_myomec_urg; ?>"></td>
		            <td><input type="number" min="0" name="laparo_myomec_plan" class="form-control" value="<?php echo $table1->laparo_myomec_plan; ?>"></td>
							</tr>
							<tr>
		            <td class="left">4.1 Vesico vaginal fistula repaired</td>
		            <td class="grey"></td>
		            <td><input type="number" min="0" name="vesico_plan" class="form-control" value="<?php echo $table1->vesico_plan; ?>"></td>
							</tr>
							<tr>
		            <td class="left">4.2 Recto vaginal fistula repaired</td>
		            <td class="grey"></td>
		            <td><input type="number" min="0" name="recto_plan" class="form-control" value="<?php echo $table1->recto_plan; ?>"></td>
							</tr>
							<tr>
		            <td class="left">4.3 Ureteric vaginal fistula repaired</td>
		            <td class="grey"></td>
		            <td><input type="number" min="0" name="ureteric_plan" class="form-control" value="<?php echo $table1->ureteric_plan; ?>"></td>
							</tr>
							<tr>
		            <td class="left">5. Biopsy curettage</td>
		            <td class="grey"></td>
		            <td><input type="number" min="0" name="biopsy_plan" class="form-control" value="<?php echo $table1->biopsy_plan; ?>"></td>
							</tr>
							<tr>
		            <td class="left">6. Gyneco-obstetrical surgery other</td>
		            <td><input type="number" min="0" name="go_other_urg" class="form-control" value="<?php echo $table1->go_other_urg; ?>"></td>
		            <td><input type="number" min="0" name="go_other_plan" class="form-control" value="<?php echo $table1->go_other_plan; ?>"></td>
							</tr>

							<tr>
		            <td rowspan="3">2</td>
		            <td colspan="2">Surgical Interventions Total</td>
		            <td><input type="number" min="0" name="total_urg" class="form-control" value="<?php echo $table1->total_urg; ?>"></td>
		            <td><input type="number" min="0" name="total_plan" class="form-control" value="<?php echo $table1->total_plan; ?>"></td>
		            <td rowspan="3" class="grey"></td>
							</tr>
							<tr>
								<td rowspan="2">Of which</td>
		            <td class="left">1. Major surgery</td>
		            <td><input type="number" min="0" name="major_urg" class="form-control" value="<?php echo $table1->major_urg; ?>"></td>
		            <td><input type="number" min="0" name="major_plan" class="form-control" value="<?php echo $table1->major_plan; ?>"></td>
							</tr>
							<tr>
		            <td class="left">2. Minor surgery</td>
		            <td><input type="number" min="0" name="minor_urg" class="form-control" value="<?php echo $table1->minor_urg; ?>"></td>
		            <td><input type="number" min="0" name="minor_plan" class="form-control" value="<?php echo $table1->minor_plan; ?>"></td>
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
		            <td><input type="number" min="0" name="general" class="form-control" value="<?php echo $table2->general; ?>"></td>
		          </tr>
		          <tr>
								<td>2</td>
		            <td class="left">Regional anesthesia</td>
		            <td><input type="number" min="0" name="regional" class="form-control" value="<?php echo $table2->regional; ?>"></td>
		          </tr>
							<tr>
								<td>3</td>
		            <td class="left">Local anesthesia</td>
		            <td><input type="number" min="0" name="local" class="form-control" value="<?php echo $table2->local; ?>"></td>
		          </tr>
							<tr>
								<td>4</td>
		            <td class="left">Other types of anesthesia</td>
		            <td><input type="number" min="0" name="other_type" class="form-control" value="<?php echo $table2->other_type; ?>"></td>
		          </tr>
		        </tbody>
		      </table>
					<br>
      		<center><button type="submit">Validate</button></center>
				</form>
    	</div>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
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
