<style>
    .order-track {
  margin-top: 2rem;
  padding: 0 1rem;
  border-top: 1px dashed #2c3e50;
  padding-top: 2.5rem;
  display: flex;
  flex-direction: column;
}
.order-track-step {
  display: flex;
  height: 7rem;
}
.order-track-step:last-child {
  overflow: hidden;
  height: 4rem;
}
.order-track-step:last-child .order-track-status span:last-of-type {
  display: none;
}
.order-track-status {
  margin-right: 1.5rem;
  position: relative;
}
.order-track-status-dot {
  display: block;
  width: 2.2rem;
  height: 2.2rem;
  border-radius: 50%;
  background: #f05a00;
}
.order-track-status-line {
  display: block;
  margin: 0 auto;
  width: 2px;
  height: 7rem;
  background: #f05a00;
}
.order-track-text-stat {
  font-size: 1.3rem;
  font-weight: 500;
  margin-bottom: 3px;
}
.order-track-text-sub {
  font-size: 1rem;
  font-weight: 300;
}

.order-track {
  transition: all .3s height 0.3s;
  transform-origin: top center;
}
</style>
<div class="contant">
    <div id="banner-part" class="banner inner-banner">
        <div class="container">
            <div class="bread-crumb-main">
                <h1 class="banner-title">Pelacakan Pesanan</h1>
                <div class="breadcrumb">
                    <ul class="inline">
                        <li><a href="<?= base_url('') ?>">Home</a></li>
                       
                        <li><a href="<?= base_url('order/'.$row['transaksi_no']) ?>">Detail</a></li>
                        <li>Tracking</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout-part ptb-100">
        <div class="container">
          
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card p-4">
                        <div class="heading-part mb-30">
                            <h3>Lacak</h3>
                        </div>
                        <div class="row" >
                            <div class="col-12">
                                <div class="order-track"  id="data">
                                 
                                    <?= $payment ?>
                                    <div class="order-track-step">
                                        <div class="order-track-status">
                                            <span class="order-track-status-dot"></span>
                                            <span class="order-track-status-line"></span>
                                        </div>
                                        <div class="order-track-text">
                                            <p class="order-track-text-stat"> Pesanan diterima</p>
                                            <span class="order-track-text-sub"><?= tanggalwaktu($row['transaksi_created_on'])?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                           
                            <!-- <div class="col-12" id="data"></div>
                            <?= $payment ?>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4"><?= tanggalwaktu($row['transaksi_created_on'])?></div>
                                    <div class="col-8">Pesanan diterima</div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>
<input type="hidden" id="id" value="<?= encode($row['transaksi_id'])?>">