<div class="page-header">
    <h2 class="header-title">Produk</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="<?= base_url('admin/main_admin') ?>" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Dashboard</a>
            <a class="breadcrumb-item" href="<?= base_url('admin/master/anggota') ?>">Data Produk</a>
            <span class="breadcrumb-item active">Tambah Produk</span>
        </nav>
    </div>
</div> 

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="p-h-10">
                    <h5>Tambah Data Produk</h5>
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
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Harga Pokok</label>
                                    <input type="text" class="form-control" name="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Harga Jual</label>
                                    <input type="text" class="form-control" name="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Berat (gr)</label>
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
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Gambar Utama</label>
                                    <input type="file" class="form-control" name="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Gambar Detail</label>
                                    <input type="file" class="form-control" name="">
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