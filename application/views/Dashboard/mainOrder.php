<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Jumlah Order
                    </div>
                    <div class="card-body">
                        <a href="<?php echo base_url('Dashboard/addOrder');?>" class="btn btn-primary">Add Order</a>
                        <hr>
                        <table id="dataOrder" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Pengirim</th>
                                    <th>Nama Penerima</th>
                                    <th>Tanggal Dikirim</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Nomor Resi</th>
                                    <th>View Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;foreach ($dataOrder as $data) { ?>
                                <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $data->nama_pengirim; ?></td>
                                <td><?php echo $data->nama_penerima; ?></td>
                                <td><?php echo $data->tanggal_dikirim; ?></td>
                                <td><?php echo $data->status; ?></td>
                                <td>Rp.<?php echo number_format($data->fare*$data->berat); ?></td>
                                <td><?php echo $data->nomor_resi; ?></td>
                                <td><a href="<?php echo base_url('Dashboard/detailTrack/').$data->ORID;?>" class="btn btn-primary">Detail Order</a></td>
                                </tr>
                                <?php $i++;} ?>
                            </tbody>
                        </table>                        
                    </div>
                </div>            
            </div>
        </div>
    </div>