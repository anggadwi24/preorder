

<div class="card">
    <div class="card-body">
        <div class="table-overflow">
            <table id="dt-opt" class="table table-hover table-xl">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Harga Jual</th>
                        <th>Status</th>
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
                                <td><?php if($row['produk_status'] == 'preorder'){ echo "Pre Order";}else{ echo "Clos Oorder";}?></td>
                                <td class="font-size-18">
                                    
                                    <div class="card-toolbar">
                                        <ul>
                                            <li class="dropdown dropdown-animated scale-left">
                                                <a class="text-gray" data-toggle="dropdown" href="javascript:void(0)">
                                                    <i class="mdi mdi-dots-vertical font-size-20"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="d-block">
                                                        <a class="dropdown-item" href="<?= base_url('internal/produk/detail?id='.$row['produk_id']) ?>" >
                                                            <i class="mdi mdi-eye m-r-5"></i>
                                                            <span>Detail</span>
                                                        </a>
                                                    </li>
                                                    <li class="d-block">
                                                        <a class="dropdown-item" href="<?= base_url('internal/produk/edit?id='.$row['produk_id']) ?>">
                                                            <i class="mdi mdi-pencil m-r-5"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li class="d-block">
                                                        <a class="dropdown-item delete" data-href="<?= base_url('internal/produk/delete?id='.$row['produk_id']) ?>">
                                                            <i class="mdi mdi-delete m-r-5"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>    
                                    </div>

                                    

                                </td>
                            </tr>
                        <?php $no++; }?>
                    <?php }?>

                </tbody>
            </table>
        </div> 
    </div>       
</div>   