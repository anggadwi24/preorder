<div class="page-header">

    <h2 class="header-title">Transaksi</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="<?= base_url('admin/main_admin') ?>" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Beranda</a>
            <span class="breadcrumb-item active">Data Transaksi</span>
        </nav>
    </div>

</div> 

<div class="card">
    <div class="card-body">
        <div class="table-overflow">
            <table id="dt-opt" class="table table-hover table-xl">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Total Pemesanan</th>
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
                        <td>10</td>
                        <td>Pre or close</td>
                        <td align="end">
                           <a class="text-gray m-r-15" href="<?= base_url('internal/transaksi/transaksi_detail') ?>" >
                                <i class="mdi mdi-eye m-r-5"></i>
                                <span>Detail</span>
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div> 
    </div>       
</div>   