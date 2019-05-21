<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>HR</title>
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
		<div class="container">
			<h2>HR - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('add_date'))); ?></h2>
      <div>
        <form method="post" action="" class="form-inline">
		     	<br><h4>Staffing Information</h4>
		      <table id="A" class="center">
		        <thead>
		          <tr>
		            <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
								<th class="cat">Category<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th colspan="2">Age < 35</th>
		            <th colspan="2">Age 35 to 59</th>
		            <th colspan="2">Age > 60</th>
		          </tr>
		          <tr>
								<td class="grey"></td>
								<td class="grey"></td>
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
		            <td class="left">Doctors (Specialist)</td>
		            <td><input type="number" min="0" name="doc_spe_34m" class="form-control"></td>
		            <td><input type="number" min="0" name="doc_spe_34f" class="form-control"></td>
		            <td><input type="number" min="0" name="doc_spe_35m" class="form-control"></td>
		            <td><input type="number" min="0" name="doc_spe_35f" class="form-control"></td>
		            <td><input type="number" min="0" name="doc_spe_60m" class="form-control"></td>
		            <td><input type="number" min="0" name="doc_spe_60f" class="form-control"></td>
		          </tr>
		          <tr>
								<td>2</td>
		            <td class="left">Doctors (Generalist)</td>
								<td><input type="number" min="0" name="doc_ge_34m" class="form-control"></td>
		            <td><input type="number" min="0" name="doc_ge_34f" class="form-control"></td>
		            <td><input type="number" min="0" name="doc_ge_35m" class="form-control"></td>
		            <td><input type="number" min="0" name="doc_ge_35f" class="form-control"></td>
		            <td><input type="number" min="0" name="doc_ge_60m" class="form-control"></td>
		            <td><input type="number" min="0" name="doc_ge_60f" class="form-control"></td>
		          </tr>
							<tr>
								<td>3</td>
		            <td class="left">Nurses</td>
								<td><input type="number" min="0" name="nurses_34m" class="form-control"></td>
		            <td><input type="number" min="0" name="nurses_34f" class="form-control"></td>
		            <td><input type="number" min="0" name="nurses_35m" class="form-control"></td>
		            <td><input type="number" min="0" name="nurses_35f" class="form-control"></td>
		            <td><input type="number" min="0" name="nurses_60m" class="form-control"></td>
		            <td><input type="number" min="0" name="nurses_60f" class="form-control"></td>
		          </tr>
							<tr>
								<td>4</td>
		            <td class="left">Midwives</td>
								<td><input type="number" min="0" name="midwives_34m" class="form-control"></td>
		            <td><input type="number" min="0" name="midwives_34f" class="form-control"></td>
		            <td><input type="number" min="0" name="midwives_35m" class="form-control"></td>
		            <td><input type="number" min="0" name="midwives_35f" class="form-control"></td>
		            <td><input type="number" min="0" name="midwives_60m" class="form-control"></td>
		            <td><input type="number" min="0" name="midwives_60f" class="form-control"></td>
		          </tr>
							<tr>
								<td>5</td>
		            <td class="left">Lab Technicians</td>
								<td><input type="number" min="0" name="lab_tech_34m" class="form-control"></td>
		            <td><input type="number" min="0" name="lab_tech_34f" class="form-control"></td>
		            <td><input type="number" min="0" name="lab_tech_35m" class="form-control"></td>
		            <td><input type="number" min="0" name="lab_tech_35f" class="form-control"></td>
		            <td><input type="number" min="0" name="lab_tech_60m" class="form-control"></td>
		            <td><input type="number" min="0" name="lab_tech_60f" class="form-control"></td>
		          </tr>
							<tr>
								<td>6</td>
		            <td class="left">Dental Assistant</td>
								<td><input type="number" min="0" name="dental_34m" class="form-control"></td>
		            <td><input type="number" min="0" name="dental_34f" class="form-control"></td>
		            <td><input type="number" min="0" name="dental_35m" class="form-control"></td>
		            <td><input type="number" min="0" name="dental_35f" class="form-control"></td>
		            <td><input type="number" min="0" name="dental_60m" class="form-control"></td>
		            <td><input type="number" min="0" name="dental_60f" class="form-control"></td>
		          </tr>
							<tr>
								<td>7</td>
		            <td class="left">Other Allied Health Professionals</td>
								<td><input type="number" min="0" name="other_34m" class="form-control"></td>
		            <td><input type="number" min="0" name="other_34f" class="form-control"></td>
		            <td><input type="number" min="0" name="other_35m" class="form-control"></td>
		            <td><input type="number" min="0" name="other_35f" class="form-control"></td>
		            <td><input type="number" min="0" name="other_60m" class="form-control"></td>
		            <td><input type="number" min="0" name="other_60f" class="form-control"></td>
		          </tr>
							<tr>
								<td>8</td>
		            <td class="left">Pharmacists</td>
								<td><input type="number" min="0" name="pharma_34m" class="form-control"></td>
		            <td><input type="number" min="0" name="pharma_34f" class="form-control"></td>
		            <td><input type="number" min="0" name="pharma_35m" class="form-control"></td>
		            <td><input type="number" min="0" name="pharma_35f" class="form-control"></td>
		            <td><input type="number" min="0" name="pharma_60m" class="form-control"></td>
		            <td><input type="number" min="0" name="pharma_60f" class="form-control"></td>
		          </tr>
							<tr>
								<td>9</td>
		            <td class="left">Administrative and Support Personnel</td>
								<td><input type="number" min="0" name="admin_34m" class="form-control"></td>
		            <td><input type="number" min="0" name="admin_34f" class="form-control"></td>
		            <td><input type="number" min="0" name="admin_35m" class="form-control"></td>
		            <td><input type="number" min="0" name="admin_35f" class="form-control"></td>
		            <td><input type="number" min="0" name="admin_60m" class="form-control"></td>
		            <td><input type="number" min="0" name="admin_60f" class="form-control"></td>
		          </tr>
		        </tbody>
		      </table>

					<br>

					<div class="row">
						<div class="col-xs-7">
							<h4>Status of Staff</h4>
						</div>
						<div class="col-xs-5">
							<h4>Reasons of Leaving</h4>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-7">
				      <table id="B" class="center">
				        <thead>
				          <tr>
				            <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th class="cat">Category<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Newly Recruited this Month<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Left this Month<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Vacant Position<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				          </tr>
				        </thead>
				        <tbody>
				          <tr>
										<td>1</td>
				            <td class="left">Doctors (Specialist)</td>
				            <td><input type="number" min="0" name="doc_spe_new" class="form-control"></td>
				            <td><input type="number" min="0" name="doc_spe_left" class="form-control"></td>
				            <td><input type="number" min="0" name="doc_spe_vacant" class="form-control"></td>
				          </tr>
				          <tr>
										<td>2</td>
				            <td class="left">Doctors (Generalist)</td>
										<td><input type="number" min="0" name="doc_ge_new" class="form-control"></td>
				            <td><input type="number" min="0" name="doc_ge_left" class="form-control"></td>
				            <td><input type="number" min="0" name="doc_ge_vacant" class="form-control"></td>
				          </tr>
									<tr>
										<td>3</td>
				            <td class="left">Nurses</td>
										<td><input type="number" min="0" name="nurses_new" class="form-control"></td>
				            <td><input type="number" min="0" name="nurses_left" class="form-control"></td>
				            <td><input type="number" min="0" name="nurses_vacant" class="form-control"></td>
				          </tr>
									<tr>
										<td>4</td>
				            <td class="left">Midwives</td>
										<td><input type="number" min="0" name="midwives_new" class="form-control"></td>
				            <td><input type="number" min="0" name="midwives_left" class="form-control"></td>
				            <td><input type="number" min="0" name="midwives_vacant" class="form-control"></td>
				          </tr>
									<tr>
										<td>5</td>
				            <td class="left">Lab Technicians</td>
										<td><input type="number" min="0" name="lab_tech_new" class="form-control"></td>
				            <td><input type="number" min="0" name="lab_tech_left" class="form-control"></td>
				            <td><input type="number" min="0" name="lab_tech_vacant" class="form-control"></td>
				          </tr>
									<tr>
										<td>6</td>
				            <td class="left">Dental Assistant</td>
										<td><input type="number" min="0" name="dental_new" class="form-control"></td>
				            <td><input type="number" min="0" name="dental_left" class="form-control"></td>
				            <td><input type="number" min="0" name="dental_vacant" class="form-control"></td>
				          </tr>
									<tr>
										<td>7</td>
				            <td class="left">Other Allied Health Professionals</td>
										<td><input type="number" min="0" name="other_new" class="form-control"></td>
				            <td><input type="number" min="0" name="other_left" class="form-control"></td>
				            <td><input type="number" min="0" name="other_vacant" class="form-control"></td>
				          </tr>
									<tr>
										<td>8</td>
				            <td class="left">Pharmacists</td>
										<td><input type="number" min="0" name="pharma_new" class="form-control"></td>
				            <td><input type="number" min="0" name="pharma_left" class="form-control"></td>
				            <td><input type="number" min="0" name="pharma_vacant" class="form-control"></td>
				          </tr>
				        </tbody>
				      </table>
						</div>

						<div class="col-xs-5">
				      <table id="C" class="center">
				        <thead>
				          <tr>
				            <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Reason<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				          </tr>
				        </thead>
				        <tbody>
				          <tr>
										<td>1</td>
				            <td class="left">Death</td>
				            <td><input type="number" min="0" name="left_death" class="form-control"></td>
				          </tr>
				          <tr>
										<td>2</td>
				            <td class="left">Retirement</td>
										<td><input type="number" min="0" name="left_retirement" class="form-control"></td>
				          </tr>
									<tr>
										<td>3</td>
				            <td class="left">Career Development</td>
										<td><input type="number" min="0" name="left_career" class="form-control"></td>
				          </tr>
									<tr>
										<td>4</td>
				            <td class="left">Better Remuneration</td>
										<td><input type="number" min="0" name="left_remuneration" class="form-control"></td>
				          </tr>
									<tr>
										<td>5</td>
				            <td class="left">Other Attrition Reasons</td>
										<td><input type="number" min="0" name="left_other" class="form-control"></td>
				          </tr>
				        </tbody>
				      </table>
						</div>
					</div>

					<br>
      		<center><button type="submit">Validate</button></center>
				</form>
    	</div>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
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
	$('.dataTables_length').addClass('bs-select');
</script>
