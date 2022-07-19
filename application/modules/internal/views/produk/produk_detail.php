
<div class="row">
    
    <div class="col-md-8">
        
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-h-10">
                            <h5>Detail Produk</h5>
                            <hr> 
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="card-title"><?= $row['produk_nama'] ?></h5>
                                    <p><?= $row['produk_mini_deskripsi'] ?></p>
                                    <p><?= $row['produk_deskripsi'] ?></p>
                                    <hr>
                                </div>
                            </div>

                                
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Harga Pokok</label>
                                        <input type="number" class="form-control" name="pokok" value="<?= $row['produk_harga_pokok']?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Harga Jual</label>
                                        <input type="number" class="form-control" name="jual" value="<?= $row['produk_harga_jual']?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Berat (gr)</label>
                                        <input type="text" class="form-control" name="berat" value="<?=  $row['produk_berat']?>" readonly>
                                    </div>
                                </div>
                            </div>

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
                        <div class="p-h-10 p-4">
                            <h5>Gambar Utama</h5>
                            <hr>    
                            <img class="img-fluid d-block mx-auto" id="image" src="<?=  base_url('upload/produk/').$row['produk_image'] ?>" >
                            
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
                            <hr>   
                            <div class="row" id="data"> 
                               
                                <div class="col-md-2">
                                    <div class="card">
                                        <div class="bg-overlay">
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