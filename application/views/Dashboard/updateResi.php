<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Update Resi
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('dashboard/updateResiP'); ?>" method="post">
                            <div class="form-group">
                                <label>Nomor Resi</label>
                                <input type="text" name="noresi" placeholder="nomor resi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                <option value="dikirim">Dikirim</option>
                                <option value="diterima">Diterima</option>
                                <option value="diproses">Diproses</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <input type="text" name="message" placeholder="Message" class="form-control">
                            </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Resi</button>
                            </div>
                        </form>   
                        <hr>
                                          
                    </div>
                </div>            
            </div>
        </div>
    </div>