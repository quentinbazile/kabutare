<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Outpatient Consultations</title>
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

      <table id="dt1">
        <caption> A)Outpatient morbidity summary table </caption>
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
            <td><input required type="number" min="0" name="nc5m" class="form-control"></td>
            <td><input required type="number" min="0" name="nc5f" class="form-control"></td>
            <td><input required type="number" min="0" name="nc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="nc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="nc20m" class="form-control"></td>
            <td><input required type="number" min="0" name="nc20f" class="form-control"></td>
          </tr>
          <tr>
            <td>Old cases</td>
            <td><input required type="number" min="0" name="oc5m" class="form-control"></td>
            <td><input required type="number" min="0" name="oc5f" class="form-control"></td>
            <td><input required type="number" min="0" name="oc19m" class="form-control"></td>
            <td><input required type="number" min="0" name="oc19f" class="form-control"></td>
            <td><input required type="number" min="0" name="oc20m" class="form-control"></td>
            <td><input required type="number" min="0" name="oc20f" class="form-control"></td>
          </tr>
        </tbody>
      </table>
      <table id="dt2">
        <caption> B)Health insurance status of new cases </caption>
        <thead>
          <tr>
            <th class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Insured (Mutuelle or other insurance members)</td>
            <td><input required type="number" min="0" name="insured" class="form-control"></td>
          </tr>
          <tr>
            <td>Non-paying new cases</td>
            <td><input required type="number" min="0" name="nc_non_paying" class="form-control"></td>
          </tr>
          <tr>
            <td>Number of indigent new cases</td>
            <td><input required type="number" min="0" name="nc_indigent" class="form-control"></td>
          </tr>
        </tbody>
      </table>
      <table id="dt3">
        <caption> C)Referrals </caption>
        <thead>
          <tr>
            <th class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Referred to other levels</td>
            <td><input required type="number" min="0" name="other_levels" class="form-control"></td>
          </tr>
          <tr>
            <td>Counter referrals received</td>
            <td><input required type="number" min="0" name="counter_received

              " class="form-control"></td>
          </tr>
        </tbody>
      </table>
      <table id="dt4">
        <caption> D)Origin of outpatients </caption>
        <thead>
          <tr>
            <th class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th >Total<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>New cases from the catchment area (zone)</td>
            <td><input required type="number" min="0" name="nc_catch" class="form-control"></td>
          </tr>
          <tr>
            <td>New cases (hors zone)</td>
            <td><input required type="number" min="0" name="nc" class="form-control"></td>
          </tr>
          <tr>
            <td>International patients (hors pays)</td>
            <td><input required type="number" min="0" name="international" class="form-control"></td>
          </tr>
        </tbody>
      </table>
      <table id="dt5">
        <caption> E)New cases of priority health problems in General OPD </caption>
        <thead>
          <tr>
            <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th rowspan="2" class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
            <td class="center">1</td>
            <td>Diarrhea with dehydration</td>
            <td><input required type="number" min="0" name="diar_w_dehy_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="diar_w_dehy_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="diar_w_dehy_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="diar_w_dehy_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="diar_w_dehy_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="diar_w_dehy_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">2</td>
            <td>Diarrhea no dehydration</td>
            <td><input required type="number" min="0" name="diar_no_dehy_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="diar_no_dehy_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="diar_no_dehy_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="diar_no_dehy_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="diar_no_dehy_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="diar_no_dehy_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">3</td>
            <td>Bloody diarrhea</td>
            <td><input required type="number" min="0" name="blood_diar_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="blood_diar_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="blood_diar_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="blood_diar_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="blood_diar_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="blood_diar_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">4</td>
            <td>Food poisoning</td>
            <td><input required type="number" min="0" name="food_poison_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="food_poison_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="food_poison_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="food_poison_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="food_poison_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="food_poison_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">5</td>
            <td>Ear infections</td>
            <td><input required type="number" min="0" name="ear-infect_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="ear-infect_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="ear-infect_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="ear-infect_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="ear-infect_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="ear-infect_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">6</td>
            <td>Schistosomiasis</td>
            <td><input required type="number" min="0" name="schisto_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="schisto_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="schisto_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="schisto_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="schisto_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="schisto_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">7</td>
            <td>Ascarislumbricoides</td>
            <td><input required type="number" min="0" name="ascaris_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="ascaris_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="ascaris_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="ascaris_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="ascaris_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="ascaris_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">8</td>
            <td>Trichuristrichiura</td>
            <td><input required type="number" min="0" name="trichu_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="trichu_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="trichu_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="trichu_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="trichu_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="trichu_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">9</td>
            <td>Hookworm</td>
            <td><input required type="number" min="0" name="hook_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="hook_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="hook_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="hook_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="hook_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="hook_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">10</td>
            <td>Entamoeba</td>
            <td><input required type="number" min="0" name="entam_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="entam_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="entam_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="entam_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="entam_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="entam_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">11</td>
            <td>Giardia</td>
            <td><input required type="number" min="0" name="giardia_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="giardia_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="giardia_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="giardia_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="giardia_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="giardia_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">12</td>
            <td>Taenia</td>
            <td><input required type="number" min="0" name="taenia_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="taenia_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="taenia_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="taenia_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="taenia_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="taenia_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">13</td>
            <td>Malaria simple (not pregnant)</td>
            <td><input required type="number" min="0" name="malaria_s_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="malaria_s_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="malaria_s_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="malaria_s_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="malaria_s_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="malaria_s_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">14</td>
            <td>Malaria with minor digestive symptoms (not pregnant)</td>
            <td><input required type="number" min="0" name="malaria_dig_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="malaria_dig_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="malaria_dig_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="malaria_dig_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="malaria_dig_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="malaria_dig_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">15</td>
            <td>Herpes simpplex infections</td>
            <td><input required type="number" min="0" name="herpes_s_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="herpes_s_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="herpes_s_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="herpes_s_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="herpes_s_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="herpes_s_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">16</td>
            <td>Meningitis suspected</td>
            <td><input required type="number" min="0" name="mening_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="mening_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="mening_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="mening_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="mening_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="mening_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">17</td>
            <td>Pneumonia simple</td>
            <td><input required type="number" min="0" name="pneumonia_simp_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="pneumonia_simp_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="pneumonia_simp_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="pneumonia_simp_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="pneumonia_simp_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="pneumonia_simp_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">18</td>
            <td>Pneumonia severe</td>
            <td><input required type="number" min="0" name="pneumonia_sev_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="pneumonia_sev_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="pneumonia_sev_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="pneumonia_sev_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="pneumonia_sev_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="pneumonia_sev_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">19</td>
            <td>Influenza/Syndrome gripal</td>
            <td><input required type="number" min="0" name="grip_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="grip_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="grip_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="grip_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="grip_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="grip_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">20</td>
            <td>Respiratory infections acute (ARI) other</td>
            <td><input required type="number" min="0" name="ari_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="ari_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="ari_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="ari_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="ari_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="ari_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">21</td>
            <td>Gastritis and duodenitis</td>
            <td><input required type="number" min="0" name="gast_duoden_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="gast_duoden_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="gast_duoden_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="gast_duoden_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="gast_duoden_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="gast_duoden_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">22</td>
            <td>Abscesses</td>
            <td><input required type="number" min="0" name="absces_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="absces_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="absces_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="absces_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="absces_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="absces_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">23</td>
            <td>Ulcers of skin</td>
            <td><input required type="number" min="0" name="ulcers_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="ulcers_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="ulcers_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="ulcers_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="ulcers_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="ulcers_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">24</td>
            <td>Skin infection scabies</td>
            <td><input required type="number" min="0" name="scabies_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="scabies_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="scabies_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="scabies_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="scabies_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="scabies_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">25</td>
            <td>Skin infection fungal (mycoses) superficial</td>
            <td><input required type="number" min="0" name="mycoses_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="mycoses_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="mycoses_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="mycoses_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="mycoses_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="mycoses_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">26</td>
            <td>Skin infections other</td>
            <td><input required type="number" min="0" name="si_others_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="si_others_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="si_others_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="si_others_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="si_others_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="si_others_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">27</td>
            <td>Urinary tract infections</td>
            <td><input required type="number" min="0" name="urinary_ti_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="urinary_ti_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="urinary_ti_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="urinary_ti_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="urinary_ti_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="urinary_ti_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">28</td>
            <td>Anemia (confirmed)</td>
            <td><input required type="number" min="0" name="anemia_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="anemia_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="anemia_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="anemia_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="anemia_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="anemia_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">29</td>
            <td>Measles suspected</td>
            <td><input required type="number" min="0" name="meales_susp_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="meales_susp_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="meales_susp_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="meales_susp_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="meales_susp_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="meales_susp_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">30</td>
            <td>Measles confirmed cases</td>
            <td><input required type="number" min="0" name="meales_conf_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="meales_conf_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="meales_conf_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="meales_conf_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="meales_conf_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="meales_conf_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">31</td>
            <td>Rubella confirmed cases</td>
            <td><input required type="number" min="0" name="rubella_conf_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="rubella_conf_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="rubella_conf_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="rubella_conf_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="rubella_conf_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="rubella_conf_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">32</td>
            <td>Acute flaccid paralysis cases</td>
            <td><input required type="number" min="0" name="flaccid_paraly_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="flaccid_paraly_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="flaccid_paraly_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="flaccid_paraly_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="flaccid_paraly_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="flaccid_paraly_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">33</td>
            <td>Tetanus</td>
            <td><input required type="number" min="0" name="tetanus_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="tetanus_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="tetanus_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="tetanus_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="tetanus_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="tetanus_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">34</td>
            <td>Viral hepatitis (A, B, Chronic & others)</td>
            <td><input required type="number" min="0" name="hepatitis_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="hepatitis_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="hepatitis_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="hepatitis_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="hepatitis_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="hepatitis_20f" class="form-control"></td>
          </tr>
        </tbody>
      </table>
      <table id="dt6">
        <caption> F)New cases of HIV/AIDS/and Non-Communicable diseases </caption>
        <thead>
          <tr>
            <th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th rowspan="2" class="des">Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
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
            <td class="center">1</td>
            <td>Fractures</td>
            <td><input required type="number" min="0" name="fractures_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="fractures_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="fractures_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="fractures_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="fractures_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="fractures_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">2</td>
            <td>Physical traumas, other than fractures</td>
            <td><input required type="number" min="0" name="phys_traumas_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="phys_traumas_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="phys_traumas_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="phys_traumas_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="phys_traumas_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="phys_traumas_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">3</td>
            <td>Bone and joint disorder, other than fractures</td>
            <td><input required type="number" min="0" name="bone_joint_disord_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="bone_joint_disord_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="bone_joint_disord_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="bone_joint_disord_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="bone_joint_disord_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="bone_joint_disord_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">4</td>
            <td>Gynecological problems</td>
            <td class="grey"></td>
            <td class="grey"></td>
            <td class="grey"></td>
            <td><input required type="number" min="0" name="gyneco_pb_19f" class="form-control"></td>
            <td class="grey"></td>
            <td><input required type="number" min="0" name="gyneco_pb_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">5</td>
            <td>AIDS clinical</td>
            <td><input required type="number" min="0" name="aids_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="aids_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="aids_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="aids_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="aids_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="aids_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">6</td>
            <td>Skin infection opportunistic</td>
            <td><input required type="number" min="0" name="si_opport_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="si_opport_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="si_opport_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="si_opport_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="si_opport_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="si_opport_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">7</td>
            <td>Herpes zoster (zona/shingles)</td>
            <td><input required type="number" min="0" name="herpes_z_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="herpes_z_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="herpes_z_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="herpes_z_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="herpes_z_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="herpes_z_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">8</td>
            <td>Candidiasis oral</td>
            <td><input required type="number" min="0" name="cand_oral_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="cand_oral_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="cand_oral_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="cand_oral_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="cand_oral_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="cand_oral_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">9</td>
            <td>Fever chronic (>1 month)</td>
            <td><input required type="number" min="0" name="fever_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="fever_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="fever_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="fever_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="fever_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="fever_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">10</td>
            <td>Diarrhea chronic opportunistic infections</td>
            <td><input required type="number" min="0" name="diar_chro_opp_infect_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="diar_chro_opp_infect_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="diar_chro_opp_infect_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="diar_chro_opp_infect_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="diar_chro_opp_infect_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="diar_chro_opp_infect_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">11</td>
            <td>Needle stick-injuries (or other health worker HIV exposure)</td>
            <td><input required type="number" min="0" name="needle_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="needle_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="needle_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="needle_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="needle_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="needle_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">12</td>
            <td>Goitre</td>
            <td><input required type="number" min="0" name="goitre_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="goitre_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="goitre_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="goitre_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="goitre_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="goitre_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">13</td>
            <td>Vitamin A deficiency - Night blindness</td>
            <td><input required type="number" min="0" name="va_def_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="va_def_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="va_def_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="va_def_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="va_def_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="va_def_20f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">14</td>
            <td>Leprosy (MB + PB)</td>
            <td><input required type="number" min="0" name="leprosy_5m" class="form-control"></td>
            <td><input required type="number" min="0" name="leprosy_5f" class="form-control"></td>
            <td><input required type="number" min="0" name="leprosy_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="leprosy_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="leprosy_20m" class="form-control"></td>
            <td><input required type="number" min="0" name="leprosy_20f" class="form-control"></td>
          </tr>
        </tbody>
      </table>
      <table id="dt7">
        <caption> G1)Eye diseases </caption>
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
            <td><input required type="number" min="0" name="glaucoma_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="glaucoma_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="glaucoma_39m" class="form-control"></td>
            <td><input required type="number" min="0" name="glaucoma_39f" class="form-control"></td>
            <td><input required type="number" min="0" name="glaucoma_40m" class="form-control"></td>
            <td><input required type="number" min="0" name="glaucoma_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">2</td>
            <td>Cataract</td>
            <td><input required type="number" min="0" name="cataract_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="cataract_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="cataract_39m" class="form-control"></td>
            <td><input required type="number" min="0" name="cataract_39f" class="form-control"></td>
            <td><input required type="number" min="0" name="cataract_40m" class="form-control"></td>
            <td><input required type="number" min="0" name="cataract_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">3</td>
            <td>Refractive error</td>
            <td><input required type="number" min="0" name="refrac_error_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="refrac_error_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="refrac_error_39m" class="form-control"></td>
            <td><input required type="number" min="0" name="refrac_error_39f" class="form-control"></td>
            <td><input required type="number" min="0" name="refrac_error_40m" class="form-control"></td>
            <td><input required type="number" min="0" name="refrac_error_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">4</td>
            <td>Diabetic retinopathy</td>
            <td><input required type="number" min="0" name="diab_retino_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="diab_retino_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="diab_retino_39m" class="form-control"></td>
            <td><input required type="number" min="0" name="diab_retino_39f" class="form-control"></td>
            <td><input required type="number" min="0" name="diab_retino_40m" class="form-control"></td>
            <td><input required type="number" min="0" name="diab_retino_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">5</td>
            <td>Conjunctivitis</td>
            <td><input required type="number" min="0" name="conjunctivitis_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="conjunctivitis_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="conjunctivitis_39m" class="form-control"></td>
            <td><input required type="number" min="0" name="conjunctivitis_39f" class="form-control"></td>
            <td><input required type="number" min="0" name="conjunctivitis_40m" class="form-control"></td>
            <td><input required type="number" min="0" name="conjunctivitis_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">6</td>
            <td>Pinguecula</td>
            <td><input required type="number" min="0" name="pinguela_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="pinguela_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="pinguela_39m" class="form-control"></td>
            <td><input required type="number" min="0" name="pinguela_39f" class="form-control"></td>
            <td><input required type="number" min="0" name="pinguela_40m" class="form-control"></td>
            <td><input required type="number" min="0" name="pinguela_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">7</td>
            <td>Uveitis</td>
            <td><input required type="number" min="0" name="uveitis_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="uveitis_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="uveitis_39m" class="form-control"></td>
            <td><input required type="number" min="0" name="uveitis_39f" class="form-control"></td>
            <td><input required type="number" min="0" name="uveitis_40m" class="form-control"></td>
            <td><input required type="number" min="0" name="uveitis_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">8</td>
            <td>Eye trauma</td>
            <td><input required type="number" min="0" name="eye_trauma_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="eye_trauma_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="eye_trauma_39m" class="form-control"></td>
            <td><input required type="number" min="0" name="eye_trauma_39f" class="form-control"></td>
            <td><input required type="number" min="0" name="eye_trauma_40m" class="form-control"></td>
            <td><input required type="number" min="0" name="eye_trauma_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">9</td>
            <td>Eye problem other</td>
            <td><input required type="number" min="0" name="eye_pb_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="eye_pb_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="eye_pb_39m" class="form-control"></td>
            <td><input required type="number" min="0" name="eye_pb_39f" class="form-control"></td>
            <td><input required type="number" min="0" name="eye_pb_40m" class="form-control"></td>
            <td><input required type="number" min="0" name="eye_pb_40f" class="form-control"></td>
          </tr>
        </tbody>
      </table>
      <table id="dt8">
        <caption> G2)Oral diseases </caption>
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
            <td class="center">10</td>
            <td>Dental caries</td>
            <td><input required type="number" min="0" name="dent_caries_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="dent_caries_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="dent_caries_39m" class="form-control"></td>
            <td><input required type="number" min="0" name="dent_caries_39f" class="form-control"></td>
            <td><input required type="number" min="0" name="dent_caries_40m" class="form-control"></td>
            <td><input required type="number" min="0" name="dent_caries_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">11</td>
            <td>Periodontal disease</td>
            <td><input required type="number" min="0" name="perio_diseas_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="perio_diseas_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="perio_diseas_39m" class="form-control"></td>
            <td><input required type="number" min="0" name="perio_diseas_39f" class="form-control"></td>
            <td><input required type="number" min="0" name="perio_diseas_40m" class="form-control"></td>
            <td><input required type="number" min="0" name="perio_diseas_40f" class="form-control"></td>
          </tr>
          <tr>
            <td class="center">12</td>
            <td>Other teeth and gum infections</td>
            <td><input required type="number" min="0" name="other_teeth_19m" class="form-control"></td>
            <td><input required type="number" min="0" name="other_teeth_19f" class="form-control"></td>
            <td><input required type="number" min="0" name="other_teeth_39m" class="form-control"></td>
            <td><input required type="number" min="0" name="other_teeth_39f" class="form-control"></td>
            <td><input required type="number" min="0" name="other_teeth_40m" class="form-control"></td>
            <td><input required type="number" min="0" name="other_teeth_40f" class="form-control"></td>
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
$('#dt3').DataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
$('#dt4').DataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
$('#dt5').DataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
$('#dt6').DataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
$('#dt7').DataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
$('#dt8').DataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
$('.dataTables_length').addClass('bs-select');
</script>
