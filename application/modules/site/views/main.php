
<!-- Sub banner section Start -->
<div class="sub-banner-part pb-100">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="sub-banner-box">
                    <a href="shop.html">
                        <img class="d-none d-md-block" src="https://lh3.googleusercontent.com/Sz1hJ7rX-D9L8vTsDgKJ3oJWWpcBgKwiJ1yamRnwE-BVl-BuK5bFDDaEalLjNJsBGBJOVIb7nEwyj5BmEnAVilAzkzRd2U53QEs=w1200-h630-rj-pp-e365" alt="Xpoge">
                        <img class="d-block d-md-none" src="https://lh3.googleusercontent.com/Sz1hJ7rX-D9L8vTsDgKJ3oJWWpcBgKwiJ1yamRnwE-BVl-BuK5bFDDaEalLjNJsBGBJOVIb7nEwyj5BmEnAVilAzkzRd2U53QEs=w1200-h630-rj-pp-e365" alt="Xpoge">
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Sub banner section End -->

<!-- Site Services Block Start -->
<section id="services-part" class="menu-section services-part position-r pb-100">
    <div class="container">
      <div class="ser-feature-block mb_-30 center-sm">
        <div class="row">
          <div class="col-lg-4 col-12">
            <div class="services-box mb-30">
                <div class="services-box-inner">
                    <div class="services-icon services1">
                        <img src="<?= base_url() ?>template/public/images/ser-icon1.svg" alt="xpoge">
                    </div>
                    <div class="services-detail">
                        <h3 class="ser-title">Gratis Pengiriman</h3>
                        <div class="ser-subtitle">Gratis pengiriman dengan minimal belanja 1jt</div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="services-box mb-30">
                <div class="services-box-inner">
                    <div class="services-icon services2">
                        <img src="<?= base_url() ?>template/public/images/ser-icon2.svg" alt="xpoge">
                    </div>
                    <div class="services-detail">
                        <h3 class="ser-title">Hadiah Spesial</h3>
                        <div class="ser-subtitle">Hadiah spesial untuk orang tersayangmu</div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="services-box mb-30">
                <div class="services-box-inner">
                    <div class="services-icon services3">
                        <img src="<?= base_url() ?>template/public/images/ser-icon3.svg" alt="xpoge">
                    </div>
                    <div class="services-detail">
                        <h3 class="ser-title">Uang Kembali</h3>
                        <div class="ser-subtitle">Tidak mendapatkan barang, uang kembali</div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- Site Services Block End -->

<!-- Product Section Start -->
<section class="product-section pb-100">
    <div class="container">
        <div class="row">
<div class="col-12">
    <div class="heading-part text-center mb-30 mb-sm-20">
        <h2 class="main_title">Pre-Order Produk</h2>
      </div>
  </div>
</div>
<div class="row">
<?php 
    if($preorder->num_rows() > 0){
        foreach($preorder->result_array() as $pre){
            $btch = $this->model_app->view_where("produk_batch",array('pb_produk_id'=>$pre['produk_id']));
            if(file_exists('upload/produk/'.$pre['produk_image'])){
                $gambar = base_url().'upload/produk/'.$pre['produk_image'];
            }else{
                $gambar = base_url().'upload/produk/404.jpg';
            }

            if(countTime($pre['pb_created_on']) < 7){
                $new = ' <div class="new-label"><span>New</span></div>';
            }else{
                $new = '';
            }
            if($btch->num_rows() > 1){
                $judul = $pre['produk_nama'].' ('.$pre['pb_batch'].')';
            }else{
                $judul = $pre['produk_nama'];
            }
            echo ' <div class="col-lg-3 col-md-4 col-6">
            <div class="product-item">
                <div class="product-image">
                   '.$new.'
                    <a href="'.base_url('produk/'.$pre['produk_seo'].'&batch='.$pre['pb_batch'].'').'">
                        <img src="'.$gambar.'" alt="Xpoge">
                    </a>
                </div>
                <div class="product-details-outer">
                    <div class="product-details">
                        <div class="product-title">
                            <a href="'.base_url('produk/'.$pre['produk_seo'].'&batch='.$pre['pb_batch'].'').'">'.$judul.'</a>
                        </div>
                        <div class="price-box">
                            <span class="price">'.idr($pre['produk_harga_jual']).'</span>
                           
                        </div>
                    </div>
                    <div class="product-details-btn">
                        <ul>
                            <li class="icon cart-icon">
                                <a class="card" data-produk="'.encode($pre['produk_id']).'">
                                    <span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>';
        }
    }
