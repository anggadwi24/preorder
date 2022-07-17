<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends MX_Controller 
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
		$this->output->set_header(500);
	}
    function kabupaten(){
        if($this->input->method() == 'post'){
            $prov = $this->input->post('id');
            $output = '<option disabled selected></option>';
            $data = $this->model_app->view_where_ordering('kota',array('kota_provinsi_id'=>$prov),'kota_nama','ASC');
            if($data->num_rows() > 0){
                foreach($data->result_array() as $row){
                    $output .= "<option value='".$row['kota_id']."'>".$row['kota_nama']."</option>";
                }
            }
            echo json_encode($output);
        }
    }

}
