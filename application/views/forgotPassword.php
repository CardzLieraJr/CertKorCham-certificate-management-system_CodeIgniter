<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CertKorChamNet : Forgot Password</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/login.css" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
	<div class="wrapper fadeInDown">
    <div id="formContent">
		<div class="fadeIn first">
			<h1>Forgot Password</h1>
		</div>
		
        <?php $this->load->helper('form'); ?>
			<div class="col-md-12">
				<?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            
				<?php
				$this->load->helper('form');
				$error = $this->session->flashdata('error');
				$send = $this->session->flashdata('send');
				$notsend = $this->session->flashdata('notsend');
				$unable = $this->session->flashdata('unable');
				$invalid = $this->session->flashdata('invalid');
				if($error)
				{
					?>
					<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<?php echo $this->session->flashdata('error'); ?>                    
					</div>
				<?php }

				if($send)
				{
					?>
					<div class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<?php echo $send; ?>                    
					</div>
				<?php }

				if($notsend)
				{
					?>
					<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<?php echo $notsend; ?>                    
					</div>
				<?php }
				
				if($unable)
				{
					?>
					<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<?php echo $unable; ?>                    
					</div>
				<?php }

				if($invalid)
				{
					?>
					<div class="alert alert-warning alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<?php echo $invalid; ?>                    
					</div>
				<?php } ?>
			</div>
        
			<form action="<?php echo base_url(); ?>resetPasswordUser" method="post">
				<div class="input-group mb-3">
					<div class="col-md-12">
						<input type="email" class="form-control" placeholder="Email" name="login_email" required />
					</div>
				</div>
				
				<div class="input-group mb-3">
					<div class="col-md-12">
						<input type="submit" class="btn btn-primary btn-block btn-flat" value="Submit" />
					</div>
				</div>
				<a class="underlinehover" href="<?php echo base_url() ?>">Login</a>
			</form>
        
      </div>
    </div>
	

<div class="col-lg-4 col-lg-offset-4">
    <h2>Forgot Password</h2>
    <p>Please enter your email address and we'll send you instructions on how to reset your password</p>
    <?php $fattr = array('class' => 'form-signin');
         echo form_open(site_url().'forgot/forgot/', $fattr); ?>
    <div class="form-group">
      <?php echo form_input(array(
          'name'=>'email', 
          'id'=> 'email', 
          'placeholder'=>'Email', 
          'class'=>'form-control', 
          'value'=> set_value('email'))); ?>
      <?php echo form_error('email') ?>
    </div>
    <?php echo form_submit(array('value'=>'Submit', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>    
</div>
	
	
  </body>
</html>