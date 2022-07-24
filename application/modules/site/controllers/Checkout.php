<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends MX_Controller 
{

	public function __construct()
	{
        parent::__construct();
		if($this->session->userdata('isMember')){
			$this->load->model('model_app','',TRUE);
			$this->id = decode($this->session->userdata['isMember']['member_id']);
		}else{
			// redirect('auth');
		}
	}

	public function index()
	{
		if( $this->cart->total_items() > 0){
			$data['title'] = 'Checkout - '.title();
			$data['js'] = base_url('template/public/ajax/produk/ajax-checkout.js');
			$this->template->load('template','checkout',$data);
		}else{
			$this->session->set_flashdata('error','Keranjang masih kosong');
			redirect('cart');
		}
		
	}
	function checkingEkspedisi(){
		if($this->input->method() == 'post'){
			$output = null;
			$this->form_validation->set_rules('ekspedisi','Ekspedisi','required');
            $this->form_validation->set_rules('kabupaten','Kabupaten','required');
			$ekspedisi = $this->input->post('ekspedisi');
			$destination = $this->input->post('kabupaten');
			$origin = 128;
			$weight = 0;
			
			if($this->form_validation->run() == FALSE){
				$status = false;
				$replace = array('<p>','</p>');
				$msg = replace($replace,validation_errors());
			}else{
				if( $this->cart->total_items() > 0){
			

					$record = $this->cart->contents();
					foreach($record as $row ){
						$ex = explode('-',$row['id']);
						$id = $ex[0];
						$batch = $ex[1];
					
						$cek =  $this->model_app->join_where('produk','produk_batch','produk_id','pb_produk_id',array('produk_id'=>$id,'pb_id'=>$batch));
						if($cek->num_rows() > 0){
							$rows = $cek->row_array();
							if($rows['pb_status'] == 'close'){
								
							}else{
								if($rows['pb_tanggal_mulai'] >= date('Y-m-d H:i:s') AND $rows['pb_tanggal_selesai'] <= date('Y-m-d H:i:s')){
	
								}else{
									$weight += $rows['produk_berat']+$weight;
								}
							}
						}
						
					}
				
					$this->load->library('rajaongkir',NULL,'ongkir');
					$resp = $this->ongkir->getCost($origin,'city',$destination,'city',$weight,$ekspedisi);
					if($resp['status'] == false){
						$status = false;
						$msg = $resp['message']['rajaongkir']['status']['description'];
					}else{
						$status = true;
						$msg = null;
						$response = json_decode($resp['output'],true);
						$opt = $response['rajaongkir']['results'][0]['costs'];
						// $output = $opt;
						if($opt != ""){
							$output .= '<option disabled selected></option>';
							foreach($opt as $op){
								if($op['cost'][0]['etd'] == ''){
									$estimasi = '';
								}else{
									$estimasi = $op['cost'][0]['etd'].' hari';
								}
								$output .= "<option value='".$op['service']."' data-services='".encode($op['cost'][0]['value'])."' data-estimate='".$estimasi." Hari'>".$op['service'].' - '.$op['description']."</option>";
							}
						}else{
							$status = false;
							$msg = 'Service ekspedisi tidak tersedia';
						}
						
					}
					
				}else{
					$status = false;
					$msg = 'Keranjang masih kosong';
				}
			}
			echo json_encode(array('status'=>$status,'msg'=>$msg,'output'=>$output));
		}else{
			redirect('cart');
		}
	}
	function service(){
		if($this->input->method() == 'post'){
			$this->form_validation->set_rules('ser','Services','required');
            $this->form_validation->set_rules('est','Estimasi','required');
			$ser = decode($this->input->post('ser'));
			$est = $this->input->post('est');
			$total = 0;
			$arr = null;
			if($this->form_validation->run() == FALSE){
				$status = false;
				$replace = array('<p>','</p>');
				$msg = replace($replace,validation_errors());
			}else{
				if($this->form_validation->run() == FALSE){
					$status = false;
					$replace = array('<p>','</p>');
					$msg = replace($replace,validation_errors());
				}else{
					if( $this->cart->total_items() > 0){
				
	
						$record = $this->cart->contents();
						foreach($record as $row ){
							$ex = explode('-',$row['id']);
							$id = $ex[0];
							$batch = $ex[1];
						
							$cek =  $this->model_app->join_where('produk','produk_batch','produk_id','pb_produk_id',array('produk_id'=>$id,'pb_id'=>$batch));
							if($cek->num_rows() > 0){
								$rows = $cek->row_array();
								if($rows['pb_status'] == 'close'){
									
								}else{
									if($rows['pb_tanggal_mulai'] >= date('Y-m-d H:i:s') AND $rows['pb_tanggal_selesai'] <= date('Y-m-d H:i:s')){
		
									}else{
										$total += $rows['produk_harga_jual']+$total;
									}
								}
							}
							
						}
						$status = true;
						$msg = null;
						$ongkir = idr($ser).'<br>'.$est;
						$subtotal = $total + $ser;
						$arr = array('ongkir'=>$ongkir,'subtotal'=>idr($subtotal));
					}else{
						$status = false;
						$msg = 'Keranjang masih kosong';
					}
					
				}
			}
			echo json_encode(array('status'=>$status,'msg'=>$msg,'arr'=>$arr));
		}else{
			redirect('cart');
		}
	}
	function data(){
		if($this->input->method() == 'post'){
			$output = null;
			$redirect=null;
			if( $this->cart->total_items() > 0){
				$user = $this->model_app->view_where('member',array('member_id'=>$this->id))->row_array();
				$status = true;
				$have = false;
				$msg = null;
				$prov = '';
				$kabu = '';
				$provinsi = $this->model_app->view_order('provinsi','provinsi_nama','ASC');
				if($provinsi->num_rows() > 0){
					foreach($provinsi->result_array() as $prv){
						if($prv['provinsi_id'] == $user['member_provinsi']){
							$prov .= '<option value="'.$prv['provinsi_id'].'" selected>'.$prv['provinsi_nama'].'</option>';

						}else{
						$prov .= '<option value="'.$prv['provinsi_id'].'">'.$prv['provinsi_nama'].'</option>';

						}
					}
				}
				if($user['member_kabupaten'] != 0){
				
					$kabupaten = $this->model_app->view_where_ordering('kota',array('kota_provinsi_id'=>$user['member_provinsi']),'kota_nama','ASC');
					if($kabupaten->num_rows() > 0){
						foreach($kabupaten->result_array() as $kab){
							if($kab['kota_id'] == $user['member_kabupaten']){
								$kabu .= '<option value="'.$kab['kota_id'].'" selected>'.$kab['kota_nama'].'</option>';
							}else{
								$kabu .= '<option value="'.$kab['kota_id'].'">'.$kab['kota_nama'].'</option>';
							}
						}
					}
				}else{
					$kabu = '<option+ selected disabled>Pilih Kabupaten</option>';
				}
				$product = '';
				$total = 0;
				$product .= '<ul>';
				$record = $this->cart->contents();
				foreach($record as $row ){
					$ex = explode('-',$row['id']);
					$id = $ex[0];
					$batch = $ex[1];
					if(file_exists('upload/produk/'.$row['image'])){
						$image = base_url('upload/produk/'.$row['image']);
					}else{
						$image = base_url('upload/produk/404.jpg');
					}
					$cek =  $this->model_app->join_where('produk','produk_batch','produk_id','pb_produk_id',array('produk_id'=>$id,'pb_id'=>$batch));
					if($cek->num_rows() > 0){
						$rows = $cek->row_array();
						if($rows['pb_status'] == 'close'){
							

							$product .= '<li>
											<div class="pro-media"> <a href="'.base_url('product/'.$rows['produk_seo'].'/'.$rows['pb_batch']).'"><img alt="Xpoge" src="'.$image.'" class="bg-produk-out"></a> </div>
											<div class="pro-detail-info"> <a href="'.base_url('product/'.$rows['produk_seo'].'/'.$rows['pb_batch']).'" class="product-title" style="color:#c3c1c1">'.$rows['produk_nama'].' ('.$rows['pb_batch'].')</a>
												<div class="price-box"> 
													<span class="">'.idr($rows['produk_harga_jual']).'</span>
													<span class="price old-price">Close Order</span>
												</div>
												<div class="checkout-qty">
													<div>
														<label>Qty: </label>
														<span class="info-deta">'.$row['qty'].'</span> 
													</div>
												</div>
											</div>
										</li>';
						}else{
							
							if($rows['pb_tanggal_mulai'] >= date('Y-m-d H:i:s') AND $rows['pb_tanggal_selesai'] <= date('Y-m-d H:i:s')){
							
								$product .= '<li>
											<div class="pro-media"> <a href="'.base_url('product/'.$rows['produk_seo'].'/'.$rows['pb_batch']).'"><img alt="Xpoge" src="'.$image.'" class="bg-produk-out"></a> </div>
											<div class="pro-detail-info"> <a href="'.base_url('product/'.$rows['produk_seo'].'/'.$rows['pb_batch']).'" class="product-title" style="color:#c3c1c1">'.$rows['produk_nama'].' ('.$rows['pb_batch'].')</a>
												<div class="price-box"> 
													<span class="">'.idr($rows['produk_harga_jual']).'</span>
													<span class="price old-price">Waktu Pre-order habis</span>
												</div>
												<div class="checkout-qty">
													<div>
														<label>Qty: </label>
														<span class="info-deta">'.$row['qty'].'</span> 
													</div>
												</div>
											</div>
										</li>';
							}else{
							
								$have = true;
								$total += $total + $row['subtotal'];
								$product .= '<li>
												<div class="pro-media"> <a href="'.base_url('product/'.$rows['produk_seo'].'/'.$rows['pb_batch']).'"><img alt="Xpoge" src="'.$image.'"></a> </div>
												<div class="pro-detail-info"> <a href="'.base_url('product/'.$rows['produk_seo'].'/'.$rows['pb_batch']).'" class="product-title">'.$rows['produk_nama'].' ('.$rows['pb_batch'].')</a>
													<div class="price-box"> 
														<span class="price">'.idr($rows['produk_harga_jual']).'</span>
														
													</div>
													<div class="checkout-qty">
														<div>
															<label>Qty: </label>
															<span class="info-deta">'.$row['qty'].'</span> 
															
														</div>
													</div>
													
													
												</div>
											</li>';
							}
							
						}
						
					}
				
				}
				
				$product .=' </ul>';
				if($have == true){
					$button = '<button class="btn full btn-color" id="buttonCheckout" disabled>Pembayaran</button>';
				}else{
					$button = '';
				}
				$output .= '<form class="main-form" id="formAct">
							<div class="row">
								<div class="col-12 col-lg-8">
									<div class="mb-md-30">
										<div class="mb-60">
											<div class="row">
												<div class="col-12">
													<div class="heading-part mb-30 mb-sm-20">
														<h3>Informasi Data</h3>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="form-group">
														<label for="zip">Nama</label>
														<input type="text" required="" name="nama" value="'.$user['member_nama'].'">
													</div>
												</div>
												<div class="col-md-4 col-12">
													<div class="form-group">
														<label for="city">No telp</label>
														<input  type="text" required="" name="no_telp" value="'.$user['member_no_telp'].'">
													</div>
												</div>
												<div class="col-md-4 col-12">
													<div class="form-group">
														<label for="email">Email</label>
														<input id="email" type="email" required name="email" value="'.$user['member_email'].'" >
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<label for="phone-no">Alamat</label>
														<textarea name="alamat" required>'.$user['member_alamat'].'</textarea>
													</div>
												</div>
												<div class="col-md-4 col-12">
													<div class="form-group">
														<label for="zip">Provinsi</label>
														<select name="provinsi" id="provinsi">
															'.$prov.'
														</select>
													</div>
												</div>
												<div class="col-md-4 col-12">
													<div class="form-group">
														<label for="city">Kabupaten</label>
														<select name="kabupaten" id="kabupaten">
															'.$kabu.'
														</select>
													</div>
												</div>
												<div class="col-md-4 col-12">
													<div class="form-group">
														<label for="city">Kode Pos</label>
														<input type="number" name="kode_pos" required value="'.$user['member_kode_pos'].'" >

													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<label for="city">Catatan</label>
														<textarea name="catatan"></textarea>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<h4>Ekspedisi</h4>
													</div>
												</div>
												<div class="col-md-6 col-12">
													<div class="form-group">
														<label for="city">Kurir</label>
														<select name="kurir" id="kurir">
															<option selected disabled></option>

															<option value="jne">JNE</option>
															<option value="jnt">J&T</option>
															
														</select>
													</div>
												</div>
												<div class="col-md-6 col-12">
													<div class="form-group">
														<label for="city">Service</label>
														<select name="service" id="service">
															<option selected disabled></option>
														</select>
													</div>
												</div>
											</div>
											</div>
										</div>
										<div class="row">
											

									</div>
								</div>
								<div class="col-12 col-lg-4">
									<div class="heading-part mb-30 mb-sm-20">
										<h3>Pesanan Anda</h3>
									</div>
									<div class="checkout-products sidebar-product mb-60">
										'.$product.'
									</div>
									<hr><br>
									<div class="complete-order-detail commun-table gray-bg mb-30">
										<div class="table-responsive">
										<table class="table m-0">
											<tbody>
											<tr>
												<td><b>Tanggal Pemesanan :</b></td>
												<td>'.fullDate(date('Y-m-d')).'</td>
											</tr>
											<tr>
												<td><b>Ongkos Kirim:</b></td>
												<td><div class="price-box" id="ongkir">Pilih Ekspedisi</div></td>
											</tr>
											<tr>
												<td><b>Total :</b></td>
												<td><div class="price-box" id="total"> '.idr($total).'</div></td>
											</tr>
											<tr>
												<td><b>Sub Total :</b></td>
												<td><div class="price-box"> <span class="price" id="subtotal">'.idr($total).'</span> </div></td>
											</tr>
											
											</tbody>
										</table>
										</div>
									</div>
									
									'.$button.'
								</div>
							</div>
						</form>';
			}else{
				$status = false;
				$msg = 'Keranjang masih kosong';
				$redirect = base_url('cart');
			}
			echo json_encode(array('status'=>$status,'msg'=>$msg,'redirect'=>$redirect,'output'=>$output));	
			
		}
	}

	function detail()
	{
		$this->template->load('template','checkout_detail');
	}

}



