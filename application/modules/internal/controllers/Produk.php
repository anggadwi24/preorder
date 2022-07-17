<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MX_Controller 
{

	public function __construct()
	{
        parent::__construct();
    	$this->load->model('model_app','',TRUE);
    	if($this->session->userdata('isLog')){
			
		}else{
			redirect('internal/auth');
		}
	}

	public function index()
	{
		$data['page'] = 'Produk';
		$data['title'] = 'Produk - '.title();
		$data['right'] =' <a href="'.base_url('internal/produk/add') .'" class="btn btn-info kanan"><i class="ti-plus"> </i> Tambah Produk</a>';
		$data['breadcrumb'] = ' <span class="breadcrumb-item active">Produk</span>';
		
		$data['js'] = base_url('template/admin/ajax/basic.js');
		$data['record'] = $this->model_app->view_order('produk','produk_id','DESC');	
		$this->template->load('template','produk/produk',$data);


	}
	public function add()
	{
		$data['page'] = 'Produk';
		$data['title'] = 'Tambah Produk - '.title();
		$data['right'] =' ';
		$data['breadcrumb'] = ' <a href="'.base_url('internal/produk').'" class="breadcrumb-item">Produk</a>';
		$data['breadcrumb'] .= ' <span class="breadcrumb-item active">Tambah</span>';
		
		$data['js'] = base_url('template/admin/ajax/produk/ajax-add.js');
		
		$this->template->load('template','produk/produk_add',$data);
	}

	public function delete()
	{
		$id = decode($this->input->get('id'));
		$cek = $this->model_app->view_where('produk',array('produk_id'=>$id));
		if($cek->num_rows() > 0){
			$this->model_app->delete('produk',array('produk_id'=>$id));
			$this->model_app->delete('produk_batch',array('pb_produk_id'=>$id));
			$this->session->set_flashdata('success','Porduk berhasil dihapus');
			redirect('internal/produk');
		}else{
			$this->session->set_flashdata("error","Produk tidak ditemukan");
			redirect('internal/produk');
		}
		
	}
	public function edit()
	{
		$id = $this->input->get('id');
		$cek = $this->model_app->view_where('produk',array('produk_id'=>$id));
		if($cek->num_rows() > 0){
			$data['page'] = 'Produk';
			$data['row'] = $cek->row_array();
			$data['title'] = 'Edit Produk - '.title();
			$data['right'] =' ';
			$data['breadcrumb'] = ' <a href="'.base_url('internal/produk').'" class="breadcrumb-item">Produk</a>';
			$data['breadcrumb'] .= ' <span class="breadcrumb-item active">Edit</span>';
			
			$data['js'] = base_url('template/admin/ajax/produk/ajax-edit.js');
			
			$this->template->load('template','produk/produk_edit',$data);
		}else{
			$this->session->set_flashdata("error","Produk tidak ditemukan");
			redirect('internal/produk');
		}
		
	}
	public function update()
	{
		if($this->input->method() == 'post'){
			$id = $this->input->post('id');
			$cek = $this->model_app->view_where('produk',array('produk_id'=>$id));
			if($cek->num_rows() > 0){
				$this->form_validation->set_rules('nama','Nama Produk','min_length[3]|max_length[255]|required');
				$this->form_validation->set_rules('mini','Mini Deskripsi','min_length[5]|required');
				$this->form_validation->set_rules('jual','Harga Jual','required');
				$this->form_validation->set_rules('pokok','Harga Pokok','required');
				$this->form_validation->set_rules('berat','Berat','required');
				$this->form_validation->set_rules('deskripsi','Deskripsi','required');
				if($this->form_validation->run() == FALSE){
					$status = false;
					$replace = array('<p>','</p>');
					$msg = replace($replace,validation_errors());
				}else{
					$nama = $this->input->post('nama');
					$mini = $this->input->post('mini');
					$jual = $this->input->post('jual');
					$pokok = $this->input->post('pokok');
					$berat = $this->input->post('berat');
					$deskripsi = $this->input->post('deskripsi');
					$seo = $this->model_app->seo_produk_update(seo($nama),$id);
					$data = array(
						'produk_nama'=>$nama,
						'produk_mini_deskripsi'=>$mini,
						'produk_harga_jual'=>$jual,
						'produk_harga_pokok'=>$pokok,
						'produk_berat'=>$berat,
						'produk_deskripsi'=>$deskripsi,
						'produk_seo'=>$seo,
						
					);
					$this->model_app->update('produk',$data,array('produk_id'=>$id));
					$status = true;
					$msg = 'Produk berhasil diubah';
				}
			}else{
				$status = false;
				$msg = 'Produk tidak ditemukan';
			}
		}else{
			redirect('internal/produk');
		}
		echo json_encode(array('status'=>$status,'msg'=>$msg,'redirect'=>base_url('internal/produk')));
		
	}
	function updateImage(){
		if($this->input->method() == 'post'){
			$id = $this->input->post('id');
			$cek = $this->model_app->view_where('produk',array('produk_id'=>$id));
			$image = null;
			if($cek->num_rows() > 0){
				$row = $cek->row_array();
				$config['upload_path']          = './upload/produk/';
				$config['encrypt_name'] = TRUE;
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 5000;
					
						
				$this->load->library('upload', $config);
		
				
							

				if ($this->upload->do_upload('file')){
					$upload_data = $this->upload->data();
					$foto = $upload_data['file_name'];
					$path = './upload/produk/'.$row['produk_image'] ;
           
          
                    unlink($path);
					$image = base_url('upload/produk/').$foto;
					$this->model_app->update('produk',array('produk_image'=>$foto),array('produk_id'=>$id));
					$status = true;
					$msg = 'Foto berhasil diubah';
				}else{
					$status = false;
					$msg ='Gambar tidak boleh kosong';
				}
			}else{
				$status = false;
				$msg ='Produk tidak ditemukan';
			}
			echo json_encode(array('status'=>$status,'msg'=>$msg,'image'=>$image,'redirect'=>base_url('internal/produk')));
		}else{
			redirect('internal/produk');
		}
	}
	function dataGambar(){
		if($this->input->method() == 'post'){
			$id = $this->input->post('id');
			$cek = $this->model_app->view_where('produk',array('produk_id'=>$id));
			$output = null;
			if($cek->num_rows() > 0){
				$row = $cek->row_array();
				$status = true;
				$msg = null;
				$data =$this->model_app->view_where('produk_gambar',array('pg_produk_id'=>$id));
				if($data->num_rows() > 0){
					foreach($data->result_array() as $rows){
						$output .= ' <div class="col-md-2">
						<div class="card">
							<div class="bg-overlay">
								<div class="card-toolbar">
									<ul>
										<li>
											<a class="text-white delete" data-id="'.encode($rows['pg_id']).'" >
												<i class="mdi mdi-delete font-size-20"></i>
											</a>
										</li>
									</ul>
								</div>
								<img class="card-img-top" src="'.base_url('upload/produk/'.$rows['pg_gambar']).'" alt="">
							</div>
						</div>
					</div>';
					}
				}else{
					$output .= '<div class="col-md-12"><h6>Tidak ada gambar</h6></div>';
				}

			}else{
				$status = false;
				$msg ='Produk tidak ditemukan';
			}
			echo json_encode(array('status'=>$status,'msg'=>$msg,'output'=>$output));
		}else{
			redirect('internal/produk');
		}
	}
	function deleteGambar(){
		if($this->input->method() == 'post'){
			$id = decode($this->input->post('id'));
			$cek =$this->model_app->view_where('produk_gambar',array('pg_id'=>$id));
		
			if($cek->num_rows() > 0){
				$row = $cek->row_array();
				
				$path = './upload/produk/'.$row['pg_gambar'] ;
		   
		  
				unlink($path);
				$this->model_app->delete('produk_gambar',array('pg_id'=>$id));
			
				$status = true;
				$msg = null;
			

			}else{
				$status = false;
				$msg ='Gambar tidak ditemukan';
			}
			echo json_encode(array('status'=>$status,'msg'=>$msg));
		}else{
			redirect('internal/produk');
		}
	}
	function storeDetail(){
		if($this->input->method() == 'post'){
			$id = $this->input->post('id');
			$cek = $this->model_app->view_where('produk',array('produk_id'=>$id));
	
			if($cek->num_rows() > 0){
				$row = $cek->row_array();
				$count = count($_FILES['files']['name']);
				if($count > 0){
					for($x=0;$x<$count;$x++){
						if(!empty($_FILES['files']['name'][$x])){
							$_FILES['file']['name'] = $_FILES['files']['name'][$x];
							$_FILES['file']['type'] = $_FILES['files']['type'][$x];
							$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$x];
							$_FILES['file']['error'] = $_FILES['files']['error'][$x];
							$_FILES['file']['size'] = $_FILES['files']['size'][$x];
					
							$config2['upload_path']          = './upload/produk/';
							$config2['encrypt_name']         = TRUE;
							$config2['allowed_types']        = 'gif|jpg|png|jpeg';
							$config2['max_size']             = 5000;
								
									
							$this->load->library('upload', $config2);
							// $this->gallery->initialize($config2);
							$this->upload->do_upload('file');
							
							
							$uploadData = $this->upload->data();
							$images = $uploadData['file_name'];
							$dataP = array(
								'pg_produk_id'=>$id,
								'pg_gambar'=>$images,
								
								);
							$this->model_app->insert('produk_gambar',$dataP);
							$status = true;
							$msg = 'Gambar detail berhasil ditambah';
						}
					}
				}else{
					$status = false;
					$msg = 'Gambar tidak boleh kosong';
				}
			}else{
				$status = false;
				$msg ='Produk tidak ditemukan';
			}
			echo json_encode(array('status'=>$status,'msg'=>$msg,'redirect'=>base_url('internal/produk')));
		}else{
			redirect('internal/produk');
		}
	}
	function store(){
		if($this->input->method() == 'post'){
			$this->form_validation->set_rules('nama','Nama Produk','min_length[3]|max_length[255]|required');
			$this->form_validation->set_rules('mini','Mini Deskripsi','min_length[5]|required');
			$this->form_validation->set_rules('jual','Harga Jual','required');
			$this->form_validation->set_rules('pokok','Harga Pokok','required');
			$this->form_validation->set_rules('berat','Berat','required');
			$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		
			if($this->form_validation->run() == FALSE){
                $status = false;
                $replace = array('<p>','</p>');
                $msg = replace($replace,validation_errors());
			}else{
					$config['upload_path']          = './upload/produk/';
					$config['encrypt_name'] = TRUE;
					$config['allowed_types']        = 'gif|jpg|png|jpeg';
					$config['max_size']             = 5000;
						
							
					$this->load->library('upload', $config,'thumbnail');
			
					$this->thumbnail->initialize($config);
								

				if ($this->thumbnail->do_upload('file')){
					$upload_data = $this->thumbnail->data();
					$thumbnail = $upload_data['file_name'];
					$seo = $this->model_app->seo_produk(seo($this->input->post('nama')));
					$data = array(
						'produk_nama' => $this->input->post('nama'),
						'produk_mini_deskripsi' => $this->input->post('mini'),
						'produk_harga_jual' => $this->input->post('jual'),
						'produk_harga_pokok' => $this->input->post('pokok'),
						'produk_berat' => $this->input->post('berat'),
						'produk_deskripsi' => $this->input->post('deskripsi'),
						'produk_seo' => $seo,
						'produk_image'=>$thumbnail,
					
					);
				
				
						
						
						$start = $this->input->post('start');
						$end = $this->input->post('end');
						$sts = $this->input->post('status');

						$batch = $this->input->post('batch');
						$cBatch = count($batch);
						if($cBatch > 0){
							$produk_id = $this->model_app->insert_id('produk',$data);
						
							for($a = 0;$a<$cBatch;$a++){
								$dataR = array(
							
									'pb_produk_id'=>$produk_id,
									'pb_batch' => $batch[$a],
									'pb_status'=>$sts[$a],
									'pb_tanggal_mulai' => date('Y-m-d H:i:s',strtotime($start[$a])),
									'pb_tanggal_selesai' => date('Y-m-d H:i:s',strtotime($end[$a])),
								);
								$this->model_app->insert('produk_batch',$dataR);
	
							}
							
							$count = count($_FILES['files']['name']);
							if($count > 0){
								for($x=0;$x<$count;$x++){
									if(!empty($_FILES['files']['name'][$x])){
										$_FILES['file']['name'] = $_FILES['files']['name'][$x];
										$_FILES['file']['type'] = $_FILES['files']['type'][$x];
										$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$x];
										$_FILES['file']['error'] = $_FILES['files']['error'][$x];
										$_FILES['file']['size'] = $_FILES['files']['size'][$x];
								
										$config2['upload_path']          = './upload/produk/';
										$config2['encrypt_name']         = TRUE;
										$config2['allowed_types']        = 'gif|jpg|png|jpeg';
										$config2['max_size']             = 5000;
											
												
										$this->load->library('upload', $config2,'gallery');
										$this->gallery->initialize($config2);
										$this->gallery->do_upload('file');
										
										
										$uploadData = $this->gallery->data();
										$images = $uploadData['file_name'];
										$dataP = array(
											'pg_produk_id'=>$produk_id,
											'pg_gambar'=>$images,
											
											);
										$this->model_app->insert('produk_gambar',$dataP);
									}
								}
							}
							$status = true;
							$msg = 'Produk berhasil disimpan';
						}else{
							$status = false;
							$msg = 'Batch tidak boleh kosong';
						}
						
						
						
						
					
				
					
						
					
				}else{
					$status = false;
					$msg = 'Masukan gambar thumbnail';
				}
				
				
			}
			echo json_encode(array('status'=>$status,'msg'=>$msg,'redirect'=>base_url('internal/produk')));
		}else{
			redirect('internal/produk/add');
		}
	}
	
	
}
