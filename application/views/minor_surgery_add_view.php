<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Minor Surgery</title>
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
			<h2>Minor Surgery - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('add_date'))); ?></h2>
      <div>
        <form method="post" action="" class="form-inline">
					<h4>Surgery</h4>
		      <table id="XII" class="center">
						<thead>
		          <tr>
		            <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Service<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Type of surgical intervention<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Urgent interventions<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Planned interventions<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Post-surgical infection total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td rowspan="6">1</td>
		            <td rowspan="6">General surgery</td>
		            <td class="left">1. Appendicectomy</td>
		            <td><input type="number" min="0" name="appendice_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="appendice_plan" class="form-control"></td>
		            <td rowspan="6"><input type="number" min="0" name="gs_total" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">2. Hernioraphy</td>
		            <td><input type="number" min="0" name="hernioraphy_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="hernioraphy_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">3. Laparotomy</td>
		            <td><input type="number" min="0" name="laparo_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="laparo_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">4. Thyroidectomy</td>
		            <td><input type="number" min="0" name="tyroide_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="tyroide_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">5. Adenomectomy</td>
		            <td><input type="number" min="0" name="adeno_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="adeno_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">6. General surgery other</td>
		            <td><input type="number" min="0" name="gs_other_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="gs_other_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td rowspan="4">2</td>
		            <td rowspan="4">Orthopedic</td>
		            <td class="left">1. Amputations</td>
		            <td><input type="number" min="0" name="amputations_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="amputations_plan" class="form-control"></td>
		            <td rowspan="4"><input type="number" min="0" name="ortho_total" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">2. Osteosynthesis</td>
		            <td><input type="number" min="0" name="osteo_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="osteo_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">3. Fracture without implant</td>
		            <td><input type="number" min="0" name="fracture_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="fracture_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">4. Orthopedic surgery other</td>
		            <td><input type="number" min="0" name="ortho_other_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="ortho_other_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td rowspan="5">3</td>
		            <td rowspan="5">Ophthalmologic</td>
		            <td class="left">1. Glaucoma</td>
		            <td><input type="number" min="0" name="glaucoma_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="glaucoma_plan" class="form-control"></td>
		            <td rowspan="5"><input type="number" min="0" name="oph_total" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">2. Trachoma</td>
		            <td><input type="number" min="0" name="trachoma_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="trachoma_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">3. Cataract</td>
		            <td><input type="number" min="0" name="cataract_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="cataract_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">4. Trauma</td>
		            <td><input type="number" min="0" name="trauma_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="trauma_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">5. Ophthalmological surgery other</td>
		            <td><input type="number" min="0" name="oph_other_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="oph_other_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td rowspan="2">4</td>
		            <td rowspan="2">Plastic surgery</td>
		            <td class="left">1. Cleft palate, cleft lip</td>
		            <td><input type="number" min="0" name="cleft_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="cleft_plan" class="form-control"></td>
		            <td rowspan="2"><input type="number" min="0" name="plastic_total" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">2. Other plastic surgery</td>
		            <td><input type="number" min="0" name="plastic_other_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="plastic_other_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td rowspan="3">5</td>
		            <td colspan="2">Surgical Iinterventions Total</td>
		            <td><input type="number" min="0" name="total_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="total_plan" class="form-control"></td>
		            <td rowspan="3" class="grey"></td>
							</tr>
							<tr>
								<td rowspan="2">Of which</td>
		            <td class="left">1. Major surgery</td>
		            <td><input type="number" min="0" name="major_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="major_plan" class="form-control"></td>
							</tr>
							<tr>
		            <td class="left">2. Minor surgery</td>
		            <td><input type="number" min="0" name="minor_urg" class="form-control"></td>
		            <td><input type="number" min="0" name="minor_plan" class="form-control"></td>
							</tr>
		        </tbody>
		      </table>
					<br>
					<h4>Anesthesia</h4>
		      <table id="XIII" class="center">
		        <thead>
		          <tr>
								<th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <th>Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
								<td>1</td>
		            <td class="left">General anesthesia</td>
		            <td><input type="number" min="0" name="general" class="form-control"></td>
		          </tr>
		          <tr>
								<td>2</td>
		            <td class="left">Regional anesthesia</td>
		            <td><input type="number" min="0" name="regional" class="form-control"></td>
		          </tr>
							<tr>
								<td>3</td>
		            <td class="left">Local anesthesia</td>
		            <td><input type="number" min="0" name="local" class="form-control"></td>
		          </tr>
							<tr>
								<td>4</td>
		            <td class="left">Other types of anesthesia</td>
		            <td><input type="number" min="0" name="other_type" class="form-control"></td>
		          </tr>
		        </tbody>
		      </table>
					<br>
      		<center><button type="submit">Validate</button></center>
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

	$('#XIII').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	});
	$('#XII').DataTable();
	$('.dataTables_length').addClass('bs-select');
</script>
