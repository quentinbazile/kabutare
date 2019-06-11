<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Research</title>
		<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/datatables2.min.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bs-css.css'); ?>" />
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/recherche15.css'); ?>" />
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
			<h2>Research a report by date</h2>

				<center><input id="date" type="date"></center>
				<div id="result"></div>
    </div>
		<script src="<?php echo base_url('assets/js/datatables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery2.min.js'); ?>"></script>
	  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
		<!--<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>-->
		<script src="<?php echo base_url('assets/js/jszip.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/pdfmake.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/vfs_fonts.js'); ?>"></script>
		<!--<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>-->
		<script src="<?php echo base_url('assets/js/datatablesFH.min.js'); ?>"></script>

		<script src="<?php echo base_url('assets/js/buttons.html5.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/buttons.print.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/dataTables.buttons.min.js'); ?>"></script>
  </body>
</html>
<script>
$(document).ready(function(){
	function load_data(date){
		$.ajax({
			url:"<?php echo base_url('research/fetch');?>",
			method:"POST",
			data:{date:date},
			success:function(data){
				$('#result').html(data);
				$('#Cpl1').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false
				});
				$('#Cpl2').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false
				});
				$('#A2').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'II] Outpatient consultations - Outpatient morbidity summary table'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'II] Outpatient consultations - Outpatient morbidity summary table'
 					 }, {
						 extend: 'print',
 					   title: 'II] Outpatient consultations - Outpatient morbidity summary table'
 					 }
        	]
				});
				$('#B2').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'II] Outpatient consultations - Health insurance status of new cases'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'II] Outpatient consultations - Health insurance status of new cases'
 					 }, {
						 extend: 'print',
 					   title: 'II] Outpatient consultations - Health insurance status of new cases'
 					 }
        	]
				});
				$('#C2').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'II] Outpatient consultations - Referrals'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'II] Outpatient consultations - Referrals'
 					 }, {
						 extend: 'print',
 					   title: 'II] Outpatient consultations - Referrals'
 					 }
        	]
				});
				$('#D2').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'II] Outpatient consultations - Origin of outpatients'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'II] Outpatient consultations - Origin of outpatients'
 					 }, {
						 extend: 'print',
 					   title: 'II] Outpatient consultations - Origin of outpatients'
 					 }
        	]
				});
				$('#E2').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'II] Outpatient consultations - New cases of priority health problems in general OPD'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'II] Outpatient consultations - New cases of priority health problems in general OPD'
 					 }, {
						 extend: 'print',
 					   title: 'II] Outpatient consultations - New cases of priority health problems in general OPD'
 					 }
        	]
				});
				$('#F2').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'II] Outpatient consultations - New cases of HIV/AIDS/STI and non-communicable diseases'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'II] Outpatient consultations - New cases of HIV/AIDS/STI and non-communicable diseases'
 					 }, {
						 extend: 'print',
 					   title: 'II] Outpatient consultations - New cases of HIV/AIDS/STI and non-communicable diseases'
 					 }
        	]
				});
				$('#Ga').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'II] Outpatient consultations - Eye diseases'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'II] Outpatient consultations - Eye diseases'
 					 }, {
						 extend: 'print',
 					   title: 'II] Outpatient consultations - Eye diseases'
 					 }
        	]
				});
				$('#Gb').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'II] Outpatient consultations - Oral diseases'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'II] Outpatient consultations - Oral diseases'
 					 }, {
						 extend: 'print',
 					   title: 'II] Outpatient consultations - Oral diseases'
 					 }
        	]
				});
				$('#A3').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'III] Mental health - Summary'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'III] Mental health - Summary'
 					 }, {
						 extend: 'print',
 					   title: 'III] Mental health - Summary'
 					 }
        	]
				});
				$('#B3').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'III] Mental health - Diagnosis'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'III] Mental health - Diagnosis'
 					 }, {
						 extend: 'print',
 					   title: 'III] Mental health - Diagnosis'
 					 }
        	]
				});
				$('#A4').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'IV] Chronic diseases'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'IV] Chronic diseases'
 					 }, {
						 extend: 'print',
 					   title: 'IV] Chronic diseases'
 					 }
        	]
				});
				$('#A5').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'V] Other cardiovascular and kindney diseases'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'V] Other cardiovascular and kindney diseases'
 					 }, {
						 extend: 'print',
 					   title: 'V] Other cardiovascular and kindney diseases'
 					 }
        	]
				});
				$('#A6').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'VI] Injuries'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'VI] Injuries'
 					 }, {
						 extend: 'print',
 					   title: 'VI] Injuries'
 					 }
        	]
				});
				$('#A7').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"ordering": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'VII] Palliative care'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'VII] Palliative care'
 					 }, {
						 extend: 'print',
 					   title: 'VII] Palliative care'
 					 }
        	]
				});
				$('#A11').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'XI] Gender based violence'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XI] Gender based violence'
 					 }, {
						 extend: 'print',
 					   title: 'XI] Gender based violence'
 					 }
        	]
				});
				$('#E10').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'X] Hospitalizations - Causes'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'X] Hospitalizations - Causes'
 					 }, {
						 extend: 'print',
 					   title: 'X] Hospitalizations - Causes'
 					 }
        	]
				});
				$('#D10').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'X] Hospitalizations - Special causes'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'X] Hospitalizations - Special causes'
 					 }, {
						 extend: 'print',
 					   title: 'X] Hospitalizations - Special causes'
 					 }
        	]
				});
				$('#C10').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'X] Hospitalizations - Payment'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'X] Hospitalizations - Payment'
 					 }, {
						 extend: 'print',
 					   title: 'X] Hospitalizations - Payment'
 					 }
        	]
				});
				$('#B10').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'X] Hospitalizations - Summary by age'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'X] Hospitalizations - Summary by age'
 					 }, {
						 extend: 'print',
 					   title: 'X] Hospitalizations - Summary by age'
 					 }
        	]
				});
				$('#A10').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'X] Hospitalizations - Summary by service'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'X] Hospitalizations - Summary by service'
 					 }, {
						 extend: 'print',
 					   title: 'X] Hospitalizations - Summary by service'
 					 }
        	]
				});
				$('#A9').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'IX] Cancer screening'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'IX] Cancer screening'
 					 }, {
						 extend: 'print',
 					   title: 'IX] Cancer screening'
 					 }
        	]
				});

				$('#A8').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"ordering": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'VIII] Community checkup'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'VIII] Community checkup'
 					 }, {
						 extend: 'print',
 					   title: 'VIII] Community checkup'
 					 }
        	]
				});








				$('#A13').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'XIII] Anesthesia'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XIII] Anesthesia'
 					 }, {
						 extend: 'print',
 					   title: 'XIII] Anesthesia'
 					 }
        	]
				});
				$('#A14').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XIV] Physiotherapy'
					 }, {
						 extend: 'pdfHtml5',
					   title: 'XIV] Physiotherapy'
 					 }, {
						 extend: 'print',
 					   title: 'XIV] Physiotherapy'
 					 }
        	]
				});
				$('#A15').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'XV] Obstetrical complications - Cases and deaths'
					 }, {
						 extend: 'pdfHtml5',
					   title: 'XV] Obstetrical complications - Cases and deaths'
 					 }, {
						 extend: 'print',
 					   title: 'XV] Obstetrical complications - Cases and deaths'
 					 }
        	]
				});
				$('#B15').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'XV] Obstetrical complications - Emergency obstetric and neonatal care interventions'
					 }, {
						 extend: 'pdfHtml5',
					   title: 'XV] Obstetrical complications - Emergency obstetric and neonatal care interventions'
 					 }, {
						 extend: 'print',
 					   title: 'XV] Obstetrical complications - Emergency obstetric and neonatal care interventions'
 					 }
        	]
				});
				$('#A16').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XVI] Deliveries and births at health facility'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XVI] Deliveries and births at health facility'
 					 }, {
						 extend: 'print',
 					   title: 'XVI] Deliveries and births at health facility'
 					 }
        	]
				});
				$('#A17').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XVII] Postnatal care'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XVII] Postnatal care'
 					 }, {
						 extend: 'print',
 					   title: 'XVII] Postnatal care'
 					 }
        	]
				});
				$('#A18').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XVIII] Kangaroo mother care'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XVIII] Kangaroo mother care'
 					 }, {
						 extend: 'print',
 					   title: 'XVIII] Kangaroo mother care'
 					 }
        	]
				});
				$('#A19').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'XIX] Neonatal causes of hospitalization and deaths - Part1'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XIX] Neonatal causes of hospitalization and deaths - Part1'
 					 }, {
						 extend: 'print',
 					   title: 'XIX] Neonatal causes of hospitalization and deaths - Part1'
 					 }
        	]
				});
				$('#B19').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'XIX] Neonatal causes of hospitalization and deaths - Part2'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XIX] Neonatal causes of hospitalization and deaths - Part2'
 					 }, {
						 extend: 'print',
 					   title: 'XIX] Neonatal causes of hospitalization and deaths - Part2'
 					 }
        	]
				});
				$('#A20').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'XX] Nutrition screening'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XX] Nutrition screening'
 					 }, {
						 extend: 'print',
 					   title: 'XX] Nutrition screening'
 					 }
        	]
				});
				$('#A21').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXI] Inpatient rehabilitation of malnourished'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXI] Inpatient rehabilitation of malnourished'
 					 }, {
						 extend: 'print',
 					   title: 'XXI] Inpatient rehabilitation of malnourished'
 					 }
        	]
				});
				$('#A22').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXII] Family planning - Methods'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXII] Family planning - Methods'
 					 }, {
						 extend: 'print',
 					   title: 'XXII] Family planning - Methods'
 					 }
        	]
				});
				$('#B22').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXII] Family planning - New FP users'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXII] Family planning - New FP users'
 					 }, {
						 extend: 'print',
 					   title: 'XXII] Family Planning - New FP users'
 					 }
        	]
				});
				$('#C22').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXII] Family planning - Sperm control'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXII] Family planning - Sperm control'
 					 }, {
						 extend: 'print',
 					   title: 'XXII] Family planning - Sperm control'
 					 }
        	]
				});
				$('#D22').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXII] Family planning - Summary by age'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXII] Family planning - Summary by age'
 					 }, {
						 extend: 'print',
 					   title: 'XXII] Family planning - Summary by age'
 					 }
        	]
				});
				$('#A23').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXIII] Laboratory'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXIII] Laboratory'
 					 }, {
						 extend: 'print',
 					   title: 'XXIII] Laboratory'
 					 }
        	]
				});
				$('#A24').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXIV] Blood bank security - Transfusions'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXIV] Blood bank security - Transfusions'
 					 }, {
						 extend: 'print',
 					   title: 'XXIV] Blood bank security - Transfusions'
 					 }
        	]
				});
				$('#B24').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXIV] Blood bank security - Pack stock'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXIV] Blood bank security - Pack stock'
 					 }, {
						 extend: 'print',
 					   title: 'XXIV] Blood bank security - Pack stock'
 					 }
        	]
				});
				$('#A25').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXV] Medical imagery'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXV] Medical imagery'
 					 }, {
						 extend: 'print',
 					   title: 'XXV] Medical imagery'
 					 }
        	]
				});
				$('#A26').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXVI] Stock of tracer drugs'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXVI] Stock of tracer drugs'
 					 }, {
						 extend: 'print',
 					   title: 'XXVI] Stock of tracer drugs'
 					 }
        	]
				});
				$('#A27').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXVII] Staffing information - Staff information'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXVII] Staffing information - Staff information'
 					 }, {
						 extend: 'print',
 					   title: 'XXVII] Staffing information - Staff information'
 					 }
        	]
				});
				$('#B27').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXVII] Staffing information - Status of staff'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXVII] Staffing information - Status of staff'
 					 }, {
						 extend: 'print',
 					   title: 'XXVII] Staffing information - Status of staff'
 					 }
        	]
				});
				$('#C27').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXVII] Staffing information - Reasons of leaving'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXVII] Staffing information - Reasons of leaving'
 					 }, {
						 extend: 'print',
 					   title: 'XXVII] Staffing information - Reasons of leaving'
 					 }
        	]
				});
				$('#A12').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'XII] Surgery'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XII] Surgery'
 					 }, {
						 extend: 'print',
 					   title: 'XII] Surgery'
 					 }
        	]
				});
				$('.dataTables_length').addClass('bs-select');
			}
		})
	}

	$('#date').bind('change keyup', function(){
		load_data($('#date').val());
	});
})



</script>
