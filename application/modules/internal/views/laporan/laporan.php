<div class="page-header">

    <h2 class="header-title">Laporan</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="<?= base_url('admin/main_admin') ?>" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Beranda</a>
            <span class="breadcrumb-item active">Data Laporan</span>
        </nav>
    </div>

    <a href="" class="btn btn-info kanan" target="_blank"><i class="ti-printer"> </i> Excel</a>
    <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-info kanan"><i class="ti-filter"> </i> Filter</a>

</div> 

<div class="collapse" id="collapseExample">
  <div class="card card-body">

        <form >
            <div class="row">
                <div class="col-6 form-group">
                    <label for="">Tanggal Awal</label>
                    <input type="date" name="" class="form-control">
                </div>
                <div class="col-6 form-group">
                    <label for="">Tanggal Akhir</label>
                    <input type="date" name="" class="form-control">
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
            <table class="table table-hover table-xl">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tgl Pesan</th>
                        <th>Nama Pemesan</th>
                        <th>Produk</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>00090908</td>
                        <td>08/08/88</td>
                        <td>
                            <span class="title">Nama</span><br>
                            <span class="sub-title">Email</span>
                        </td>
                        <td>10</td>
                        <td align="end">
                            <a href="" class="btn btn-info kanan" target="_blank"><i class="ti-printer"> </i> PDF</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div> 
    </div>       
</div>   