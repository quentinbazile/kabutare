<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kinesitherapy</title>
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
			<h2>Kinesitherapy - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('add_date'))); ?></h2>
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
				      <table id="B2" class="center">
				        <thead>
				          <tr>
				            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				            <th>Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				          </tr>
				        </thead>
				        <tbody>
				          <tr>
				            <td class="left">Insured (Mutuelle or other insurance members)</td>
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
						<h4>Physiotherapy</h4>
            <div class="row">
              <table id="A14" class="center">
                <thead>
                  <tr>
                    <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Outpatients<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                    <th>Hospitalized<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="left">Physical therapy</td>
                    <td><input type="number" min="0" name="physical_therapy" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="left">Audiology</td>
                    <td><input type="number" min="0" name="audiology" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="left">Speech therapy</td>
                    <td><input type="number" min="0" name="speech_therapy" class="form-control"></td>
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
	$('#A14').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	    });
	$('.dataTables_length').addClass('bs-select');
</script>
