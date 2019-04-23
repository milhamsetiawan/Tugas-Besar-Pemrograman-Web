<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah User
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('dashboard/adduserP');?>" method="post">
                        <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Fullname</label>
                                <input type="text" name="fullname" class="form-control" placeholder="Fullname">
                            </div>
                            <div class="form-group">
                            <label>Role</label>
                                <select name="role"class="form-control">
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah User</button>
                        </form>                  
                    </div>
                </div>            
            </div>
        </div>
    </div>