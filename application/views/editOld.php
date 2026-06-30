<?php
    $userId = $userInfo->userId;
    $name = $userInfo->name;
    $email = $userInfo->email;
    $roleId = $userInfo->roleId;
?>

<div class="container">
    <section class="content">
        <h3><i class="fa fa-users"></i></i>&nbsp;User Management</h3> 

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo site_url('userListing') ?>">User List</a></li>
				<li class="breadcrumb-item active" aria-current="page">Edit User Details</li>
			</ol>
		</nav>
		
	

        <form role="form" action="<?php echo base_url() ?>editUser" method="post" id="editUser">
            <div class="row">
                <div class="col-md-6">                                
                    <div class="form-group">
                        <label for="fname">Full Name</label>
                        <input type="text" class="form-control" id="fname" placeholder="Full Name" name="fname" value="<?php echo $name; ?>" maxlength="128">
                        <input type="hidden" value="<?php echo $userId; ?>" name="userId" id="userId" />    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>" maxlength="128">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" maxlength="20">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword" maxlength="20">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role">
                            <option value="0">Select Role</option>
                            <?php
                            if(!empty($roles)){
                                foreach ($roles as $rl){ ?>
                            <option value="<?php echo $rl->roleId; ?>" <?php if($rl->roleId == $roleId) {echo "selected=selected";} ?>><?php echo $rl->role ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                </div>  
            </div>

            <div class="d-flex justify-content-center">
				<div class="p-2 form-group">
                     <button type="submit" class="btn btn-primary" id="submitBtn">
                        Submit
                    </button>
				</div>
            </div>
        </form>    
    </section>
</div>

<div class="modal fade" id="flashModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-success">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Success</h5>
            </div>
            <div class="modal-body">
                Form submitted successfully!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function () {

    $('#submitBtn').on('click', function (e) {
        e.preventDefault();

        $('#flashModal').modal('show');

        setTimeout(function () {
            $('form').submit();
        }, 800);
    });

});
</script>