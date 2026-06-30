<?php
$userId = $userInfo->userId;
$name = $userInfo->name;
$email = $userInfo->email;
$roleId = $userInfo->roleId;
$role = $userInfo->role;
?>

<div class="container">
    <section class="content">
        <h3><i class="fa fa-user-circle"></i>&nbsp;My Profile</h3>

        <ul class="nav nav-tabs">
            <li class="nav-item <?= ($active == "details")? "active" : "" ?>"><a class="nav-link" href="#details" data-toggle="tab">Details</a></li>
            <li class="nav-item <?= ($active == "changepass")? "active" : "" ?>"><a class="nav-link" href="#changepass" data-toggle="tab">Change Password</a></li>                        
        </ul>
		
        <div class="row">
            <div class="col-md-12">
            <?php
                $this->load->helper('form');
                $error = $this->session->flashdata('error');
                if($error)
                {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>

                <?php  
                    $noMatch = $this->session->flashdata('nomatch');
                    if($noMatch)
                    {
                ?>
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('nomatch'); ?>
                </div>
                <?php } ?>

                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
		</div>	
                
		<div class="tab-content">
            <div class="<?= ($active == "details")? "active" : "" ?> tab-pane" id="details">
                <form action="<?php echo base_url() ?>profileUpdate" method="post" id="editProfile" role="form">
                    <?php $this->load->helper('form'); ?>
					<div class="input-group mb-3">
						<label for="staticName" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-10">
						  <input type="text" readonly class="form-control" id="staticName" name="staticName" value="<?= $name ?>">
						</div>
					</div>
					
					<div class="input-group mb-3">
						<label for="staticRole" class="col-sm-2 col-form-label">Role</label>
						<div class="col-sm-10">
						  <input type="text" readonly class="form-control" id="staticRole" name="staticRole" value="<?= $role ?>">
						</div>
					</div>
					
					<div class="input-group mb-3">
						<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-10">
						  <input type="text" readonly class="form-control" id="staticEmail" name="staticEmail" value="<?= $email ?>">
						</div>
					</div>
					
					<div class="input-group mb-3">
						<label for="fname" class="col-sm-2 col-form-label">Change Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="fname" name="fname" placeholder="<?php echo $name; ?>" value="<?php echo set_value('fname', $name); ?>" maxlength="128" />	
						</div>
					</div>

					<div class="d-flex justify-content-center">
							<div class="p-2"><input type="submit" class="btn btn-primary" value="Submit" /></div>
					</div>								
                </form>
			</div>
            <div class="<?= ($active == "changepass")? "active" : "" ?> tab-pane" id="changepass">
                <form role="form" action="<?php echo base_url() ?>changePassword" method="post">
                    <div class="input-group mb-3">
                        <label for="inputPassword1" class="col-sm-3 col-form-label">Old Password</label>
                        <div class="col-sm-9">
							<input type="password" class="form-control" id="inputOldPassword" placeholder="Old password" name="oldPassword" maxlength="20" required>
                        </div>
                    </div>

                    <hr>
					
					<div class="input-group mb-3">
						<label for="inputPassword1" class="col-sm-3 col-form-label">New Password</label>
                        <div class="col-sm-9">
							<input type="password" class="form-control" id="inputPassword1" placeholder="New password" name="newPassword" maxlength="20" required>
						</div>
                    </div>
					
					<div class="input-group mb-3">
						<label for="inputPassword2" class="col-sm-3 col-form-label">Confirm New Password</label>
						<div class="col-sm-9">	
							<input type="password" class="form-control" id="inputPassword2" placeholder="Confirm new password" name="cNewPassword" maxlength="20" required>
                        </div>
                    </div>
					
					<div class="d-flex justify-content-center">
						<div class="p-2"><input type="submit" class="btn btn-primary" value="Submit" /></div>
					</div>
                </form>
            </div>                        
        </div> 
    </section>
</div>