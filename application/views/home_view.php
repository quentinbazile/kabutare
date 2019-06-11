<html>
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
		<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bs-css.css'); ?>" />
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/recherche15.css'); ?>" />
	  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-select.min.css'); ?>">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<div class="container" id="all">
			<div id="fill1">
				<div class="row">
					<h2>Fill out a report</h2>
					<form action="" method="POST">
						<div class="col-xs-offset-4 col-xs-2">
							<select name="add" id="add" class="form-control" required>
								<?php $array = array(date('Y-m-d', strtotime('-4 days')),
                             date('Y-m-d', strtotime('-3 days')),
                             date('Y-m-d', strtotime('-2 days')),
                             date('Y-m-d', strtotime('-1 day')),
                             date('Y-m-d'));
                if ($this->home_model->check_service('minor_surgery') || $this->home_model->check_service('operating_room')) {
                    foreach ($dates_surgery as $d):
                       if (($val = array_search($d->date_surgery, $array)) !== false) {
                           unset($array[$val]);
                       }
                    endforeach;
                } elseif ($this->home_model->check_service('internal_medicine') || $this->home_model->check_service('neonatology') || $this->home_model->check_service('pediatrics') ||
                          $this->home_model->check_service('surgery') || $this->home_model->check_service('intensive_care') || $this->home_model->check_service('nut_rehab') || $this->home_model->check_service('gynecology')) {
                    foreach ($dates_im as $d):
                                        if (($val = array_search($d->date_hospitalization_bcde, $array)) !== false) {
                                            unset($array[$val]);
                                        }
                    endforeach;
                } elseif ($this->home_model->check_service('family_planning')) {
                    foreach ($dates_fp as $d):
                                        if (($val = array_search($d->date_family_planning, $array)) !== false) {
                                            unset($array[$val]);
                                        }
                    endforeach;
                } elseif ($this->home_model->check_service('pharmacy')) {
                    foreach ($dates_pharm as $d):
                                        if (($val = array_search($d->date_pharmacy, $array)) !== false) {
                                            unset($array[$val]);
                                        }
                    endforeach;
                } elseif ($this->home_model->check_service('hr')) {
                    foreach ($dates_hr as $d):
                                        if (($val = array_search($d->date_staff, $array)) !== false) {
                                            unset($array[$val]);
                                        }
                    endforeach;
                } elseif ($this->home_model->check_service('laboratory')) {
                    foreach ($dates_lab as $d):
                                        if (($val = array_search($d->date_laboratory, $array)) !== false) {
                                            unset($array[$val]);
                                        }
                    endforeach;
                } else {
                    foreach ($dates as $date):
                                        if (($val = array_search($date->date_consultation_abcde, $array)) !== false) {
                                            unset($array[$val]);
                                        }
                    endforeach;
                }
                foreach ($array as $value):?>
								<option value="<?php echo $value; ?>"><?php echo date('d/m/Y', strtotime($value)); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-xs-2">
							<button name="btn_add" type="submit">Validate</button>
						</div>
					</form>
				</div>
			</div>
			<div id="fill2">
				<div class="row">
					<h2>Update a report</h2>
					<form action="" method="POST">
						<div class="col-xs-offset-4 col-xs-2">
							<select name="update" id="update" class="form-control" required>
								<?php if ($this->home_model->check_service('minor_surgery') || $this->home_model->check_service('operating_room')) {
                    foreach ($dates_surgery as $d):?>
										<option value="<?php echo $d->date_surgery; ?>"><?php echo date('d/m/Y', strtotime($d->date_surgery)); ?></option>
									<?php endforeach;
                } elseif ($this->home_model->check_service('internal_medicine') || $this->home_model->check_service('neonatology') || $this->home_model->check_service('pediatrics') ||
                                $this->home_model->check_service('surgery') || $this->home_model->check_service('intensive_care') || $this->home_model->check_service('nut_rehab') || $this->home_model->check_service('gynecology')) {
                    foreach ($dates_im as $d):?>
										<option value="<?php echo $d->date_hospitalization_bcde; ?>"><?php echo date('d/m/Y', strtotime($d->date_hospitalization_bcde)); ?></option>
									<?php endforeach;
                } elseif ($this->home_model->check_service('family_planning')) {
                    foreach ($dates_fp as $d):?>
										<option value="<?php echo $d->date_family_planning; ?>"><?php echo date('d/m/Y', strtotime($d->date_family_planning)); ?></option>
									<?php endforeach;
                } elseif ($this->home_model->check_service('pharmacy')) {
                    foreach ($dates_pharm as $d):?>
										<option value="<?php echo $d->date_pharmacy; ?>"><?php echo date('d/m/Y', strtotime($d->date_pharmacy)); ?></option>
									<?php endforeach;
                } elseif ($this->home_model->check_service('hr')) {
                    foreach ($dates_hr as $d):?>
										<option value="<?php echo $d->date_staff; ?>"><?php echo date('d/m/Y', strtotime($d->date_staff)); ?></option>
									<?php endforeach;
                } elseif ($this->home_model->check_service('laboratory')) {
                    foreach ($dates_lab as $d):?>
										<option value="<?php echo $d->date_laboratory; ?>"><?php echo date('d/m/Y', strtotime($d->date_laboratory)); ?></option>
									<?php endforeach;
                } else {
                    foreach ($dates as $date):?>
										<option value="<?php echo $date->date_consultation_abcde; ?>"><?php echo date('d/m/Y', strtotime($date->date_consultation_abcde)); ?></option>
									<?php endforeach;
                }?>
							</select>
						</div>
						<div class="col-xs-2">
							<button name="btn_update" type="submit">Validate</button>
						</div>
					</form>
				</div>
    	</div>

			<div class="row">
				<div class="col-xs-offset-11">
					<button class="center" type="button" onclick="location.href='<?php echo base_url();?>home/logout'">Log Out</button>
				</div>
			</div>

			<div id="changePassword">
				<div class="row">
        	<h2>Change Password</h2>
					<?php echo form_open('home/changePassword')?>
					<div class="col-xs-offset-2 col-xs-2">
	          <input type="password" name="oldpass" id="oldpass" class="form-control" placeholder="Old Password" />
	          <?php echo form_error('oldpass', '<div class="error">', '</div>')?>
					</div>
					<div class="col-xs-2">
	          <input type="password" name="newpass" id="newpass" class="form-control" placeholder="New Password" />
	          <?php echo form_error('newpass', '<div class="error">', '</div>')?>
					</div>
					<div class="col-xs-2">
	          <input type="password" name="passconf" id="passconf" class="form-control" placeholder="Confirm Password" />
	          <?php echo form_error('passconf', '<div class="error">', '</div>')?>
					</div>
					<div class="col-xs-2">
	          <button type="submit">Change</button>
					</div>
		        <?php echo form_close(); ?>
				</div>
			</div>


		</div>
    <script src="<?php echo base_url('assets/js/jquery2.min.js'); ?>"></script>
	  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	  <script src="<?php echo base_url('assets/js/bootstrap-select.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
  </body>
</html>

<script>
	if (document.getElementById('add').options.length == 0)
	  document.getElementById('fill1').style.display = 'none';
	else
		document.getElementById('fill1').style.display = 'block';

	if (document.getElementById('update').options.length == 0)
	  document.getElementById('fill2').style.display = 'none';
	else
		document.getElementById('fill2').style.display = 'block';
</script>
