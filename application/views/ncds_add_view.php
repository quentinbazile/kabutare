<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>NCDS</title>
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
			<h2>NCDS - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('add_date'))); ?></h2>
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
					            <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
						<h4>Chronic diseases</h4>
						<div class="row">
	            <table id="IV" class="center">
					      <thead>
					        <tr>
					          <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="6">Old cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
					          <td class="left">Medical condition</td>
					          <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
										<td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                </tr>
					        <tr>
					          <td>1.1</td>
					          <td class="left">Hypertension</td>
					          <td><input type="number" min="0" name="hyper_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="hyper_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="hyper_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="hyper_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="hyper_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="hyper_oc40f" class="form-control"></td>
										<td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
					        </tr>
	                <tr>
					          <td>2</td>
					          <td class="left">Respiratory diseases</td>
					          <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
										<td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                </tr>
	                <tr>
					          <td>2.1</td>
					          <td class="left">Asthma intermittant</td>
					          <td><input type="number" min="0" name="asth_int_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_int_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_int_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_int_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_int_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_int_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="asth_int_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_int_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_int_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_int_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_int_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_int_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>2.2</td>
					          <td class="left">Asthma persintent mild</td>
					          <td><input type="number" min="0" name="asth_mild_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mild_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mild_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mild_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mild_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mild_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="asth_mild_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mild_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mild_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mild_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mild_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mild_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>2.3</td>
					          <td class="left">Asthma persintent modarate</td>
					          <td><input type="number" min="0" name="asth_mod_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mod_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mod_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mod_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mod_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mod_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="asth_mod_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mod_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mod_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mod_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mod_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_mod_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>2.4</td>
					          <td class="left">Asthma persintent severe</td>
					          <td><input type="number" min="0" name="asth_sev_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_sev_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_sev_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_sev_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_sev_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_sev_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="asth_sev_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_sev_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_sev_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_sev_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_sev_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="asth_sev_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>2.5</td>
					          <td class="left">Bronchitis</td>
					          <td><input type="number" min="0" name="bronch_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="bronch_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="bronch_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="bronch_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="bronch_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="bronch_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="bronch_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="bronch_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="bronch_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="bronch_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="bronch_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="bronch_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>2.6</td>
					          <td class="left">Other chronic obstructive pulmonary diseases</td>
					          <td><input type="number" min="0" name="other_pulm_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_pulm_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_pulm_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_pulm_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_pulm_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_pulm_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="other_pulm_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_pulm_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_pulm_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_pulm_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_pulm_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_pulm_d40f" class="form-control"></td>
					        </tr>
	                <tr>
					          <td>3</td>
					          <td class="left">Diabetes</td>
					          <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
										<td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                </tr>
	                <tr>
					          <td>3.1</td>
					          <td class="left">Diabetes - Type 1</td>
					          <td><input type="number" min="0" name="diab1_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab1_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="diab1_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab1_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="diab1_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab1_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="diab1_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab1_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="diab1_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab1_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="diab1_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab1_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>3.2</td>
					          <td class="left">Diabetes - Type 2</td>
					          <td><input type="number" min="0" name="diab2_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab2_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="diab2_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab2_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="diab2_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab2_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="diab2_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab2_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="diab2_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab2_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="diab2_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab2_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>3.3</td>
					          <td class="left">Diabetes gestational</td>
					          <td><input type="number" min="0" name="diab_gest_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab_gest_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="diab_gest_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab_gest_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="diab_gest_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab_gest_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="diab_gest_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab_gest_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="diab_gest_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab_gest_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="diab_gest_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="diab_gest_d40f" class="form-control"></td>
					        </tr>
	                <tr>
					          <td>4</td>
					          <td class="left">Cancer</td>
					          <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
										<td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                </tr>
	                <tr>
					          <td>4.01</td>
					          <td class="left">Breast cancer</td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="breast_oc19f" class="form-control"></td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="breast_oc39f" class="form-control"></td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="breast_oc40f" class="form-control"></td>

										<td class="grey"></td>
					          <td><input type="number" min="0" name="breast_d19f" class="form-control"></td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="breast_d39f" class="form-control"></td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="breast_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>4.02</td>
					          <td class="left">Cervical cancer</td>
					          <td><input type="number" min="0" name="cervical_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="cervical_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="cervical_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="cervical_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="cervical_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="cervical_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="cervical_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="cervical_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="cervical_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="cervical_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="cervical_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="cervical_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>4.03</td>
					          <td class="left">Lymphoma</td>
					          <td><input type="number" min="0" name="lympho_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="lympho_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="lympho_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="lympho_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="lympho_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="lympho_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="lympho_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="lympho_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="lympho_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="lympho_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="lympho_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="lympho_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>4.04</td>
					          <td class="left">Leucamia</td>
					          <td><input type="number" min="0" name="leuca_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="leuca_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="leuca_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="leuca_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="leuca_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="leuca_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="leuca_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="leuca_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="leuca_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="leuca_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="leuca_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="leuca_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>4.05</td>
					          <td class="left">Colon recto cancer</td>
					          <td><input type="number" min="0" name="colon_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="colon_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="colon_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="colon_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="colon_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="colon_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="colon_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="colon_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="colon_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="colon_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="colon_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="colon_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>4.06</td>
					          <td class="left">Kaposi sarcoma</td>
					          <td><input type="number" min="0" name="kaposi_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="kaposi_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="kaposi_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="kaposi_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="kaposi_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="kaposi_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="kaposi_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="kaposi_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="kaposi_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="kaposi_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="kaposi_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="kaposi_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>4.07</td>
					          <td class="left">Retinoblastoma</td>
					          <td><input type="number" min="0" name="retino_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="retino_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="retino_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="retino_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="retino_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="retino_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="retino_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="retino_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="retino_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="retino_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="retino_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="retino_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>4.08</td>
					          <td class="left">Nephroblastoma</td>
					          <td><input type="number" min="0" name="nephro_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="nephro_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="nephro_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="nephro_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="nephro_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="nephro_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="nephro_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="nephro_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="nephro_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="nephro_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="nephro_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="nephro_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>4.09</td>
					          <td class="left">Ovarian cancer</td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="ovarian_oc19f" class="form-control"></td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="ovarian_oc39f" class="form-control"></td>
					          <td class="grey"></td>
					          <td><input type="number" min="0" name="ovarian_oc40f" class="form-control"></td>

										<td class="grey"></td>
					          <td><input type="number" min="0" name="ovarian_d19f" class="form-control"></td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="ovarian_d39f" class="form-control"></td>
					          <td class="grey"></td>
					          <td><input type="number" min="0" name="ovarian_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>4.10</td>
					          <td class="left">Prostate cancer</td>
					          <td><input type="number" min="0" name="prostate_oc19m" class="form-control"></td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="prostate_oc39m" class="form-control"></td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="prostate_oc40m" class="form-control"></td>
	                  <td class="grey"></td>

										<td><input type="number" min="0" name="prostate_d19m" class="form-control"></td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="prostate_d39m" class="form-control"></td>
	                  <td class="grey"></td>
					          <td><input type="number" min="0" name="prostate_d40m" class="form-control"></td>
	                  <td class="grey"></td>
					        </tr>
					        <tr>
					          <td>4.11</td>
					          <td class="left">Cancer others</td>
					          <td><input type="number" min="0" name="cancer_others_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="cancer_others_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="cancer_others_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="cancer_others_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="cancer_others_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="cancer_others_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="cancer_others_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="cancer_others_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="cancer_others_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="cancer_others_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="cancer_others_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="cancer_others_d40f" class="form-control"></td>
					        </tr>
					      </tbody>
					    </table>
						</div>
						<br>
						<h4>Other cardiovascular and kindney diseases</h4>
						<div class="row">
	            <table id="V" class="center">
					      <thead>
					        <tr>
					          <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          <th colspan="6">Old cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
					          <td class="left">Medical condition</td>
					          <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
										<td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                </tr>
					        <tr>
					          <td>1.1</td>
					          <td class="left">Cardiomyopathies</td>
					          <td><input type="number" min="0" name="cardio_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="cardio_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="cardio_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="cardio_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="cardio_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="cardio_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="cardio_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="cardio_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="cardio_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="cardio_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="cardio_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="cardio_d40f" class="form-control"></td>
					        </tr>
	                <tr>
					          <td>1.2</td>
					          <td class="left">Stroke/TIA</td>
					          <td><input type="number" min="0" name="stroke_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="stroke_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="stroke_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="stroke_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="stroke_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="stroke_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="stroke_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="stroke_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="stroke_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="stroke_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="stroke_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="stroke_d40f" class="form-control"></td>
					        </tr>
	                <tr>
					          <td>1.3</td>
					          <td class="left">Rheumatic heart disease</td>
					          <td><input type="number" min="0" name="rheumatic_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="rheumatic_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="rheumatic_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="rheumatic_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="rheumatic_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="rheumatic_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="rheumatic_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="rheumatic_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="rheumatic_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="rheumatic_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="rheumatic_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="rheumatic_d40f" class="form-control"></td>
					        </tr>
	                <tr>
					          <td>1.4</td>
					          <td class="left">Congenital heart disease</td>
					          <td><input type="number" min="0" name="cong_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="cong_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="cong_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="cong_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="cong_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="cong_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="cong_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="cong_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="cong_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="cong_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="cong_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="cong_d40f" class="form-control"></td>
					        </tr>
	                <tr>
					          <td>1.5</td>
					          <td class="left">Coronary artery disease</td>
					          <td><input type="number" min="0" name="coronary_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="coronary_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="coronary_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="coronary_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="coronary_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="coronary_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="coronary_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="coronary_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="coronary_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="coronary_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="coronary_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="coronary_d40f" class="form-control"></td>
					        </tr>
	                <tr>
					          <td>1.6</td>
					          <td class="left">Pericardial disease</td>
					          <td><input type="number" min="0" name="peri_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="peri_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="peri_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="peri_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="peri_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="peri_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="peri_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="peri_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="peri_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="peri_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="peri_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="peri_d40f" class="form-control"></td>
					        </tr>
	                <tr>
					          <td>1.7</td>
					          <td class="left">Heart failure</td>
					          <td><input type="number" min="0" name="heart_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="heart_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="heart_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="heart_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="heart_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="heart_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="heart_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="heart_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="heart_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="heart_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="heart_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="heart_d40f" class="form-control"></td>
					        </tr>
	                <tr>
					          <td>1.8</td>
					          <td class="left">Other cardiovascular</td>
					          <td><input type="number" min="0" name="other_cardio_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_cardio_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_cardio_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_cardio_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_cardio_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_cardio_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="other_cardio_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_cardio_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_cardio_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_cardio_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_cardio_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_cardio_d40f" class="form-control"></td>
					        </tr>
	                <tr>
					          <td>1.9</td>
					          <td class="left">Post heart surgery</td>
					          <td><input type="number" min="0" name="post_heart_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="post_heart_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="post_heart_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="post_heart_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="post_heart_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="post_heart_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="post_heart_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="post_heart_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="post_heart_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="post_heart_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="post_heart_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="post_heart_d40f" class="form-control"></td>
					        </tr>
	                <tr>
					          <td>2</td>
					          <td class="left">Kidney diseases</td>
					          <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
										<td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                </tr>
	                <tr>
					          <td>2.1</td>
					          <td class="left">Renal failure</td>
					          <td><input type="number" min="0" name="renal_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="renal_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="renal_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="renal_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="renal_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="renal_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="renal_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="renal_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="renal_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="renal_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="renal_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="renal_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>2.2</td>
					          <td class="left">Other chonic kidney diseases</td>
					          <td><input type="number" min="0" name="other_chronic_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_chronic_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_chronic_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_chronic_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_chronic_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_chronic_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="other_chronic_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_chronic_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_chronic_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_chronic_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_chronic_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_chronic_d40f" class="form-control"></td>
					        </tr>
	                <tr>
					          <td>3</td>
					          <td class="left">Metabolic diseases</td>
					          <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
										<td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                  <td class="grey"></td>
	                </tr>
	                <tr>
					          <td>3.1</td>
					          <td class="left">Thyroid disease</td>
					          <td><input type="number" min="0" name="thyroid_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="thyroid_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="thyroid_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="thyroid_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="thyroid_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="thyroid_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="thyroid_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="thyroid_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="thyroid_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="thyroid_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="thyroid_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="thyroid_d40f" class="form-control"></td>
					        </tr>
					        <tr>
					          <td>3.2</td>
					          <td class="left">Other endocrine and metabolic diseases</td>
					          <td><input type="number" min="0" name="other_endo_oc19m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_endo_oc19f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_endo_oc39m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_endo_oc39f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_endo_oc40m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_endo_oc40f" class="form-control"></td>

										<td><input type="number" min="0" name="other_endo_d19m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_endo_d19f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_endo_d39m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_endo_d39f" class="form-control"></td>
					          <td><input type="number" min="0" name="other_endo_d40m" class="form-control"></td>
					          <td><input type="number" min="0" name="other_endo_d40f" class="form-control"></td>
					        </tr>
					      </tbody>
					    </table>
						</div>
						<br>
	      		<center><button type="submit">Validate</button></center>
					</div>
				</form>
    	</div>
	    <script src="<?php echo base_url('assets/js/jquery2.min.js'); ?>"></script>
		  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		  <script src="<?php echo base_url('assets/js/bootstrap-select.min.js'); ?>"></script>
			<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
			<script src="<?php echo base_url('assets/js/datatablesFH.min.js'); ?>"></script>
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
	$('#IV').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"fixedHeader": true
	});
	$('#V').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"fixedHeader": true
	});
	$('.dataTables_length').addClass('bs-select');
</script>
