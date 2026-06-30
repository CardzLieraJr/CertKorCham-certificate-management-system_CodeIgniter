<div class="container">
    <section class="content">
        <div class="d-flex justify-content-between">
            <div class="p-2">
                <h3><i class="fa fa-users"></i></i>&nbsp;User Management</h3>
            </div>
            <div class="p-2">
                <a class="btn btn-primary" href="<?php echo base_url(); ?>addNew"><i class="fa fa-plus"></i> Add New User</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created On</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    <thead>
                    <tbody>
                        <?php
                        if (!empty($userRecords)) {
                            foreach ($userRecords as $record) {
                        ?>
                                <tr>
                                    <td><?php echo $record->name ?></td>
                                    <td><?php echo $record->email ?></td>
                                    <td><?php echo $record->role ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($record->createdDtm)) ?></td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <div class="p-2">
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url() . 'editOld/' . $record->userId; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                                            </div>
                                            <div class="p-2">
                                                <a class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo $record->userId; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
            </table>
        </div>

        <div class="box-footer clearfix">
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </section>
</div>