?>


</div>
    </div>
</section>
<!-- Product Section End -->

 <!-- Sub banner section Start -->
<div class="sub-banner-part pb-100">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="sub-banner-box">
                    <a href="shop.html">
                        <img class="d-none d-md-block" src="https://lh3.googleusercontent.com/UcLcoutGVnXeTd8HaS96I6ZqFXAyuhH3YfgSGZf2CvARjP1E-76acrlHEdsw-TB2_d0m6ZG21NDktTlR3GqI92GsWlnY6YT9=w1200-h630-rj-pp-e365" alt="Xpoge">
                        <img class="d-block d-md-none" src="https://lh3.googleusercontent.com/UcLcoutGVnXeTd8HaS96I6ZqFXAyuhH3YfgSGZf2CvARjP1E-76acrlHEdsw-TB2_d0m6ZG21NDktTlR3GqI92GsWlnY6YT9=w1200-h630-rj-pp-e365" alt="Xpoge">
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Sub banner section End -->



<!-- Product Section Start -->
<section class="product-section pb-100">
    <div class="container">
        <div class="row">
<div class="col-12">
    <div class="heading-part text-center mb-30 mb-sm-20">
        <h2 class="main_title">Produk Close-Order</h2>
      </div>
  </div>
</div>
<div class="row">
<?php 
    if($closeorder->num_rows() > 0){
        foreach($closeorder->result_array() as $cor){
            $btch = $this->model_app->view_where("produk_batch",array('pb_produk_id'=>$cor['produk_id']));
            if(file_exists('upload/produk/'.$cor['produk_image'])){
                $gambar = base_url().'upload/produk/'.$cor['produk_image'];
            }else{
                $gambar = base_url().'upload/produk/404.jpg';
            }

            if(countTime($cor['pb_created_on']) < 7){
                $new = ' <div class="new-label"><span>New</span></div>';
            }else{
                $new = '';
            }
            if($btch->num_rows() > 1){
                $judul = $cor['produk_nama'].' ('.$cor['pb_batch'].')';
            }else{
                $judul = $cor['produk_nama'];
            }
            echo ' <div class="col-lg-3 col-md-4 col-6">
            <div class="product-item">
                <div class="product-image">
                   '.$new.'
                    <a href="'.base_url('produk/'.$cor['produk_seo'].'&batch='.$cor['pb_batch'].'').'">
                        <img src="'.$gambar.'" alt="Xpoge">
                    </a>
                </div>
                <div class="product-details-outer">
                    <div class="product-details">
                        <div class="product-title">
                            <a href="'.base_url('produk/'.$cor['produk_seo'].'&batch='.$cor['pb_batch'].'').'">'.$judul.'</a>
                        </div>
                        <div class="price-box">
                            <span class="price">'.idr($cor['produk_harga_jual']).'</span>
                           
                        </div>
                    </div>
                    <div class="product-details-btn">
                        <ul>
                            <li class="icon cart-icon">
                                <p><b>Close Order</b></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>';
        }
    }
?>


</div>
    </div>
</section>
<!-- Product Section End -->

<!-- Newslatter section start -->
<section class="newsletter-section align-center ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-12">
                <div class="newsletter-title">
                    <h2 class="main_title">Login untuk pemberitahuan terbaru</h2>
                    <p>ingin tahu produk terbaru, silahkan login dengan gratis </p>
                </div>
                <div class="newsletter-input">
                    <form>
                        <div class="form-group m-0">
                            <input type="email" placeholder="Alamat Email" required="">
                        </div>
                        <button type="submit" class="btn btn-color"><span class="d-none d-sm-block">Berlangganan</span> <i class="fa fa-send d-block d-sm-none"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newslatter section end -->