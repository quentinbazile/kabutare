<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Pregnant Woman</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,500|Roboto:300,400,500,700">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/recherche15.css'); ?>" />
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/fh-3.1.4/datatables.min.css"/>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<div class="container">
			<h2>Pregnant Woman - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('add_date'))); ?></h2>
      <div>
        <form method="post" action="" class="form-inline">
					<div class="row">
						<div class="col-xs-8">
			      	<h4>Outpatient morbidity summary table</h4>
						</div>
						<div class="col-xs-4">
					  	<h4>Health insurance status of new cases</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-8">
				      <table id="A" class="center">
				        <thead>
				          <tr>
				            <th rowspan="2">Outpatient visits<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				            <th colspan="2">Age < 5</th>
				            <th colspan="2">Age 5 to 19</th>
				            <th colspan="2">Age > 20</th>
				          </tr>
				          <tr>
				            <th>M</th>
				            <th>F</th>
				            <th>M</th>
				            <th>F</th>
				            <th>M</th>
				            <th>F</th>
									</tr>
				        </thead>
				        <tbody>
				          <tr>
				            <td class="left">New cases (NC)</td>
				            <td><input type="number" min="0" name="nc5m" class="form-control"></td>
				            <td><input type="number" min="0" name="nc5f" class="form-control"></td>
				            <td><input type="number" min="0" name="nc19m" class="form-control"></td>
				            <td><input type="number" min="0" name="nc19f" class="form-control"></td>
				            <td><input type="number" min="0" name="nc20m" class="form-control"></td>
				            <td><input type="number" min="0" name="nc20f" class="form-control"></td>
				          </tr>
				          <tr>
				            <td class="left">Old cases</td>
				            <td><input type="number" min="0" name="oc5m" class="form-control"></td>
				            <td><input type="number" min="0" name="oc5f" class="form-control"></td>
				            <td><input type="number" min="0" name="oc19m" class="form-control"></td>
				            <td><input type="number" min="0" name="oc19f" class="form-control"></td>
				            <td><input type="number" min="0" name="oc20m" class="form-control"></td>
				            <td><input type="number" min="0" name="oc20f" class="form-control"></td>
				          </tr>
				        </tbody>
				      </table>
						</div>
						<div class="col-xs-4">
				      <table id="B" class="center">
				        <thead>
				          <tr>
				            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				            <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				          </tr>
				        </thead>
				        <tbody>
				          <tr>
				            <td class="left">Insured (mutuelle or other insurance members)</td>
				            <td><input type="number" min="0" name="insured" class="form-control"></td>
				          </tr>
				          <tr>
				            <td class="left">Non-paying new cases</td>
				            <td><input type="number" min="0" name="nc_non_paying" class="form-control"></td>
				          </tr>
				          <tr>
				            <td class="left">Number of indigent new cases</td>
				            <td><input type="number" min="0" name="nc_indigent" class="form-control"></td>
				          </tr>
				        </tbody>
				      </table>
						</div>
					</div>
					<div>
						<br>
						<div class="row">
							<div class="col-xs-6">
				      	<h4>Referrals</h4>
							</div>
							<div class="col-xs-6">
						  	<h4>Origin of outpatients</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
					      <table id="C" class="center">
					        <thead>
					          <tr>
					            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					            <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          </tr>
					        </thead>
					        <tbody>
					          <tr>
					            <td class="left">Referred to other levels</td>
					            <td><input type="number" min="0" name="other_levels" class="form-control"></td>
					          </tr>
					          <tr>
					            <td class="left">Counter referrals received</td>
					            <td><input type="number" min="0" name="counter_received" class="form-control"></td>
					          </tr>
					        </tbody>
					      </table>
							</div>
							<div class="col-xs-6">
			      		<table id="D" class="center">
			        		<thead>
					          <tr>
					            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					            <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          </tr>
					        </thead>
			        		<tbody>
					          <tr>
					            <td class="left">New cases from the catchment area (zone)</td>
					            <td><input type="number" min="0" name="nc_catch" class="form-control"></td>
					          </tr>
					          <tr>
					            <td class="left">New cases (hors zone)</td>
					            <td><input type="number" min="0" name="nc" class="form-control"></td>
					          </tr>
					          <tr>
					            <td class="left">International patients (hors pays)</td>
					            <td><input type="number" min="0" name="international" class="form-control"></td>
					          </tr>
			        		</tbody>
			      		</table>
							</div>
						</div>
						<br>
	      		<h4>Cases and deaths</h4>
	      		<table id="XV" class="center">
			        <thead>
			          <tr>
			            <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th rowspan="2" class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th colspan="2">OPD NC<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			          </tr>
			          <tr>
									<th>Age < 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
									<th>Age ≥ 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
								</tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td>1</td>
			            <td class="left">Complications of abortions (spontaneous and induced)</td>
			            <td><input type="number" min="0" name="complications_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="complications_opd20" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>2</td>
			            <td class="left">Ectopic pregnancy</td>
			            <td><input type="number" min="0" name="ectopic_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="ectopic_opd20" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>3</td>
			            <td class="left">Ante-partum hemorrhage (APH)</td>
			            <td><input type="number" min="0" name="antepartum_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="antepartum_opd20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>4</td>
			            <td class="left">Post-partum hemorrhage (PPH)</td>
			            <td><input type="number" min="0" name="postpartum_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="postpartum_opd20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>5</td>
			            <td class="left">Eclampsia / Severe pre eclampsia</td>
			            <td><input type="number" min="0" name="eclampsia_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="eclampsia_opd20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>6</td>
			            <td class="left">Post C / Section infection</td>
			            <td><input type="number" min="0" name="postc_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="postc_opd20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>7</td>
			            <td class="left">Other post-partum infections</td>
			            <td><input type="number" min="0" name="postpartum_other_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="postpartum_other_opd20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>8</td>
			            <td class="left">Prolonged or obstructed labor</td>
			            <td><input type="number" min="0" name="prolonged_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="prolonged_opd20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>9</td>
			            <td class="left">Uterine rupture</td>
			            <td><input type="number" min="0" name="uterine_rup_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="uterine_rup_opd20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>10</td>
			            <td class="left">Other direct obstetrical complication</td>
			            <td><input type="number" min="0" name="other_direct_obste_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="other_direct_obste_opd20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>11</td>
			            <td class="left">Anemia severe (< 7gm/dl)</td>
			            <td><input type="number" min="0" name="anemia_sev_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="anemia_sev_opd20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>12</td>
			            <td class="left">Malaria simple in pregnancy</td>
			            <td><input type="number" min="0" name="malaria_sim_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="malaria_sim_opd20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>13</td>
			            <td class="left">Malaria with minor digestive symptoms in pregnancy</td>
			            <td><input type="number" min="0" name="malaria_dig_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="malaria_dig_opd20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>14</td>
			            <td class="left">Severe malaria in pregnancy</td>
			            <td><input type="number" min="0" name="malaria_sev_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="malaria_sev_opd20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>15</td>
			            <td class="left">HIV / Opportunistic infections</td>
			            <td><input type="number" min="0" name="hiv_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="hiv_opd20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>16</td>
			            <td class="left">Pulmonary embolism</td>
			            <td><input type="number" min="0" name="pulmonary_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="pulmonary_opd20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>17</td>
			            <td class="left">Pneumonia on pregnancy</td>
			            <td><input type="number" min="0" name="pneumonia_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="pneumonia_opd20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>18</td>
			            <td class="left">Other indirect obstetrical complication</td>
			            <td><input type="number" min="0" name="other_ind_obstet_opd19" class="form-control"></td>
			            <td><input type="number" min="0" name="other_ind_obstet_opd20" class="form-control"></td>
			          </tr>
			        </tbody>
			      </table>
						<br>
	      		<h4>Medical imagery</h4>
	      		<table id="XXV" class="center">
			        <thead>
			          <tr>
			            <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th class="des">X-Ray (radiology)<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th>Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
									<th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
									<th class="des">Other<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
									<th>Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			          </tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td>1</td>
			            <td class="left">X-Ray lung</td>
			            <td><input type="number" min="0" name="lung" class="form-control"></td>
									<td>6</td>
			            <td class="left">Gastroscopy</td>
			            <td><input type="number" min="0" name="gastroscopy" class="form-control"></td>
			          </tr>
			          <tr>
									<td>2</td>
			            <td class="left">X-Ray bones</td>
			            <td><input type="number" min="0" name="bones" class="form-control"></td>
									<td>7</td>
			            <td class="left">Ultrasound (echography)</td>
			            <td><input type="number" min="0" name="ultrasound" class="form-control"></td>
			          </tr>
								<tr>
									<td>3</td>
			            <td class="left">X-Ray abdomen without preparation</td>
			            <td><input type="number" min="0" name="abdomen_without" class="form-control"></td>
									<td>8</td>
			            <td class="left">ECG</td>
			            <td><input type="number" min="0" name="ecg" class="form-control"></td>
			          </tr>
								<tr>
									<td>4</td>
			            <td class="left">X-Ray abdomen with dye</td>
			            <td><input type="number" min="0" name="abdomen_with" class="form-control"></td>
									<td>9</td>
			            <td class="left">Other medical imagery</td>
			            <td><input type="number" min="0" name="other_medical_img" class="form-control"></td>
			          </tr>
								<tr>
									<td>5</td>
			            <td class="left">X-Ray other</td>
			            <td><input type="number" min="0" name="other_xray" class="form-control"></td>
									<td class="grey"></td>
									<td class="grey"></td>
									<td class="grey"></td>
			          </tr>
			        </tbody>
			      </table>
						<br>
	      		<center><button type="submit">Validate</button></center>
					</div>
				</form>
    	</div>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/v/dt/dt-1.10.18/fh-3.1.4/datatables.min.js"></script>
		</div>
	</body>
</html>
<script>
	$('#A').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	});
	$('#B').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	});
	$('#C').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	});
	$('#D').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	});
	$('#XV').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"fixedHeader": true
	});
	$('#XXV').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	});
	$('.dataTables_length').addClass('bs-select');
</script>
