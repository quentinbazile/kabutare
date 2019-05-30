<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Nutrition Rehab</title>
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
			<h2>Nutrition Rehab - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('add_date'))); ?></h2>
			<div>
        <form method="post" action="" class="form-inline">
          <div class="row">
						<div class="col-xs-6">
			      	<h4>Summary statistics by service</h4>
						</div>
						<div class="col-xs-6">
					  	<h4>Payment for Hospitalization</h4>
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
				            <td><input type="number" min="0" name="nr_beds" class="form-control"></td>
				          </tr>
				          <tr>
                    <td>2</td>
				            <td class="left">Present at the beginning of the month</td>
				            <td><input type="number" min="0" name="nr_present_start" class="form-control"></td>
				          </tr>
                  <tr>
                    <td>3</td>
				            <td class="left">Admissions during the month of wich</td>
				            <td><input type="number" min="0" name="nr_admissions" class="form-control"></td>
				          </tr>
                  <tr>
                    <td>3.1</td>
				            <td class="left">Referred from the Health Center</td>
				            <td><input type="number" min="0" name="nr_referred" class="form-control"></td>
				          </tr>
                  <tr>
                    <td>3.2</td>
				            <td class="left">Non-referred patients</td>
				            <td><input type="number" min="0" name="nr_no_referred" class="form-control"></td>
				          </tr>
                  <tr>
                    <td>4</td>
				            <td class="left">Discharges during the month of which</td>
				            <td><input type="number" min="0" name="nr_discharges" class="form-control"></td>
				          </tr>
                  <tr>
                    <td>4.1</td>
				            <td class="left">Authorized/Cured</td>
				            <td><input type="number" min="0" name="nr_authorized" class="form-control"></td>
				          </tr>
                  <tr>
                    <td>4.2</td>
				            <td class="left">Abandoned</td>
				            <td><input type="number" min="0" name="nr_abandoned" class="form-control"></td>
				          </tr>
                  <tr>
                    <td>4.3</td>
				            <td class="left">Deaths</td>
				            <td><input type="number" min="0" name="nr_deaths" class="form-control"></td>
				          </tr>
                  <tr>
                    <td>4.4</td>
				            <td class="left">Referred</td>
				            <td><input type="number" min="0" name="nr_dis_referred" class="form-control"></td>
				          </tr>
                  <tr>
                    <td>4.5</td>
				            <td class="left">Counter-referred</td>
				            <td><input type="number" min="0" name="nr_counter" class="form-control"></td>
				          </tr>
                  <tr>
                    <td>5</td>
				            <td class="left">Present at the end of the month</td>
				            <td><input type="number" min="0" name="nr_present_end" class="form-control"></td>
				          </tr>
                  <tr>
                    <td>6</td>
				            <td class="left">Total hospitalization days for discharged patients</td>
				            <td><input type="number" min="0" name="nr_total" class="form-control"></td>
				          </tr>
                  <tr>
                    <td>7</td>
				            <td class="left">Actual hospitalization days</td>
				            <td><input type="number" min="0" name="nr_actual" class="form-control"></td>
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
					            <td class="left">Insured discharges(mutuelle, etc)</td>
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
		            <td class="center">1</td>
		            <td class="left">Hospitalized</td>
		            <td><input type="number" min="0" name="hosp_1m" class="form-control"></td>
		            <td><input type="number" min="0" name="hosp_1f" class="form-control"></td>
								<td><input type="number" min="0" name="hosp_4m" class="form-control"></td>
								<td><input type="number" min="0" name="hosp_4f" class="form-control"></td>
								<td><input type="number" min="0" name="hosp_19m" class="form-control"></td>
								<td><input type="number" min="0" name="hosp_19f" class="form-control"></td>
								<td><input type="number" min="0" name="hosp_20m" class="form-control"></td>
								<td><input type="number" min="0" name="hosp_20f" class="form-control"></td>
		          </tr>
		          <tr>
		            <td class="center">2</td>
		            <td class="left">Deaths</td>
		            <td><input type="number" min="0" name="deaths_1m" class="form-control"></td>
		            <td><input type="number" min="0" name="deaths_1f" class="form-control"></td>
								<td><input type="number" min="0" name="deaths_4m" class="form-control"></td>
								<td><input type="number" min="0" name="deaths_4f" class="form-control"></td>
								<td><input type="number" min="0" name="deaths_19m" class="form-control"></td>
								<td><input type="number" min="0" name="deaths_19f" class="form-control"></td>
								<td><input type="number" min="0" name="deaths_20m" class="form-control"></td>
								<td><input type="number" min="0" name="deaths_20f" class="form-control"></td>
		          </tr>
		        </tbody>
		      </table>
					<br>
          <h4>Nutrition screening (all services)</h4>
          <table id="A20" class="center">
		        <thead>
		          <tr>
		            <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Days < 6<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Weeks 1 to 8<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Months 2 to 59<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Age 5 to 14<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Age > 15<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td class="center">1</td>
		            <td class="left">Screened for malnutrition</td>
		            <td><input type="number" min="0" name="screened_6" class="form-control"></td>
		            <td><input type="number" min="0" name="screened_7" class="form-control"></td>
		            <td><input type="number" min="0" name="screened_2" class="form-control"></td>
		            <td><input type="number" min="0" name="screened_5" class="form-control"></td>
		            <td><input type="number" min="0" name="screened_15" class="form-control"></td>
		          </tr>
		          <tr>
		            <td class="center">2</td>
		            <td class="left">Malnourished total</td>
		            <td><input type="number" min="0" name="malnourished_6" class="form-control"></td>
		            <td><input type="number" min="0" name="malnourished_7" class="form-control"></td>
		            <td><input type="number" min="0" name="malnourished_2" class="form-control"></td>
		            <td><input type="number" min="0" name="malnourished_5" class="form-control"></td>
		            <td><input type="number" min="0" name="malnourished_15" class="form-control"></td>
		          </tr>
              <tr>
		            <td class="center">2.1</td>
		            <td class="left">Malnutrition acute severe</td>
		            <td><input type="number" min="0" name="acute_sev_6" class="form-control"></td>
		            <td><input type="number" min="0" name="acute_sev_7" class="form-control"></td>
		            <td><input type="number" min="0" name="acute_sev_2" class="form-control"></td>
		            <td><input type="number" min="0" name="acute_sev_5" class="form-control"></td>
		            <td><input type="number" min="0" name="acute_sev_15" class="form-control"></td>
		          </tr>
              <tr>
		            <td class="center">2.2</td>
		            <td class="left">Malnutrition acute moderate</td>
		            <td><input type="number" min="0" name="acute_mod_6" class="form-control"></td>
		            <td><input type="number" min="0" name="acute_mod_7" class="form-control"></td>
		            <td><input type="number" min="0" name="acute_mod_2" class="form-control"></td>
		            <td><input type="number" min="0" name="acute_mod_5" class="form-control"></td>
		            <td><input type="number" min="0" name="acute_mod_15" class="form-control"></td>
		          </tr>
              <tr>
		            <td class="center">2.3</td>
		            <td class="left">Underweight severe</td>
		            <td><input type="number" min="0" name="under_sev_6" class="form-control"></td>
		            <td><input type="number" min="0" name="under_sev_7" class="form-control"></td>
		            <td><input type="number" min="0" name="under_sev_2" class="form-control"></td>
		            <td><input type="number" min="0" name="under_sev_5" class="form-control"></td>
                <td class="grey"></td>
		          </tr>
              <tr>
		            <td class="center">2.4</td>
		            <td class="left">Underweight moderate</td>
		            <td><input type="number" min="0" name="under_mod_6" class="form-control"></td>
		            <td><input type="number" min="0" name="under_mod_7" class="form-control"></td>
		            <td><input type="number" min="0" name="under_mod_2" class="form-control"></td>
		            <td><input type="number" min="0" name="under_mod_5" class="form-control"></td>
                <td class="grey"></td>
		          </tr>
              <tr>
		            <td class="center">2.5</td>
		            <td class="left">Malnutrition chronic severe (stunting)</td>
		            <td><input type="number" min="0" name="chronic_sev_6" class="form-control"></td>
		            <td><input type="number" min="0" name="chronic_sev_7" class="form-control"></td>
		            <td><input type="number" min="0" name="chronic_sev_2" class="form-control"></td>
		            <td><input type="number" min="0" name="chronic_sev_5" class="form-control"></td>
                <td class="grey"></td>
		          </tr>
              <tr>
		            <td class="center">2.6</td>
		            <td class="left">Malnutrition chronic moderate (stunting)</td>
		            <td><input type="number" min="0" name="chronic_mod_6" class="form-control"></td>
		            <td><input type="number" min="0" name="chronic_mod_7" class="form-control"></td>
		            <td><input type="number" min="0" name="chronic_mod_2" class="form-control"></td>
		            <td><input type="number" min="0" name="chronic_mod_5" class="form-control"></td>
                <td class="grey"></td>
		          </tr>
              <tr>
		            <td class="center">3</td>
		            <td class="left">Referred to outpatient malnutrition program</td>
		            <td><input type="number" min="0" name="outpatient_6" class="form-control"></td>
		            <td><input type="number" min="0" name="outpatient_7" class="form-control"></td>
		            <td><input type="number" min="0" name="outpatient_2" class="form-control"></td>
		            <td><input type="number" min="0" name="outpatient_5" class="form-control"></td>
		            <td><input type="number" min="0" name="outpatient_15" class="form-control"></td>
		          </tr>
              <tr>
		            <td class="center">4</td>
		            <td class="left">Referred to inpatient malnutrition program (hospital)</td>
		            <td><input type="number" min="0" name="inpatient_6" class="form-control"></td>
		            <td><input type="number" min="0" name="inpatient_7" class="form-control"></td>
		            <td><input type="number" min="0" name="inpatient_2" class="form-control"></td>
		            <td><input type="number" min="0" name="inpatient_5" class="form-control"></td>
		            <td><input type="number" min="0" name="inpatient_15" class="form-control"></td>
		          </tr>
		        </tbody>
		      </table>
					<br>
					<h4> Inpatient Rehabilitation of malnourished</h4>
          <table id="A21" class="center">
            <thead>
              <tr>
                <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th rowspan="3" colspan="2">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th colspan="4">Acutely malnourished<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th rowspan="3">Pregnant women<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th rowspan="3">Lactating women<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
              </tr>
              <tr>
                <th colspan="2">Moderate<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th colspan="2">Severe<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
              </tr>
              <tr>
                <th>Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th>Age > 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th>Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th>Age > 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td class="left" colspan="2">Present beginning of month</td>
                <td><input type="number" min="0" name="present_start_mod4" class="form-control"></td>
                <td><input type="number" min="0" name="present_start_mod5" class="form-control"></td>
                <td><input type="number" min="0" name="present_start_sev4" class="form-control"></td>
                <td><input type="number" min="0" name="present_start_sev5" class="form-control"></td>
                <td><input type="number" min="0" name="present_start_pw" class="form-control"></td>
                <td><input type="number" min="0" name="present_start_lw" class="form-control"></td>
              </tr>
              <tr>
                <td rowspan="2">2</td>
                <td class="left" rowspan="2">Hospitalized</td>
                <td class="left">New cases</td>
                <td><input type="number" min="0" name="nc_mod4" class="form-control"></td>
                <td><input type="number" min="0" name="nc_mod5" class="form-control"></td>
                <td><input type="number" min="0" name="nc_sev4" class="form-control"></td>
                <td><input type="number" min="0" name="nc_sev5" class="form-control"></td>
                <td><input type="number" min="0" name="nc_pw" class="form-control"></td>
                <td><input type="number" min="0" name="nc_lw" class="form-control"></td>
              </tr>
              <tr>
                <td class="left">Relapsed Cases</td>
                <td><input type="number" min="0" name="relapsed_mod4" class="form-control"></td>
                <td><input type="number" min="0" name="relapsed_mod5" class="form-control"></td>
                <td><input type="number" min="0" name="relapsed_sev4" class="form-control"></td>
                <td><input type="number" min="0" name="relapsed_sev5" class="form-control"></td>
                <td><input type="number" min="0" name="relapsed_pw" class="form-control"></td>
                <td><input type="number" min="0" name="relapsed_lw" class="form-control"></td>
              </tr>
              <tr>
                <td rowspan="4">3</td>
                <td class="left" rowspan="4">Discharges</td>
                <td class="left">Cured</td>
                <td><input type="number" min="0" name="cured_mod4" class="form-control"></td>
                <td><input type="number" min="0" name="cured_mod5" class="form-control"></td>
                <td><input type="number" min="0" name="cured_sev4" class="form-control"></td>
                <td><input type="number" min="0" name="cured_sev5" class="form-control"></td>
                <td><input type="number" min="0" name="cured_pw" class="form-control"></td>
                <td><input type="number" min="0" name="cured_lw" class="form-control"></td>
              </tr>
							<tr>
                <td class="left">Referred</td>
                <td><input type="number" min="0" name="referred_mod4" class="form-control"></td>
                <td><input type="number" min="0" name="referred_mod5" class="form-control"></td>
                <td><input type="number" min="0" name="referred_sev4" class="form-control"></td>
                <td><input type="number" min="0" name="referred_sev5" class="form-control"></td>
                <td><input type="number" min="0" name="referred_pw" class="form-control"></td>
                <td><input type="number" min="0" name="referred_lw" class="form-control"></td>
              </tr>
							<tr>
                <td class="left">Abandoned</td>
                <td><input type="number" min="0" name="abandoned_mod4" class="form-control"></td>
                <td><input type="number" min="0" name="abandoned_mod5" class="form-control"></td>
                <td><input type="number" min="0" name="abandoned_sev4" class="form-control"></td>
                <td><input type="number" min="0" name="abandoned_sev5" class="form-control"></td>
                <td><input type="number" min="0" name="abandoned_pw" class="form-control"></td>
                <td><input type="number" min="0" name="abandoned_lw" class="form-control"></td>
              </tr>
							<tr>
                <td class="left">Died</td>
                <td><input type="number" min="0" name="died_mod4" class="form-control"></td>
                <td><input type="number" min="0" name="died_mod5" class="form-control"></td>
                <td><input type="number" min="0" name="died_sev4" class="form-control"></td>
                <td><input type="number" min="0" name="died_sev5" class="form-control"></td>
                <td><input type="number" min="0" name="died_pw" class="form-control"></td>
                <td><input type="number" min="0" name="died_lw" class="form-control"></td>
              </tr>
							<tr>
                <td>4</td>
                <td class="left" colspan="2">Present at end of month</td>
                <td><input type="number" min="0" name="present_end_mod4" class="form-control"></td>
                <td><input type="number" min="0" name="present_end_mod5" class="form-control"></td>
                <td><input type="number" min="0" name="present_end_sev4" class="form-control"></td>
                <td><input type="number" min="0" name="present_end_sev5" class="form-control"></td>
                <td><input type="number" min="0" name="present_end_pw" class="form-control"></td>
                <td><input type="number" min="0" name="present_end_lw" class="form-control"></td>
              </tr>
            </tbody>
          </table>
          <br>
		      <center><button type="submit">Validate</button></center>
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
  $('#A10').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
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
  $('#A20').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false,
    "searching": false
      });
  $('#A21').DataTable({
    "bPaginate": false,
    "bLengthChange": false,
    "bInfo": false
      });
	$('.dataTables_length').addClass('bs-select');
</script>
