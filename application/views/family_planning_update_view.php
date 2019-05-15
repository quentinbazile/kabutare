<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Family Planning</title>
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
			<h2>Family planning - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('update_date'))); ?></h2>
      <div>
        <form method="post" action="" class="form-inline">
          <h4>Methods</h4>
          <table id="A22" class="center">
            <thead>
              <tr>
                <th>N°</th>
                <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th>New acceptors in the program</th>
                <th>PPFP uptake (Before discharge)</th>
                <th>New users of FP method</th>
                <th>Stopped FP method</th>
                <th>Active users at end of month</th>
                <th>FP users referred to CHWs</th>
                <th>Quantity distributed</th>
                <th>Stock at end of the month</th>
                <th>Days of stock-out</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td class="left">Oral contraceptives, progestative</td>
                <td><input type="number" min="0" name="oral_contra_proges_accep" class="form-control" value="<?php echo $table1->oral_contra_proges_accep; ?>"></td>
                <td><input type="number" min="0" name="oral_contra_proges_ppfp" class="form-control" value="<?php echo $table1->oral_contra_proges_ppfp; ?>"></td>
                <td><input type="number" min="0" name="oral_contra_proges_users" class="form-control" value="<?php echo $table1->oral_contra_proges_users; ?>"></td>
                <td><input type="number" min="0" name="oral_contra_proges_stop" class="form-control" value="<?php echo $table1->oral_contra_proges_stop; ?>"></td>
                <td><input type="number" min="0" name="oral_contra_proges_active" class="form-control" value="<?php echo $table1->oral_contra_proges_active; ?>"></td>
                <td><input type="number" min="0" name="oral_contra_proges_refer" class="form-control" value="<?php echo $table1->oral_contra_proges_refer; ?>"></td>
                <td><input type="number" min="0" name="oral_contra_proges_quant" class="form-control" value="<?php echo $table1->oral_contra_proges_quant; ?>"></td>
                <td><input type="number" min="0" name="oral_contra_proges_stock" class="form-control" value="<?php echo $table1->oral_contra_proges_stock; ?>"></td>
                <td><input type="number" min="0" name="oral_contra_proges_day" class="form-control" value="<?php echo $table1->oral_contra_proges_day; ?>"></td>
              </tr>
              <tr>
                <td>2</td>
                <td class="left">Oral contraceptives, combined</td>
                <td><input type="number" min="0" name="oral_contra_comb_accep" class="form-control" value="<?php echo $table1->oral_contra_comb_accep; ?>"></td>
                <td class="grey"></td>
                <td><input type="number" min="0" name="oral_contra_comb_users" class="form-control" value="<?php echo $table1->oral_contra_comb_users; ?>"></td>
                <td><input type="number" min="0" name="oral_contra_comb_stop" class="form-control" value="<?php echo $table1->oral_contra_comb_stop; ?>"></td>
                <td><input type="number" min="0" name="oral_contra_comb_active" class="form-control" value="<?php echo $table1->oral_contra_comb_active; ?>"></td>
                <td><input type="number" min="0" name="oral_contra_comb_refer" class="form-control" value="<?php echo $table1->oral_contra_comb_refer; ?>"></td>
                <td><input type="number" min="0" name="oral_contra_comb_quant" class="form-control" value="<?php echo $table1->oral_contra_comb_quant; ?>"></td>
                <td><input type="number" min="0" name="oral_contra_comb_stock" class="form-control" value="<?php echo $table1->oral_contra_comb_stock; ?>"></td>
                <td><input type="number" min="0" name="oral_contra_comb_day" class="form-control" value="<?php echo $table1->oral_contra_comb_day; ?>"></td>
              </tr>
              <tr>
                <td>3</td>
                <td class="left">Injectables (Depo-Provera)</td>
                <td><input type="number" min="0" name="inject_depo_accep" class="form-control" value="<?php echo $table1->inject_depo_accep; ?>"></td>
                <td class="grey"></td>
                <td><input type="number" min="0" name="inject_depo_users" class="form-control" value="<?php echo $table1->inject_depo_users; ?>"></td>
                <td><input type="number" min="0" name="inject_depo_stop" class="form-control" value="<?php echo $table1->inject_depo_stop; ?>"></td>
                <td><input type="number" min="0" name="inject_depo_active" class="form-control" value="<?php echo $table1->inject_depo_active; ?>"></td>
                <td><input type="number" min="0" name="inject_depo_refer" class="form-control" value="<?php echo $table1->inject_depo_refer; ?>"></td>
                <td><input type="number" min="0" name="inject_depo_quant" class="form-control" value="<?php echo $table1->inject_depo_quant; ?>"></td>
                <td><input type="number" min="0" name="inject_depo_stock" class="form-control" value="<?php echo $table1->inject_depo_stock; ?>"></td>
                <td><input type="number" min="0" name="inject_depo_day" class="form-control" value="<?php echo $table1->inject_depo_day; ?>"></td>
              </tr>
              <tr>
                <td>4</td>
                <td class="left">Injectables (Norristerat)</td>
                <td><input type="number" min="0" name="inject_nor_accep" class="form-control" value="<?php echo $table1->inject_nor_accep; ?>"></td>
                <td class="grey"></td>
                <td><input type="number" min="0" name="inject_nor_users" class="form-control" value="<?php echo $table1->inject_nor_users; ?>"></td>
                <td><input type="number" min="0" name="inject_nor_stop" class="form-control" value="<?php echo $table1->inject_nor_stop; ?>"></td>
                <td><input type="number" min="0" name="inject_nor_active" class="form-control" value="<?php echo $table1->inject_nor_active; ?>"></td>
                <td class="grey"></td>
                <td><input type="number" min="0" name="inject_nor_quant" class="form-control" value="<?php echo $table1->inject_nor_quant; ?>"></td>
                <td><input type="number" min="0" name="inject_nor_stock" class="form-control" value="<?php echo $table1->inject_nor_stock; ?>"></td>
                <td><input type="number" min="0" name="inject_nor_day" class="form-control" value="<?php echo $table1->inject_nor_day; ?>"></td>
              </tr>
              <tr>
                <td>5</td>
                <td class="left">Implants NXT</td>
                <td><input type="number" min="0" name="implants_nxt_accep" class="form-control" value="<?php echo $table1->implants_nxt_accep; ?>"></td>
                <td><input type="number" min="0" name="implants_nxt_ppfp" class="form-control" value="<?php echo $table1->implants_nxt_ppfp; ?>"></td>
                <td><input type="number" min="0" name="implants_nxt_users" class="form-control" value="<?php echo $table1->implants_nxt_users; ?>"></td>
                <td><input type="number" min="0" name="implants_nxt_stop" class="form-control" value="<?php echo $table1->implants_nxt_stop; ?>"></td>
                <td><input type="number" min="0" name="implants_nxt_active" class="form-control" value="<?php echo $table1->implants_nxt_active; ?>"></td>
                <td class="grey"></td>
                <td><input type="number" min="0" name="implants_nxt_quant" class="form-control" value="<?php echo $table1->implants_nxt_quant; ?>"></td>
                <td><input type="number" min="0" name="implants_nxt_stock" class="form-control" value="<?php echo $table1->implants_nxt_stock; ?>"></td>
                <td><input type="number" min="0" name="implants_nxt_day" class="form-control" value="<?php echo $table1->implants_nxt_day; ?>"></td>
              </tr>
              <tr>
                <td>6</td>
                <td class="left">Implants Jadelle</td>
                <td><input type="number" min="0" name="implants_jad_accep" class="form-control" value="<?php echo $table1->implants_jad_accep; ?>"></td>
                <td><input type="number" min="0" name="implants_jad_ppfp" class="form-control" value="<?php echo $table1->implants_jad_ppfp; ?>"></td>
                <td><input type="number" min="0" name="implants_jad_users" class="form-control" value="<?php echo $table1->implants_jad_users; ?>"></td>
                <td><input type="number" min="0" name="implants_jad_stop" class="form-control" value="<?php echo $table1->implants_jad_stop; ?>"></td>
                <td><input type="number" min="0" name="implants_jad_active" class="form-control" value="<?php echo $table1->implants_jad_active; ?>"></td>
                <td class="grey"></td>
                <td><input type="number" min="0" name="implants_jad_quant" class="form-control" value="<?php echo $table1->implants_jad_quant; ?>"></td>
                <td><input type="number" min="0" name="implants_jad_stock" class="form-control" value="<?php echo $table1->implants_jad_stock; ?>"></td>
                <td><input type="number" min="0" name="implants_jad_day" class="form-control" value="<?php echo $table1->implants_jad_day; ?>"></td>
              </tr>
              <tr>
                <td>7</td>
                <td class="left">IUD</td>
                <td><input type="number" min="0" name="iud_accep" class="form-control" value="<?php echo $table1->iud_accep; ?>"></td>
                <td><input type="number" min="0" name="iud_ppfp" class="form-control" value="<?php echo $table1->iud_ppfp; ?>"></td>
                <td><input type="number" min="0" name="iud_users" class="form-control" value="<?php echo $table1->iud_users; ?>"></td>
                <td><input type="number" min="0" name="iud_stop" class="form-control" value="<?php echo $table1->iud_stop; ?>"></td>
                <td><input type="number" min="0" name="iud_active" class="form-control" value="<?php echo $table1->iud_active; ?>"></td>
                <td class="grey"></td>
                <td><input type="number" min="0" name="iud_quant" class="form-control" value="<?php echo $table1->iud_quant; ?>"></td>
                <td><input type="number" min="0" name="iud_stock" class="form-control" value="<?php echo $table1->iud_stock; ?>"></td>
                <td><input type="number" min="0" name="iud_day" class="form-control" value="<?php echo $table1->iud_day; ?>"></td>
              </tr>
              <tr>
                <td>8</td>
                <td class="left">Male condoms</td>
                <td><input type="number" min="0" name="m_condoms_accep" class="form-control" value="<?php echo $table1->m_condoms_accep; ?>"></td>
                <td><input type="number" min="0" name="m_condoms_ppfp" class="form-control" value="<?php echo $table1->m_condoms_ppfp; ?>"></td>
                <td><input type="number" min="0" name="m_condoms_users" class="form-control" value="<?php echo $table1->m_condoms_users; ?>"></td>
                <td><input type="number" min="0" name="m_condoms_stop" class="form-control" value="<?php echo $table1->m_condoms_stop; ?>"></td>
                <td><input type="number" min="0" name="m_condoms_active" class="form-control" value="<?php echo $table1->m_condoms_active; ?>"></td>
                <td><input type="number" min="0" name="m_condoms_refer" class="form-control" value="<?php echo $table1->m_condoms_refer; ?>"></td>
                <td><input type="number" min="0" name="m_condoms_quant" class="form-control" value="<?php echo $table1->m_condoms_quant; ?>"></td>
                <td><input type="number" min="0" name="m_condoms_stock" class="form-control" value="<?php echo $table1->m_condoms_stock; ?>"></td>
                <td><input type="number" min="0" name="m_condoms_day" class="form-control" value="<?php echo $table1->m_condoms_day; ?>"></td>
              </tr>
              <tr>
                <td>9</td>
                <td class="left">Female condoms</td>
                <td><input type="number" min="0" name="f_condoms_accep" class="form-control" value="<?php echo $table1->f_condoms_accep; ?>"></td>
                <td><input type="number" min="0" name="f_condoms_ppfp" class="form-control" value="<?php echo $table1->f_condoms_ppfp; ?>"></td>
                <td><input type="number" min="0" name="f_condoms_users" class="form-control" value="<?php echo $table1->f_condoms_users; ?>"></td>
                <td><input type="number" min="0" name="f_condoms_stop" class="form-control" value="<?php echo $table1->f_condoms_stop; ?>"></td>
                <td><input type="number" min="0" name="f_condoms_active" class="form-control" value="<?php echo $table1->f_condoms_active; ?>"></td>
                <td><input type="number" min="0" name="f_condoms_refer" class="form-control" value="<?php echo $table1->f_condoms_refer; ?>"></td>
                <td><input type="number" min="0" name="f_condoms_quant" class="form-control" value="<?php echo $table1->f_condoms_quant; ?>"></td>
                <td><input type="number" min="0" name="f_condoms_stock" class="form-control" value="<?php echo $table1->f_condoms_stock; ?>"></td>
                <td><input type="number" min="0" name="f_condoms_day" class="form-control" value="<?php echo $table1->f_condoms_day; ?>"></td>
              </tr>
              <tr>
                <td>10</td>
                <td class="left">Other barrier methods</td>
                <td><input type="number" min="0" name="other_method_accep" class="form-control" value="<?php echo $table1->other_method_accep; ?>"></td>
                <td><input type="number" min="0" name="other_method_ppfp" class="form-control" value="<?php echo $table1->other_method_ppfp; ?>"></td>
                <td><input type="number" min="0" name="other_method_users" class="form-control" value="<?php echo $table1->other_method_users; ?>"></td>
                <td><input type="number" min="0" name="other_method_stop" class="form-control" value="<?php echo $table1->other_method_stop; ?>"></td>
                <td><input type="number" min="0" name="other_method_active" class="form-control" value="<?php echo $table1->other_method_active; ?>"></td>
                <td class="grey"></td>
                <td><input type="number" min="0" name="other_method_quant" class="form-control" value="<?php echo $table1->other_method_quant; ?>"></td>
                <td><input type="number" min="0" name="other_method_stock" class="form-control" value="<?php echo $table1->other_method_stock; ?>"></td>
                <td><input type="number" min="0" name="other_method_day" class="form-control" value="<?php echo $table1->other_method_day; ?>"></td>
              </tr>
              <tr>
                <td>11</td>
                <td class="left">Cycle beads</td>
                <td><input type="number" min="0" name="cycle_accep" class="form-control" value="<?php echo $table1->cycle_accep; ?>"></td>
                <td class="grey"></td>
                <td><input type="number" min="0" name="cycle_users" class="form-control" value="<?php echo $table1->cycle_users; ?>"></td>
                <td><input type="number" min="0" name="cycle_stop" class="form-control" value="<?php echo $table1->cycle_stop; ?>"></td>
                <td><input type="number" min="0" name="cycle_active" class="form-control" value="<?php echo $table1->cycle_active; ?>"></td>
                <td><input type="number" min="0" name="cycle_refer" class="form-control" value="<?php echo $table1->cycle_refer; ?>"></td>
                <td><input type="number" min="0" name="cycle_quant" class="form-control" value="<?php echo $table1->cycle_quant; ?>"></td>
                <td><input type="number" min="0" name="cycle_stock" class="form-control" value="<?php echo $table1->cycle_stock; ?>"></td>
                <td><input type="number" min="0" name="cycle_day" class="form-control" value="<?php echo $table1->cycle_day; ?>"></td>
              </tr>
              <tr>
                <td>12</td>
                <td class="left">Lactational amenorrhea</td>
                <td><input type="number" min="0" name="lam_accep" class="form-control" value="<?php echo $table1->lam_accep; ?>"></td>
                <td><input type="number" min="0" name="lam_ppfp" class="form-control" value="<?php echo $table1->lam_ppfp; ?>"></td>
                <td><input type="number" min="0" name="lam_users" class="form-control" value="<?php echo $table1->lam_users; ?>"></td>
                <td><input type="number" min="0" name="lam_stop" class="form-control" value="<?php echo $table1->lam_stop; ?>"></td>
                <td><input type="number" min="0" name="lam_active" class="form-control" value="<?php echo $table1->lam_active; ?>"></td>
                <td><input type="number" min="0" name="lam_refer" class="form-control" value="<?php echo $table1->lam_refer; ?>"></td>
                <td><input type="number" min="0" name="lam_quant" class="form-control" value="<?php echo $table1->lam_quant; ?>"></td>
                <td><input type="number" min="0" name="lam_stock" class="form-control" value="<?php echo $table1->lam_stock; ?>"></td>
                <td><input type="number" min="0" name="lam_day" class="form-control" value="<?php echo $table1->lam_day; ?>"></td>
              </tr>
              <tr>
                <td>13</td>
                <td class="left">Auto-observation</td>
                <td><input type="number" min="0" name="auto_obs_accep" class="form-control" value="<?php echo $table1->auto_obs_accep; ?>"></td>
                <td class="grey"></td>
                <td><input type="number" min="0" name="auto_obs_users" class="form-control" value="<?php echo $table1->auto_obs_users; ?>"></td>
                <td><input type="number" min="0" name="auto_obs_stop" class="form-control" value="<?php echo $table1->auto_obs_stop; ?>"></td>
                <td><input type="number" min="0" name="auto_obs_active" class="form-control" value="<?php echo $table1->auto_obs_active; ?>"></td>
                <td class="grey"></td>
                <td class="grey"></td>
                <td class="grey"></td>
                <td class="grey"></td>
              </tr>
              <tr>
                <td>14</td>
                <td class="left">Tubal ligations</td>
                <td><input type="number" min="0" name="tubal_accep" class="form-control" value="<?php echo $table1->tubal_accep; ?>"></td>
                <td><input type="number" min="0" name="tubal_ppfp" class="form-control" value="<?php echo $table1->tubal_ppfp; ?>"></td>
                <td><input type="number" min="0" name="tubal_users" class="form-control" value="<?php echo $table1->tubal_users; ?>"></td>
                <td class="grey"></td>
                <td><input type="number" min="0" name="tubal_active" class="form-control" value="<?php echo $table1->tubal_active; ?>"></td>
                <td class="grey"></td>
                <td class="grey"></td>
                <td class="grey"></td>
                <td class="grey"></td>
              </tr>
              <tr>
                <td>15</td>
                <td class="left">Vasectomy</td>
                <td><input type="number" min="0" name="vasectomy_accep" class="form-control" value="<?php echo $table1->vesectomy_accep; ?>"></td>
                <td><input type="number" min="0" name="vasectomy_ppfp" class="form-control" value="<?php echo $table1->vesectomy_ppfp; ?>"></td>
                <td><input type="number" min="0" name="vasectomy_users" class="form-control" value="<?php echo $table1->vesectomy_users; ?>"></td>
                <td class="grey"></td>
                <td><input type="number" min="0" name="vasectomy_active" class="form-control" value="<?php echo $table1->vesectomy_active; ?>"></td>
                <td class="grey"></td>
                <td class="grey"></td>
                <td class="grey"></td>
                <td class="grey"></td>
              </tr>
            </tbody>
          </table>
					<div class="row">
						<div class="col-xs-4">
			      	<h4>New FP users</h4>
						</div>
						<div class="col-xs-8">
							<h4>Sperm control</h4>
						</div>
					</div>
          <br>
					<div class="row">
						<div class="col-xs-4">
				      <table id="B22" class="center">
				        <thead>
				          <tr>
				            <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				            <th>Total</th>
				          </tr>
				        </thead>
				        <tbody>
				          <tr>
				            <td class="left">FP new acceptors to the program accompanied by partner</td>
				            <td><input type="number" min="0" name="fp_new_acceptors" class="form-control" value="<?php echo $table1->fp_new_acceptors; ?>"></td>
				          </tr>
				          <tr>
				            <td class="left">New FP users referred by CHWs for modern family planning method</td>
				            <td><input type="number" min="0" name="new_fp_users" class="form-control" value="<?php echo $table1->new_fp_users; ?>"></td>
				          </tr>
				        </tbody>
				      </table>
						</div>
						<div class="col-xs-8">
							<table id="C22" class="center">
								<thead>
									<tr>
										<th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Test taken<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Positive<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Negative (no spermatozoids)<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="left">Sperm control of vasectomized clients</td>
										<td><input type="number" min="0" name="sperm_control_test" class="form-control" value="<?php echo $table1->sperm_control_test; ?>"></td>
		                <td><input type="number" min="0" name="sperm_control_positive" class="form-control" value="<?php echo $table1->sperm_control_positive; ?>"></td>
		                <td><input type="number" min="0" name="sperm_control_negative" class="form-control" value="<?php echo $table1->sperm_control_negative; ?>"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<br>
          <h4>Summary by age</h4>
          <table id="D22" class="center">
            <thead>
              <tr>
                <th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th>Age 15 to 19<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th>Age 20 to 24<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th>Age 25 to 34<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                <th>Age > 35<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="left">New acceptors in the program by age group</td>
                <td><input type="number" min="0" name="acceptors_prog_19" class="form-control" value="<?php echo $table1->acceptors_prog_19; ?>"></td>
                <td><input type="number" min="0" name="acceptors_prog_24" class="form-control" value="<?php echo $table1->acceptors_prog_24; ?>"></td>
                <td><input type="number" min="0" name="acceptors_prog_34" class="form-control" value="<?php echo $table1->acceptors_prog_34; ?>"></td>
                <td><input type="number" min="0" name="acceptors_prog_35" class="form-control" value="<?php echo $table1->acceptors_prog_35; ?>"></td>
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
	$('#A2').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	    });
	$('#B2').DataTable({
		"bPaginate": false,
	 	"bLengthChange": false,
	 	"bInfo": false,
	 	"searching": false
	    });
	$('#C2').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	    });
	$('#D2').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	    });
	$('#A3').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	    });
	$('#B3').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false
	    });
	$('.dataTables_length').addClass('bs-select');
</script>
