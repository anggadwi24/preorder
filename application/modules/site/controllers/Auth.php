<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller 
{

	public function __construct()
	{
        parent::__construct();
    	$this->load->model('model_app','',TRUE);

    	
	}

	public function index()
	{
		if($this->session->userdata('isMember')){
			redirect('');
		}else{
			$data['title'] = 'Login - ' .title();
			$data['js'] = base_url('template/public/ajax/member/ajax-login.js');
	
			$this->template->load('template','login',$data);
		}
		
	}
	
	public function do()
	{
		if($this->input->method() == 'post'){
			$redirect = null;
			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			if(!trim($email) AND !trim($pass)){
				
				$status = false;
				$msg = 'Email dan password wajib diisi';
			}else if(!trim($email) ){
				$status = false;
				$msg = 'Email wajib diisi';
			}else if(!trim($pass)){
				$status = false;
				$msg = 'Passowrd wajib diisi';
			}else{
				$cek = $this->model_app->view_where('member',array('member_email'=>$email));
				if($cek->num_rows() > 0){
					$row = $cek->row_array();
					$cekPass = $this->model_app->view_where('member',array('member_email'=>$email,'member_password'=>sha1($pass)));
					if($cekPass->num_rows() > 0){
						$data = array('member_id'=>encode($row['member_id']));
						$this->session->set_userdata('isMember',$data);
						$status = true;
						$msg = null;
						$redirect = base_url();

					}else{
						$msg = 'Password salah';
						$status = false;
					}

				}else{
					$msg = 'Email tidak ditemukan';
					$status = false;
				}
			}
			echo json_encode(array('status'=>$status,'msg'=>$msg,'redirect'=>$redirect));
		}else{
			redirect('auth');
		}
	}
}
