<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gender Based Violence</title>
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
      <table id="dt">
        <thead>
          <tr>
            <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th rowspan="2" class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th colspan="2">Age < 5<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th colspan="2">Age 5 to 9<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th colspan="2">Age 10 to 18<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th colspan="2">Age 19 to 24<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th colspan="2">Age > 25<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
        </thead>
        <tbody>
          <tr>
            <td class="center">1</td>
            <td>GBV victims with symptoms of sexual violence (new cases)</td>
            <td><input required type="number" min="0" name="sexual_violence_5m" class="form-control" value="<?php echo $table->sexual_violence_5m; ?>"></td>
            <td><input required type="number" min="0" name="sexual_violence_5f" class="form-control" value="<?php echo $table->sexual_violence_5f; ?>"></td>
            <td><input required type="number" min="0" name="sexual_violence_9m" class="form-control" value="<?php echo $table->sexual_violence_9m; ?>"></td>
            <td><input required type="number" min="0" name="sexual_violence_9f" class="form-control" value="<?php echo $table->sexual_violence_9f; ?>"></td>
            <td><input required type="number" min="0" name="sexual_violence_18m" class="form-control" value="<?php echo $table->sexual_violence_18m; ?>"></td>
            <td><input required type="number" min="0" name="sexual_violence_18f" class="form-control" value="<?php echo $table->sexual_violence_18f; ?>"></td>
            <td><input required type="number" min="0" name="sexual_violence_24m" class="form-control" value="<?php echo $table->sexual_violence_24m; ?>"></td>
            <td><input required type="number" min="0" name="sexual_violence_24f" class="form-control" value="<?php echo $table->sexual_violence_24f; ?>"></td>
            <td><input required type="number" min="0" name="sexual_violence_25m" class="form-control" value="<?php echo $table->sexual_violence_25m; ?>"></td>
            <td><input required type="number" min="0" name="sexual_violence_25f" class="form-control" value="<?php echo $table->sexual_violence_25f; ?>"></td>
          </tr>
          <tr>
            <td class="center">2</td>
            <td>GBV victims with symptoms of physical violence (new cases)</td>
            <td><input required type="number" min="0" name="physical_violence_5m" class="form-control" value="<?php echo $table->physical_violence_5m; ?>"></td>
            <td><input required type="number" min="0" name="physical_violence_5f" class="form-control" value="<?php echo $table->physical_violence_5f; ?>"></td>
            <td><input required type="number" min="0" name="physical_violence_9m" class="form-control" value="<?php echo $table->physical_violence_9m; ?>"></td>
            <td><input required type="number" min="0" name="physical_violence_9f" class="form-control" value="<?php echo $table->physical_violence_9f; ?>"></td>
            <td><input required type="number" min="0" name="physical_violence_18m" class="form-control" value="<?php echo $table->physical_violence_18m; ?>"></td>
            <td><input required type="number" min="0" name="physical_violence_18f" class="form-control" value="<?php echo $table->physical_violence_18f; ?>"></td>
            <td><input required type="number" min="0" name="physical_violence_24m" class="form-control" value="<?php echo $table->physical_violence_24m; ?>"></td>
            <td><input required type="number" min="0" name="physical_violence_24f" class="form-control" value="<?php echo $table->physical_violence_24f; ?>"></td>
            <td><input required type="number" min="0" name="physical_violence_25m" class="form-control" value="<?php echo $table->physical_violence_25m; ?>"></td>
            <td><input required type="number" min="0" name="physical_violence_25f" class="form-control" value="<?php echo $table->physical_violence_25f; ?>"></td>
          </tr>
          <tr>
            <td class="center">3</td>
            <td>GBV victims with symptoms of emotional violence (new cases)</td>
            <td><input required type="number" min="0" name="emotional_violence_5m" class="form-control" value="<?php echo $table->emotional_violence_5m; ?>"></td>
            <td><input required type="number" min="0" name="emotional_violence_5f" class="form-control" value="<?php echo $table->emotional_violence_5f; ?>"></td>
            <td><input required type="number" min="0" name="emotional_violence_9m" class="form-control" value="<?php echo $table->emotional_violence_9m; ?>"></td>
            <td><input required type="number" min="0" name="emotional_violence_9f" class="form-control" value="<?php echo $table->emotional_violence_9f; ?>"></td>
            <td><input required type="number" min="0" name="emotional_violence_18m" class="form-control" value="<?php echo $table->emotional_violence_18m; ?>"></td>
            <td><input required type="number" min="0" name="emotional_violence_18f" class="form-control" value="<?php echo $table->emotional_violence_18f; ?>"></td>
            <td><input required type="number" min="0" name="emotional_violence_24m" class="form-control" value="<?php echo $table->emotional_violence_24m; ?>"></td>
            <td><input required type="number" min="0" name="emotional_violence_24f" class="form-control" value="<?php echo $table->emotional_violence_24f; ?>"></td>
            <td><input required type="number" min="0" name="emotional_violence_25m" class="form-control" value="<?php echo $table->emotional_violence_25m; ?>"></td>
            <td><input required type="number" min="0" name="emotional_violence_25f" class="form-control" value="<?php echo $table->emotional_violence_25f; ?>"></td>
          </tr>
          <tr>
            <td class="center">4</td>
            <td>GBV victims with symptoms of economic violence (new cases)</td>
            <td><input required type="number" min="0" name="economic_violence_5m" class="form-control" value="<?php echo $table->economic_violence_5m; ?>"></td>
            <td><input required type="number" min="0" name="economic_violence_5f" class="form-control" value="<?php echo $table->economic_violence_5f; ?>"></td>
            <td><input required type="number" min="0" name="economic_violence_9m" class="form-control" value="<?php echo $table->economic_violence_9m; ?>"></td>
            <td><input required type="number" min="0" name="economic_violence_9f" class="form-control" value="<?php echo $table->economic_violence_9f; ?>"></td>
            <td><input required type="number" min="0" name="economic_violence_18m" class="form-control" value="<?php echo $table->economic_violence_18m; ?>"></td>
            <td><input required type="number" min="0" name="economic_violence_18f" class="form-control" value="<?php echo $table->economic_violence_18f; ?>"></td>
            <td><input required type="number" min="0" name="economic_violence_24m" class="form-control" value="<?php echo $table->economic_violence_24m; ?>"></td>
            <td><input required type="number" min="0" name="economic_violence_24f" class="form-control" value="<?php echo $table->economic_violence_24f; ?>"></td>
            <td><input required type="number" min="0" name="economic_violence_25m" class="form-control" value="<?php echo $table->economic_violence_25m; ?>"></td>
            <td><input required type="number" min="0" name="economic_violence_25f" class="form-control" value="<?php echo $table->economic_violence_25f; ?>"></td>
          </tr>
          <tr>
            <td class="center">5</td>
            <td>GBV victims referred for care to higher level health facility</td>
            <td><input required type="number" min="0" name="refered_higher_level_5m" class="form-control" value="<?php echo $table->refered_higher_level_5m; ?>"></td>
            <td><input required type="number" min="0" name="refered_higher_level_5f" class="form-control" value="<?php echo $table->refered_higher_level_5f; ?>"></td>
            <td><input required type="number" min="0" name="refered_higher_level_9m" class="form-control" value="<?php echo $table->refered_higher_level_9m; ?>"></td>
            <td><input required type="number" min="0" name="refered_higher_level_9f" class="form-control" value="<?php echo $table->refered_higher_level_9f; ?>"></td>
            <td><input required type="number" min="0" name="refered_higher_level_18m" class="form-control" value="<?php echo $table->refered_higher_level_18m; ?>"></td>
            <td><input required type="number" min="0" name="refered_higher_level_18f" class="form-control" value="<?php echo $table->refered_higher_level_18f; ?>"></td>
            <td><input required type="number" min="0" name="refered_higher_level_24m" class="form-control" value="<?php echo $table->refered_higher_level_24m; ?>"></td>
            <td><input required type="number" min="0" name="refered_higher_level_24f" class="form-control" value="<?php echo $table->refered_higher_level_24f; ?>"></td>
            <td><input required type="number" min="0" name="refered_higher_level_25m" class="form-control" value="<?php echo $table->refered_higher_level_25m; ?>"></td>
            <td><input required type="number" min="0" name="refered_higher_level_25f" class="form-control" value="<?php echo $table->refered_higher_level_25f; ?>"></td>
          </tr>
          <tr>
            <td class="center">6</td>
            <td>GBV victims referred to this facility by police</td>
            <td><input required type="number" min="0" name="refered_police_5m" class="form-control" value="<?php echo $table->refered_police_5m; ?>"></td>
            <td><input required type="number" min="0" name="refered_police_5f" class="form-control" value="<?php echo $table->refered_police_5f; ?>"></td>
            <td><input required type="number" min="0" name="refered_police_9m" class="form-control" value="<?php echo $table->refered_police_9m; ?>"></td>
            <td><input required type="number" min="0" name="refered_police_9f" class="form-control" value="<?php echo $table->refered_police_9f; ?>"></td>
            <td><input required type="number" min="0" name="refered_police_18m" class="form-control" value="<?php echo $table->refered_police_18m; ?>"></td>
            <td><input required type="number" min="0" name="refered_police_18f" class="form-control" value="<?php echo $table->refered_police_18f; ?>"></td>
            <td><input required type="number" min="0" name="refered_police_24m" class="form-control" value="<?php echo $table->refered_police_24m; ?>"></td>
            <td><input required type="number" min="0" name="refered_police_24f" class="form-control" value="<?php echo $table->refered_police_24f; ?>"></td>
            <td><input required type="number" min="0" name="refered_police_25m" class="form-control" value="<?php echo $table->refered_police_25m; ?>"></td>
            <td><input required type="number" min="0" name="refered_police_25f" class="form-control" value="<?php echo $table->refered_police_25f; ?>"></td>
          </tr>
          <tr>
            <td class="center">7</td>
            <td>GBV victims referred to this facility by community health workers</td>
            <td><input required type="number" min="0" name="refered_community_5m" class="form-control" value="<?php echo $table->refered_community_5m; ?>"></td>
            <td><input required type="number" min="0" name="refered_community_5f" class="form-control" value="<?php echo $table->refered_community_5f; ?>"></td>
            <td><input required type="number" min="0" name="refered_community_9m" class="form-control" value="<?php echo $table->refered_community_9m; ?>"></td>
            <td><input required type="number" min="0" name="refered_community_9f" class="form-control" value="<?php echo $table->refered_community_9f; ?>"></td>
            <td><input required type="number" min="0" name="refered_community_18m" class="form-control" value="<?php echo $table->refered_community_18m; ?>"></td>
            <td><input required type="number" min="0" name="refered_community_18f" class="form-control" value="<?php echo $table->refered_community_18f; ?>"></td>
            <td><input required type="number" min="0" name="refered_community_24m" class="form-control" value="<?php echo $table->refered_community_24m; ?>"></td>
            <td><input required type="number" min="0" name="refered_community_24f" class="form-control" value="<?php echo $table->refered_community_24f; ?>"></td>
            <td><input required type="number" min="0" name="refered_community_25m" class="form-control" value="<?php echo $table->refered_community_25m; ?>"></td>
            <td><input required type="number" min="0" name="refered_community_25f" class="form-control" value="<?php echo $table->refered_community_25f; ?>"></td>
          </tr>
          <tr>
            <td class="center">8</td>
            <td>GBV victims HIV + sero-conversion 3 months after exposure</td>
            <td><input required type="number" min="0" name="hiv_5m" class="form-control" value="<?php echo $table->hiv_5m; ?>"></td>
            <td><input required type="number" min="0" name="hiv_5f" class="form-control" value="<?php echo $table->hiv_5f; ?>"></td>
            <td><input required type="number" min="0" name="hiv_9m" class="form-control" value="<?php echo $table->hiv_9m; ?>"></td>
            <td><input required type="number" min="0" name="hiv_9f" class="form-control" value="<?php echo $table->hiv_9f; ?>"></td>
            <td><input required type="number" min="0" name="hiv_18m" class="form-control" value="<?php echo $table->hiv_18m; ?>"></td>
            <td><input required type="number" min="0" name="hiv_18f" class="form-control" value="<?php echo $table->hiv_18f; ?>"></td>
            <td><input required type="number" min="0" name="hiv_24m" class="form-control" value="<?php echo $table->hiv_24m; ?>"></td>
            <td><input required type="number" min="0" name="hiv_24f" class="form-control" value="<?php echo $table->hiv_24f; ?>"></td>
            <td><input required type="number" min="0" name="hiv_25m" class="form-control" value="<?php echo $table->hiv_25m; ?>"></td>
            <td><input required type="number" min="0" name="hiv_25f" class="form-control" value="<?php echo $table->hiv_25f; ?>"></td>
          </tr>
          <tr>
            <td class="center">9</td>
            <td>GBV victims with irreversible disabilities due to GBV</td>
            <td><input required type="number" min="0" name="disabilities_5m" class="form-control" value="<?php echo $table->disabilities_5m; ?>"></td>
            <td><input required type="number" min="0" name="disabilities_5f" class="form-control" value="<?php echo $table->disabilities_5f; ?>"></td>
            <td><input required type="number" min="0" name="disabilities_9m" class="form-control" value="<?php echo $table->disabilities_9m; ?>"></td>
            <td><input required type="number" min="0" name="disabilities_9f" class="form-control" value="<?php echo $table->disabilities_9f; ?>"></td>
            <td><input required type="number" min="0" name="disabilities_18m" class="form-control" value="<?php echo $table->disabilities_18m; ?>"></td>
            <td><input required type="number" min="0" name="disabilities_18f" class="form-control" value="<?php echo $table->disabilities_18f; ?>"></td>
            <td><input required type="number" min="0" name="disabilities_24m" class="form-control" value="<?php echo $table->disabilities_24m; ?>"></td>
            <td><input required type="number" min="0" name="disabilities_24f" class="form-control" value="<?php echo $table->disabilities_24f; ?>"></td>
            <td><input required type="number" min="0" name="disabilities_25m" class="form-control" value="<?php echo $table->disabilities_25m; ?>"></td>
            <td><input required type="number" min="0" name="disabilities_25f" class="form-control" value="<?php echo $table->disabilities_25f; ?>"></td>
          </tr>
          <tr>
            <td class="center">10</td>
            <td>GBV victims deaths</td>
            <td><input required type="number" min="0" name="deaths_5m" class="form-control" value="<?php echo $table->deaths_5m; ?>"></td>
            <td><input required type="number" min="0" name="deaths_5f" class="form-control" value="<?php echo $table->deaths_5f; ?>"></td>
            <td><input required type="number" min="0" name="deaths_9m" class="form-control" value="<?php echo $table->deaths_9m; ?>"></td>
            <td><input required type="number" min="0" name="deaths_9f" class="form-control" value="<?php echo $table->deaths_9f; ?>"></td>
            <td><input required type="number" min="0" name="deaths_18m" class="form-control" value="<?php echo $table->deaths_18m; ?>"></td>
            <td><input required type="number" min="0" name="deaths_18f" class="form-control" value="<?php echo $table->deaths_18f; ?>"></td>
            <td><input required type="number" min="0" name="deaths_24m" class="form-control" value="<?php echo $table->deaths_24m; ?>"></td>
            <td><input required type="number" min="0" name="deaths_24f" class="form-control" value="<?php echo $table->deaths_24f; ?>"></td>
            <td><input required type="number" min="0" name="deaths_25m" class="form-control" value="<?php echo $table->deaths_25m; ?>"></td>
            <td><input required type="number" min="0" name="deaths_25f" class="form-control" value="<?php echo $table->deaths_25f; ?>"></td>
          </tr>
          <tr>
            <td class="center">11</td>
            <td>GBV victims pregnant 4 weeks after exposure</td>
            <td class="grey"></td>
            <td class="grey"></td>
            <td class="grey"></td>
            <td><input required type="number" min="0" name="pregnant_9f" class="form-control" value="<?php echo $table->pregnant_9f; ?>"></td>
            <td class="grey"></td>
            <td><input required type="number" min="0" name="pregnant_18f" class="form-control" value="<?php echo $table->pregnant_18f; ?>"></td>
            <td class="grey"></td>
            <td><input required type="number" min="0" name="pregnant_24f" class="form-control" value="<?php echo $table->pregnant_24f; ?>"></td>
            <td class="grey"></td>
            <td><input required type="number" min="0" name="pregnant_25f" class="form-control" value="<?php echo $table->pregnant_25f; ?>"></td>
          </tr>
          <tr>
            <td class="center">12</td>
            <td>GBV victims received emergency contraception within 72h</td>
            <td class="grey"></td>
            <td class="grey"></td>
            <td class="grey"></td>
            <td><input required type="number" min="0" name="contraception_9f" class="form-control" value="<?php echo $table->contraception_9f; ?>"></td>
            <td class="grey"></td>
            <td><input required type="number" min="0" name="contraception_18f" class="form-control" value="<?php echo $table->contraception_18f; ?>"></td>
            <td class="grey"></td>
            <td><input required type="number" min="0" name="contraception_24f" class="form-control" value="<?php echo $table->contraception_24f; ?>"></td>
            <td class="grey"></td>
            <td><input required type="number" min="0" name="contraception_25f" class="form-control" value="<?php echo $table->contraception_25f; ?>"></td>
          </tr>
          <tr>
            <td class="center">13</td>
            <td>GBV victims received post exposure HIV prophylaxis within 48h</td>
            <td><input required type="number" min="0" name="exposure_hiv_5m" class="form-control" value="<?php echo $table->exposure_hiv_5m; ?>"></td>
            <td><input required type="number" min="0" name="exposure_hiv_5f" class="form-control" value="<?php echo $table->exposure_hiv_5f; ?>"></td>
            <td><input required type="number" min="0" name="exposure_hiv_9m" class="form-control" value="<?php echo $table->exposure_hiv_9m; ?>"></td>
            <td><input required type="number" min="0" name="exposure_hiv_9f" class="form-control" value="<?php echo $table->exposure_hiv_9f; ?>"></td>
            <td><input required type="number" min="0" name="exposure_hiv_18m" class="form-control" value="<?php echo $table->exposure_hiv_18m; ?>"></td>
            <td><input required type="number" min="0" name="exposure_hiv_18f" class="form-control" value="<?php echo $table->exposure_hiv_18f; ?>"></td>
            <td><input required type="number" min="0" name="exposure_hiv_24m" class="form-control" value="<?php echo $table->exposure_hiv_24m; ?>"></td>
            <td><input required type="number" min="0" name="exposure_hiv_24f" class="form-control" value="<?php echo $table->exposure_hiv_24f; ?>"></td>
            <td><input required type="number" min="0" name="exposure_hiv_25m" class="form-control" value="<?php echo $table->exposure_hiv_25m; ?>"></td>
            <td><input required type="number" min="0" name="exposure_hiv_25f" class="form-control" value="<?php echo $table->exposure_hiv_25f; ?>"></td>
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
