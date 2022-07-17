<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends MX_Controller 
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
		$data['page'] = 'Member';
		$data['title'] = 'Member - '.title();
		$data['right'] =' <a href="'.base_url('internal/member/add') .'" class="btn btn-info kanan"><i class="ti-plus"> </i> Tambah Member</a>';
		$data['breadcrumb'] = ' <span class="breadcrumb-item active">Member</span>';
		$data['record'] = $this->model_app->view_order('member','member_id','DESC');
		$data['js'] = base_url('template/admin/ajax/basic.js');

		$this->template->load('template','anggota/anggota',$data);
		// $this->template->load('template_admin','admin/anggota');
	}

	public function add()
	{
		$data['page'] = 'Member';
		$data['title'] = 'Member - '.title();
		$data['right'] =' ';
		$data['breadcrumb'] = ' <a href="'.base_url('internal/member').'" class="breadcrumb-item">Member</a>';
		$data['breadcrumb'] .= ' <span class="breadcrumb-item active">Tambah</span>';
		$data['provinsi'] = $this->model_app->view_order('provinsi','provinsi_nama','ASC');
		$data['js'] = base_url('template/admin/ajax/member/ajax-add.js');
		$this->template->load('template','anggota/anggota_add',$data);
		// $this->template->load('template_admin','admin/anggota');
	}
	
	public function edit()
	{
		$id = $this->input->get('id');
		$cek = $this->model_app->view_where('member',array('member_id'=>$id));
		if($cek->num_rows() > 0){
			$data['title'] = 'Anggota - '.title();
			$data['row'] = $cek->row_array();
			$data['page'] = 'Member';
			$data['title'] = 'Member - '.title();
			$data['right'] =' ';
			$data['breadcrumb'] = ' <a href="'.base_url('internal/member').'" class="breadcrumb-item">Member</a>';
			$data['breadcrumb'] .= ' <span class="breadcrumb-item active">Edit</span>';
			$data['provinsi'] = $this->model_app->view_order('provinsi','provinsi_nama','ASC');
			$data['js'] = base_url('template/admin/ajax/member/ajax-edit.js');

			$this->template->load('template','anggota/anggota_edit',$data);
		}else{
			$this->session->set_flashdata('error','Member tidak ditemukan');
			redirect('internal/member');
		}
	}
	public function update()
	{
		if($this->input->method() == 'post'){
			$id = $this->input->post('id');
			$redirect = base_url('internal/member');
			$cek = $this->model_app->view_where('member',array('member_id'=>$id));
			if($cek->num_rows() > 0){
				$row = $cek->row_array();
				$this->form_validation->set_rules('nama','Nama Member','min_length[3]|max_length[255]|required');
				$this->form_validation->set_rules('no_telp','Nomor Telepon','min_length[10]|max_length[20]|required');
				$this->form_validation->set_rules('alamat','Alamat','required');
				$this->form_validation->set_rules('provinsi','Provinsi','required');
				$this->form_validation->set_rules('kabupaten','Kabupaten','required');
				$this->form_validation->set_rules('kode_pos','Kode Pos','required');
				$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			




				if($this->form_validation->run() == FALSE){
					$status = false;
					$replace = array('<p>','</p>');
					$msg = replace($replace,validation_errors());
				}else{
					$nama = $this->input->post('nama');
					$no_telp = $this->input->post('no_telp');
					$alamat = $this->input->post('alamat');
					$provinsi = $this->input->post('provinsi');
					$kabupaten = $this->input->post('kabupaten');
					$kode_pos = $this->input->post('kode_pos');
					$email = $this->input->post('email');
					$pass = $this->input->post('password');

					if($email != $row['member_email']){
						$checking = $this->db->query("SELECT * FROM member WHERE member_email = '$email' AND member_id != '".$row['member_id']."' " );
						if($checking->num_rows() > 0){
							$status = false;
							$msg = 'Email sudah digunakan';
						}else{
							if(trim($pass)){
								$password = sha1($pass);
								$data = array('member_nama'=>$nama,'member_no_telp'=>$no_telp,'member_alamat'=>$alamat,'member_provinsi'=>$provinsi,'member_kabupaten'=>$kabupaten,'member_kode_pos'=>$kode_pos,'member_email'=>$email,'member_password'=>$password);
								$this->model_app->update('member',$data,array('member_id'=>$id));
	
							}else{
								
								
								$data = array('member_nama'=>$nama,'member_no_telp'=>$no_telp,'member_alamat'=>$alamat,'member_provinsi'=>$provinsi,'member_kabupaten'=>$kabupaten,'member_kode_pos'=>$kode_pos,'member_email'=>$email);
								$this->model_app->update('member',$data,array('member_id'=>$id));
							}
							$status = true;
							$msg = 'Member berhasil diubah';
						}
					}else{
						if(trim($pass)){
							$password = sha1($pass);
							$data = array('member_nama'=>$nama,'member_no_telp'=>$no_telp,'member_alamat'=>$alamat,'member_provinsi'=>$provinsi,'member_kabupaten'=>$kabupaten,'member_kode_pos'=>$kode_pos,'member_email'=>$email,'member_password'=>$password);
							$this->model_app->update('member',$data,array('member_id'=>$id));

						}else{
							
							
							$data = array('member_nama'=>$nama,'member_no_telp'=>$no_telp,'member_alamat'=>$alamat,'member_provinsi'=>$provinsi,'member_kabupaten'=>$kabupaten,'member_kode_pos'=>$kode_pos,'member_email'=>$email);
							$this->model_app->update('member',$data,array('member_id'=>$id));
						}
						$status = true;
						$msg = 'Member berhasil diubah';
					}
				}
			}else{
				$status = false;
				$msg = 'Member tidak ditemukan';
			}
			echo json_encode(array('status'=>$status,'msg'=>$msg,'redirect'=>$redirect));
		}else{
			redirect('internal/member');
		}
		
	}
	function status(){
		$id = decode($this->input->get('id'));
		$cek = $this->model_app->view_where('member',array('member_id'=>$id));
		if($cek->num_rows() > 0){
			$row = $cek->row_array();
			if($row['member_status']=='y'){
				$status = 'n';
				$this->session->set_flashdata('success','Member berhasil di nonaktifkan');

			}else{
				$status = 'y';
				$this->session->set_flashdata('success','Member berhasil di aktifkan');
			}
			$this->model_app->update('member',array('member_status'=>$status),array('member_id'=>$id));
			redirect('internal/member');
		}else{
			$this->session->set_flashdata('error','Member tidak ditemukan');
			redirect('internal/member');
		}
	}
	function delete(){
		$id = decode($this->input->get('id'));
		$cek = $this->model_app->view_where('member',array('member_id'=>$id));
		if($cek->num_rows() > 0){
			$row = $cek->row_array();	
			
			$this->model_app->delete('member',array('member_id'=>$id));
			$this->session->set_flashdata('success','Member berhasil dihapus');
			redirect('internal/member');
		}else{
			$this->session->set_flashdata('error','Member tidak ditemukan');
			redirect('internal/member');
		}
	}
	function store(){
		if($this->input->method() == 'post'){
			$redirect = null;
			$this->form_validation->set_rules('nama','Nama Member','min_length[3]|max_length[255]|required');
			$this->form_validation->set_rules('no_telp','Nomor Telepon','min_length[10]|max_length[20]|required');
			$this->form_validation->set_rules('alamat','Alamat','required');
			$this->form_validation->set_rules('provinsi','Provinsi','required');
			$this->form_validation->set_rules('kabupaten','Kabupaten','required');
			$this->form_validation->set_rules('kode_pos','Kode Pos','required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[member.member_email]');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
			$this->form_validation->set_rules('repass', 'Confirm Password', 'required|matches[password]');




            if($this->form_validation->run() == FALSE){
                $status = false;
                $replace = array('<p>','</p>');
                $msg = replace($replace,validation_errors());
			}else{
				$nama = $this->input->post('nama');
				$no_telp = $this->input->post('no_telp');
				$alamat = $this->input->post('alamat');
				$provinsi = $this->input->post('provinsi');
				$kabupaten = $this->input->post('kabupaten');
				$kode_pos = $this->input->post('kode_pos');
				$email = $this->input->post('email');
				$pass = $this->input->post('password');
				$password = sha1($pass);
				$data = array('member_nama'=>$nama,'member_no_telp'=>$no_telp,'member_alamat'=>$alamat,'member_provinsi'=>$provinsi,'member_kabupaten'=>$kabupaten,'member_kode_pos'=>$kode_pos,'member_email'=>$email,'member_password'=>$password,'member_status'=>'y');
				$this->model_app->insert('member',$data);
				$status = true;
				$msg = 'Member berhasil ditambah';
				$redirect = base_url('internal/member');
			}
			echo json_encode(array('status'=>$status,'msg'=>$msg,'redirect'=>$redirect));
		}else{
			redirect('internal/member');
		}
	}
	
}
