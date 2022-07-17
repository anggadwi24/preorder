<div class="page-header">


    <h2 class="header-title">Member</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="<?= base_url('admin/main_admin') ?>" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Dashboard</a>
          
            <?= $breadcumb ?>
        </nav>
    </div>

    <a href="<?= base_url('internal/member/add') ?>" class="btn btn-info kanan"><i class="ti-plus"> </i> Tambah Data</a>

</div> 

<div class="card">
    <div class="card-body">
        <div class="table-overflow">
            <table id="dt-opt" class="table table-hover table-xl">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="title">Nama</span><br>
                            <span class="sub-title">Email</span>
                        </td>
                        <td>081</td>
                        <td>Jl.bbb</td>
                        <td>Aktif</td>
                        <td class="font-size-18">
                            
                            <div class="card-toolbar">
                                <ul>
                                    <li class="dropdown dropdown-animated scale-left">
                                        <a class="text-gray" data-toggle="dropdown" href="javascript:void(0)">
                                            <i class="mdi mdi-dots-vertical font-size-20"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="d-block">
                                                <a class="dropdown-item" href="<?= base_url('admin/master/produk/produk_edit?id=') ?>">
                                                    <i class="mdi mdi-pencil m-r-5"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </li>
                                            <li class="d-block">
                                                <a class="dropdown-item" href="<?= base_url('admin/master/produk/produk_hapus?id=') ?>">
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
                </tbody>
            </table>
        </div> 
    </div>       
</div>   