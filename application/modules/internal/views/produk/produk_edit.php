
<div class="row">
    
    <div class="col-md-8">
        
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-h-10">
                            <h5>Form Produk</h5>
                            <hr>    
                            <form class="m-t-15" id="formAct" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Produk</label>
                                            <input type="text" class="form-control" name="nama" value="<?= $row['produk_nama'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Mini Deskripsi</label>
                                            <input type="text" class="form-control" name="mini" value="<?= $row['produk_mini_deskripsi'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Harga Pokok</label>
                                            <input type="number" class="form-control" name="pokok" value="<?= $row['produk_harga_pokok']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Harga Jual</label>
                                            <input type="number" class="form-control" name="jual" value="<?= $row['produk_harga_jual'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Berat (gr)</label>
                                            <input type="text" class="form-control" name="berat" value="<?=  $row['produk_berat']?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" id="summernote-standard"><?= $row['produk_deskripsi'] ?></textarea>
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
                    <div class="col-md-12 ">
                        <div class="p-h-10">
                            <h5>Gambar Utama</h5>
                            <hr>    
                            <form class="m-t-15 " id="formImage" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12"><img class="img-fluid d-block mx-auto" id="image" src="<?=  base_url('upload/produk/').$row['produk_image'] ?>"></div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="file" id="files" accept="image/*">
                                    </div>
                                    <div class="form-group">
                                        <div class="text-sm-right">
                                            <button class="btn btn-default" type="reset">Reset</button>
                                            <button class="btn btn-gradient-success" type="submit">Simpan</button>
                                        </div>
                                    </div>     
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
                            <div class="row" id="data"> 
                               
                                <div class="col-md-2">
                                    <div class="card">
                                        <div class="bg-overlay">
                                            <div class="card-toolbar">
                                                <ul>
                                                    <li>
                                                        <a class="text-white btn btn-danger" href="" >
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
                <form class="m-t-15" id="formDetail" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label class="control-label">Gambar</label>
                        <input type="file" class="form-control" name="files[]" id="detail" accept="image/*" multiple>
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