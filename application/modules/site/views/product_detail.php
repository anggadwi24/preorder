<!-- Product detail contant start -->
<div class="contant">
	<div id="banner-part" class="banner inner-banner">
		<div class="container">
			<div class="bread-crumb-main">
				<h1 class="banner-title">Detail Produk</h1>
				<div class="breadcrumb">
                    <ul class="inline">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.html">Produk</a></li>
                        <li>Detail Produk</li>
                    </ul>
                </div>
            </div>
		</div>
	</div>
	<div class="ptb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-12">
					<div class="align-center mb-md-30">
		                <ul id="glass-case" class="gc-start">
		                    <li><img src="<?= base_url('upload/docs/logo.png') ?>" alt="Xpoge" /></li>
		                </ul>
		            </div>
				</div>
				<div class="col-lg-7 col-md-6 col-12">
					<div class="product-detail-main">
						<div class="product-item-details">
							<h1 class="product-item-name">Men's Full Sleeves Collar Shirt</h1>
	                        <div class="price-box"> <span class="price">$80.00</span> 
	                        	<del class="price old-price">$120.00</del>
	                        </div>
	                        <div class="product-des">
            					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco aboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in oluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            				</div>
	                        
	                        <hr class="mb-20">
	                        <div class="row">
	                        	<div class="col-12">
	                        		<div class="table-listing qty mb-20">
			                            <div class="row">
			                                <div class="col-xl-2 col-md-3 col-sm-12">
			                                  <span>Qty:</span>
			                                </div>
			                                <div class="col-xl-10 col-md-9 col-sm-12">
			                                  <div class="custom-qty">
			                                    <button onclick="var result = document.getElementById('qty1'); var qty1 = result.value; if( !isNaN( qty1 ) &amp;&amp; qty1 > 1 ) result.value--;return false;" class="reduced items" type="button"> <i class="fa fa-minus"></i> </button>
			                                    <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty1" name="qty">
			                                    <button onclick="var result = document.getElementById('qty1'); var qty1 = result.value; if( !isNaN( qty1 )) result.value++;return false;" class="increase items" type="button"> <i class="fa fa-plus"></i> </button>
			                                  </div>
			                                </div>
			                            </div>
		                            </div>
	                            </div>
	                        </div>
	                        <hr class="mb-20">
	                        <div class="product-details-btn"><!-- detail-page-btn  -->
	                        	<ul>
	                        		<li class="icon cart-icon">
	                        			<a href="cart.html" class="btn btn-color"><span></span>Tambah ke Keranjang</a>
	                        		</li>
	                        	</ul>
	                        </div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-6 col-12">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Product detail contant end -->

<section class="product-tab-part position-r pb-100">
	<div class="container">
		<div class="product-tab-inner">
            <div class="row">
            	<div class="col-12">
            		 <div id="tabs">
                    	<ul class="nav nav-tabs">
	                        <li><a class="tab-Description selected">Detail Gambar</a></li>
                    	</ul>
                    </div>
                    <div id="items">
	                    <div class="tab_content">
	                        <ul>
	                        	<li>
	                            	<div class="items-Description selected">
	                            		
	                            		<div class="row"> 
			                                <div class="col-lg-2 col-6 mb-4">
			                                    <img class="card-img-top" src="<?= base_url('upload/docs/logo.png') ?>" alt="">
			                                </div>
			                                <div class="col-lg-2 col-6 mb-4">
			                                    <img class="card-img-top" src="<?= base_url('upload/docs/logo.png') ?>" alt="">
			                                </div>
			                                <div class="col-lg-2 col-6 mb-4">
			                                    <img class="card-img-top" src="<?= base_url('upload/docs/logo.png') ?>" alt="">
			                                </div>
			                                <div class="col-lg-2 col-6 mb-4">
			                                    <img class="card-img-top" src="<?= base_url('upload/docs/logo.png') ?>" alt="">
			                                </div>
			                            </div>

	                            	</div>
	                            </li>
	                        </ul>
	                    </div>
                	</div>
            	</div>
            </div>
        </div>
	</div>
</section>

<hr>