<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        User
                    </div>
                    <div class="card-body">
                        <a href="<?php echo base_url('Dashboard/addUser');?>" class="btn btn-primary">Add User</a>
                        <hr>
                        <table id="dataOrder" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Fullname</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;foreach ($dataUser as $data) {
                                ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $data->username;?></td>
                                    <td><?php echo $data->fullname;?></td>
                                    <td><?php echo $data->role;?></td>
                                    <td><a href="<?php echo base_url('Dashboard/editUser/').$data->id;?>" class="btn btn-warning">Edit</a>
                                    <a href="<?php echo base_url('Dashboard/deleteUser/').$data->id;?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                    </td>
                                </tr>
                            <?php }?>
                                
                            </tbody>
                        </table>                        
                    </div>
                </div>            
            </div>
        </div>
    </div>