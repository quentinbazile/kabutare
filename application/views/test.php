<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Test</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.6/b-html5-1.5.6/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,500|Roboto:300,400,500,700">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/recherche15.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/fh-3.1.4/datatables.min.css"/>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<div class="container">
				<input id="date" type="date">
				<div id="result"></div>
    </div>
		<script src="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.6/b-html5-1.5.6/datatables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<!--<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<!--<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>-->
		<script src="https://cdn.datatables.net/v/dt/dt-1.10.18/fh-3.1.4/datatables.min.js"></script>

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
				$('#IIIA').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'III. Mental Health - Summary'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'III. Mental Health - Summary'
 					 }, {
						 extend: 'print',
 					   title: 'III. Mental Health - Summary'
 					 }
        	]
				});
				$('#IIIB').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'III. Mental Health - Diagnosis'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'III. Mental Health - Diagnosis'
 					 }, {
						 extend: 'print',
 					   title: 'III. Mental Health - Diagnosis'
 					 }
        	]
				});
				$('#V').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"dom": 'Bfrtip',
					"buttons": [{
					   extend: 'excelHtml5',
					   title: 'V. Other Cardiovascular and Kindney Diseases'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'V. Other Cardiovascular and Kindney Diseases'
 					 }, {
						 extend: 'print',
 					   title: 'V. Other Cardiovascular and Kindney Diseases'
 					 }
        	]
				});
				$('#VII').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'VII. Palliative Care'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'VII. Palliative Care'
 					 }, {
						 extend: 'print',
 					   title: 'VII. Palliative Care'
 					 }
        	]
				});
				$('#VIII').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'VIII. Community Checkup'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'VIII. Community Checkup'
 					 }, {
						 extend: 'print',
 					   title: 'VIII. Community Checkup'
 					 }
        	]
				});
				$('#IX').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'IX. Cancer Screening'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'IX. Cancer Screening'
 					 }, {
						 extend: 'print',
 					   title: 'IX. Cancer Screening'
 					 }
        	]
				});
				$('#XA').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'X. Hospitalizations - Summary by Service'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'X. Hospitalizations - Summary by Service'
 					 }, {
						 extend: 'print',
 					   title: 'X. Hospitalizations - Summary by Service'
 					 }
        	]
				});
				$('#XB').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'X. Hospitalizations - Summary by Age'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'X. Hospitalizations - Summary by Age'
 					 }, {
						 extend: 'print',
 					   title: 'X. Hospitalizations - Summary by Age'
 					 }
        	]
				});
				$('#XC').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'X. Hospitalizations - Payment'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'X. Hospitalizations - Payment'
 					 }, {
						 extend: 'print',
 					   title: 'X. Hospitalizations - Payment'
 					 }
        	]
				});
				$('#XD').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'X. Hospitalizations - Special Causes'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'X. Hospitalizations - Special Causes'
 					 }, {
						 extend: 'print',
 					   title: 'X. Hospitalizations - Special Causes'
 					 }
        	]
				});
				$('#XE').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"fixedHeader": true,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'X. Hospitalizations - Causes'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'X. Hospitalizations - Causes'
 					 }, {
						 extend: 'print',
 					   title: 'X. Hospitalizations - Causes'
 					 }
        	]
				});
				$('#XIV').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XIV. Physiotherapy'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XIV. Physiotherapy'
 					 }, {
						 extend: 'print',
 					   title: 'XIV. Physiotherapy'
 					 }
        	]
				});
				$('#XVI').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XVI. Deliveries and Births at Health Facility'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XVI. Deliveries and Births at Health Facility'
 					 }, {
						 extend: 'print',
 					   title: 'XVI. Deliveries and Births at Health Facility'
 					 }
        	]
				});
				$('#XVII').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XVII. Postnatal Care'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XVII. Postnatal Care'
 					 }, {
						 extend: 'print',
 					   title: 'XVII. Postnatal Care'
 					 }
        	]
				});
				$('#XVIII').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XVIII. Kangaroo Mother Care'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XVIII. Kangaroo Mother Care'
 					 }, {
						 extend: 'print',
 					   title: 'XVIII. Kangaroo Mother Care'
 					 }
        	]
				});
				$('#XXIIA').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXII. Family Planning - Methods'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXII. Family Planning - Methods'
 					 }, {
						 extend: 'print',
 					   title: 'XXII. Family Planning - Methods'
 					 }
        	]
				});
				$('#XXIIB').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXII. Family Planning - New FP Users'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXII. Family Planning - New FP Users'
 					 }, {
						 extend: 'print',
 					   title: 'XXII. Family Planning - New FP Users'
 					 }
        	]
				});
				$('#XXIIC').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXII. Family Planning - Sperm Control'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXII. Family Planning - Sperm Control'
 					 }, {
						 extend: 'print',
 					   title: 'XXII. Family Planning - Sperm Control'
 					 }
        	]
				});
				$('#XXIID').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXII. Family Planning - Summary by Age'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXII. Family Planning - Summary by Age'
 					 }, {
						 extend: 'print',
 					   title: 'XXII. Family Planning - Summary by Age'
 					 }
        	]
				});
				$('#XXIII').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXIII. Laboratory'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXIII. Laboratory'
 					 }, {
						 extend: 'print',
 					   title: 'XXIII. Laboratory'
 					 }
        	]
				});
				$('#XXIVA').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXIV. Blood Bank Security - Transfusions'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXIV. Blood Bank Security - Transfusions'
 					 }, {
						 extend: 'print',
 					   title: 'XXIV. Blood Bank Security - Transfusions'
 					 }
        	]
				});
				$('#XXIVB').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
	        "buttons": [{
					   extend: 'excelHtml5',
					   title: 'XXIV. Blood Bank Security - Pack Stock'
					 }, {
						 extend: 'pdfHtml5',
 					   title: 'XXIV. Blood Bank Security - Pack Stock'
 					 }, {
						 extend: 'print',
 					   title: 'XXIV. Blood Bank Security - Pack Stock'
 					 }
        	]
				});


				$('#A2').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#B2').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#C2').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#D2').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#E2').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#F2').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#Ga').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#Gb').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#A4').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#A6').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#GBV').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#XIII').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#A15').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#B15').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#XII').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#A19').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#B19').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#A20').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#A21').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#XXV').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#A26').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#A27').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#B27').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});
				$('#C27').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip',
        	"buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
				});

				$('.dataTables_length').addClass('bs-select');
			},
			error:function(data){

			}
		})
	}

	$('#date').bind('change keyup', function(){
		load_data($('#date').val());
	});
})



</script>
