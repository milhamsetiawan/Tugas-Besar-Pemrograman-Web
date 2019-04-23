<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logistik</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">
    <link href="<?php echo base_url('assets/');?>css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        List Route
                    </div>
                    <div class="card-body">
                        <a href="<?php echo base_url('Main');?>" class="btn btn-primary">Back</a>
                        <hr>
                        <table id="dataOrder" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kota Pengirim</th>
                                    <th>Kota Penerima</th>
                                    <th>Fare</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;foreach ($dataRoute as $data) {
                                ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $data->kota_pengirim;?></td>
                                    <td><?php echo $data->kota_penerima;?></td>
                                    <td>Rp.<?php echo number_format($data->fare);?></td>
                                </tr>
                            <?php }?>
                                
                            </tbody>
                        </table>                        
                    </div>
                </div>            
            </div>
        </div>
    </div>