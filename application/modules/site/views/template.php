<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Xpoge</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link type="image/x-icon" href="<?= base_url() ?>template/public/images/fav-icon.png" rel="icon">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/public/css/xpoge.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/public/css/responsive.css">

    </head>
    <body>
        <!-- Start preloader -->
        <!-- <div id="preloader"></div> -->
        <!-- End preloader -->

        

        <div class="main">
            <!-- Header start -->
            <header id="header">
                <div class="container position-r">
                    <div class="row m-0">
                        <div class="col-lg-3 col-md-4 col-4 p-0">
                            <div class="navbar-header">
                                <a class="navbar-brand page-scroll" href="index.html">
                                    <img alt="xpoge" src="<?= base_url() ?>template/public/images/logo.png">
                                </a> 
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-8 p-0 position-initial">
                            <div class="right-side">
                                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle d-block d-lg-none d-xl-none" type="button"><i class="fa fa-bars"></i>
                                </button>
                                <div class="overlay"></div>
                                <div id="menu" class="navbar-collapse collapse" >
                                    <ul class="nav navbar-nav">
                                        <li class="level">
                                            <a href="<?= base_url() ?>" class="nav-link">Home</a>
                                        </li>
                                        <li class="level">
                                            <a href="<?= base_url('product') ?>" class="nav-link">Produk</a>
                                        </li>
                                        <li class="level">
                                            <a href="<?= base_url('about')  ?>" class="nav-link">Tentang Kami</a>
                                        </li>
                                        <li class="level">
                                            <a href="<?= base_url('contact')  ?>" class="nav-link">Hubungi Kami</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="header-right-link">
                                  <ul>
                                    
                                    <li class="account-icon"> 
                                        <a href="#"><span></span></a>
                                        <div class="header-link-dropdown account-link-dropdown">
                                            <ul class="link-dropdown-list">
                                              <li> <span class="dropdown-title">Akun Saya</span>
                                                <ul>
                                                  <li><a href="<?= base_url('auth') ?>">Login</a></li>
                                                  <li><a href="<?= base_url('register') ?>">Daftar Akun Baru</a></li>
                                                </ul>
                                              </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="cart-icon"> 
                                        <a href="#"> <span> <small class="cart-notification">2</small> </span> </a>
                                        <div class="cart-dropdown header-link-dropdown">
                                            <ul class="cart-list link-dropdown-list">
                                              <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                                                <figure> <a href="product-page.html" class="pull-left"> <img alt="Xpoge" src="<?= base_url() ?>template/public/images/1.jpg"></a>
                                                  <figcaption> <span><a href="product-page.html">Men's Full Sleeves Collar Shirt</a></span>
                                                    <p class="cart-price">$14.99</p>
                                                    <div class="product-qty">
                                                      <label>Qty:</label>
                                                      <div class="custom-qty">
                                                        <input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
                                                      </div>
                                                    </div>
                                                  </figcaption>
                                                </figure>
                                              </li>
                                              
                                            </ul>
                                            <p class="cart-sub-totle"> <span class="pull-left">Total</span> <span class="pull-right"><strong class="price-box">$29.98</strong></span> </p>
                                            <div class="clearfix"></div>
                                            <div class="mt-20"> <a href="checkout.html" class="btn-color btn right-side">Keranjang</a> </div>
                                        </div>
                                    </li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header end -->


            <?= $contents ?>


            <!-- Footer section start -->
            <footer class="footer-part">
                <div class="container">
                    <div class="footer-top ptb-100">
                        <div class="mb_-30">
                            <div class="row">
                                <div class="col-12 col-lg-3 col-md-6">
                                    <div class="footer-about mb-sm-30">
                                        <div class="footer-logo">
                                            <a href="index.html">
                                                <img src="<?= base_url() ?>template/public/images/logo.png" alt="logo">
                                            </a>
                                        </div>
                                        <p class="footer-p">Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh mauris sit amet nibh. Donec sodales sagittis</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-6">
                                    <div class="footer-static-block">
                                        <span class="opener plus"></span>
                                        <h3 class="head-three">Informasi</h3>
                                        <ul class="footer-menu footer-block-contant">
                                            <li><a href="blog-left-col.html">Tentang Kami</a></li>
                                            <li><a href="contact.html">Hubungi Kami</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-6">
                                    <div class="footer-static-block">
                                        <span class="opener plus"></span>
                                        <h3 class="head-three">Akun Saya</h3>
                                        <ul class="footer-menu footer-block-contant">
                                            <li><a href="javascript:void(0)">Riwayat Pesanan</a></li>
                                            <li><a href="javascript:void(0)">Profil Saya</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-6">
                                    <div class="footer-static-block">
                                        <span class="opener plus"></span>
                                        <h3 class="head-three">Hubungi Kami</h3>
                                        <div class="contact-box footer-block-contant">
                                            <ul>
                                                <li>
                                                    <div class="contact-thumb">
                                                        <img src="<?= base_url() ?>template/public/images/address-icon.svg" alt="xpoge">
                                                    </div>
                                                    <div class="contact-box-detail">
                                                        <p>869 Lexington Ave, New York, NY 10065, USA</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contact-thumb">
                                                        <img src="<?= base_url() ?>template/public/images/phone-icon.svg" alt="xpoge">
                                                    </div>
                                                    <div class="contact-box-detail">
                                                        <p>+91 123 456 789 0</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contact-thumb">
                                                        <img src="<?= base_url() ?>template/public/images/mail-icon.svg" alt="xpoge">
                                                    </div>
                                                    <div class="contact-box-detail">
                                                        <p>xpoge@hi123.com</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom align-center">
                        <div class="row">
                            <div class="col-12">
                                <div class="w-100">
                                    <p class="mb-0">© Xpoge all Rights Reserverd theme by <a href="https://TemplatesCoder.com/" target="_blank" title="TemplatesCoder">TemplatesCoder</a></p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="social-media">
                                    <ul>
                                        <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer section end -->
        </div>
        <script src="<?= base_url() ?>template/public/js/jquery-3.4.1.min.js"></script>
        <script src="<?= base_url() ?>template/public/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>template/public/js/owl.carousel.min.js"></script>
        <script src="<?= base_url() ?>template/public/js/jquery.magnific-popup.min.js"></script>
        <script src="<?= base_url() ?>template/public/js/custom.js"></script>
        
    </body>

</html>
