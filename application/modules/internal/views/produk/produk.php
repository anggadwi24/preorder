

<div class="card">
    <div class="card-body">
        <div class="table-overflow">
            <table id="dt-opt" class="table table-hover table-xl">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Harga Jual</th>
                     
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($record->num_rows() > 0){ $no = 1;?>
                        <?php foreach($record->result_array() as $row){ ?>
                            <tr>
                                <td><?= $no; ?></td>
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
                                <td><?=  rupiah($row['produk_harga_jual'])?></td>
                           
                                <td class="font-size-18 text-center">
                                    
                                    <a href="<?= base_url('internal/produk/detail?id='.$row['produk_id']) ?>" class="text-primary m-r-15"><i class="ti-eye"></i></a>
                                    <a href="<?= base_url('internal/produk/edit?id='.$row['produk_id']) ?>" class="text-info m-r-15"><i class="ti-pencil"></i></a>
                                    <a href="<?= base_url('internal/produk/delete?id='.encode($row['produk_id'])) ?>" class="text-danger m-r-15"><i class="ti-trash"></i></a>
                                    <a href="<?= base_url('internal/produk/batch?id='.$row['produk_id']) ?>" class="text-success"><i class="ti-reload m-r-15"></i></a>

                                </td>
                            </tr>
                        <?php $no++; }?>
                    <?php }?>

                </tbody>
            </table>
        </div> 
    </div>       
</div>   