<div class="page-header">

    <h2 class="header-title">Produk</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="<?= base_url('admin/main_admin') ?>" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Beranda</a>
            <a class="breadcrumb-item" href="#">Master Data</a>
            <span class="breadcrumb-item active">Data produk</span>
        </nav>
    </div>

    <a href="<?= base_url('internal/produk/add') ?>" class="btn btn-info kanan"><i class="ti-plus"> </i> Tambah Data</a>

</div> 

<div class="card">
    <div class="card-body">
        <div class="table-overflow">
            <table id="dt-opt" class="table table-hover table-xl">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Harga Jual</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="list-media">
                                <div class="list-item">
                                    <div class="media-img">
                                        <img class="rounded" src="" alt="">
                                    </div>
                                    <div class="info">
                                    <span class="title">Produk</span>
                                    <span class="sub-title">mini-desc</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>200000</td>
                        <td>Pre or close</td>
                        <td class="font-size-18">
                            
                            <div class="card-toolbar">
                                <ul>
                                    <li class="dropdown dropdown-animated scale-left">
                                        <a class="text-gray" data-toggle="dropdown" href="javascript:void(0)">
                                            <i class="mdi mdi-dots-vertical font-size-20"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="d-block">
                                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#modaldetail">
                                                    <i class="mdi mdi-eye m-r-5"></i>
                                                    <span>Detail</span>
                                                </a>
                                            </li>
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

                            <div class="modal fade" id="modaldetail">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row m-v-30">
                                                        <div class="col-sm-5">
                                                            <img class="img-fluid d-block mx-auto m-b-30" src="" width="200" height="200" alt="">
                                                        </div>
                                                        <div class="col-sm-7 text-center text-sm-center">
                                                            <h2 class="m-b-5">Produk</h2>
                                                            <p class="text-opacity m-b-20 font-size-13">mini desc</p>
                                                            <p>DESC</p>
                                                            <div class="d-flex flex-row justify-content-center">
                                                                <div class="p-v-20 p-h-15 text-center">
                                                                    <span class="font-size-18 text-info text-semibold">-</span>
                                                                    <small class="d-block">Harga Pokok</small>
                                                                </div>
                                                                <div class="p-v-20 p-h-15 text-center">
                                                                    <span class="font-size-18 text-info text-semibold">-</span>
                                                                    <small class="d-block">Harga Jual</small>
                                                                </div>
                                                                <div class="p-v-20 p-h-15 text-center">
                                                                    <span class="font-size-18 text-info text-semibold">-</span>
                                                                    <small class="d-block">Status</small>
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

                        </td>
                    </tr>

                </tbody>
            </table>
        </div> 
    </div>       
</div>   