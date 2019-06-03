<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laboratory</title>
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
			<h2>Laboratory - Report of <?php echo date('d/m/Y', strtotime($this->session->userdata('update_date'))); ?></h2>
      <div>
        <form method="post" action="" class="form-inline">
		     	<br><h4>Examens</h4>
		      <table id="A" class="center">
						<thead>
		          <tr>
								<th rowspan="2">N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
								<th rowspan="2">Examens<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
								<th colspan="2">Results</th>
								<th>Total</th>
		          </tr>
		          <tr>
		            <th>Positives<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
								<th>Negatives<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
		            <td><input type="number" min="0" name="exams_t" class="form-control" value="<?php echo $table1->exams_t; ?>"></td>
							</tr>
		        </thead>
		        <tbody>
		          <tr>
								<td>1</td>
		            <td class="left">Blood smears</td>
								<td class="grey"></td>
		            <td><input type="number" min="0" name="blood_n" class="form-control" value="<?php echo $table1->blood_n; ?>"></td>
		            <td><input type="number" min="0" name="blood_t" class="form-control" value="<?php echo $table1->blood_t; ?>"></td>
		          </tr>
		          <tr>
								<td>1.1</td>
		            <td class="left">Plasmodium</td>
								<td><input type="number" min="0" name="plasmodium_p" class="form-control" value="<?php echo $table1->plasmodium_p; ?>"></td>
		            <td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>1.2</td>
		            <td class="left">Micro-filaria</td>
								<td><input type="number" min="0" name="micro_p" class="form-control" value="<?php echo $table1->micro_p; ?>"></td>
		            <td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>1.3</td>
		            <td class="left">Borellia</td>
								<td><input type="number" min="0" name="borellia_p" class="form-control" value="<?php echo $table1->borellia_p; ?>"></td>
		            <td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>1.4</td>
		            <td class="left">Trypanosoma</td>
								<td><input type="number" min="0" name="trypa_p" class="form-control" value="<?php echo $table1->trypa_p; ?>"></td>
		            <td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>2</td>
		            <td class="left">Rapid diagnostic tests for malaria</td>
								<td><input type="number" min="0" name="malaria_p" class="form-control" value="<?php echo $table1->malaria_p; ?>"></td>
		            <td><input type="number" min="0" name="malaria_n" class="form-control" value="<?php echo $table1->malaria_n; ?>"></td>
								<td><input type="number" min="0" name="malaria_t" class="form-control" value="<?php echo $table1->malaria_t; ?>"></td>
		          </tr>
							<tr>
								<td>3</td>
		            <td class="left">Stools samples total</td>
								<td class="grey"></td>
		            <td><input type="number" min="0" name="stools_n" class="form-control" value="<?php echo $table1->stools_n; ?>"></td>
		            <td><input type="number" min="0" name="stools_t" class="form-control" value="<?php echo $table1->stools_t; ?>"></td>
		          </tr>
							<tr>
								<td>3.1</td>
		            <td class="left pad">Entamoebahistolytica</td>
								<td><input type="number" min="0" name="entamo_p" class="form-control" value="<?php echo $table1->entamo_p; ?>"></td>
		            <td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>3.2</td>
		            <td class="left pad">Entamoeba coli</td>
								<td><input type="number" min="0" name="coli_p" class="form-control" value="<?php echo $table1->coli_p; ?>"></td>
		            <td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>3.3</td>
		            <td class="left pad">Giardia</td>
								<td><input type="number" min="0" name="giardia_p" class="form-control" value="<?php echo $table1->giardia_p; ?>"></td>
		            <td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>3.4</td>
		            <td class="left pad">Ascariasis</td>
								<td><input type="number" min="0" name="asca_p" class="form-control" value="<?php echo $table1->asca_p; ?>"></td>
		            <td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>3.5</td>
		            <td class="left pad">Ankylostomiasis</td>
								<td><input type="number" min="0" name="anky_p" class="form-control" value="<?php echo $table1->anky_p; ?>"></td>
		            <td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>3.6</td>
		            <td class="left pad">Schistosoma</td>
								<td><input type="number" min="0" name="schisto_p" class="form-control" value="<?php echo $table1->schisto_p; ?>"></td>
		            <td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>3.7</td>
		            <td class="left pad">Trichuris</td>
								<td><input type="number" min="0" name="trichuris_p" class="form-control" value="<?php echo $table1->trichuris_p; ?>"></td>
		            <td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>3.8</td>
		            <td class="left pad">Taenia</td>
								<td><input type="number" min="0" name="taenia_p" class="form-control" value="<?php echo $table1->taenia_p; ?>"></td>
		            <td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>3.9</td>
		            <td class="left pad">Other parasites in stools</td>
								<td><input type="number" min="0" name="other_stools_p" class="form-control" value="<?php echo $table1->other_stools_p; ?>"></td>
		            <td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>4</td>
		            <td class="left">Urine</td>
								<td class="grey"></td>
								<td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>4.1</td>
		            <td class="left pad">Sugar</td>
								<td><input type="number" min="0" name="sugar_p" class="form-control" value="<?php echo $table1->sugar_p; ?>"></td>
		            <td><input type="number" min="0" name="sugar_n" class="form-control" value="<?php echo $table1->sugar_n; ?>"></td>
								<td><input type="number" min="0" name="sugar_t" class="form-control" value="<?php echo $table1->sugar_t; ?>"></td>
		          </tr>
							<tr>
								<td>4.2</td>
		            <td class="left pad">Albumin</td>
								<td><input type="number" min="0" name="albumin_p" class="form-control" value="<?php echo $table1->albumin_p; ?>"></td>
		            <td><input type="number" min="0" name="albumin_n" class="form-control" value="<?php echo $table1->albumin_n; ?>"></td>
								<td><input type="number" min="0" name="albumin_t" class="form-control" value="<?php echo $table1->albumin_t; ?>"></td>
		          </tr>
							<tr>
								<td>4.3</td>
		            <td class="left pad">Pregnancy test</td>
								<td><input type="number" min="0" name="pregnancy_p" class="form-control" value="<?php echo $table1->pregnancy_p; ?>"></td>
		            <td><input type="number" min="0" name="pregnancy_n" class="form-control" value="<?php echo $table1->pregnancy_n; ?>"></td>
								<td><input type="number" min="0" name="pregnancy_t" class="form-control" value="<?php echo $table1->pregnancy_t; ?>"></td>
		          </tr>
							<tr>
								<td>5</td>
		            <td class="left">Sputum (number of patients)</td>
								<td class="grey"></td>
								<td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>5.1</td>
		            <td class="left pad">Diagnosis of TB by microscopy</td>
								<td><input type="number" min="0" name="diag_tb_p" class="form-control" value="<?php echo $table1->diag_tb_p; ?>"></td>
		            <td><input type="number" min="0" name="diag_tb_n" class="form-control" value="<?php echo $table1->diag_tb_n; ?>"></td>
								<td><input type="number" min="0" name="diag_tb_t" class="form-control" value="<?php echo $table1->diag_tb_t; ?>"></td>
		          </tr>
							<tr>
								<td>5.2</td>
		            <td class="left pad">Control of TB positive patients</td>
								<td><input type="number" min="0" name="control_tb_p" class="form-control" value="<?php echo $table1->control_tb_p; ?>"></td>
		            <td><input type="number" min="0" name="control_tb_n" class="form-control" value="<?php echo $table1->control_tb_n; ?>"></td>
								<td><input type="number" min="0" name="control_tb_t" class="form-control" value="<?php echo $table1->control_tb_t; ?>"></td>
		          </tr>
							<tr>
								<td>6</td>
		            <td class="left">Bacteriology</td>
								<td class="grey"></td>
								<td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>6.1</td>
		            <td class="left pad">Vaginal swab fresh</td>
								<td><input type="number" min="0" name="vag_fresh_p" class="form-control" value="<?php echo $table1->vag_fresh_p; ?>"></td>
		            <td><input type="number" min="0" name="vag_fresh_n" class="form-control" value="<?php echo $table1->vag_fresh_n; ?>"></td>
								<td><input type="number" min="0" name="vag_fresh_t" class="form-control" value="<?php echo $table1->vag_fresh_t; ?>"></td>
		          </tr>
							<tr>
								<td>6.2</td>
		            <td class="left pad">Vaginal swab gram</td>
								<td><input type="number" min="0" name="vag_gram_p" class="form-control" value="<?php echo $table1->vag_gram_p; ?>"></td>
		            <td><input type="number" min="0" name="vag_gram_n" class="form-control" value="<?php echo $table1->vag_gram_n; ?>"></td>
								<td><input type="number" min="0" name="vag_gram_t" class="form-control" value="<?php echo $table1->vag_gram_t; ?>"></td>
		          </tr>
							<tr>
								<td>6.3</td>
		            <td class="left pad">Vaginal swab diplococcus gram</td>
								<td><input type="number" min="0" name="vag_diplo_p" class="form-control" value="<?php echo $table1->vag_diplo_p; ?>"></td>
		            <td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>6.4</td>
		            <td class="left pad">Urethral swab fresh</td>
								<td><input type="number" min="0" name="ure_fresh_p" class="form-control" value="<?php echo $table1->ure_fresh_p; ?>"></td>
		            <td><input type="number" min="0" name="ure_fresh_n" class="form-control" value="<?php echo $table1->ure_fresh_n; ?>"></td>
								<td><input type="number" min="0" name="ure_fresh_t" class="form-control" value="<?php echo $table1->ure_fresh_t; ?>"></td>
		          </tr>
							<tr>
								<td>6.5</td>
		            <td class="left pad">Urethral swab gram</td>
								<td><input type="number" min="0" name="ure_gram_p" class="form-control" value="<?php echo $table1->ure_gram_p; ?>"></td>
		            <td><input type="number" min="0" name="ure_gram_n" class="form-control" value="<?php echo $table1->ure_gram_n; ?>"></td>
								<td><input type="number" min="0" name="ure_gram_t" class="form-control" value="<?php echo $table1->ure_gram_t; ?>"></td>
		          </tr>
							<tr>
								<td>6.6</td>
		            <td class="left pad">Urethral swab diplococcus gram</td>
								<td><input type="number" min="0" name="ure_diplo_p" class="form-control" value="<?php echo $table1->ure_diplo_p; ?>"></td>
		            <td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>7</td>
		            <td class="left">Blood</td>
								<td class="grey"></td>
								<td class="grey"></td>
								<td class="grey"></td>
		          </tr>
							<tr>
								<td>7.1</td>
		            <td class="left pad">Hemoglobin</td>
								<td class="grey"></td>
								<td class="grey"></td>
								<td><input type="number" min="0" name="hemo_t" class="form-control" value="<?php echo $table1->hemo_t; ?>"></td>
		          </tr>
							<tr>
								<td>7.2</td>
		            <td class="left pad">RPR</td>
								<td><input type="number" min="0" name="rpr_p" class="form-control" value="<?php echo $table1->rpr_p; ?>"></td>
								<td><input type="number" min="0" name="rpr_n" class="form-control" value="<?php echo $table1->rpr_n; ?>"></td>
								<td><input type="number" min="0" name="rpr_t" class="form-control" value="<?php echo $table1->rpr_t; ?>"></td>
		          </tr>
							<tr>
								<td>7.3</td>
		            <td class="left pad">HIV final result</td>
								<td><input type="number" min="0" name="hiv_p" class="form-control" value="<?php echo $table1->hiv_p; ?>"></td>
								<td><input type="number" min="0" name="hiv_n" class="form-control" value="<?php echo $table1->hiv_n; ?>"></td>
								<td><input type="number" min="0" name="hiv_t" class="form-control" value="<?php echo $table1->hiv_t; ?>"></td>
		          </tr>
							<tr>
								<td>7.4</td>
		            <td class="left pad">ESR</td>
								<td class="grey"></td>
								<td class="grey"></td>
								<td><input type="number" min="0" name="esr_t" class="form-control" value="<?php echo $table1->esr_t; ?>"></td>
		          </tr>
							<tr>
								<td>7.5</td>
		            <td class="left pad">Full blood count (FBC / NFS)</td>
								<td class="grey"></td>
								<td class="grey"></td>
								<td><input type="number" min="0" name="full_t" class="form-control" value="<?php echo $table1->full_t; ?>"></td>
		          </tr>
							<tr>
								<td>7.6</td>
		            <td class="left pad">ALAT (GPT)</td>
								<td class="grey"></td>
								<td class="grey"></td>
								<td><input type="number" min="0" name="alat_t" class="form-control" value="<?php echo $table1->alat_t; ?>"></td>
		          </tr>
							<tr>
								<td>7.7</td>
		            <td class="left pad">Creatinine</td>
								<td class="grey"></td>
								<td class="grey"></td>
								<td><input type="number" min="0" name="crea_t" class="form-control" value="<?php echo $table1->crea_t; ?>"></td>
		          </tr>
							<tr>
								<td>7.8</td>
		            <td class="left pad">Blood glucose</td>
								<td class="grey"></td>
								<td class="grey"></td>
								<td><input type="number" min="0" name="glucose_t" class="form-control" value="<?php echo $table1->glucose_t; ?>"></td>
		          </tr>
							<tr>
								<td>7.9</td>
		            <td class="left pad">Amylase</td>
								<td class="grey"></td>
								<td class="grey"></td>
								<td><input type="number" min="0" name="amylase_t" class="form-control" value="<?php echo $table1->amylase_t; ?>"></td>
		          </tr>
							<tr>
								<td>7.10</td>
		            <td class="left pad">CD<sub>4</sub></td>
								<td class="grey"></td>
								<td class="grey"></td>
								<td><input type="number" min="0" name="cd4_t" class="form-control" value="<?php echo $table1->cd4_t; ?>"></td>
		          </tr>
							<tr>
								<td>7.11</td>
		            <td class="left pad">Widal</td>
								<td><input type="number" min="0" name="widal_p" class="form-control" value="<?php echo $table1->widal_p; ?>"></td>
								<td><input type="number" min="0" name="widal_n" class="form-control" value="<?php echo $table1->widal_n; ?>"></td>
								<td><input type="number" min="0" name="widal_t" class="form-control" value="<?php echo $table1->widal_t; ?>"></td>
		          </tr>
							<tr>
								<td>7.12</td>
		            <td class="left pad">Pregnancy test</td>
								<td><input type="number" min="0" name="blood_preg_p" class="form-control" value="<?php echo $table1->blood_preg_p; ?>"></td>
								<td><input type="number" min="0" name="blood_preg_n" class="form-control" value="<?php echo $table1->blood_preg_n; ?>"></td>
								<td><input type="number" min="0" name="blood_preg_t" class="form-control" value="<?php echo $table1->blood_preg_t; ?>"></td>
		          </tr>
							<tr>
								<td>8</td>
		            <td class="left">CerebroSpinal fluid</td>
								<td class="grey"></td>
								<td class="grey"></td>
								<td><input type="number" min="0" name="cerebro_t" class="form-control" value="<?php echo $table1->cerebro_t; ?>"></td>
		          </tr>
							<tr>
								<td>9</td>
		            <td class="left">Other lab tests</td>
								<td class="grey"></td>
								<td class="grey"></td>
								<td><input type="number" min="0" name="other_lab_t" class="form-control" value="<?php echo $table1->other_lab_t; ?>"></td>
		          </tr>
							<tr>
								<td>10</td>
		            <td class="left">Total tests conducted in the laboratory</td>
								<td class="grey"></td>
								<td class="grey"></td>
								<td><input type="number" min="0" name="total" class="form-control" value="<?php echo $table1->total; ?>"></td>
		          </tr>
		        </tbody>
		      </table>

					<br>

					<div class="row">
						<div class="col-xs-5">
							<h4>Transfusions</h4>
						</div>
						<div class="col-xs-7">
							<h4>Blood pack stock management</h4>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-5">
				      <table id="B" class="center">
				        <thead>
				          <tr>
				            <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Service<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Patients transfused<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Packs of blood<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				          </tr>
				        </thead>
				        <tbody>
				          <tr>
										<td>1</td>
				            <td class="left">Internal medicine</td>
				            <td><input type="number" min="0" name="im_patient_transfused" class="form-control" value="<?php echo $table2->im_patient_transfused; ?>"></td>
				            <td><input type="number" min="0" name="im_packs" class="form-control" value="<?php echo $table2->im_packs; ?>"></td>
				          </tr>
				          <tr>
										<td>2</td>
				            <td class="left">Pediatrics</td>
										<td><input type="number" min="0" name="p_patient_transfused" class="form-control" value="<?php echo $table2->p_patient_transfused; ?>"></td>
				            <td><input type="number" min="0" name="p_packs" class="form-control" value="<?php echo $table2->p_packs; ?>"></td>
				          </tr>
									<tr>
										<td>3</td>
				            <td class="left">Surgery</td>
										<td><input type="number" min="0" name="s_patient_transfused" class="form-control" value="<?php echo $table2->s_patient_transfused; ?>"></td>
				            <td><input type="number" min="0" name="s_packs" class="form-control" value="<?php echo $table2->s_packs; ?>"></td>
				          </tr>
									<tr>
										<td>4</td>
				            <td class="left">Gyneco - obstetrical</td>
										<td><input type="number" min="0" name="go_patient_transfused" class="form-control" value="<?php echo $table2->go_patient_transfused; ?>"></td>
				            <td><input type="number" min="0" name="go_packs" class="form-control" value="<?php echo $table2->go_packs; ?>"></td>
				          </tr>
									<tr>
										<td>5</td>
				            <td class="left">Intensive care / Emergency</td>
										<td><input type="number" min="0" name="ic_patient_transfused" class="form-control" value="<?php echo $table2->ic_patient_transfused; ?>"></td>
				            <td><input type="number" min="0" name="ic_packs" class="form-control" value="<?php echo $table2->ic_packs; ?>"></td>
				          </tr>
									<tr>
										<td>6</td>
				            <td class="left">Neonatology</td>
										<td><input type="number" min="0" name="n_patient_transfused" class="form-control" value="<?php echo $table2->n_patient_transfused; ?>"></td>
				            <td><input type="number" min="0" name="n_packs" class="form-control" value="<?php echo $table2->n_packs; ?>"></td>
				          </tr>
				        </tbody>
				      </table>
						</div>

						<div class="col-xs-7">
				      <table id="C" class="center">
				        <thead>
				          <tr>
				            <th>N°<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Designation<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Type A<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Type B<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Type AB<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
										<th>Type O<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
				          </tr>
				        </thead>
				        <tbody>
				          <tr>
										<td>1</td>
				            <td class="left">Blood pack received</td>
				            <td><input type="number" min="0" name="a_received" class="form-control" value="<?php echo $table2->a_received; ?>"></td>
										<td><input type="number" min="0" name="b_received" class="form-control" value="<?php echo $table2->b_received; ?>"></td>
										<td><input type="number" min="0" name="ab_received" class="form-control" value="<?php echo $table2->ab_received; ?>"></td>
										<td><input type="number" min="0" name="o_received" class="form-control" value="<?php echo $table2->o_received; ?>"></td>
				          </tr>
				          <tr>
										<td>2</td>
				            <td class="left">Blood pack used</td>
										<td><input type="number" min="0" name="a_used" class="form-control" value="<?php echo $table2->a_used; ?>"></td>
										<td><input type="number" min="0" name="b_used" class="form-control" value="<?php echo $table2->b_used; ?>"></td>
										<td><input type="number" min="0" name="ab_used" class="form-control" value="<?php echo $table2->ab_used; ?>"></td>
										<td><input type="number" min="0" name="o_used" class="form-control" value="<?php echo $table2->o_used; ?>"></td>
				          </tr>
									<tr>
										<td>3</td>
				            <td class="left">Blood pack destroyed or damaged</td>
										<td><input type="number" min="0" name="a_destroyed" class="form-control" value="<?php echo $table2->a_destroyed; ?>"></td>
										<td><input type="number" min="0" name="b_destroyed" class="form-control" value="<?php echo $table2->b_destroyed; ?>"></td>
										<td><input type="number" min="0" name="ab_destroyed" class="form-control" value="<?php echo $table2->ab_destroyed; ?>"></td>
										<td><input type="number" min="0" name="o_destroyed" class="form-control" value="<?php echo $table2->o_destroyed; ?>"></td>
				          </tr>
									<tr>
										<td>4</td>
				            <td class="left">Blood pack remaining in stock</td>
										<td><input type="number" min="0" name="a_stock" class="form-control" value="<?php echo $table2->a_stock; ?>"></td>
										<td><input type="number" min="0" name="b_stock" class="form-control" value="<?php echo $table2->b_stock; ?>"></td>
										<td><input type="number" min="0" name="ab_stock" class="form-control" value="<?php echo $table2->ab_stock; ?>"></td>
										<td><input type="number" min="0" name="o_stock" class="form-control" value="<?php echo $table2->o_stock; ?>"></td>
				          </tr>
				        </tbody>
				      </table>
						</div>
					</div>

					<br>
      		<center><button type="submit">Validate</button></center>
				</form>
    	</div>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		</div>
	</body>
</html>
<script>
	$('#A').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false
	});
	$('#B').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	});
	$('#C').DataTable({
		"bPaginate": false,
		"bLengthChange": false,
		"bInfo": false,
		"searching": false
	});
	$('.dataTables_length').addClass('bs-select');
</script>
