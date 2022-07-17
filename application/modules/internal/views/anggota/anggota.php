

<div class="card">
    <div class="card-body">
        <div class="table-overflow">
            <table id="dt-opt" class="table table-hover table-xl">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($record->num_rows() > 0){
                            $no = 1;
                        ?>
                        <?php foreach($record->result_array() as $row) {?>
                            <tr>
                                <td><?= $no;?></td>
                                <td>
                                    <span class="title"><?= $row['member_nama']?></span><br>
                                    <span class="sub-title"><?= $row['member_email'] ?></span>
                                </td>
                                <td><?= $row['member_no_telp']?></td>
                                <td><?= $row['member_alamat']?></td>
                                <td><?php if($row['member_status'] == 'y'){echo "Aktif";}else{echo "Tidak Aktif";}?></td>
                                <td class="font-size-18">
                                    
                                    <div class="card-toolbar">
                                        <ul>
                                            <li class="dropdown dropdown-animated scale-left">
                                                <a class="text-gray" data-toggle="dropdown" href="javascript:void(0)">
                                                    <i class="mdi mdi-dots-vertical font-size-20"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="d-block">
                                                        <a class="dropdown-item" href="<?= base_url('internal/member/status?id='.encode($row['member_id'])) ?>">
                                                            
                                                            <span><?php if($row['member_status'] == 'y'){echo ' <i class="mdi mdi-account-off m-r-5"></i> Suspen';}else{echo '  <i class="mdi mdi-account m-r-5"></i> Aktif';}?></span>
                                                        </a>
                                                    </li>
                                                    <li class="d-block">
                                                        <a class="dropdown-item" href="<?= base_url('internal/member/edit?id='.$row['member_id']) ?>">
                                                            <i class="mdi mdi-pencil m-r-5"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li class="d-block">
                                                        <a class="dropdown-item delete" href="#" data-href="<?= base_url('internal/member/delete?id=').encode($row['member_id']) ?>">
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