

<div class="card">
    <div class="card-body">
        <div class="table-overflow">
            <table id="dt-opt" class="table table-hover table-xl">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>No Telp</th>
                   
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($record->num_rows() > 0){ $no = 1;?>
                    <?php foreach($record->result_array() as $row){?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td>
                            <div class="list-media">
                                <div class="list-item">
                                    <div class="media-img">
                                        <img class="rounded" src="<?= base_url('upload/user/'.$row['users_foto']) ?>" alt="" srcset="">
                                    </div>
                                    <div class="info">
                                    <span class="title"><?= $row['users_nama']?></span>
                                    <span class="sub-title"><?= $row['users_username']?></span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><?= $row['users_no_telp']?></td>
                      
                        <td>
                            <?php 
                                if($row['users_status']=='y')
                                {
                                    echo"Aktif";
                                }else{
                                    echo"Tidak Aktif";
                                }
                            ?>
                        </td>
                        <td class="font-size-18">
                            <a href="<?= base_url('internal/user/status?id='.encode($row['users_id'])) ?>" class=" m-r-15 btn btn-success">
                                        <span><?php if($row['users_status'] == 'y'){echo ' <i class="mdi mdi-account-off m-r-5"></i> Suspen';}else{echo '  <i class="mdi mdi-account m-r-5"></i> Aktif';}?></span>
                            </a>
                            <a href="<?= base_url('internal/user/edit?id='.$row['users_id']) ?>" class="text-info m-r-15"><i class="ti-pencil"></i></a>
                            <a data-href="<?= base_url('internal/user/delete?id=').encode($row['users_id']) ?>" class="text-danger delete"><i class="ti-trash"></i></a>

                            

                        </td>
                    </tr>
                    <?php } $no++;} ?>
                </tbody>
            </table>
        </div> 
    </div>       
</div>   