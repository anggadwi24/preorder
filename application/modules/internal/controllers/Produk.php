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
				
					$data = array(
						'produk_nama' => $this->input->post('nama'),
						'produk_mini_deskripsi' => $this->input->post('mini'),
						'produk_harga_jual' => $this->input->post('jual'),
						'produk_harga_pokok' => $this->input->post('pokok'),
						'produk_berat' => $this->input->post('berat'),
						'produk_deskripsi' => $this->input->post('deskripsi'),
						
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

	public function edit()
	{
		$id = $this->input->get('id');
		$cek = $this->model_app->view_where('produk',array('produk_id'=>$id));
		if($cek->num_rows() > 0){
			$data['page'] = 'Produk';
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
	
}
