<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Stomatology</title>
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
		<div class="container-fluid">
			<h2>Stomatology - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('update_date'))); ?></h2>
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
				            <td class="left">Insured (mutuelle or other insurance members)</td>
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
						<h4>Oral diseases</h4>
	      		<table id="Gb" class="center">
			        <thead>
			          <tr>
			            <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th rowspan="2" class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
			            <td class="left">Dental caries</td>
			            <td><input type="number" min="0" name="dent_caries_19m" class="form-control" value="<?php echo $table2->dent_caries_19m; ?>"></td>
			            <td><input type="number" min="0" name="dent_caries_19f" class="form-control" value="<?php echo $table2->dent_caries_19f; ?>"></td>
			            <td><input type="number" min="0" name="dent_caries_39m" class="form-control" value="<?php echo $table2->dent_caries_39m; ?>"></td>
			            <td><input type="number" min="0" name="dent_caries_39f" class="form-control" value="<?php echo $table2->dent_caries_39f; ?>"></td>
			            <td><input type="number" min="0" name="dent_caries_40m" class="form-control" value="<?php echo $table2->dent_caries_40m; ?>"></td>
			            <td><input type="number" min="0" name="dent_caries_40f" class="form-control" value="<?php echo $table2->dent_caries_40f; ?>"></td>
			          </tr>
			          <tr>
			            <td>2</td>
			            <td class="left">Periodontal disease</td>
			            <td><input type="number" min="0" name="perio_diseas_19m" class="form-control" value="<?php echo $table2->perio_diseas_19m; ?>"></td>
			            <td><input type="number" min="0" name="perio_diseas_19f" class="form-control" value="<?php echo $table2->perio_diseas_19f; ?>"></td>
			            <td><input type="number" min="0" name="perio_diseas_39m" class="form-control" value="<?php echo $table2->perio_diseas_39m; ?>"></td>
			            <td><input type="number" min="0" name="perio_diseas_39f" class="form-control" value="<?php echo $table2->perio_diseas_39f; ?>"></td>
			            <td><input type="number" min="0" name="perio_diseas_40m" class="form-control" value="<?php echo $table2->perio_diseas_40m; ?>"></td>
			            <td><input type="number" min="0" name="perio_diseas_40f" class="form-control" value="<?php echo $table2->perio_diseas_40f; ?>"></td>
			          </tr>
			          <tr>
			            <td>3</td>
			            <td class="left">Other teeth and gum infections</td>
			            <td><input type="number" min="0" name="other_teeth_19m" class="form-control" value="<?php echo $table2->other_teeth_19m; ?>"></td>
			            <td><input type="number" min="0" name="other_teeth_19f" class="form-control" value="<?php echo $table2->other_teeth_19f; ?>"></td>
			            <td><input type="number" min="0" name="other_teeth_39m" class="form-control" value="<?php echo $table2->other_teeth_39m; ?>"></td>
			            <td><input type="number" min="0" name="other_teeth_39f" class="form-control" value="<?php echo $table2->other_teeth_39f; ?>"></td>
			            <td><input type="number" min="0" name="other_teeth_40m" class="form-control" value="<?php echo $table2->other_teeth_40m; ?>"></td>
			            <td><input type="number" min="0" name="other_teeth_40f" class="form-control" value="<?php echo $table2->other_teeth_40f; ?>"></td>
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
	$('#Gb').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	});
	$('.dataTables_length').addClass('bs-select');
</script>
