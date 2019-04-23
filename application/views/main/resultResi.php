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
<?php $data = $dataOrder[0];?>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Detail Order ( <?php echo $data->nomor_resi; ?>)
                    </div>
                    <div class="card-body">
                    <a href="<?php echo base_url('Main');?>"> <- Back</a>
                    <hr>
                                <h4>Nama Pengirim : <?php echo $data->nama_pengirim; ?></h4>
                                <h4>Nomor HP Pengirim : <?php echo $data->nohp_pengirim; ?></h4>
                                <hr>
                                <h4>Nama Penerima : <?php echo $data->nama_penerima; ?></h4>
                                <h4>Kota Penerima : <?php echo $data->kota_penerima; ?></h4>
                                <h4>Alamat Penerima : <?php echo $data->alamat_penerima; ?></h4>
                                <h4>Berat Barang : <?php echo $data->berat; ?> KG</h4>
                                <h4>Nomor HP Penerima : <?php echo $data->nama_penerima; ?></h4>
                                <h4>Tanggal Dikirim : <?php echo $data->tanggal_dikirim; ?></h4>
                                <h4>Total Order : Rp.<?php echo number_format($data->fare*$data->berat); ?></h4>
<?php if($data->tanggal_diterima != NULL){?><h4>Tanggal Diterima : Rp.<?php echo $data->tanggal_diterima; ?></h4><?php } ?>
                                <h4 class="text-success">Status : <?php echo $data->status; ?></h4>
                    </div>
                    <table class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1;foreach ($dataOrder as $order) {?>
                            <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $order->message; ?></td>
                            </tr>
                        <?php $i++;} ?>
                    </tbody>
                    </table>
                </div>            
            </div>
        </div>
    </div>