<!-- Contact contant start -->
<div class="contant">
  <div id="banner-part" class="banner inner-banner">
    <div class="container">
      <div class="bread-crumb-main">
        <h1 class="banner-title">Profil</h1>
        <div class="breadcrumb">
          <ul class="inline">
            <li><a href="index.html">Home</a></li>
            <li>Profil</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="contact-part pt-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          
          <div class="pb-100">
            <div class="row">
              <div class="col-md-12 mb-4">

                <div class="card p-4">
                <div class="heading-part mb-30">
                  <h3>Profil</h3>
                </div>

                  <table class="table m-0">
                    <tbody>
                      <tr>
                        <td><b>Nama Lengkap :</b></td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td><b>No Telp :</b></td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td><b>Email :</b></td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td><b>Alamat :</b></td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>
                          <button type="button" class="btn-color right-side" data-toggle="modal" data-target="#exampleModal">Edit</button>
                          <!-- Modal -->

                        </td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>

              <div class="col-md-12 mb-2">
                <h4 class="text-center">Riwayat Pemesanan</h4>
              <hr>
              </div>

              <div class="col-md-12">
                  
                <div class="cart-item-table commun-table">
                    <div class="table-responsive">
                      <table class="table border mb-0">
                        <thead>
                          <tr>
                            <th class="align-left">#</th>
                            <th class="align-left">Produk</th>
                            <th>Tgl Order</th>
                            <th>Harga</th>
                            <th>Pembayaran</th>
                            <th>Sub Total</th>
                            <th>#</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <tr>
                            <td class="align-left">
                              0086486
                            </td>
                            <td class="align-left">
                              <div class="product-title"> 
                                Men's Full Sleeves Collar Shirt x 1pcs
                              </div>
                            </td>
                             <td>
                              <?= date('Y-m-d') ?>
                            </td>
                            <td>
                              <ul>
                                <li>
                                  <div class="base-price price-box"> 
                                    <span class="price">$80.00</span> 
                                  </div>
                                </li>
                              </ul>
                            </td>
                            <td>
                              <div class="input-box">
                                Belum Lunas
                              </div>
                            </td>
                            <td>
                                <div class="total-price price-box"> 
                                <span class="price">$80.00</span> 
                              </div>
                            </td>
                            <td>
                              <a href="javascript:void(0)" class="btn small btn-color">
                                <i class="fa fa-money"></i>
                            </a>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
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
<!-- Contact contant end -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
            <div class="col-12 ">
              <form class="main-form full">
                <div class="row">
                  <div class="col-12">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="f-name">Nama Lengkap</label>
                        <input type="text" id="f-name" required="">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="f-name">No telp</label>
                        <input type="text" id="f-name" required="">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="l-name">Alamat</label>
                      <textarea></textarea>
                    </div>
                  </div>
                  <div class="col-md-4 col-12">
                    <div class="form-group">
                      <label for="zip">Provinsi</label>
                        <select>
                          <option>Bali</option>
                        </select>
                      </div>
                  </div>
                  <div class="col-md-4 col-12">
                    <div class="form-group">
                      <label for="city">Kabupaten</label>
                      <select>
                        <option>Bali</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-12">
                    <div class="form-group">
                      <label for="city">Kode Pos</label>
                      <input type="text">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="l-name">Email</label>
                      <input type="text" id="l-name" required="">
                    </div>
                  </div>
                 
                </div>
              </form>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-color">Simpan</button>
        </div>
      </div>
    </div>
  </div>