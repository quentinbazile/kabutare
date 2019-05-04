<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ophthalmology</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,500|Roboto:300,400,500,700">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/recherche14.css'); ?>" />
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
      <h2> A) Outpatient morbidity summary table </h2>
      <table id="A">
        <thead>
          <tr>
            <th rowspan="2" class="des">Outpatient visits<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
        </thead>
        <tbody>
          <tr>
            <td>New cases (NC)</td>
            <td><input type="number" min="0" name="nc5m" class="form-control"></td>
            <td><input type="number" min="0" name="nc5f" class="form-control"></td>
            <td><input type="number" min="0" name="nc19m" class="form-control"></td>
            <td><input type="number" min="0" name="nc19f" class="form-control"></td>
            <td><input type="number" min="0" name="nc20m" class="form-control"></td>
            <td><input type="number" min="0" name="nc20f" class="form-control"></td>
          </tr>
          <tr>
            <td>Old cases</td>
            <td><input type="number" min="0" name="oc5m" class="form-control"></td>
            <td><input type="number" min="0" name="oc5f" class="form-control"></td>
            <td><input type="number" min="0" name="oc19m" class="form-control"></td>
            <td><input type="number" min="0" name="oc19f" class="form-control"></td>
            <td><input type="number" min="0" name="oc20m" class="form-control"></td>
            <td><input type="number" min="0" name="oc20f" class="form-control"></td>
          </tr>
        </tbody>
      </table>
      <h2> B) Health insurance status of new cases </h2>
      <table id="B">
        <thead>
          <tr>
            <th class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Insured (Mutuelle or other insurance members)</td>
            <td><input type="number" min="0" name="insured" class="form-control"></td>
          </tr>
          <tr>
            <td>Non-paying new cases</td>
            <td><input type="number" min="0" name="nc_non_paying" class="form-control"></td>
          </tr>
          <tr>
            <td>Number of indigent new cases</td>
            <td><input type="number" min="0" name="nc_indigent" class="form-control"></td>
          </tr>
        </tbody>
      </table>
      <h2> C) Referrals </h2>
      <table id="C">
        <thead>
          <tr>
            <th class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Referred to other levels</td>
            <td><input type="number" min="0" name="other_levels" class="form-control"></td>
          </tr>
          <tr>
            <td>Counter referrals received</td>
            <td><input type="number" min="0" name="counter_received

              " class="form-control"></td>
          </tr>
        </tbody>
      </table>
        <h2> D) Origin of outpatients </h2>
      <table id="D">
        <thead>
          <tr>
            <th class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>New cases from the catchment area (zone)</td>
            <td><input type="number" min="0" name="nc_catch" class="form-control"></td>
          </tr>
          <tr>
            <td>New cases (hors zone)</td>
            <td><input type="number" min="0" name="nc" class="form-control"></td>
          </tr>
          <tr>
            <td>International patients (hors pays)</td>
            <td><input type="number" min="0" name="international" class="form-control"></td>
          </tr>
        </tbody>
      </table>
      <h2> Ga) Eye diseases </h2>
      <table id="Ga">
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
        </thead>
        <tbody>
          <tr>
            <td class="center">1</td>
            <td>Glaucoma</td>
            <td><input type="number" min="0" name="glaucoma_19m" class="form-control"></td>
            <td><input type="number" min="0" name="glaucoma_19f" class="form-control"></td>
            <td><input type="number" min="0" name="glaucoma_39m" class="form-control"></td>
            <td><input type="number" min="0" name="glaucoma_39f" class="form-control"></td>
            <td><input type="number" min="0" name="glaucoma_40m" class="form-control"></td>
            <td><input type="number" min="0" name="glaucoma_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">2</td>
            <td>Cataract</td>
            <td><input type="number" min="0" name="cataract_19m" class="form-control"></td>
            <td><input type="number" min="0" name="cataract_19f" class="form-control"></td>
            <td><input type="number" min="0" name="cataract_39m" class="form-control"></td>
            <td><input type="number" min="0" name="cataract_39f" class="form-control"></td>
            <td><input type="number" min="0" name="cataract_40m" class="form-control"></td>
            <td><input type="number" min="0" name="cataract_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">3</td>
            <td>Refractive error</td>
            <td><input type="number" min="0" name="refrac_error_19m" class="form-control"></td>
            <td><input type="number" min="0" name="refrac_error_19f" class="form-control"></td>
            <td><input type="number" min="0" name="refrac_error_39m" class="form-control"></td>
            <td><input type="number" min="0" name="refrac_error_39f" class="form-control"></td>
            <td><input type="number" min="0" name="refrac_error_40m" class="form-control"></td>
            <td><input type="number" min="0" name="refrac_error_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">4</td>
            <td>Diabetic retinopathy</td>
            <td><input type="number" min="0" name="diab_retino_19m" class="form-control"></td>
            <td><input type="number" min="0" name="diab_retino_19f" class="form-control"></td>
            <td><input type="number" min="0" name="diab_retino_39m" class="form-control"></td>
            <td><input type="number" min="0" name="diab_retino_39f" class="form-control"></td>
            <td><input type="number" min="0" name="diab_retino_40m" class="form-control"></td>
            <td><input type="number" min="0" name="diab_retino_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">5</td>
            <td>Conjunctivitis</td>
            <td><input type="number" min="0" name="conjunctivitis_19m" class="form-control"></td>
            <td><input type="number" min="0" name="conjunctivitis_19f" class="form-control"></td>
            <td><input type="number" min="0" name="conjunctivitis_39m" class="form-control"></td>
            <td><input type="number" min="0" name="conjunctivitis_39f" class="form-control"></td>
            <td><input type="number" min="0" name="conjunctivitis_40m" class="form-control"></td>
            <td><input type="number" min="0" name="conjunctivitis_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">6</td>
            <td>Pinguecula</td>
            <td><input type="number" min="0" name="pinguela_19m" class="form-control"></td>
            <td><input type="number" min="0" name="pinguela_19f" class="form-control"></td>
            <td><input type="number" min="0" name="pinguela_39m" class="form-control"></td>
            <td><input type="number" min="0" name="pinguela_39f" class="form-control"></td>
            <td><input type="number" min="0" name="pinguela_40m" class="form-control"></td>
            <td><input type="number" min="0" name="pinguela_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">7</td>
            <td>Uveitis</td>
            <td><input type="number" min="0" name="uveitis_19m" class="form-control"></td>
            <td><input type="number" min="0" name="uveitis_19f" class="form-control"></td>
            <td><input type="number" min="0" name="uveitis_39m" class="form-control"></td>
            <td><input type="number" min="0" name="uveitis_39f" class="form-control"></td>
            <td><input type="number" min="0" name="uveitis_40m" class="form-control"></td>
            <td><input type="number" min="0" name="uveitis_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">8</td>
            <td>Eye trauma</td>
            <td><input type="number" min="0" name="eye_trauma_19m" class="form-control"></td>
            <td><input type="number" min="0" name="eye_trauma_19f" class="form-control"></td>
            <td><input type="number" min="0" name="eye_trauma_39m" class="form-control"></td>
            <td><input type="number" min="0" name="eye_trauma_39f" class="form-control"></td>
            <td><input type="number" min="0" name="eye_trauma_40m" class="form-control"></td>
            <td><input type="number" min="0" name="eye_trauma_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">9</td>
            <td>Eye problem other</td>
            <td><input type="number" min="0" name="eye_pb_19m" class="form-control"></td>
            <td><input type="number" min="0" name="eye_pb_19f" class="form-control"></td>
            <td><input type="number" min="0" name="eye_pb_39m" class="form-control"></td>
            <td><input type="number" min="0" name="eye_pb_39f" class="form-control"></td>
            <td><input type="number" min="0" name="eye_pb_40m" class="form-control"></td>
            <td><input type="number" min="0" name="eye_pb_40f" class="form-control"></td>
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
$('#A').DataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
$('#B').DataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
$('#C').DataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
$('#D').DataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
$('#Ga').DataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
$('.dataTables_length').addClass('bs-select');
</script>
