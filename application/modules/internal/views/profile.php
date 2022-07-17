

<div class="row">
    
    <div class="col-md-12">
        
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-h-10">
                            <h5>Form Profil</h5>
                            <hr>    
                            <form class="m-t-15" action="<?= base_url('internal/profile/do') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama</label>
                                            <input type="text" class="form-control" name="name" value="<?= $row['users_nama']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">No Telp</label>
                                            <input type="text" class="form-control" name="notelp" value="<?= $row['users_no_telp']?>">
                                        </div>
                                    </div>
                                </div>
                               <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Username</label>
                                            <input type="text" class="form-control" name="username" value="<?= $row['users_username']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Password</label>
                                            <input type="password" class="form-control" name="password">
                                            <small>*Isi jika ingin mengganti password</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="text-sm-right">
                                        <button class="btn btn-gradient-success" type="submit">Simpan</button>
                                    </div>
                                </div>     
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

