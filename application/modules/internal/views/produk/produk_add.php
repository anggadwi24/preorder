
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
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Mini Desc</label>
                                    <input type="text" class="form-control" name="mini">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Harga Pokok</label>
                                    <input type="number" class="form-control" name="pokok">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Harga Jual</label>
                                    <input type="number" class="form-control" name="jual">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Berat (gr)</label>
                                    <input type="number" class="form-control" name="berat" min="0"  step="0.5">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="summernote-standard"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value='preorder'>Pre-Order</option>
                                <option value='closeorder'>Close-Order</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Thumbnail</label>
                                    <input type="file" class="form-control" name="file" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Gambar Detail</label>
                                    <input type="file" class="form-control" name="files[]" multiple accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="form-row formBatch mt-3">
                            <div class="col-md-12">
                                <h3>Form Batch</h3>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Batch</label>
                                    <input type="text" class="form-control" name="batch" value="1">
                                </div>
                            </div>
                           
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Target Mulai</label>
                                    <input type="text"   class="form-control dateTime" name="start" autocomplete="off" value="<?= date('Y-m-d H:i')?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Target Mulai</label>
                                    <input type="text "  class="form-control dateTime" name="end" autocomplete="off" value="<?= date('Y-m-d H:i',strtotime('+1 Weeks'))?>">
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