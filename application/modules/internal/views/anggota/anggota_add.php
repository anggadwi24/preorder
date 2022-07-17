

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="p-h-10">
                    <h5>Form Member</h5>
                    <hr>    
                    <form class="m-t-15" id="formAct" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">No Telp</label>
                                    <input type="text" class="form-control" name="no_telp">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Alamat</label>
                            <textarea class="form-control" name="alamat"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Provinsi</label>
                                    <select class="selectize" id="provinsi" name="provinsi">
                                        <option disabled selected></option>
                                        <?php if($provinsi->num_rows() >0 ){
                                            foreach($provinsi->result_array() as $prov){
                                                echo "<option value='".$prov['provinsi_id']."'>".$prov['provinsi_nama']."</option>";
                                            }
                                        }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Kabupaten</label>
                                    <select class="form-control" id="kabupaten" name="kabupaten">
                                        <option disabled>Pilih provinsi terlebih dahulu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Kode Pos</label>
                                    <input type="text" class="form-control" name="kode_pos">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">Email</label>
                             <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Re-Password</label>
                                    <input type="password" class="form-control" name="repass">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text-sm-right">
                                <button class="btn btn-default" type="reset">Reset</button>
                                <button class="btn btn-gradient-success" type="submit">Simpan</button>
                            </div>
                        </div>     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>