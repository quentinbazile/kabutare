<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Emergency</title>
		<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bs-css.css'); ?>" />
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/recherche15.css'); ?>" />
	  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-select.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/datatables3.min.css'); ?>"/>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<div class="container">
			<h2>Emergency - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('update_date'))); ?></h2>
			<div>
        <form method="post" action="" class="form-inline">
					<div class="row">
						<div class="col-xs-7">
			      	<h4>Outpatient morbidity summary table</h4>
						</div>
						<div class="col-xs-5">
					  	<h4>Health insurance status of new cases</h4>
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
				            <td class="left">Insured (mutuelle or other insurance members)</td>
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
						  	<h4>Origin of outpatients</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
					      <table id="C2" class="center" style="width:100%;">
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
			      		<table id="D2" class="center" style="width:100%;">
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
							<h4>New cases of priority health problems in general OPD</h4>
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
				            <td class="center">4</td>
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
				            <td class="left">Taenia</td>
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
				            <td class="left">Influenza / Syndrome gripal</td>
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
				            <td class="left">Viral hepatitis (A, B, chronic & others)</td>
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
							<div class="col-xs-6">
				      	<h4>Summary statistics by service</h4>
							</div>
							<div class="col-xs-6">
						  	<h4>Payment for hospitalization</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
					      <table id="A10" class="center">
					        <thead>
					          <tr>
                      <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					            <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          </tr>
					        </thead>
					        <tbody>
					          <tr>
                      <td>1</td>
					            <td class="left">Number of beds</td>
					            <td><input type="number" min="0" name="e_beds" class="form-control" value="<?php echo $table2->e_beds; ?>"></td>
					          </tr>
					          <tr>
                      <td>2</td>
					            <td class="left">Present at the beginning of the month</td>
					            <td><input type="number" min="0" name="e_present_start" class="form-control" value="<?php echo $table2->e_present_start; ?>"></td>
					          </tr>
                    <tr>
                      <td>3</td>
					            <td class="left">Admissions during the month of wich</td>
					            <td><input type="number" min="0" name="e_admissions" class="form-control" value="<?php echo $table2->e_admissions; ?>"></td>
					          </tr>
                    <tr>
                      <td>3.1</td>
					            <td class="left">Referred from the Health Center</td>
					            <td><input type="number" min="0" name="e_referred" class="form-control" value="<?php echo $table2->e_referred; ?>"></td>
					          </tr>
                    <tr>
                      <td>3.2</td>
					            <td class="left">Non-referred patients</td>
					            <td><input type="number" min="0" name="e_no_referred" class="form-control" value="<?php echo $table2->e_no_referred; ?>"></td>
					          </tr>
                    <tr>
                      <td>4</td>
					            <td class="left">Discharges during the month of which</td>
					            <td><input type="number" min="0" name="e_discharges" class="form-control" value="<?php echo $table2->e_discharges; ?>"></td>
					          </tr>
                    <tr>
                      <td>4.1</td>
					            <td class="left">Authorized/Cured</td>
					            <td><input type="number" min="0" name="e_authorized" class="form-control" value="<?php echo $table2->e_authorized; ?>"></td>
					          </tr>
                    <tr>
                      <td>4.2</td>
					            <td class="left">Abandoned</td>
					            <td><input type="number" min="0" name="e_abandoned" class="form-control" value="<?php echo $table2->e_abandoned; ?>"></td>
					          </tr>
                    <tr>
                      <td>4.3</td>
					            <td class="left">Deaths</td>
					            <td><input type="number" min="0" name="e_deaths" class="form-control" value="<?php echo $table2->e_deaths; ?>"></td>
					          </tr>
                    <tr>
                      <td>4.4</td>
					            <td class="left">Referred</td>
					            <td><input type="number" min="0" name="e_dis_referred" class="form-control" value="<?php echo $table2->e_dis_referred; ?>"></td>
					          </tr>
                    <tr>
                      <td>4.5</td>
					            <td class="left">Counter-referred</td>
					            <td><input type="number" min="0" name="e_counter" class="form-control" value="<?php echo $table2->e_counter; ?>"></td>
					          </tr>
                    <tr>
                      <td>5</td>
					            <td class="left">Present at the end of the month</td>
					            <td><input type="number" min="0" name="e_present_end" class="form-control" value="<?php echo $table2->e_present_end; ?>"></td>
					          </tr>
                    <tr>
                      <td>6</td>
					            <td class="left">Total hospitalization days for discharged patients</td>
					            <td><input type="number" min="0" name="e_total" class="form-control" value="<?php echo $table2->e_total; ?>"></td>
					          </tr>
                    <tr>
                      <td>7</td>
					            <td class="left">Actual hospitalization days</td>
					            <td><input type="number" min="0" name="e_actual" class="form-control" value="<?php echo $table2->e_actual; ?>"></td>
					          </tr>
					        </tbody>
					      </table>
							</div>
							<div class="col-xs-6">
                <div class="row">
  			      		<table id="C10" class="center">
  			        		<thead>
  					          <tr>
  					            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  					            <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  					          </tr>
  					        </thead>
  			        		<tbody>
  					          <tr>
  					            <td class="left">Insured discharges (mutuelle, etc)</td>
  					            <td><input type="number" min="0" name="insured_dis" class="form-control" value="<?php echo $table3->insured_dis; ?>"></td>
  					          </tr>
  					          <tr>
  					            <td class="left">Non-paying discharges</td>
  					            <td><input type="number" min="0" name="no_paying_dis" class="form-control" value="<?php echo $table3->no_paying_dis; ?>"></td>
  					          </tr>
  					          <tr>
  					            <td class="left">Non-paying indigents discharged</td>
  					            <td><input type="number" min="0" name="no_paying_ind" class="form-control" value="<?php echo $table3->no_paying_ind; ?>"></td>
  					          </tr>
  			        		</tbody>
  			      		</table>
                </div>
                <br>
                <div class="row">
                  <h4>Special causes of admissions and deaths</h4>
                </div>
                <div class="row">
  			      		<table id="D10" class="center">
  			        		<thead>
  					          <tr>
  					            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  					            <th>Admissions<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  					            <th>Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
  					          </tr>
  					        </thead>
  			        		<tbody>
  					          <tr>
  					            <td class="left">Road traffic accidents</td>
  					            <td><input type="number" min="0" name="road_acc_ad" class="form-control" value="<?php echo $table3->road_acc_ad; ?>"></td>
  					            <td><input type="number" min="0" name="road_acc_deaths" class="form-control" value="<?php echo $table3->road_acc_deaths; ?>"></td>
  					          </tr>
  					          <tr>
  					            <td class="left">Natural or man-made disasters (epidemic, earthquake, etc)</td>
  					            <td><input type="number" min="0" name="natural_disa_ad" class="form-control" value="<?php echo $table3->natural_disa_ad; ?>"></td>
  					            <td><input type="number" min="0" name="natural_disa_deaths" class="form-control" value="<?php echo $table3->natural_disa_deaths; ?>"></td>
  					          </tr>
  					          <tr>
  					            <td class="left">Workplace injuries</td>
  					            <td><input type="number" min="0" name="work_inj_ad" class="form-control" value="<?php echo $table3->work_inj_ad; ?>"></td>
  					            <td><input type="number" min="0" name="work_inj_deaths" class="form-control" value="<?php echo $table3->work_inj_deaths; ?>"></td>
  					          </tr>
  			        		</tbody>
  			      		</table>
                </div>
							</div>
						</div>
						<br>
						<h4>Summary by age</h4>
			      <table id="B10" class="center">
			        <thead>
			          <tr>
			            <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th colspan="2">Age < 1<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th colspan="2">Age 1 to 4<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
			            <th>M</th>
			            <th>F</th>
								</tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td>1</td>
			            <td class="left">Hospitalized</td>
			            <td><input type="number" min="0" name="hosp_1m" class="form-control" value="<?php echo $table3->hosp_1m; ?>"></td>
			            <td><input type="number" min="0" name="hosp_1f" class="form-control" value="<?php echo $table3->hosp_1f; ?>"></td>
			            <td><input type="number" min="0" name="hosp_4m" class="form-control" value="<?php echo $table3->hosp_4m; ?>"></td>
			            <td><input type="number" min="0" name="hosp_4f" class="form-control" value="<?php echo $table3->hosp_4f; ?>"></td>
			            <td><input type="number" min="0" name="hosp_19m" class="form-control" value="<?php echo $table3->hosp_19m; ?>"></td>
			            <td><input type="number" min="0" name="hosp_19f" class="form-control" value="<?php echo $table3->hosp_19f; ?>"></td>
			            <td><input type="number" min="0" name="hosp_20m" class="form-control" value="<?php echo $table3->hosp_20m; ?>"></td>
			            <td><input type="number" min="0" name="hosp_20f" class="form-control" value="<?php echo $table3->hosp_20f; ?>"></td>
			          </tr>
			          <tr>
			            <td>2</td>
			            <td class="left">Deaths</td>
			            <td><input type="number" min="0" name="deaths_1m" class="form-control" value="<?php echo $table3->deaths_1m; ?>"></td>
			            <td><input type="number" min="0" name="deaths_1f" class="form-control" value="<?php echo $table3->deaths_1f; ?>"></td>
			            <td><input type="number" min="0" name="deaths_4m" class="form-control" value="<?php echo $table3->deaths_4m; ?>"></td>
			            <td><input type="number" min="0" name="deaths_4f" class="form-control" value="<?php echo $table3->deaths_4f; ?>"></td>
			            <td><input type="number" min="0" name="deaths_19m" class="form-control" value="<?php echo $table3->deaths_19m; ?>"></td>
			            <td><input type="number" min="0" name="deaths_19f" class="form-control" value="<?php echo $table3->deaths_19f; ?>"></td>
			            <td><input type="number" min="0" name="deaths_20m" class="form-control" value="<?php echo $table3->deaths_20m; ?>"></td>
			            <td><input type="number" min="0" name="deaths_20f" class="form-control" value="<?php echo $table3->deaths_20f; ?>"></td>
			          </tr>
			        </tbody>
			      </table>
						<br>
            <h4>Causes of hospitalization and death at discharge</h4>
			      <table id="E10" class="center">
			        <thead>
			          <tr>
			            <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th colspan="6">Hospitalization<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th colspan="6">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			          </tr>
                <tr>
			            <th colspan="2">Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th colspan="2">Age 5 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th colspan="2">Age > 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
			            <td class="left">Malaria simple</td>
			            <td><input type="number" min="0" name="malaria_sim_hos5m" class="form-control" value="<?php echo $table3->malaria_sim_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sim_hos5f" class="form-control" value="<?php echo $table3->malaria_sim_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sim_hos19m" class="form-control" value="<?php echo $table3->malaria_sim_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sim_hos19f" class="form-control" value="<?php echo $table3->malaria_sim_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sim_hos20m" class="form-control" value="<?php echo $table3->malaria_sim_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sim_hos20f" class="form-control" value="<?php echo $table3->malaria_sim_hos20f; ?>"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
			          </tr>
			          <tr>
			            <td>2</td>
			            <td class="left">Malaria severe</td>
			            <td><input type="number" min="0" name="malaria_sev_hos5m" class="form-control" value="<?php echo $table3->malaria_sev_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sev_hos5f" class="form-control" value="<?php echo $table3->malaria_sev_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sev_hos19m" class="form-control" value="<?php echo $table3->malaria_sev_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sev_hos19f" class="form-control" value="<?php echo $table3->malaria_sev_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sev_hos20m" class="form-control" value="<?php echo $table3->malaria_sev_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sev_hos20f" class="form-control" value="<?php echo $table3->malaria_sev_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sev_deaths5m" class="form-control" value="<?php echo $table3->malaria_sev_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sev_deaths5f" class="form-control" value="<?php echo $table3->malaria_sev_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sev_deaths19m" class="form-control" value="<?php echo $table3->malaria_sev_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sev_deaths19f" class="form-control" value="<?php echo $table3->malaria_sev_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sev_deaths20m" class="form-control" value="<?php echo $table3->malaria_sev_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="malaria_sev_deaths20f" class="form-control" value="<?php echo $table3->malaria_sev_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>3</td>
			            <td class="left">Borreliosis</td>
			            <td><input type="number" min="0" name="borreliosis_hos5m" class="form-control" value="<?php echo $table3->borreliosis_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="borreliosis_hos5f" class="form-control" value="<?php echo $table3->borreliosis_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="borreliosis_hos19m" class="form-control" value="<?php echo $table3->borreliosis_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="borreliosis_hos19f" class="form-control" value="<?php echo $table3->borreliosis_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="borreliosis_hos20m" class="form-control" value="<?php echo $table3->borreliosis_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="borreliosis_hos20f" class="form-control" value="<?php echo $table3->borreliosis_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="borreliosis_deaths5m" class="form-control" value="<?php echo $table3->borreliosis_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="borreliosis_deaths5f" class="form-control" value="<?php echo $table3->borreliosis_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="borreliosis_deaths19m" class="form-control" value="<?php echo $table3->borreliosis_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="borreliosis_deaths19f" class="form-control" value="<?php echo $table3->borreliosis_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="borreliosis_deaths20m" class="form-control" value="<?php echo $table3->borreliosis_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="borreliosis_deaths20f" class="form-control" value="<?php echo $table3->borreliosis_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>4</td>
			            <td class="left">Pneumonia simple</td>
			            <td><input type="number" min="0" name="pneumonia_sim_hos5m" class="form-control" value="<?php echo $table3->pneumonia_sim_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sim_hos5f" class="form-control" value="<?php echo $table3->pneumonia_sim_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sim_hos19m" class="form-control" value="<?php echo $table3->pneumonia_sim_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sim_hos19f" class="form-control" value="<?php echo $table3->pneumonia_sim_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sim_hos20m" class="form-control" value="<?php echo $table3->pneumonia_sim_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sim_hos20f" class="form-control" value="<?php echo $table3->pneumonia_sim_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sim_deaths5m" class="form-control" value="<?php echo $table3->pneumonia_sim_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sim_deaths5f" class="form-control" value="<?php echo $table3->pneumonia_sim_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sim_deaths19m" class="form-control" value="<?php echo $table3->pneumonia_sim_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sim_deaths19f" class="form-control" value="<?php echo $table3->pneumonia_sim_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sim_deaths20m" class="form-control" value="<?php echo $table3->pneumonia_sim_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sim_deaths20f" class="form-control" value="<?php echo $table3->pneumonia_sim_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>5</td>
			            <td class="left">Pneumonia severe</td>
			            <td><input type="number" min="0" name="pneumonia_sev_hos5m" class="form-control" value="<?php echo $table3->pneumonia_sev_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sev_hos5f" class="form-control" value="<?php echo $table3->pneumonia_sev_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sev_hos19m" class="form-control" value="<?php echo $table3->pneumonia_sev_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sev_hos19f" class="form-control" value="<?php echo $table3->pneumonia_sev_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sev_hos20m" class="form-control" value="<?php echo $table3->pneumonia_sev_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sev_hos20f" class="form-control" value="<?php echo $table3->pneumonia_sev_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sev_deaths5m" class="form-control" value="<?php echo $table3->pneumonia_sev_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sev_deaths5f" class="form-control" value="<?php echo $table3->pneumonia_sev_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sev_deaths19m" class="form-control" value="<?php echo $table3->pneumonia_sev_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sev_deaths19f" class="form-control" value="<?php echo $table3->pneumonia_sev_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sev_deaths20m" class="form-control" value="<?php echo $table3->pneumonia_sev_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="pneumonia_sev_deaths20f" class="form-control" value="<?php echo $table3->pneumonia_sev_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>6</td>
			            <td class="left">Pleurisy (non-tuberculosis)</td>
			            <td><input type="number" min="0" name="pleurisy_hos5m" class="form-control" value="<?php echo $table3->pleurisy_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="pleurisy_hos5f" class="form-control" value="<?php echo $table3->pleurisy_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="pleurisy_hos19m" class="form-control" value="<?php echo $table3->pleurisy_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="pleurisy_hos19f" class="form-control" value="<?php echo $table3->pleurisy_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="pleurisy_hos20m" class="form-control" value="<?php echo $table3->pleurisy_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="pleurisy_hos20f" class="form-control" value="<?php echo $table3->pleurisy_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="pleurisy_deaths5m" class="form-control" value="<?php echo $table3->pleurisy_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="pleurisy_deaths5f" class="form-control" value="<?php echo $table3->pleurisy_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="pleurisy_deaths19m" class="form-control" value="<?php echo $table3->pleurisy_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="pleurisy_deaths19f" class="form-control" value="<?php echo $table3->pleurisy_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="pleurisy_deaths20m" class="form-control" value="<?php echo $table3->pleurisy_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="pleurisy_deaths20f" class="form-control" value="<?php echo $table3->pleurisy_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>7</td>
			            <td class="left">Respratory infection acute (ARI) other</td>
			            <td><input type="number" min="0" name="ari_hos5m" class="form-control" value="<?php echo $table3->ari_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="ari_hos5f" class="form-control" value="<?php echo $table3->ari_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="ari_hos19m" class="form-control" value="<?php echo $table3->ari_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="ari_hos19f" class="form-control" value="<?php echo $table3->ari_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="ari_hos20m" class="form-control" value="<?php echo $table3->ari_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="ari_hos20f" class="form-control" value="<?php echo $table3->ari_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="ari_deaths5m" class="form-control" value="<?php echo $table3->ari_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="ari_deaths5f" class="form-control" value="<?php echo $table3->ari_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="ari_deaths19m" class="form-control" value="<?php echo $table3->ari_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="ari_deaths19f" class="form-control" value="<?php echo $table3->ari_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="ari_deaths20m" class="form-control" value="<?php echo $table3->ari_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="ari_deaths20f" class="form-control" value="<?php echo $table3->ari_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>8</td>
			            <td class="left">Diarrhea bloody (dysentery)</td>
			            <td><input type="number" min="0" name="diarr_bloody_hos5m" class="form-control" value="<?php echo $table3->diarr_bloody_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_bloody_hos5f" class="form-control" value="<?php echo $table3->diarr_bloody_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_bloody_hos19m" class="form-control" value="<?php echo $table3->diarr_bloody_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_bloody_hos19f" class="form-control" value="<?php echo $table3->diarr_bloody_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_bloody_hos20m" class="form-control" value="<?php echo $table3->diarr_bloody_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_bloody_hos20f" class="form-control" value="<?php echo $table3->diarr_bloody_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_bloody_deaths5m" class="form-control" value="<?php echo $table3->diarr_bloody_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_bloody_deaths5f" class="form-control" value="<?php echo $table3->diarr_bloody_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_bloody_deaths19m" class="form-control" value="<?php echo $table3->diarr_bloody_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_bloody_deaths19f" class="form-control" value="<?php echo $table3->diarr_bloody_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_bloody_deaths20m" class="form-control" value="<?php echo $table3->diarr_bloody_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_bloody_deaths20f" class="form-control" value="<?php echo $table3->diarr_bloody_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>9</td>
			            <td class="left">Diarrhea with dehydration</td>
			            <td><input type="number" min="0" name="diarr_dehy_hos5m" class="form-control" value="<?php echo $table3->diarr_dehy_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_dehy_hos5f" class="form-control" value="<?php echo $table3->diarr_dehy_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_dehy_hos19m" class="form-control" value="<?php echo $table3->diarr_dehy_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_dehy_hos19f" class="form-control" value="<?php echo $table3->diarr_dehy_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_dehy_hos20m" class="form-control" value="<?php echo $table3->diarr_dehy_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_dehy_hos20f" class="form-control" value="<?php echo $table3->diarr_dehy_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_dehy_deaths5m" class="form-control" value="<?php echo $table3->diarr_dehy_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_dehy_deaths5f" class="form-control" value="<?php echo $table3->diarr_dehy_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_dehy_deaths19m" class="form-control" value="<?php echo $table3->diarr_dehy_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_dehy_deaths19f" class="form-control" value="<?php echo $table3->diarr_dehy_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_dehy_deaths20m" class="form-control" value="<?php echo $table3->diarr_dehy_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_dehy_deaths20f" class="form-control" value="<?php echo $table3->diarr_dehy_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>10</td>
			            <td class="left">Diarrhea no dehydration</td>
			            <td><input type="number" min="0" name="diarr_no_dehy_hos5m" class="form-control" value="<?php echo $table3->diarr_no_dehy_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_no_dehy_hos5f" class="form-control" value="<?php echo $table3->diarr_no_dehy_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_no_dehy_hos19m" class="form-control" value="<?php echo $table3->diarr_no_dehy_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_no_dehy_hos19f" class="form-control" value="<?php echo $table3->diarr_no_dehy_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_no_dehy_hos20m" class="form-control" value="<?php echo $table3->diarr_no_dehy_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_no_dehy_hos20f" class="form-control" value="<?php echo $table3->diarr_no_dehy_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_no_dehy_deaths5m" class="form-control" value="<?php echo $table3->diarr_no_dehy_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_no_dehy_deaths5f" class="form-control" value="<?php echo $table3->diarr_no_dehy_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_no_dehy_deaths19m" class="form-control" value="<?php echo $table3->diarr_no_dehy_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_no_dehy_deaths19f" class="form-control" value="<?php echo $table3->diarr_no_dehy_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_no_dehy_deaths20m" class="form-control" value="<?php echo $table3->diarr_no_dehy_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_no_dehy_deaths20f" class="form-control" value="<?php echo $table3->diarr_no_dehy_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>11</td>
			            <td class="left">Cholera</td>
			            <td><input type="number" min="0" name="cholera_hos5m" class="form-control" value="<?php echo $table3->cholera_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="cholera_hos5f" class="form-control" value="<?php echo $table3->cholera_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="cholera_hos19m" class="form-control" value="<?php echo $table3->cholera_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="cholera_hos19f" class="form-control" value="<?php echo $table3->cholera_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="cholera_hos20m" class="form-control" value="<?php echo $table3->cholera_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="cholera_hos20f" class="form-control" value="<?php echo $table3->cholera_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="cholera_deaths5m" class="form-control" value="<?php echo $table3->cholera_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="cholera_deaths5f" class="form-control" value="<?php echo $table3->cholera_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="cholera_deaths19m" class="form-control" value="<?php echo $table3->cholera_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="cholera_deaths19f" class="form-control" value="<?php echo $table3->cholera_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="cholera_deaths20m" class="form-control" value="<?php echo $table3->cholera_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="cholera_deaths20f" class="form-control" value="<?php echo $table3->cholera_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>12</td>
			            <td class="left">Typhoid fever (salmonellosis)</td>
			            <td><input type="number" min="0" name="typhoid_hos5m" class="form-control" value="<?php echo $table3->typhoid_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="typhoid_hos5f" class="form-control" value="<?php echo $table3->typhoid_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="typhoid_hos19m" class="form-control" value="<?php echo $table3->typhoid_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="typhoid_hos19f" class="form-control" value="<?php echo $table3->typhoid_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="typhoid_hos20m" class="form-control" value="<?php echo $table3->typhoid_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="typhoid_hos20f" class="form-control" value="<?php echo $table3->typhoid_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="typhoid_deaths5m" class="form-control" value="<?php echo $table3->typhoid_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="typhoid_deaths5f" class="form-control" value="<?php echo $table3->typhoid_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="typhoid_deaths19m" class="form-control" value="<?php echo $table3->typhoid_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="typhoid_deaths19f" class="form-control" value="<?php echo $table3->typhoid_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="typhoid_deaths20m" class="form-control" value="<?php echo $table3->typhoid_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="typhoid_deaths20f" class="form-control" value="<?php echo $table3->typhoid_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>13</td>
			            <td class="left">Meningitis</td>
			            <td><input type="number" min="0" name="meningitis_hos5m" class="form-control" value="<?php echo $table3->meningitis_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="meningitis_hos5f" class="form-control" value="<?php echo $table3->meningitis_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="meningitis_hos19m" class="form-control" value="<?php echo $table3->meningitis_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="meningitis_hos19f" class="form-control" value="<?php echo $table3->meningitis_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="meningitis_hos20m" class="form-control" value="<?php echo $table3->meningitis_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="meningitis_hos20f" class="form-control" value="<?php echo $table3->meningitis_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="meningitis_deaths5m" class="form-control" value="<?php echo $table3->meningitis_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="meningitis_deaths5f" class="form-control" value="<?php echo $table3->meningitis_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="meningitis_deaths19m" class="form-control" value="<?php echo $table3->meningitis_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="meningitis_deaths19f" class="form-control" value="<?php echo $table3->meningitis_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="meningitis_deaths20m" class="form-control" value="<?php echo $table3->meningitis_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="meningitis_deaths20f" class="form-control" value="<?php echo $table3->meningitis_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>14</td>
			            <td class="left">Measles</td>
			            <td><input type="number" min="0" name="measles_hos5m" class="form-control" value="<?php echo $table3->measles_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="measles_hos5f" class="form-control" value="<?php echo $table3->measles_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="measles_hos19m" class="form-control" value="<?php echo $table3->measles_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="measles_hos19f" class="form-control" value="<?php echo $table3->measles_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="measles_hos20m" class="form-control" value="<?php echo $table3->measles_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="measles_hos20f" class="form-control" value="<?php echo $table3->measles_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="measles_deaths5m" class="form-control" value="<?php echo $table3->measles_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="measles_deaths5f" class="form-control" value="<?php echo $table3->measles_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="measles_deaths19m" class="form-control" value="<?php echo $table3->measles_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="measles_deaths19f" class="form-control" value="<?php echo $table3->measles_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="measles_deaths20m" class="form-control" value="<?php echo $table3->measles_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="measles_deaths20f" class="form-control" value="<?php echo $table3->measles_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>15</td>
			            <td class="left">TB bacteriologically confirmed</td>
			            <td><input type="number" min="0" name="tb_conf_hos5m" class="form-control" value="<?php echo $table3->tb_conf_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="tb_conf_hos5f" class="form-control" value="<?php echo $table3->tb_conf_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="tb_conf_hos19m" class="form-control" value="<?php echo $table3->tb_conf_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="tb_conf_hos19f" class="form-control" value="<?php echo $table3->tb_conf_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="tb_conf_hos20m" class="form-control" value="<?php echo $table3->tb_conf_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="tb_conf_hos20f" class="form-control" value="<?php echo $table3->tb_conf_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="tb_conf_deaths5m" class="form-control" value="<?php echo $table3->tb_conf_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="tb_conf_deaths5f" class="form-control" value="<?php echo $table3->tb_conf_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="tb_conf_deaths19m" class="form-control" value="<?php echo $table3->tb_conf_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="tb_conf_deaths19f" class="form-control" value="<?php echo $table3->tb_conf_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="tb_conf_deaths20m" class="form-control" value="<?php echo $table3->tb_conf_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="tb_conf_deaths20f" class="form-control" value="<?php echo $table3->tb_conf_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>16</td>
			            <td class="left">TB clinically diagnosed</td>
			            <td><input type="number" min="0" name="tb_diag_hos5m" class="form-control" value="<?php echo $table3->tb_diag_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="tb_diag_hos5f" class="form-control" value="<?php echo $table3->tb_diag_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="tb_diag_hos19m" class="form-control" value="<?php echo $table3->tb_diag_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="tb_diag_hos19f" class="form-control" value="<?php echo $table3->tb_diag_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="tb_diag_hos20m" class="form-control" value="<?php echo $table3->tb_diag_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="tb_diag_hos20f" class="form-control" value="<?php echo $table3->tb_diag_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="tb_diag_deaths5m" class="form-control" value="<?php echo $table3->tb_diag_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="tb_diag_deaths5f" class="form-control" value="<?php echo $table3->tb_diag_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="tb_diag_deaths19m" class="form-control" value="<?php echo $table3->tb_diag_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="tb_diag_deaths19f" class="form-control" value="<?php echo $table3->tb_diag_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="tb_diag_deaths20m" class="form-control" value="<?php echo $table3->tb_diag_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="tb_diag_deaths20f" class="form-control" value="<?php echo $table3->tb_diag_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>17</td>
			            <td class="left">Fever chronic (>1 month)</td>
			            <td><input type="number" min="0" name="fever_hos5m" class="form-control" value="<?php echo $table3->fever_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="fever_hos5f" class="form-control" value="<?php echo $table3->fever_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="fever_hos19m" class="form-control" value="<?php echo $table3->fever_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="fever_hos19f" class="form-control" value="<?php echo $table3->fever_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="fever_hos20m" class="form-control" value="<?php echo $table3->fever_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="fever_hos20f" class="form-control" value="<?php echo $table3->fever_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="fever_deaths5m" class="form-control" value="<?php echo $table3->fever_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="fever_deaths5f" class="form-control" value="<?php echo $table3->fever_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="fever_deaths19m" class="form-control" value="<?php echo $table3->fever_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="fever_deaths19f" class="form-control" value="<?php echo $table3->fever_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="fever_deaths20m" class="form-control" value="<?php echo $table3->fever_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="fever_deaths20f" class="form-control" value="<?php echo $table3->fever_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>18</td>
			            <td class="left">Encephalitis</td>
			            <td><input type="number" min="0" name="encephalitis_hos5m" class="form-control" value="<?php echo $table3->encephalitis_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="encephalitis_hos5f" class="form-control" value="<?php echo $table3->encephalitis_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="encephalitis_hos19m" class="form-control" value="<?php echo $table3->encephalitis_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="encephalitis_hos19f" class="form-control" value="<?php echo $table3->encephalitis_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="encephalitis_hos20m" class="form-control" value="<?php echo $table3->encephalitis_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="encephalitis_hos20f" class="form-control" value="<?php echo $table3->encephalitis_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="encephalitis_deaths5m" class="form-control" value="<?php echo $table3->encephalitis_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="encephalitis_deaths5f" class="form-control" value="<?php echo $table3->encephalitis_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="encephalitis_deaths19m" class="form-control" value="<?php echo $table3->encephalitis_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="encephalitis_deaths19f" class="form-control" value="<?php echo $table3->encephalitis_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="encephalitis_deaths20m" class="form-control" value="<?php echo $table3->encephalitis_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="encephalitis_deaths20f" class="form-control" value="<?php echo $table3->encephalitis_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>19</td>
			            <td class="left">Meningitis cryptococal</td>
			            <td><input type="number" min="0" name="mening_crypto_hos5m" class="form-control" value="<?php echo $table3->mening_crypto_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="mening_crypto_hos5f" class="form-control" value="<?php echo $table3->mening_crypto_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="mening_crypto_hos19m" class="form-control" value="<?php echo $table3->mening_crypto_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="mening_crypto_hos19f" class="form-control" value="<?php echo $table3->mening_crypto_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="mening_crypto_hos20m" class="form-control" value="<?php echo $table3->mening_crypto_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="mening_crypto_hos20f" class="form-control" value="<?php echo $table3->mening_crypto_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="mening_crypto_deaths5m" class="form-control" value="<?php echo $table3->mening_crypto_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="mening_crypto_deaths5f" class="form-control" value="<?php echo $table3->mening_crypto_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="mening_crypto_deaths19m" class="form-control" value="<?php echo $table3->mening_crypto_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="mening_crypto_deaths19f" class="form-control" value="<?php echo $table3->mening_crypto_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="mening_crypto_deaths20m" class="form-control" value="<?php echo $table3->mening_crypto_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="mening_crypto_deaths20f" class="form-control" value="<?php echo $table3->mening_crypto_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>20</td>
			            <td class="left">Skin infections</td>
			            <td><input type="number" min="0" name="skin_hos5m" class="form-control" value="<?php echo $table3->skin_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="skin_hos5f" class="form-control" value="<?php echo $table3->skin_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="skin_hos19m" class="form-control" value="<?php echo $table3->skin_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="skin_hos19f" class="form-control" value="<?php echo $table3->skin_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="skin_hos20m" class="form-control" value="<?php echo $table3->skin_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="skin_hos20f" class="form-control" value="<?php echo $table3->skin_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="skin_deaths5m" class="form-control" value="<?php echo $table3->skin_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="skin_deaths5f" class="form-control" value="<?php echo $table3->skin_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="skin_deaths19m" class="form-control" value="<?php echo $table3->skin_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="skin_deaths19f" class="form-control" value="<?php echo $table3->skin_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="skin_deaths20m" class="form-control" value="<?php echo $table3->skin_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="skin_deaths20f" class="form-control" value="<?php echo $table3->skin_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>21</td>
			            <td class="left">Diarrhea chronic opportunistic infection</td>
			            <td><input type="number" min="0" name="diarr_chronic_hos5m" class="form-control" value="<?php echo $table3->diarr_chronic_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_chronic_hos5f" class="form-control" value="<?php echo $table3->diarr_chronic_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_chronic_hos19m" class="form-control" value="<?php echo $table3->diarr_chronic_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_chronic_hos19f" class="form-control" value="<?php echo $table3->diarr_chronic_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_chronic_hos20m" class="form-control" value="<?php echo $table3->diarr_chronic_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_chronic_hos20f" class="form-control" value="<?php echo $table3->diarr_chronic_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_chronic_deaths5m" class="form-control" value="<?php echo $table3->diarr_chronic_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_chronic_deaths5f" class="form-control" value="<?php echo $table3->diarr_chronic_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_chronic_deaths19m" class="form-control" value="<?php echo $table3->diarr_chronic_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_chronic_deaths19f" class="form-control" value="<?php echo $table3->diarr_chronic_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="diarr_chronic_deaths20m" class="form-control" value="<?php echo $table3->diarr_chronic_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="diarr_chronic_deaths20f" class="form-control" value="<?php echo $table3->diarr_chronic_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>22</td>
			            <td class="left">HIV oppotunistic infections other</td>
									<td><input type="number" min="0" name="hiv_hos5m" class="form-control" value="<?php echo $table3->hiv_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="hiv_hos5f" class="form-control" value="<?php echo $table3->hiv_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="hiv_hos19m" class="form-control" value="<?php echo $table3->hiv_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="hiv_hos19f" class="form-control" value="<?php echo $table3->hiv_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="hiv_hos20m" class="form-control" value="<?php echo $table3->hiv_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="hiv_hos20f" class="form-control" value="<?php echo $table3->hiv_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="hiv_deaths5m" class="form-control" value="<?php echo $table3->hiv_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="hiv_deaths5f" class="form-control" value="<?php echo $table3->hiv_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="hiv_deaths19m" class="form-control" value="<?php echo $table3->hiv_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="hiv_deaths19f" class="form-control" value="<?php echo $table3->hiv_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="hiv_deaths20m" class="form-control" value="<?php echo $table3->hiv_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="hiv_deaths20f" class="form-control" value="<?php echo $table3->hiv_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>23</td>
			            <td class="left">Trauma head</td>
									<td><input type="number" min="0" name="trauma_hos5m" class="form-control" value="<?php echo $table3->trauma_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="trauma_hos5f" class="form-control" value="<?php echo $table3->trauma_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="trauma_hos19m" class="form-control" value="<?php echo $table3->trauma_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="trauma_hos19f" class="form-control" value="<?php echo $table3->trauma_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="trauma_hos20m" class="form-control" value="<?php echo $table3->trauma_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="trauma_hos20f" class="form-control" value="<?php echo $table3->trauma_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="trauma_deaths5m" class="form-control" value="<?php echo $table3->trauma_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="trauma_deaths5f" class="form-control" value="<?php echo $table3->trauma_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="trauma_deaths19m" class="form-control" value="<?php echo $table3->trauma_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="trauma_deaths19f" class="form-control" value="<?php echo $table3->trauma_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="trauma_deaths20m" class="form-control" value="<?php echo $table3->trauma_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="trauma_deaths20f" class="form-control" value="<?php echo $table3->trauma_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>24</td>
			            <td class="left">Ruptured spleen</td>
									<td><input type="number" min="0" name="spleen_hos5m" class="form-control" value="<?php echo $table3->spleen_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="spleen_hos5f" class="form-control" value="<?php echo $table3->spleen_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="spleen_hos19m" class="form-control" value="<?php echo $table3->spleen_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="spleen_hos19f" class="form-control" value="<?php echo $table3->spleen_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="spleen_hos20m" class="form-control" value="<?php echo $table3->spleen_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="spleen_hos20f" class="form-control" value="<?php echo $table3->spleen_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="spleen_deaths5m" class="form-control" value="<?php echo $table3->spleen_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="spleen_deaths5f" class="form-control" value="<?php echo $table3->spleen_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="spleen_deaths19m" class="form-control" value="<?php echo $table3->spleen_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="spleen_deaths19f" class="form-control" value="<?php echo $table3->spleen_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="spleen_deaths20m" class="form-control" value="<?php echo $table3->spleen_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="spleen_deaths20f" class="form-control" value="<?php echo $table3->spleen_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>25</td>
			            <td class="left">Fractures, open</td>
									<td><input type="number" min="0" name="frac_open_hos5m" class="form-control" value="<?php echo $table3->frac_open_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="frac_open_hos5f" class="form-control" value="<?php echo $table3->frac_open_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="frac_open_hos19m" class="form-control" value="<?php echo $table3->frac_open_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="frac_open_hos19f" class="form-control" value="<?php echo $table3->frac_open_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="frac_open_hos20m" class="form-control" value="<?php echo $table3->frac_open_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="frac_open_hos20f" class="form-control" value="<?php echo $table3->frac_open_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="frac_open_deaths5m" class="form-control" value="<?php echo $table3->frac_open_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="frac_open_deaths5f" class="form-control" value="<?php echo $table3->frac_open_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="frac_open_deaths19m" class="form-control" value="<?php echo $table3->frac_open_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="frac_open_deaths19f" class="form-control" value="<?php echo $table3->frac_open_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="frac_open_deaths20m" class="form-control" value="<?php echo $table3->frac_open_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="frac_open_deaths20f" class="form-control" value="<?php echo $table3->frac_open_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>26</td>
			            <td class="left">Fractures, internal</td>
									<td><input type="number" min="0" name="frac_int_hos5m" class="form-control" value="<?php echo $table3->frac_int_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="frac_int_hos5f" class="form-control" value="<?php echo $table3->frac_int_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="frac_int_hos19m" class="form-control" value="<?php echo $table3->frac_int_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="frac_int_hos19f" class="form-control" value="<?php echo $table3->frac_int_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="frac_int_hos20m" class="form-control" value="<?php echo $table3->frac_int_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="frac_int_hos20f" class="form-control" value="<?php echo $table3->frac_int_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="frac_int_deaths5m" class="form-control" value="<?php echo $table3->frac_int_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="frac_int_deaths5f" class="form-control" value="<?php echo $table3->frac_int_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="frac_int_deaths19m" class="form-control" value="<?php echo $table3->frac_int_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="frac_int_deaths19f" class="form-control" value="<?php echo $table3->frac_int_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="frac_int_deaths20m" class="form-control" value="<?php echo $table3->frac_int_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="frac_int_deaths20f" class="form-control" value="<?php echo $table3->frac_int_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>27</td>
			            <td class="left">Trauma other</td>
									<td><input type="number" min="0" name="trauma_other_hos5m" class="form-control" value="<?php echo $table3->trauma_other_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="trauma_other_hos5f" class="form-control" value="<?php echo $table3->trauma_other_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="trauma_other_hos19m" class="form-control" value="<?php echo $table3->trauma_other_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="trauma_other_hos19f" class="form-control" value="<?php echo $table3->trauma_other_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="trauma_other_hos20m" class="form-control" value="<?php echo $table3->trauma_other_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="trauma_other_hos20f" class="form-control" value="<?php echo $table3->trauma_other_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="trauma_other_deaths5m" class="form-control" value="<?php echo $table3->trauma_other_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="trauma_other_deaths5f" class="form-control" value="<?php echo $table3->trauma_other_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="trauma_other_deaths19m" class="form-control" value="<?php echo $table3->trauma_other_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="trauma_other_deaths19f" class="form-control" value="<?php echo $table3->trauma_other_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="trauma_other_deaths20m" class="form-control" value="<?php echo $table3->trauma_other_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="trauma_other_deaths20f" class="form-control" value="<?php echo $table3->trauma_other_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>28</td>
			            <td class="left">Burns</td>
									<td><input type="number" min="0" name="burns_hos5m" class="form-control" value="<?php echo $table3->burns_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="burns_hos5f" class="form-control" value="<?php echo $table3->burns_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="burns_hos19m" class="form-control" value="<?php echo $table3->burns_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="burns_hos19f" class="form-control" value="<?php echo $table3->burns_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="burns_hos20m" class="form-control" value="<?php echo $table3->burns_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="burns_hos20f" class="form-control" value="<?php echo $table3->burns_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="burns_deaths5m" class="form-control" value="<?php echo $table3->burns_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="burns_deaths5f" class="form-control" value="<?php echo $table3->burns_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="burns_deaths19m" class="form-control" value="<?php echo $table3->burns_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="burns_deaths19f" class="form-control" value="<?php echo $table3->burns_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="burns_deaths20m" class="form-control" value="<?php echo $table3->burns_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="burns_deaths20f" class="form-control" value="<?php echo $table3->burns_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>29</td>
			            <td class="left">Hepatitis</td>
									<td><input type="number" min="0" name="hepatitis_hos5m" class="form-control" value="<?php echo $table3->hepatitis_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="hepatitis_hos5f" class="form-control" value="<?php echo $table3->hepatitis_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="hepatitis_hos19m" class="form-control" value="<?php echo $table3->hepatitis_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="hepatitis_hos19f" class="form-control" value="<?php echo $table3->hepatitis_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="hepatitis_hos20m" class="form-control" value="<?php echo $table3->hepatitis_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="hepatitis_hos20f" class="form-control" value="<?php echo $table3->hepatitis_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="hepatitis_deaths5m" class="form-control" value="<?php echo $table3->hepatitis_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="hepatitis_deaths5f" class="form-control" value="<?php echo $table3->hepatitis_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="hepatitis_deaths19m" class="form-control" value="<?php echo $table3->hepatitis_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="hepatitis_deaths19f" class="form-control" value="<?php echo $table3->hepatitis_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="hepatitis_deaths20m" class="form-control" value="<?php echo $table3->hepatitis_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="hepatitis_deaths20f" class="form-control" value="<?php echo $table3->hepatitis_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>30</td>
			            <td class="left">Cirrhosis of the liver</td>
									<td><input type="number" min="0" name="cirrhosis_hos5m" class="form-control" value="<?php echo $table3->cirrhosis_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="cirrhosis_hos5f" class="form-control" value="<?php echo $table3->cirrhosis_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="cirrhosis_hos19m" class="form-control" value="<?php echo $table3->cirrhosis_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="cirrhosis_hos19f" class="form-control" value="<?php echo $table3->cirrhosis_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="cirrhosis_hos20m" class="form-control" value="<?php echo $table3->cirrhosis_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="cirrhosis_hos20f" class="form-control" value="<?php echo $table3->cirrhosis_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="cirrhosis_deaths5m" class="form-control" value="<?php echo $table3->cirrhosis_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="cirrhosis_deaths5f" class="form-control" value="<?php echo $table3->cirrhosis_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="cirrhosis_deaths19m" class="form-control" value="<?php echo $table3->cirrhosis_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="cirrhosis_deaths19f" class="form-control" value="<?php echo $table3->cirrhosis_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="cirrhosis_deaths20m" class="form-control" value="<?php echo $table3->cirrhosis_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="cirrhosis_deaths20f" class="form-control" value="<?php echo $table3->cirrhosis_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>31</td>
			            <td class="left">Digestive tract hemorrhages</td>
									<td><input type="number" min="0" name="digestive_hos5m" class="form-control" value="<?php echo $table3->digestive_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="digestive_hos5f" class="form-control" value="<?php echo $table3->digestive_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="digestive_hos19m" class="form-control" value="<?php echo $table3->digestive_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="digestive_hos19f" class="form-control" value="<?php echo $table3->digestive_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="digestive_hos20m" class="form-control" value="<?php echo $table3->digestive_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="digestive_hos20f" class="form-control" value="<?php echo $table3->digestive_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="digestive_deaths5m" class="form-control" value="<?php echo $table3->digestive_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="digestive_deaths5f" class="form-control" value="<?php echo $table3->digestive_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="digestive_deaths19m" class="form-control" value="<?php echo $table3->digestive_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="digestive_deaths19f" class="form-control" value="<?php echo $table3->digestive_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="digestive_deaths20m" class="form-control" value="<?php echo $table3->digestive_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="digestive_deaths20f" class="form-control" value="<?php echo $table3->digestive_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>32</td>
			            <td class="left">Gastritis</td>
									<td><input type="number" min="0" name="gastritis_hos5m" class="form-control" value="<?php echo $table3->gastritis_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="gastritis_hos5f" class="form-control" value="<?php echo $table3->gastritis_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="gastritis_hos19m" class="form-control" value="<?php echo $table3->gastritis_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="gastritis_hos19f" class="form-control" value="<?php echo $table3->gastritis_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="gastritis_hos20m" class="form-control" value="<?php echo $table3->gastritis_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="gastritis_hos20f" class="form-control" value="<?php echo $table3->gastritis_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="gastritis_deaths5m" class="form-control" value="<?php echo $table3->gastritis_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="gastritis_deaths5f" class="form-control" value="<?php echo $table3->gastritis_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="gastritis_deaths19m" class="form-control" value="<?php echo $table3->gastritis_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="gastritis_deaths19f" class="form-control" value="<?php echo $table3->gastritis_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="gastritis_deaths20m" class="form-control" value="<?php echo $table3->gastritis_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="gastritis_deaths20f" class="form-control" value="<?php echo $table3->gastritis_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>33</td>
			            <td class="left">Ulcer, gastro-duodenal</td>
									<td><input type="number" min="0" name="ulcer_hos5m" class="form-control" value="<?php echo $table3->ulcer_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="ulcer_hos5f" class="form-control" value="<?php echo $table3->ulcer_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="ulcer_hos19m" class="form-control" value="<?php echo $table3->ulcer_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="ulcer_hos19f" class="form-control" value="<?php echo $table3->ulcer_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="ulcer_hos20m" class="form-control" value="<?php echo $table3->ulcer_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="ulcer_hos20f" class="form-control" value="<?php echo $table3->ulcer_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="ulcer_deaths5m" class="form-control" value="<?php echo $table3->ulcer_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="ulcer_deaths5f" class="form-control" value="<?php echo $table3->ulcer_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="ulcer_deaths19m" class="form-control" value="<?php echo $table3->ulcer_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="ulcer_deaths19f" class="form-control" value="<?php echo $table3->ulcer_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="ulcer_deaths20m" class="form-control" value="<?php echo $table3->ulcer_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="ulcer_deaths20f" class="form-control" value="<?php echo $table3->ulcer_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>34</td>
			            <td class="left">Appendicitis</td>
									<td><input type="number" min="0" name="appendi_hos5m" class="form-control" value="<?php echo $table3->appendi_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="appendi_hos5f" class="form-control" value="<?php echo $table3->appendi_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="appendi_hos19m" class="form-control" value="<?php echo $table3->appendi_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="appendi_hos19f" class="form-control" value="<?php echo $table3->appendi_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="appendi_hos20m" class="form-control" value="<?php echo $table3->appendi_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="appendi_hos20f" class="form-control" value="<?php echo $table3->appendi_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="appendi_deaths5m" class="form-control" value="<?php echo $table3->appendi_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="appendi_deaths5f" class="form-control" value="<?php echo $table3->appendi_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="appendi_deaths19m" class="form-control" value="<?php echo $table3->appendi_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="appendi_deaths19f" class="form-control" value="<?php echo $table3->appendi_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="appendi_deaths20m" class="form-control" value="<?php echo $table3->appendi_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="appendi_deaths20f" class="form-control" value="<?php echo $table3->appendi_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>35</td>
			            <td class="left">Hernia</td>
									<td><input type="number" min="0" name="hernia_hos5m" class="form-control" value="<?php echo $table3->hernia_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="hernia_hos5f" class="form-control" value="<?php echo $table3->hernia_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="hernia_hos19m" class="form-control" value="<?php echo $table3->hernia_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="hernia_hos19f" class="form-control" value="<?php echo $table3->hernia_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="hernia_hos20m" class="form-control" value="<?php echo $table3->hernia_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="hernia_hos20f" class="form-control" value="<?php echo $table3->hernia_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="hernia_deaths5m" class="form-control" value="<?php echo $table3->hernia_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="hernia_deaths5f" class="form-control" value="<?php echo $table3->hernia_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="hernia_deaths19m" class="form-control" value="<?php echo $table3->hernia_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="hernia_deaths19f" class="form-control" value="<?php echo $table3->hernia_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="hernia_deaths20m" class="form-control" value="<?php echo $table3->hernia_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="hernia_deaths20f" class="form-control" value="<?php echo $table3->hernia_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>36</td>
			            <td class="left">Peritonitis (non-tuberculosis)</td>
									<td><input type="number" min="0" name="peritonitis_hos5m" class="form-control" value="<?php echo $table3->peritonitis_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="peritonitis_hos5f" class="form-control" value="<?php echo $table3->peritonitis_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="peritonitis_hos19m" class="form-control" value="<?php echo $table3->peritonitis_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="peritonitis_hos19f" class="form-control" value="<?php echo $table3->peritonitis_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="peritonitis_hos20m" class="form-control" value="<?php echo $table3->peritonitis_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="peritonitis_hos20f" class="form-control" value="<?php echo $table3->peritonitis_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="peritonitis_deaths5m" class="form-control" value="<?php echo $table3->peritonitis_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="peritonitis_deaths5f" class="form-control" value="<?php echo $table3->peritonitis_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="peritonitis_deaths19m" class="form-control" value="<?php echo $table3->peritonitis_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="peritonitis_deaths19f" class="form-control" value="<?php echo $table3->peritonitis_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="peritonitis_deaths20m" class="form-control" value="<?php echo $table3->peritonitis_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="peritonitis_deaths20f" class="form-control" value="<?php echo $table3->peritonitis_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>37</td>
			            <td class="left">Intestinal occlusion</td>
									<td><input type="number" min="0" name="intestinal_hos5m" class="form-control" value="<?php echo $table3->intestinal_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="intestinal_hos5f" class="form-control" value="<?php echo $table3->intestinal_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="intestinal_hos19m" class="form-control" value="<?php echo $table3->intestinal_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="intestinal_hos19f" class="form-control" value="<?php echo $table3->intestinal_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="intestinal_hos20m" class="form-control" value="<?php echo $table3->intestinal_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="intestinal_hos20f" class="form-control" value="<?php echo $table3->intestinal_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="intestinal_deaths5m" class="form-control" value="<?php echo $table3->intestinal_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="intestinal_deaths5f" class="form-control" value="<?php echo $table3->intestinal_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="intestinal_deaths19m" class="form-control" value="<?php echo $table3->intestinal_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="intestinal_deaths19f" class="form-control" value="<?php echo $table3->intestinal_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="intestinal_deaths20m" class="form-control" value="<?php echo $table3->intestinal_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="intestinal_deaths20f" class="form-control" value="<?php echo $table3->intestinal_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>38</td>
			            <td class="left">Urinary tract infections</td>
									<td><input type="number" min="0" name="urinary_hos5m" class="form-control" value="<?php echo $table3->urinary_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="urinary_hos5f" class="form-control" value="<?php echo $table3->urinary_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="urinary_hos19m" class="form-control" value="<?php echo $table3->urinary_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="urinary_hos19f" class="form-control" value="<?php echo $table3->urinary_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="urinary_hos20m" class="form-control" value="<?php echo $table3->urinary_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="urinary_hos20f" class="form-control" value="<?php echo $table3->urinary_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="urinary_deaths5m" class="form-control" value="<?php echo $table3->urinary_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="urinary_deaths5f" class="form-control" value="<?php echo $table3->urinary_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="urinary_deaths19m" class="form-control" value="<?php echo $table3->urinary_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="urinary_deaths19f" class="form-control" value="<?php echo $table3->urinary_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="urinary_deaths20m" class="form-control" value="<?php echo $table3->urinary_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="urinary_deaths20f" class="form-control" value="<?php echo $table3->urinary_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>39</td>
			            <td class="left">Bone infections (including osteomyelitis)</td>
									<td><input type="number" min="0" name="bone_inf_hos5m" class="form-control" value="<?php echo $table3->bone_inf_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="bone_inf_hos5f" class="form-control" value="<?php echo $table3->bone_inf_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="bone_inf_hos19m" class="form-control" value="<?php echo $table3->bone_inf_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="bone_inf_hos19f" class="form-control" value="<?php echo $table3->bone_inf_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="bone_inf_hos20m" class="form-control" value="<?php echo $table3->bone_inf_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="bone_inf_hos20f" class="form-control" value="<?php echo $table3->bone_inf_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="bone_inf_deaths5m" class="form-control" value="<?php echo $table3->bone_inf_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="bone_inf_deaths5f" class="form-control" value="<?php echo $table3->bone_inf_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="bone_inf_deaths19m" class="form-control" value="<?php echo $table3->bone_inf_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="bone_inf_deaths19f" class="form-control" value="<?php echo $table3->bone_inf_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="bone_inf_deaths20m" class="form-control" value="<?php echo $table3->bone_inf_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="bone_inf_deaths20f" class="form-control" value="<?php echo $table3->bone_inf_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>40</td>
			            <td class="left">Bone and joint disease other</td>
									<td><input type="number" min="0" name="bone_other_hos5m" class="form-control" value="<?php echo $table3->bone_other_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="bone_other_hos5f" class="form-control" value="<?php echo $table3->bone_other_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="bone_other_hos19m" class="form-control" value="<?php echo $table3->bone_other_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="bone_other_hos19f" class="form-control" value="<?php echo $table3->bone_other_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="bone_other_hos20m" class="form-control" value="<?php echo $table3->bone_other_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="bone_other_hos20f" class="form-control" value="<?php echo $table3->bone_other_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="bone_other_deaths5m" class="form-control" value="<?php echo $table3->bone_other_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="bone_other_deaths5f" class="form-control" value="<?php echo $table3->bone_other_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="bone_other_deaths19m" class="form-control" value="<?php echo $table3->bone_other_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="bone_other_deaths19f" class="form-control" value="<?php echo $table3->bone_other_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="bone_other_deaths20m" class="form-control" value="<?php echo $table3->bone_other_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="bone_other_deaths20f" class="form-control" value="<?php echo $table3->bone_other_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>41</td>
			            <td class="left">Acute flaccid paralysis (polio)</td>
									<td><input type="number" min="0" name="acute_hos5m" class="form-control" value="<?php echo $table3->acute_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="acute_hos5f" class="form-control" value="<?php echo $table3->acute_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="acute_hos19m" class="form-control" value="<?php echo $table3->acute_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="acute_hos19f" class="form-control" value="<?php echo $table3->acute_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="acute_hos20m" class="form-control" value="<?php echo $table3->acute_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="acute_hos20f" class="form-control" value="<?php echo $table3->acute_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="acute_deaths5m" class="form-control" value="<?php echo $table3->acute_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="acute_deaths5f" class="form-control" value="<?php echo $table3->acute_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="acute_deaths19m" class="form-control" value="<?php echo $table3->acute_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="acute_deaths19f" class="form-control" value="<?php echo $table3->acute_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="acute_deaths20m" class="form-control" value="<?php echo $table3->acute_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="acute_deaths20f" class="form-control" value="<?php echo $table3->acute_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>42</td>
			            <td class="left">Gynecological problems</td>
			            <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
			            <td><input type="number" min="0" name="gyneco_hos19f" class="form-control" value="<?php echo $table3->gyneco_hos19f; ?>"></td>
                  <td class="grey"></td>
			            <td><input type="number" min="0" name="gyneco_hos20f" class="form-control" value="<?php echo $table3->gyneco_hos20f; ?>"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
                  <td class="grey"></td>
			            <td><input type="number" min="0" name="gyneco_deaths19f" class="form-control" value="<?php echo $table3->gyneco_deaths19f; ?>"></td>
                  <td class="grey"></td>
			            <td><input type="number" min="0" name="gyneco_deaths20f" class="form-control" value="<?php echo $table3->gyneco_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>43</td>
			            <td class="left">Mastoditis</td>
									<td><input type="number" min="0" name="mastoditis_hos5m" class="form-control" value="<?php echo $table3->mastoditis_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="mastoditis_hos5f" class="form-control" value="<?php echo $table3->mastoditis_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="mastoditis_hos19m" class="form-control" value="<?php echo $table3->mastoditis_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="mastoditis_hos19f" class="form-control" value="<?php echo $table3->mastoditis_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="mastoditis_hos20m" class="form-control" value="<?php echo $table3->mastoditis_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="mastoditis_hos20f" class="form-control" value="<?php echo $table3->mastoditis_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="mastoditis_deaths5m" class="form-control" value="<?php echo $table3->mastoditis_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="mastoditis_deaths5f" class="form-control" value="<?php echo $table3->mastoditis_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="mastoditis_deaths19m" class="form-control" value="<?php echo $table3->mastoditis_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="mastoditis_deaths19f" class="form-control" value="<?php echo $table3->mastoditis_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="mastoditis_deaths20m" class="form-control" value="<?php echo $table3->mastoditis_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="mastoditis_deaths20f" class="form-control" value="<?php echo $table3->mastoditis_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>44</td>
			            <td class="left">Tetanus</td>
									<td><input type="number" min="0" name="tetanus_hos5m" class="form-control" value="<?php echo $table3->tetanus_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="tetanus_hos5f" class="form-control" value="<?php echo $table3->tetanus_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="tetanus_hos19m" class="form-control" value="<?php echo $table3->tetanus_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="tetanus_hos19f" class="form-control" value="<?php echo $table3->tetanus_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="tetanus_hos20m" class="form-control" value="<?php echo $table3->tetanus_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="tetanus_hos20f" class="form-control" value="<?php echo $table3->tetanus_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="tetanus_deaths5m" class="form-control" value="<?php echo $table3->tetanus_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="tetanus_deaths5f" class="form-control" value="<?php echo $table3->tetanus_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="tetanus_deaths19m" class="form-control" value="<?php echo $table3->tetanus_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="tetanus_deaths19f" class="form-control" value="<?php echo $table3->tetanus_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="tetanus_deaths20m" class="form-control" value="<?php echo $table3->tetanus_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="tetanus_deaths20f" class="form-control" value="<?php echo $table3->tetanus_deaths20f; ?>"></td>
			          </tr>
                <tr>
			            <td>45</td>
			            <td class="left">Cancer all</td>
									<td><input type="number" min="0" name="cancer_hos5m" class="form-control" value="<?php echo $table3->cancer_hos5m; ?>"></td>
			            <td><input type="number" min="0" name="cancer_hos5f" class="form-control" value="<?php echo $table3->cancer_hos5f; ?>"></td>
			            <td><input type="number" min="0" name="cancer_hos19m" class="form-control" value="<?php echo $table3->cancer_hos19m; ?>"></td>
			            <td><input type="number" min="0" name="cancer_hos19f" class="form-control" value="<?php echo $table3->cancer_hos19f; ?>"></td>
			            <td><input type="number" min="0" name="cancer_hos20m" class="form-control" value="<?php echo $table3->cancer_hos20m; ?>"></td>
			            <td><input type="number" min="0" name="cancer_hos20f" class="form-control" value="<?php echo $table3->cancer_hos20f; ?>"></td>
			            <td><input type="number" min="0" name="cancer_deaths5m" class="form-control" value="<?php echo $table3->cancer_deaths5m; ?>"></td>
			            <td><input type="number" min="0" name="cancer_deaths5f" class="form-control" value="<?php echo $table3->cancer_deaths5f; ?>"></td>
			            <td><input type="number" min="0" name="cancer_deaths19m" class="form-control" value="<?php echo $table3->cancer_deaths19m; ?>"></td>
			            <td><input type="number" min="0" name="cancer_deaths19f" class="form-control" value="<?php echo $table3->cancer_deaths19f; ?>"></td>
			            <td><input type="number" min="0" name="cancer_deaths20m" class="form-control" value="<?php echo $table3->cancer_deaths20m; ?>"></td>
			            <td><input type="number" min="0" name="cancer_deaths20f" class="form-control" value="<?php echo $table3->cancer_deaths20f; ?>"></td>
			          </tr>
			        </tbody>
			      </table>
						<br>
			      <center><button type="submit">Validate</button></center>
					</div>
    		</form>
    	</div>
    </div>
    <script src="<?php echo base_url('assets/js/jquery2.min.js'); ?>"></script>
	  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	  <script src="<?php echo base_url('assets/js/bootstrap-select.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/datatablesFH.min.js'); ?>"></script>
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
		"bInfo": false,
		"fixedHeader": true
			});
  $('#A10').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false,
		"fixedHeader": true
      });
  $('#B10').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
      });
  $('#C10').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
      });
  $('#D10').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
      });
	$('#E10').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"fixedHeader": true
	    });
	$('.dataTables_length').addClass('bs-select');
</script>
