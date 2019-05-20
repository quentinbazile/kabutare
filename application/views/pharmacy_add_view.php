<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Pharmacy</title>
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
			<h2>Pharmacy - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('add_date'))); ?></h2>
			<div>
        <form method="post" action="" class="form-inline">
					<div class="row">
            <h4>Stock of tracer drugs</h4>
            <br>
			      <table id="A26" class="center">
              <thead>
                <tr>
                  <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th>Quantity at the beginning of the month<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th>Quantity received<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th>Quantity dispensed<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th>Quantity expired/damaged/lost<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th>Quantity at end of month<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
			            <th>Days of stock out<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="left">Amoxycillin syrup 125 mg/5ml</td>
									<td><input type="number" min="0" name="amoxycillin_begin" class="form-control"></td>
									<td><input type="number" min="0" name="amoxycillin_received" class="form-control"></td>
									<td><input type="number" min="0" name="amoxycillin_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="amoxycillin_expired" class="form-control"></td>
									<td><input type="number" min="0" name="amoxycillin_end" class="form-control"></td>
									<td><input type="number" min="0" name="amoxycillin_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="left">Ampicillin vial 500 mg</td>
									<td><input type="number" min="0" name="ampicillin_begin" class="form-control"></td>
									<td><input type="number" min="0" name="ampicillin_received" class="form-control"></td>
									<td><input type="number" min="0" name="ampicillin_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="ampicillin_expired" class="form-control"></td>
									<td><input type="number" min="0" name="ampicillin_end" class="form-control"></td>
									<td><input type="number" min="0" name="ampicillin_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="left">Doxycyclin tab 100 mg</td>
									<td><input type="number" min="0" name="doxycyclin_begin" class="form-control"></td>
									<td><input type="number" min="0" name="doxycyclin_received" class="form-control"></td>
									<td><input type="number" min="0" name="doxycyclin_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="doxycyclin_expired" class="form-control"></td>
									<td><input type="number" min="0" name="doxycyclin_end" class="form-control"></td>
									<td><input type="number" min="0" name="doxycyclin_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="left">Cloxacillin tab 250 mg</td>
									<td><input type="number" min="0" name="cloxacillin_begin" class="form-control"></td>
									<td><input type="number" min="0" name="cloxacillin_received" class="form-control"></td>
									<td><input type="number" min="0" name="cloxacillin_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="cloxacillin_expired" class="form-control"></td>
									<td><input type="number" min="0" name="cloxacillin_end" class="form-control"></td>
									<td><input type="number" min="0" name="cloxacillin_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td class="left">Mebendazole syrup 100 mg/5ml</td>
									<td><input type="number" min="0" name="mebendazole_begin" class="form-control"></td>
									<td><input type="number" min="0" name="mebendazole_received" class="form-control"></td>
									<td><input type="number" min="0" name="mebendazole_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="mebendazole_expired" class="form-control"></td>
									<td><input type="number" min="0" name="mebendazole_end" class="form-control"></td>
									<td><input type="number" min="0" name="mebendazole_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td class="left">Gentamycin vial 40 mg/ml</td>
									<td><input type="number" min="0" name="gentamycin_begin" class="form-control"></td>
									<td><input type="number" min="0" name="gentamycin_received" class="form-control"></td>
									<td><input type="number" min="0" name="gentamycin_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="gentamycin_expired" class="form-control"></td>
									<td><input type="number" min="0" name="gentamycin_end" class="form-control"></td>
									<td><input type="number" min="0" name="gentamycin_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td class="left">Metronidazole vial 500 mg/ml</td>
									<td><input type="number" min="0" name="metronidazole_vial_begin" class="form-control"></td>
									<td><input type="number" min="0" name="metronidazole_vial_received" class="form-control"></td>
									<td><input type="number" min="0" name="metronidazole_vial_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="metronidazole_vial_expired" class="form-control"></td>
									<td><input type="number" min="0" name="metronidazole_vial_end" class="form-control"></td>
									<td><input type="number" min="0" name="metronidazole_vial_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td class="left">Metronidazole syrup 125 mg/5ml</td>
									<td><input type="number" min="0" name="metronidazole_syrup_begin" class="form-control"></td>
									<td><input type="number" min="0" name="metronidazole_syrup_received" class="form-control"></td>
									<td><input type="number" min="0" name="metronidazole_syrup_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="metronidazole_syrup_expired" class="form-control"></td>
									<td><input type="number" min="0" name="metronidazole_syrup_end" class="form-control"></td>
									<td><input type="number" min="0" name="metronidazole_syrup_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td class="left">Paracetamol tab 500 mg</td>
									<td><input type="number" min="0" name="paracetamol_begin" class="form-control"></td>
									<td><input type="number" min="0" name="paracetamol_received" class="form-control"></td>
									<td><input type="number" min="0" name="paracetamol_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="paracetamol_expired" class="form-control"></td>
									<td><input type="number" min="0" name="paracetamol_end" class="form-control"></td>
									<td><input type="number" min="0" name="paracetamol_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td class="left">Ketamine vial 50 mg/ml</td>
									<td><input type="number" min="0" name="ketamine_begin" class="form-control"></td>
									<td><input type="number" min="0" name="ketamine_received" class="form-control"></td>
									<td><input type="number" min="0" name="ketamine_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="ketamine_expired" class="form-control"></td>
									<td><input type="number" min="0" name="ketamine_end" class="form-control"></td>
									<td><input type="number" min="0" name="ketamine_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>11</td>
                  <td class="left">Ocytocin vial 5 ui</td>
									<td><input type="number" min="0" name="ocytocin_begin" class="form-control"></td>
									<td><input type="number" min="0" name="ocytocin_received" class="form-control"></td>
									<td><input type="number" min="0" name="ocytocin_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="ocytocin_expired" class="form-control"></td>
									<td><input type="number" min="0" name="ocytocin_end" class="form-control"></td>
									<td><input type="number" min="0" name="ocytocin_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>12</td>
                  <td class="left">Lidocaine vial 2%</td>
									<td><input type="number" min="0" name="lidocaine_begin" class="form-control"></td>
									<td><input type="number" min="0" name="lidocaine_received" class="form-control"></td>
									<td><input type="number" min="0" name="lidocaine_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="lidocaine_expired" class="form-control"></td>
									<td><input type="number" min="0" name="lidocaine_end" class="form-control"></td>
									<td><input type="number" min="0" name="lidocaine_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>13</td>
                  <td class="left">Propanolol tab 40 mg</td>
									<td><input type="number" min="0" name="propanolol_begin" class="form-control"></td>
									<td><input type="number" min="0" name="propanolol_received" class="form-control"></td>
									<td><input type="number" min="0" name="propanolol_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="propanolol_expired" class="form-control"></td>
									<td><input type="number" min="0" name="propanolol_end" class="form-control"></td>
									<td><input type="number" min="0" name="propanolol_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>14</td>
                  <td class="left">Tetracycline ointment</td>
									<td><input type="number" min="0" name="tetracycline_begin" class="form-control"></td>
									<td><input type="number" min="0" name="tetracycline_received" class="form-control"></td>
									<td><input type="number" min="0" name="tetracycline_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="tetracycline_expired" class="form-control"></td>
									<td><input type="number" min="0" name="tetracycline_end" class="form-control"></td>
									<td><input type="number" min="0" name="tetracycline_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>15</td>
                  <td class="left">Diazepan tab 5 mg</td>
									<td><input type="number" min="0" name="diazepan_tab_begin" class="form-control"></td>
									<td><input type="number" min="0" name="diazepan_tab_received" class="form-control"></td>
									<td><input type="number" min="0" name="diazepan_tab_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="diazepan_tab_expired" class="form-control"></td>
									<td><input type="number" min="0" name="diazepan_tab_end" class="form-control"></td>
									<td><input type="number" min="0" name="diazepan_tab_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>16</td>
                  <td class="left">Diazepan vial 5 mg/ml</td>
									<td><input type="number" min="0" name="diazepan_vial_begin" class="form-control"></td>
									<td><input type="number" min="0" name="diazepan_vial_received" class="form-control"></td>
									<td><input type="number" min="0" name="diazepan_vial_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="diazepan_vial_expired" class="form-control"></td>
									<td><input type="number" min="0" name="diazepan_vial_end" class="form-control"></td>
									<td><input type="number" min="0" name="diazepan_vial_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>17</td>
                  <td class="left">Phenobarbital tab 30 mg</td>
									<td><input type="number" min="0" name="phenobarbital_begin" class="form-control"></td>
									<td><input type="number" min="0" name="phenobarbital_received" class="form-control"></td>
									<td><input type="number" min="0" name="phenobarbital_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="phenobarbital_expired" class="form-control"></td>
									<td><input type="number" min="0" name="phenobarbital_end" class="form-control"></td>
									<td><input type="number" min="0" name="phenobarbital_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>18</td>
                  <td class="left">Valproic acid tab 300 mg</td>
									<td><input type="number" min="0" name="valproic_begin" class="form-control"></td>
									<td><input type="number" min="0" name="valproic_received" class="form-control"></td>
									<td><input type="number" min="0" name="valproic_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="valproic_expired" class="form-control"></td>
									<td><input type="number" min="0" name="valproic_end" class="form-control"></td>
									<td><input type="number" min="0" name="valproic_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>19</td>
                  <td class="left">Salbutamol tab 4 mg</td>
									<td><input type="number" min="0" name="salbutamol_begin" class="form-control"></td>
									<td><input type="number" min="0" name="salbutamol_received" class="form-control"></td>
									<td><input type="number" min="0" name="salbutamol_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="salbutamol_expired" class="form-control"></td>
									<td><input type="number" min="0" name="salbutamol_end" class="form-control"></td>
									<td><input type="number" min="0" name="salbutamol_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>20</td>
                  <td class="left">Iron sulfate + Folic acid tab 200 mh/0.25mg</td>
									<td><input type="number" min="0" name="iron_folic_begin" class="form-control"></td>
									<td><input type="number" min="0" name="iron_folic_received" class="form-control"></td>
									<td><input type="number" min="0" name="iron_folic_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="iron_folic_expired" class="form-control"></td>
									<td><input type="number" min="0" name="iron_folic_end" class="form-control"></td>
									<td><input type="number" min="0" name="iron_folic_stock" class="form-control"></td>
                </tr>
								<tr>
                  <td>21</td>
                  <td class="left">Oral rehydration salts packet</td>
									<td><input type="number" min="0" name="rehydra_salt_begin" class="form-control"></td>
									<td><input type="number" min="0" name="rehydra_salt_received" class="form-control"></td>
									<td><input type="number" min="0" name="rehydra_salt_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="rehydra_salt_expired" class="form-control"></td>
									<td><input type="number" min="0" name="rehydra_salt_end" class="form-control"></td>
									<td><input type="number" min="0" name="rehydra_salt_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>22</td>
                  <td class="left">Quinine vial 300 mg/ml</td>
									<td><input type="number" min="0" name="quinine_vial_begin" class="form-control"></td>
									<td><input type="number" min="0" name="quinine_vial_received" class="form-control"></td>
									<td><input type="number" min="0" name="quinine_vial_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="quinine_vial_expired" class="form-control"></td>
									<td><input type="number" min="0" name="quinine_vial_end" class="form-control"></td>
									<td><input type="number" min="0" name="quinine_vial_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>23</td>
                  <td class="left">Quinine tab 300 mg</td>
									<td><input type="number" min="0" name="quinine_tab_begin" class="form-control"></td>
									<td><input type="number" min="0" name="quinine_tab_received" class="form-control"></td>
									<td><input type="number" min="0" name="quinine_tab_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="quinine_tab_expired" class="form-control"></td>
									<td><input type="number" min="0" name="quinine_tab_end" class="form-control"></td>
									<td><input type="number" min="0" name="quinine_tab_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>24</td>
                  <td class="left">Coartem atemether + Lumefanthrine tab 20 mg + 120 mg (6x1)</td>
									<td><input type="number" min="0" name="coartem_artemether_1_begin" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_1_received" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_1_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_1_expired" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_1_end" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_1_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>25</td>
                  <td class="left">Coartem atemether + Lumefanthrine tab 20 mg + 120 mg (6x2)</td>
									<td><input type="number" min="0" name="coartem_artemether_2_begin" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_2_received" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_2_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_2_expired" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_2_end" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_2_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>26</td>
                  <td class="left">Coartem atemether + Lumefanthrine tab 20 mg + 120 mg (6x3)</td>
									<td><input type="number" min="0" name="coartem_artemether_3_begin" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_3_received" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_3_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_3_expired" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_3_end" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_3_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>27</td>
                  <td class="left">Coartem atemether + Lumefanthrine tab 20 mg + 120 mg (6x4)</td>
									<td><input type="number" min="0" name="coartem_artemether_4_begin" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_4_received" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_4_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_4_expired" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_4_end" class="form-control"></td>
									<td><input type="number" min="0" name="coartem_artemether_4_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>28</td>
                  <td class="left">artemeter vial 20 mg/ml</td>
									<td><input type="number" min="0" name="artemeter_vial_begin" class="form-control"></td>
									<td><input type="number" min="0" name="artemeter_vial_received" class="form-control"></td>
									<td><input type="number" min="0" name="artemeter_vial_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="artemeter_vial_expired" class="form-control"></td>
									<td><input type="number" min="0" name="artemeter_vial_end" class="form-control"></td>
									<td><input type="number" min="0" name="artemeter_vial_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>29</td>
                  <td class="left">Artesunate vial 60 mg/ml</td>
									<td><input type="number" min="0" name="artesunate_vial_begin" class="form-control"></td>
									<td><input type="number" min="0" name="artesunate_vial_received" class="form-control"></td>
									<td><input type="number" min="0" name="artesunate_vial_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="artesunate_vial_expired" class="form-control"></td>
									<td><input type="number" min="0" name="artesunate_vial_end" class="form-control"></td>
									<td><input type="number" min="0" name="artesunate_vial_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>30</td>
                  <td class="left">Ciprofloxacine tab 250 mg</td>
									<td><input type="number" min="0" name="cipro_begin" class="form-control"></td>
									<td><input type="number" min="0" name="cipro_received" class="form-control"></td>
									<td><input type="number" min="0" name="cipro_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="cipro_expired" class="form-control"></td>
									<td><input type="number" min="0" name="cipro_end" class="form-control"></td>
									<td><input type="number" min="0" name="cipro_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>31</td>
                  <td class="left">Cotrimoxazol tab 400 mg + 80 mg</td>
									<td><input type="number" min="0" name="cotri_begin" class="form-control"></td>
									<td><input type="number" min="0" name="cotri_received" class="form-control"></td>
									<td><input type="number" min="0" name="cotri_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="cotri_expired" class="form-control"></td>
									<td><input type="number" min="0" name="cotri_end" class="form-control"></td>
									<td><input type="number" min="0" name="cotri_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>32</td>
                  <td class="left">Milk therapeutic F100</td>
									<td><input type="number" min="0" name="F100_begin" class="form-control"></td>
									<td><input type="number" min="0" name="F100_received" class="form-control"></td>
									<td><input type="number" min="0" name="F100_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="F100_expired" class="form-control"></td>
									<td><input type="number" min="0" name="F100_end" class="form-control"></td>
									<td><input type="number" min="0" name="F100_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>33</td>
                  <td class="left">Milk therapeutic F75</td>
									<td><input type="number" min="0" name="F75_begin" class="form-control"></td>
									<td><input type="number" min="0" name="F75_received" class="form-control"></td>
									<td><input type="number" min="0" name="F75_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="F75_expired" class="form-control"></td>
									<td><input type="number" min="0" name="F75_end" class="form-control"></td>
									<td><input type="number" min="0" name="F75_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>34</td>
                  <td class="left">Plumpy nut, bag 920 mg</td>
									<td><input type="number" min="0" name="plumpy_begin" class="form-control"></td>
									<td><input type="number" min="0" name="plumpy_received" class="form-control"></td>
									<td><input type="number" min="0" name="plumpy_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="plumpy_expired" class="form-control"></td>
									<td><input type="number" min="0" name="plumpy_end" class="form-control"></td>
									<td><input type="number" min="0" name="plumpy_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>35</td>
                  <td class="left">Corn soya blended (CSB)</td>
									<td><input type="number" min="0" name="csb_begin" class="form-control"></td>
									<td><input type="number" min="0" name="csb_received" class="form-control"></td>
									<td><input type="number" min="0" name="csb_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="csb_expired" class="form-control"></td>
									<td><input type="number" min="0" name="csb_end" class="form-control"></td>
									<td><input type="number" min="0" name="csb_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>36</td>
                  <td class="left">Morphine 10 inj mg/ml</td>
									<td><input type="number" min="0" name="morphine10_begin" class="form-control"></td>
									<td><input type="number" min="0" name="morphine10_received" class="form-control"></td>
									<td><input type="number" min="0" name="morphine10_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="morphine10_expired" class="form-control"></td>
									<td><input type="number" min="0" name="morphine10_end" class="form-control"></td>
									<td><input type="number" min="0" name="morphine10_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>37</td>
                  <td class="left">Morphine 30 tab mg</td>
									<td><input type="number" min="0" name="morphine30_begin" class="form-control"></td>
									<td><input type="number" min="0" name="morphine30_received" class="form-control"></td>
									<td><input type="number" min="0" name="morphine30_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="morphine30_expired" class="form-control"></td>
									<td><input type="number" min="0" name="morphine30_end" class="form-control"></td>
									<td><input type="number" min="0" name="morphine30_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>38</td>
                  <td class="left">Morphine hcl tab 10 mg</td>
									<td><input type="number" min="0" name="morphine_hcl_begin" class="form-control"></td>
									<td><input type="number" min="0" name="morphine_hcl_received" class="form-control"></td>
									<td><input type="number" min="0" name="morphine_hcl_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="morphine_hcl_expired" class="form-control"></td>
									<td><input type="number" min="0" name="morphine_hcl_end" class="form-control"></td>
									<td><input type="number" min="0" name="morphine_hcl_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>39</td>
                  <td class="left">Captopril tab 10 mg</td>
									<td><input type="number" min="0" name="captopril_begin" class="form-control"></td>
									<td><input type="number" min="0" name="captopril_received" class="form-control"></td>
									<td><input type="number" min="0" name="captopril_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="captopril_expired" class="form-control"></td>
									<td><input type="number" min="0" name="captopril_end" class="form-control"></td>
									<td><input type="number" min="0" name="captopril_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>40</td>
                  <td class="left">Atenolol tab 25 mg</td>
									<td><input type="number" min="0" name="atenolol_begin" class="form-control"></td>
									<td><input type="number" min="0" name="atenolol_received" class="form-control"></td>
									<td><input type="number" min="0" name="atenolol_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="atenolol_expired" class="form-control"></td>
									<td><input type="number" min="0" name="atenolol_end" class="form-control"></td>
									<td><input type="number" min="0" name="atenolol_stock" class="form-control"></td>
                </tr>
								<tr>
                  <td>41</td>
                  <td class="left">Hydrochlorothiazide solid oral 25 mg</td>
									<td><input type="number" min="0" name="hydro_begin" class="form-control"></td>
									<td><input type="number" min="0" name="hydro_received" class="form-control"></td>
									<td><input type="number" min="0" name="hydro_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="hydro_expired" class="form-control"></td>
									<td><input type="number" min="0" name="hydro_end" class="form-control"></td>
									<td><input type="number" min="0" name="hydro_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>42</td>
                  <td class="left">Nifedipine tab (immediate-release) 10 mg</td>
									<td><input type="number" min="0" name="nifedipine_begin" class="form-control"></td>
									<td><input type="number" min="0" name="nifedipine_received" class="form-control"></td>
									<td><input type="number" min="0" name="nifedipine_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="nifedipine_expired" class="form-control"></td>
									<td><input type="number" min="0" name="nifedipine_end" class="form-control"></td>
									<td><input type="number" min="0" name="nifedipine_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>43</td>
                  <td class="left">Methyldopal tab 250 mg</td>
									<td><input type="number" min="0" name="methyldopal_begin" class="form-control"></td>
									<td><input type="number" min="0" name="methyldopal_received" class="form-control"></td>
									<td><input type="number" min="0" name="methyldopal_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="methyldopal_expired" class="form-control"></td>
									<td><input type="number" min="0" name="methyldopal_end" class="form-control"></td>
									<td><input type="number" min="0" name="methyldopal_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>44</td>
                  <td class="left">Warfarin tab 1 mg</td>
									<td><input type="number" min="0" name="warfarin_begin" class="form-control"></td>
									<td><input type="number" min="0" name="warfarin_received" class="form-control"></td>
									<td><input type="number" min="0" name="warfarin_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="warfarin_expired" class="form-control"></td>
									<td><input type="number" min="0" name="warfarin_end" class="form-control"></td>
									<td><input type="number" min="0" name="warfarin_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>45</td>
                  <td class="left">Insulin inj rapid 100 ui/ml</td>
									<td><input type="number" min="0" name="insulin_r_begin" class="form-control"></td>
									<td><input type="number" min="0" name="insulin_r_received" class="form-control"></td>
									<td><input type="number" min="0" name="insulin_r_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="insulin_r_expired" class="form-control"></td>
									<td><input type="number" min="0" name="insulin_r_end" class="form-control"></td>
									<td><input type="number" min="0" name="insulin_r_stock" class="form-control"></td>
                </tr>
                <tr>
                  <td>46</td>
                  <td class="left">Insulin inj lente 100 ui/ml</td>
									<td><input type="number" min="0" name="insulin_l_begin" class="form-control"></td>
									<td><input type="number" min="0" name="insulin_l_received" class="form-control"></td>
									<td><input type="number" min="0" name="insulin_l_dispensed" class="form-control"></td>
									<td><input type="number" min="0" name="insulin_l_expired" class="form-control"></td>
									<td><input type="number" min="0" name="insulin_l_end" class="form-control"></td>
									<td><input type="number" min="0" name="insulin_l_stock" class="form-control"></td>
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
  </body>
</html>
<script>
	$('#A26').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false
	    });
	$('.dataTables_length').addClass('bs-select');
</script>
