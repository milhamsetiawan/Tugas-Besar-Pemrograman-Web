<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Rute
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('dashboard/addrouteP');?>" method="post">
                        <div class="form-group">
                                <label>Kota asal</label>
                                <input type="text" name="kota_pengirim" class="form-control" placeholder="Kota Asal">
                            </div>
                            <div class="form-group">
                                <label>Kota Tujuan</label>
                                <input type="text" name="kota_penerima" class="form-control" placeholder="Kota Tujuan">
                            </div>
                            <div class="form-group">
                                <label>Tarif Per KG</label>
                                <input type="text" name="fare" class="form-control" placeholder="Tarif Per KG">
                            </div>
                            <button type="submit" class="btn btn-primary">Buat Route</button>
                        </form>                  
                    </div>
                </div>            
            </div>
        </div>
    </div>