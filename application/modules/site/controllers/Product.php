<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MX_Controller 
{

	public function __construct()
	{
        parent::__construct();
    	$this->load->model('model_app','',TRUE);
    	
	}

	public function index()
	{
		$data['title'] = 'Produk - '.title();
		$data['js'] = base_url('template/public/ajax/produk/ajax-produk.js');
		$this->template->load('template','product',$data);
	}

	public function detail()
	{
		$this->template->load('template','product_detail');
	}
	function data(){
		if($this->input->method() == 'post'){
			$output = null;
			$status = $this->input->post('status');
			if($status == 'close'){
				$data = $this->db->query("SELECT *,COUNT(pb_id) as batch FROM produk a JOIN produk_batch b ON a.produk_id = b.pb_produk_id WHERE pb_status = 'close' GROUP BY pb_produk_id ORDER BY pb_created_on DESC  ");
			}else {
				$data =  $this->db->query("SELECT *,COUNT(pb_id) as batch FROM produk a JOIN produk_batch b ON a.produk_id = b.pb_produk_id WHERE pb_status = 'open' AND pb_tanggal_mulai <= '".date('Y-m-d H:i:s')."' AND pb_tanggal_selesai >= '".date('Y-m-d H:i:s')."' GROUP BY pb_produk_id ORDER BY pb_created_on DESC  ");
			}
			if($data->num_rows() > 0){
				foreach($data->result_array() as $row) {
					$btch = $this->model_app->view_where("produk_batch",array('pb_produk_id'=>$row['produk_id']));
					if(file_exists('upload/produk/'.$row['produk_image'])){
						$gambar = base_url().'upload/produk/'.$row['produk_image'];
					}else{
						$gambar = base_url().'upload/produk/404.jpg';
					}
					if($row['pb_status'] == 'close'){
						$button = '<ul>
									<li class="icon cart-icon">
										<p><b>Close Order</b></p>
									</li>
								</ul>';
					}else{
						$button = ' <ul>
						<li class="icon cart-icon">
							<a class="addToCart" data-produk="'.encode($row['produk_id']).'" data-batch="'.encode($row['pb_id']).'">
								<span></span>
							</a>
						</li>
					</ul>';
					}
					if(countTime($row['pb_created_on']) < 7){
						$new = ' <div class="new-label"><span>New</span></div>';
					}else{
						$new = '';
					}
					if($btch->num_rows() > 1){
						$judul = $row['produk_nama'].' ('.$row['pb_batch'].')';
					}else{
						$judul = $row['produk_nama'];
					}
					$output .=  ' <div class="col-lg-3 col-md-4 col-6">
						<div class="product-item">
							<div class="product-image">
							'.$new.'
								<a href="'.base_url('product/'.$row['produk_seo'].'&batch='.$row['pb_batch'].'').'">
									<img src="'.$gambar.'" alt="Xpoge">
								</a>
							</div>
							<div class="product-details-outer">
								<div class="product-details">
									<div class="product-title">
										<a href="'.base_url('product/'.$row['produk_seo'].'/'.$row['pb_batch'].'').'">'.$judul.'</a>
									</div>
									<div class="price-box">
										<span class="price">'.idr($row['produk_harga_jual']).'</span>
									
									</div>
								</div>
								<div class="product-details-btn">
									'.$button.'
								</div>
							</div>
						</div>
					</div>';
				}
			}
			echo json_encode($output);
		}
	}
}
