<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gynecology Obstetrics</title>
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
			<h2>Gynecology Obstetrics - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('add_date'))); ?></h2>
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
					            <td><input type="number" min="0" name="go_beds" class="form-control"></td>
					          </tr>
					          <tr>
                      <td>2</td>
					            <td class="left">Present at the beginning of the month</td>
					            <td><input type="number" min="0" name="go_present_start" class="form-control"></td>
					          </tr>
                    <tr>
                      <td>3</td>
					            <td class="left">Admissions during the month of wich</td>
					            <td><input type="number" min="0" name="go_admissions" class="form-control"></td>
					          </tr>
                    <tr>
                      <td>3.1</td>
					            <td class="left">Referred from the health center</td>
					            <td><input type="number" min="0" name="go_referred" class="form-control"></td>
					          </tr>
                    <tr>
                      <td>3.2</td>
					            <td class="left">Non-referred patients</td>
					            <td><input type="number" min="0" name="go_no_referred" class="form-control"></td>
					          </tr>
                    <tr>
                      <td>4</td>
					            <td class="left">Discharges during the month of which</td>
					            <td><input type="number" min="0" name="go_discharges" class="form-control"></td>
					          </tr>
                    <tr>
                      <td>4.1</td>
					            <td class="left">Authorized / Cured</td>
					            <td><input type="number" min="0" name="go_authorized" class="form-control"></td>
					          </tr>
                    <tr>
                      <td>4.2</td>
					            <td class="left">Abandoned</td>
					            <td><input type="number" min="0" name="go_abandoned" class="form-control"></td>
					          </tr>
                    <tr>
                      <td>4.3</td>
					            <td class="left">Deaths</td>
					            <td><input type="number" min="0" name="go_deaths" class="form-control"></td>
					          </tr>
                    <tr>
                      <td>4.4</td>
					            <td class="left">Referred</td>
					            <td><input type="number" min="0" name="go_dis_referred" class="form-control"></td>
					          </tr>
                    <tr>
                      <td>4.5</td>
					            <td class="left">Counter-referred</td>
					            <td><input type="number" min="0" name="go_counter" class="form-control"></td>
					          </tr>
                    <tr>
                      <td>5</td>
					            <td class="left">Present at the end of the month</td>
					            <td><input type="number" min="0" name="go_present_end" class="form-control"></td>
					          </tr>
                    <tr>
                      <td>6</td>
					            <td class="left">Total hospitalization days for discharged patients</td>
					            <td><input type="number" min="0" name="go_total" class="form-control"></td>
					          </tr>
                    <tr>
                      <td>7</td>
					            <td class="left">Actual hospitalization days</td>
					            <td><input type="number" min="0" name="go_actual" class="form-control"></td>
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
  					            <td><input type="number" min="0" name="insured_dis" class="form-control"></td>
  					          </tr>
  					          <tr>
  					            <td class="left">Non-paying discharges</td>
  					            <td><input type="number" min="0" name="no_paying_dis" class="form-control"></td>
  					          </tr>
  					          <tr>
  					            <td class="left">Non-paying indigents discharged</td>
  					            <td><input type="number" min="0" name="no_paying_ind" class="form-control"></td>
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
  					            <td><input type="number" min="0" name="road_acc_ad" class="form-control"></td>
  					            <td><input type="number" min="0" name="road_acc_deaths" class="form-control"></td>
  					          </tr>
  					          <tr>
  					            <td class="left">Natural or man-made disasters (epidemic, earthquake, etc)</td>
  					            <td><input type="number" min="0" name="natural_disa_ad" class="form-control"></td>
  					            <td><input type="number" min="0" name="natural_disa_deaths" class="form-control"></td>
  					          </tr>
  					          <tr>
  					            <td class="left">Workplace injuries</td>
  					            <td><input type="number" min="0" name="work_inj_ad" class="form-control"></td>
  					            <td><input type="number" min="0" name="work_inj_deaths" class="form-control"></td>
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
			            <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th>Age 5 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th>Age > 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			          </tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td>1</td>
			            <td class="left">Hospitalized</td>
			            <td><input type="number" min="0" name="hosp_19f" class="form-control"></td>
			            <td><input type="number" min="0" name="hosp_20f" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>2</td>
			            <td class="left">Deaths</td>
			            <td><input type="number" min="0" name="deaths_19f" class="form-control"></td>
			            <td><input type="number" min="0" name="deaths_20f" class="form-control"></td>
			          </tr>
			        </tbody>
			      </table>
            <br>
	      		<h4>Cases and deaths</h4>
	      		<table id="A15" class="center">
			        <thead>
			          <tr>
			            <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th rowspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th colspan="2">Hospitalized<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th colspan="2">Deaths<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			          </tr>
			          <tr>
									<th>Age < 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
									<th>Age ≥ 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
									<th>Age < 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
									<th>Age ≥ 20<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
								</tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td>1</td>
			            <td class="left">Complications of abortions (spontaneous and induced)</td>
			            <td><input type="number" min="0" name="complications_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="complications_hos20" class="form-control"></td>
			            <td><input type="number" min="0" name="complications_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="complications_deaths20" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>2</td>
			            <td class="left">Ectopic pregnancy</td>
			            <td><input type="number" min="0" name="ectopic_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="ectopic_hos20" class="form-control"></td>
			            <td><input type="number" min="0" name="ectopic_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="ectopic_deaths20" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>3</td>
			            <td class="left">Ante-partum hemorrhage (APH)</td>
			            <td><input type="number" min="0" name="antepartum_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="antepartum_hos20" class="form-control"></td>
			            <td><input type="number" min="0" name="antepartum_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="antepartum_deaths20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>4</td>
			            <td class="left">Post-partum hemorrhage (PPH)</td>
			            <td><input type="number" min="0" name="postpartum_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="postpartum_hos20" class="form-control"></td>
			            <td><input type="number" min="0" name="postpartum_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="postpartum_deaths20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>5</td>
			            <td class="left">Eclampsia / Severe pre eclampsia</td>
			            <td><input type="number" min="0" name="eclampsia_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="eclampsia_hos20" class="form-control"></td>
			            <td><input type="number" min="0" name="eclampsia_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="eclampsia_deaths20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>6</td>
			            <td class="left">Post C/Section Infection</td>
			            <td><input type="number" min="0" name="postc_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="postc_hos20" class="form-control"></td>
			            <td><input type="number" min="0" name="postc_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="postc_deaths20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>7</td>
			            <td class="left">Other post-partum infections</td>
			            <td><input type="number" min="0" name="postpartum_other_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="postpartum_other_hos20" class="form-control"></td>
			            <td><input type="number" min="0" name="postpartum_other_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="postpartum_other_deaths20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>8</td>
			            <td class="left">Prolonged or obstructed labor</td>
			            <td><input type="number" min="0" name="prolonged_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="prolonged_hos20" class="form-control"></td>
                  <td class="grey"></td>
									<td class="grey"></td>
			          </tr>
								<tr>
			            <td>9</td>
			            <td class="left">Uterine rupture</td>
			            <td><input type="number" min="0" name="uterine_rup_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="uterine_rup_hos20" class="form-control"></td>
			            <td><input type="number" min="0" name="uterine_rup_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="uterine_rup_deaths20" class="form-control"></td>
			          </tr>
                <tr>
			            <td>10</td>
			            <td class="left">Amniotic embolism</td>
                  <td class="grey"></td>
									<td class="grey"></td>
			            <td><input type="number" min="0" name="amniotic_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="amniotic_deaths20" class="form-control"></td>
			          </tr>
                <tr>
			            <td>11</td>
			            <td class="left">Complication of anesthesia</td>
                  <td class="grey"></td>
									<td class="grey"></td>
			            <td><input type="number" min="0" name="compli_anesthesia_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="compli_anesthesia_deaths20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>12</td>
			            <td class="left">Other direct obstetrical complication</td>
			            <td><input type="number" min="0" name="other_direct_obste_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="other_direct_obste_hos20" class="form-control"></td>
			            <td><input type="number" min="0" name="other_direct_obste_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="other_direct_obste_deaths20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>13</td>
			            <td class="left">Anemia severe (< 7gm/dl)</td>
			            <td><input type="number" min="0" name="anemia_sev_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="anemia_sev_hos20" class="form-control"></td>
			            <td><input type="number" min="0" name="anemia_sev_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="anemia_sev_deaths20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>14</td>
			            <td class="left">Malaria simple in pregnancy</td>
			            <td><input type="number" min="0" name="malaria_sim_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="malaria_sim_hos20" class="form-control"></td>
                  <td class="grey"></td>
									<td class="grey"></td>
			          </tr>
								<tr>
			            <td>15</td>
			            <td class="left">Malaria with minor digestive symptoms in pregnancy</td>
			            <td><input type="number" min="0" name="malaria_dig_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="malaria_dig_hos20" class="form-control"></td>
                  <td class="grey"></td>
									<td class="grey"></td>
			          </tr>
								<tr>
			            <td>16</td>
			            <td class="left">Severe malaria in pregnancy</td>
			            <td><input type="number" min="0" name="malaria_sev_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="malaria_sev_hos20" class="form-control"></td>
			            <td><input type="number" min="0" name="malaria_sev_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="malaria_sev_deaths20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>17</td>
			            <td class="left">HIV / Opportunistic infections</td>
			            <td><input type="number" min="0" name="hiv_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="hiv_hos20" class="form-control"></td>
			            <td><input type="number" min="0" name="hiv_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="hiv_deaths20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>18</td>
			            <td class="left">Pulmonary embolism</td>
			            <td><input type="number" min="0" name="pulmonary_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="pulmonary_hos20" class="form-control"></td>
			            <td><input type="number" min="0" name="pulmonary_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="pulmonary_deaths20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>19</td>
			            <td class="left">Pneumonia on pregnancy</td>
			            <td><input type="number" min="0" name="pneumonia_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="pneumonia_hos20" class="form-control"></td>
			            <td><input type="number" min="0" name="pneumonia_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="pneumonia_deaths20" class="form-control"></td>
			          </tr>
								<tr>
			            <td>20</td>
			            <td class="left">Other indirect obstetrical complication</td>
			            <td><input type="number" min="0" name="other_ind_obstet_hos19" class="form-control"></td>
			            <td><input type="number" min="0" name="other_ind_obstet_hos20" class="form-control"></td>
			            <td><input type="number" min="0" name="other_ind_obstet_deaths19" class="form-control"></td>
			            <td><input type="number" min="0" name="other_ind_obstet_deaths20" class="form-control"></td>
			          </tr>
			        </tbody>
			      </table>
            <br>
	      		<h4>Emergency obstetric and neonatal care interventions (basic and comprehensive)</h4>
	      		<table id="B15" class="center">
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
			            <td class="left">Intravenous antibiotics to manage obstetrical infections</td>
			            <td><input type="number" min="0" name="intra_antibio" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>2</td>
			            <td class="left">Mother received parenteral uterotonic drugd (oxytocin) to manage PPH</td>
			            <td><input type="number" min="0" name="mother_uterotonic" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>3</td>
			            <td class="left">Manual removal of placenta</td>
			            <td><input type="number" min="0" name="manual_placenta" class="form-control"></td>
			          </tr>
								<tr>
			            <td>4</td>
			            <td class="left">Post-abortion care (manual vacuum aspiration)</td>
			            <td><input type="number" min="0" name="post_abortion" class="form-control"></td>
			          </tr>
								<tr>
			            <td>5</td>
			            <td class="left">Delivery by vacuum extraction</td>
			            <td><input type="number" min="0" name="vacuum_extraction" class="form-control"></td>
			          </tr>
								<tr>
			            <td>6</td>
			            <td class="left">(Pre) eclampsia cases receiving magnesium sulfate</td>
			            <td><input type="number" min="0" name="Preeclampsia" class="form-control"></td>
			          </tr>
								<tr>
			            <td>7</td>
			            <td class="left">Caesarean</td>
			            <td><input type="number" min="0" name="caesarean" class="form-control"></td>
			          </tr>
								<tr>
			            <td>8</td>
			            <td class="left">Blood transfusion for obstetrical complications</td>
			            <td><input type="number" min="0" name="blood_tranf" class="form-control"></td>
			          </tr>
								<tr>
			            <td>9</td>
			            <td class="left">Women with obstetrical complications referred for emerhency care to higher levels</td>
			            <td><input type="number" min="0" name="women_w_obste_compli" class="form-control"></td>
			          </tr>
			        </tbody>
			      </table>
            <br>
	      		<h4>Deliveries and births at health facility</h4>
	      		<table id="A16" class="center">
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
			            <td class="left">Deliveries, total</td>
			            <td><input type="number" min="0" name="delive_total" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>2</td>
			            <td class="left">Deliveries eutocic</td>
			            <td><input type="number" min="0" name="delive_eutocic" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>3</td>
			            <td class="left">Deliveries dystocic</td>
			            <td><input type="number" min="0" name="delive_dystocic" class="form-control"></td>
			          </tr>
								<tr>
			            <td>4</td>
			            <td class="left">Delivery with episiotomy</td>
			            <td><input type="number" min="0" name="delive_w_episiotomy" class="form-control"></td>
			          </tr>
								<tr>
			            <td>5</td>
			            <td class="left">Delivery with oxytocin stimulation</td>
			            <td><input type="number" min="0" name="delive_w_oxytocin" class="form-control"></td>
			          </tr>
								<tr>
			            <td>6</td>
			            <td class="left">Delivery complicated by perineal tear (second-third-fourth degree)</td>
			            <td><input type="number" min="0" name="delive_complicated" class="form-control"></td>
			          </tr>
								<tr>
			            <td>7</td>
			            <td class="left">Birth trauma to newborn</td>
			            <td><input type="number" min="0" name="birth_trauma" class="form-control"></td>
			          </tr>
								<tr>
			            <td>8</td>
			            <td class="left">Cleft palate or cleft lip</td>
			            <td><input type="number" min="0" name="cleft_palate" class="form-control"></td>
			          </tr>
								<tr>
			            <td>9</td>
			            <td class="left">Omphalocel</td>
			            <td><input type="number" min="0" name="omphalocel" class="form-control"></td>
			          </tr>
								<tr>
			            <td>10</td>
			            <td class="left">Laparoschisis</td>
			            <td><input type="number" min="0" name="laparoschisis" class="form-control"></td>
			          </tr>
								<tr>
			            <td>11</td>
			            <td class="left">Spina bifida</td>
			            <td><input type="number" min="0" name="spina_bifida" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>12</td>
			            <td class="left">Hydrocephalus</td>
			            <td><input type="number" min="0" name="hydrocephalus" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>13</td>
			            <td class="left">Deliveries 15 years and under</td>
			            <td><input type="number" min="0" name="delive_15" class="form-control"></td>
			          </tr>
								<tr>
			            <td>14</td>
			            <td class="left">Deliveries 16 to 19 years</td>
			            <td><input type="number" min="0" name="delive_19" class="form-control"></td>
			          </tr>
								<tr>
			            <td>15</td>
			            <td class="left">Deliveries 20 to 24 years</td>
			            <td><input type="number" min="0" name="delive_24" class="form-control"></td>
			          </tr>
								<tr>
			            <td>16</td>
			            <td class="left">Deliveries 35 years and above</td>
			            <td><input type="number" min="0" name="delive_35" class="form-control"></td>
			          </tr>
								<tr>
			            <td>17</td>
			            <td class="left">Women who received oxytocin IM immediately after birth for active management of third stage of labor</td>
			            <td><input type="number" min="0" name="received_oxytocin" class="form-control"></td>
			          </tr>
								<tr>
			            <td>18</td>
			            <td class="left">Multiple pregnancies (women who delivered twins, triplets, etc.)</td>
			            <td><input type="number" min="0" name="multi_pregnancies" class="form-control"></td>
			          </tr>
								<tr>
			            <td>19</td>
			            <td class="left">Women consulted for risk of premature delivery</td>
			            <td><input type="number" min="0" name="women_cons_risk_prema" class="form-control"></td>
			          </tr>
								<tr>
			            <td>20</td>
			            <td class="left">Mother who received corticosteroid in management of risk of premature delivery</td>
			            <td><input type="number" min="0" name="received_corticosteroid" class="form-control"></td>
			          </tr>
								<tr>
			            <td>21</td>
			            <td class="left">Women consulted with preterm premature rupture membranes (PPROM)</td>
			            <td><input type="number" min="0" name="cons_preterm_ruptu_memb" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>22</td>
			            <td class="left">Women consulted with preterm premature rupture membranes who received prophylactic antibiotics</td>
			            <td><input type="number" min="0" name="cons_preterm_ruptu_memb_prophylactic" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>23</td>
			            <td class="left">Maternal deaths during labor, delivery and 24 hours after delivery (=subsets of all deaths in table above)</td>
			            <td><input type="number" min="0" name="maternal_deaths" class="form-control"></td>
			          </tr>
								<tr>
			            <td>24</td>
			            <td class="left">Births, live</td>
			            <td><input type="number" min="0" name="births_live" class="form-control"></td>
			          </tr>
								<tr>
			            <td>25</td>
			            <td class="left">Birth weight < 2500 gr (alive)</td>
			            <td><input type="number" min="0" name="births_weight2500" class="form-control"></td>
			          </tr>
								<tr>
			            <td>26</td>
			            <td class="left">Premature newborns (alive) 22-37 weeks</td>
			            <td><input type="number" min="0" name="premature_newborn" class="form-control"></td>
			          </tr>
								<tr>
			            <td>27</td>
			            <td class="left">Birth weight < 2 kg (alive newborns) all</td>
			            <td><input type="number" min="0" name="births_weight2000" class="form-control"></td>
			          </tr>
								<tr>
			            <td>28</td>
			            <td class="left">Still births macerated (≥ 28 weeks or ≥ 1000 gr)</td>
			            <td><input type="number" min="0" name="births_macerated" class="form-control"></td>
			          </tr>
								<tr>
			            <td>29</td>
			            <td class="left">Still births fresh (≥ 28 weeks or ≥ 1000 gr) all</td>
			            <td><input type="number" min="0" name="births_fresh_1000" class="form-control"></td>
			          </tr>
								<tr>
			            <td>30</td>
			            <td class="left">Still births freash (≥ 2500 gr)</td>
			            <td><input type="number" min="0" name="births_fresh_2500" class="form-control"></td>
			          </tr>
								<tr>
			            <td>31</td>
			            <td class="left">Deaths at birth of live born bebies (within 30 minutes)</td>
			            <td><input type="number" min="0" name="deaths_birth" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>32</td>
			            <td class="left">Deaths at birth of live born babies with ≥ 2,5 kg (within 30 minutes)</td>
			            <td><input type="number" min="0" name="deaths_birth_2500" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>33</td>
			            <td class="left">Newborns breastfed within 1 hour of delivery</td>
			            <td><input type="number" min="0" name="newborns_breastfed" class="form-control"></td>
			          </tr>
								<tr>
			            <td>34</td>
			            <td class="left">Newborns who were placed skin to skin after birth for at least one hour after birth</td>
			            <td><input type="number" min="0" name="newborns_skintoskin" class="form-control"></td>
			          </tr>
								<tr>
			            <td>35</td>
			            <td class="left">Live newborns who didn't cry / breath at birth</td>
			            <td><input type="number" min="0" name="newborns_no_cry" class="form-control"></td>
			          </tr>
								<tr>
			            <td>36</td>
			            <td class="left">Live newborns who didn't cry at birth and for whom newborn resuscitation was performed using ambu bag</td>
			            <td><input type="number" min="0" name="newborns_no_cry_ambubag" class="form-control"></td>
			          </tr>
								<tr>
			            <td>37</td>
			            <td class="left">Live newborns who didn't cry / breath at birth and were resuscitated successfully (cry / breath within 5 min APGAR > 5 at 5 min)</td>
			            <td><input type="number" min="0" name="newborns_no_cry_success" class="form-control"></td>
			          </tr>
								<tr>
			            <td>38</td>
			            <td class="left">Women suspected to develop obstetrical fistula (during labor)</td>
			            <td><input type="number" min="0" name="fistula" class="form-control"></td>
			          </tr>
								<tr>
			            <td>39</td>
			            <td class="left">Women suspected to develop obstetrical fistula received conservative treatment (foley catheter)</td>
			            <td><input type="number" min="0" name="fistula_treatment" class="form-control"></td>
			          </tr>
								<tr>
			            <td>40</td>
			            <td class="left">Newborns with complications at birth referred to higher level for emergency care</td>
			            <td><input type="number" min="0" name="complications_higher_level" class="form-control"></td>
			          </tr>
								<tr>
			            <td>41</td>
			            <td class="left">Women placed under observation for at least 24 hours before discharge</td>
			            <td><input type="number" min="0" name="observation_24" class="form-control"></td>
			          </tr>
			        </tbody>
			      </table>
						<br>
						<h4>Postnatal care</h4>
	      		<table id="A17" class="center">
			        <thead>
			          <tr>
			            <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th>Mother<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th>Newborn<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			          </tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td>1</td>
			            <td class="left">PNC1 visits within 24 hours of birth</td>
			            <td><input type="number" min="0" name="pnc1_m" class="form-control"></td>
			            <td><input type="number" min="0" name="pnc1_nb" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>2</td>
			            <td class="left">Mothers screened for anemia during PNC1 visit</td>
			            <td><input type="number" min="0" name="anemia_pnc1_m" class="form-control"></td>
									<td class="grey"></td>
			          </tr>
			          <tr>
			            <td>3</td>
			            <td class="left">Mothers received iron / folic acid during PNC1 visit</td>
			            <td><input type="number" min="0" name="iron_pnc1_m" class="form-control"></td>
									<td class="grey"></td>
			          </tr>
								<tr>
			            <td>4</td>
			            <td class="left">Mothers screened by MUAC for malnutrition during PNC1 visit</td>
			            <td><input type="number" min="0" name="muac_pnc1_m" class="form-control"></td>
									<td class="grey"></td>
			          </tr>
								<tr>
			            <td>5</td>
			            <td class="left">Mothers malnourished (MUAC < 21 cm) during PNC1 visit</td>
			            <td><input type="number" min="0" name="malnourished_pnc1_m" class="form-control"></td>
									<td class="grey"></td>
			          </tr>
								<tr>
			            <td>6</td>
			            <td class="left">PNC2 visits at 3rd day after birth</td>
			            <td><input type="number" min="0" name="pnc2_m" class="form-control"></td>
			            <td><input type="number" min="0" name="pnc2_nb" class="form-control"></td>
			          </tr>
								<tr>
			            <td>7</td>
			            <td class="left">PNC3 visits between 7th and 14th day after birth</td>
			            <td><input type="number" min="0" name="pnc3_m" class="form-control"></td>
			            <td><input type="number" min="0" name="pnc3_nb" class="form-control"></td>
			          </tr>
								<tr>
			            <td>8</td>
			            <td class="left">Screened for nemia during PNC3 visit</td>
			            <td><input type="number" min="0" name="anemia_pnc3_m" class="form-control"></td>
									<td class="grey"></td>
			          </tr>
								<tr>
			            <td>9</td>
			            <td class="left">Anemia (Hb < 9.5 gr/dl) detected during PNC visits (PNC1 and PNC3)</td>
			            <td><input type="number" min="0" name="anemia_pnc_m" class="form-control"></td>
									<td class="grey"></td>
			          </tr>
								<tr>
			            <td>10</td>
			            <td class="left">Complications / Danger signs detected during any PNC visit</td>
			            <td><input type="number" min="0" name="complications_m" class="form-control"></td>
			            <td><input type="number" min="0" name="complications_nb" class="form-control"></td>
			          </tr>
								<tr>
			            <td>11</td>
			            <td class="left">Referrals done for complcations ar any visit</td>
			            <td><input type="number" min="0" name="referrals_m" class="form-control"></td>
			            <td><input type="number" min="0" name="referrals_nb" class="form-control"></td>
			          </tr>
			          <tr>
			            <td>12</td>
			            <td class="left">Post-partum family planning (PPFP) within 6 weeks after delivery</td>
			            <td><input type="number" min="0" name="ppfp_m" class="form-control"></td>
									<td class="grey"></td>
			          </tr>
			        </tbody>
			      </table>
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
		<script src="https://cdn.datatables.net/v/dt/dt-1.10.18/fh-3.1.4/datatables.min.js"></script>
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
	$('#A15').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"fixedHeader": true
	    });
  $('#B15').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false
      });
  $('#A16').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
		"fixedHeader": true
      });
	$('#A17').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
		"fixedHeader": true
      });
	$('.dataTables_length').addClass('bs-select');
</script>
