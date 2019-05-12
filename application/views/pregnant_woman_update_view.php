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
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<div class="container">
			<h2>Pregnant Woman - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('update_date'))); ?></h2>
      <div>
        <form method="post" action="" class="form-inline">
					<div class="row">
						<div class="col-xs-8">
			      	<h4>Outpatient Morbidity Summary Table</h4>
						</div>
						<div class="col-xs-4">
					  	<h4>Health Insurance Status of New Cases</h4>
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
				            <td><input type="number" min="0" name="nc5m" class="form-control" value="<?php echo $table1->nc5m; ?>"></td>
				            <td><input type="number" min="0" name="nc5f" class="form-control" value="<?php echo $table1->nc5f; ?>"></td>
				            <td><input type="number" min="0" name="nc19m" class="form-control" value="<?php echo $table1->nc19m; ?>"></td>
				            <td><input type="number" min="0" name="nc19f" class="form-control" value="<?php echo $table1->nc19f; ?>"></td>
				            <td><input type="number" min="0" name="nc20m" class="form-control" value="<?php echo $table1->nc20m; ?>"></td>
				            <td><input type="number" min="0" name="nc20f" class="form-control" value="<?php echo $table1->nc20f; ?>"></td>
				          </tr>
				          <tr>
				            <td class="left">Old cases</td>
				            <td><input type="number" min="0" name="oc5m" class="form-control" value="<?php echo $table1->oc5m; ?>"></td>
				            <td><input type="number" min="0" name="oc5f" class="form-control" value="<?php echo $table1->oc5f; ?>"></td>
				            <td><input type="number" min="0" name="oc19m" class="form-control" value="<?php echo $table1->oc19m; ?>"></td>
				            <td><input type="number" min="0" name="oc19f" class="form-control" value="<?php echo $table1->oc19f; ?>"></td>
				            <td><input type="number" min="0" name="oc20m" class="form-control" value="<?php echo $table1->oc20m; ?>"></td>
				            <td><input type="number" min="0" name="oc20f" class="form-control" value="<?php echo $table1->oc20f; ?>"></td>
				          </tr>
				        </tbody>
				      </table>
						</div>
						<div class="col-xs-4">
				      <table id="B" class="center">
				        <thead>
				          <tr>
				            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				            <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				          </tr>
				        </thead>
				        <tbody>
				          <tr>
				            <td class="left">Insured (Mutuelle or other insurance members)</td>
				            <td><input type="number" min="0" name="insured" class="form-control"  value="<?php echo $table1->insured; ?>"></td>
				          </tr>
				          <tr>
				            <td class="left">Non-paying new cases</td>
				            <td><input type="number" min="0" name="nc_non_paying" class="form-control" value="<?php echo $table1->nc_non_paying; ?>"></td>
				          </tr>
				          <tr>
				            <td class="left">Number of indigent new cases</td>
				            <td><input type="number" min="0" name="nc_indigent" class="form-control" value="<?php echo $table1->nc_indigent; ?>"></td>
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
								<h4>Origin of Outpatients</h4>
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
					            <td><input type="number" min="0" name="other_levels" class="form-control"  value="<?php echo $table1->other_levels; ?>"></td>
					          </tr>
					          <tr>
					            <td class="left">Counter referrals received</td>
					            <td><input type="number" min="0" name="counter_received" class="form-control" value="<?php echo $table1->counter_received; ?>"></td>
					          </tr>
					        </tbody>
					      </table>
							</div>
							<div class="col-xs-6">
					      <table id="D" class="center">
					        <thead>
					          <tr>
					            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					            <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          </tr>
					        </thead>
					        <tbody>
					          <tr>
					            <td class="left">New cases from the catchment area (zone)</td>
					            <td><input type="number" min="0" name="nc_catch" class="form-control"  value="<?php echo $table1->nc_catch; ?>"></td>
					          </tr>
					          <tr>
					            <td class="left">New cases (hors zone)</td>
					            <td><input type="number" min="0" name="nc" class="form-control" value="<?php echo $table1->nc; ?>"></td>
					          </tr>
					          <tr>
					            <td class="left">International patients (hors pays)</td>
					            <td><input type="number" min="0" name="international" class="form-control" value="<?php echo $table1->international; ?>"></td>
					          </tr>
					        </tbody>
					      </table>
							</div>
						</div>
						<br>
	      		<h4>Cases and Deaths</h4>
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
			            <td class="left">Complications of Abortions(Spontaneous and Induced)</td>
			            <td><input type="number" min="0" name="complications_opd19" class="form-control" value="<?php echo $table2->complications_opd19; ?>"></td>
			            <td><input type="number" min="0" name="complications_opd20" class="form-control" value="<?php echo $table2->complications_opd20; ?>"></td>
			          </tr>
			          <tr>
			            <td>2</td>
			            <td class="left">Ectopic Pregnancy</td>
			            <td><input type="number" min="0" name="ectopic_opd19" class="form-control" value="<?php echo $table2->ectopic_opd19; ?>"></td>
			            <td><input type="number" min="0" name="ectopic_opd20" class="form-control" value="<?php echo $table2->ectopic_opd20; ?>"></td>
			          </tr>
			          <tr>
			            <td>3</td>
			            <td class="left">Antepartum Hemorrhage (APH)</td>
			            <td><input type="number" min="0" name="antepartum_opd19" class="form-control" value="<?php echo $table2->antepartum_opd19; ?>"></td>
			            <td><input type="number" min="0" name="antepartum_opd20" class="form-control" value="<?php echo $table2->antepartum_opd20; ?>"></td>
			          </tr>
								<tr>
			            <td>4</td>
			            <td class="left">Post-Partum Hemorrhage (PPH)</td>
			            <td><input type="number" min="0" name="postpartum_opd19" class="form-control" value="<?php echo $table2->postpartum_opd19; ?>"></td>
			            <td><input type="number" min="0" name="postpartum_opd20" class="form-control" value="<?php echo $table2->postpartum_opd20; ?>"></td>
			          </tr>
								<tr>
			            <td>5</td>
			            <td class="left">Eclampsia / Severe Pre Eclampsia</td>
			            <td><input type="number" min="0" name="eclampsia_opd19" class="form-control" value="<?php echo $table2->eclampsia_opd19; ?>"></td>
			            <td><input type="number" min="0" name="eclampsia_opd20" class="form-control" value="<?php echo $table2->eclampsia_opd20; ?>"></td>
			          </tr>
								<tr>
			            <td>6</td>
			            <td class="left">Post C/Section Infection</td>
			            <td><input type="number" min="0" name="postc_opd19" class="form-control" value="<?php echo $table2->postc_opd19; ?>"></td>
			            <td><input type="number" min="0" name="postc_opd20" class="form-control" value="<?php echo $table2->postc_opd20; ?>"></td>
			          </tr>
								<tr>
			            <td>7</td>
			            <td class="left">Other Postpartum Infections</td>
			            <td><input type="number" min="0" name="postpartum_other_opd19" class="form-control" value="<?php echo $table2->postpartum_other_opd19; ?>"></td>
			            <td><input type="number" min="0" name="postpartum_other_opd20" class="form-control" value="<?php echo $table2->postpartum_other_opd20; ?>"></td>
			          </tr>
								<tr>
			            <td>8</td>
			            <td class="left">Prolonged or Obstructed Labor</td>
			            <td><input type="number" min="0" name="prolonged_opd19" class="form-control" value="<?php echo $table2->prolonged_opd19; ?>"></td>
			            <td><input type="number" min="0" name="prolonged_opd20" class="form-control" value="<?php echo $table2->prolonged_opd20; ?>"></td>
			          </tr>
								<tr>
			            <td>9</td>
			            <td class="left">Uterine Rupture</td>
			            <td><input type="number" min="0" name="uterine_rup_opd19" class="form-control" value="<?php echo $table2->uterine_rup_opd19; ?>"></td>
			            <td><input type="number" min="0" name="uterine_rup_opd20" class="form-control" value="<?php echo $table2->uterine_rup_opd20; ?>"></td>
			          </tr>
								<tr>
			            <td>10</td>
			            <td class="left">Other Direct Obstetrical Complication</td>
			            <td><input type="number" min="0" name="other_direct_obste_opd19" class="form-control" value="<?php echo $table2->other_direct_obste_opd19; ?>"></td>
			            <td><input type="number" min="0" name="other_direct_obste_opd20" class="form-control" value="<?php echo $table2->other_direct_obste_opd20; ?>"></td>
			          </tr>
								<tr>
			            <td>11</td>
			            <td class="left">Anemia Severe (< 7gm/dl)</td>
			            <td><input type="number" min="0" name="anemia_sev_opd19" class="form-control" value="<?php echo $table2->anemia_sev_opd19; ?>"></td>
			            <td><input type="number" min="0" name="anemia_sev_opd20" class="form-control" value="<?php echo $table2->anemia_sev_opd20; ?>"></td>
			          </tr>
								<tr>
			            <td>12</td>
			            <td class="left">Malaria Simple in Pregnancy</td>
			            <td><input type="number" min="0" name="malaria_sim_opd19" class="form-control" value="<?php echo $table2->malaria_sim_opd19; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sim_opd20" class="form-control" value="<?php echo $table2->malaria_sim_opd20; ?>"></td>
			          </tr>
								<tr>
			            <td>13</td>
			            <td class="left">Malaria with Minor Digestive Symptoms in Pregnancy</td>
			            <td><input type="number" min="0" name="malaria_dig_opd19" class="form-control" value="<?php echo $table2->malaria_dig_opd19; ?>"></td>
			            <td><input type="number" min="0" name="malaria_dig_opd20" class="form-control" value="<?php echo $table2->malaria_dig_opd20; ?>"></td>
			          </tr>
								<tr>
			            <td>14</td>
			            <td class="left">Severe Malaria in Pregnancy</td>
			            <td><input type="number" min="0" name="malaria_sev_opd19" class="form-control" value="<?php echo $table2->malaria_sev_opd19; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sev_opd20" class="form-control" value="<?php echo $table2->malaria_sev_opd20; ?>"></td>
			          </tr>
								<tr>
			            <td>15</td>
			            <td class="left">HIV/Opportunistic Infections</td>
			            <td><input type="number" min="0" name="hiv_opd19" class="form-control" value="<?php echo $table2->hiv_opd19; ?>"></td>
			            <td><input type="number" min="0" name="hiv_opd20" class="form-control" value="<?php echo $table2->hiv_opd20; ?>"></td>
			          </tr>
								<tr>
			            <td>16</td>
			            <td class="left">Pulmonary Embolism</td>
			            <td><input type="number" min="0" name="pulmonary_opd19" class="form-control" value="<?php echo $table2->pulmonary_opd19; ?>"></td>
			            <td><input type="number" min="0" name="pulmonary_opd20" class="form-control" value="<?php echo $table2->pulmonary_opd20; ?>"></td>
			          </tr>
								<tr>
			            <td>17</td>
			            <td class="left">Pneumonia on Pregnancy</td>
			            <td><input type="number" min="0" name="pneumonia_opd19" class="form-control" value="<?php echo $table2->pneumonia_opd19; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_opd20" class="form-control" value="<?php echo $table2->pneumonia_opd20; ?>"></td>
			          </tr>
								<tr>
			            <td>18</td>
			            <td class="left">Other Indirect Obstetrical Complication</td>
			            <td><input type="number" min="0" name="other_ind_obstet_opd19" class="form-control" value="<?php echo $table2->other_ind_obstet_opd19; ?>"></td>
			            <td><input type="number" min="0" name="other_ind_obstet_opd20" class="form-control" value="<?php echo $table2->other_ind_obstet_opd20; ?>"></td>
			          </tr>
			        </tbody>
			      </table>
						<br>
	      		<h4>Medical Imagery</h4>
	      		<table id="XXV" class="center">
			        <thead>
			          <tr>
			            <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th class="des">X-Ray (Radiology)<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th>Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
									<th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
									<th class="des">Other<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
									<th>Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			          </tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td>1</td>
			            <td class="left">X-Ray Lung</td>
			            <td><input type="number" min="0" name="lung" class="form-control" value="<?php echo $table3->lung; ?>"></td>
									<td>6</td>
			            <td class="left">Gastroscopy</td>
			            <td><input type="number" min="0" name="gastroscopy" class="form-control" value="<?php echo $table3->gastroscopy; ?>"></td>
			          </tr>
			          <tr>
									<td>2</td>
			            <td class="left">X-Ray Bones</td>
			            <td><input type="number" min="0" name="bones" class="form-control" value="<?php echo $table3->bones; ?>"></td>
									<td>7</td>
			            <td class="left">Ultrasound (Echography)</td>
			            <td><input type="number" min="0" name="ultrasound" class="form-control" value="<?php echo $table3->ultrasound; ?>"></td>
			          </tr>
								<tr>
									<td>3</td>
			            <td class="left">X-Ray Abdomen without Preparation</td>
			            <td><input type="number" min="0" name="abdomen_without" class="form-control" value="<?php echo $table3->abdomen_without; ?>"></td>
									<td>8</td>
			            <td class="left">ECG</td>
			            <td><input type="number" min="0" name="ecg" class="form-control" value="<?php echo $table3->ecg; ?>"></td>
			          </tr>
								<tr>
									<td>4</td>
			            <td class="left">X-Ray Abdomen with Dye</td>
			            <td><input type="number" min="0" name="abdomen_with" class="form-control" value="<?php echo $table3->abdomen_with; ?>"></td>
									<td>9</td>
			            <td class="left">Other Medical Imagery</td>
			            <td><input type="number" min="0" name="other_medical_img" class="form-control" value="<?php echo $table3->other_medical_img; ?>"></td>
			          </tr>
								<tr>
									<td>5</td>
			            <td class="left">X-Ray Other</td>
			            <td><input type="number" min="0" name="other_xray" class="form-control" value="<?php echo $table3->other_xray; ?>"></td>
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
		"bInfo": false
	});
	$('#XXV').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	});
	$('.dataTables_length').addClass('bs-select');
</script>
