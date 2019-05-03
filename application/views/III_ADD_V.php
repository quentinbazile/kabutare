<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mental Health</title>
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
        <table id="dt1">
          <caption>Summary</caption>
          <thead>
            <tr>
              <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
              <th class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
              <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="center">1</td>
              <td>Mental patients under follow up</td>
              <td><input required type="number" min="0" name="follow_up" class="form-control"></td>
              </tr>
            <tr>
              <td class="center">2</td>
              <td>Mental problems referred to higher level</td>
              <td><input required type="number" min="0" name="higher_level" class="form-control"></td>
              </tr>
            <tr>
              <td class="center">3</td>
              <td>Mental problems hospitalized</td>
              <td><input required type="number" min="0" name="hospitalized" class="form-control"></td>
            </tr>
          </tbody>
        </table>
      <table id="dt2">
        <caption>Diagnosis</caption>
        <thead>
          <tr>
            <th rowspan="3">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th rowspan="3" class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th colspan="3">New cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th colspan="3">Old cases<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
          </tr>
          <tr>
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
            <td>Anxiety disorders</td>
            <td><input required type="number" min="0" name="anxiety_nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="anxiety_nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="anxiety_nc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="anxiety_nc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="anxiety_nc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="anxiety_nc40f" class="form-control"></td>
            <td><input required type="number" min="0" name="anxiety_oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="anxiety_oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="anxiety_oc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="anxiety_oc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="anxiety_oc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="anxiety_oc40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">2</td>
            <td>Post-traumatic stress disorders</td>
            <td><input required type="number" min="0" name="stress_nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="stress_nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="stress_nc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="stress_nc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="stress_nc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="stress_nc40f" class="form-control"></td>
            <td><input required type="number" min="0" name="stress_oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="stress_oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="stress_oc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="stress_oc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="stress_oc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="stress_oc40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">3</td>
            <td>Schizophrenia and other psychoses</td>
            <td><input required type="number" min="0" name="schizo_nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="schizo_nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="schizo_nc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="schizo_nc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="schizo_nc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="schizo_nc40f" class="form-control"></td>
            <td><input required type="number" min="0" name="schizo_oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="schizo_oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="schizo_oc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="schizo_oc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="schizo_oc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="schizo_oc40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">4</td>
            <td>Somatoform disorders</td>
            <td><input required type="number" min="0" name="soma_nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="soma_nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="soma_nc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="soma_nc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="soma_nc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="soma_nc40f" class="form-control"></td>
            <td><input required type="number" min="0" name="soma_oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="soma_oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="soma_oc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="soma_oc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="soma_oc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="soma_oc40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">5</td>
            <td>Behavioral and emotional disorders with onset usually occurring in childhood and adolescence</td>
            <td><input required type="number" min="0" name="child_nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="child_nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="child_nc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="child_nc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="child_nc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="child_nc40f" class="form-control"></td>
            <td><input required type="number" min="0" name="child_oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="child_oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="child_oc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="child_oc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="child_oc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="child_oc40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">6</td>
            <td>Mental and behavioral disorder due to use of alcohol</td>
            <td><input required type="number" min="0" name="alcohol_nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="alcohol_nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="alcohol_nc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="alcohol_nc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="alcohol_nc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="alcohol_nc40f" class="form-control"></td>
            <td><input required type="number" min="0" name="alcohol_oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="alcohol_oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="alcohol_oc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="alcohol_oc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="alcohol_oc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="alcohol_oc40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">7</td>
            <td>Mental and behavioral disorder due to substance abuse</td>
            <td><input required type="number" min="0" name="drugs_nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="drugs_nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="drugs_nc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="drugs_nc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="drugs_nc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="drugs_nc40f" class="form-control"></td>
            <td><input required type="number" min="0" name="drugs_oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="drugs_oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="drugs_oc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="drugs_oc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="drugs_oc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="drugs_oc40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">8</td>
            <td>Depression</td>
            <td><input required type="number" min="0" name="dep_nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="dep_nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="dep_nc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="dep_nc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="dep_nc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="dep_nc40f" class="form-control"></td>
            <td><input required type="number" min="0" name="dep_oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="dep_oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="dep_oc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="dep_oc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="dep_oc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="dep_oc40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">9</td>
            <td>Suicide attempted</td>
            <td><input required type="number" min="0" name="suicid_att_nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_att_nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_att_nc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_att_nc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_att_nc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_att_nc40f" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_att_oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_att_oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_att_oc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_att_oc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_att_oc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_att_oc40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">10</td>
            <td>Suicide deaths</td>
            <td><input required type="number" min="0" name="suicid_d_nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_d_nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_d_nc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_d_nc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_d_nc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_d_nc40f" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_d_oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_d_oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_d_oc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_d_oc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_d_oc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="suicid_d_oc40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">11</td>
            <td>Maniac episode</td>
            <td><input required type="number" min="0" name="maniac_nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="maniac_nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="maniac_nc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="maniac_nc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="maniac_nc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="maniac_nc40f" class="form-control"></td>
            <td><input required type="number" min="0" name="maniac_oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="maniac_oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="maniac_oc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="maniac_oc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="maniac_oc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="maniac_oc40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">12</td>
            <td>Bipolar disorders</td>
            <td><input required type="number" min="0" name="bipolar_nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="bipolar_nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="bipolar_nc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="bipolar_nc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="bipolar_nc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="bipolar_nc40f" class="form-control"></td>
            <td><input required type="number" min="0" name="bipolar_oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="bipolar_oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="bipolar_oc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="bipolar_oc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="bipolar_oc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="bipolar_oc40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">13</td>
            <td>Other psychological / Mental behavioral disorders</td>
            <td><input required type="number" min="0" name="other_psy_nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="other_psy_nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="other_psy_nc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="other_psy_nc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="other_psy_nc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="other_psy_nc40f" class="form-control"></td>
            <td><input required type="number" min="0" name="other_psy_oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="other_psy_oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="other_psy_oc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="other_psy_oc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="other_psy_oc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="other_psy_oc40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">14</td>
            <td>Epilepsy</td>
            <td><input required type="number" min="0" name="epilepsy_nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="epilepsy_nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="epilepsy_nc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="epilepsy_nc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="epilepsy_nc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="epilepsy_nc40f" class="form-control"></td>
            <td><input required type="number" min="0" name="epilepsy_oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="epilepsy_oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="epilepsy_oc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="epilepsy_oc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="epilepsy_oc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="epilepsy_oc40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">15</td>
            <td>Other neurological disorders</td>
            <td><input required type="number" min="0" name="other_neuro_nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="other_neuro_nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="other_neuro_nc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="other_neuro_nc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="other_neuro_nc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="other_neuro_nc40f" class="form-control"></td>
            <td><input required type="number" min="0" name="other_neuro_oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="other_neuro_oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="other_neuro_oc39m" class="form-control"></td>
            <td><input required type="number" min="0" name="other_neuro_oc39f" class="form-control"></td>
            <td><input required type="number" min="0" name="other_neuro_oc40m" class="form-control"></td>
            <td><input required type="number" min="0" name="other_neuro_oc40f" class="form-control"></td>
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
$('#dt1').DataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
$('#dt2').DataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
$('.dataTables_length').addClass('bs-select');
</script>
