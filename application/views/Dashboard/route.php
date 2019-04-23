<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Jumlah Route
                    </div>
                    <div class="card-body">
                        <a href="<?php echo base_url('Dashboard/addRoute');?>" class="btn btn-primary">Add Order</a>
                        <hr>
                        <table id="dataOrder" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kota Pengirim</th>
                                    <th>Kota Penerima</th>
                                    <th>Fare</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;foreach ($dataRoute as $data) {
                                ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $data->kota_pengirim;?></td>
                                    <td><?php echo $data->kota_penerima;?></td>
                                    <td><?php echo $data->fare;?></td>
                                    <td>
                                        <a href="<?php echo base_url('Dashboard/editRoute/').$data->id;?>" class="btn btn-warning">Edit</a>
                                    <a href="<?php echo base_url('Dashboard/deleteRoute/').$data->id;?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                        
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