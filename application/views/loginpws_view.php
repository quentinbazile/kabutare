<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login & Passwords</title>
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
	function load_data(){
		$.ajax({
			url:"<?php echo base_url('loginpws/fetch');?>",
			method:"POST",
			success:function(data){
				$('#result').html(data);
				$('#log').DataTable({
					"bPaginate": false,
					"bLengthChange": false,
					"bInfo": false,
					"searching": false,
					"dom": 'Bfrtip'
				});
				$('.dataTables_length').addClass('bs-select');
			},
			error:function(data){

			}
		})
	}

	load_data();

})



</script>
