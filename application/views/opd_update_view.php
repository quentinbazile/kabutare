<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>OPD</title>
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
		<div class="container-fluid">
			<h2>OPD - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('update_date'))); ?></h2>
			<div>
        <form method="post" action="" class="form-inline">
					<div class="row">
						<div class="col-xs-7">
			      	<h4>Outpatient Morbidity Summary Table</h4>
						</div>
						<div class="col-xs-5">
					  	<h4>Health Insurance Status of New Cases</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-7">
				      <table id="A2" class="center">
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
						<div class="col-xs-5">
				      <table id="B2" class="center" style="width:100%;">
				        <thead>
				          <tr>
				            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				            <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				          </tr>
				        </thead>
				        <tbody>
				          <tr>
				            <td class="left">Insured (Mutuelle or other insurance members)</td>
				            <td><input type="number" min="0" name="insured" class="form-control" value="<?php echo $table1->insured; ?>"></td>
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
					      <table id="C2" class="center">
					        <thead>
					          <tr>
					            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					            <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          </tr>
					        </thead>
					        <tbody>
					          <tr>
					            <td class="left">Referred to other levels</td>
					            <td><input type="number" min="0" name="other_levels" class="form-control" value="<?php echo $table1->other_levels; ?>"></td>
					          </tr>
					          <tr>
					            <td class="left">Counter referrals received</td>
					            <td><input type="number" min="0" name="counter_received" class="form-control" value="<?php echo $table1->counter_received; ?>"></td>
					          </tr>
					        </tbody>
					      </table>
							</div>
							<div class="col-xs-6">
			      		<table id="D2" class="center">
			        		<thead>
					          <tr>
					            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					            <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          </tr>
					        </thead>
			        		<tbody>
					          <tr>
					            <td class="left">New cases from the catchment area (zone)</td>
					            <td><input type="number" min="0" name="nc_catch" class="form-control" value="<?php echo $table1->nc_catch; ?>"></td>
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
						<div class="row">
							<h4>New cases of priority health problems in General OPD</h4>
						</div>
						<div class="row">
							<table id="E2" class="center">
								<thead>
				          <tr>
				            <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				            <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				            <th colspan="2">Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				            <th colspan="2">Age 5 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				            <th colspan="2">Age > 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				          </tr>
				          <tr>
				            <th>M</th>
				            <th>F</th>
				            <th>M</th>
				            <th>F</th>
				            <th>M</th>
				            <th>F</th>
				        </thead>
				        <tbody>
				          <tr>
				            <td>1</td>
				            <td class="left">Diarrhea with dehydration</td>
				            <td><input type="number" min="0" name="diar_w_dehy_5m" class="form-control" value="<?php echo $table1->diar_w_dehy_5m; ?>"></td>
				            <td><input type="number" min="0" name="diar_w_dehy_5f" class="form-control" value="<?php echo $table1->diar_w_dehy_5f; ?>"></td>
				            <td><input type="number" min="0" name="diar_w_dehy_19m" class="form-control" value="<?php echo $table1->diar_w_dehy_19m; ?>"></td>
				            <td><input type="number" min="0" name="diar_w_dehy_19f" class="form-control" value="<?php echo $table1->diar_w_dehy_19f; ?>"></td>
				            <td><input type="number" min="0" name="diar_w_dehy_20m" class="form-control" value="<?php echo $table1->diar_w_dehy_20m; ?>"></td>
				            <td><input type="number" min="0" name="diar_w_dehy_20f" class="form-control" value="<?php echo $table1->diar_w_dehy_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>2</td>
				            <td class="left">Diarrhea no dehydration</td>
				            <td><input type="number" min="0" name="diar_no_dehy_5m" class="form-control" value="<?php echo $table1->diar_no_dehy_5m; ?>"></td>
				            <td><input type="number" min="0" name="diar_no_dehy_5f" class="form-control" value="<?php echo $table1->diar_no_dehy_5f; ?>"></td>
				            <td><input type="number" min="0" name="diar_no_dehy_19m" class="form-control" value="<?php echo $table1->diar_no_dehy_19m; ?>"></td>
				            <td><input type="number" min="0" name="diar_no_dehy_19f" class="form-control" value="<?php echo $table1->diar_no_dehy_19f; ?>"></td>
				            <td><input type="number" min="0" name="diar_no_dehy_20m" class="form-control" value="<?php echo $table1->diar_no_dehy_20m; ?>"></td>
				            <td><input type="number" min="0" name="diar_no_dehy_20f" class="form-control" value="<?php echo $table1->diar_no_dehy_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>3</td>
				            <td class="left">Bloody diarrhea</td>
				            <td><input type="number" min="0" name="blood_diar_5m" class="form-control" value="<?php echo $table1->blood_diar_5m; ?>"></td>
				            <td><input type="number" min="0" name="blood_diar_5f" class="form-control" value="<?php echo $table1->blood_diar_5f; ?>"></td>
				            <td><input type="number" min="0" name="blood_diar_19m" class="form-control" value="<?php echo $table1->blood_diar_19m; ?>"></td>
				            <td><input type="number" min="0" name="blood_diar_19f" class="form-control" value="<?php echo $table1->blood_diar_19f; ?>"></td>
				            <td><input type="number" min="0" name="blood_diar_20m" class="form-control" value="<?php echo $table1->blood_diar_20m; ?>"></td>
				            <td><input type="number" min="0" name="blood_diar_20f" class="form-control" value="<?php echo $table1->blood_diar_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>4</td>
				            <td class="left">Food poisoning</td>
				            <td><input type="number" min="0" name="food_poison_5m" class="form-control" value="<?php echo $table1->food_poison_5m; ?>"></td>
				            <td><input type="number" min="0" name="food_poison_5f" class="form-control" value="<?php echo $table1->food_poison_5f; ?>"></td>
				            <td><input type="number" min="0" name="food_poison_19m" class="form-control" value="<?php echo $table1->food_poison_19m; ?>"></td>
				            <td><input type="number" min="0" name="food_poison_19f" class="form-control" value="<?php echo $table1->food_poison_19f; ?>"></td>
				            <td><input type="number" min="0" name="food_poison_20m" class="form-control" value="<?php echo $table1->food_poison_20m; ?>"></td>
				            <td><input type="number" min="0" name="food_poison_20f" class="form-control" value="<?php echo $table1->food_poison_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>5</td>
				            <td class="left">Ear infections</td>
				            <td><input type="number" min="0" name="ear_infect_5m" class="form-control" value="<?php echo $table1->ear_infect_5m; ?>"></td>
				            <td><input type="number" min="0" name="ear_infect_5f" class="form-control" value="<?php echo $table1->ear_infect_5f; ?>"></td>
				            <td><input type="number" min="0" name="ear_infect_19m" class="form-control" value="<?php echo $table1->ear_infect_19m; ?>"></td>
				            <td><input type="number" min="0" name="ear_infect_19f" class="form-control" value="<?php echo $table1->ear_infect_19f; ?>"></td>
				            <td><input type="number" min="0" name="ear_infect_20m" class="form-control" value="<?php echo $table1->ear_infect_20m; ?>"></td>
				            <td><input type="number" min="0" name="ear_infect_20f" class="form-control" value="<?php echo $table1->ear_infect_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>6</td>
				            <td class="left">Schistosomiasis</td>
				            <td><input type="number" min="0" name="schisto_5m" class="form-control" value="<?php echo $table1->schisto_5m; ?>"></td>
				            <td><input type="number" min="0" name="schisto_5f" class="form-control" value="<?php echo $table1->schisto_5f; ?>"></td>
				            <td><input type="number" min="0" name="schisto_19m" class="form-control" value="<?php echo $table1->schisto_19m; ?>"></td>
				            <td><input type="number" min="0" name="schisto_19f" class="form-control" value="<?php echo $table1->schisto_19f; ?>"></td>
				            <td><input type="number" min="0" name="schisto_20m" class="form-control" value="<?php echo $table1->schisto_20m; ?>"></td>
				            <td><input type="number" min="0" name="schisto_20f" class="form-control" value="<?php echo $table1->schisto_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>7</td>
				            <td class="left">Ascarislumbricoides</td>
				            <td><input type="number" min="0" name="ascaris_5m" class="form-control" value="<?php echo $table1->ascaris_5m; ?>"></td>
				            <td><input type="number" min="0" name="ascaris_5f" class="form-control" value="<?php echo $table1->ascaris_5f; ?>"></td>
				            <td><input type="number" min="0" name="ascaris_19m" class="form-control" value="<?php echo $table1->ascaris_19m; ?>"></td>
				            <td><input type="number" min="0" name="ascaris_19f" class="form-control" value="<?php echo $table1->ascaris_19f; ?>"></td>
				            <td><input type="number" min="0" name="ascaris_20m" class="form-control" value="<?php echo $table1->ascaris_20m; ?>"></td>
				            <td><input type="number" min="0" name="ascaris_20f" class="form-control" value="<?php echo $table1->ascaris_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>8</td>
				            <td class="left">Trichuristrichiura</td>
				            <td><input type="number" min="0" name="trichu_5m" class="form-control" value="<?php echo $table1->trichu_5m; ?>"></td>
				            <td><input type="number" min="0" name="trichu_5f" class="form-control" value="<?php echo $table1->trichu_5f; ?>"></td>
				            <td><input type="number" min="0" name="trichu_19m" class="form-control" value="<?php echo $table1->trichu_19m; ?>"></td>
				            <td><input type="number" min="0" name="trichu_19f" class="form-control" value="<?php echo $table1->trichu_19f; ?>"></td>
				            <td><input type="number" min="0" name="trichu_20m" class="form-control" value="<?php echo $table1->trichu_20m; ?>"></td>
				            <td><input type="number" min="0" name="trichu_20f" class="form-control" value="<?php echo $table1->trichu_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>9</td>
				            <td class="left">Hookworm</td>
				            <td><input type="number" min="0" name="hook_5m" class="form-control" value="<?php echo $table1->hook_5m; ?>"></td>
				            <td><input type="number" min="0" name="hook_5f" class="form-control" value="<?php echo $table1->hook_5f; ?>"></td>
				            <td><input type="number" min="0" name="hook_19m" class="form-control" value="<?php echo $table1->hook_19m; ?>"></td>
				            <td><input type="number" min="0" name="hook_19f" class="form-control" value="<?php echo $table1->hook_19f; ?>"></td>
				            <td><input type="number" min="0" name="hook_20m" class="form-control" value="<?php echo $table1->hook_20m; ?>"></td>
				            <td><input type="number" min="0" name="hook_20f" class="form-control" value="<?php echo $table1->hook_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>10</td>
				            <td class="left">Entamoeba</td>
				            <td><input type="number" min="0" name="entam_5m" class="form-control" value="<?php echo $table1->entam_5m; ?>"></td>
				            <td><input type="number" min="0" name="entam_5f" class="form-control" value="<?php echo $table1->entam_5f; ?>"></td>
				            <td><input type="number" min="0" name="entam_19m" class="form-control" value="<?php echo $table1->entam_19m; ?>"></td>
				            <td><input type="number" min="0" name="entam_19f" class="form-control" value="<?php echo $table1->entam_19f; ?>"></td>
				            <td><input type="number" min="0" name="entam_20m" class="form-control" value="<?php echo $table1->entam_20m; ?>"></td>
				            <td><input type="number" min="0" name="entam_20f" class="form-control" value="<?php echo $table1->entam_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>11</td>
				            <td class="left">Giardia</td>
				            <td><input type="number" min="0" name="giardia_5m" class="form-control" value="<?php echo $table1->giardia_5m; ?>"></td>
				            <td><input type="number" min="0" name="giardia_5f" class="form-control" value="<?php echo $table1->giardia_5f; ?>"></td>
				            <td><input type="number" min="0" name="giardia_19m" class="form-control" value="<?php echo $table1->giardia_19m; ?>"></td>
				            <td><input type="number" min="0" name="giardia_19f" class="form-control" value="<?php echo $table1->giardia_19f; ?>"></td>
				            <td><input type="number" min="0" name="giardia_20m" class="form-control" value="<?php echo $table1->giardia_20m; ?>"></td>
				            <td><input type="number" min="0" name="giardia_20f" class="form-control" value="<?php echo $table1->giardia_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>12</td>
				            <td>Taenia</td>
				            <td><input type="number" min="0" name="taenia_5m" class="form-control" value="<?php echo $table1->taenia_5m; ?>"></td>
				            <td><input type="number" min="0" name="taenia_5f" class="form-control" value="<?php echo $table1->taenia_5f; ?>"></td>
				            <td><input type="number" min="0" name="taenia_19m" class="form-control" value="<?php echo $table1->taenia_19m; ?>"></td>
				            <td><input type="number" min="0" name="taenia_19f" class="form-control" value="<?php echo $table1->taenia_19f; ?>"></td>
				            <td><input type="number" min="0" name="taenia_20m" class="form-control" value="<?php echo $table1->taenia_20m; ?>"></td>
				            <td><input type="number" min="0" name="taenia_20f" class="form-control" value="<?php echo $table1->taenia_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>13</td>
				            <td class="left">Malaria simple (not pregnant)</td>
				            <td><input type="number" min="0" name="malaria_s_5m" class="form-control" value="<?php echo $table1->malaria_s_5m; ?>"></td>
				            <td><input type="number" min="0" name="malaria_s_5f" class="form-control" value="<?php echo $table1->malaria_s_5f; ?>"></td>
				            <td><input type="number" min="0" name="malaria_s_19m" class="form-control" value="<?php echo $table1->malaria_s_19m; ?>"></td>
				            <td><input type="number" min="0" name="malaria_s_19f" class="form-control" value="<?php echo $table1->malaria_s_19f; ?>"></td>
				            <td><input type="number" min="0" name="malaria_s_20m" class="form-control" value="<?php echo $table1->malaria_s_20m; ?>"></td>
				            <td><input type="number" min="0" name="malaria_s_20f" class="form-control" value="<?php echo $table1->malaria_s_20f; ?>"></td>
				          </tr>
									<tr>
				            <td>14</td>
				            <td class="left">Malaria with minor digestive symptoms (not pregnant)</td>
				            <td><input type="number" min="0" name="malaria_dig_5m" class="form-control" value="<?php echo $table1->malaria_dig_5m; ?>"></td>
				            <td><input type="number" min="0" name="malaria_dig_5f" class="form-control" value="<?php echo $table1->malaria_dig_5f; ?>"></td>
				            <td><input type="number" min="0" name="malaria_dig_19m" class="form-control" value="<?php echo $table1->malaria_dig_19m; ?>"></td>
				            <td><input type="number" min="0" name="malaria_dig_19f" class="form-control" value="<?php echo $table1->malaria_dig_19f; ?>"></td>
				            <td><input type="number" min="0" name="malaria_dig_20m" class="form-control" value="<?php echo $table1->malaria_dig_20m; ?>"></td>
				            <td><input type="number" min="0" name="malaria_dig_20f" class="form-control" value="<?php echo $table1->malaria_dig_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>15</td>
				            <td class="left">Herpes simpplex infections</td>
				            <td><input type="number" min="0" name="herpes_s_5m" class="form-control" value="<?php echo $table1->herpes_s_5m; ?>"></td>
				            <td><input type="number" min="0" name="herpes_s_5f" class="form-control" value="<?php echo $table1->herpes_s_5f; ?>"></td>
				            <td><input type="number" min="0" name="herpes_s_19m" class="form-control" value="<?php echo $table1->herpes_s_19m; ?>"></td>
				            <td><input type="number" min="0" name="herpes_s_19f" class="form-control" value="<?php echo $table1->herpes_s_19f; ?>"></td>
				            <td><input type="number" min="0" name="herpes_s_20m" class="form-control" value="<?php echo $table1->herpes_s_20m; ?>"></td>
				            <td><input type="number" min="0" name="herpes_s_20f" class="form-control" value="<?php echo $table1->herpes_s_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>16</td>
				            <td class="left">Meningitis suspected</td>
				            <td><input type="number" min="0" name="mening_5m" class="form-control" value="<?php echo $table1->mening_5m; ?>"></td>
				            <td><input type="number" min="0" name="mening_5f" class="form-control" value="<?php echo $table1->mening_5f; ?>"></td>
				            <td><input type="number" min="0" name="mening_19m" class="form-control" value="<?php echo $table1->mening_19m; ?>"></td>
				            <td><input type="number" min="0" name="mening_19f" class="form-control" value="<?php echo $table1->mening_19f; ?>"></td>
				            <td><input type="number" min="0" name="mening_20m" class="form-control" value="<?php echo $table1->mening_20m; ?>"></td>
				            <td><input type="number" min="0" name="mening_20f" class="form-control" value="<?php echo $table1->mening_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>17</td>
				            <td class="left">Pneumonia simple</td>
				            <td><input type="number" min="0" name="pneumonia_simp_5m" class="form-control" value="<?php echo $table1->pneumonia_simp_5m; ?>"></td>
				            <td><input type="number" min="0" name="pneumonia_simp_5f" class="form-control" value="<?php echo $table1->pneumonia_simp_5f; ?>"></td>
				            <td><input type="number" min="0" name="pneumonia_simp_19m" class="form-control" value="<?php echo $table1->pneumonia_simp_19m; ?>"></td>
				            <td><input type="number" min="0" name="pneumonia_simp_19f" class="form-control" value="<?php echo $table1->pneumonia_simp_19f; ?>"></td>
				            <td><input type="number" min="0" name="pneumonia_simp_20m" class="form-control" value="<?php echo $table1->pneumonia_simp_20m; ?>"></td>
				            <td><input type="number" min="0" name="pneumonia_simp_20f" class="form-control" value="<?php echo $table1->pneumonia_simp_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>18</td>
				            <td class="left">Pneumonia severe</td>
				            <td><input type="number" min="0" name="pneumonia_sev_5m" class="form-control" value="<?php echo $table1->pneumonia_sev_5m; ?>"></td>
				            <td><input type="number" min="0" name="pneumonia_sev_5f" class="form-control" value="<?php echo $table1->pneumonia_sev_5f; ?>"></td>
				            <td><input type="number" min="0" name="pneumonia_sev_19m" class="form-control" value="<?php echo $table1->pneumonia_sev_19m; ?>"></td>
				            <td><input type="number" min="0" name="pneumonia_sev_19f" class="form-control" value="<?php echo $table1->pneumonia_sev_19f; ?>"></td>
				            <td><input type="number" min="0" name="pneumonia_sev_20m" class="form-control" value="<?php echo $table1->pneumonia_sev_20m; ?>"></td>
				            <td><input type="number" min="0" name="pneumonia_sev_20f" class="form-control" value="<?php echo $table1->pneumonia_sev_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>19</td>
				            <td class="left">Influenza/Syndrome gripal</td>
				            <td><input type="number" min="0" name="grip_5m" class="form-control" value="<?php echo $table1->grip_5m; ?>"></td>
				            <td><input type="number" min="0" name="grip_5f" class="form-control" value="<?php echo $table1->grip_5f; ?>"></td>
				            <td><input type="number" min="0" name="grip_19m" class="form-control" value="<?php echo $table1->grip_19m; ?>"></td>
				            <td><input type="number" min="0" name="grip_19f" class="form-control" value="<?php echo $table1->grip_19f; ?>"></td>
				            <td><input type="number" min="0" name="grip_20m" class="form-control" value="<?php echo $table1->grip_20m; ?>"></td>
				            <td><input type="number" min="0" name="grip_20f" class="form-control" value="<?php echo $table1->grip_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>20</td>
				            <td class="left">Respiratory infections acute (ARI) other</td>
				            <td><input type="number" min="0" name="ari_5m" class="form-control" value="<?php echo $table1->ari_5m; ?>"></td>
				            <td><input type="number" min="0" name="ari_5f" class="form-control" value="<?php echo $table1->ari_5f; ?>"></td>
				            <td><input type="number" min="0" name="ari_19m" class="form-control" value="<?php echo $table1->ari_19m; ?>"></td>
				            <td><input type="number" min="0" name="ari_19f" class="form-control" value="<?php echo $table1->ari_19f; ?>"></td>
				            <td><input type="number" min="0" name="ari_20m" class="form-control" value="<?php echo $table1->ari_20m; ?>"></td>
				            <td><input type="number" min="0" name="ari_20f" class="form-control" value="<?php echo $table1->ari_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>21</td>
				            <td class="left">Gastritis and duodenitis</td>
				            <td><input type="number" min="0" name="gast_duoden_5m" class="form-control" value="<?php echo $table1->gast_duoden_5m; ?>"></td>
				            <td><input type="number" min="0" name="gast_duoden_5f" class="form-control" value="<?php echo $table1->gast_duoden_5f; ?>"></td>
				            <td><input type="number" min="0" name="gast_duoden_19m" class="form-control" value="<?php echo $table1->gast_duoden_19m; ?>"></td>
				            <td><input type="number" min="0" name="gast_duoden_19f" class="form-control" value="<?php echo $table1->gast_duoden_19f; ?>"></td>
				            <td><input type="number" min="0" name="gast_duoden_20m" class="form-control" value="<?php echo $table1->gast_duoden_20m; ?>"></td>
				            <td><input type="number" min="0" name="gast_duoden_20f" class="form-control" value="<?php echo $table1->gast_duoden_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>22</td>
				            <td class="left">Abscesses</td>
				            <td><input type="number" min="0" name="absces_5m" class="form-control" value="<?php echo $table1->absces_5m; ?>"></td>
				            <td><input type="number" min="0" name="absces_5f" class="form-control" value="<?php echo $table1->absces_5f; ?>"></td>
				            <td><input type="number" min="0" name="absces_19m" class="form-control" value="<?php echo $table1->absces_19m; ?>"></td>
				            <td><input type="number" min="0" name="absces_19f" class="form-control" value="<?php echo $table1->absces_19f; ?>"></td>
				            <td><input type="number" min="0" name="absces_20m" class="form-control" value="<?php echo $table1->absces_20m; ?>"></td>
				            <td><input type="number" min="0" name="absces_20f" class="form-control" value="<?php echo $table1->absces_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>23</td>
				            <td class="left">Ulcers of skin</td>
				            <td><input type="number" min="0" name="ulcers_5m" class="form-control" value="<?php echo $table1->ulcers_5m; ?>"></td>
				            <td><input type="number" min="0" name="ulcers_5f" class="form-control" value="<?php echo $table1->ulcers_5f; ?>"></td>
				            <td><input type="number" min="0" name="ulcers_19m" class="form-control" value="<?php echo $table1->ulcers_19m; ?>"></td>
				            <td><input type="number" min="0" name="ulcers_19f" class="form-control" value="<?php echo $table1->ulcers_19f; ?>"></td>
				            <td><input type="number" min="0" name="ulcers_20m" class="form-control" value="<?php echo $table1->ulcers_20m; ?>"></td>
				            <td><input type="number" min="0" name="ulcers_20f" class="form-control" value="<?php echo $table1->ulcers_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>24</td>
				            <td class="left">Skin infection scabies</td>
				            <td><input type="number" min="0" name="scabies_5m" class="form-control" value="<?php echo $table1->scabies_5m; ?>"></td>
				            <td><input type="number" min="0" name="scabies_5f" class="form-control" value="<?php echo $table1->scabies_5f; ?>"></td>
				            <td><input type="number" min="0" name="scabies_19m" class="form-control" value="<?php echo $table1->scabies_19m; ?>"></td>
				            <td><input type="number" min="0" name="scabies_19f" class="form-control" value="<?php echo $table1->scabies_19f; ?>"></td>
				            <td><input type="number" min="0" name="scabies_20m" class="form-control" value="<?php echo $table1->scabies_20m; ?>"></td>
				            <td><input type="number" min="0" name="scabies_20f" class="form-control" value="<?php echo $table1->scabies_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>25</td>
				            <td class="left">Skin infection fungal (mycoses) superficial</td>
				            <td><input type="number" min="0" name="mycoses_5m" class="form-control" value="<?php echo $table1->mycoses_5m; ?>"></td>
				            <td><input type="number" min="0" name="mycoses_5f" class="form-control" value="<?php echo $table1->mycoses_5f; ?>"></td>
				            <td><input type="number" min="0" name="mycoses_19m" class="form-control" value="<?php echo $table1->mycoses_19m; ?>"></td>
				            <td><input type="number" min="0" name="mycoses_19f" class="form-control" value="<?php echo $table1->mycoses_19f; ?>"></td>
				            <td><input type="number" min="0" name="mycoses_20m" class="form-control" value="<?php echo $table1->mycoses_20m; ?>"></td>
				            <td><input type="number" min="0" name="mycoses_20f" class="form-control" value="<?php echo $table1->mycoses_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>26</td>
				            <td class="left">Skin infections other</td>
				            <td><input type="number" min="0" name="si_others_5m" class="form-control" value="<?php echo $table1->si_others_5m; ?>"></td>
				            <td><input type="number" min="0" name="si_others_5f" class="form-control" value="<?php echo $table1->si_others_5f; ?>"></td>
				            <td><input type="number" min="0" name="si_others_19m" class="form-control" value="<?php echo $table1->si_others_19m; ?>"></td>
				            <td><input type="number" min="0" name="si_others_19f" class="form-control" value="<?php echo $table1->si_others_19f; ?>"></td>
				            <td><input type="number" min="0" name="si_others_20m" class="form-control" value="<?php echo $table1->si_others_20m; ?>"></td>
				            <td><input type="number" min="0" name="si_others_20f" class="form-control" value="<?php echo $table1->si_others_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>27</td>
				            <td class="left">Urinary tract infections</td>
				            <td><input type="number" min="0" name="urinary_ti_5m" class="form-control" value="<?php echo $table1->urinary_ti_5m; ?>"></td>
				            <td><input type="number" min="0" name="urinary_ti_5f" class="form-control" value="<?php echo $table1->urinary_ti_5f; ?>"></td>
				            <td><input type="number" min="0" name="urinary_ti_19m" class="form-control" value="<?php echo $table1->urinary_ti_19m; ?>"></td>
				            <td><input type="number" min="0" name="urinary_ti_19f" class="form-control" value="<?php echo $table1->urinary_ti_19f; ?>"></td>
				            <td><input type="number" min="0" name="urinary_ti_20m" class="form-control" value="<?php echo $table1->urinary_ti_20m; ?>"></td>
				            <td><input type="number" min="0" name="urinary_ti_20f" class="form-control" value="<?php echo $table1->urinary_ti_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>28</td>
				            <td class="left">Anemia (confirmed)</td>
				            <td><input type="number" min="0" name="anemia_5m" class="form-control" value="<?php echo $table1->anemia_5m; ?>"></td>
				            <td><input type="number" min="0" name="anemia_5f" class="form-control" value="<?php echo $table1->anemia_5f; ?>"></td>
				            <td><input type="number" min="0" name="anemia_19m" class="form-control" value="<?php echo $table1->anemia_19m; ?>"></td>
				            <td><input type="number" min="0" name="anemia_19f" class="form-control" value="<?php echo $table1->anemia_19f; ?>"></td>
				            <td><input type="number" min="0" name="anemia_20m" class="form-control" value="<?php echo $table1->anemia_20m; ?>"></td>
				            <td><input type="number" min="0" name="anemia_20f" class="form-control" value="<?php echo $table1->anemia_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>29</td>
				            <td class="left">Measles suspected</td>
				            <td><input type="number" min="0" name="measles_susp_5m" class="form-control" value="<?php echo $table1->measles_susp_5m; ?>"></td>
				            <td><input type="number" min="0" name="measles_susp_5f" class="form-control" value="<?php echo $table1->measles_susp_5f; ?>"></td>
				            <td><input type="number" min="0" name="measles_susp_19m" class="form-control" value="<?php echo $table1->measles_susp_19m; ?>"></td>
				            <td><input type="number" min="0" name="measles_susp_19f" class="form-control" value="<?php echo $table1->measles_susp_19f; ?>"></td>
				            <td><input type="number" min="0" name="measles_susp_20m" class="form-control" value="<?php echo $table1->measles_susp_20m; ?>"></td>
				            <td><input type="number" min="0" name="measles_susp_20f" class="form-control" value="<?php echo $table1->measles_susp_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>30</td>
				            <td class="left">Measles confirmed cases</td>
				            <td><input type="number" min="0" name="measles_conf_5m" class="form-control" value="<?php echo $table1->measles_conf_5m; ?>"></td>
				            <td><input type="number" min="0" name="measles_conf_5f" class="form-control" value="<?php echo $table1->measles_conf_5f; ?>"></td>
				            <td><input type="number" min="0" name="measles_conf_19m" class="form-control" value="<?php echo $table1->measles_conf_19m; ?>"></td>
				            <td><input type="number" min="0" name="measles_conf_19f" class="form-control" value="<?php echo $table1->measles_conf_19f; ?>"></td>
				            <td><input type="number" min="0" name="measles_conf_20m" class="form-control" value="<?php echo $table1->measles_conf_20m; ?>"></td>
				            <td><input type="number" min="0" name="measles_conf_20f" class="form-control" value="<?php echo $table1->measles_conf_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>31</td>
				            <td class="left">Rubella confirmed cases</td>
				            <td><input type="number" min="0" name="rubella_conf_5m" class="form-control" value="<?php echo $table1->rubella_conf_5m; ?>"></td>
				            <td><input type="number" min="0" name="rubella_conf_5f" class="form-control" value="<?php echo $table1->rubella_conf_5f; ?>"></td>
				            <td><input type="number" min="0" name="rubella_conf_19m" class="form-control" value="<?php echo $table1->rubella_conf_19m; ?>"></td>
				            <td><input type="number" min="0" name="rubella_conf_19f" class="form-control" value="<?php echo $table1->rubella_conf_19f; ?>"></td>
				            <td><input type="number" min="0" name="rubella_conf_20m" class="form-control" value="<?php echo $table1->rubella_conf_20m; ?>"></td>
				            <td><input type="number" min="0" name="rubella_conf_20f" class="form-control" value="<?php echo $table1->rubella_conf_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>32</td>
				            <td class="left">Acute flaccid paralysis cases</td>
				            <td><input type="number" min="0" name="flaccid_paraly_5m" class="form-control" value="<?php echo $table1->flaccid_paraly_5m; ?>"></td>
				            <td><input type="number" min="0" name="flaccid_paraly_5f" class="form-control" value="<?php echo $table1->flaccid_paraly_5f; ?>"></td>
				            <td><input type="number" min="0" name="flaccid_paraly_19m" class="form-control" value="<?php echo $table1->flaccid_paraly_19m; ?>"></td>
				            <td><input type="number" min="0" name="flaccid_paraly_19f" class="form-control" value="<?php echo $table1->flaccid_paraly_19f; ?>"></td>
				            <td><input type="number" min="0" name="flaccid_paraly_20m" class="form-control" value="<?php echo $table1->flaccid_paraly_20m; ?>"></td>
				            <td><input type="number" min="0" name="flaccid_paraly_20f" class="form-control" value="<?php echo $table1->flaccid_paraly_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>33</td>
				            <td class="left">Tetanus</td>
				            <td><input type="number" min="0" name="tetanus_5m" class="form-control" value="<?php echo $table1->tetanus_5m; ?>"></td>
				            <td><input type="number" min="0" name="tetanus_5f" class="form-control" value="<?php echo $table1->tetanus_5f; ?>"></td>
				            <td><input type="number" min="0" name="tetanus_19m" class="form-control" value="<?php echo $table1->tetanus_19m; ?>"></td>
				            <td><input type="number" min="0" name="tetanus_19f" class="form-control" value="<?php echo $table1->tetanus_19f; ?>"></td>
				            <td><input type="number" min="0" name="tetanus_20m" class="form-control" value="<?php echo $table1->tetanus_20m; ?>"></td>
				            <td><input type="number" min="0" name="tetanus_20f" class="form-control" value="<?php echo $table1->tetanus_20f; ?>"></td>
				          </tr>
				          <tr>
				            <td>34</td>
				            <td class="left">Viral hepatitis (A, B, Chronic & others)</td>
				            <td><input type="number" min="0" name="hepatitis_5m" class="form-control" value="<?php echo $table1->hepatitis_5m; ?>"></td>
				            <td><input type="number" min="0" name="hepatitis_5f" class="form-control" value="<?php echo $table1->hepatitis_5f; ?>"></td>
				            <td><input type="number" min="0" name="hepatitis_19m" class="form-control" value="<?php echo $table1->hepatitis_19m; ?>"></td>
				            <td><input type="number" min="0" name="hepatitis_19f" class="form-control" value="<?php echo $table1->hepatitis_19f; ?>"></td>
				            <td><input type="number" min="0" name="hepatitis_20m" class="form-control" value="<?php echo $table1->hepatitis_20m; ?>"></td>
				            <td><input type="number" min="0" name="hepatitis_20f" class="form-control" value="<?php echo $table1->hepatitis_20f; ?>"></td>
				          </tr>
				        </tbody>
							</table>
						</div>
						<br>
            <div class="row">
              <h4>New cases of HIV/AIDS/and Non-Communicable diseases</h4>
            </div>
            <div class="row">
              <table id="F2" class="center">
                <thead>
                  <tr>
                    <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age 5 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th colspan="2">Age > 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                  <tr>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                    <th>M</th>
                    <th>F</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Fractures</td>
                    <td><input type="number" min="0" name="fractures_5m" class="form-control" value="<?php echo $table2->fractures_5m; ?>"></td>
                    <td><input type="number" min="0" name="fractures_5f" class="form-control" value="<?php echo $table2->fractures_5f; ?>"></td>
                    <td><input type="number" min="0" name="fractures_19m" class="form-control" value="<?php echo $table2->fractures_19m; ?>"></td>
                    <td><input type="number" min="0" name="fractures_19f" class="form-control" value="<?php echo $table2->fractures_19f; ?>"></td>
                    <td><input type="number" min="0" name="fractures_20m" class="form-control" value="<?php echo $table2->fractures_20m; ?>"></td>
                    <td><input type="number" min="0" name="fractures_20f" class="form-control" value="<?php echo $table2->fractures_20f; ?>"></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Physical traumas, other than fractures</td>
                    <td><input type="number" min="0" name="phys_traumas_5m" class="form-control" value="<?php echo $table2->phys_traumas_5m; ?>"></td>
                    <td><input type="number" min="0" name="phys_traumas_5f" class="form-control" value="<?php echo $table2->phys_traumas_5f; ?>"></td>
                    <td><input type="number" min="0" name="phys_traumas_19m" class="form-control" value="<?php echo $table2->phys_traumas_19m; ?>"></td>
                    <td><input type="number" min="0" name="phys_traumas_19f" class="form-control" value="<?php echo $table2->phys_traumas_19f; ?>"></td>
                    <td><input type="number" min="0" name="phys_traumas_20m" class="form-control" value="<?php echo $table2->phys_traumas_20m; ?>"></td>
                    <td><input type="number" min="0" name="phys_traumas_20f" class="form-control" value="<?php echo $table2->phys_traumas_20f; ?>"></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Bone and joint disorder, other than fractures</td>
                    <td><input type="number" min="0" name="bone_joint_disord_5m" class="form-control" value="<?php echo $table2->bone_joint_disord_5m; ?>"></td>
                    <td><input type="number" min="0" name="bone_joint_disord_5f" class="form-control" value="<?php echo $table2->bone_joint_disord_5f; ?>"></td>
                    <td><input type="number" min="0" name="bone_joint_disord_19m" class="form-control" value="<?php echo $table2->bone_joint_disord_19m; ?>"></td>
                    <td><input type="number" min="0" name="bone_joint_disord_19f" class="form-control" value="<?php echo $table2->bone_joint_disord_19f; ?>"></td>
                    <td><input type="number" min="0" name="bone_joint_disord_20m" class="form-control" value="<?php echo $table2->bone_joint_disord_20m; ?>"></td>
                    <td><input type="number" min="0" name="bone_joint_disord_20f" class="form-control" value="<?php echo $table2->bone_joint_disord_20f; ?>"></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="left">Gynecological problems</td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td class="grey"></td>
                    <td><input type="number" min="0" name="gyneco_pb_19f" class="form-control" value="<?php echo $table2->gyneco_pb_19f; ?>"></td>
                    <td class="grey"></td>
                    <td><input type="number" min="0" name="gyneco_pb_20f" class="form-control" value="<?php echo $table2->gyneco_pb_20f; ?>"></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="left">AIDS clinical</td>
                    <td><input type="number" min="0" name="aids_5m" class="form-control" value="<?php echo $table2->aids_5m; ?>"></td>
                    <td><input type="number" min="0" name="aids_5f" class="form-control" value="<?php echo $table2->aids_5f; ?>"></td>
                    <td><input type="number" min="0" name="aids_19m" class="form-control" value="<?php echo $table2->aids_19m; ?>"></td>
                    <td><input type="number" min="0" name="aids_19f" class="form-control" value="<?php echo $table2->aids_19f; ?>"></td>
                    <td><input type="number" min="0" name="aids_20m" class="form-control" value="<?php echo $table2->aids_20m; ?>"></td>
                    <td><input type="number" min="0" name="aids_20f" class="form-control" value="<?php echo $table2->aids_20f; ?>"></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="left">Skin infection opportunistic</td>
                    <td><input type="number" min="0" name="si_opport_5m" class="form-control" value="<?php echo $table2->si_opport_5m; ?>"></td>
                    <td><input type="number" min="0" name="si_opport_5f" class="form-control" value="<?php echo $table2->si_opport_5f; ?>"></td>
                    <td><input type="number" min="0" name="si_opport_19m" class="form-control" value="<?php echo $table2->si_opport_19m; ?>"></td>
                    <td><input type="number" min="0" name="si_opport_19f" class="form-control" value="<?php echo $table2->si_opport_19f; ?>"></td>
                    <td><input type="number" min="0" name="si_opport_20m" class="form-control" value="<?php echo $table2->si_opport_20m; ?>"></td>
                    <td><input type="number" min="0" name="si_opport_20f" class="form-control" value="<?php echo $table2->si_opport_20f; ?>"></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td class="left">Herpes zoster (zona/shingles)</td>
                    <td><input type="number" min="0" name="herpes_z_5m" class="form-control" value="<?php echo $table2->herpes_z_5m; ?>"></td>
                    <td><input type="number" min="0" name="herpes_z_5f" class="form-control" value="<?php echo $table2->herpes_z_5f; ?>"></td>
                    <td><input type="number" min="0" name="herpes_z_19m" class="form-control" value="<?php echo $table2->herpes_z_19m; ?>"></td>
                    <td><input type="number" min="0" name="herpes_z_19f" class="form-control" value="<?php echo $table2->herpes_z_19f; ?>"></td>
                    <td><input type="number" min="0" name="herpes_z_20m" class="form-control" value="<?php echo $table2->herpes_z_20m; ?>"></td>
                    <td><input type="number" min="0" name="herpes_z_20f" class="form-control" value="<?php echo $table2->herpes_z_20f; ?>"></td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="left">Candidiasis oral</td>
                    <td><input type="number" min="0" name="cand_oral_5m" class="form-control" value="<?php echo $table2->cand_oral_5m; ?>"></td>
                    <td><input type="number" min="0" name="cand_oral_5f" class="form-control" value="<?php echo $table2->cand_oral_5f; ?>"></td>
                    <td><input type="number" min="0" name="cand_oral_19m" class="form-control" value="<?php echo $table2->cand_oral_19m; ?>"></td>
                    <td><input type="number" min="0" name="cand_oral_19f" class="form-control" value="<?php echo $table2->cand_oral_19f; ?>"></td>
                    <td><input type="number" min="0" name="cand_oral_20m" class="form-control" value="<?php echo $table2->cand_oral_20m; ?>"></td>
                    <td><input type="number" min="0" name="cand_oral_20f" class="form-control" value="<?php echo $table2->cand_oral_20f; ?>"></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td class="left">Fever chronic (>1 month)</td>
                    <td><input type="number" min="0" name="fever_5m" class="form-control" value="<?php echo $table2->fever_5m; ?>"></td>
                    <td><input type="number" min="0" name="fever_5f" class="form-control" value="<?php echo $table2->fever_5f; ?>"></td>
                    <td><input type="number" min="0" name="fever_19m" class="form-control" value="<?php echo $table2->fever_19m; ?>"></td>
                    <td><input type="number" min="0" name="fever_19f" class="form-control" value="<?php echo $table2->fever_19f; ?>"></td>
                    <td><input type="number" min="0" name="fever_20m" class="form-control" value="<?php echo $table2->fever_20m; ?>"></td>
                    <td><input type="number" min="0" name="fever_20f" class="form-control" value="<?php echo $table2->fever_20f; ?>"></td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td class="left">Diarrhea chronic opportunistic infections</td>
                    <td><input type="number" min="0" name="diar_chro_opp_infect_5m" class="form-control" value="<?php echo $table2->diar_chro_opp_infect_5m; ?>"></td>
                    <td><input type="number" min="0" name="diar_chro_opp_infect_5f" class="form-control" value="<?php echo $table2->diar_chro_opp_infect_5f; ?>"></td>
                    <td><input type="number" min="0" name="diar_chro_opp_infect_19m" class="form-control" value="<?php echo $table2->diar_chro_opp_infect_19m; ?>"></td>
                    <td><input type="number" min="0" name="diar_chro_opp_infect_19f" class="form-control" value="<?php echo $table2->diar_chro_opp_infect_19f; ?>"></td>
                    <td><input type="number" min="0" name="diar_chro_opp_infect_20m" class="form-control" value="<?php echo $table2->diar_chro_opp_infect_20m; ?>"></td>
                    <td><input type="number" min="0" name="diar_chro_opp_infect_20f" class="form-control" value="<?php echo $table2->diar_chro_opp_infect_20f; ?>"></td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td class="left">Needle stick-injuries (or other health worker HIV exposure)</td>
                    <td><input type="number" min="0" name="needle_5m" class="form-control" value="<?php echo $table2->needle_5m; ?>"></td>
                    <td><input type="number" min="0" name="needle_5f" class="form-control" value="<?php echo $table2->needle_5f; ?>"></td>
                    <td><input type="number" min="0" name="needle_19m" class="form-control" value="<?php echo $table2->needle_19m; ?>"></td>
                    <td><input type="number" min="0" name="needle_19f" class="form-control" value="<?php echo $table2->needle_19f; ?>"></td>
                    <td><input type="number" min="0" name="needle_20m" class="form-control" value="<?php echo $table2->needle_20m; ?>"></td>
                    <td><input type="number" min="0" name="needle_20f" class="form-control" value="<?php echo $table2->needle_20f; ?>"></td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td class="left">Goitre</td>
                    <td><input type="number" min="0" name="goitre_5m" class="form-control" value="<?php echo $table2->goitre_5m; ?>"></td>
                    <td><input type="number" min="0" name="goitre_5f" class="form-control" value="<?php echo $table2->goitre_5f; ?>"></td>
                    <td><input type="number" min="0" name="goitre_19m" class="form-control" value="<?php echo $table2->goitre_19m; ?>"></td>
                    <td><input type="number" min="0" name="goitre_19f" class="form-control" value="<?php echo $table2->goitre_19f; ?>"></td>
                    <td><input type="number" min="0" name="goitre_20m" class="form-control" value="<?php echo $table2->goitre_20m; ?>"></td>
                    <td><input type="number" min="0" name="goitre_20f" class="form-control" value="<?php echo $table2->goitre_20f; ?>"></td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td class="left">Vitamin A deficiency - Night blindness</td>
                    <td><input type="number" min="0" name="va_def_5m" class="form-control" value="<?php echo $table2->va_def_5m; ?>"></td>
                    <td><input type="number" min="0" name="va_def_5f" class="form-control" value="<?php echo $table2->va_def_5f; ?>"></td>
                    <td><input type="number" min="0" name="va_def_19m" class="form-control" value="<?php echo $table2->va_def_19m; ?>"></td>
                    <td><input type="number" min="0" name="va_def_19f" class="form-control" value="<?php echo $table2->va_def_19f; ?>"></td>
                    <td><input type="number" min="0" name="va_def_20m" class="form-control" value="<?php echo $table2->va_def_20m; ?>"></td>
                    <td><input type="number" min="0" name="va_def_20f" class="form-control" value="<?php echo $table2->va_def_20f; ?>"></td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td class="left">Leprosy (MB + PB)</td>
                    <td><input type="number" min="0" name="leprosy_5m" class="form-control" value="<?php echo $table2->leprosy_5m; ?>"></td>
                    <td><input type="number" min="0" name="leprosy_5f" class="form-control" value="<?php echo $table2->leprosy_5f; ?>"></td>
                    <td><input type="number" min="0" name="leprosy_19m" class="form-control" value="<?php echo $table2->leprosy_19m; ?>"></td>
                    <td><input type="number" min="0" name="leprosy_19f" class="form-control" value="<?php echo $table2->leprosy_19f; ?>"></td>
                    <td><input type="number" min="0" name="leprosy_20m" class="form-control" value="<?php echo $table2->leprosy_20m; ?>"></td>
                    <td><input type="number" min="0" name="leprosy_20f" class="form-control" value="<?php echo $table2->leprosy_20f; ?>"></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <br>
            <div class="row">
              <div class="col-xs-6">
                <h4>Eye diseases</h4>
              </div>
              <div class="col-xs-6">
                <h4>Oral diseases</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <table id="Ga" class="center">
                  <thead>
                    <tr>
                      <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    </tr>
                    <tr>
                      <th>M</th>
                      <th>F</th>
                      <th>M</th>
                      <th>F</th>
                      <th>M</th>
                      <th>F</th>
                  </thead>
                  <tbody>
										<tr>
					            <td class="center">1</td>
					            <td class="left">Glaucoma</td>
					            <td><input type="number" min="0" name="glaucoma_19m" class="form-control" value="<?php echo $table2->glaucoma_19m; ?>"></td>
					            <td><input type="number" min="0" name="glaucoma_19f" class="form-control" value="<?php echo $table2->glaucoma_19f; ?>"></td>
					            <td><input type="number" min="0" name="glaucoma_39m" class="form-control" value="<?php echo $table2->glaucoma_39m; ?>"></td>
					            <td><input type="number" min="0" name="glaucoma_39f" class="form-control" value="<?php echo $table2->glaucoma_39f; ?>"></td>
					            <td><input type="number" min="0" name="glaucoma_40m" class="form-control" value="<?php echo $table2->glaucoma_40m; ?>"></td>
					            <td><input type="number" min="0" name="glaucoma_40f" class="form-control" value="<?php echo $table2->glaucoma_40f; ?>"></td>
					          </tr>
					          <tr>
					            <td class="center">2</td>
					            <td class="left">Cataract</td>
					            <td><input type="number" min="0" name="cataract_19m" class="form-control" value="<?php echo $table2->cataract_19m; ?>"></td>
					            <td><input type="number" min="0" name="cataract_19f" class="form-control" value="<?php echo $table2->cataract_19f; ?>"></td>
					            <td><input type="number" min="0" name="cataract_39m" class="form-control" value="<?php echo $table2->cataract_39m; ?>"></td>
					            <td><input type="number" min="0" name="cataract_39f" class="form-control" value="<?php echo $table2->cataract_39f; ?>"></td>
					            <td><input type="number" min="0" name="cataract_40m" class="form-control" value="<?php echo $table2->cataract_40m; ?>"></td>
					            <td><input type="number" min="0" name="cataract_40f" class="form-control" value="<?php echo $table2->cataract_40f; ?>"></td>
					          </tr>
					          <tr>
					            <td class="center">3</td>
					            <td class="left">Refractive error</td>
					            <td><input type="number" min="0" name="refrac_error_19m" class="form-control" value="<?php echo $table2->refrac_error_19m; ?>"></td>
					            <td><input type="number" min="0" name="refrac_error_19f" class="form-control" value="<?php echo $table2->refrac_error_19f; ?>"></td>
					            <td><input type="number" min="0" name="refrac_error_39m" class="form-control" value="<?php echo $table2->refrac_error_39m; ?>"></td>
					            <td><input type="number" min="0" name="refrac_error_39f" class="form-control" value="<?php echo $table2->refrac_error_39f; ?>"></td>
					            <td><input type="number" min="0" name="refrac_error_40m" class="form-control" value="<?php echo $table2->refrac_error_40m; ?>"></td>
					            <td><input type="number" min="0" name="refrac_error_40f" class="form-control" value="<?php echo $table2->refrac_error_40f; ?>"></td>
					          </tr>
					          <tr>
					            <td class="center">4</td>
					            <td class="left">Diabetic retinopathy</td>
					            <td><input type="number" min="0" name="diab_retino_19m" class="form-control" value="<?php echo $table2->diab_retino_19m; ?>"></td>
					            <td><input type="number" min="0" name="diab_retino_19f" class="form-control" value="<?php echo $table2->diab_retino_19f; ?>"></td>
					            <td><input type="number" min="0" name="diab_retino_39m" class="form-control" value="<?php echo $table2->diab_retino_39m; ?>"></td>
					            <td><input type="number" min="0" name="diab_retino_39f" class="form-control" value="<?php echo $table2->diab_retino_39f; ?>"></td>
					            <td><input type="number" min="0" name="diab_retino_40m" class="form-control" value="<?php echo $table2->diab_retino_40m; ?>"></td>
					            <td><input type="number" min="0" name="diab_retino_40f" class="form-control" value="<?php echo $table2->diab_retino_40f; ?>"></td>
					          </tr>
					          <tr>
					            <td class="center">5</td>
					            <td class="left">Conjunctivitis</td>
					            <td><input type="number" min="0" name="conjunctivitis_19m" class="form-control" value="<?php echo $table2->conjunctivitis_19m; ?>"></td>
					            <td><input type="number" min="0" name="conjunctivitis_19f" class="form-control" value="<?php echo $table2->conjunctivitis_19f; ?>"></td>
					            <td><input type="number" min="0" name="conjunctivitis_39m" class="form-control" value="<?php echo $table2->conjunctivitis_39m; ?>"></td>
					            <td><input type="number" min="0" name="conjunctivitis_39f" class="form-control" value="<?php echo $table2->conjunctivitis_39f; ?>"></td>
					            <td><input type="number" min="0" name="conjunctivitis_40m" class="form-control" value="<?php echo $table2->conjunctivitis_40m; ?>"></td>
					            <td><input type="number" min="0" name="conjunctivitis_40f" class="form-control" value="<?php echo $table2->conjunctivitis_40f; ?>"></td>
					          </tr>
					          <tr>
					            <td class="center">6</td>
					            <td class="left">Pinguecula</td>
					            <td><input type="number" min="0" name="pinguecula_19m" class="form-control" value="<?php echo $table2->pinguecula_19m; ?>"></td>
					            <td><input type="number" min="0" name="pinguecula_19f" class="form-control" value="<?php echo $table2->pinguecula_19f; ?>"></td>
					            <td><input type="number" min="0" name="pinguecula_39m" class="form-control" value="<?php echo $table2->pinguecula_39m; ?>"></td>
					            <td><input type="number" min="0" name="pinguecula_39f" class="form-control" value="<?php echo $table2->pinguecula_39f; ?>"></td>
					            <td><input type="number" min="0" name="pinguecula_40m" class="form-control" value="<?php echo $table2->pinguecula_40m; ?>"></td>
					            <td><input type="number" min="0" name="pinguecula_40f" class="form-control" value="<?php echo $table2->pinguecula_40f; ?>"></td>
					          </tr>
					          <tr>
					            <td class="center">7</td>
					            <td class="left">Uveitis</td>
					            <td><input type="number" min="0" name="uveitis_19m" class="form-control" value="<?php echo $table2->uveitis_19m; ?>"></td>
					            <td><input type="number" min="0" name="uveitis_19f" class="form-control" value="<?php echo $table2->uveitis_19f; ?>"></td>
					            <td><input type="number" min="0" name="uveitis_39m" class="form-control" value="<?php echo $table2->uveitis_39m; ?>"></td>
					            <td><input type="number" min="0" name="uveitis_39f" class="form-control" value="<?php echo $table2->uveitis_39f; ?>"></td>
					            <td><input type="number" min="0" name="uveitis_40m" class="form-control" value="<?php echo $table2->uveitis_40m; ?>"></td>
					            <td><input type="number" min="0" name="uveitis_40f" class="form-control" value="<?php echo $table2->uveitis_40f; ?>"></td>
					          </tr>
					          <tr>
					            <td class="center">8</td>
					            <td class="left">Eye trauma</td>
					            <td><input type="number" min="0" name="eye_trauma_19m" class="form-control" value="<?php echo $table2->eye_trauma_19m; ?>"></td>
					            <td><input type="number" min="0" name="eye_trauma_19f" class="form-control" value="<?php echo $table2->eye_trauma_19f; ?>"></td>
					            <td><input type="number" min="0" name="eye_trauma_39m" class="form-control" value="<?php echo $table2->eye_trauma_39m; ?>"></td>
					            <td><input type="number" min="0" name="eye_trauma_39f" class="form-control" value="<?php echo $table2->eye_trauma_39f; ?>"></td>
					            <td><input type="number" min="0" name="eye_trauma_40m" class="form-control" value="<?php echo $table2->eye_trauma_40m; ?>"></td>
					            <td><input type="number" min="0" name="eye_trauma_40f" class="form-control" value="<?php echo $table2->eye_trauma_40f; ?>"></td>
					          </tr>
					          <tr>
					            <td class="center">9</td>
					            <td class="left">Eye problem other</td>
					            <td><input type="number" min="0" name="eye_pb_19m" class="form-control" value="<?php echo $table2->eye_pb_19m; ?>"></td>
					            <td><input type="number" min="0" name="eye_pb_19f" class="form-control" value="<?php echo $table2->eye_pb_19f; ?>"></td>
					            <td><input type="number" min="0" name="eye_pb_39m" class="form-control" value="<?php echo $table2->eye_pb_39m; ?>"></td>
					            <td><input type="number" min="0" name="eye_pb_39f" class="form-control" value="<?php echo $table2->eye_pb_39f; ?>"></td>
					            <td><input type="number" min="0" name="eye_pb_40m" class="form-control" value="<?php echo $table2->eye_pb_40m; ?>"></td>
					            <td><input type="number" min="0" name="eye_pb_40f" class="form-control" value="<?php echo $table2->eye_pb_40f; ?>"></td>
					          </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-xs-6">
                <table id="Gb" class="center">
                  <thead>
                    <tr>
                      <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                      <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    </tr>
                    <tr>
                      <th>M</th>
                      <th>F</th>
                      <th>M</th>
                      <th>F</th>
                      <th>M</th>
                      <th>F</th>
                  </thead>
                  <tbody>
										<tr>
					            <td>10</td>
					            <td class="left">Dental Caries</td>
					            <td><input type="number" min="0" name="dent_caries_19m" class="form-control" value="<?php echo $table2->dent_caries_19m; ?>"></td>
					            <td><input type="number" min="0" name="dent_caries_19f" class="form-control" value="<?php echo $table2->dent_caries_19f; ?>"></td>
					            <td><input type="number" min="0" name="dent_caries_39m" class="form-control" value="<?php echo $table2->dent_caries_39m; ?>"></td>
					            <td><input type="number" min="0" name="dent_caries_39f" class="form-control" value="<?php echo $table2->dent_caries_39f; ?>"></td>
					            <td><input type="number" min="0" name="dent_caries_40m" class="form-control" value="<?php echo $table2->dent_caries_40m; ?>"></td>
					            <td><input type="number" min="0" name="dent_caries_40f" class="form-control" value="<?php echo $table2->dent_caries_40f; ?>"></td>
					          </tr>
					          <tr>
					            <td>11</td>
					            <td class="left">Periodontal Disease</td>
					            <td><input type="number" min="0" name="perio_diseas_19m" class="form-control" value="<?php echo $table2->perio_diseas_19m; ?>"></td>
					            <td><input type="number" min="0" name="perio_diseas_19f" class="form-control" value="<?php echo $table2->perio_diseas_19f; ?>"></td>
					            <td><input type="number" min="0" name="perio_diseas_39m" class="form-control" value="<?php echo $table2->perio_diseas_39m; ?>"></td>
					            <td><input type="number" min="0" name="perio_diseas_39f" class="form-control" value="<?php echo $table2->perio_diseas_39f; ?>"></td>
					            <td><input type="number" min="0" name="perio_diseas_40m" class="form-control" value="<?php echo $table2->perio_diseas_40m; ?>"></td>
					            <td><input type="number" min="0" name="perio_diseas_40f" class="form-control" value="<?php echo $table2->perio_diseas_40f; ?>"></td>
					          </tr>
					          <tr>
					            <td>12</td>
					            <td class="left">Other Teeth and Gum Infections</td>
					            <td><input type="number" min="0" name="other_teeth_19m" class="form-control" value="<?php echo $table2->other_teeth_19m; ?>"></td>
					            <td><input type="number" min="0" name="other_teeth_19f" class="form-control" value="<?php echo $table2->other_teeth_19f; ?>"></td>
					            <td><input type="number" min="0" name="other_teeth_39m" class="form-control" value="<?php echo $table2->other_teeth_39m; ?>"></td>
					            <td><input type="number" min="0" name="other_teeth_39f" class="form-control" value="<?php echo $table2->other_teeth_39f; ?>"></td>
					            <td><input type="number" min="0" name="other_teeth_40m" class="form-control" value="<?php echo $table2->other_teeth_40m; ?>"></td>
					            <td><input type="number" min="0" name="other_teeth_40f" class="form-control" value="<?php echo $table2->other_teeth_40f; ?>"></td>
					          </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <br>
            <h4>Diagnosis</h4>
						<div class="row">
	            <table id="B3" class="center">
					      <thead>
					        <tr>
					          <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="6">New cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					        </tr>
					        <tr>
					          <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
					          <td>1</td>
					          <td class="left">Anxiety disorders</td>
										<td><input type="number" min="0" name="anxiety_nc19m" class="form-control" value="<?php echo $table3->anxiety_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="anxiety_nc19f" class="form-control" value="<?php echo $table3->anxiety_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="anxiety_nc39m" class="form-control" value="<?php echo $table3->anxiety_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="anxiety_nc39f" class="form-control" value="<?php echo $table3->anxiety_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="anxiety_nc40m" class="form-control" value="<?php echo $table3->anxiety_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="anxiety_nc40f" class="form-control" value="<?php echo $table3->anxiety_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>2</td>
					          <td class="left">Post-traumatic stress disorders</td>
										<td><input type="number" min="0" name="stress_nc19m" class="form-control" value="<?php echo $table3->stress_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="stress_nc19f" class="form-control" value="<?php echo $table3->stress_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="stress_nc39m" class="form-control" value="<?php echo $table3->stress_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="stress_nc39f" class="form-control" value="<?php echo $table3->stress_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="stress_nc40m" class="form-control" value="<?php echo $table3->stress_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="stress_nc40f" class="form-control" value="<?php echo $table3->stress_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>3</td>
					          <td class="left">Schizophrenia and other psychoses</td>
										<td><input type="number" min="0" name="schizo_nc19m" class="form-control" value="<?php echo $table3->schizo_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="schizo_nc19f" class="form-control" value="<?php echo $table3->schizo_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="schizo_nc39m" class="form-control" value="<?php echo $table3->schizo_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="schizo_nc39f" class="form-control" value="<?php echo $table3->schizo_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="schizo_nc40m" class="form-control" value="<?php echo $table3->schizo_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="schizo_nc40f" class="form-control" value="<?php echo $table3->schizo_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>4</td>
					          <td class="left">Somatoform disorders</td>
										<td><input type="number" min="0" name="soma_nc19m" class="form-control" value="<?php echo $table3->soma_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="soma_nc19f" class="form-control" value="<?php echo $table3->soma_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="soma_nc39m" class="form-control" value="<?php echo $table3->soma_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="soma_nc39f" class="form-control" value="<?php echo $table3->soma_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="soma_nc40m" class="form-control" value="<?php echo $table3->soma_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="soma_nc40f" class="form-control" value="<?php echo $table3->soma_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>5</td>
					          <td class="left">Behavioral and emotional disorders with onset usually occurring in childhood and adolescence</td>
										<td><input type="number" min="0" name="child_nc19m" class="form-control" value="<?php echo $table3->child_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="child_nc19f" class="form-control" value="<?php echo $table3->child_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="child_nc39m" class="form-control" value="<?php echo $table3->child_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="child_nc39f" class="form-control" value="<?php echo $table3->child_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="child_nc40m" class="form-control" value="<?php echo $table3->child_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="child_nc40f" class="form-control" value="<?php echo $table3->child_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>6</td>
					          <td class="left">Mental and behavioral disorder due to use of alcohol</td>
										<td><input type="number" min="0" name="alcohol_nc19m" class="form-control" value="<?php echo $table3->alcohol_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="alcohol_nc19f" class="form-control" value="<?php echo $table3->alcohol_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="alcohol_nc39m" class="form-control" value="<?php echo $table3->alcohol_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="alcohol_nc39f" class="form-control" value="<?php echo $table3->alcohol_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="alcohol_nc40m" class="form-control" value="<?php echo $table3->alcohol_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="alcohol_nc40f" class="form-control" value="<?php echo $table3->alcohol_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>7</td>
					          <td class="left">Mental and behavioral disorder due to substance abuse</td>
										<td><input type="number" min="0" name="drugs_nc19m" class="form-control" value="<?php echo $table3->drugs_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="drugs_nc19f" class="form-control" value="<?php echo $table3->drugs_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="drugs_nc39m" class="form-control" value="<?php echo $table3->drugs_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="drugs_nc39f" class="form-control" value="<?php echo $table3->drugs_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="drugs_nc40m" class="form-control" value="<?php echo $table3->drugs_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="drugs_nc40f" class="form-control" value="<?php echo $table3->drugs_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>8</td>
					          <td class="left">Depression</td>
										<td><input type="number" min="0" name="dep_nc19m" class="form-control" value="<?php echo $table3->dep_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="dep_nc19f" class="form-control" value="<?php echo $table3->dep_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="dep_nc39m" class="form-control" value="<?php echo $table3->dep_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="dep_nc39f" class="form-control" value="<?php echo $table3->dep_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="dep_nc40m" class="form-control" value="<?php echo $table3->dep_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="dep_nc40f" class="form-control" value="<?php echo $table3->dep_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>9</td>
					          <td class="left">Suicide attempted</td>
										<td><input type="number" min="0" name="suicid_att_nc19m" class="form-control" value="<?php echo $table3->suicid_att_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="suicid_att_nc19f" class="form-control" value="<?php echo $table3->suicid_att_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="suicid_att_nc39m" class="form-control" value="<?php echo $table3->suicid_att_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="suicid_att_nc39f" class="form-control" value="<?php echo $table3->suicid_att_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="suicid_att_nc40m" class="form-control" value="<?php echo $table3->suicid_att_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="suicid_att_nc40f" class="form-control" value="<?php echo $table3->suicid_att_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>10</td>
					          <td class="left">Suicide deaths</td>
										<td><input type="number" min="0" name="suicid_d_nc19m" class="form-control" value="<?php echo $table3->suicid_d_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="suicid_d_nc19f" class="form-control" value="<?php echo $table3->suicid_d_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="suicid_d_nc39m" class="form-control" value="<?php echo $table3->suicid_d_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="suicid_d_nc39f" class="form-control" value="<?php echo $table3->suicid_d_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="suicid_d_nc40m" class="form-control" value="<?php echo $table3->suicid_d_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="suicid_d_nc40f" class="form-control" value="<?php echo $table3->suicid_d_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>11</td>
					          <td class="left">Maniac episode</td>
										<td><input type="number" min="0" name="maniac_nc19m" class="form-control" value="<?php echo $table3->maniac_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="maniac_nc19f" class="form-control" value="<?php echo $table3->maniac_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="maniac_nc39m" class="form-control" value="<?php echo $table3->maniac_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="maniac_nc39f" class="form-control" value="<?php echo $table3->maniac_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="maniac_nc40m" class="form-control" value="<?php echo $table3->maniac_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="maniac_nc40f" class="form-control" value="<?php echo $table3->maniac_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>12</td>
					          <td class="left">Bipolar disorders</td>
										<td><input type="number" min="0" name="bipolar_nc19m" class="form-control" value="<?php echo $table3->bipolar_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="bipolar_nc19f" class="form-control" value="<?php echo $table3->bipolar_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="bipolar_nc39m" class="form-control" value="<?php echo $table3->bipolar_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="bipolar_nc39f" class="form-control" value="<?php echo $table3->bipolar_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="bipolar_nc40m" class="form-control" value="<?php echo $table3->bipolar_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="bipolar_nc40f" class="form-control" value="<?php echo $table3->bipolar_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>13</td>
					          <td class="left">Other psychological / Mental behavioral disorders</td>
										<td><input type="number" min="0" name="other_psy_nc19m" class="form-control" value="<?php echo $table3->other_psy_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="other_psy_nc19f" class="form-control" value="<?php echo $table3->other_psy_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="other_psy_nc39m" class="form-control" value="<?php echo $table3->other_psy_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="other_psy_nc39f" class="form-control" value="<?php echo $table3->other_psy_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="other_psy_nc40m" class="form-control" value="<?php echo $table3->other_psy_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="other_psy_nc40f" class="form-control" value="<?php echo $table3->other_psy_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>14</td>
					          <td class="left">Epilepsy</td>
										<td><input type="number" min="0" name="epilepsy_nc19m" class="form-control" value="<?php echo $table3->epilepsy_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="epilepsy_nc19f" class="form-control" value="<?php echo $table3->epilepsy_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="epilepsy_nc39m" class="form-control" value="<?php echo $table3->epilepsy_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="epilepsy_nc39f" class="form-control" value="<?php echo $table3->epilepsy_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="epilepsy_nc40m" class="form-control" value="<?php echo $table3->epilepsy_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="epilepsy_nc40f" class="form-control" value="<?php echo $table3->epilepsy_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>15</td>
					          <td class="left">Other neurological disorders</td>
										<td><input type="number" min="0" name="other_neuro_nc19m" class="form-control" value="<?php echo $table3->other_neuro_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="other_neuro_nc19f" class="form-control" value="<?php echo $table3->other_neuro_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="other_neuro_nc39m" class="form-control" value="<?php echo $table3->other_neuro_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="other_neuro_nc39f" class="form-control" value="<?php echo $table3->other_neuro_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="other_neuro_nc40m" class="form-control" value="<?php echo $table3->other_neuro_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="other_neuro_nc40f" class="form-control" value="<?php echo $table3->other_neuro_nc40f; ?>"></td>
					        </tr>
					      </tbody>
					    </table>
						</div>
            <br>
            <h4>Chronic diseases</h4>
						<div class="row">
	            <table id="A4" class="center">
					      <thead>
					        <tr>
					          <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="6">New cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					        </tr>
					        <tr>
					          <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
					          <td class="grey"></td>
					          <td class="left">Medical condition</td>
					          <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                </tr>
					        <tr>
					          <td>1</td>
					          <td class="left">Hypertension</td>
					          <td><input type="number" min="0" name="hyper_nc19m" class="form-control" value="<?php echo $table4->hyper_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="hyper_nc19f" class="form-control" value="<?php echo $table4->hyper_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="hyper_nc39m" class="form-control" value="<?php echo $table4->hyper_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="hyper_nc39f" class="form-control" value="<?php echo $table4->hyper_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="hyper_nc40m" class="form-control" value="<?php echo $table4->hyper_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="hyper_nc40f" class="form-control" value="<?php echo $table4->hyper_nc40f; ?>"></td>
					        </tr>
	                <tr>
					          <td class="grey"></td>
					          <td class="left">Respiratory diseases</td>
					          <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                </tr>
	                <tr>
					          <td>1</td>
					          <td class="left">Asthma intermittant</td>
					          <td><input type="number" min="0" name="asth_int_nc19m" class="form-control" value="<?php echo $table4->asth_int_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="asth_int_nc19f" class="form-control" value="<?php echo $table4->asth_int_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="asth_int_nc39m" class="form-control" value="<?php echo $table4->asth_int_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="asth_int_nc39f" class="form-control" value="<?php echo $table4->asth_int_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="asth_int_nc40m" class="form-control" value="<?php echo $table4->asth_int_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="asth_int_nc40f" class="form-control" value="<?php echo $table4->asth_int_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>2</td>
					          <td class="left">Asthma persintent mild</td>
					          <td><input type="number" min="0" name="asth_mild_nc19m" class="form-control" value="<?php echo $table4->asth_mild_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="asth_mild_nc19f" class="form-control" value="<?php echo $table4->asth_mild_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="asth_mild_nc39m" class="form-control" value="<?php echo $table4->asth_mild_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="asth_mild_nc39f" class="form-control" value="<?php echo $table4->asth_mild_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="asth_mild_nc40m" class="form-control" value="<?php echo $table4->asth_mild_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="asth_mild_nc40f" class="form-control" value="<?php echo $table4->asth_mild_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>3</td>
					          <td class="left">Asthma persintent modarate</td>
					          <td><input type="number" min="0" name="asth_mod_nc19m" class="form-control" value="<?php echo $table4->asth_mod_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="asth_mod_nc19f" class="form-control" value="<?php echo $table4->asth_mod_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="asth_mod_nc39m" class="form-control" value="<?php echo $table4->asth_mod_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="asth_mod_nc39f" class="form-control" value="<?php echo $table4->asth_mod_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="asth_mod_nc40m" class="form-control" value="<?php echo $table4->asth_mod_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="asth_mod_nc40f" class="form-control" value="<?php echo $table4->asth_mod_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>4</td>
					          <td class="left">Asthma persintent severe</td>
					          <td><input type="number" min="0" name="asth_sev_nc19m" class="form-control" value="<?php echo $table4->asth_sev_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="asth_sev_nc19f" class="form-control" value="<?php echo $table4->asth_sev_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="asth_sev_nc39m" class="form-control" value="<?php echo $table4->asth_sev_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="asth_sev_nc39f" class="form-control" value="<?php echo $table4->asth_sev_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="asth_sev_nc40m" class="form-control" value="<?php echo $table4->asth_sev_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="asth_sev_nc40f" class="form-control" value="<?php echo $table4->asth_sev_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>5</td>
					          <td class="left">Bronchitis</td>
					          <td><input type="number" min="0" name="bronch_nc19m" class="form-control" value="<?php echo $table4->bronch_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="bronch_nc19f" class="form-control" value="<?php echo $table4->bronch_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="bronch_nc39m" class="form-control" value="<?php echo $table4->bronch_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="bronch_nc39f" class="form-control" value="<?php echo $table4->bronch_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="bronch_nc40m" class="form-control" value="<?php echo $table4->bronch_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="bronch_nc40f" class="form-control" value="<?php echo $table4->bronch_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>6</td>
					          <td class="left">Other Chronic obstructive pulmonary diseases</td>
					          <td><input type="number" min="0" name="other_pulm_nc19m" class="form-control" value="<?php echo $table4->other_pulm_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="other_pulm_nc19f" class="form-control" value="<?php echo $table4->other_pulm_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="other_pulm_nc39m" class="form-control" value="<?php echo $table4->other_pulm_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="other_pulm_nc39f" class="form-control" value="<?php echo $table4->other_pulm_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="other_pulm_nc40m" class="form-control" value="<?php echo $table4->other_pulm_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="other_pulm_nc40f" class="form-control" value="<?php echo $table4->other_pulm_nc40f; ?>"></td>
					        </tr>
	                <tr>
					          <td class="grey"></td>
					          <td class="left">Diabetes</td>
					          <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                </tr>
	                <tr>
					          <td>1</td>
					          <td class="left">Diabetes - Type 1</td>
					          <td><input type="number" min="0" name="diab1_nc19m" class="form-control" value="<?php echo $table4->diab1_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="diab1_nc19f" class="form-control" value="<?php echo $table4->diab1_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="diab1_nc39m" class="form-control" value="<?php echo $table4->diab1_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="diab1_nc39f" class="form-control" value="<?php echo $table4->diab1_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="diab1_nc40m" class="form-control" value="<?php echo $table4->diab1_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="diab1_nc40f" class="form-control" value="<?php echo $table4->diab1_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>2</td>
					          <td class="left">Diabetes - Type 2</td>
					          <td><input type="number" min="0" name="diab2_nc19m" class="form-control" value="<?php echo $table4->diab2_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="diab2_nc19f" class="form-control" value="<?php echo $table4->diab2_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="diab2_nc39m" class="form-control" value="<?php echo $table4->diab2_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="diab2_nc39f" class="form-control" value="<?php echo $table4->diab2_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="diab2_nc40m" class="form-control" value="<?php echo $table4->diab2_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="diab2_nc40f" class="form-control" value="<?php echo $table4->diab2_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>3</td>
					          <td class="left">Diabetes gestational</td>
					          <td><input type="number" min="0" name="diab_gest_nc19m" class="form-control" value="<?php echo $table4->diab_gest_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="diab_gest_nc19f" class="form-control" value="<?php echo $table4->diab_gest_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="diab_gest_nc39m" class="form-control" value="<?php echo $table4->diab_gest_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="diab_gest_nc39f" class="form-control" value="<?php echo $table4->diab_gest_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="diab_gest_nc40m" class="form-control" value="<?php echo $table4->diab_gest_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="diab_gest_nc40f" class="form-control" value="<?php echo $table4->diab_gest_nc40f; ?>"></td>
					        </tr>
	                <tr>
					          <td class="grey"></td>
					          <td class="left">Cancer</td>
					          <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                </tr>
	                <tr>
					          <td>1</td>
					          <td class="left">Breast Cancer</td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="breast_nc19f" class="form-control" value="<?php echo $table4->breast_nc19f; ?>"></td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="breast_nc39f" class="form-control" value="<?php echo $table4->breast_nc39f; ?>"></td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="breast_nc40f" class="form-control" value="<?php echo $table4->breast_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>2</td>
					          <td class="left">Cervical cancer</td>
					          <td><input type="number" min="0" name="cervical_nc19m" class="form-control" value="<?php echo $table4->cervical_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="cervical_nc19f" class="form-control" value="<?php echo $table4->cervical_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="cervical_nc39m" class="form-control" value="<?php echo $table4->cervical_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="cervical_nc39f" class="form-control" value="<?php echo $table4->cervical_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="cervical_nc40m" class="form-control" value="<?php echo $table4->cervical_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="cervical_nc40f" class="form-control" value="<?php echo $table4->cervical_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>3</td>
					          <td class="left">Lymphoma</td>
					          <td><input type="number" min="0" name="lympho_nc19m" class="form-control" value="<?php echo $table4->lympho_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="lympho_nc19f" class="form-control" value="<?php echo $table4->lympho_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="lympho_nc39m" class="form-control" value="<?php echo $table4->lympho_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="lympho_nc39f" class="form-control" value="<?php echo $table4->lympho_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="lympho_nc40m" class="form-control" value="<?php echo $table4->lympho_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="lympho_nc40f" class="form-control" value="<?php echo $table4->lympho_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>4</td>
					          <td class="left">Leucamia</td>
					          <td><input type="number" min="0" name="leuca_nc19m" class="form-control" value="<?php echo $table4->leuca_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="leuca_nc19f" class="form-control" value="<?php echo $table4->leuca_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="leuca_nc39m" class="form-control" value="<?php echo $table4->leuca_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="leuca_nc39f" class="form-control" value="<?php echo $table4->leuca_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="leuca_nc40m" class="form-control" value="<?php echo $table4->leuca_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="leuca_nc40f" class="form-control" value="<?php echo $table4->leuca_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>5</td>
					          <td class="left">Colon recto cancer</td>
					          <td><input type="number" min="0" name="colon_nc19m" class="form-control" value="<?php echo $table4->colon_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="colon_nc19f" class="form-control" value="<?php echo $table4->colon_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="colon_nc39m" class="form-control" value="<?php echo $table4->colon_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="colon_nc39f" class="form-control" value="<?php echo $table4->colon_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="colon_nc40m" class="form-control" value="<?php echo $table4->colon_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="colon_nc40f" class="form-control" value="<?php echo $table4->colon_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>6</td>
					          <td class="left">Kaposi sarcoma</td>
					          <td><input type="number" min="0" name="kaposi_nc19m" class="form-control" value="<?php echo $table4->kaposi_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="kaposi_nc19f" class="form-control" value="<?php echo $table4->kaposi_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="kaposi_nc39m" class="form-control" value="<?php echo $table4->kaposi_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="kaposi_nc39f" class="form-control" value="<?php echo $table4->kaposi_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="kaposi_nc40m" class="form-control" value="<?php echo $table4->kaposi_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="kaposi_nc40f" class="form-control" value="<?php echo $table4->kaposi_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>7</td>
					          <td class="left">Retinoblastoma</td>
					          <td><input type="number" min="0" name="retino_nc19m" class="form-control" value="<?php echo $table4->retino_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="retino_nc19f" class="form-control" value="<?php echo $table4->retino_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="retino_nc39m" class="form-control" value="<?php echo $table4->retino_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="retino_nc39f" class="form-control" value="<?php echo $table4->retino_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="retino_nc40m" class="form-control" value="<?php echo $table4->retino_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="retino_nc40f" class="form-control" value="<?php echo $table4->retino_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>8</td>
					          <td class="left">Nephroblastoma</td>
					          <td><input type="number" min="0" name="nephro_nc19m" class="form-control" value="<?php echo $table4->nephro_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="nephro_nc19f" class="form-control" value="<?php echo $table4->nephro_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="nephro_nc39m" class="form-control" value="<?php echo $table4->nephro_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="nephro_nc39f" class="form-control" value="<?php echo $table4->nephro_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="nephro_nc40m" class="form-control" value="<?php echo $table4->nephro_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="nephro_nc40f" class="form-control" value="<?php echo $table4->nephro_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>9</td>
					          <td class="left">Ovarian cancer</td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="ovarian_nc19f" class="form-control" value="<?php echo $table4->ovarian_nc19f; ?>"></td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="ovarian_nc39f" class="form-control" value="<?php echo $table4->ovarian_nc39f; ?>"></td>
					          <td class="grey"></td>
					          <td><input type="number" min="0" name="ovarian_nc40f" class="form-control" value="<?php echo $table4->ovarian_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>10</td>
					          <td class="left">Prostate cancer</td>
					          <td><input type="number" min="0" name="prostate_nc19m" class="form-control" value="<?php echo $table4->prostate_nc19m; ?>"></td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="prostate_nc39m" class="form-control" value="<?php echo $table4->prostate_nc39m; ?>"></td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="prostate_nc40m" class="form-control" value="<?php echo $table4->prostate_nc40m; ?>"></td>
	                  <td class="grey"></td>
					        </tr>
					        <tr>
					          <td>11</td>
					          <td class="left">Cancer others</td>
					          <td><input type="number" min="0" name="cancer_others_nc19m" class="form-control" value="<?php echo $table4->cancer_others_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="cancer_others_nc19f" class="form-control" value="<?php echo $table4->cancer_others_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="cancer_others_nc39m" class="form-control" value="<?php echo $table4->cancer_others_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="cancer_others_nc39f" class="form-control" value="<?php echo $table4->cancer_others_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="cancer_others_nc40m" class="form-control" value="<?php echo $table4->cancer_others_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="cancer_others_nc40f" class="form-control" value="<?php echo $table4->cancer_others_nc40f; ?>"></td>
					        </tr>
					      </tbody>
					    </table>
						</div>
            <br>
            <h4>Other cardiovascular and kindney diseases</h4>
						<div class="row">
	            <table id="A5" class="center">
					      <thead>
					        <tr>
					          <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="6">New cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					        </tr>
					        <tr>
					          <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
					          <td class="grey"></td>
					          <td class="left">Medical condition</td>
					          <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                </tr>
					        <tr>
					          <td>1</td>
					          <td class="left">Cardiomyopathies</td>
					          <td><input type="number" min="0" name="cardio_nc19m" class="form-control" value="<?php echo $table5->cardio_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="cardio_nc19f" class="form-control" value="<?php echo $table5->cardio_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="cardio_nc39m" class="form-control" value="<?php echo $table5->cardio_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="cardio_nc39f" class="form-control" value="<?php echo $table5->cardio_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="cardio_nc40m" class="form-control" value="<?php echo $table5->cardio_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="cardio_nc40f" class="form-control" value="<?php echo $table5->cardio_nc40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>2</td>
					          <td class="left">Stroke/TIA</td>
					          <td><input type="number" min="0" name="stroke_nc19m" class="form-control" value="<?php echo $table5->stroke_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="stroke_nc19f" class="form-control" value="<?php echo $table5->stroke_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="stroke_nc39m" class="form-control" value="<?php echo $table5->stroke_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="stroke_nc39f" class="form-control" value="<?php echo $table5->stroke_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="stroke_nc40m" class="form-control" value="<?php echo $table5->stroke_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="stroke_nc40f" class="form-control" value="<?php echo $table5->stroke_nc40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>3</td>
					          <td class="left">Rheumatic heart disease</td>
					          <td><input type="number" min="0" name="rheumatic_nc19m" class="form-control" value="<?php echo $table5->rheumatic_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="rheumatic_nc19f" class="form-control" value="<?php echo $table5->rheumatic_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="rheumatic_nc39m" class="form-control" value="<?php echo $table5->rheumatic_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="rheumatic_nc39f" class="form-control" value="<?php echo $table5->rheumatic_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="rheumatic_nc40m" class="form-control" value="<?php echo $table5->rheumatic_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="rheumatic_nc40f" class="form-control" value="<?php echo $table5->rheumatic_nc40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>4</td>
					          <td class="left">Congenital heart disease</td>
					          <td><input type="number" min="0" name="cong_nc19m" class="form-control" value="<?php echo $table5->cong_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="cong_nc19f" class="form-control" value="<?php echo $table5->cong_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="cong_nc39m" class="form-control" value="<?php echo $table5->cong_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="cong_nc39f" class="form-control" value="<?php echo $table5->cong_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="cong_nc40m" class="form-control" value="<?php echo $table5->cong_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="cong_nc40f" class="form-control" value="<?php echo $table5->cong_nc40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>5</td>
					          <td class="left">Coronary artery disease</td>
					          <td><input type="number" min="0" name="coronary_nc19m" class="form-control" value="<?php echo $table5->coronary_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="coronary_nc19f" class="form-control" value="<?php echo $table5->coronary_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="coronary_nc39m" class="form-control" value="<?php echo $table5->coronary_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="coronary_nc39f" class="form-control" value="<?php echo $table5->coronary_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="coronary_nc40m" class="form-control" value="<?php echo $table5->coronary_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="coronary_nc40f" class="form-control" value="<?php echo $table5->coronary_nc40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>6</td>
					          <td class="left">Pericardial disease</td>
					          <td><input type="number" min="0" name="peri_nc19m" class="form-control" value="<?php echo $table5->peri_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="peri_nc19f" class="form-control" value="<?php echo $table5->peri_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="peri_nc39m" class="form-control" value="<?php echo $table5->peri_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="peri_nc39f" class="form-control" value="<?php echo $table5->peri_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="peri_nc40m" class="form-control" value="<?php echo $table5->peri_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="peri_nc40f" class="form-control" value="<?php echo $table5->peri_nc40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>7</td>
					          <td class="left">Heart failure</td>
					          <td><input type="number" min="0" name="heart_nc19m" class="form-control" value="<?php echo $table5->heart_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="heart_nc19f" class="form-control" value="<?php echo $table5->heart_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="heart_nc39m" class="form-control" value="<?php echo $table5->heart_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="heart_nc39f" class="form-control" value="<?php echo $table5->heart_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="heart_nc40m" class="form-control" value="<?php echo $table5->heart_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="heart_nc40f" class="form-control" value="<?php echo $table5->heart_nc40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>8</td>
					          <td class="left">Other cardiovascular</td>
					          <td><input type="number" min="0" name="other_cardio_nc19m" class="form-control" value="<?php echo $table5->other_cardio_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="other_cardio_nc19f" class="form-control" value="<?php echo $table5->other_cardio_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="other_cardio_nc39m" class="form-control" value="<?php echo $table5->other_cardio_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="other_cardio_nc39f" class="form-control" value="<?php echo $table5->other_cardio_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="other_cardio_nc40m" class="form-control" value="<?php echo $table5->other_cardio_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="other_cardio_nc40f" class="form-control" value="<?php echo $table5->other_cardio_nc40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>9</td>
					          <td class="left">Post heart surgery</td>
					          <td><input type="number" min="0" name="post_heart_nc19m" class="form-control" value="<?php echo $table5->post_heart_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="post_heart_nc19f" class="form-control" value="<?php echo $table5->post_heart_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="post_heart_nc39m" class="form-control" value="<?php echo $table5->post_heart_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="post_heart_nc39f" class="form-control" value="<?php echo $table5->post_heart_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="post_heart_nc40m" class="form-control" value="<?php echo $table5->post_heart_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="post_heart_nc40f" class="form-control" value="<?php echo $table5->post_heart_nc40f; ?>"></td>
					        </tr>
	                <tr>
					          <td class="grey"></td>
					          <td class="left">Kidney diseases</td>
					          <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                </tr>
	                <tr>
					          <td>1</td>
					          <td class="left">Renal failure</td>
					          <td><input type="number" min="0" name="renal_nc19m" class="form-control" value="<?php echo $table5->renal_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="renal_nc19f" class="form-control" value="<?php echo $table5->renal_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="renal_nc39m" class="form-control" value="<?php echo $table5->renal_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="renal_nc39f" class="form-control" value="<?php echo $table5->renal_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="renal_nc40m" class="form-control" value="<?php echo $table5->renal_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="renal_nc40f" class="form-control" value="<?php echo $table5->renal_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>2</td>
					          <td class="left">Other chonic kidney diseases</td>
					          <td><input type="number" min="0" name="other_chronic_nc19m" class="form-control" value="<?php echo $table5->other_chronic_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="other_chronic_nc19f" class="form-control" value="<?php echo $table5->other_chronic_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="other_chronic_nc39m" class="form-control" value="<?php echo $table5->other_chronic_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="other_chronic_nc39f" class="form-control" value="<?php echo $table5->other_chronic_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="other_chronic_nc40m" class="form-control" value="<?php echo $table5->other_chronic_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="other_chronic_nc40f" class="form-control" value="<?php echo $table5->other_chronic_nc40f; ?>"></td>
					        </tr>
	                <tr>
					          <td class="grey"></td>
					          <td class="left">Metabolic diseases</td>
					          <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                </tr>
	                <tr>
					          <td>1</td>
					          <td class="left">Thyroid disease</td>
					          <td><input type="number" min="0" name="thyroid_nc19m" class="form-control" value="<?php echo $table5->thyroid_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="thyroid_nc19f" class="form-control" value="<?php echo $table5->thyroid_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="thyroid_nc39m" class="form-control" value="<?php echo $table5->thyroid_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="thyroid_nc39f" class="form-control" value="<?php echo $table5->thyroid_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="thyroid_nc40m" class="form-control" value="<?php echo $table5->thyroid_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="thyroid_nc40f" class="form-control" value="<?php echo $table5->thyroid_nc40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>2</td>
					          <td class="left">Other endocrine and metabolic diseases</td>
					          <td><input type="number" min="0" name="other_endo_nc19m" class="form-control" value="<?php echo $table5->other_endo_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="other_endo_nc19f" class="form-control" value="<?php echo $table5->other_endo_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="other_endo_nc39m" class="form-control" value="<?php echo $table5->other_endo_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="other_endo_nc39f" class="form-control" value="<?php echo $table5->other_endo_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="other_endo_nc40m" class="form-control" value="<?php echo $table5->other_endo_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="other_endo_nc40f" class="form-control" value="<?php echo $table5->other_endo_nc40f; ?>"></td>
					        </tr>
					      </tbody>
					    </table>
						</div>
						<br>
            <h4>Injuries</h4>
						<div class="row">
	            <table id="A6" class="center">
					      <thead>
					        <tr>
					          <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th rowspan="3">Cause of injury<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="6">New cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="6">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					        </tr>
					        <tr>
					          <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
						          <th colspan="2">Age < 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
						          <th colspan="2">Age 20 to 39<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
						          <th colspan="2">Age > 40<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					        </tr>
					        <tr>
					          <th>M</th>
					          <th>F</th>
					          <th>M</th>
					          <th>F</th>
					          <th>M</th>
					          <th>F</th>
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
					          <td>1</td>
					          <td class="left">Road traffic injuries (including cycling)</td>
					          <td><input type="number" min="0" name="road_nc19m" class="form-control" value="<?php echo $table6->road_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="road_nc19f" class="form-control" value="<?php echo $table6->road_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="road_nc39m" class="form-control" value="<?php echo $table6->road_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="road_nc39f" class="form-control" value="<?php echo $table6->road_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="road_nc40m" class="form-control" value="<?php echo $table6->road_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="road_nc40f" class="form-control" value="<?php echo $table6->road_nc40f; ?>"></td>
					          <td><input type="number" min="0" name="road_d19m" class="form-control" value="<?php echo $table6->road_d19m; ?>"></td>
					          <td><input type="number" min="0" name="road_d19f" class="form-control" value="<?php echo $table6->road_d19f; ?>"></td>
					          <td><input type="number" min="0" name="road_d39m" class="form-control" value="<?php echo $table6->road_d39m; ?>"></td>
					          <td><input type="number" min="0" name="road_d39f" class="form-control" value="<?php echo $table6->road_d39f; ?>"></td>
					          <td><input type="number" min="0" name="road_d40m" class="form-control" value="<?php echo $table6->road_d40m; ?>"></td>
					          <td><input type="number" min="0" name="road_d40f" class="form-control" value="<?php echo $table6->road_d40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>2</td>
					          <td class="left">Self-harm</td>
					          <td><input type="number" min="0" name="self_harm_nc19m" class="form-control" value="<?php echo $table6->self_harm_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="self_harm_nc19f" class="form-control" value="<?php echo $table6->self_harm_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="self_harm_nc39m" class="form-control" value="<?php echo $table6->self_harm_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="self_harm_nc39f" class="form-control" value="<?php echo $table6->self_harm_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="self_harm_nc40m" class="form-control" value="<?php echo $table6->self_harm_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="self_harm_nc40f" class="form-control" value="<?php echo $table6->self_harm_nc40f; ?>"></td>
					          <td><input type="number" min="0" name="self_harm_d19m" class="form-control" value="<?php echo $table6->self_harm_d19m; ?>"></td>
					          <td><input type="number" min="0" name="self_harm_d19f" class="form-control" value="<?php echo $table6->self_harm_d19f; ?>"></td>
					          <td><input type="number" min="0" name="self_harm_d39m" class="form-control" value="<?php echo $table6->self_harm_d39m; ?>"></td>
					          <td><input type="number" min="0" name="self_harm_d39f" class="form-control" value="<?php echo $table6->self_harm_d39f; ?>"></td>
					          <td><input type="number" min="0" name="self_harm_d40m" class="form-control" value="<?php echo $table6->self_harm_d40m; ?>"></td>
					          <td><input type="number" min="0" name="self_harm_d40f" class="form-control" value="<?php echo $table6->self_harm_d40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>3</td>
					          <td class="left">Interpersonal violence</td>
					          <td><input type="number" min="0" name="inter_violence_nc19m" class="form-control" value="<?php echo $table6->inter_violence_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="inter_violence_nc19f" class="form-control" value="<?php echo $table6->inter_violence_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="inter_violence_nc39m" class="form-control" value="<?php echo $table6->inter_violence_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="inter_violence_nc39f" class="form-control" value="<?php echo $table6->inter_violence_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="inter_violence_nc40m" class="form-control" value="<?php echo $table6->inter_violence_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="inter_violence_nc40f" class="form-control" value="<?php echo $table6->inter_violence_nc40f; ?>"></td>
					          <td><input type="number" min="0" name="inter_violence_d19m" class="form-control" value="<?php echo $table6->inter_violence_d19m; ?>"></td>
					          <td><input type="number" min="0" name="inter_violence_d19f" class="form-control" value="<?php echo $table6->inter_violence_d19f; ?>"></td>
					          <td><input type="number" min="0" name="inter_violence_d39m" class="form-control" value="<?php echo $table6->inter_violence_d39m; ?>"></td>
					          <td><input type="number" min="0" name="inter_violence_d39f" class="form-control" value="<?php echo $table6->inter_violence_d39f; ?>"></td>
					          <td><input type="number" min="0" name="inter_violence_d40m" class="form-control" value="<?php echo $table6->inter_violence_d40m; ?>"></td>
					          <td><input type="number" min="0" name="inter_violence_d40f" class="form-control" value="<?php echo $table6->inter_violence_d40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>4</td>
					          <td class="left">Other intentional injuries</td>
					          <td><input type="number" min="0" name="other_injury_nc19m" class="form-control" value="<?php echo $table6->other_injury_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="other_injury_nc19f" class="form-control" value="<?php echo $table6->other_injury_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="other_injury_nc39m" class="form-control" value="<?php echo $table6->other_injury_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="other_injury_nc39f" class="form-control" value="<?php echo $table6->other_injury_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="other_injury_nc40m" class="form-control" value="<?php echo $table6->other_injury_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="other_injury_nc40f" class="form-control" value="<?php echo $table6->other_injury_nc40f; ?>"></td>
					          <td><input type="number" min="0" name="other_injury_d19m" class="form-control" value="<?php echo $table6->other_injury_d19m; ?>"></td>
					          <td><input type="number" min="0" name="other_injury_d19f" class="form-control" value="<?php echo $table6->other_injury_d19f; ?>"></td>
					          <td><input type="number" min="0" name="other_injury_d39m" class="form-control" value="<?php echo $table6->other_injury_d39m; ?>"></td>
					          <td><input type="number" min="0" name="other_injury_d39f" class="form-control" value="<?php echo $table6->other_injury_d39f; ?>"></td>
					          <td><input type="number" min="0" name="other_injury_d40m" class="form-control" value="<?php echo $table6->other_injury_d40m; ?>"></td>
					          <td><input type="number" min="0" name="other_injury_d40f" class="form-control" value="<?php echo $table6->other_injury_d40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>5</td>
					          <td class="left">Falls</td>
					          <td><input type="number" min="0" name="falls_nc19m" class="form-control" value="<?php echo $table6->falls_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="falls_nc19f" class="form-control" value="<?php echo $table6->falls_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="falls_nc39m" class="form-control" value="<?php echo $table6->falls_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="falls_nc39f" class="form-control" value="<?php echo $table6->falls_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="falls_nc40m" class="form-control" value="<?php echo $table6->falls_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="falls_nc40f" class="form-control" value="<?php echo $table6->falls_nc40f; ?>"></td>
					          <td><input type="number" min="0" name="falls_d19m" class="form-control" value="<?php echo $table6->falls_d19m; ?>"></td>
					          <td><input type="number" min="0" name="falls_d19f" class="form-control" value="<?php echo $table6->falls_d19f; ?>"></td>
					          <td><input type="number" min="0" name="falls_d39m" class="form-control" value="<?php echo $table6->falls_d39m; ?>"></td>
					          <td><input type="number" min="0" name="falls_d39f" class="form-control" value="<?php echo $table6->falls_d39f; ?>"></td>
					          <td><input type="number" min="0" name="falls_d40m" class="form-control" value="<?php echo $table6->falls_d40m; ?>"></td>
					          <td><input type="number" min="0" name="falls_d40f" class="form-control" value="<?php echo $table6->falls_d40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>6</td>
					          <td class="left">Drowning</td>
					          <td><input type="number" min="0" name="drowning_nc19m" class="form-control" value="<?php echo $table6->drowning_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="drowning_nc19f" class="form-control" value="<?php echo $table6->drowning_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="drowning_nc39m" class="form-control" value="<?php echo $table6->drowning_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="drowning_nc39f" class="form-control" value="<?php echo $table6->drowning_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="drowning_nc40m" class="form-control" value="<?php echo $table6->drowning_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="drowning_nc40f" class="form-control" value="<?php echo $table6->drowning_nc40f; ?>"></td>
					          <td><input type="number" min="0" name="drowning_d19m" class="form-control" value="<?php echo $table6->drowning_d19m; ?>"></td>
					          <td><input type="number" min="0" name="drowning_d19f" class="form-control" value="<?php echo $table6->drowning_d19f; ?>"></td>
					          <td><input type="number" min="0" name="drowning_d39m" class="form-control" value="<?php echo $table6->drowning_d39m; ?>"></td>
					          <td><input type="number" min="0" name="drowning_d39f" class="form-control" value="<?php echo $table6->drowning_d39f; ?>"></td>
					          <td><input type="number" min="0" name="drowning_d40m" class="form-control" value="<?php echo $table6->drowning_d40m; ?>"></td>
					          <td><input type="number" min="0" name="drowning_d40f" class="form-control" value="<?php echo $table6->drowning_d40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>7</td>
					          <td class="left">Fire/burns (thermo, electrical, chemical)</td>
					          <td><input type="number" min="0" name="fire_nc19m" class="form-control" value="<?php echo $table6->fire_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="fire_nc19f" class="form-control" value="<?php echo $table6->fire_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="fire_nc39m" class="form-control" value="<?php echo $table6->fire_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="fire_nc39f" class="form-control" value="<?php echo $table6->fire_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="fire_nc40m" class="form-control" value="<?php echo $table6->fire_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="fire_nc40f" class="form-control" value="<?php echo $table6->fire_nc40f; ?>"></td>
					          <td><input type="number" min="0" name="fire_d19m" class="form-control" value="<?php echo $table6->fire_d19m; ?>"></td>
					          <td><input type="number" min="0" name="fire_d19f" class="form-control" value="<?php echo $table6->fire_d19f; ?>"></td>
					          <td><input type="number" min="0" name="fire_d39m" class="form-control" value="<?php echo $table6->fire_d39m; ?>"></td>
					          <td><input type="number" min="0" name="fire_d39f" class="form-control" value="<?php echo $table6->fire_d39f; ?>"></td>
					          <td><input type="number" min="0" name="fire_d40m" class="form-control" value="<?php echo $table6->fire_d40m; ?>"></td>
					          <td><input type="number" min="0" name="fire_d40f" class="form-control" value="<?php echo $table6->fire_d40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>8</td>
					          <td class="left">Animal contact</td>
					          <td><input type="number" min="0" name="animal_nc19m" class="form-control" value="<?php echo $table6->animal_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="animal_nc19f" class="form-control" value="<?php echo $table6->animal_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="animal_nc39m" class="form-control" value="<?php echo $table6->animal_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="animal_nc39f" class="form-control" value="<?php echo $table6->animal_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="animal_nc40m" class="form-control" value="<?php echo $table6->animal_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="animal_nc40f" class="form-control" value="<?php echo $table6->animal_nc40f; ?>"></td>
					          <td><input type="number" min="0" name="animal_d19m" class="form-control" value="<?php echo $table6->animal_d19m; ?>"></td>
					          <td><input type="number" min="0" name="animal_d19f" class="form-control" value="<?php echo $table6->animal_d19f; ?>"></td>
					          <td><input type="number" min="0" name="animal_d39m" class="form-control" value="<?php echo $table6->animal_d39m; ?>"></td>
					          <td><input type="number" min="0" name="animal_d39f" class="form-control" value="<?php echo $table6->animal_d39f; ?>"></td>
					          <td><input type="number" min="0" name="animal_d40m" class="form-control" value="<?php echo $table6->animal_d40m; ?>"></td>
					          <td><input type="number" min="0" name="animal_d40f" class="form-control" value="<?php echo $table6->animal_d40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>9</td>
					          <td class="left">Poisoning</td>
					          <td><input type="number" min="0" name="poison_nc19m" class="form-control" value="<?php echo $table6->poison_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="poison_nc19f" class="form-control" value="<?php echo $table6->poison_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="poison_nc39m" class="form-control" value="<?php echo $table6->poison_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="poison_nc39f" class="form-control" value="<?php echo $table6->poison_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="poison_nc40m" class="form-control" value="<?php echo $table6->poison_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="poison_nc40f" class="form-control" value="<?php echo $table6->poison_nc40f; ?>"></td>
					          <td><input type="number" min="0" name="poison_d19m" class="form-control" value="<?php echo $table6->poison_d19m; ?>"></td>
					          <td><input type="number" min="0" name="poison_d19f" class="form-control" value="<?php echo $table6->poison_d19f; ?>"></td>
					          <td><input type="number" min="0" name="poison_d39m" class="form-control" value="<?php echo $table6->poison_d39m; ?>"></td>
					          <td><input type="number" min="0" name="poison_d39f" class="form-control" value="<?php echo $table6->poison_d39f; ?>"></td>
					          <td><input type="number" min="0" name="poison_d40m" class="form-control" value="<?php echo $table6->poison_d40m; ?>"></td>
					          <td><input type="number" min="0" name="poison_d40f" class="form-control" value="<?php echo $table6->poison_d40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>10</td>
					          <td class="left">Natural disasters</td>
					          <td><input type="number" min="0" name="natural_disasters_nc19m" class="form-control" value="<?php echo $table6->natural_disasters_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="natural_disasters_nc19f" class="form-control" value="<?php echo $table6->natural_disasters_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="natural_disasters_nc39m" class="form-control" value="<?php echo $table6->natural_disasters_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="natural_disasters_nc39f" class="form-control" value="<?php echo $table6->natural_disasters_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="natural_disasters_nc40m" class="form-control" value="<?php echo $table6->natural_disasters_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="natural_disasters_nc40f" class="form-control" value="<?php echo $table6->natural_disasters_nc40f; ?>"></td>
					          <td><input type="number" min="0" name="natural_disasters_d19m" class="form-control" value="<?php echo $table6->natural_disasters_d19m; ?>"></td>
					          <td><input type="number" min="0" name="natural_disasters_d19f" class="form-control" value="<?php echo $table6->natural_disasters_d19f; ?>"></td>
					          <td><input type="number" min="0" name="natural_disasters_d39m" class="form-control" value="<?php echo $table6->natural_disasters_d39m; ?>"></td>
					          <td><input type="number" min="0" name="natural_disasters_d39f" class="form-control" value="<?php echo $table6->natural_disasters_d39f; ?>"></td>
					          <td><input type="number" min="0" name="natural_disasters_d40m" class="form-control" value="<?php echo $table6->natural_disasters_d40m; ?>"></td>
					          <td><input type="number" min="0" name="natural_disasters_d40f" class="form-control" value="<?php echo $table6->natural_disasters_d40f; ?>"></td>
					        </tr>
					        <tr>
					          <td>11</td>
					          <td class="left">Adverse effects of medical treatment</td>
					          <td><input type="number" min="0" name="ad_effects_nc19m" class="form-control" value="<?php echo $table6->ad_effects_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="ad_effects_nc19f" class="form-control" value="<?php echo $table6->ad_effects_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="ad_effects_nc39m" class="form-control" value="<?php echo $table6->ad_effects_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="ad_effects_nc39f" class="form-control" value="<?php echo $table6->ad_effects_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="ad_effects_nc40m" class="form-control" value="<?php echo $table6->ad_effects_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="ad_effects_nc40f" class="form-control" value="<?php echo $table6->ad_effects_nc40f; ?>"></td>
					          <td><input type="number" min="0" name="ad_effects_d19m" class="form-control" value="<?php echo $table6->ad_effects_d19m; ?>"></td>
					          <td><input type="number" min="0" name="ad_effects_d19f" class="form-control" value="<?php echo $table6->ad_effects_d19f; ?>"></td>
					          <td><input type="number" min="0" name="ad_effects_d39m" class="form-control" value="<?php echo $table6->ad_effects_d39m; ?>"></td>
					          <td><input type="number" min="0" name="ad_effects_d39f" class="form-control" value="<?php echo $table6->ad_effects_d39f; ?>"></td>
					          <td><input type="number" min="0" name="ad_effects_d40m" class="form-control" value="<?php echo $table6->ad_effects_d40m; ?>"></td>
					          <td><input type="number" min="0" name="ad_effects_d40f" class="form-control" value="<?php echo $table6->ad_effects_d40f; ?>"></td>
					        </tr>
	                <tr>
					          <td>12</td>
					          <td class="left">Other unintentional injuries</td>
					          <td><input type="number" min="0" name="other_unintent_nc19m" class="form-control" value="<?php echo $table6->other_unintent_nc19m; ?>"></td>
					          <td><input type="number" min="0" name="other_unintent_nc19f" class="form-control" value="<?php echo $table6->other_unintent_nc19f; ?>"></td>
					          <td><input type="number" min="0" name="other_unintent_nc39m" class="form-control" value="<?php echo $table6->other_unintent_nc39m; ?>"></td>
					          <td><input type="number" min="0" name="other_unintent_nc39f" class="form-control" value="<?php echo $table6->other_unintent_nc39f; ?>"></td>
					          <td><input type="number" min="0" name="other_unintent_nc40m" class="form-control" value="<?php echo $table6->other_unintent_nc40m; ?>"></td>
					          <td><input type="number" min="0" name="other_unintent_nc40f" class="form-control" value="<?php echo $table6->other_unintent_nc40f; ?>"></td>
					          <td><input type="number" min="0" name="other_unintent_d19m" class="form-control" value="<?php echo $table6->other_unintent_d19m; ?>"></td>
					          <td><input type="number" min="0" name="other_unintent_d19f" class="form-control" value="<?php echo $table6->other_unintent_d19f; ?>"></td>
					          <td><input type="number" min="0" name="other_unintent_d39m" class="form-control" value="<?php echo $table6->other_unintent_d39m; ?>"></td>
					          <td><input type="number" min="0" name="other_unintent_d39f" class="form-control" value="<?php echo $table6->other_unintent_d39f; ?>"></td>
					          <td><input type="number" min="0" name="other_unintent_d40m" class="form-control" value="<?php echo $table6->other_unintent_d40m; ?>"></td>
					          <td><input type="number" min="0" name="other_unintent_d40f" class="form-control" value="<?php echo $table6->other_unintent_d40f; ?>"></td>
					        </tr>
					      </tbody>
					    </table>
						</div>
						<br>
            <h4>Palliative care</h4>
						<div class="row">
	            <table id="A7" class="center">
					      <thead>
					        <tr>
					          <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="2">Age < 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="2">Age > 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					        </tr>
					        <tr>
					          <th>M</th>
					          <th>F</th>
					          <th>M</th>
					          <th>F</th>
									</tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td>1</td>
					          <td class="left">Total patients in palliative care at the beginning of the month (old cases)</td>
					          <td><input type="number" min="0" name="oc_19m" class="form-control" value="<?php echo $table7->oc_19m; ?>"></td>
					          <td><input type="number" min="0" name="oc_19f" class="form-control" value="<?php echo $table7->oc_19f; ?>"></td>
					          <td><input type="number" min="0" name="oc_20m" class="form-control" value="<?php echo $table7->oc_20m; ?>"></td>
					          <td><input type="number" min="0" name="oc_20f" class="form-control" value="<?php echo $table7->oc_20f; ?>"></td>
					        </tr>
	                <tr>
					          <td>2</td>
					          <td class="left">Patients in palliative care new cases this month (new cases)</td>
					          <td><input type="number" min="0" name="nc_19m" class="form-control" value="<?php echo $table7->nc_19m; ?>"></td>
					          <td><input type="number" min="0" name="nc_19f" class="form-control" value="<?php echo $table7->nc_19f; ?>"></td>
					          <td><input type="number" min="0" name="nc_20m" class="form-control" value="<?php echo $table7->nc_20m; ?>"></td>
					          <td><input type="number" min="0" name="nc_20f" class="form-control" value="<?php echo $table7->nc_20f; ?>"></td>
					        </tr>
	                <tr>
					          <td>3</td>
					          <td class="left">Patients seen by the palliative care team at the least four time this month</td>
					          <td><input type="number" min="0" name="4time_19m" class="form-control" value="<?php echo $table7->4time_19m; ?>"></td>
					          <td><input type="number" min="0" name="4time_19f" class="form-control" value="<?php echo $table7->4time_19f; ?>"></td>
					          <td><input type="number" min="0" name="4time_20m" class="form-control" value="<?php echo $table7->4time_20m; ?>"></td>
					          <td><input type="number" min="0" name="4time_20f" class="form-control" value="<?php echo $table7->4time_20f; ?>"></td>
					        </tr>
	                <tr>
					          <td>4</td>
					          <td class="left">Severe pain patients that receive morphine</td>
					          <td><input type="number" min="0" name="morphine_19m" class="form-control" value="<?php echo $table7->morphine_19m; ?>"></td>
					          <td><input type="number" min="0" name="morphine_19f" class="form-control" value="<?php echo $table7->morphine_19f; ?>"></td>
					          <td><input type="number" min="0" name="morphine_20m" class="form-control" value="<?php echo $table7->morphine_20m; ?>"></td>
					          <td><input type="number" min="0" name="morphine_20f" class="form-control" value="<?php echo $table7->morphine_20f; ?>"></td>
					        </tr>
	                <tr>
					          <td>5</td>
					          <td class="left">Died received end of life care and bereavement support</td>
					          <td><input type="number" min="0" name="end_life_19m" class="form-control" value="<?php echo $table7->end_life_19m; ?>"></td>
					          <td><input type="number" min="0" name="end_life_19f" class="form-control" value="<?php echo $table7->end_life_19f; ?>"></td>
					          <td><input type="number" min="0" name="end_life_20m" class="form-control" value="<?php echo $table7->end_life_20m; ?>"></td>
					          <td><input type="number" min="0" name="end_life_20f" class="form-control" value="<?php echo $table7->end_life_20f; ?>"></td>
					        </tr>
	                <tr>
					          <td>6</td>
					          <td class="left">Total death in palliative care</td>
					          <td><input type="number" min="0" name="death_19m" class="form-control" value="<?php echo $table7->death_19m; ?>"></td>
					          <td><input type="number" min="0" name="death_19f" class="form-control" value="<?php echo $table7->death_19f; ?>"></td>
					          <td><input type="number" min="0" name="death_20m" class="form-control" value="<?php echo $table7->death_20m; ?>"></td>
					          <td><input type="number" min="0" name="death_20f" class="form-control" value="<?php echo $table7->death_20f; ?>"></td>
					        </tr>
					      </tbody>
					    </table>
						</div>
						<br>
            <h4>Community checkup</h4>
						<div class="row">
	            <table id="A8" class="center">
					      <thead>
					        <tr>
					          <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td>1</td>
					          <td class="left">Total number of people who consulted for annual medical checkup during the reportins period</td>
					          <td><input type="number" min="0" name="annual_chekup" class="form-control" value="<?php echo $table8->annual_chekup; ?>"></td>
					        </tr>
									<tr>
                    <td class="grey"></td>
                    <td class="left">Suspected positive at medical checkup who were referred for further diagnosis for the following diseases:</td>
                    <td class="grey"></td>
									</tr>
	                <tr>
					          <td>2</td>
					          <td class="left">Cardio vascular diseases</td>
					          <td><input type="number" min="0" name="cardio" class="form-control" value="<?php echo $table8->cardio; ?>"></td>
					        </tr>
	                <tr>
					          <td>3</td>
					          <td class="left">Chronic respiratory diseases</td>
					          <td><input type="number" min="0" name="respiratory" class="form-control" value="<?php echo $table8->respiratory; ?>"></td>
					        </tr>
	                <tr>
					          <td>4</td>
					          <td class="left">Diabetes</td>
					          <td><input type="number" min="0" name="diabetes" class="form-control" value="<?php echo $table8->diabetes; ?>"></td>
					        </tr>
	                <tr>
					          <td>5</td>
					          <td class="left">Renal disease</td>
					          <td><input type="number" min="0" name="renal" class="form-control" value="<?php echo $table8->renal; ?>"></td>
					        </tr>
	                <tr>
					          <td>6</td>
					          <td class="left">Cancer</td>
					          <td><input type="number" min="0" name="cancer" class="form-control" value="<?php echo $table8->cancer; ?>"></td>
					        </tr>
									<tr>
					          <td>7</td>
					          <td class="left">Disability</td>
					          <td><input type="number" min="0" name="disability" class="form-control" value="<?php echo $table8->disability; ?>"></td>
					        </tr>
					      </tbody>
					    </table>
						</div>
						<br>
            <h4>Cancer screening</h4>
						<div class="row">
	            <table id="A9" class="center">
					      <thead>
					        <tr>
					          <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td>1</td>
					          <td class="left">Women screened for cervical cancer</td>
					          <td><input type="number" min="0" name="cervical" class="form-control" value="<?php echo $table9->cervical; ?>"></td>
					        </tr>
	                <tr>
					          <td>2</td>
					          <td class="left">Women tested VIA positive during cervical cancer screening</td>
					          <td><input type="number" min="0" name="cervical_viap" class="form-control" value="<?php echo $table9->cervical_viap; ?>"></td>
					        </tr>
	                <tr>
					          <td>3</td>
					          <td class="left">Women tested VIA positive during cervical cancer screening and HIV positive</td>
					          <td><input type="number" min="0" name="cervical_viap_hivp" class="form-control" value="<?php echo $table9->cervical_viap_hivp; ?>"></td>
					        </tr>
	                <tr>
					          <td>4</td>
					          <td class="left">Women tested VIA positive and treated with cryotherapy</td>
					          <td><input type="number" min="0" name="cryo_viap" class="form-control" value="<?php echo $table9->cryo_viap; ?>"></td>
					        </tr>
	                <tr>
					          <td>5</td>
					          <td class="left">Women tested VIA positive and referred for treatment</td>
					          <td><input type="number" min="0" name="treatement_viap" class="form-control" value="<?php echo $table9->treatement_viap; ?>"></td>
					        </tr>
	                <tr>
					          <td>6</td>
					          <td class="left">Women screened for breast cancer</td>
					          <td><input type="number" min="0" name="breast_screened" class="form-control" value="<?php echo $table9->breast_screened; ?>"></td>
					        </tr>
									<tr>
					          <td>7</td>
					          <td class="left">Women referred for breast cancer</td>
					          <td><input type="number" min="0" name="breast_referred" class="form-control" value="<?php echo $table9->breast_referred; ?>"></td>
					        </tr>
									<tr>
					          <td>8</td>
					          <td class="left">Women suspected for cervical cancer referred to other level</td>
					          <td><input type="number" min="0" name="cervical_otherlevel" class="form-control" value="<?php echo $table9->cervical_otherlevel; ?>"></td>
					        </tr>
									<tr>
					          <td>9</td>
					          <td class="left">Biopsies collected for all types of cancer</td>
					          <td><input type="number" min="0" name="biopsies" class="form-control" value="<?php echo $table9->biopsies; ?>"></td>
					        </tr>
					      </tbody>
					    </table>
						</div>
            <br>
			      <center><button type="submit">Validate</button></center>
					</div>
    		</form>
    	</div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  </body>
</html>
<script>
	$('#A2').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
  });
	$('#B2').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
  });
	$('#C2').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
  });
	$('#D2').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
  });
	$('#E2').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false
  });
  $('#F2').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false
  });
  $('#Ga').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
  });
  $('#Gb').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
  });
  $('#B3').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
  });
  $('#A4').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
  });
  $('#A5').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
  });
	$('#A6').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
  });
	$('#A7').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
  });
	$('#A8').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
  });
	$('#A9').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
  });
	$('.dataTables_length').addClass('bs-select');
</script>
