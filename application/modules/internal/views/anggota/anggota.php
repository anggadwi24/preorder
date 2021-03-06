

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

                                    <a href="<?= base_url('internal/member/status?id='.encode($row['member_id'])) ?>" class=" m-r-15 btn btn-success">
                                        <span><?php if($row['member_status'] == 'y'){echo ' <i class="mdi mdi-account-off m-r-5"></i> Suspen';}else{echo '  <i class="mdi mdi-account m-r-5"></i> Aktif';}?></span>
                                    </a>
                                    <a href="<?= base_url('internal/member/edit?id='.$row['member_id']) ?>" class="text-info m-r-15"><i class="ti-pencil"></i></a>
                                    <a href="<?= base_url('internal/member/delete?id=').encode($row['member_id']) ?>" class="text-danger"><i class="ti-trash"></i></a>
                                    
                                    
                                </td>
                            </tr>
                        <?php $no++; }?>
                    <?php }?>
                </tbody>
            </table>
        </div> 
    </div>       
</div>   