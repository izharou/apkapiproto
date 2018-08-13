


<?php
      echo $this->session->flashdata('action_status');
      echo validation_errors();
      ?>

<html lang="en">
<head>
  <?php
  					$array_form_login = array(
  						'class' => 'form-signin'
  						);

  					echo form_open('auth/login', $array_form_login);
  	?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Here</title>
	<link rel="stylesheet" href="../../assets/css/style.css">
	<link rel="stylesheet" href="../../assets/plugin/FontAwesome/css/font-awesome.min.css">
</head>

<style>
	body{
		background-image: url("../../assets/img/bg.jpg");
	}
</style>

<body>
	<div id="container" class="bungloon-outline">

    <div id="infoMessage"><?php echo $message;?></div>

		<div class="box box-sm">
			<div class="logo">
				<span style="color:rgba(255,255,255,.4);">Sign in form</span>
				<h1 style="font-size:32pt;letter-spacing:-3px;">Aplikasi <span style="color:yellow">API</span></h1>
			</div>

			<div class="form">


        <form action="#">
					<div class="form-group">
						<span class="form-icon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-input" placeholder="username" name="identity" >
					</div>
					<div class="form-group">
						<span class="form-icon"><i class="fa fa-lock"></i></span>
						<input type="password" class="form-input" placeholder="password" name="password">
					</div>


            <?php echo lang('login_remember_label', 'remember');?>
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>


					<button class="btn btn-success btn-block" type="submit" >Sign in</button>
					<div class="form-text">

            <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>

				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../../assets/plugin/jQuery/jquery-3.2.1.slim.min.js"></script>
	<script type="text/javascript" src="../../assets/js/script.js"></script>
</body>



<?php echo form_close();?>
