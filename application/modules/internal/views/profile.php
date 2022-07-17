<div class="page-header">
    <h2 class="header-title">Profile</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="<?= base_url('internal/main') ?>" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Dashboard</a>
            <?= $breadcumb ?>
        
           

        </nav>
    </div>
</div> 

<div class="row">
    
    <div class="col-md-12">
        
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-h-10">
                            <h5>Data Profile</h5>
                            <hr>    
                            <form class="m-t-15" action="<?= base_url('internal/profile/add') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama</label>
                                            <input type="text" class="form-control" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">No Telp</label>
                                            <input type="text" class="form-control" name="notelp" required>
                                        </div>
                                    </div>
                                </div>
                               <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Username</label>
                                            <input type="text" class="form-control" name="username" required>
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

