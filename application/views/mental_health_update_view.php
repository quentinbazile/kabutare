<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mental Health</title>
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
			<h2>Mental Health - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('update_date'))); ?></h2>
      <div>
        <form method="post" action="" class="form-inline">
					<div class="row">
						<div class="col-xs-8">
      				<h4>Outpatient morbidity summary table</h4>
						</div>
						<div class="col-xs-4">
              <h4>Referrals</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-8">
				      <table id="A2" class="center">
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
                    <td><input type="number" min="0" name="other_levels" class="form-control"  value="<?php echo $table1->other_levels; ?>"></td>
                  </tr>
                  <tr>
                    <td class="left">Counter referrals received</td>
                    <td><input type="number" min="0" name="counter_received" class="form-control" value="<?php echo $table1->counter_received; ?>"></td>
                  </tr>
                </tbody>
              </table>

						</div>
					</div>
					<div>
						<br>
						<div class="row">
							<div class="col-xs-4">
		      			<h4>Health insurance status of new cases</h4>
							</div>
							<div class="col-xs-4">
								<h4>Origin of outpatients</h4>
							</div>
              <div class="col-xs-4">
								<h4>Summary</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-4">
                <table id="B2" class="center">
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
							<div class="col-xs-4">
					      <table id="D2" class="center">
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
              <div class="col-xs-4">
					      <table id="A3" class="center">
					        <thead>
					          <tr>
                      <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					            <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
					          </tr>
					        </thead>
					        <tbody>
					          <tr>
                      <td class="center">1</td>
					            <td class="left">Mental patients under follow up</td>
					            <td><input type="number" min="0" name="follow_up" class="form-control" value="<?php echo $table2->follow_up; ?>"></td>
					          </tr>
					          <tr>
                      <td class="center">2</td>
					            <td class="left">Mental problems referred to higher level</td>
					            <td><input type="number" min="0" name="higher_level" class="form-control" value="<?php echo $table2->higher_level; ?>"></td>
					          </tr>
					          <tr>
                      <td class="center">3</td>
					            <td class="left">Mental problems hospitalized</td>
					            <td><input type="number" min="0" name="hospitalized" class="form-control" value="<?php echo $table2->hospitalized; ?>"></td>
					          </tr>
					        </tbody>
					      </table>
							</div>
						</div>
						<br>
						<h4>Diagnosis</h4>
			      <table id="B3" class="center">
			        <thead>
			          <tr>
                  <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				          <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				          <th colspan="6">New cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				          <th colspan="6">Old cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
				          <td class="center">1</td>
				          <td class="left">Anxiety disorders</td>
				          <td><input type="number" min="0" name="anxiety_nc19m" class="form-control" value="<?php echo $table2->anxiety_nc19m; ?>"></td>
				          <td><input type="number" min="0" name="anxiety_nc19f" class="form-control" value="<?php echo $table2->anxiety_nc19f; ?>"></td>
				          <td><input type="number" min="0" name="anxiety_nc39m" class="form-control" value="<?php echo $table2->anxiety_nc39m; ?>"></td>
				          <td><input type="number" min="0" name="anxiety_nc39f" class="form-control" value="<?php echo $table2->anxiety_nc39f; ?>"></td>
				          <td><input type="number" min="0" name="anxiety_nc40m" class="form-control" value="<?php echo $table2->anxiety_nc40m; ?>"></td>
				          <td><input type="number" min="0" name="anxiety_nc40f" class="form-control" value="<?php echo $table2->anxiety_nc40f; ?>"></td>
				          <td><input type="number" min="0" name="anxiety_oc19m" class="form-control" value="<?php echo $table2->anxiety_oc19m; ?>"></td>
				          <td><input type="number" min="0" name="anxiety_oc19f" class="form-control" value="<?php echo $table2->anxiety_oc19f; ?>"></td>
				          <td><input type="number" min="0" name="anxiety_oc39m" class="form-control" value="<?php echo $table2->anxiety_oc39m; ?>"></td>
				          <td><input type="number" min="0" name="anxiety_oc39f" class="form-control" value="<?php echo $table2->anxiety_oc39f; ?>"></td>
				          <td><input type="number" min="0" name="anxiety_oc40m" class="form-control" value="<?php echo $table2->anxiety_oc40m; ?>"></td>
				          <td><input type="number" min="0" name="anxiety_oc40f" class="form-control" value="<?php echo $table2->anxiety_oc40f; ?>"></td>
				        </tr>
				        <tr>
				          <td class="center">2</td>
				          <td class="left">Post-traumatic stress disorders</td>
				          <td><input type="number" min="0" name="stress_nc19m" class="form-control" value="<?php echo $table2->stress_nc19m; ?>"></td>
				          <td><input type="number" min="0" name="stress_nc19f" class="form-control" value="<?php echo $table2->stress_nc19f; ?>"></td>
				          <td><input type="number" min="0" name="stress_nc39m" class="form-control" value="<?php echo $table2->stress_nc39m; ?>"></td>
				          <td><input type="number" min="0" name="stress_nc39f" class="form-control" value="<?php echo $table2->stress_nc39f; ?>"></td>
				          <td><input type="number" min="0" name="stress_nc40m" class="form-control" value="<?php echo $table2->stress_nc40m; ?>"></td>
				          <td><input type="number" min="0" name="stress_nc40f" class="form-control" value="<?php echo $table2->stress_nc40f; ?>"></td>
				          <td><input type="number" min="0" name="stress_oc19m" class="form-control" value="<?php echo $table2->stress_oc19m; ?>"></td>
				          <td><input type="number" min="0" name="stress_oc19f" class="form-control" value="<?php echo $table2->stress_oc19f; ?>"></td>
				          <td><input type="number" min="0" name="stress_oc39m" class="form-control" value="<?php echo $table2->stress_oc39m; ?>"></td>
				          <td><input type="number" min="0" name="stress_oc39f" class="form-control" value="<?php echo $table2->stress_oc39f; ?>"></td>
				          <td><input type="number" min="0" name="stress_oc40m" class="form-control" value="<?php echo $table2->stress_oc40m; ?>"></td>
				          <td><input type="number" min="0" name="stress_oc40f" class="form-control" value="<?php echo $table2->stress_oc40f; ?>"></td>
				        </tr>
				        <tr>
				          <td class="center">3</td>
				          <td class="left">Schizophrenia and other psychoses</td>
				          <td><input type="number" min="0" name="schizo_nc19m" class="form-control" value="<?php echo $table2->schizo_nc19m; ?>"></td>
				          <td><input type="number" min="0" name="schizo_nc19f" class="form-control" value="<?php echo $table2->schizo_nc19f; ?>"></td>
				          <td><input type="number" min="0" name="schizo_nc39m" class="form-control" value="<?php echo $table2->schizo_nc39m; ?>"></td>
				          <td><input type="number" min="0" name="schizo_nc39f" class="form-control" value="<?php echo $table2->schizo_nc39f; ?>"></td>
				          <td><input type="number" min="0" name="schizo_nc40m" class="form-control" value="<?php echo $table2->schizo_nc40m; ?>"></td>
				          <td><input type="number" min="0" name="schizo_nc40f" class="form-control" value="<?php echo $table2->schizo_nc40f; ?>"></td>
				          <td><input type="number" min="0" name="schizo_oc19m" class="form-control" value="<?php echo $table2->schizo_oc19m; ?>"></td>
				          <td><input type="number" min="0" name="schizo_oc19f" class="form-control" value="<?php echo $table2->schizo_oc19f; ?>"></td>
				          <td><input type="number" min="0" name="schizo_oc39m" class="form-control" value="<?php echo $table2->schizo_oc39m; ?>"></td>
				          <td><input type="number" min="0" name="schizo_oc39f" class="form-control" value="<?php echo $table2->schizo_oc39f; ?>"></td>
				          <td><input type="number" min="0" name="schizo_oc40m" class="form-control" value="<?php echo $table2->schizo_oc40m; ?>"></td>
				          <td><input type="number" min="0" name="schizo_oc40f" class="form-control" value="<?php echo $table2->schizo_oc40f; ?>"></td>
				        </tr>
				        <tr>
				          <td class="center">4</td>
				          <td class="left">Somatoform disorders</td>
				          <td><input type="number" min="0" name="soma_nc19m" class="form-control" value="<?php echo $table2->soma_nc19m; ?>"></td>
				          <td><input type="number" min="0" name="soma_nc19f" class="form-control" value="<?php echo $table2->soma_nc19f; ?>"></td>
				          <td><input type="number" min="0" name="soma_nc39m" class="form-control" value="<?php echo $table2->soma_nc39m; ?>"></td>
				          <td><input type="number" min="0" name="soma_nc39f" class="form-control" value="<?php echo $table2->soma_nc39f; ?>"></td>
				          <td><input type="number" min="0" name="soma_nc40m" class="form-control" value="<?php echo $table2->soma_nc40m; ?>"></td>
				          <td><input type="number" min="0" name="soma_nc40f" class="form-control" value="<?php echo $table2->soma_nc40f; ?>"></td>
				          <td><input type="number" min="0" name="soma_oc19m" class="form-control" value="<?php echo $table2->soma_oc19m; ?>"></td>
				          <td><input type="number" min="0" name="soma_oc19f" class="form-control" value="<?php echo $table2->soma_oc19f; ?>"></td>
				          <td><input type="number" min="0" name="soma_oc39m" class="form-control" value="<?php echo $table2->soma_oc39m; ?>"></td>
				          <td><input type="number" min="0" name="soma_oc39f" class="form-control" value="<?php echo $table2->soma_oc39f; ?>"></td>
				          <td><input type="number" min="0" name="soma_oc40m" class="form-control" value="<?php echo $table2->soma_oc40m; ?>"></td>
				          <td><input type="number" min="0" name="soma_oc40f" class="form-control" value="<?php echo $table2->soma_oc40f; ?>"></td>
				        </tr>
				        <tr>
				          <td class="center">5</td>
				          <td class="left">Behavioral and emotional disorders with onset usually occurring in childhood and adolescence</td>
				          <td><input type="number" min="0" name="child_nc19m" class="form-control" value="<?php echo $table2->child_nc19m; ?>"></td>
				          <td><input type="number" min="0" name="child_nc19f" class="form-control" value="<?php echo $table2->child_nc19f; ?>"></td>
				          <td><input type="number" min="0" name="child_nc39m" class="form-control" value="<?php echo $table2->child_nc39m; ?>"></td>
				          <td><input type="number" min="0" name="child_nc39f" class="form-control" value="<?php echo $table2->child_nc39f; ?>"></td>
				          <td><input type="number" min="0" name="child_nc40m" class="form-control" value="<?php echo $table2->child_nc40m; ?>"></td>
				          <td><input type="number" min="0" name="child_nc40f" class="form-control" value="<?php echo $table2->child_nc40f; ?>"></td>
				          <td><input type="number" min="0" name="child_oc19m" class="form-control" value="<?php echo $table2->child_oc19m; ?>"></td>
				          <td><input type="number" min="0" name="child_oc19f" class="form-control" value="<?php echo $table2->child_oc19f; ?>"></td>
				          <td><input type="number" min="0" name="child_oc39m" class="form-control" value="<?php echo $table2->child_oc39m; ?>"></td>
				          <td><input type="number" min="0" name="child_oc39f" class="form-control" value="<?php echo $table2->child_oc39f; ?>"></td>
				          <td><input type="number" min="0" name="child_oc40m" class="form-control" value="<?php echo $table2->child_oc40m; ?>"></td>
				          <td><input type="number" min="0" name="child_oc40f" class="form-control" value="<?php echo $table2->child_oc40f; ?>"></td>
				        </tr>
				        <tr>
				          <td class="center">6</td>
				          <td class="left">Mental and behavioral disorder due to use of alcohol</td>
				          <td><input type="number" min="0" name="alcohol_nc19m" class="form-control" value="<?php echo $table2->alcohol_nc19m; ?>"></td>
				          <td><input type="number" min="0" name="alcohol_nc19f" class="form-control" value="<?php echo $table2->alcohol_nc19f; ?>"></td>
				          <td><input type="number" min="0" name="alcohol_nc39m" class="form-control" value="<?php echo $table2->alcohol_nc39m; ?>"></td>
				          <td><input type="number" min="0" name="alcohol_nc39f" class="form-control" value="<?php echo $table2->alcohol_nc39f; ?>"></td>
				          <td><input type="number" min="0" name="alcohol_nc40m" class="form-control" value="<?php echo $table2->alcohol_nc40m; ?>"></td>
				          <td><input type="number" min="0" name="alcohol_nc40f" class="form-control" value="<?php echo $table2->alcohol_nc40f; ?>"></td>
				          <td><input type="number" min="0" name="alcohol_oc19m" class="form-control" value="<?php echo $table2->alcohol_oc19m; ?>"></td>
				          <td><input type="number" min="0" name="alcohol_oc19f" class="form-control" value="<?php echo $table2->alcohol_oc19f; ?>"></td>
				          <td><input type="number" min="0" name="alcohol_oc39m" class="form-control" value="<?php echo $table2->alcohol_oc39m; ?>"></td>
				          <td><input type="number" min="0" name="alcohol_oc39f" class="form-control" value="<?php echo $table2->alcohol_oc39f; ?>"></td>
				          <td><input type="number" min="0" name="alcohol_oc40m" class="form-control" value="<?php echo $table2->alcohol_oc40m; ?>"></td>
				          <td><input type="number" min="0" name="alcohol_oc40f" class="form-control" value="<?php echo $table2->alcohol_oc40f; ?>"></td>
				        </tr>
				        <tr>
				          <td class="center">7</td>
				          <td class="left">Mental and behavioral disorder due to substance abuse</td>
				          <td><input type="number" min="0" name="drugs_nc19m" class="form-control" value="<?php echo $table2->drugs_nc19m; ?>"></td>
				          <td><input type="number" min="0" name="drugs_nc19f" class="form-control" value="<?php echo $table2->drugs_nc19f; ?>"></td>
				          <td><input type="number" min="0" name="drugs_nc39m" class="form-control" value="<?php echo $table2->drugs_nc39m; ?>"></td>
				          <td><input type="number" min="0" name="drugs_nc39f" class="form-control" value="<?php echo $table2->drugs_nc39f; ?>"></td>
				          <td><input type="number" min="0" name="drugs_nc40m" class="form-control" value="<?php echo $table2->drugs_nc40m; ?>"></td>
				          <td><input type="number" min="0" name="drugs_nc40f" class="form-control" value="<?php echo $table2->drugs_nc40f; ?>"></td>
				          <td><input type="number" min="0" name="drugs_oc19m" class="form-control" value="<?php echo $table2->drugs_oc19m; ?>"></td>
				          <td><input type="number" min="0" name="drugs_oc19f" class="form-control" value="<?php echo $table2->drugs_oc19f; ?>"></td>
				          <td><input type="number" min="0" name="drugs_oc39m" class="form-control" value="<?php echo $table2->drugs_oc39m; ?>"></td>
				          <td><input type="number" min="0" name="drugs_oc39f" class="form-control" value="<?php echo $table2->drugs_oc39f; ?>"></td>
				          <td><input type="number" min="0" name="drugs_oc40m" class="form-control" value="<?php echo $table2->drugs_oc40m; ?>"></td>
				          <td><input type="number" min="0" name="drugs_oc40f" class="form-control" value="<?php echo $table2->drugs_oc40f; ?>"></td>
				        </tr>
				        <tr>
				          <td class="center">8</td>
				          <td class="left">Depression</td>
				          <td><input type="number" min="0" name="dep_nc19m" class="form-control" value="<?php echo $table2->dep_nc19m; ?>"></td>
				          <td><input type="number" min="0" name="dep_nc19f" class="form-control" value="<?php echo $table2->dep_nc19f; ?>"></td>
				          <td><input type="number" min="0" name="dep_nc39m" class="form-control" value="<?php echo $table2->dep_nc39m; ?>"></td>
				          <td><input type="number" min="0" name="dep_nc39f" class="form-control" value="<?php echo $table2->dep_nc39f; ?>"></td>
				          <td><input type="number" min="0" name="dep_nc40m" class="form-control" value="<?php echo $table2->dep_nc40m; ?>"></td>
				          <td><input type="number" min="0" name="dep_nc40f" class="form-control" value="<?php echo $table2->dep_nc40f; ?>"></td>
				          <td><input type="number" min="0" name="dep_oc19m" class="form-control" value="<?php echo $table2->dep_oc19m; ?>"></td>
				          <td><input type="number" min="0" name="dep_oc19f" class="form-control" value="<?php echo $table2->dep_oc19f; ?>"></td>
				          <td><input type="number" min="0" name="dep_oc39m" class="form-control" value="<?php echo $table2->dep_oc39m; ?>"></td>
				          <td><input type="number" min="0" name="dep_oc39f" class="form-control" value="<?php echo $table2->dep_oc39f; ?>"></td>
				          <td><input type="number" min="0" name="dep_oc40m" class="form-control" value="<?php echo $table2->dep_oc40m; ?>"></td>
				          <td><input type="number" min="0" name="dep_oc40f" class="form-control" value="<?php echo $table2->dep_oc40f; ?>"></td>
				        </tr>
				        <tr>
				          <td class="center">9</td>
				          <td class="left">Suicide attempted</td>
				          <td><input type="number" min="0" name="suicid_att_nc19m" class="form-control" value="<?php echo $table2->suicid_att_nc19m; ?>"></td>
				          <td><input type="number" min="0" name="suicid_att_nc19f" class="form-control" value="<?php echo $table2->suicid_att_nc19f; ?>"></td>
				          <td><input type="number" min="0" name="suicid_att_nc39m" class="form-control" value="<?php echo $table2->suicid_att_nc39m; ?>"></td>
				          <td><input type="number" min="0" name="suicid_att_nc39f" class="form-control" value="<?php echo $table2->suicid_att_nc39f; ?>"></td>
				          <td><input type="number" min="0" name="suicid_att_nc40m" class="form-control" value="<?php echo $table2->suicid_att_nc40m; ?>"></td>
				          <td><input type="number" min="0" name="suicid_att_nc40f" class="form-control" value="<?php echo $table2->suicid_att_nc40f; ?>"></td>
				          <td><input type="number" min="0" name="suicid_att_oc19m" class="form-control" value="<?php echo $table2->suicid_att_oc19m; ?>"></td>
				          <td><input type="number" min="0" name="suicid_att_oc19f" class="form-control" value="<?php echo $table2->suicid_att_oc19f; ?>"></td>
				          <td><input type="number" min="0" name="suicid_att_oc39m" class="form-control" value="<?php echo $table2->suicid_att_oc39m; ?>"></td>
				          <td><input type="number" min="0" name="suicid_att_oc39f" class="form-control" value="<?php echo $table2->suicid_att_oc39f; ?>"></td>
				          <td><input type="number" min="0" name="suicid_att_oc40m" class="form-control" value="<?php echo $table2->suicid_att_oc40m; ?>"></td>
				          <td><input type="number" min="0" name="suicid_att_oc40f" class="form-control" value="<?php echo $table2->suicid_att_oc40f; ?>"></td>
				        </tr>
				        <tr>
				          <td class="center">10</td>
				          <td class="left">Suicide deaths</td>
				          <td><input type="number" min="0" name="suicid_d_nc19m" class="form-control" value="<?php echo $table2->suicid_d_nc19m; ?>"></td>
				          <td><input type="number" min="0" name="suicid_d_nc19f" class="form-control" value="<?php echo $table2->suicid_d_nc19f; ?>"></td>
				          <td><input type="number" min="0" name="suicid_d_nc39m" class="form-control" value="<?php echo $table2->suicid_d_nc39m; ?>"></td>
				          <td><input type="number" min="0" name="suicid_d_nc39f" class="form-control" value="<?php echo $table2->suicid_d_nc39f; ?>"></td>
				          <td><input type="number" min="0" name="suicid_d_nc40m" class="form-control" value="<?php echo $table2->suicid_d_nc40m; ?>"></td>
				          <td><input type="number" min="0" name="suicid_d_nc40f" class="form-control" value="<?php echo $table2->suicid_d_nc40f; ?>"></td>
				          <td><input type="number" min="0" name="suicid_d_oc19m" class="form-control" value="<?php echo $table2->suicid_d_oc19m; ?>"></td>
				          <td><input type="number" min="0" name="suicid_d_oc19f" class="form-control" value="<?php echo $table2->suicid_d_oc19f; ?>"></td>
				          <td><input type="number" min="0" name="suicid_d_oc39m" class="form-control" value="<?php echo $table2->suicid_d_oc39m; ?>"></td>
				          <td><input type="number" min="0" name="suicid_d_oc39f" class="form-control" value="<?php echo $table2->suicid_d_oc39f; ?>"></td>
				          <td><input type="number" min="0" name="suicid_d_oc40m" class="form-control" value="<?php echo $table2->suicid_d_oc40m; ?>"></td>
				          <td><input type="number" min="0" name="suicid_d_oc40f" class="form-control" value="<?php echo $table2->suicid_d_oc40f; ?>"></td>
				        </tr>
				        <tr>
				          <td class="center">11</td>
				          <td class="left">Maniac episode</td>
				          <td><input type="number" min="0" name="maniac_nc19m" class="form-control" value="<?php echo $table2->maniac_nc19m; ?>"></td>
				          <td><input type="number" min="0" name="maniac_nc19f" class="form-control" value="<?php echo $table2->maniac_nc19f; ?>"></td>
				          <td><input type="number" min="0" name="maniac_nc39m" class="form-control" value="<?php echo $table2->maniac_nc39m; ?>"></td>
				          <td><input type="number" min="0" name="maniac_nc39f" class="form-control" value="<?php echo $table2->maniac_nc39f; ?>"></td>
				          <td><input type="number" min="0" name="maniac_nc40m" class="form-control" value="<?php echo $table2->maniac_nc40m; ?>"></td>
				          <td><input type="number" min="0" name="maniac_nc40f" class="form-control" value="<?php echo $table2->maniac_nc40f; ?>"></td>
				          <td><input type="number" min="0" name="maniac_oc19m" class="form-control" value="<?php echo $table2->maniac_oc19m; ?>"></td>
				          <td><input type="number" min="0" name="maniac_oc19f" class="form-control" value="<?php echo $table2->maniac_oc19f; ?>"></td>
				          <td><input type="number" min="0" name="maniac_oc39m" class="form-control" value="<?php echo $table2->maniac_oc39m; ?>"></td>
				          <td><input type="number" min="0" name="maniac_oc39f" class="form-control" value="<?php echo $table2->maniac_oc39f; ?>"></td>
				          <td><input type="number" min="0" name="maniac_oc40m" class="form-control" value="<?php echo $table2->maniac_oc40m; ?>"></td>
				          <td><input type="number" min="0" name="maniac_oc40f" class="form-control" value="<?php echo $table2->maniac_oc40f; ?>"></td>
				        </tr>
				        <tr>
				          <td class="center">12</td>
				          <td class="left">Bipolar disorders</td>
				          <td><input type="number" min="0" name="bipolar_nc19m" class="form-control" value="<?php echo $table2->bipolar_nc19m; ?>"></td>
				          <td><input type="number" min="0" name="bipolar_nc19f" class="form-control" value="<?php echo $table2->bipolar_nc19f; ?>"></td>
				          <td><input type="number" min="0" name="bipolar_nc39m" class="form-control" value="<?php echo $table2->bipolar_nc39m; ?>"></td>
				          <td><input type="number" min="0" name="bipolar_nc39f" class="form-control" value="<?php echo $table2->bipolar_nc39f; ?>"></td>
				          <td><input type="number" min="0" name="bipolar_nc40m" class="form-control" value="<?php echo $table2->bipolar_nc40m; ?>"></td>
				          <td><input type="number" min="0" name="bipolar_nc40f" class="form-control" value="<?php echo $table2->bipolar_nc40f; ?>"></td>
				          <td><input type="number" min="0" name="bipolar_oc19m" class="form-control" value="<?php echo $table2->bipolar_oc19m; ?>"></td>
				          <td><input type="number" min="0" name="bipolar_oc19f" class="form-control" value="<?php echo $table2->bipolar_oc19f; ?>"></td>
				          <td><input type="number" min="0" name="bipolar_oc39m" class="form-control" value="<?php echo $table2->bipolar_oc39m; ?>"></td>
				          <td><input type="number" min="0" name="bipolar_oc39f" class="form-control" value="<?php echo $table2->bipolar_oc39f; ?>"></td>
				          <td><input type="number" min="0" name="bipolar_oc40m" class="form-control" value="<?php echo $table2->bipolar_oc40m; ?>"></td>
				          <td><input type="number" min="0" name="bipolar_oc40f" class="form-control" value="<?php echo $table2->bipolar_oc40f; ?>"></td>
				        </tr>
				        <tr>
				          <td class="center">13</td>
				          <td class="left">Other psychological / Mental behavioral disorders</td>
				          <td><input type="number" min="0" name="other_psy_nc19m" class="form-control" value="<?php echo $table2->other_psy_nc19m; ?>"></td>
				          <td><input type="number" min="0" name="other_psy_nc19f" class="form-control" value="<?php echo $table2->other_psy_nc19f; ?>"></td>
				          <td><input type="number" min="0" name="other_psy_nc39m" class="form-control" value="<?php echo $table2->other_psy_nc39m; ?>"></td>
				          <td><input type="number" min="0" name="other_psy_nc39f" class="form-control" value="<?php echo $table2->other_psy_nc39f; ?>"></td>
				          <td><input type="number" min="0" name="other_psy_nc40m" class="form-control" value="<?php echo $table2->other_psy_nc40m; ?>"></td>
				          <td><input type="number" min="0" name="other_psy_nc40f" class="form-control" value="<?php echo $table2->other_psy_nc40f; ?>"></td>
				          <td><input type="number" min="0" name="other_psy_oc19m" class="form-control" value="<?php echo $table2->other_psy_oc19m; ?>"></td>
				          <td><input type="number" min="0" name="other_psy_oc19f" class="form-control" value="<?php echo $table2->other_psy_oc19f; ?>"></td>
				          <td><input type="number" min="0" name="other_psy_oc39m" class="form-control" value="<?php echo $table2->other_psy_oc39m; ?>"></td>
				          <td><input type="number" min="0" name="other_psy_oc39f" class="form-control" value="<?php echo $table2->other_psy_oc39f; ?>"></td>
				          <td><input type="number" min="0" name="other_psy_oc40m" class="form-control" value="<?php echo $table2->other_psy_oc40m; ?>"></td>
				          <td><input type="number" min="0" name="other_psy_oc40f" class="form-control" value="<?php echo $table2->other_psy_oc40f; ?>"></td>
				        </tr>
				        <tr>
				          <td class="center">14</td>
				          <td class="left">Epilepsy</td>
				          <td><input type="number" min="0" name="epilepsy_nc19m" class="form-control" value="<?php echo $table2->epilepsy_nc19m; ?>"></td>
				          <td><input type="number" min="0" name="epilepsy_nc19f" class="form-control" value="<?php echo $table2->epilepsy_nc19f; ?>"></td>
				          <td><input type="number" min="0" name="epilepsy_nc39m" class="form-control" value="<?php echo $table2->epilepsy_nc39m; ?>"></td>
				          <td><input type="number" min="0" name="epilepsy_nc39f" class="form-control" value="<?php echo $table2->epilepsy_nc39f; ?>"></td>
				          <td><input type="number" min="0" name="epilepsy_nc40m" class="form-control" value="<?php echo $table2->epilepsy_nc40m; ?>"></td>
				          <td><input type="number" min="0" name="epilepsy_nc40f" class="form-control" value="<?php echo $table2->epilepsy_nc40f; ?>"></td>
				          <td><input type="number" min="0" name="epilepsy_oc19m" class="form-control" value="<?php echo $table2->epilepsy_oc19m; ?>"></td>
				          <td><input type="number" min="0" name="epilepsy_oc19f" class="form-control" value="<?php echo $table2->epilepsy_oc19f; ?>"></td>
				          <td><input type="number" min="0" name="epilepsy_oc39m" class="form-control" value="<?php echo $table2->epilepsy_oc39m; ?>"></td>
				          <td><input type="number" min="0" name="epilepsy_oc39f" class="form-control" value="<?php echo $table2->epilepsy_oc39f; ?>"></td>
				          <td><input type="number" min="0" name="epilepsy_oc40m" class="form-control" value="<?php echo $table2->epilepsy_oc40m; ?>"></td>
				          <td><input type="number" min="0" name="epilepsy_oc40f" class="form-control" value="<?php echo $table2->epilepsy_oc40f; ?>"></td>
				        </tr>
				        <tr>
				          <td class="center">15</td>
				          <td class="left">Other neurological disorders</td>
				          <td><input type="number" min="0" name="other_neuro_nc19m" class="form-control" value="<?php echo $table2->other_neuro_nc19m; ?>"></td>
				          <td><input type="number" min="0" name="other_neuro_nc19f" class="form-control" value="<?php echo $table2->other_neuro_nc19f; ?>"></td>
				          <td><input type="number" min="0" name="other_neuro_nc39m" class="form-control" value="<?php echo $table2->other_neuro_nc39m; ?>"></td>
				          <td><input type="number" min="0" name="other_neuro_nc39f" class="form-control" value="<?php echo $table2->other_neuro_nc39f; ?>"></td>
				          <td><input type="number" min="0" name="other_neuro_nc40m" class="form-control" value="<?php echo $table2->other_neuro_nc40m; ?>"></td>
				          <td><input type="number" min="0" name="other_neuro_nc40f" class="form-control" value="<?php echo $table2->other_neuro_nc40f; ?>"></td>
				          <td><input type="number" min="0" name="other_neuro_oc19m" class="form-control" value="<?php echo $table2->other_neuro_oc19m; ?>"></td>
				          <td><input type="number" min="0" name="other_neuro_oc19f" class="form-control" value="<?php echo $table2->other_neuro_oc19f; ?>"></td>
				          <td><input type="number" min="0" name="other_neuro_oc39m" class="form-control" value="<?php echo $table2->other_neuro_oc39m; ?>"></td>
				          <td><input type="number" min="0" name="other_neuro_oc39f" class="form-control" value="<?php echo $table2->other_neuro_oc39f; ?>"></td>
				          <td><input type="number" min="0" name="other_neuro_oc40m" class="form-control" value="<?php echo $table2->other_neuro_oc40m; ?>"></td>
				          <td><input type="number" min="0" name="other_neuro_oc40f" class="form-control" value="<?php echo $table2->other_neuro_oc40f; ?>"></td>
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
	$('#A3').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	});
  $('#B3').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"fixedHeader": true
	});
	$('.dataTables_length').addClass('bs-select');
</script>
