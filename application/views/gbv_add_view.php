<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gender Based Violence</title>
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
			<h2>Gender Based Violence - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('add_date'))); ?></h2>
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
						<h4>Gender based violence</h4>
			      <table id="GBV" class="center">
			        <thead>
			          <tr>
			            <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th colspan="2">Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th colspan="2">Age 5 to 9<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th colspan="2">Age 10 to 18<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th colspan="2">Age 19 to 24<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th colspan="2">Age > 25<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
								</tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td class="center">1</td>
			            <td class="left">GBV victims with symptoms of sexual violence (new cases)</td>
			            <td><input type="number" min="0" name="sexual_violence_5m" class="form-control"></td>
			            <td><input type="number" min="0" name="sexual_violence_5f" class="form-control"></td>
			            <td><input type="number" min="0" name="sexual_violence_9m" class="form-control"></td>
			            <td><input type="number" min="0" name="sexual_violence_9f" class="form-control"></td>
			            <td><input type="number" min="0" name="sexual_violence_18m" class="form-control"></td>
			            <td><input type="number" min="0" name="sexual_violence_18f" class="form-control"></td>
			            <td><input type="number" min="0" name="sexual_violence_24m" class="form-control"></td>
			            <td><input type="number" min="0" name="sexual_violence_24f" class="form-control"></td>
			            <td><input type="number" min="0" name="sexual_violence_25m" class="form-control"></td>
			            <td><input type="number" min="0" name="sexual_violence_25f" class="form-control"></td>
			          </tr>
			          <tr>
			            <td class="center">2</td>
			            <td class="left">GBV victims with symptoms of physical violence (new cases)</td>
			            <td><input type="number" min="0" name="physical_violence_5m" class="form-control"></td>
			            <td><input type="number" min="0" name="physical_violence_5f" class="form-control"></td>
			            <td><input type="number" min="0" name="physical_violence_9m" class="form-control"></td>
			            <td><input type="number" min="0" name="physical_violence_9f" class="form-control"></td>
			            <td><input type="number" min="0" name="physical_violence_18m" class="form-control"></td>
			            <td><input type="number" min="0" name="physical_violence_18f" class="form-control"></td>
			            <td><input type="number" min="0" name="physical_violence_24m" class="form-control"></td>
			            <td><input type="number" min="0" name="physical_violence_24f" class="form-control"></td>
			            <td><input type="number" min="0" name="physical_violence_25m" class="form-control"></td>
			            <td><input type="number" min="0" name="physical_violence_25f" class="form-control"></td>
			          </tr>
			          <tr>
			            <td class="center">3</td>
			            <td class="left">GBV victims with symptoms of emotional violence (new cases)</td>
			            <td><input type="number" min="0" name="emotional_violence_5m" class="form-control"></td>
			            <td><input type="number" min="0" name="emotional_violence_5f" class="form-control"></td>
			            <td><input type="number" min="0" name="emotional_violence_9m" class="form-control"></td>
			            <td><input type="number" min="0" name="emotional_violence_9f" class="form-control"></td>
			            <td><input type="number" min="0" name="emotional_violence_18m" class="form-control"></td>
			            <td><input type="number" min="0" name="emotional_violence_18f" class="form-control"></td>
			            <td><input type="number" min="0" name="emotional_violence_24m" class="form-control"></td>
			            <td><input type="number" min="0" name="emotional_violence_24f" class="form-control"></td>
			            <td><input type="number" min="0" name="emotional_violence_25m" class="form-control"></td>
			            <td><input type="number" min="0" name="emotional_violence_25f" class="form-control"></td>
			          </tr>
			          <tr>
			            <td class="center">4</td>
			            <td class="left">GBV victims with symptoms of economic violence (new cases)</td>
			            <td><input type="number" min="0" name="economic_violence_5m" class="form-control"></td>
			            <td><input type="number" min="0" name="economic_violence_5f" class="form-control"></td>
			            <td><input type="number" min="0" name="economic_violence_9m" class="form-control"></td>
			            <td><input type="number" min="0" name="economic_violence_9f" class="form-control"></td>
			            <td><input type="number" min="0" name="economic_violence_18m" class="form-control"></td>
			            <td><input type="number" min="0" name="economic_violence_18f" class="form-control"></td>
			            <td><input type="number" min="0" name="economic_violence_24m" class="form-control"></td>
			            <td><input type="number" min="0" name="economic_violence_24f" class="form-control"></td>
			            <td><input type="number" min="0" name="economic_violence_25m" class="form-control"></td>
			            <td><input type="number" min="0" name="economic_violence_25f" class="form-control"></td>
			          </tr>
			          <tr>
			            <td class="center">5</td>
			            <td class="left">GBV victims referred for care to higher level health facility</td>
			            <td><input type="number" min="0" name="refered_higher_level_5m" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_higher_level_5f" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_higher_level_9m" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_higher_level_9f" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_higher_level_18m" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_higher_level_18f" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_higher_level_24m" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_higher_level_24f" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_higher_level_25m" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_higher_level_25f" class="form-control"></td>
			          </tr>
			          <tr>
			            <td class="center">6</td>
			            <td class="left">GBV victims referred to this facility by police</td>
			            <td><input type="number" min="0" name="refered_police_5m" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_police_5f" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_police_9m" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_police_9f" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_police_18m" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_police_18f" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_police_24m" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_police_24f" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_police_25m" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_police_25f" class="form-control"></td>
			          </tr>
			          <tr>
			            <td class="center">7</td>
			            <td class="left">GBV victims referred to this facility by community health workers</td>
			            <td><input type="number" min="0" name="refered_community_5m" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_community_5f" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_community_9m" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_community_9f" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_community_18m" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_community_18f" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_community_24m" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_community_24f" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_community_25m" class="form-control"></td>
			            <td><input type="number" min="0" name="refered_community_25f" class="form-control"></td>
			          </tr>
			          <tr>
			            <td class="center">8</td>
			            <td class="left">GBV victims HIV + sero-conversion 3 months after exposure</td>
			            <td><input type="number" min="0" name="hiv_5m" class="form-control"></td>
			            <td><input type="number" min="0" name="hiv_5f" class="form-control"></td>
			            <td><input type="number" min="0" name="hiv_9m" class="form-control"></td>
			            <td><input type="number" min="0" name="hiv_9f" class="form-control"></td>
			            <td><input type="number" min="0" name="hiv_18m" class="form-control"></td>
			            <td><input type="number" min="0" name="hiv_18f" class="form-control"></td>
			            <td><input type="number" min="0" name="hiv_24m" class="form-control"></td>
			            <td><input type="number" min="0" name="hiv_24f" class="form-control"></td>
			            <td><input type="number" min="0" name="hiv_25m" class="form-control"></td>
			            <td><input type="number" min="0" name="hiv_25f" class="form-control"></td>
			          </tr>
			          <tr>
			            <td class="center">9</td>
			            <td class="left">GBV victims with irreversible disabilities due to GBV</td>
			            <td><input type="number" min="0" name="disabilities_5m" class="form-control"></td>
			            <td><input type="number" min="0" name="disabilities_5f" class="form-control"></td>
			            <td><input type="number" min="0" name="disabilities_9m" class="form-control"></td>
			            <td><input type="number" min="0" name="disabilities_9f" class="form-control"></td>
			            <td><input type="number" min="0" name="disabilities_18m" class="form-control"></td>
			            <td><input type="number" min="0" name="disabilities_18f" class="form-control"></td>
			            <td><input type="number" min="0" name="disabilities_24m" class="form-control"></td>
			            <td><input type="number" min="0" name="disabilities_24f" class="form-control"></td>
			            <td><input type="number" min="0" name="disabilities_25m" class="form-control"></td>
			            <td><input type="number" min="0" name="disabilities_25f" class="form-control"></td>
			          </tr>
			          <tr>
			            <td class="center">10</td>
			            <td class="left">GBV victims deaths</td>
			            <td><input type="number" min="0" name="deaths_5m" class="form-control"></td>
			            <td><input type="number" min="0" name="deaths_5f" class="form-control"></td>
			            <td><input type="number" min="0" name="deaths_9m" class="form-control"></td>
			            <td><input type="number" min="0" name="deaths_9f" class="form-control"></td>
			            <td><input type="number" min="0" name="deaths_18m" class="form-control"></td>
			            <td><input type="number" min="0" name="deaths_18f" class="form-control"></td>
			            <td><input type="number" min="0" name="deaths_24m" class="form-control"></td>
			            <td><input type="number" min="0" name="deaths_24f" class="form-control"></td>
			            <td><input type="number" min="0" name="deaths_25m" class="form-control"></td>
			            <td><input type="number" min="0" name="deaths_25f" class="form-control"></td>
			          </tr>
			          <tr>
			            <td class="center">11</td>
			            <td class="left">GBV victims pregnant 4 weeks after exposure</td>
			            <td class="grey"></td>
			            <td class="grey"></td>
			            <td class="grey"></td>
			            <td><input type="number" min="0" name="pregnant_9f" class="form-control"></td>
			            <td class="grey"></td>
			            <td><input type="number" min="0" name="pregnant_18f" class="form-control"></td>
			            <td class="grey"></td>
			            <td><input type="number" min="0" name="pregnant_24f" class="form-control"></td>
			            <td class="grey"></td>
			            <td><input type="number" min="0" name="pregnant_25f" class="form-control"></td>
			          </tr>
			          <tr>
			            <td class="center">12</td>
			            <td class="left">GBV victims received emergency contraception within 72h</td>
			            <td class="grey"></td>
			            <td class="grey"></td>
			            <td class="grey"></td>
			            <td><input type="number" min="0" name="contraception_9f" class="form-control"></td>
			            <td class="grey"></td>
			            <td><input type="number" min="0" name="contraception_18f" class="form-control"></td>
			            <td class="grey"></td>
			            <td><input type="number" min="0" name="contraception_24f" class="form-control"></td>
			            <td class="grey"></td>
			            <td><input type="number" min="0" name="contraception_25f" class="form-control"></td>
			          </tr>
			          <tr>
			            <td class="center">13</td>
			            <td class="left">GBV victims received post exposure HIV prophylaxis within 48h</td>
			            <td><input type="number" min="0" name="exposure_hiv_5m" class="form-control"></td>
			            <td><input type="number" min="0" name="exposure_hiv_5f" class="form-control"></td>
			            <td><input type="number" min="0" name="exposure_hiv_9m" class="form-control"></td>
			            <td><input type="number" min="0" name="exposure_hiv_9f" class="form-control"></td>
			            <td><input type="number" min="0" name="exposure_hiv_18m" class="form-control"></td>
			            <td><input type="number" min="0" name="exposure_hiv_18f" class="form-control"></td>
			            <td><input type="number" min="0" name="exposure_hiv_24m" class="form-control"></td>
			            <td><input type="number" min="0" name="exposure_hiv_24f" class="form-control"></td>
			            <td><input type="number" min="0" name="exposure_hiv_25m" class="form-control"></td>
			            <td><input type="number" min="0" name="exposure_hiv_25f" class="form-control"></td>
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
	$('#GBV').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"fixedHeader": true
	    });
	$('.dataTables_length').addClass('bs-select');
</script>
