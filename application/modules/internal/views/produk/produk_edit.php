<div class="page-header">
    <h2 class="header-title">Produk</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="<?= base_url('admin/main_admin') ?>" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Dashboard</a>
            <a class="breadcrumb-item" href="<?= base_url('admin/master/anggota') ?>">Data Produk</a>
            <span class="breadcrumb-item active">Edit Produk</span>
        </nav>
    </div>
</div> 

<div class="row">
    
    <div class="col-md-8">
        
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-h-10">
                            <h5>Edit Data Produk</h5>
                            <hr>    
                            <form class="m-t-15" action="<?= base_url('') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Judul Produk</label>
                                            <input type="text" class="form-control" name="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Mini Desc</label>
                                            <input type="text" class="form-control" name="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Desc</label>
                                    <textarea class="form-control" name=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <select class="form-control">
                                        <option>Pre-Order</option>
                                        <option>Close-Order</option>
                                    </select>
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

    </div>
    <div class="col-md-4">
        
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-h-10">
                            <h5>Gambar Utama</h5>
                            <hr>    
                            <form class="m-t-15" action="<?= base_url('') ?>" method="post" enctype="multipart/form-data">
                                <img class="img-fluid justify-content-center" src="">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="">
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

    </div>

    <div class="col-md-12">
        
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-h-10">
                            <h5>Gambar Detail</h5>
                            <button class="btn btn-info float-right" data-toggle="modal" data-target="#modaltambahgambar" style="margin-top: -40px;"><i class="ti-plus"> </i> Tambah Gambar</button>
                            <hr>   
                            <div class="row"> 
                                <div class="col-md-2">
                                    <div class="card">
                                        <div class="bg-overlay">
                                            <div class="card-toolbar">
                                                <ul>
                                                    <li>
                                                        <a class="text-white" href="" >
                                                            <i class="mdi mdi-delete font-size-20"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <img class="card-img-top" src="<?= base_url('upload/docs/logo.png') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card">
                                        <div class="bg-overlay">
                                            <div class="card-toolbar">
                                                <ul>
                                                    <li>
                                                        <a class="text-white" href="" >
                                                            <i class="mdi mdi-delete font-size-20"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <img class="card-img-top" src="<?= base_url('upload/docs/logo.png') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- modal tambah detail gambar -->

<div class="modal fade" id="modaltambahgambar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Tambah Gambar Detail</h4>
                </div>
                <div class="modal-body">
                <form class="m-t-15" action="" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label class="control-label">Gambar</label>
                        <input type="file" class="form-control" name="">
                    </div>

                </div>
                <div class="modal-footer no-border">
                    <div class="text-right">
                        <button class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>