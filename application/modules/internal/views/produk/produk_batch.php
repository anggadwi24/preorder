

<div class="card">
    <div class="card-body">
        <div class="table-overflow">
            <table id="dt-opt" class="table table-hover table-xl">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Batch</th>
                        <th>Tgl Mulai</th>
                        <th>Tgl Selesai</th>
                     
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    
                            <tr>
                                <td>
                                    <div class="list-media">
                                        <div class="list-item">
                                            <div class="media-img">
                                                <img class="rounded" src="<?= base_url('upload/produk/'.$row['produk_image']) ?>" alt="">
                                            </div>
                                            <div class="info">
                                            <span class="title"><?= $row['produk_nama'] ?></span>
                                            <span class="sub-title"><?= $row['produk_mini_deskripsi'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>pertama</td>
                                <td>202020</td>
                                <td>202020</td>
                           
                                <td class="font-size-18 text-center">
                                    
                                    <a href="" class="text-primary m-r-15"><i class="ti-eye"></i></a>
                                    <a href="" class="text-info m-r-15"><i class="ti-pencil"></i></a>
                                    <a href="" class="text-danger m-r-15"><i class="ti-trash"></i></a>
                                    <a href="" class="text-success"><i class="ti-reload m-r-15"></i></a>

                                </td>
                            </tr>

                </tbody>
            </table>
        </div> 
    </div>       
</div>   

<div class="modal fade" id="modaltambahbatch">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Tambah Data Batch</h4>
                </div>
                <div class="modal-body">
                <form class="m-t-15" action="<?= base_url('admin/master/kelas/kelas_add_proses') ?>" method="post" enctype="multipart/form-data">
                    
                <div class="row" id="place">
                    <div class="col-12 my-1 formBatch parent" >
                        <div class="form-row  mt-3">
                    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Batch</label>
                                    <input type="text" class="form-control" name="batch[]" placeholder="Masukan Batch" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <select name="status[]" class="form-control" required>
                                        <option value="open">Open Order</option>
                                        <option value="close">Close Order</option>

                                    </select>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Target Mulai</label>
                                    <input type="text"   class="form-control dateTime" name="start[]" autocomplete="off" placeholder="Masukan Tanggal Mulai Batch" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Target Mulai</label>
                                    <input type="text "  class="form-control dateTime" name="end[]" autocomplete="off" placeholder="Masukan Tanggal Selesai Batch" required>
                                </div>
                            </div>
                        </div>
                    </div>
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