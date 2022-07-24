<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends MX_Controller 
{

	public function __construct()
	{
        parent::__construct();

		$this->load->model('model_app','',TRUE);
        $params = array('server_key' => 'SB-Mid-server-I6l10VS8lpAfy6F1pZLIkE-r', 'production' => false);

		$this->load->library('veritrans');
		$this->veritrans->config($params);
		$this->load->helper('url');
		
    
	}
	public function index()
	{
        if($this->input->method() == 'post'){
            $json_result = file_get_contents('php://input');
		    $result = json_decode($json_result,true);

            if($result){
                // print_r($result);
                $notif = $this->veritrans->status($result['order_id']);
                $status_code = $result['status_code'];
                if($status_code == 200){
                    $invoice = $result['order_id'];
                    $cek = $this->model_app->view_where('transaksi',array('transaksi_no'=>$invoice));
                    if($cek->num_rows() > 0 ){
                        $row = $cek->row_array();
                        if($row['transaksi_status'] == 'waiting'){
                            $this->model_app->update('transaksi',array('transaksi_status'=>'dibayar'),array('transaksi_no'=>$invoice));
                            // $this->model_app->update('cr_mobil',array('mobil_available'=>'n'),array('mobil_id'=>$row['trans_mobil_id']));
                            $dataPaym = array('pay_transaksi_id'=>$row['transaksi_id'],'pay_channel'=>$result['payment_type'],'pay_amount'=>$result['gross_amount'],'pay_date'=>date('Y-m-d H:i:s'));
                            $this->model_app->insert('payment',$dataPaym);
                            // $data['row'] = $row;
                            // $data['mobil'] = $this->model_app->view_where('cr_mobil',array('mobil_id'=>$row['trans_mobil_id']))->row_array();
                            // $data['package'] = $this->model_app->view_where('cr_package',array('pack_id'=>$row['trans_pack_id']))->row_array();
                            // $html = $this->load->view('admin/email',$data,true);
                            // $title = '[ PT MAS DIANI CHANDRA ] - #'.$row['trans_no'];
                            // pushEmail($row['trans_cus_email'],$title,$html);
                        }
                    }
                }
            }

		
        }else{
            redirect('');
        }
		

	

	}
   
}
?>