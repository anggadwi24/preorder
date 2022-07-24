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
                        <td><?= $row['member_nama'] ?></td>
                      </tr>
                      <tr>
                        <td><b>No Telp :</b></td>
                        <td><?= $row['member_no_telp']?></td>
                      </tr>
                      <tr>
                        <td><b>Email :</b></td>
                        <td><?= $row['member_email']?></td>
                      </tr>
                      <tr>
                        <td><b>Alamat :</b></td>
                        <td><?= $row['member_alamat']?>, <br> Kab. <?= $asal['kota_nama']?>,Prov. <?= $asal['provinsi_nama'] ?>, Kode Pos : <?= $row['member_kode_pos'] ?></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>
                          <button type="button" class="btn-color right-side mx-1" data-toggle="modal" data-target="#exampleModal">Edit</button>
                          <button type="button" class="btn-color right-side" data-toggle="modal" data-target="#passModal">Ganti Password</button>
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
                         
                            <th>Pembayaran</th>
                            <th>Sub Total</th>
                            <th>#</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if($record->num_rows() > 0){
                            
                            foreach($record->result_array() as $rows){
                              $produk = '';
                              if($rows['transaksi_status'] == 'waiting'){
                                $status = 'Belum dibayar';
                              }else if($rows['transaksi_status'] == 'dibayar'){
                                $status = 'Sudah dibayar';
                              }else if($rows['transaksi_status'] == 'selesai'){
                                $status = 'Selesai';
                              }else{
                                $status = 'Expired';
                              }
                              $pro = $this->db->query("SELECT * FROM transaksi_detail a JOIN produk b ON a.td_produk_id  = b.produk_id JOIN produk_batch c ON a.td_pb_id = c.pb_id WHERE a.td_transaksi_id = '$rows[transaksi_id]'");
                              if($pro->num_rows() > 0){
                                foreach($pro->result_array() as $pr){
                                  $produk .= ucwords($pr['produk_nama']).' - '.$pr['pb_batch'].' x'.$pr['td_qty'].'<br>';
                                }
                              }
                              $produk = substr($produk, 0, -4);
                              echo ' <tr>
                              <td class="align-left">
                                '.$rows['transaksi_no'].'
                              </td>
                              <td class="align-left">
                                <div class="product-title"> 
                                 '.$produk.'
                                </div>
                              </td>
                               <td>
                               '.fullDate($rows['transaksi_created_on']).'
                              </td>
                            
                              <td>
                                <div class="input-box">
                                 '.$status.'
                                </div>
                              </td>
                              <td>
                                  <div class="total-price price-box"> 
                                  <span class="price">'.idr($rows['transaksi_total']).'</span> 
                                </div>
                              </td>
                              <td>
                                <a href="'.base_url('order/'.$rows['transaksi_no']).'" class="btn small btn-color">
                                  <i class="fa fa-money"></i>
                              </a>
                              </td>
                            </tr>';
                            } 
                          }?>
                         
                          
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
        <form class="main-form full" method="POST" action="<?=  base_url('site/profile/update')?>">
        <div class="modal-body">
            
            <div class="col-12 ">
           
                <div class="row">
                  <div class="col-12">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="f-name">Nama Lengkap</label>
                        <input type="text" id="f-name" required="" name="nama" value="<?= $row['member_nama']?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="f-name">No telp</label>
                        <input type="text" id="f-name" required="" name="no_telp" value="<?= $row['member_no_telp'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="l-name">Alamat</label>
                      <textarea name="alamat"><?= $row['member_alamat'] ?></textarea>
                    </div>
                  </div>
                  <div class="col-md-4 col-12">
                    <div class="form-group">
                      <label for="zip">Provinsi</label>
                        <select name="provinsi" id="provinsi" required> 
                        <?php 
                        if($provinsi->num_rows() > 0){
                          foreach($provinsi->result_array() as $prv){
                            if($prv['provinsi_id'] == $row['member_provinsi']){
                              echo '<option value="'.$prv['provinsi_id'].'" selected>'.$prv['provinsi_nama'].'</option>';
                
                            }else{
                            echo '<option value="'.$prv['provinsi_id'].'">'.$prv['provinsi_nama'].'</option>';
                
                            }
                          }
                        }
                        ?>
                        </select>
                      </div>
                  </div>
                  <div class="col-md-4 col-12">
                    <div class="form-group">
                      <label for="city">Kabupaten</label>
                      <select name="kabupaten" id="kabupaten">
                        <?php 
                          if($row['member_kabupaten'] != 0){
				
                            $kabupaten = $this->model_app->view_where_ordering('kota',array('kota_provinsi_id'=>$row['member_provinsi']),'kota_nama','ASC');
                            if($kabupaten->num_rows() > 0){
                              foreach($kabupaten->result_array() as $kab){
                                if($kab['kota_id'] == $row['member_kabupaten']){
                                 echo  '<option value="'.$kab['kota_id'].'" selected>'.$kab['kota_nama'].'</option>';
                                }else{
                                echo  '<option value="'.$kab['kota_id'].'">'.$kab['kota_nama'].'</option>';
                                }
                              }
                            }
                          }else{
                           echo '<option+ selected disabled>Pilih Kabupaten</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-12">
                    <div class="form-group">
                      <label for="city">Kode Pos</label>
                      <input type="text" value="<?= $row['member_kode_pos'] ?>" name="kode_pos">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="l-name">Email</label>
                      <input type="text" id="l-name" required="" name="email" value="<?= $row['member_email'] ?>">
                    </div>
                  </div>
                 
                </div>
            
            </div>


        </div>
        <div class="modal-footer">
          <button class="btn btn-color">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="passModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="main-form full" method="POST" action="<?=  base_url('site/profile/change')?>">
        <div class="modal-body">
            
            <div class="col-12 ">
           
                <div class="row">
                  <div class="col-12">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="f-name">Password</label>
                        <input type="password" id="f-name" required="" name="password" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="f-name">Re-type Password</label>
                        <input type="password" id="f-name" required="" name="repass" >
                      </div>
                    </div>
                  </div>
                  
                 
                </div>
            
            </div>


        </div>
        <div class="modal-footer">
          <button class="btn btn-color">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>