

<div class="card">
    <div class="card-body">
        <div class="table-overflow">
            <table id="dt-opt" class="table table-hover table-xl">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>No Telp</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($row as $row){?>
                    <tr>
                        <td>
                            <div class="list-media">
                                <div class="list-item">
                                    <div class="media-img">
                                        <img class="rounded" src="" alt="">
                                    </div>
                                    <div class="info">
                                    <span class="title"><?= $row['users_nama']?></span>
                                    <span class="sub-title"><?= $row['users_username']?></span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><?= $row['users_no_telp']?></td>
                        <td>Admin</td>
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
                            
                            <a href="<?= base_url('internal/user/edit?id='.$row['users_id']) ?>" class="text-info m-r-15"><i class="ti-pencil"></i></a>
                            <a href="<?= base_url('internal/user/delete?id=').encode($row['users_id']) ?>" class="text-danger"><i class="ti-trash"></i></a>

                            

                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div> 
    </div>       
</div>   