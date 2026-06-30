<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/dashboard.css" type="text/css" />
    
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
	  <!-- <script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/jquery.inputmask.bundle.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jQuery.dtplugin.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/zjs.utils.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/checkboxes.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/validation.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/addUser.js"></script> -->
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/editUser.js"></script> -->

    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>

    <script type="text/javascript">
        var windowURL = window.location.href;
        pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        var x= $('a[href="'+pageURL+'"]');
            x.addClass('active');
            x.parent().addClass('active');
        var y= $('a[href="'+windowURL+'"]');
            y.addClass('active');
            y.parent().addClass('active');
    </script>

  </head>

	<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
		
			<a href="<?php echo base_url(); ?>" class="navbar-brand">CertKorCham.Net</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsExample07">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</a>
					</li>

					<?php if($role == ROLE_ADMIN) { ?>
					<li class="nav-item">
					  <a class="nav-link" href="<?php echo base_url(); ?>userListing"><i class="fa fa-users"></i>&nbsp;Users</a>
					</li>
					<?php } ?>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;<span class="hidden-xs"><?php echo $name; ?></span></a>
						<div class="dropdown-menu" aria-labelledby="dropdown07">
							<a class="dropdown-item" href="<?php echo base_url(); ?>profile"><i class="fa fa-user-circle"></i>&nbsp;Profile</a>
							<a class="dropdown-item" href="<?php echo base_url(); ?>logout"><i class="fa fa-sign-out"></i>&nbsp;Sign out</a>
						</div>
					</li>
				</ul>
			</div>
    </div>
  </nav>