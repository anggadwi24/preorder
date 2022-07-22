<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MX_Controller 
{

	public function __construct()
	{
        parent::__construct();
		if($this->session->userdata('isMember')){
			$this->load->model('model_app','',TRUE);
		}else{
			redirect('auth');
		}
    	
	}

	

	public function index()
	{
		$data['title'] = 'Profil - '.title();
		$this->template->load('template','profil',$data);
	}
	function cart(){
		$data['title'] = 'Cart - '.title();
		$data['js'] = base_url('template/public/ajax/produk/ajax-cart.js');
		$this->template->load('template','cart',$data);
	}
	function dataCart(){
        if($this->input->method() == 'post'){
            $output = null;
            $count = $this->cart->total_items() ;
            $subtotal = 0;
			$button = '';
			$quantity = '';

            if($this->session->userdata('isMember')){
				$output .= '<table class="table border mb-0">
							<thead>
							<tr>
								<th class="align-left">#</th>
								<th class="align-left">Produk</th>
								<th>Harga</th>
								<th>Jumlah</th>
								<th>Sub Total</th>
								<th>#</th>
							</tr>
							</thead>';
                if($this->cart->total_items() <= 0){
                    $output .= '  <tr><td colspan="6"><span>Keranjang masih kosong</span></td></tr>';
                }else{
					$button = ' <button id="checkout" class="btn btn-color">Checkout
					<span><i class="fa fa-angle-right"></i></span>
				  </button> ';
                    $record = $this->cart->contents();
                    foreach($record as $row ){
                        $subtotal = $subtotal + $row['subtotal'];
						$ex = explode('-',$row['id']);
                        $id = $ex[0];
                        $batch = $ex[1];
                        $cek =  $this->model_app->join_where('produk','produk_batch','produk_id','pb_produk_id',array('produk_id'=>$id,'pb_id'=>$batch));
                        if($cek->num_rows() > 0){
                                $rows = $cek->row_array();
                                if(file_exists('upload/produk/'.$row['image'])){
                                    $image = base_url('upload/produk/'.$row['image']);
                                }else{
                                    $image = base_url('upload/produk/404.jpg');
                                }
								if($row['qty'] > 10){
									for($a=1;$a<=10;$a++){
										$quantity .= '<option value="'.$a.'">'.$a.'</option>';
									}
									$quantity .= '<option value="'.$row['qty'].'">'.$row['qty'].'</option>';
								}else{
									for($a=1;$a<=10;$a++){
										if($row['qty'] == $a){
											$quantity .= '<option value="'.$a.'" selected>'.$a.'</option>';

										}else{
											$quantity .= '<option value="'.$a.'">'.$a.'</option>';

										}
									}
								}
								$output .= '<tr>
												<td class="align-left">
												<a href="'.base_url('product/'.$rows['produk_seo'].'/'.$rows['pb_batch']).'">
													<div class="product-image">
													<img alt="'.$rows['produk_nama'].'" src="'.$image.'">
													</div>
												</a>
												</td>
												<td class="align-left">
												<div class="product-title"> 
													<a href="'.base_url('product/'.$rows['produk_seo'].'/'.$rows['pb_batch']).'">'.$rows['produk_nama'].'</a> 
												</div>
												</td>
												<td>
												<ul>
													<li>
													<div class="base-price price-box"> 
														<span class="price">'.idr($row['price']).'</span> 
													</div>
													</li>
												</ul>
												</td>
												<td>
												<div class="input-box">
													<select  class="quantity_cart quantity1" name="quantity_cart"  data-id = "'.$row['rowid'].'">
														'.$quantity.'
													</select>
												</div>
												</td>
												<td>
													<div class="total-price price-box"> 
													<span class="price">'.idr($row['subtotal']).'</span> 
												</div>
												</td>
												<td>
													<a class="btn small btn-color removeCart1"  data-id="'.$row['rowid'].'">
														<i title="Remove Item From Cart"  class="fa fa-trash cart-remove-item " ></i>
													</a>
												</td>
											</tr>';
                            
                                
                        }
						$quantity = '';
                    }
                
                }   
				$output .= '</table>';
            }else{
                $count = 0;
                $output = null;
                
            }
          echo json_encode(array('output'=>$output,'subtotal'=>idr($subtotal),'count'=>$count,'button'=>$button));
        }
       
    }
	function updateCart(){
        if($this->input->method() == 'post'){
            $rowid = $this->input->post('rowid');
            $qty = $this->input->post('qty');
            if(!empty($rowid)){
                if($qty > 0){
                    $data = array(
                        'rowid' => $rowid,
                        'qty'   => $qty
                    );
                    $this->cart->update($data);
               
                    $status = true;
                    $msg = null;
                }else{
                    $status = false;
                    $msg = 'Quantity tidak boleh 0';
                }
            }else{
                $status = false;
                $msg = 'Cart tidak ditemukan';
            }
           echo json_encode(array('status'=>$status,'msg'=>$msg));
        }
    }
}
