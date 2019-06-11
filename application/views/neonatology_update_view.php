<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Neonatology</title>
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
			<h2>Neonatology - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('add_date'))); ?></h2>
			<div>
        <form method="post" action="" class="form-inline">
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
				            <td><input type="number" min="0" name="n_beds" class="form-control" value="<?php echo $table1->n_beds; ?>"></td>
				          </tr>
				          <tr>
                    <td>2</td>
				            <td class="left">Present at the beginning of the month</td>
				            <td><input type="number" min="0" name="n_present_start" class="form-control" value="<?php echo $table1->n_present_start; ?>"></td>
				          </tr>
                  <tr>
                    <td>3</td>
				            <td class="left">Admissions during the month of wich</td>
				            <td><input type="number" min="0" name="n_admissions" class="form-control" value="<?php echo $table1->n_admissions; ?>"></td>
				          </tr>
                  <tr>
                    <td>3.1</td>
				            <td class="left">Referred from the health center</td>
				            <td><input type="number" min="0" name="n_referred" class="form-control" value="<?php echo $table1->n_referred; ?>"></td>
				          </tr>
                  <tr>
                    <td>3.2</td>
				            <td class="left">Non-referred patients</td>
				            <td><input type="number" min="0" name="n_no_referred" class="form-control" value="<?php echo $table1->n_no_referred; ?>"></td>
				          </tr>
                  <tr>
                    <td>4</td>
				            <td class="left">Discharges during the month of which</td>
				            <td><input type="number" min="0" name="n_discharges" class="form-control" value="<?php echo $table1->n_discharges; ?>"></td>
				          </tr>
                  <tr>
                    <td>4.1</td>
				            <td class="left">Authorized / Cured</td>
				            <td><input type="number" min="0" name="n_authorized" class="form-control" value="<?php echo $table1->n_authorized; ?>"></td>
				          </tr>
                  <tr>
                    <td>4.2</td>
				            <td class="left">Abandoned</td>
				            <td><input type="number" min="0" name="n_abandoned" class="form-control" value="<?php echo $table1->n_abandoned; ?>"></td>
				          </tr>
                  <tr>
                    <td>4.3</td>
				            <td class="left">Deaths</td>
				            <td><input type="number" min="0" name="n_deaths" class="form-control" value="<?php echo $table1->n_deaths; ?>"></td>
				          </tr>
                  <tr>
                    <td>4.4</td>
				            <td class="left">Referred</td>
				            <td><input type="number" min="0" name="n_dis_referred" class="form-control" value="<?php echo $table1->n_dis_referred; ?>"></td>
				          </tr>
                  <tr>
                    <td>4.5</td>
				            <td class="left">Counter-referred</td>
				            <td><input type="number" min="0" name="n_counter" class="form-control" value="<?php echo $table1->n_counter; ?>"></td>
				          </tr>
                  <tr>
                    <td>5</td>
				            <td class="left">Present at the end of the month</td>
				            <td><input type="number" min="0" name="n_present_end" class="form-control" value="<?php echo $table1->n_present_end; ?>"></td>
				          </tr>
                  <tr>
                    <td>6</td>
				            <td class="left">Total hospitalization days for discharged patients</td>
				            <td><input type="number" min="0" name="n_total" class="form-control" value="<?php echo $table1->n_total; ?>"></td>
				          </tr>
                  <tr>
                    <td>7</td>
				            <td class="left">Actual hospitalization days</td>
				            <td><input type="number" min="0" name="n_actual" class="form-control" value="<?php echo $table1->n_actual; ?>"></td>
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
					            <td><input type="number" min="0" name="insured_dis" class="form-control" value="<?php echo $table2->insured_dis; ?>"></td>
					          </tr>
					          <tr>
					            <td class="left">Non-paying discharges</td>
					            <td><input type="number" min="0" name="no_paying_dis" class="form-control" value="<?php echo $table2->no_paying_dis; ?>"></td>
					          </tr>
					          <tr>
					            <td class="left">Non-paying indigents discharged</td>
					            <td><input type="number" min="0" name="no_paying_ind" class="form-control" value="<?php echo $table2->no_paying_ind; ?>"></td>
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
					            <td><input type="number" min="0" name="road_acc_ad" class="form-control" value="<?php echo $table2->road_acc_ad; ?>"></td>
					            <td><input type="number" min="0" name="road_acc_deaths" class="form-control" value="<?php echo $table2->road_acc_deaths; ?>"></td>
					          </tr>
					          <tr>
					            <td class="left">Natural or man-made disasters (epidemic, earthquake, etc)</td>
					            <td><input type="number" min="0" name="natural_disa_ad" class="form-control" value="<?php echo $table2->natural_disa_ad; ?>"></td>
					            <td><input type="number" min="0" name="natural_disa_deaths" class="form-control" value="<?php echo $table2->natural_disa_deaths; ?>"></td>
					          </tr>
					          <tr>
					            <td class="left">Workplace injuries</td>
					            <td><input type="number" min="0" name="work_inj_ad" class="form-control" value="<?php echo $table2->work_inj_ad; ?>"></td>
					            <td><input type="number" min="0" name="work_inj_deaths" class="form-control" value="<?php echo $table2->work_inj_deaths; ?>"></td>
					          </tr>
			        		</tbody>
			      		</table>
              </div>
              <br>
              <div class="row">
                <h4>Kangaroo mother care</h4>
              </div>
              <div class="row">
                <table id="A18" class="center">
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
                      <td class="left">Low birth weight < 2000 grams babies admitted in KMC</td>
                      <td><input type="number" min="0" name="low_birth" class="form-control" value="<?php echo $table3->low_birth; ?>"></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td class="left">Newborns discharged from KMC unit</td>
                      <td><input type="number" min="0" name="newborns" class="form-control" value="<?php echo $table3->newborns; ?>"></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td class="left">KMC deaths among KMC admissions</td>
                      <td><input type="number" min="0" name="kmc_deaths" class="form-control" value="<?php echo $table3->kmc_deaths; ?>"></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td class="left">KMC standars follow up visit after discharge within 2 weeks</td>
                      <td><input type="number" min="0" name="kmc_standard" class="form-control" value="<?php echo $table3->kmc_standard; ?>"></td>
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
		          </tr>
		          <tr>
		            <th>M</th>
		            <th>F</th>
							</tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td>1</td>
		            <td class="left">Hospitalized</td>
		            <td><input type="number" min="0" name="hosp_1m" class="form-control" value="<?php echo $table2->hosp_1m; ?>"></td>
		            <td><input type="number" min="0" name="hosp_1f" class="form-control" value="<?php echo $table2->hosp_1f; ?>"></td>
		          </tr>
		          <tr>
		            <td>2</td>
		            <td class="left">Deaths</td>
		            <td><input type="number" min="0" name="deaths_1m" class="form-control" value="<?php echo $table2->deaths_1m; ?>"></td>
		            <td><input type="number" min="0" name="deaths_1f" class="form-control" value="<?php echo $table2->deaths_1f; ?>"></td>
		          </tr>
		        </tbody>
		      </table>
					<br>
          <h4>Neonatal causes of hospitalization and deaths</h4>
          <table id="A19" class="center">
		        <thead>
		          <tr>
		            <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th rowspan="3">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th colspan="4">Admitted for hospitalization<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th colspan="4">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		          </tr>
              <tr>
		            <th colspan="2">Days < 7<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th colspan="2">Days 8 to 28<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th colspan="2">Days < 7<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th colspan="2">Days 8 to 28<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
		            <td class="left">Asphyxia</td>
		            <td><input type="number" min="0" name="asphyxia_ad7m" class="form-control" value="<?php echo $table4->asphyxia_ad7m; ?>"></td>
		            <td><input type="number" min="0" name="asphyxia_ad7f" class="form-control" value="<?php echo $table4->asphyxia_ad7f; ?>"></td>
		            <td><input type="number" min="0" name="asphyxia_ad8m" class="form-control" value="<?php echo $table4->asphyxia_ad8m; ?>"></td>
		            <td><input type="number" min="0" name="asphyxia_ad8f" class="form-control" value="<?php echo $table4->asphyxia_ad8f; ?>"></td>
		            <td><input type="number" min="0" name="asphyxia_d7m" class="form-control" value="<?php echo $table4->asphyxia_d7m; ?>"></td>
		            <td><input type="number" min="0" name="asphyxia_d7f" class="form-control" value="<?php echo $table4->asphyxia_d7f; ?>"></td>
		            <td><input type="number" min="0" name="asphyxia_d8m" class="form-control" value="<?php echo $table4->asphyxia_d8m; ?>"></td>
		            <td><input type="number" min="0" name="asphyxia_d8f" class="form-control" value="<?php echo $table4->asphyxia_d8f; ?>"></td>
		          </tr>
		          <tr>
		            <td>2</td>
		            <td class="left">Prematurity (22 to 37 weeks)</td>
		            <td><input type="number" min="0" name="prematurity_ad7m" class="form-control" value="<?php echo $table4->prematurity_ad7m; ?>"></td>
		            <td><input type="number" min="0" name="prematurity_ad7f" class="form-control" value="<?php echo $table4->prematurity_ad7f; ?>"></td>
		            <td><input type="number" min="0" name="prematurity_ad8m" class="form-control" value="<?php echo $table4->prematurity_ad8m; ?>"></td>
		            <td><input type="number" min="0" name="prematurity_ad8f" class="form-control" value="<?php echo $table4->prematurity_ad8f; ?>"></td>
		            <td><input type="number" min="0" name="prematurity_d7m" class="form-control" value="<?php echo $table4->prematurity_d7m; ?>"></td>
		            <td><input type="number" min="0" name="prematurity_d7f" class="form-control" value="<?php echo $table4->prematurity_d7f; ?>"></td>
		            <td><input type="number" min="0" name="prematurity_d8m" class="form-control" value="<?php echo $table4->prematurity_d8m; ?>"></td>
		            <td><input type="number" min="0" name="prematurity_d8f" class="form-control" value="<?php echo $table4->prematurity_d8f; ?>"></td>
		          </tr>
              <tr>
		            <td>3</td>
		            <td class="left">Congenital malformations</td>
		            <td><input type="number" min="0" name="congenital_ad7m" class="form-control" value="<?php echo $table4->congenital_ad7m; ?>"></td>
		            <td><input type="number" min="0" name="congenital_ad7f" class="form-control" value="<?php echo $table4->congenital_ad7f; ?>"></td>
		            <td><input type="number" min="0" name="congenital_ad8m" class="form-control" value="<?php echo $table4->congenital_ad8m; ?>"></td>
		            <td><input type="number" min="0" name="congenital_ad8f" class="form-control" value="<?php echo $table4->congenital_ad8f; ?>"></td>
		            <td><input type="number" min="0" name="congenital_d7m" class="form-control" value="<?php echo $table4->congenital_d7m; ?>"></td>
		            <td><input type="number" min="0" name="congenital_d7f" class="form-control" value="<?php echo $table4->congenital_d7f; ?>"></td>
		            <td><input type="number" min="0" name="congenital_d8m" class="form-control" value="<?php echo $table4->congenital_d8m; ?>"></td>
		            <td><input type="number" min="0" name="congenital_d8f" class="form-control" value="<?php echo $table4->congenital_d8f; ?>"></td>
		          </tr>
              <tr>
		            <td>4</td>
		            <td class="left">Pneumonia</td>
		            <td><input type="number" min="0" name="pneumonia_ad7m" class="form-control" value="<?php echo $table4->pneumonia_ad7m; ?>"></td>
		            <td><input type="number" min="0" name="pneumonia_ad7f" class="form-control" value="<?php echo $table4->pneumonia_ad7f; ?>"></td>
		            <td><input type="number" min="0" name="pneumonia_ad8m" class="form-control" value="<?php echo $table4->pneumonia_ad8m; ?>"></td>
		            <td><input type="number" min="0" name="pneumonia_ad8f" class="form-control" value="<?php echo $table4->pneumonia_ad8f; ?>"></td>
		            <td><input type="number" min="0" name="pneumonia_d7m" class="form-control" value="<?php echo $table4->pneumonia_d7m; ?>"></td>
		            <td><input type="number" min="0" name="pneumonia_d7f" class="form-control" value="<?php echo $table4->pneumonia_d7f; ?>"></td>
		            <td><input type="number" min="0" name="pneumonia_d8m" class="form-control" value="<?php echo $table4->pneumonia_d8m; ?>"></td>
		            <td><input type="number" min="0" name="pneumonia_d8f" class="form-control" value="<?php echo $table4->pneumonia_d8f; ?>"></td>
		          </tr>
              <tr>
		            <td>5</td>
		            <td class="left">Meningitis</td>
		            <td><input type="number" min="0" name="meningitis_ad7m" class="form-control" value="<?php echo $table4->meningitis_ad7m; ?>"></td>
		            <td><input type="number" min="0" name="meningitis_ad7f" class="form-control" value="<?php echo $table4->meningitis_ad7f; ?>"></td>
		            <td><input type="number" min="0" name="meningitis_ad8m" class="form-control" value="<?php echo $table4->meningitis_ad8m; ?>"></td>
		            <td><input type="number" min="0" name="meningitis_ad8f" class="form-control" value="<?php echo $table4->meningitis_ad8f; ?>"></td>
		            <td><input type="number" min="0" name="meningitis_d7m" class="form-control" value="<?php echo $table4->meningitis_d7m; ?>"></td>
		            <td><input type="number" min="0" name="meningitis_d7f" class="form-control" value="<?php echo $table4->meningitis_d7f; ?>"></td>
		            <td><input type="number" min="0" name="meningitis_d8m" class="form-control" value="<?php echo $table4->meningitis_d8m; ?>"></td>
		            <td><input type="number" min="0" name="meningitis_d8f" class="form-control" value="<?php echo $table4->meningitis_d8f; ?>"></td>
		          </tr>
              <tr>
		            <td>6</td>
		            <td class="left">Skin infections</td>
		            <td><input type="number" min="0" name="skin_ad7m" class="form-control" value="<?php echo $table4->skin_ad7m; ?>"></td>
		            <td><input type="number" min="0" name="skin_ad7f" class="form-control" value="<?php echo $table4->skin_ad7f; ?>"></td>
		            <td><input type="number" min="0" name="skin_ad8m" class="form-control" value="<?php echo $table4->skin_ad8m; ?>"></td>
		            <td><input type="number" min="0" name="skin_ad8f" class="form-control" value="<?php echo $table4->skin_ad8f; ?>"></td>
		            <td><input type="number" min="0" name="skin_d7m" class="form-control" value="<?php echo $table4->skin_d7m; ?>"></td>
		            <td><input type="number" min="0" name="skin_d7f" class="form-control" value="<?php echo $table4->skin_d7f; ?>"></td>
		            <td><input type="number" min="0" name="skin_d8m" class="form-control" value="<?php echo $table4->skin_d8m; ?>"></td>
		            <td><input type="number" min="0" name="skin_d8f" class="form-control" value="<?php echo $table4->skin_d8f; ?>"></td>
		          </tr>
              <tr>
		            <td>7</td>
		            <td class="left">Sepsis suspected</td>
		            <td><input type="number" min="0" name="sepsis_ad7m" class="form-control" value="<?php echo $table4->sepsis_ad7m; ?>"></td>
		            <td><input type="number" min="0" name="sepsis_ad7f" class="form-control" value="<?php echo $table4->sepsis_ad7f; ?>"></td>
		            <td><input type="number" min="0" name="sepsis_ad8m" class="form-control" value="<?php echo $table4->sepsis_ad8m; ?>"></td>
		            <td><input type="number" min="0" name="sepsis_ad8f" class="form-control" value="<?php echo $table4->sepsis_ad8f; ?>"></td>
		            <td><input type="number" min="0" name="sepsis_d7m" class="form-control" value="<?php echo $table4->sepsis_d7m; ?>"></td>
		            <td><input type="number" min="0" name="sepsis_d7f" class="form-control" value="<?php echo $table4->sepsis_d7f; ?>"></td>
		            <td><input type="number" min="0" name="sepsis_d8m" class="form-control" value="<?php echo $table4->sepsis_d8m; ?>"></td>
		            <td><input type="number" min="0" name="sepsis_d8f" class="form-control" value="<?php echo $table4->sepsis_d8f; ?>"></td>
		          </tr>
              <tr>
		            <td>8</td>
		            <td class="left">Tetanus Neonatal</td>
		            <td><input type="number" min="0" name="tetanus_ad7m" class="form-control" value="<?php echo $table4->tetanus_ad7m; ?>"></td>
		            <td><input type="number" min="0" name="tetanus_ad7f" class="form-control" value="<?php echo $table4->tetanus_ad7f; ?>"></td>
		            <td><input type="number" min="0" name="tetanus_ad8m" class="form-control" value="<?php echo $table4->tetanus_ad8m; ?>"></td>
		            <td><input type="number" min="0" name="tetanus_ad8f" class="form-control" value="<?php echo $table4->tetanus_ad8f; ?>"></td>
		            <td><input type="number" min="0" name="tetanus_d7m" class="form-control" value="<?php echo $table4->tetanus_d7m; ?>"></td>
		            <td><input type="number" min="0" name="tetanus_d7f" class="form-control" value="<?php echo $table4->tetanus_d7f; ?>"></td>
		            <td><input type="number" min="0" name="tetanus_d8m" class="form-control" value="<?php echo $table4->tetanus_d8m; ?>"></td>
		            <td><input type="number" min="0" name="tetanus_d8f" class="form-control" value="<?php echo $table4->tetanus_d8f; ?>"></td>
		          </tr>
              <tr>
		            <td>9</td>
		            <td class="left">All other neonatal infections</td>
		            <td><input type="number" min="0" name="others_neonatal_ad7m" class="form-control" value="<?php echo $table4->others_neonatal_ad7m; ?>"></td>
		            <td><input type="number" min="0" name="others_neonatal_ad7f" class="form-control" value="<?php echo $table4->others_neonatal_ad7f; ?>"></td>
		            <td><input type="number" min="0" name="others_neonatal_ad8m" class="form-control" value="<?php echo $table4->others_neonatal_ad8m; ?>"></td>
		            <td><input type="number" min="0" name="others_neonatal_ad8f" class="form-control" value="<?php echo $table4->others_neonatal_ad8f; ?>"></td>
		            <td><input type="number" min="0" name="others_neonatal_d7m" class="form-control" value="<?php echo $table4->others_neonatal_d7m; ?>"></td>
		            <td><input type="number" min="0" name="others_neonatal_d7f" class="form-control" value="<?php echo $table4->others_neonatal_d7f; ?>"></td>
		            <td><input type="number" min="0" name="others_neonatal_d8m" class="form-control" value="<?php echo $table4->others_neonatal_d8m; ?>"></td>
		            <td><input type="number" min="0" name="others_neonatal_d8f" class="form-control" value="<?php echo $table4->others_neonatal_d8f; ?>"></td>
		          </tr>
              <tr>
		            <td>10</td>
		            <td class="left">All other causes of neonatal mobidity (infections excluded)</td>
		            <td><input type="number" min="0" name="others_causes_ad7m" class="form-control" value="<?php echo $table4->others_causes_ad7m; ?>"></td>
		            <td><input type="number" min="0" name="others_causes_ad7f" class="form-control" value="<?php echo $table4->others_causes_ad7f; ?>"></td>
		            <td><input type="number" min="0" name="others_causes_ad8m" class="form-control" value="<?php echo $table4->others_causes_ad8m; ?>"></td>
		            <td><input type="number" min="0" name="others_causes_ad8f" class="form-control" value="<?php echo $table4->others_causes_ad8f; ?>"></td>
		            <td><input type="number" min="0" name="others_causes_d7m" class="form-control" value="<?php echo $table4->others_causes_d7m; ?>"></td>
		            <td><input type="number" min="0" name="others_causes_d7f" class="form-control" value="<?php echo $table4->others_causes_d7f; ?>"></td>
		            <td><input type="number" min="0" name="others_causes_d8m" class="form-control" value="<?php echo $table4->others_causes_d8m; ?>"></td>
		            <td><input type="number" min="0" name="others_causes_d8f" class="form-control" value="<?php echo $table4->others_causes_d8f; ?>"></td>
		          </tr>
              <tr>
		            <td>11</td>
		            <td class="left">Total neonates born in this facility</td>
		            <td><input type="number" min="0" name="total_born_in_ad7m" class="form-control" value="<?php echo $table4->total_born_in_ad7m; ?>"></td>
		            <td><input type="number" min="0" name="total_born_in_ad7f" class="form-control" value="<?php echo $table4->total_born_in_ad7f; ?>"></td>
		            <td><input type="number" min="0" name="total_born_in_ad8m" class="form-control" value="<?php echo $table4->total_born_in_ad8m; ?>"></td>
		            <td><input type="number" min="0" name="total_born_in_ad8f" class="form-control" value="<?php echo $table4->total_born_in_ad8f; ?>"></td>
		            <td><input type="number" min="0" name="total_born_in_d7m" class="form-control" value="<?php echo $table4->total_born_in_d7m; ?>"></td>
		            <td><input type="number" min="0" name="total_born_in_d7f" class="form-control" value="<?php echo $table4->total_born_in_d7f; ?>"></td>
		            <td><input type="number" min="0" name="total_born_in_d8m" class="form-control" value="<?php echo $table4->total_born_in_d8m; ?>"></td>
		            <td><input type="number" min="0" name="total_born_in_d8f" class="form-control" value="<?php echo $table4->total_born_in_d8f; ?>"></td>
		          </tr>
              <tr>
		            <td>12</td>
		            <td class="left">Total neonates born outside this health facility</td>
		            <td><input type="number" min="0" name="total_born_out_ad7m" class="form-control" value="<?php echo $table4->total_born_out_ad7m; ?>"></td>
		            <td><input type="number" min="0" name="total_born_out_ad7f" class="form-control" value="<?php echo $table4->total_born_out_ad7f; ?>"></td>
		            <td><input type="number" min="0" name="total_born_out_ad8m" class="form-control" value="<?php echo $table4->total_born_out_ad8m; ?>"></td>
		            <td><input type="number" min="0" name="total_born_out_ad8f" class="form-control" value="<?php echo $table4->total_born_out_ad8f; ?>"></td>
		            <td><input type="number" min="0" name="total_born_out_d7m" class="form-control" value="<?php echo $table4->total_born_out_d7m; ?>"></td>
		            <td><input type="number" min="0" name="total_born_out_d7f" class="form-control" value="<?php echo $table4->total_born_out_d7f; ?>"></td>
		            <td><input type="number" min="0" name="total_born_out_d8m" class="form-control" value="<?php echo $table4->total_born_out_d8m; ?>"></td>
		            <td><input type="number" min="0" name="total_born_out_d8f" class="form-control" value="<?php echo $table4->total_born_out_d8f; ?>"></td>
		          </tr>
		        </tbody>
		      </table>
					<br>
          <table id="B19" class="center">
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
                <td class="left">Total newborn admitted in hypothermia status (< 36.5° C)</td>
                <td><input type="number" min="0" name="hypothermia" class="form-control" value="<?php echo $table4->hypothermia; ?>"></td>
              </tr>
              <tr>
                <td>2</td>
                <td class="left">Total number of newborn at risk follow up required</td>
                <td><input type="number" min="0" name="risk_follow_up" class="form-control" value="<?php echo $table4->risk_follow_up; ?>"></td>
              </tr>
              <tr>
                <td>3</td>
                <td class="left">Total number of newborn at risk returned for at least one follow up visit after discharge</td>
                <td><input type="number" min="0" name="one_follow_up" class="form-control" value="<?php echo $table4->one_follow_up; ?>"></td>
              </tr>
              <tr>
                <td>4</td>
                <td class="left">Total newborn deaths within 24 hours</td>
                <td><input type="number" min="0" name="deaths_24" class="form-control" value="<?php echo $table4->deaths_24; ?>"></td>
              </tr>
            </tbody>
          </table>
          <br>
		      <center><button type="submit">Validate</button></center>
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
  $('#A18').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
      });
  $('#A19').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
		"fixedHeader": true
      });
  $('#B19').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
      });
	$('.dataTables_length').addClass('bs-select');
</script>
