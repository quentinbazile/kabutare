<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Surgery</title>
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
      <div>
        <form method="post" action="" class="form-inline">
      <table id="dt">
        <thead>
          <tr>
            <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th>Service<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th>Type of Surgical Intervention<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th>Urgent Interventions<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th>Planned Interventions<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th>Post-Surgical Infection Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
          </tr>
        </thead>
        <tbody class="center">
          <tr>
            <td rowspan="6">1</td>
            <td rowspan="6">General Surgery</td>
            <td class="left">1. Appendicectomy</td>
            <td><input required type="number" min="0" name="appendice_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="appendice_plan" class="form-control"></td>
            <td rowspan="6"><input required type="number" min="0" name="gs_total" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">2. Hernioraphy</td>
            <td><input required type="number" min="0" name="hernioraphy_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="hernioraphy_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">3. Laparotomy</td>
            <td><input required type="number" min="0" name="laparo_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="laparo_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">4. Thyroidectomy</td>
            <td><input required type="number" min="0" name="tyroide_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="tyroide_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">5. Adenomectomy</td>
            <td><input required type="number" min="0" name="adeno_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="adeno_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">6. General Surgery Other</td>
            <td><input required type="number" min="0" name="gs_other_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="gs_other_plan" class="form-control"></td>
					</tr>

					<tr>
            <td rowspan="12">2</td>
            <td rowspan="12">Gyneco-Obstetrical</td>
            <td class="left">1. Cesarean Section</td>
            <td><input required type="number" min="0" name="cesarean_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="cesarean_plan" class="form-control"></td>
            <td rowspan="12"><input required type="number" min="0" name="go_total" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">2.1 Gynecological Hysterectomy</td>
            <td><input required type="number" min="0" name="gyneco_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="gyneco_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">2.2 Obstetrical Hysterectomy</td>
            <td><input required type="number" min="0" name="obste_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="obste_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">3.1 Laparotomy for Extra Uterine Pregnancy</td>
            <td><input required type="number" min="0" name="laparo_preg_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="laparo_preg_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">3.2 Laparotomy for Uterine Rupture</td>
            <td><input required type="number" min="0" name="laparo_rupt_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="laparo_rupt_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">3.3 Laparotomy for Peritonitis</td>
            <td><input required type="number" min="0" name="laparo_perit_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="laparo_perit_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">3.4. Laparatomy for Myomectomy</td>
            <td><input required type="number" min="0" name="laparo_myomec_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="laparo_myomec_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">4.1 Vesico Vaginal Fistula Repaired</td>
            <td class="grey"></td>
            <td><input required type="number" min="0" name="vesico_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">4.2 Recto Vaginal Fistula Repaired</td>
            <td class="grey"></td>
            <td><input required type="number" min="0" name="recto_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">4.3 Ureteric Vaginal Fistula Repaired</td>
            <td class="grey"></td>
            <td><input required type="number" min="0" name="ureteric_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">5. Biopsy Curettage</td>
            <td class="grey"></td>
            <td><input required type="number" min="0" name="biopsy_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">6. Gyneco-Obstetrical Surgery Other</td>
            <td><input required type="number" min="0" name="go_other_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="go_other_plan" class="form-control"></td>
					</tr>

					<tr>
            <td rowspan="4">3</td>
            <td rowspan="4">Orthopedic</td>
            <td class="left">1. Amputations</td>
            <td><input required type="number" min="0" name="amputations_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="amputations_plan" class="form-control"></td>
            <td rowspan="4"><input required type="number" min="0" name="ortho_total" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">2. Osteosynthesis</td>
            <td><input required type="number" min="0" name="osteo_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="osteo_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">3. Fracture Without Implant</td>
            <td><input required type="number" min="0" name="fracture_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="fracture_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">4. Orthopedic Surgery Other</td>
            <td><input required type="number" min="0" name="ortho_other_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="ortho_other_plan" class="form-control"></td>
					</tr>

					<tr>
            <td rowspan="5">4</td>
            <td rowspan="5">Ophthalmologic</td>
            <td class="left">1. Glaucoma</td>
            <td><input required type="number" min="0" name="glaucoma_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="glaucoma_plan" class="form-control"></td>
            <td rowspan="5"><input required type="number" min="0" name="oph_total" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">2. Trachoma</td>
            <td><input required type="number" min="0" name="trachoma_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="trachoma_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">3. Cataract</td>
            <td><input required type="number" min="0" name="cataract_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="cataract_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">4. Trauma</td>
            <td><input required type="number" min="0" name="trauma_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="trauma_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">5. Ophthalmological Surgery Other</td>
            <td><input required type="number" min="0" name="oph_other_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="oph_other_plan" class="form-control"></td>
					</tr>

					<tr>
            <td rowspan="2">5</td>
            <td rowspan="2">Plastic Surgery</td>
            <td class="left">1. Cleft Palate, Cleft Lip</td>
            <td><input required type="number" min="0" name="cleft_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="cleft_plan" class="form-control"></td>
            <td rowspan="2"><input required type="number" min="0" name="plastic_total" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">2. Other Plastic Surgery</td>
            <td><input required type="number" min="0" name="plastic_other_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="plastic_other_plan" class="form-control"></td>
					</tr>

					<tr>
            <td rowspan="3">6</td>
            <td colspan="2">SURGICAL INTERVENTIONS TOTAL</td>
            <td><input required type="number" min="0" name="total_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="total_plan" class="form-control"></td>
            <td rowspan="3" class="grey"></td>
					</tr>
					<tr>
						<td rowspan="2">Of Which</td>
            <td class="left">1. Major Surgery</td>
            <td><input required type="number" min="0" name="major_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="major_plan" class="form-control"></td>
					</tr>
					<tr>
            <td class="left">2. Minor Surgery</td>
            <td><input required type="number" min="0" name="minor_urg" class="form-control"></td>
            <td><input required type="number" min="0" name="minor_plan" class="form-control"></td>
					</tr>

        </tbody>
      </table>
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
$('#dt').DataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
$('.dataTables_length').addClass('bs-select');
</script>
