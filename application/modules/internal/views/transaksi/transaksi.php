<div class="page-header">

    <h2 class="header-title">Transaksi</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="<?= base_url('admin/main_admin') ?>" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Beranda</a>
            <span class="breadcrumb-item active">Data Transaksi</span>
        </nav>
    </div>

    <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-info kanan"><i class="ti-filter"> </i> Filter</a>

</div> 

<div class="collapse" id="collapseExample">
  <div class="card card-body">

        <form >
            <div class="row">
                <div class="col-4 form-group">
                    <label for="">Tanggal Awal</label>
                    <input type="date" name="" class="form-control">
                </div>
                <div class="col-4 form-group">
                    <label for="">Tanggal Akhir</label>
                    <input type="date" name="" class="form-control">
                </div>
                <div class="col-4 form-group">
                    <label for="">Produk</label>
                    <select name="bulan" id="bulan" class="form-control">
                        <option value="">-</option>
                    </select>
                </div>
                <div class="col-12 form-group text-right">
                    <button class="btn btn-info kanan">CARI</button>
                </div>
            </div>
        </form>

  </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-overflow">
            <table id="dt-opt" class="table table-hover table-xl">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Pemesan</th>
                        <th>Tgl Pesan</th>
                        <th>Pengiriman</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>00099</td>
                        <td>
                            <div class="list-media">
                                <div class="list-item">
                                    <div class="info">
                                    <span class="title">Nama</span>
                                    <span class="sub-title">Email</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>10</td>
                        <td>JNE</td>
                        <td>Belum Lunas</td>
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