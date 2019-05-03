<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Deliveries - Births</title>
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
		<div class="container">
      <div>
        <form method="post" action="" class="form-inline">
      <table id="dt">
        <thead>
          <tr>
            <th class="little">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
            <th class="medium">Number<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
          </tr>
        </thead>
        <tbody class="center">
					<tr>
						<td>1</td>
            <td class="left">Deliveries Total</td>
            <td><input required type="number" min="0" name="delive_total" class="form-control"></td>
					</tr>
					<tr>
						<td>2</td>
            <td class="left">Deliveries Eutocic</td>
            <td><input required type="number" min="0" name="delive_eutocic" class="form-control"></td>
					</tr>
					<tr>
						<td>3</td>
            <td class="left">Deliveries Dystocic</td>
            <td><input required type="number" min="0" name="delive_dystocic" class="form-control"></td>
					</tr>
					<tr>
						<td>4</td>
            <td class="left">Delivery with Episiotomy</td>
            <td><input required type="number" min="0" name="delive_w_episiotomy" class="form-control"></td>
					</tr>
					<tr>
						<td>5</td>
            <td class="left">Delivery with Oxytocin Stimulation</td>
            <td><input required type="number" min="0" name="delive_w_oxytocin" class="form-control"></td>
					</tr>
					<tr>
						<td>6</td>
            <td class="left">Delivery Complicated by Perineal Tear (second, third, fourth degree)</td>
            <td><input required type="number" min="0" name="delive_complicated" class="form-control"></td>
					</tr>
					<tr>
						<td>7</td>
            <td class="left">Birth Trauma to Newborn</td>
            <td><input required type="number" min="0" name="birth_trauma" class="form-control"></td>
					</tr>
					<tr>
						<td>8</td>
            <td class="left">Cleft Palate or Cleft Lip</td>
            <td><input required type="number" min="0" name="cleft_palate" class="form-control"></td>
					</tr>
					<tr>
						<td>9</td>
            <td class="left">Omphalocel</td>
            <td><input required type="number" min="0" name="omphalocel" class="form-control"></td>
					</tr>
					<tr>
						<td>10</td>
            <td class="left">Laparoschisis</td>
            <td><input required type="number" min="0" name="laparoschisis" class="form-control"></td>
					</tr>
					<tr>
						<td>11</td>
            <td class="left">Spina Bifida</td>
            <td><input required type="number" min="0" name="spina_bifida" class="form-control"></td>
					</tr>
					<tr>
						<td>12</td>
            <td class="left">Hydrocephalus</td>
            <td><input required type="number" min="0" name="hydrocephalus" class="form-control"></td>
					</tr>
					<tr>
						<td>13</td>
            <td class="left">Deliveries 15 years and under</td>
            <td><input required type="number" min="0" name="delive_15" class="form-control"></td>
					</tr>
					<tr>
						<td>14</td>
            <td class="left">Deliveries 16 to 19 years</td>
            <td><input required type="number" min="0" name="delive_19" class="form-control"></td>
					</tr>
					<tr>
						<td>15</td>
            <td class="left">Deliveries 20 to 24 years</td>
            <td><input required type="number" min="0" name="delive_24" class="form-control"></td>
					</tr>
					<tr>
						<td>16</td>
            <td class="left">Deliveries 35 years and above</td>
            <td><input required type="number" min="0" name="delive_35" class="form-control"></td>
					</tr>
					<tr>
						<td>17</td>
            <td class="left">Women who Received Oxytocin IM Immediately after Birth for Active Management of Third Stage of Labor</td>
            <td><input required type="number" min="0" name="received_oxytocin" class="form-control"></td>
					</tr>
					<tr>
						<td>18</td>
            <td class="left">Multiple Pregnancies (Women who Delivered Twins, Triplets, etc)</td>
            <td><input required type="number" min="0" name="multi_pregnancies" class="form-control"></td>
					</tr>
					<tr>
						<td>19</td>
            <td class="left">Women Consulted for Risk of Premature Delivery</td>
            <td><input required type="number" min="0" name="women_cons_risk_prema" class="form-control"></td>
					</tr>
					<tr>
						<td>20</td>
            <td class="left">Mother who Received Corticosteroid in Management of Risk of Premature Delivery</td>
            <td><input required type="number" min="0" name="received_corticosteroid" class="form-control"></td>
					</tr>
					<tr>
						<td>21</td>
            <td class="left">Women Consulted with Preterm Premature Rupture Membranes (PPROM)</td>
            <td><input required type="number" min="0" name="cons_preterm_ruptu_memb" class="form-control"></td>
					</tr>
					<tr>
						<td>22</td>
            <td class="left">Women Consulted with Preterm Premature Rupture Membranes who Received Prophylactic Antibiotics</td>
            <td><input required type="number" min="0" name="cons_preterm_ruptu_memb_prophylactic" class="form-control"></td>
					</tr>
					<tr>
						<td>23</td>
            <td class="left">Maternal Deaths During Labor, Delivery and 24h after Delivery (= Subsets of All Deaths in Table Above)</td>
            <td><input required type="number" min="0" name="maternal_deaths" class="form-control"></td>
					</tr>
					<tr>
						<td>24</td>
            <td class="left">Births Live</td>
            <td><input required type="number" min="0" name="births_live" class="form-control"></td>
					</tr>
					<tr>
						<td>25</td>
            <td class="left">Birth Weight < 2500 g (Alive)</td>
            <td><input required type="number" min="0" name="births_weight2500" class="form-control"></td>
					</tr>
					<tr>
						<td>26</td>
            <td class="left">Premature Newborns (Alive) 22-37 Weeks</td>
            <td><input required type="number" min="0" name="premature_newborn" class="form-control"></td>
					</tr>
					<tr>
						<td>27</td>
            <td class="left">Birth Weight ≤ 2 kg (Alive Newborns) All</td>
            <td><input required type="number" min="0" name="births_weight2000" class="form-control"></td>
					</tr>
					<tr>
						<td>28</td>
            <td class="left">Still Births Macerated (≥ 28 Weeks or ≥ 1000 g)</td>
            <td><input required type="number" min="0" name="births_macerated" class="form-control"></td>
					</tr>
					<tr>
						<td>29</td>
            <td class="left">Still Births Fresh (≥ 28 Weeks or ≥ 1000 g) All</td>
            <td><input required type="number" min="0" name="births_fresh_1000" class="form-control"></td>
					</tr>
					<tr>
						<td>30</td>
            <td class="left">Still Births Fresh (≥ 2500 g)</td>
            <td><input required type="number" min="0" name="births_fresh_2500" class="form-control"></td>
					</tr>
					<tr>
						<td>31</td>
            <td class="left">Deaths at Birth of Live Born Babies (within 30 minutes)</td>
            <td><input required type="number" min="0" name="deaths_birth" class="form-control"></td>
					</tr>
					<tr>
						<td>32</td>
            <td class="left">Deaths at Birth of Live Born Babies with ≥ 2,5 kg (within 30 minutes)</td>
            <td><input required type="number" min="0" name="deaths_birth_2500" class="form-control"></td>
					</tr>
					<tr>
						<td>33</td>
            <td class="left">Still</td>
            <td><input required type="number" min="0" name="newborns_breastfed" class="form-control"></td>
					</tr>
					<tr>
						<td>34</td>
            <td class="left">Still</td>
            <td><input required type="number" min="0" name="newborns_skintoskin" class="form-control"></td>
					</tr>
					<tr>
						<td>35</td>
            <td class="left">Still</td>
            <td><input required type="number" min="0" name="newborns_no_cry" class="form-control"></td>
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
        "aLengthMenu": [[100, 200, 300, -1], [100, 200, 300, "All"]],
        "iDisplayLength": 100
    });
$('.dataTables_length').addClass('bs-select');
</script>
