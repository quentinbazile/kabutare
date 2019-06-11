<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login & Passwords</title>
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
				<div id="result"></div><br><br>
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
					"searching": false
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
