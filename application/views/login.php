<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CertKorChamNet | Dashboard Log in</title>
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
    <!-- Google Font -->
  </head>
  
  <body>
<div class="wrapper fadeInDown">
    <div id="formContent">
		<div class="fadeIn first">
			<h1>Login</h1>
		</div>
  
        <?php $this->load->helper('form'); ?>
          <div class="col-md-12">
            <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>

        <?php
        $this->load->helper('form');
        $error = $this->session->flashdata('error');
        if($error)
        {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error; ?>                    
            </div>
        <?php }
        $success = $this->session->flashdata('success');
        if($success)
        {
            ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $success; ?>                    
            </div>
        <?php } ?>	
		  </div>
		
        <form action="<?php echo base_url(); ?>loginMe" method="post">
        <div class="input-group mb-3">
          <div class="col-md-12">
            <input type="email" class="form-control fadeIn second" placeholder="Email" name="email" required />
		      </div>
          </div>
          <div class="input-group mb-3">
          <div class="col-md-12">
            <input type="password" class="form-control fadeIn third" placeholder="Password" name="password" required />
            </div>
          </div>
		   <div class="input-group mb-3">
		   <div class="col-md-12">
            <input type="submit" class="btn btn-primary btn-block btn-flat fadeIn fourth" value="Sign In" />
		      </div>
			</div>
      <!--a class="underlinehover" href="<-?php echo base_url() ?>forgotPassword">Forgot Password</a>-->
        </form>
      </div>
    </div>
  </body>
</html>