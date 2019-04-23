<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Buat Order
                    </div>
                    <div class="card-body">
                    <div id="message">
                    </div>
                        <form action="<?php echo base_url('dashboard/addOrderP')?>" method="post">
                        <div class="form-group">
                                <label>Nama Pengirim</label>
                                <input type="text" name="nama_pengirim" class="form-control" placeholder="Nama Pengirim">
                            </div>
                            <div class="form-group">
                                <label>No HP Pengirim</label>
                                <input type="text" name="nohp_pengirim" class="form-control" placeholder="No HP Pengirim">
                            </div>
                            <div class="form-group">
                                <label>Nama Penerima</label>
                                <input type="text" name="nama_penerima" class="form-control" placeholder="Nama Penerima">
                            </div>
                            <div class="form-group">
                                <label>No HP Penerima</label>
                                <input type="number" name="nohp_penerima" class="form-control" placeholder="No HP Penerima">
                            </div>
                            <div class="form-group">
                                <label>Alamat Penerima</label>
                                <input type="text" name="alamat_penerima" class="form-control" placeholder="Alamat Penerima">
                            </div>
                            <div class="form-group">
                                <label>Route</label>
                                <select name="routes" class="form-control" onchange="jumbotronMSG(this.value)">
                                <option selected disabled>Pilih Fare</option>
                                <?php foreach ($dataRoute as $data) { ?>
                                    <option value="<?php echo $data->id;?>"><?php echo $data->kota_pengirim." -> ".$data->kota_penerima."(Rp.".$data->fare.")";?></option>
                                <?php } ?>
                                </select>
                            <div class="form-group">
                                <label>Berat</label>
                                <input type="number" name="berat" class="form-control" placeholder="Berat">
                            </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Buat Order</button>
                        </form>                  
                    </div>
                </div>            
            </div>
        </div>
    </div>