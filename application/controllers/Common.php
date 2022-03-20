<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Common extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->library("pagination");
        $this->load->model("Customer_model");

        // $this->load->library('pdf');
        // if(!$this->load->is_loaded('Pdf'))
        // {
        // 	echo 'hi';
        // 	exit();
        //      // $this->load->library('session');
        // } else {
        // 	echo 'bye';
        // 	exit();
        // }


        // $this->load->library('CKEditor');
        // $this->load->helper('ckeditor_helper');
        // $this->ckeditor->basePath = base_url().'asset/ckeditor/';
        // $this->ckeditor->config['toolbar'] = array(
        //                 array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
        //                                                     );
        // $this->ckeditor->config['language'] = 'it';
        // $this->ckeditor->config['width'] = '730px';
        // $this->ckeditor->config['height'] = '300px';   


		// if($this->session->userdata('authAdminLockscreen') === '1' && $this->session->userdata('authAdminLogin')) {
		// 	redirect(base_url('admin/lockscreen'));
		// }	
		
	} 

	/*-------------------------------------------------------------------------
	| Method : insert Company Service Request
	|-------------------------------------------------------------------------*/

	public function insertCustomerServiceRequest(){
		

		$this->form_validation->set_rules('info','Information','trim|required');
		$this->form_validation->set_rules('desc','Description','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('city','City','trim|required');
		$this->form_validation->set_rules('state','State','trim|required');
		$this->form_validation->set_rules('zip','Zip','trim|required|exact_length[6]');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('mobile','Mobile','trim|required|exact_length[10]');
		
		// $this->form_validation->set_rules('desc','Description','trim|required'); 

		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		} else {
			
			$csr_insert_id = $this->Customer_model->insertCustomerServiceRequest();
			
			// $dd = $this->upload_image('customer_service_requests','customer_service_requests','filename','csr_id','csr_image', $csr_insert_id);

			// echo '<pre>';
			// echo json_encode(strip_tags(strip_tags($dd['data']['error'])));
			// exit();
			
			// if($csr_insert_id && $dd['status']){
			if($csr_insert_id){
				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{
				$datas['result']  = false;
				// $datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$datas['msg']	=  'Something went wrong';
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);

	}

}
?>
