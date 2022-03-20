<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->helper('url');
  		$this->load->library("pagination");

		// if($this->session->userdata('authAdminLockscreen') === '1' && $this->session->userdata('authAdminLogin')) {
		// 	redirect(base_url('admin/lockscreen'));
		// }	

		// if(!$this->session->userdata('authAdminLogin')) {
		// 	$this->helper->authCookieLogin();
		// 	$this->session->set_flashdata('loginMsg', '<div class="alert alert-warning text-center">Sorry, You are not logged in </div>');
		// 	redirect(base_url('web-admin'));
		// }
		// $this->load->library('email');            
		// var_dump($this->load->is_loaded('email'));
		// exit();
		// if ($this->load->is_loaded('system/Email') === false) {
		// if ($this->load->is_loaded('Email') === false) {
		    // $this->load->library('Email');            
		// }
		 
	} 

	public function getService(){
		return $this->Home_model->fetchAllRowsTable('service','s_id');
	}

	public function getContact(){
		return $this->Home_model->fetchFirstRowTable('contact_us','cu_id','1')[0];
	}
	
	public function index(){
		$data['meta_data']  = $this->Home_model->fetchMetaData('home');
		$data['benefits'] = $this->Home_model->fetchAllRowsTable('benefits','benefit_id');

		$data['main_section']  = $this->Home_model->fetchHome('main-section');
		$data['our_works']  = $this->Home_model->fetchHome('our-works');
		$data['meet_the_team']  = $this->Home_model->fetchHome('meet-the-team');
		$data['news_and_articles']  = $this->Home_model->fetchHome('news-and-articles');
		// new
		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();

		$data['front_page_name'] = 'home';
		$this->load->view('front/index',$data);
	}


	public function aboutUs(){
		$this->session->set_userdata('page-name','about_us');
		$data['about_us'] = $this->Home_model->fetchAllRowsTable('about_us','a_id');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('about_us');
		$data['meta_data']  = $this->Home_model->fetchMetaData('about_us');
		// $data['first_row']  = $this->Home_model->fetchFirstRowTable('about_ceo','ac_id','1')[0];
		// $data['other_rows'] = $this->Home_model->fetchOtherRowsTable('about_ceo','ac_id','1');
		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'about-us';
		$this->load->view('front/index',$data);
	}


	public function warehouse(){
		$this->session->set_userdata('page-name','warehouse');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('warehouse');
		$data['meta_data']  = $this->Home_model->fetchMetaData('warehouse');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('warehouse','w_id','1')[0];

		// if(isset($fr)){
		// 	$data['first_row'] = $fr;			
		// }

		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('warehouse','w_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'warehouse';
		$this->load->view('front/index',$data);
	}

	public function shed(){
		$this->session->set_userdata('page-name','shed');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('shed');
		$data['meta_data']  = $this->Home_model->fetchMetaData('shed');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('shed','s_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('shed','s_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'shed';
		$this->load->view('front/index',$data);
	}

	public function rcc(){
		$this->session->set_userdata('page-name','rcc');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('rcc');
		$data['meta_data']  = $this->Home_model->fetchMetaData('rcc');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('rcc','r_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('rcc','r_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'rcc';
		$this->load->view('front/index',$data);
	}

	public function bts(){
		$this->session->set_userdata('page-name','bts');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('bts');
		$data['meta_data']  = $this->Home_model->fetchMetaData('bts');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('bts','b_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('bts','b_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'bts';
		$this->load->view('front/index',$data);
	}

	public function land(){
		$this->session->set_userdata('page-name','land');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('land');
		$data['meta_data']  = $this->Home_model->fetchMetaData('land');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('land','l_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('land','l_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'land';
		$this->load->view('front/index',$data);
	}

	public function page_pl(){
		$this->session->set_userdata('page-name','page_pl');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('three_pl');
		$data['meta_data']  = $this->Home_model->fetchMetaData('three_pl');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('three_pl','t_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('three_pl','t_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'page_pl';
		$this->load->view('front/index',$data);
	}

	public function investor(){
		$this->session->set_userdata('page-name','investor');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('investor');
		$data['meta_data']  = $this->Home_model->fetchMetaData('investor');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('investor','i_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('investor','i_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'investor';
		$this->load->view('front/index',$data);
	}

	public function supplier(){
		$this->session->set_userdata('page-name','supplier');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('supplier');
		$data['meta_data']  = $this->Home_model->fetchMetaData('supplier');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('about_ceo','ac_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('about_ceo','ac_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'supplier';
		$this->load->view('front/index',$data);
	}

	public function agent(){
		$this->session->set_userdata('page-name','agent');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('agent');
		$data['meta_data']  = $this->Home_model->fetchMetaData('agent');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('about_ceo','ac_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('about_ceo','ac_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'agent';
		$this->load->view('front/index',$data);
	}

	public function waste_management(){
		$this->session->set_userdata('page-name','waste_management');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('waste_management');
		$data['meta_data']  = $this->Home_model->fetchMetaData('waste_management');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('waste_management','w_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('waste_management','w_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'waste_management';
		$this->load->view('front/index',$data);
	}

	public function manpower(){
		$this->session->set_userdata('page-name','manpower');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('manpower');
		$data['meta_data']  = $this->Home_model->fetchMetaData('manpower');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('manpower','m_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('manpower','m_id','1');
		
		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'manpower';
		$this->load->view('front/index',$data);
	}

	public function loaders(){
		$this->session->set_userdata('page-name','loaders');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('loaders');
		$data['meta_data']  = $this->Home_model->fetchMetaData('loaders');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('loaders','l_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('loaders','l_id','1');
		
		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'loaders';
		$this->load->view('front/index',$data);
	}

	public function pickers_and_packers(){
		$this->session->set_userdata('page-name','pickers_and_packers');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('pickers_and_packers');
		$data['meta_data']  = $this->Home_model->fetchMetaData('pickers_and_packers');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('pickers_and_packers','p_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('pickers_and_packers','p_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'pickers_and_packers';
		$this->load->view('front/index',$data);
	}

	public function security(){
		$this->session->set_userdata('page-name','security');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('security');
		$data['meta_data']  = $this->Home_model->fetchMetaData('security');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('security','s_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('security','s_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'security';
		$this->load->view('front/index',$data);
	}

	public function supervisor(){
		$this->session->set_userdata('page-name','supervisor');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('supervisor');
		$data['meta_data']  = $this->Home_model->fetchMetaData('supervisor');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('supervisor','s_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('supervisor','s_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'supervisor';
		$this->load->view('front/index',$data);
	}

	public function deo(){
		$this->session->set_userdata('page-name','deo');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('deo');
		$data['meta_data']  = $this->Home_model->fetchMetaData('deo');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('deo','d_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('deo','d_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'deo';
		$this->load->view('front/index',$data);
	}

	public function material_handling(){
		$this->session->set_userdata('page-name','material_handling');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('material_handling');
		$data['meta_data']  = $this->Home_model->fetchMetaData('material_handling');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('material_handling','m_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('material_handling','m_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'material_handling';
		$this->load->view('front/index',$data);
	}

	public function forklift(){
		$this->session->set_userdata('page-name','forklift');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('forklift');
		$data['meta_data']  = $this->Home_model->fetchMetaData('forklift');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('forklift','f_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('forklift','f_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'forklift';
		$this->load->view('front/index',$data);
	}

	public function clamper(){
		$this->session->set_userdata('page-name','clamper');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('clampero');
		$data['meta_data']  = $this->Home_model->fetchMetaData('clampero');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('clamper','c_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('clamper','c_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'clamper';
		$this->load->view('front/index',$data);
	}

	public function hpt(){
		$this->session->set_userdata('page-name','hpt');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('hpt');
		$data['meta_data']  = $this->Home_model->fetchMetaData('hpt');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('hpt','h_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('hpt','h_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'hpt';
		$this->load->view('front/index',$data);
	}

	public function stackers(){
		$this->session->set_userdata('page-name','stackers');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('stackers');
		$data['meta_data']  = $this->Home_model->fetchMetaData('stackers');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('stackers','s_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('stackers','s_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'stackers';
		$this->load->view('front/index',$data);
	}

	public function technology(){
		$this->session->set_userdata('page-name','technology');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('technology');
		$data['meta_data']  = $this->Home_model->fetchMetaData('technology');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('technology','t_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('technology','t_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'technology';
		$this->load->view('front/index',$data);
	}

	public function hardware(){
		$this->session->set_userdata('page-name','hardware');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('hardware');
		$data['meta_data']  = $this->Home_model->fetchMetaData('hardware');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('hardware','h_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('hardware','h_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'hardware';
		$this->load->view('front/index',$data);
	}

	public function software(){
		$this->session->set_userdata('page-name','software');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('software');
		$data['meta_data']  = $this->Home_model->fetchMetaData('software');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('software','s_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('software','s_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'software';
		$this->load->view('front/index',$data);
	}

	public function primary_movement(){
		$this->session->set_userdata('page-name','primary_service');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('primary_service');
		$data['meta_data']  = $this->Home_model->fetchMetaData('primary_service');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('primary_service','p_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('primary_service','p_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'primary_movement';
		$this->load->view('front/index',$data);
	}

	public function distribution_services(){
		$this->session->set_userdata('page-name','distribution_services');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('distribution_services');
		$data['meta_data']  = $this->Home_model->fetchMetaData('distribution_services');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('distribution_services','d_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('distribution_services','d_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'distribution_services';
		$this->load->view('front/index',$data);
	}

	public function secondary_movement(){
		$this->session->set_userdata('page-name','secondary_service');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('secondary_service');
		$data['meta_data']  = $this->Home_model->fetchMetaData('secondary_service');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('secondary_service','s_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('secondary_service','s_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'secondary_movement';
		$this->load->view('front/index',$data);
	}

	public function d2c_services(){
		$this->session->set_userdata('page-name','d2c_services');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('d2c_services');
		$data['meta_data']  = $this->Home_model->fetchMetaData('d2c_services');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('d2c_services','d_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('d2c_services','d_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'd2c_services';
		$this->load->view('front/index',$data);
	}


	public function storage(){
		$this->session->set_userdata('page-name','storage');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('storage');
		$data['meta_data']  = $this->Home_model->fetchMetaData('storage');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('storage','s_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('storage','s_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'storage';
		$this->load->view('front/index',$data);
	}


	// ------------
	public function privateRooms(){
		$this->session->set_userdata('page-name','private-rooms');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('private-rooms');
		$data['meta_data']  = $this->Home_model->fetchMetaData('private-rooms');
		$data['all_rows'] = $this->Home_model->fetchAllRowsTable('private_rooms','pr_id');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();

		// $data['size_guide_categories'] = $this->Home_model->getCatofSizeGuideLocation();		
		// foreach ($data['size_guide_categories'] as $key => $value) {
		// 	$data['sample'][$value->sgl_name_key] = $this->Home_model->fetchSizeGuide($value->sgl_id);
		// 	}

		$data['front_page_name'] = 'private-rooms';
		$this->load->view('front/index',$data);
	}

	public function boxStorage(){
		$this->session->set_userdata('page-name','box-storage');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('box-storage');
		$data['meta_data']  = $this->Home_model->fetchMetaData('box-storage');
		$data['all_rows'] = $this->Home_model->fetchAllRowsTable('box_storage','bs_id');
		// $data['two_row']  = $this->Home_model->fetchFirstRowTable('box_storage','bs_id','2');
		// $data['other_rows'] = $this->Home_model->fetchOtherRowsTable('box_storage','bs_id','2');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'box-storage';
		$this->load->view('front/index',$data);
	}

	public function utilityLocker(){
		$this->session->set_userdata('page-name','utility-locker');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('utility-locker');
		$data['meta_data']  = $this->Home_model->fetchMetaData('utility-locker');
		$data['all_rows'] = $this->Home_model->fetchAllRowsTable('utility_locker','ul_id');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'utility-locker';
		$this->load->view('front/index',$data);
	}

	public function bikeStorage(){
		$this->session->set_userdata('page-name','document-storage');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('bike-storage');
		$data['meta_data']  = $this->Home_model->fetchMetaData('bike-storage');
		$data['all_rows'] = $this->Home_model->fetchAllRowsTable('bike_storage','bks_id');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'bike-storage';
		$this->load->view('front/index',$data);
	}

	// ----------
	public function benefits(){
		$data['banner_image']  = $this->Home_model->fetchBannerImage('benefits');
		$data['meta_data']  = $this->Home_model->fetchMetaData('benefits');
		$data['all_rows'] = $this->Home_model->fetchAllRowsTable('benefits','benefit_id');
		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'benefits';
		$this->load->view('front/index',$data);
	}















	public function aboutCEO(){
		$this->session->set_userdata('page-name','about-ceo');
		$data['banner_image']  = $this->Home_model->fetchBannerImage('about-ceo');
		$data['meta_data']  = $this->Home_model->fetchMetaData('about-ceo');

		$data['first_row']  = $this->Home_model->fetchFirstRowTable('about_ceo','ac_id','1')[0];
		$data['other_rows'] = $this->Home_model->fetchOtherRowsTable('about_ceo','ac_id','1');

		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'about-ceo';
		$this->load->view('front/index',$data);
	}

	
	public function faqs(){
		$data['banner_image']  = $this->Home_model->fetchBannerImage('faqs');
		$data['meta_data']  = $this->Home_model->fetchMetaData('faqs');
		$data['all_rows'] = $this->Home_model->fetchAllRowsTable('faqs','f_id');
		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'faqs';
		$this->load->view('front/index',$data);
	}
	public function termsAndConditions(){
		$data['banner_image']  = $this->Home_model->fetchBannerImage('terms-and-conditions');
		$data['meta_data']  = $this->Home_model->fetchMetaData('terms-and-conditions');
		$data['all_rows'] = $this->Home_model->fetchAllRowsTable('terms_and_conditions','tac_id');
		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'terms-and-conditions';
		$this->load->view('front/index',$data);
	}
	public function privacyPolicy(){
		$data['banner_image']  = $this->Home_model->fetchBannerImage('privacy-policy');
		$data['meta_data']  = $this->Home_model->fetchMetaData('privacy-policy');
		$data['all_rows'] = $this->Home_model->fetchAllRowsTable('privacy_policy','pp_id');
		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'privacy-policy';
		$this->load->view('front/index',$data);
	}

	public function news(){ 
		$data['banner_image']  = $this->Home_model->fetchBannerImage('news');
		$data['meta_data']  = $this->Home_model->fetchMetaData('news');
		$data['all_rows'] = $this->Home_model->fetchAllRowsTable('news','news_id');
		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['front_page_name'] = 'news';
		$this->load->view('front/index',$data);
	}

	//-----
	public function contactUs(){
		$data['banner_image']  = $this->Home_model->fetchBannerImage('contact-us');
		$data['meta_data']  = $this->Home_model->fetchMetaData('contact-us');
		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();

		$data['front_page_name'] = 'contact-us';
		$this->load->view('front/index',$data);
	}
	//------
	public function contactFormSubmission(){
		// echo phpversion();
		// exit();
		
			$storage 	  = $this->input->post('inlineRadioOptions');
			$name 		  = $this->input->post('name');
			$number 	  = $this->input->post('number');
			$email 		  = $this->input->post('email');
			$storage_list = $this->input->post('storage_list');

	$user_contact_insert = $this->Home_model->insertUserContactDetail($storage,$name,$number,$email,$storage_list);		

    $to = 'puhupwasbind301@gmail.com' ;  // User email pass here
    $subject = 'Welcome To LetUsStore';

    $from = $email;     // Pass here your mail id

    // <tr>
    //   <td colspan="2">

    //     <img src="letusstore/assets/img/logo/letusstore-logo.png" width="300px" vspace=10 />
    //    </td>
    // </tr>';

    $emailContent = '<!DOCTYPE>
    						<html>
    							<head></head>
    									<body>
    					<h1>'.$subject.'</h1>				
    							<table width="600px" style="border:2px solid blue;">';
    								
    $emailContent .='<tr><td style="height:20px">Name</td><td style="height:20px">';
    $emailContent .= $name;
    $emailContent .='</td></tr><tr><td style="height:20px">Storage</td><td style="height:20px">';
    $emailContent .= $storage;
    $emailContent .='</td></tr><tr><td style="height:20px">Number</td><td style="height:20px">';
    $emailContent .= $number;
    $emailContent .='</td></tr><tr><td style="height:20px">Email</td><td style="height:20px">';
    $emailContent .= $email;
	$emailContent .='</td></tr><tr><td style="height:20px">Storage List</td><td style="height:20px">';
    $emailContent .= $storage_list;

    $emailContent .= "</td>
    					</tr>
    				 <tr>
    						<td colspan='2' style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='https://theacademiz.com/letusstore/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.letusstore.com</a></p>
    						</td>
    					</tr>
    						</table></body></html>";

    $config['protocol']     = 'smtp';
    $config['smtp_host']    = 'ssl://smtp.gmail.com';
    $config['smtp_port']    = '465';
    $config['smtp_timeout'] = '60';

    $config['smtp_user']    = 'puhupwasbind301@gmail.com';    //Important
    $config['smtp_pass']    = '9250183000';  //Important

    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not 
   	 // thisisthesecretpasswordyoushouldknowaboutit9250183000
 	 // thisisthesecretpasswordyoushouldknowaboutit9250183000	
    $this->email->initialize($config);
    $this->email->set_mailtype("html");
    $this->email->from($from);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($emailContent);

    if($this->email->send()){
    	$this->session->set_flashdata('msg',"Mail has been sent successfully");
    	$this->session->set_flashdata('msg_class','alert-success');		
    } else {
        $this->email->print_debugger();	
    }

		// $data['front_page_name'] = $this->session->userdata('page-name');
		return redirect('home/'.$this->session->userdata('page-name'));
		      // $this->session->unset_userdata('page-name'); 
		      
		// $this->load->view('front/index',$data);
		// return redirect($this->session->userdata('page-name'));
		// $this->load->view('front/index',$data);
	}


	public function sign_in(){
		$data['banner_image']  = $this->Home_model->fetchBannerImage('contact-us');
		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['login_page_name'] = 'sign_in';
		$this->load->view('front/login_index',$data);
	}

	public function sign_up(){
		$data['banner_image']  = $this->Home_model->fetchBannerImage('contact-us');
		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();
		$data['login_page_name'] = 'sign_up';
		$this->load->view('front/login_index',$data);	
	}


	public function storageCalculator(){
		$data['storage_calculator_categories'] = $this->Home_model->getCatofStorageCalculator();		
		foreach ($data['storage_calculator_categories'] as $key => $value) {
			$data['sample'][$value->scc_name_key] = $this->Home_model->fetchCalculators($value->scc_id);
			}
		$data['services']  = $this->getService();
		$data['contact_table']  = $this->getContact();	
			// echo '<pre>';
			// print_r($data['living-room']);
			// exit();
		// $data['living_room'] = $this->Home_model->fetchCalculators(2);
		// $data['kitchen_and_dining'] = $this->Home_model->fetchCalculators(3);
		// $data['boxes'] = $this->Home_model->fetchCalculators(4);
		// $data['office'] = $this->Home_model->fetchCalculators(5);
		// $data['outdoor'] = $this->Home_model->fetchCalculators(6);
		// $data['vehicle'] = $this->Home_model->fetchCalculators(7);
		// $data['miscellaneous'] = $this->Home_model->fetchCalculators(8);
		// $data['miscellaneous'] = $this->Home_model->fetchCalculators(9);


		$data['front_page_name'] = 'storage-calculator';
		$this->load->view('front/index',$data);
	}

	public function substractSquareFeet(){
		$data['storage_calculator'] = $this->Home_model->fetchCatProductPrice($this->input->post('product_name'));
		$minimum = $this->input->post('squarefeet_minimum') - $data['storage_calculator'];
		$maximum = $this->input->post('squarefeet_maximum') - $data['storage_calculator'];
		$data['squarefeet_minimum'] = $minimum;
		$data['squarefeet_maximum'] = $maximum;
		echo json_encode($data);
	}

	public function additionSquareFeet(){
		$data['storage_calculator'] = $this->Home_model->fetchCatProductPrice($this->input->post('product_name'));
		$minimum = $this->input->post('squarefeet_minimum') + $data['storage_calculator'];
		$maximum = $this->input->post('squarefeet_maximum') + $data['storage_calculator'];
		$data['squarefeet_minimum'] = $minimum;
		$data['squarefeet_maximum'] = $maximum;
		echo json_encode($data);
	}



	/*-------------------------------------------------------------------------
	| Method : insertUserSquareFeetCalculator
	|-------------------------------------------------------------------------*/

	public function insertUserSquareFeetCalculator(){
			
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('mobile_number','Mobile Number','trim|required');
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}

		else {
			
			$usfc_insert_id = $this->Home_model->insertUserSquareFeetCalculator();
			
			/*$dd = $this->upload_image('company_profile','company_profile','filename','usfc_id', 	'usfc_image', $usfc_insert_id);*/

			// echo '<pre>';
			// echo json_encode(strip_tags(strip_tags($dd['data']['error'])));
			// exit();
			
			if($usfc_insert_id ){
				$datas['result']  = true;
				$datas['msg']	=  'Successfully Added';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{
				$datas['result']  = false;
				$datas['msg']	=  'Failed to Add, Please try again.';
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);

	}















// 	/*-------------------------------------------------------------------------
// 	| Method : Blank	
// 	|-------------------------------------------------------------------------*/
// 	public function blank(){

// 		$this->load->view('admin/blank');
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Setting	
// 	|-------------------------------------------------------------------------*/
// 	public function setting(){
// 		$this->form_validation->set_rules('opassword','Old Password','trim|required');
// 		$this->form_validation->set_rules('npassword','New Password','trim|required|min_length[8]');
// 		$this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[npassword]');

// 		if($this->form_validation->run() == false){

// 			$data['error'] = validation_errors();
// 			$this->load->view('admin/setting',$data);				
// 		}

// 		else{
// 			$uid = $this->session->userdata('authAdminLogin');
// 			$result   = $this->Admin_model->oldPasswordCheck($uid);

// 			if($result) {

// 				$result = $this->Admin_model->changePassword($uid);

// 				if($result) {

// 					$this->session->set_flashdata('success_msg',"Password Updated!");
// 					redirect($this->agent->referrer());

// 				} 
// 				else {

// 					$this->session->set_flashdata('error_msg',"Wrong Password");
// 					redirect($this->agent->referrer());

// 				}
// 			}
// 			else{

// 				$this->session->set_flashdata('warn_msg',"Old Password is incorrect!");
// 				redirect($this->agent->referrer());						
// 			}
// 		}
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Admin set lock screen
// 	|-------------------------------------------------------------------------*/
// 	public function set_lockscreen() {

// 		$result = $this->Admin_model->setLockscreen();
// 		redirect(base_url('admin/lockscreen'));

// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : insert Staff
// 	|-------------------------------------------------------------------------*/
// 	public function insertStaff(){

// 		$this->form_validation->set_rules('name','Name','trim|required');
// 		$this->form_validation->set_rules('doj','Date of Joining','required');
// 		$this->form_validation->set_rules('email', 'Email','valid_email|is_unique[staff_member.staff_email]');
// 		$this->form_validation->set_rules('mobile','Mobile','is_unique[staff_member.staff_mobile]|min_length[10]|max_length[10]');

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}

// 		else{

// 			$res = $this->Admin_model->insertStaff();

// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Successfully Added");
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
// 			}
// 		}

// 		echo json_encode($datas);

// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Staff list 
// 	|-------------------------------------------------------------------------*/
// 	public function stafflist() {

// 		$data = $this->Admin_model->fetchStaffList();
// 		$this->load->view('admin/staff',compact('data'));
		
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Update Staff 
// 	|-------------------------------------------------------------------------*/
// 	public function updateStaff() {


// 		$res = $this->Admin_model->insertStaff();

// 		if($res) {

// 			$datas['result']  = true;
// 			$datas['msg']	=  "Success";
// 			$this->session->set_flashdata('success_msg', 'Success Added');
// 		}
// 		else{

// 			$datas['result']  = false;
// 			$datas['msg']	=  "No Changes Made";
// 			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
// 		}

// 		echo json_encode($datas);
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : SHow List of Machine 
// 	|-------------------------------------------------------------------------*/
// 	public function machineList(){

// 		$data = $this->Admin_model->fetchAllMachineinWeaving();
// 		$this->load->view('admin/machineList',compact('data'));
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : insert Staff
// 	|-------------------------------------------------------------------------*/
// 	public function insertMachine(){

// 		$this->form_validation->set_rules('model','Model','trim|required');
// 		$this->form_validation->set_rules('title','Title','trim|required');
// 		$this->form_validation->set_rules('dop','Date of Purchase','trim|required');
// 		$this->form_validation->set_rules('type','Type','required');
// 		$this->form_validation->set_rules('amount','Purchase Amount','trim|required');
		
// 		if($this->input->post('type') == 1){

// 			$this->form_validation->set_rules('consumption','Consumption','required');
// 			$this->form_validation->set_rules('unit','Unit','trim');
// 		}
		

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}

// 		else{

// 			// $res = $this->Admin_model->insertMachine();
// 			$res = $this->Admin_model->insertManufacturingMachine();

// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Successfully Added.");
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
// 			}
// 		}

// 		echo json_encode($datas);

// 	}


// 	// Delete machines

// 	public function delete_wraping_machine(){

// 		$res = $this->Admin_model->delete_wraping_machine();

// 		if($res){

// 			$this->session->set_flashdata('success_msg',"Deleted Successfully!");
// 			redirect($this->agent->referrer());
// 		}
// 		else{

// 			$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
// 			redirect($this->agent->referrer());
// 		}
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Update Machine 
// 	|-------------------------------------------------------------------------*/
// 	public function updateMachine() {


// 		// $res = $this->Admin_model->insertMachine();
// 		$res = $this->Admin_model->insertManufacturingMachine();

// 		if($res) {

// 			$datas['result']  = true;
// 			$datas['msg']	=  "Success";
// 			$this->session->set_flashdata('success_msg', 'Successfully Added.');
// 		}
// 		else{

// 			$datas['result']  = false;
// 			$datas['msg']	=  "No Changes Made";
// 			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
// 		}

// 		echo json_encode($datas);
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Staff Attendance 
// 	|-------------------------------------------------------------------------*/
// 	public function attendanceStaff(){

// 		$this->form_validation->set_rules('adate','Date','trim|required');

// 		if($this->form_validation->run() == false) {

// 			if (strtotime($this->input->get('date')) >= strtotime(date('Y-m-d'))) {
// 				$this->session->set_flashdata('error_msg',"Cannot select future dates.");
// 				redirect(base_url('admin/staff-attendance'));
// 			}
			
// 			$date = empty($this->input->get('date')) ? date('Y-m-d') : date('Y-m-d', strtotime($this->input->get('date')));

// 			$staff = $this->Admin_model->fetchStaffListAttendance($date);
// 			$staff = empty($staff) ? $this->Admin_model->fetchStaffList() : $staff;
// 			$this->load->view('admin/staff_attendance',compact('staff', 'date'));

// 		}
// 		else{
			
// 			$c = count($this->input->post('staff_id'));
// 			$sid = $this->input->post('staff_id[]');
// 			$status = $this->input->post('attendanceStatus[]');
// 			$timein = $this->input->post('time_in[]');
// 			$timmeout = $this->input->post('time_out[]');
// 			// $hours = $this->input->post('nohours[]');

// 			for($i = 0;$i<$c; $i++){

// 					$checkTime[$i] = strtotime($timmeout[$i]);
// 					$loginTime[$i] = strtotime($timein[$i]);
// 					$diff[$i] = $checkTime[$i] - $loginTime[$i];
// 					if ($diff[$i] < 0) {
// 					  $diff[$i] =  ($loginTime[$i] - $checkTime[$i])-24*60*60;
// 					  $hours[$i] = round(abs($diff[$i]) / 3600,2);
// 					}else{
// 					  $diff[$i] = $checkTime[$i] - $loginTime[$i];
// 					  $hours[$i] = round(abs($diff[$i]) / 3600,2);
// 					}

// 				$res = $this->Admin_model->insertStaffAttendance($sid[$i],$status[$i],$timein[$i],$timmeout[$i],$hours[$i]); 
// 			}

			

// 			if($res){

// 				$this->session->set_flashdata('success_msg',"Success");
// 				redirect($this->agent->referrer());
// 			}
// 			else{

// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
// 				redirect($this->agent->referrer());

// 			}
// 		}

		
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Daily Work Allocate 
// 	|-------------------------------------------------------------------------*/
// 	public function allocateWork(){

// 		$this->form_validation->set_rules('adate','Date','trim|required');

// 		if($this->form_validation->run() == false) {

// 			if (strtotime($this->input->get('date')) >= strtotime(date('Y-m-d'))) {
// 				$this->session->set_flashdata('error_msg',"Cannot select future dates.");
// 				redirect(base_url('admin/work-allocate'));
// 			}

// 			$date = empty($this->input->get('date')) ? date('Y-m-d') : date('Y-m-d', strtotime($this->input->get('date')));

// 			$machine = $this->Admin_model->getMachineFromBeam2();
// 			// print_r($machine);exit;
// 			$staff = $this->Admin_model->getStaff();
// 			$work = $this->Admin_model->fetchAllocatedWork($date);



// 			$this->load->view('admin/work_allocate',compact('machine','staff','work','date'));

// 		}


// 	}


// 	public function get_weight_raw_material() {
// 		$result = $this->Admin_model->get_weight_raw_material();
// 		exit(json_encode($result));
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Daily Work Allocate
// 	|-------------------------------------------------------------------------*/
// 	public function allocateWorkinWeaving(){

// 		// $stafs_present_today = $this->Admin_model->staffs_present_today();
// 		// $stafs_already_assigned_work = $this->Admin_model->stafs_already_assigned_work($stafs_present_today);
// 		// $data['staff_availability_list'] = $this->Admin_model->staff_availability_list($stafs_already_assigned_work, $stafs_present_today);

// 		$data['staff_availability_list'] = $this->Admin_model->fetchStaffList();


// 		// $machines_already_assigned_today = $this->Admin_model->machines_already_assigned_today();
// 		// $data['machines_which_r_free_today'] = $this->Admin_model->machines_which_r_free_today($machines_already_assigned_today);

// 		$data['machines_which_r_free_today'] = $this->Admin_model->fetchAllMachineinWeaving();

// 		$data['beams_which_r_not_used'] = $this->Admin_model->beams_which_r_not_used();
// 		$data['all_rolls'] = $this->Admin_model->AllNewRolls();
// 		// $data['res'] = $this->Admin_model->Get_all_raw_materials();
// 		$data['inward'] = $this->Admin_model->Get_all_new_raw_materials();
// 		$data['machine_details'] = $this->Admin_model->get_all_machines();
// 		// print_r($machines_already_assigned_today);
// 		// exit();
		
// 		$this->load->view('admin/work_allocate_weaving', $data);
// 	}

// public function addNewAllocatedWork() {
// 	$result = $this->Admin_model->addNewAllocatedWork();
// 	if ($result['status']) {
// 		$result3 = $this->Admin_model->AddManufacturingInwards($result['insertId']);

// 		$result2 = $this->Admin_model->addRollsAfterWorkAllocation($result['insertId']);
// 		if ($result2) {
// 			$chnageBeamStatus = $this->Admin_model->changeBeamStatusOnAdd($result['insertId'], $this->input->post('Beam'));
// 			// $decreaseRawMaterialWeight = $this->Admin_model->decreaseRawMaterialWeight($this->input->post('raw_material_weight'), $this->input->post('raw_material_id'), $this->input->post('cone_given'));
// 			$decreaseRawMaterialWeight = $this->Admin_model->decreaseInwardMaterialWeight();
// 			if ($chnageBeamStatus) {
// 				$output = array(
// 					'status' => 'success',
// 					'msg' => 'Success'
// 				);
// 			}
// 		}
// 	}
// 	exit(json_encode($output));
// }


// 	// puhpwas
//  public function beamReport(){ 	
//  	$all_beam_created = $this->Admin_model->all_beams_report_2();
//  	$this->load->view('admin/beam_report',compact('all_beam_created'));
//  }

//  public function get_raw_materials_used($allocate_id) {

//  	 	$data = $this->Admin_model->get_raw_materials_used($allocate_id);

//  	 	$html = '<table class="table table-bordered">';
//  	 	foreach ($data  as $key => $value) {

//  	 		$Idata = $this->Admin_model->get_inward_materials_used($value->inward_id);

//  		 		$html .= '<tr>
//  		          <th>'.$Idata->inward_type.'( '.$Idata->inward_type_of_type.') - '.$value->inward_weight.'kg</th>
//  		        </tr>';

//  	 	}
//  	 	$html .= '</table>';
//  	 	return $html;

//  }

//  public function get_total_of_raw_materials_used($allocate_id) {

//  	 	$data = $this->Admin_model->get_raw_materials_used($allocate_id);

//  	 	$total = 0;
//  	 	foreach ($data  as $key => $value) {

//  	 		$total += $value->inward_weight;

//  	 	}
//  	 	return $total;

//  }

// 	// puhpwas
//  public function beamReportData(){
//  	// <td>'.'('.$this->get_RollsType_allocated_work_id($value->allocated_work_roll_type).')'.$this->get_RollsCreated_allocated_work_id($value->allocated_work_id).'</td>
//  	$beam_created_id = $this->input->post('beam');
//  	$allocated_beam_data = $this->Admin_model->allocated_beam_data_by_id($beam_created_id);

//  	$html = '';
//  	$newRollWeight = 0;
//  	$totalNoofRoll = 0;



//  	foreach ($allocated_beam_data as $key => $value) {
//  		// $data = $this->get_RollsCreated_allocated_work_id($value->allocated_work_id);
//  		$meter[] = $value->allocated_work_meters_used;
//  		$cone[] = $value->allocated_work_cone_given;
//  		$wastage[] = $value->allocated_work_wastage;
//  		$total_of_raw_materials_used[] = $this->get_total_of_raw_materials_used($value->allocated_work_id);
		
// 		$no_of_rolls_of_allocated_work_id = $this->Admin_model->no_of_rolls_of_allocated_work_id($value->allocated_work_id); 		

// 		// <td>'.$this->get_RollsCreated_allocated_work_id($value->allocated_work_id, 'weight').'</td>
// 		// <th >'.$newRollWeight.'</th>
		
//  		$html .= '<tr>
//  		 <td>'.$value->allocated_work_id.'</td>
//          <td>'.$value->staff_name.'</td>
//          <td>'.$value->machine_model.'</td>
//          <td>'.$value->allocated_work_meters_used.'m</td>
//          <td>'.$this->get_raw_materials_used($value->allocated_work_id).'</td>
//          <td>'.$value->allocated_work_wastage.'kg</td>
//          <td>'.$this->get_RollsCreated_allocated_work_id($value->allocated_work_id, 'typef').'</td>
//          <td>'.$this->get_RollsCreated_allocated_work_id($value->allocated_work_id, 'type').'</td>
//          <td>'.$this->get_RollsCreated_allocated_work_id($value->allocated_work_id, 'length').'</td>
//          <td>'.$this->get_RollsCreated_allocated_work_id($value->allocated_work_id, 'weight').'</td>
//          <td>'.$this->get_RollsCreated_allocated_work_id($value->allocated_work_id, 'name').'</td>
         
//          <td>'.$no_of_rolls_of_allocated_work_id.'</td>
//          <td>'.date('d-m-Y', strtotime($value->allocated_work_current_date)).'</td>
//          </tr>';

//         $newRollWeight += $this->get_RollsCreated_allocated_work_id_total_weight($value->allocated_work_id);
//         $totalNoofRoll += $no_of_rolls_of_allocated_work_id;
//  }

//  		$tfoot = '<tr>
//          <th colspan="3" class="text-center">Total</th>
//          <th>'.array_sum($meter).'m</th>
//          <th>'.array_sum($total_of_raw_materials_used).'kg</th>
//          <th>'.array_sum($wastage).'kg</th>
//          <th ></th>
//          <th ></th>
//          <th ></th>
//          <th ></th>
//          <th ></th>
         
//          <th>'.$totalNoofRoll.'</th>
//          <th ></th>
//          </tr>';

//          $array = array(
//          	'tbody' => $html,
//          	'tfoot' => $tfoot,
//          );

//  	echo json_encode($array);
//  	exit();
//  }



//  public function get_RollsCreated_allocated_work_id($allocate_id, $roll) {
//  	$data = $this->Admin_model->get_RollsCreated_allocated_work_id($allocate_id);

//  	$html = '<table class="table table-bordered">';
//  	foreach ($data  as $key => $value) {
 	
//  	// $html .= '<tr>
//     // <th>'.$value->new_roll_weight.'</th>
//     // </tr>';

//     	if($roll == 'typef'){
// 	 		$html .= '<tr>
// 	          <th>'.$value->new_roll_typef.'</th>
// 	        </tr>';
// 	    } else if($roll == 'type'){
// 	    	$roll_name = '';
// 	    	if(!empty($value->new_roll_type)){$roll_name = $this->name->getRollTypeDetalisbyRollId($value->new_roll_type)->roll_types_name;}
// 	 		$html .= '<tr>
// 	          <th>'.$roll_name.'</th>
// 	        </tr>';
// 	    } else if($roll == 'length'){
// 	 		$html .= '<tr>
// 	          <th>'.$value->new_roll_length.'</th>
// 	        </tr>';
// 	    }else if($roll == 'name'){
// 	 		$html .= '<tr>
// 	          <th>'.$value->new_roll_name.'</th>
// 	        </tr>';
// 	    } else if ($roll == 'weight'){
// 	 		$html .= '<tr>
// 	          <th>'.$value->new_roll_weight.'</th>
// 	       </tr>';
// 	    }

//  	}
//  	$html .= '</table>';
//  	return $html;
//  }


//   public function get_RollsCreated_allocated_work_id_total_weight($allocate_id) {
//  	$data = $this->Admin_model->get_RollsCreated_allocated_work_id($allocate_id);
//  	$roll_weight = 0;
//  	foreach ($data as $key => $value) {
//  		$roll_weight += $value->new_roll_weight;
//  	}
//  	return $roll_weight;
//  }

//  public function get_RollsType_allocated_work_id($roll_type_id){
//  	$data = $this->Admin_model->get_RollsType_allocated_work_id($roll_type_id);
//  	return $data;
//  }

// public function editWorkAllocated($work_id) {

// 	$data['allStaff'] = $this->Admin_model->allStaff();

// 	$data['allWeavingMachines'] = $this->Admin_model->fetchAllMachineinWeaving();

// 	$data['allocated_work'] = $this->Admin_model->allocated_work_by_work_id($work_id);

// 	$data['work_id'] = $work_id;


// 	$data['staff_availability_list'] = $this->Admin_model->fetchStaffList();

// 	$data['machines_which_r_free_today'] = $this->Admin_model->fetchAllMachineinWeaving();

// 	$data['beams_which_r_not_used'] = $this->Admin_model->beams_which_r_not_used();
// 	$data['all_rolls'] = $this->Admin_model->AllNewRolls();
// 	$data['res'] = $this->Admin_model->Get_all_raw_materials();
// 	$data['machine_details'] = $this->Admin_model->get_all_machines();

// 	$this->load->view('admin/editWorkAllocated', $data);
// }

// 	public function roll_types() {
// 		$all_rolls = $this->Admin_model->AllNewRolls();
// 		$this->load->view('admin/roll_types',compact('all_rolls'));
// 	}


// 	public function work_report($staff_id,$start_date,$end_date,$page)  {
// 		$limit = 10;

// 		$start = ($page-1) * $limit;  

// 		if($staff_id == 'all' && $start_date == 'any' && $end_date == 'any') {
// 			$total_records = $this->Admin_model->countAllin_allocated_work();
// 			$data['workReportAll'] = $this->Admin_model->workReportAll($limit, $start);
// 		} else {
// 			$total_records = $this->Admin_model->countAllin_allocated_work_filter($staff_id,$start_date,$end_date);
// 			$data['workReportAll'] = $this->Admin_model->All_allocated_work_filter($staff_id,$start_date,$end_date,$limit, $start);
// 		}

		
// 		// echo $total_records;
// 		// exit();
		
// 		$total_pages = ceil($total_records / $limit);

// 		$prev = '';
// 		$next = '';
		
// 		if (!isset($page) || $page<1 ) {
// 		 	$page = 1;
// 		 	}else{
// 		 		$prev = $page-1;
// 		 		if($prev < 1){
// 		 			$page = 1;
// 		 		}
// 		 		$next = $page+1;
// 		 		if($next > $total_pages){
// 		 			$next = $total_pages;
// 		 		}
// 		 }

// 		 	$start = ($page - 1) * $limit;

// 		$data['allStaff'] = $this->Admin_model->allStaff();
		
// 		// $data['total_records'] = $total_records;



// 		// $data['workReportAll'] = $this->Admin_model->workReportAllByParams($staff_id, $start_date, $end_date, $limit, $start);

// 		// echo '<pre>';
// 		// print_r($data['workReportAll']);
// 		// exit();


// 		$data['sno'] = $start+1;


// 		// echo $total_records;
// 		// exit();



// 		$data['pagination'] = '<ul class="pagination" style="width:auto!important;color:#007bff;">';

// 		$data['pagination'] .= '<li class="border" style="padding: 0.75% 2%;    border: 1px solid #dee2e6;"><a href="'.base_url().'admin/work-report/'.$staff_id.'/'.$start_date.'/'.$end_date.'/1">First</a></li>';
		
// 		if($this->uri->segment(6) > 1){
// 			$data['pagination'] .= '<li class="border" style="padding: 0.75% 2%;    border: 1px solid #dee2e6;"><a href="'.base_url().'admin/work-report/'.$staff_id.'/'.$start_date.'/'.$end_date.'/'.$prev.'">Previous</a></li>';
// 		}



// if($total_pages > 4)
// {
//   if($page < 5)
//   {
  
//   	 $data['pagination'] .= '<li class="border" style="padding: 0.75% 2%;    border: 1px solid #dee2e6;"><a href="'.base_url().'admin/work-report/'.$staff_id.'/'.$start_date.'/'.$end_date.'/1">1</a></li>';
//       $data['pagination'] .= '<li class="border" style="padding: 0.75% 1%;    border: 1px solid #dee2e6;">....</li>';
//         for($count = 2; $count <= 5; $count++)
// 	    {
// 	      	$data['pagination'] .= '<li class="border" style="padding: 0.75% 1%;    border: 1px solid #dee2e6;"><a href="'.base_url().'admin/work-report/'.$staff_id.'/'.$start_date.'/'.$end_date.'/'.$count.'">'.$count.'</a></li>';
// 	    }
//   }
//   else
//   {
//     $end_limit = $total_pages - 3;
//     if($page > $end_limit)
//     {
   
//   	 $data['pagination'] .= '<li class="border" style="padding: 0.75% 2%;    border: 1px solid #dee2e6;"><a href="'.base_url().'admin/work-report/'.$staff_id.'/'.$start_date.'/'.$end_date.'/1">1</a></li>';
//       $data['pagination'] .= '<li class="border" style="padding: 0.75% 1%;    border: 1px solid #dee2e6;">....</li>';
//       for($count = $end_limit; $count <= $total_pages; $count++)
//       {
//         $data['pagination'] .= '<li class="border" style="padding: 0.75% 1%;    border: 1px solid #dee2e6;"><a href="'.base_url().'admin/work-report/'.$staff_id.'/'.$start_date.'/'.$end_date.'/'.$count.'">'.$count.'</a></li>';
//       }
//     }
//     else
//     {
//        $data['pagination'] .= '<li class="border" style="padding: 0.75% 2%;    border: 1px solid #dee2e6;"><a href="'.base_url().'admin/work-report/'.$staff_id.'/'.$start_date.'/'.$end_date.'/1">1</a></li>';
//       $data['pagination'] .= '<li class="border" style="padding: 0.75% 1%;    border: 1px solid #dee2e6;">....</li>';
//       for($count = $page - 1; $count <= $page + 1; $count++)
//       {
//           $data['pagination'] .= '<li class="border" style="padding: 0.75% 1%;    border: 1px solid #dee2e6;"><a href="'.base_url().'admin/work-report/'.$staff_id.'/'.$start_date.'/'.$end_date.'/'.$count.'">'.$count.'</a></li>';
//       }
//        $data['pagination'] .= '<li class="border" style="padding: 0.75% 1%;    border: 1px solid #dee2e6;">....</li>';
//          for($count = $end_limit; $count <= $total_pages; $count++)
//       {
//           $data['pagination'] .= '<li class="border" style="padding: 0.75% 1%;    border: 1px solid #dee2e6;"><a href="'.base_url().'admin/work-report/'.$staff_id.'/'.$start_date.'/'.$end_date.'/'.$count.'">'.$count.'</a></li>';
//       }
//     }
//   }
// }
// else
// {
//   for($count = 1; $count <= $total_pages; $count++)
//   {
//     $data['pagination'] .= '<li class="border" style="padding: 0.75% 1%;    border: 1px solid #dee2e6;"><a href="'.base_url().'admin/work-report/'.$staff_id.'/'.$start_date.'/'.$end_date.'/'.$count.'">'.$count.'</a></li>';
//   }
// }

				
// 		if ($this->uri->segment(6) < $total_pages) {
// 			$data['pagination'] .= '<li class="border" style="padding: 0.75% 2%;    border: 1px solid #dee2e6;"><a href="'.base_url().'admin/work-report/'.$staff_id.'/'.$start_date.'/'.$end_date.'/'.$next.'">Next</a></li>';
// 		} 
		

// 		$data['pagination'] .= '<li class="border" style="padding: 0.75% 2%;"><a href="'.base_url().'admin/work-report/'.$staff_id.'/'.$start_date.'/'.$end_date.'/'.$total_pages.'">Last</a></li></ul>';
		
		
// 		$this->load->view('admin/work_report', $data);
// 	}
	
	

// 	public function staff_report($id = '', $startDate = '', $endDate = '' ){
// 		$staff = $this->Admin_model->getStaff();
// 		$this->load->view('admin/staff_report',compact('staff'));
// 	}


// 	public function datatable_json(){				   					   
// 		$records = $this->user_model->get_all_users();
// 		$data = array();
// 		$i=0;
// 		foreach ($records['data']  as $row) 
// 		{  
// 		    update_admin_view_status('ci_users',$row['id']);
		    
// 			$status = ($row['is_active'] == 1) ? 'checked': '';
			
// 			$data[]= array(
// 				++$i,
// 				$row['username'],
// 				$row['email'],
// 				$row['contact'],
// 				date_time($row['created_date']),	
// 				'<input class="tgl_checkbox tgl-ios" 
// 				data-id="'.$row['id'].'" 
// 				id="cb_'.$row['id'].'"
// 				type="checkbox"  
// 				'.$status.'><label for="cb_'.$row['id'].'"></label>',		

// 				'<a title="View" class="view btn btn-sm btn-info" href="'.base_url('admin/users/edit/'.$row['id']).'"> <i class="fa fa-eye"></i></a>
// 				<a title="Edit" class="update btn btn-sm btn-warning" href="'.base_url('admin/users/edit/'.$row['id']).'"> <i class="fa fa-pencil-square-o"></i></a>
// 				<a title="Delete" class="delete btn btn-sm btn-danger btn-delete" href='.base_url("admin/users/delete/".$row['id']).' title="Delete" > <i class="fa fa-trash-o"></i></a>'
// 			);
// 		}
// 		$records['data']=$data;
// 		echo json_encode($records);						   
// 	}




// 	public function AddRollsName() {
// 		$result = $this->Admin_model->AddRollsName();
// 		if ($result === 'Duplicate') {
// 			$this->session->set_flashdata('warn_msg', 'This roll name is already present');
// 			redirect(base_url('admin/roll-types'));
// 		}elseif ($result === true) {
// 			$this->session->set_flashdata('success_msg',"Successfully Added.");
// 			redirect(base_url('admin/roll-types'));
// 		}
// 	}

// 	public function EditNewRolls() {
// 		$result = $this->Admin_model->EditNewRolls();
// 		if ($result) {
// 			$this->session->set_flashdata('success_msg',"Successfully Updated.");
// 			redirect(base_url('admin/roll-types'));
// 		}
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Insert Allocated Work to Staff 
// 	|-------------------------------------------------------------------------*/
// 	public function insertWorkAllocated(){

// 		$this->form_validation->set_rules('wdate','Date','trim|required');
// 		$this->form_validation->set_rules('staff','Select Staff Member','trim|required');
// 		$this->form_validation->set_rules('machine','Select Machine','trim|required');
// 		$this->form_validation->set_rules('shift','Select Shift','trim|required');
// 		$this->form_validation->set_rules('cone','Cone Given','trim|required');

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}

// 		else{
// 			$res = $this->Admin_model->insertWorkAllocated();

// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Successfully Added.");
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
// 			}



// 		}
// 		echo json_encode($datas);

// 	}

	
// 	/*-------------------------------------------------------------------------
// 	| Method : get staff for work assign 
// 	|------------------------------------------------------------------------*/
// 	public function getStafforWork(){

// 		$res = $this->Admin_model->getStaff();

// 		echo json_encode($res);
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Update Work Allocated 
// 	|-------------------------------------------------------------------------*/
// 	public function updateWorkAllocated() {


// 		$res = $this->Admin_model->editWorkAllocated();

// 		if($res) {

// 			$datas['result']  = true;
// 			$datas['msg']	=  "Success";
// 			$this->session->set_flashdata('success_msg', 'Success.');
// 		}
// 		else{

// 			$datas['result']  = false;
// 			$datas['msg']	=  "No Changes Made";
// 			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
// 		}

// 		echo json_encode($datas);
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Stock Category 
// 	|------------------------------------------------------------------------*/
// 	public function inventoryCat(){

// 		$data = $this->Admin_model->fetchStockCategory();
// 		$this->load->view('admin/stock_category',compact('data'));

// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Insert Stock 
// 	|------------------------------------------------------------------------*/
// 	public function insertInventoryCat(){

// 		$this->form_validation->set_rules('scategory','Stock Category','trim|required');
// 		$this->form_validation->set_rules('sdesc','Description','trim|required');

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}

// 		else{
// 			$res = $this->Admin_model->insertInventoryCat();

// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Successfully Added.");
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
// 			}



// 		}
// 		echo json_encode($datas);
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Update Inventory Category 
// 	|-------------------------------------------------------------------------*/
// 	public function updateInventoryCat() {

// 		$res = $this->Admin_model->insertInventoryCat();

// 		if($res) {

// 			$datas['result']  = true;
// 			$datas['msg']	=  "Success";
// 			$this->session->set_flashdata('success_msg', 'Success.');
// 		}
// 		else{

// 			$datas['result']  = false;
// 			$datas['msg']	=  "No Changes Made";
// 			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
// 		}

// 		echo json_encode($datas);
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Show Ventor List 
// 	|------------------------------------------------------------------------*/
// 	public function createVendor(){

// 		$data = $this->Admin_model->fetchAllVendor();
// 		$this->load->view('admin/vendor',compact('data'));

// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Insert Vendor Details 
// 	|------------------------------------------------------------------------*/
// 	public function insertVendorDetail(){

// 		$this->form_validation->set_rules('compname','Company Name','trim|required');
// 		$this->form_validation->set_rules('comphone','Company Phone','trim|required');
// 		$this->form_validation->set_rules('compemail','Company Email','trim|required|valid_email|is_unique[vendors.vendor_comp_email]');
// 		$this->form_validation->set_rules('compaddress','Company Address','trim|required');
// 		$this->form_validation->set_rules('country','Country','trim|required');
// 		$this->form_validation->set_rules('state','State','trim|required');
// 		$this->form_validation->set_rules('city','City','trim|required');
// 		$this->form_validation->set_rules('pincode','Pin Code','trim|required');
// 		$this->form_validation->set_rules('vendorname','Vendor Name','required');
// 		$this->form_validation->set_rules('vendorphone','Vendor Phone','trim|required');
// 		$this->form_validation->set_rules('vendoraddr','Vendor Address','trim|required');
// 		$this->form_validation->set_rules('bankname','Bank Name','trim|required');
// 		$this->form_validation->set_rules('accountno','Account No.','trim|required');
// 		$this->form_validation->set_rules('ifsccode','IFSC Code','trim|required');
// 		$this->form_validation->set_rules('branchname','Branch Name','trim|required');

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}

// 		else{
// 			$res = $this->Admin_model->insertVendor();

// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Successfully Added.");
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
// 			}



// 		}
// 		echo json_encode($datas);
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Update Inventory Category 
// 	|-------------------------------------------------------------------------*/
// 	public function updateVendor() {

// 		$res = $this->Admin_model->insertVendor();

// 		if($res) {

// 			$datas['result']  = true;
// 			$datas['msg']	=  "Success";
// 			$this->session->set_flashdata('success_msg', 'Success.');
// 		}
// 		else{

// 			$datas['result']  = true;
// 			$datas['msg']	=  "No Changes Made";
// 			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
// 		}

// 		echo json_encode($datas);
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : purchase order of a Particular vendor
// 	|------------------------------------------------------------------------*/
// 	public function purchaseOrder($vid){

// 		$purchase = $this->Admin_model->fetchPurchaseOrder($vid);
// 		$data = $this->Admin_model->fetchVendorDetail($vid);
// 		$this->load->view('admin/purchase_order',compact('data','purchase'));

// 	}
	
// 	/*-------------------------------------------------------------------------
// 	| Method : Insert Stock 
// 	|------------------------------------------------------------------------*/
// 	public function insertPurchaseOrder(){

// 		$this->form_validation->set_rules('category','Category','trim|required|is_unique[vend_purchase_order.vpo_category]');
// 		$this->form_validation->set_rules('pdate','Date','trim|required');

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}

// 		else{
// 			$res = $this->Admin_model->insertPurchaseOrder();

// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Successfully Added.");
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
// 			}



// 		}
// 		echo json_encode($datas);
// 	}
	
// 	/*-------------------------------------------------------------------------
// 	| Method : Item Manage
// 	|------------------------------------------------------------------------*/
// 	public function itemManage($pid){

// 		$prorder = $this->Admin_model->fetchPurchaseOrderById($pid);
// 		$icat = $this->Admin_model->fetchStockCategory();
// 		$data = $this->Admin_model->fetchItem($pid);

// 		$this->load->view('admin/item_manage',compact('prorder','icat','data'));

// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Item INsert
// 	|------------------------------------------------------------------------*/
// 	public function itemInsert(){

		
// 		$this->form_validation->set_rules('invitem','Inventory Item','trim|required');
// 		$this->form_validation->set_rules('mrp','MRP','trim|required');
// 		$this->form_validation->set_rules('rate','Rate','trim|required');

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}

// 		else{
// 			$res = $this->Admin_model->insertItem();

// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Successfully Added.");
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
// 			}



// 		}
// 		echo json_encode($datas);

// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Update Item 
// 	|-------------------------------------------------------------------------*/
// 	public function itemUpdate() {

// 		$res = $this->Admin_model->insertItem();

// 		if($res) {

// 			$datas['result']  = true;
// 			$datas['msg']	=  "Success";
// 			$this->session->set_flashdata('success_msg', 'Success.');
// 		}
// 		else{

// 			$datas['result']  = true;
// 			$datas['msg']	=  "No Changes Made";
// 			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
// 		}

// 		echo json_encode($datas);
// 	}
	
// 	/*-------------------------------------------------------------------------
// 	| Method : Purchase Receive
// 	|------------------------------------------------------------------------*/
// 	public function purchaseReceive(){

// 		$data = $this->Admin_model->fetchAllPurchaseRec();
// 		$vend = $this->Admin_model->fetchAllVendor();
// 		$this->load->view('admin/purchase_received',compact('vend','data'));

// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : insert purchase received
// 	|-------------------------------------------------------------------------*/
// 	public function purchaseReceivedInsert(){

// 		$this->form_validation->set_rules('invoice','Invoice Number','trim|required');
// 		$this->form_validation->set_rules('vendorid','Vendors','trim|required');
// 		$this->form_validation->set_rules('purordid','Purchase Order','trim|required');
// 		$this->form_validation->set_rules('payment','Payment Mode','required');
// 		$this->form_validation->set_rules('intamt','Invoice Total Amount','trim|required');
// 		$this->form_validation->set_rules('pamount','Paid Amount','trim|required');

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}

// 		else{

// 			$res = $this->Admin_model->insertPurchaseReceived();

// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Successfully Added.");
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
// 			}
// 		}

// 		echo json_encode($datas);

// 	}

	
// 	/*-------------------------------------------------------------------------
// 	| Method : Receipt Purchase Order Print
// 	|------------------------------------------------------------------------*/
// 	public function printReceiptPurchaseOrder($id){

// 		$data = $this->Admin_model->fetchAllPurchaseRecById($id);
// 		$this->load->view('admin/printReceiptPurchase',compact('data'));

// 	}

	
// 	/*-------------------------------------------------------------------------
// 	| Method : Issue Inventory
// 	|------------------------------------------------------------------------*/
// 	public function issueInventory(){

// 		$staff = $this->Admin_model->fetchStaffList();
// 		$cat = $this->Admin_model->fetchStockCategory();
// 		$this->load->view('admin/issueInventory',compact('staff','cat'));

// 	}
	
// 	/*-------------------------------------------------------------------------
// 	| Method : Insert Issue Inventory
// 	|------------------------------------------------------------------------*/
// 	public function inventoryIssueInsert() {

// 		$this->form_validation->set_rules('stfid','Issue to','trim');
// 		$this->form_validation->set_rules('invcat','Inventory Category','required');
// 		$this->form_validation->set_rules('itemid[]','Item','required');
// 		$this->form_validation->set_rules('remarks','Remarks','trim');
// 		// $this->form_validation->set_rules('totalamt','Total','trim|required');
// 		// $this->form_validation->set_rules('receiptno','Receipt No.','trim|required');
// 		$this->form_validation->set_rules('quantityneed[]','Quantity','trim|required');
// 		// $this->form_validation->set_rules('discount[]','Discount','trim|required');

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
			
// 		}

// 		else{

// 			$res = $this->Admin_model->insertInventoryIssue();

// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Successfully Added.");
				
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
				
// 			}
// 		}

// 		echo json_encode($datas);

// 	}

// 	//Issued Inventory Details
// 	public function issueInventoryList(){

// 		$data = $this->Admin_model->fetchListofIssuedInventory();
// 		$this->load->view('admin/issue_inventory_list',compact('data'));
// 	}

// 	//Issue return
// 	public function returnInventory(){

// 		$goods = $this->Admin_model->fetchAllFinishedGoods();
// 		$staff = $this->Admin_model->fetchStaffList();
// 		$this->load->view('admin/returnIssue',compact('staff','goods'));
// 	}

// 	//INsert Return Inventory
// 	public function returnInventoryInsert(){

// 		$res = $this->Admin_model->returnInventoryInsert();

// 		if($res) {
// 			$datas['result']  = true;
// 			$datas['msg']	=  'Success';
// 			$this->session->set_flashdata('success_msg',"Success");
// 		}
// 		else{

// 			$datas['result']  = false;
// 			$datas['msg']	=  'Something went wrong';
// 			$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");

// 		}

// 		echo json_encode($datas);
// 	}

// 	//FInished goods
// 	public function goodsFinished(){

// 		$data = $this->Admin_model->fetchAllFinishedGoods();
// 		$this->load->view('admin/finishedgoods',compact('data'));
// 	}

// 	//insert finished Goods
// 	public function finishedGoodsInsert(){

// 		$this->form_validation->set_rules('goods','Finished Goods','trim|required');

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}
// 		else{

// 			$res = $this->Admin_model->insertFinishedGoods();


// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Success");
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
// 			}
// 		}

// 		echo json_encode($datas);
// 	}

// 	//finished goods stocks
// 	public function stockFinishedGoods(){

// 		$data = $this->Admin_model->fetchAllFinishedGoodsStock();
// 		$this->load->view('admin/stockfinishedgood',compact('data'));
// 	}

// 	//add beam to machine by machine id
// 	public function addBeamToMachineById($machine_id){

// 		$mtitle = $this->Admin_model->getMachineTitle($machine_id);
// 		// $data = $this->Admin_model->fetchAllBeamByMachineId($machine_id);
// 		// $beamc = $this->Admin_model->getBeamBalanceById($machine_id);
// 		$all_beam = $this->Admin_model->Get_beams_not_used();
// 		$machine_details = $this->Admin_model->Get_machine_details_by_id($machine_id);
// 		$get_all_beams_by_machine_id = $this->Admin_model->get_all_beams_by_machine_id($machine_id);



// 		$this->load->view('admin/beamadd',compact('mtitle','all_beam','machine_id','machine_details','get_all_beams_by_machine_id'));
// 	}

// 	//insert beam in machine
// 	public function beamInsertByMachineId(){

// 		$this->form_validation->set_rules('idate','Date','trim');
// 		$this->form_validation->set_rules('length','Length','required');
// 		$this->form_validation->set_rules('weight','Weight','required');
		
// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
			
// 		}

// 		else{

// 			$res = $this->Admin_model->insertBeamForMachine();

// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Successfully Added.");
				
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
				
// 			}
// 		}

// 		echo json_encode($datas);
// 	}

// 	//insert work details after work
// 	public function addDetailsAfterWork(){

// 		$this->form_validation->set_rules('meter','Meter','trim|required');
// 		$this->form_validation->set_rules('wastage','Wastage','trim');
// 		$this->form_validation->set_rules('conew','Cone Weight','trim|required');

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}

// 		else{


// 			$res = $this->Admin_model->insertDetailsAfterWork();	

// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Successfully Added.");
				
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
				
// 			}
// 		}

// 		echo json_encode($datas);
// 	}

// 	//update after work detail
// 	public function updateDetailsAfterWork(){

		
// 		$this->form_validation->set_rules('meter','Meter','trim|required');
// 		$this->form_validation->set_rules('wastage','Wastage','trim');
// 		$this->form_validation->set_rules('conew','Cone Weight','trim|required');

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}
// 		else{

// 			$res = $this->Admin_model->updateDetailsAfterWork();

// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Successfully Added.");
				
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
				
// 			}
// 		}

// 		echo json_encode($datas);
// 	}

// 	//machine status
// 	// public function machineStatus(){

// 	// 	$this->load->view('admin/machinestatus');
// 	// }

// 	//insert machine status
// 	public function machineStatusInsert(){

// 		$this->form_validation->set_rules('sdate','Date','trim|required');
// 		$this->form_validation->set_rules('strttime','Start Time','trim|required');
// 		$this->form_validation->set_rules('stoptime','Stop Time','trim|required');
// 		$this->form_validation->set_rules('reason','Reason','required');

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}

// 		else{

// 			$res = $this->Admin_model->insertMachineStatus();

// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Updated Successfully!");
				
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
				
// 			}
// 		}

// 		echo json_encode($datas);
// 	}

// 	//get daily report 
// 	public function workersReport(){

// 		$staff = $this->Admin_model->getStaff();
// 		$this->load->view('admin/workereport',compact('staff'));
// 	}

// 	//get machine status
// 	public function getMachineStatusByDate(){
// 		$this->form_validation->set_rules('adate','Date','trim|required');

// 		if($this->form_validation->run() == false) {

// 			if (strtotime($this->input->get('date')) >= strtotime(date('Y-m-d'))) {
// 				$this->session->set_flashdata('error_msg',"Cannot select future dates.");
// 				redirect(base_url('admin/machine-report'));
// 			}
			
// 			$date = empty($this->input->get('date')) ? date('Y-m-d') : date('Y-m-d', strtotime($this->input->get('date')));

// 			$machine = $this->Admin_model->getMachineStatus($date);
			
// 			$this->load->view('admin/machinestatus',compact('date','machine'));

// 		}

// 	}

// 	//get beam balance by machine id
// 	public function getBeamBalanceByMachineId(){


// 		$result = $this->Admin_model->getBeamBalanceById($this->input->post('machine'));

// 		echo json_encode($result);
// 	}

// 	//get report of the machine
// 	public function machineReport(){

// 		$machine = $this->Admin_model->fetchAllMachine();
// 		$this->load->view('admin/machinereport',compact('machine'));
// 	}

// 	//machine maintenance report
// 	public function maintenanceMachineReport(){

// 		$machine = $this->Admin_model->fetchAllMachine();
// 		$this->load->view('admin/maintenance_machine',compact('machine'));
// 	}


// 	/*-------------------------------------------------------------------------
// 	| Method : SHow List of Machine 
// 	|-------------------------------------------------------------------------*/
// 	public function Warping(){

// 		$res = $this->Admin_model->Get_all_raw_materials();
// 		$machine_details = $this->Admin_model->get_all_machines();
// 		$this->load->view('admin/warping', compact('res','machine_details'));
// 	}

// 	//Insert Raw materials

// 	public function Insert_raw_materials(){
// 		$this->form_validation->set_rules('weight', 'Weight', 'required|trim');
// 		$this->form_validation->set_rules('name', 'Name', 'required|trim|is_unique[raw_materials.name]');
// 		if ($this->form_validation->run() == False) {
// 			$this->Warping();
// 		} else {
// 			if ($this->input->post('select_machines') === '') {
// 				$this->session->set_flashdata('msg', 'Machine not selected');
// 				$this->Warping();
// 			}else{
// 				$res = $this->Admin_model->Insert_raw_materials();
// 				if($res === true){
// 					$this->session->set_flashdata('msg', '<div class="alert alert-success">Successfull</div>');
// 					$this->Warping();
// 				}else{
// 					$this->session->set_flashdata('msg', '<div class="alert alert-danger">Some error occured, PLease refresh and try again.</div>');
// 					$this->Warping();
// 				}
// 			}
// 		}
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : SHow List of Beam 
// 	|-------------------------------------------------------------------------*/
// 	public function Beam(){

// 		// $res = $this->Admin_model->Get_all_beam();
// 		// $this->load->view('admin/beam', compact('res'));
// 		$machines_where_inward_added = $this->Admin_model->get_machines_where_inward_added();
// 		$this->load->view('admin/new-beam', compact('machines_where_inward_added'));
// 	}

// 	//Insert Beam

// 	public function Insert_Beam(){
// 		$this->form_validation->set_rules('weight', 'Weight', 'required|trim');
// 		$this->form_validation->set_rules('length', 'Length', 'required|trim');
// 		$this->form_validation->set_rules('wastage', 'Wastage', 'required|trim');
// 		$this->form_validation->set_rules('name', 'Name', 'trim|required|is_unique[new_beam.beam_name]');
// 		if ($this->form_validation->run() == False) {
// 			$this->Beam();
// 		} else {
// 			$check_negative_values = $this->Admin_model->Calculate_raw_minus_beam();
// 			$calculate_totalbeam_weight = $this->Admin_model->Calculate_totalbeam_weight();

// 			$total = $this->input->post('weight') + $this->input->post('wastage') + $calculate_totalbeam_weight;
// 			if ($check_negative_values >= $total) {
// 				$res = $this->Admin_model->Insert_Beam();
// 				if($res === true){
// 					$this->session->set_flashdata('msg', '<div class="alert alert-success">Successfull</div>');
// 					$this->Beam();
// 				}else{
// 					$this->session->set_flashdata('msg', '<div class="alert alert-danger">Some error occured, PLease refresh and try again.</div>');
// 					$this->Beam();
// 				}
// 			}else{
// 				$this->session->set_flashdata('msg', '<div class="alert alert-danger">Weight of beam and wastage exceeds weight of raw materials left.</div>');
// 				$this->Beam();
// 			}

			
// 		}
// 	}

// 	public function Get_beam_by_id_ajax($beam_id){
// 		$result = $this->Admin_model->Get_beam_by_id_ajax($beam_id);
// 		exit(json_encode($result));
// 	}


// 	public function Add_beam_in_machine(){
// 		$result = $this->Admin_model->Add_beam_in_machine();
// 		if ($result === true) {
// 			$result2 = $this->Admin_model->Change_beam_status();
// 			if ($result === true) {
// 				$output = array(
// 					'status' => true,
// 					'msg' => '<div class="alert alert-success">Successfull</div>',
// 					'data' => null,
// 				);
// 			}else{
// 				$output = array(
// 					'status' => false,
// 					'msg' => '<div class="alert alert-danger">Some error occured, PLease refresh and try again.</div>',
// 					'data' => null,
// 				);
// 			}
// 		}else{
// 			$output = array(
// 				'status' => false,
// 				'msg' => '<div class="alert alert-danger">Some error occured, PLease refresh and try again.</div>',
// 				'data' => null,
// 			);
// 		}
// 		exit(json_encode($output));
// 	}



// 	public function Add_beam_in_machine2()
// 	{
		
// 		$result = $this->Admin_model->Add_beam_in_machine2();
// 		if ($result === true) {
// 			$result2 = $this->Admin_model->Change_beam_status();
// 			if ($result === true) {
// 				$output = array(
// 					'status' => true,
// 					'msg' => '<div class="alert alert-success">Successfull</div>',
// 					'data' => null,
// 				);
// 			}else{
// 				$output = array(
// 					'status' => false,
// 					'msg' => '<div class="alert alert-danger">Some error occured, PLease refresh and try again.</div>',
// 					'data' => null,
// 				);
// 			}
// 		}else{
// 			$output = array(
// 				'status' => false,
// 				'msg' => '<div class="alert alert-danger">Some error occured, PLease refresh and try again.</div>',
// 				'data' => null,
// 			);
// 		}
// 		exit(json_encode($output));
// 	}

// 	//coating 
// 	public function coating()
// 	{
// 		$roll = $this->Admin_model->getAllRoll(['roll_status' => 0]);
// 		$coatroll = $this->Admin_model->getRollCoat();

// 		$this->load->view('admin/coating',compact('roll','coatroll'));
// 	}

// 	//cutting 
// 	public function cutting()
// 	{
// 		$roll = $this->Admin_model->getCoatingRoll(['coating_status_cutting' => 1, 'coating_status' => 0]);
// 		$cutroll = $this->Admin_model->getRollAddedForCutting();

// 		$this->load->view('admin/cutting',compact('roll','cutroll'));
// 	}

// 	//cutting roll
// 	public function cuttingRoll($roll_id)
// 	{
// 		$roll = $this->Admin_model->getCuttingRollDetailForCuttingById(['cutting_id' => $roll_id]);
// 		$sheet = $this->Admin_model->getFinishedSheet($roll_id);

// 		$this->load->view('admin/cutting_roll',compact('roll','sheet'));
// 	}

// 	//get detail of roll by id
// 	public function getRollDetailById()
// 	{	
// 		$roll_id = $this->input->post('rid');
// 		$res = $this->Admin_model->getRollDetailById(['roll_id' => $roll_id]);
// 		echo json_encode($res);
// 	}

// 	//add coating roll before coating
// 	public function addCoatingRoll()
// 	{
// 		$this->form_validation->set_rules('rollid','Roll','trim|required');
// 		$this->form_validation->set_rules('rweight','Roll Weight','trim|required');
// 		$this->form_validation->set_rules('rlength','Roll Length','trim|required');
// 		$this->form_validation->set_rules('rname','Roll Name','required');

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}

// 		else{

// 			$res = $this->Admin_model->addCoatingRoll();

// 			if($res){

// 				$rollid = $this->input->post('rollid');
// 				$this->Admin_model->changeStatusOfRoll($rollid);

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Updated Successfully!");
				
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
				
// 			}
// 		}

// 		echo json_encode($datas);
// 	}

// 	//add roll after coating
// 	public function addRollAfterCoating()
// 	{

// 		$this->form_validation->set_rules('crollid','Roll','trim|required');
// 		$this->form_validation->set_rules('roll_weight_after','Roll Weight','trim|required');
// 		$this->form_validation->set_rules('chemical','Chemical','trim|required');
// 		$this->form_validation->set_rules('color','Color','required');

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}

// 		else{

// 			$res = $this->Admin_model->addRollAfterCoating();

// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Success!");
				
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
				
// 			}
// 		}

// 		echo json_encode($datas);
// 	}

// 	//get coated roll detail
// 	public function getCoatingRollDetailForCuttingById()
// 	{
// 		$roll_id = $this->input->post('rid');
// 		$res = $this->Admin_model->getCoatingRollDetailForCuttingById(['coating_id' => $roll_id]);
// 		echo json_encode($res);
// 	}

// 	//add roll for cutting
// 	public function addCuttingRoll()
// 	{
// 		$this->form_validation->set_rules('rollid','Roll','trim|required');
// 		$this->form_validation->set_rules('rweight','Roll Weight','trim|required');
// 		$this->form_validation->set_rules('rlength','Roll Length','trim|required');
// 		$this->form_validation->set_rules('rname','Roll Name','required');

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}

// 		else{

// 			$res = $this->Admin_model->addCuttingRoll();

// 			if($res){

// 				$rollid = $this->input->post('rollid');
// 				$this->Admin_model->changeStatusOfRollCoating($rollid);

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Success!");
				
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
				
// 			}
// 		}

// 		echo json_encode($datas);
// 	}

// 	//
// 	public function addSheetFromRollCut()
// 	{
		
// 		$this->form_validation->set_rules('sheetweight','Weight','trim|required');
// 		$this->form_validation->set_rules('sheetlength','Length','trim|required');
// 		$this->form_validation->set_rules('sheetwastage','Wastage','trim|required');
// 		$this->form_validation->set_rules('cutrollid','Cutting Roll','trim|required');
// 		$this->form_validation->set_rules('coatrollid','Coating Roll','trim|required');
// 		$this->form_validation->set_rules('rollname','Roll Name','trim|required');
		

// 		if($this->form_validation->run() == false){

// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}

// 		else{

// 			$res = $this->Admin_model->addSheetFromRollCut();

// 			if($res){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Success!");
				
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  'Something went wrong';
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
				
// 			}
// 		}

// 		echo json_encode($datas);
// 	}

// 	public function Costomers(){
// 		$Get_all_customers = $this->Admin_model->Get_all_customers();
// 		$this->load->view('admin/my_costomers',compact('Get_all_customers'));
// 	}

// 	public function Add_customers(){
// 		$this->form_validation->set_rules('company_name','Company Name','trim|required|is_unique[customers.customer_name]');
// 		$this->form_validation->set_rules('company_location','Company Location','trim');
// 		$this->form_validation->set_rules('company_number','Company Number','trim|is_unique[customers.customer_number]');
// 		$this->form_validation->set_rules('email_id','Email-Id','trim|is_unique[customers.customer_email]');
// 		$this->form_validation->set_rules('description','Description','trim');
// 		if($this->form_validation->run() == false){
// 			$this->session->set_flashdata('val_error', '<div class="alert alert-danger">'.validation_errors().'</div>');
// 		}else
// 		{
// 			$res = $this->Admin_model->Add_customers();
// 			if($res){
// 				$this->session->set_flashdata('success_msg',"Success!");
// 			}
// 			else{
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
// 			}
// 		}
// 		redirect(base_url('admin/customer'),'refresh');
// 	}

// 	public function Edit_customers(){
// 		$this->form_validation->set_rules('company_name','Company Name','trim|required');
// 		$this->form_validation->set_rules('company_location','Company Location','trim');
// 		$this->form_validation->set_rules('company_number','Company Number','trim');
// 		$this->form_validation->set_rules('email_id','Email-Id','trim');
// 		$this->form_validation->set_rules('description','Description','trim');
// 		if($this->form_validation->run() == false){
// 			$this->session->set_flashdata('val_error', '<div class="alert alert-danger">'.validation_errors().'</div>');
// 		}else
// 		{
// 			$res = $this->Admin_model->Edit_customers();
// 			if($res){
// 				$this->session->set_flashdata('success_msg',"Success!");
// 			}
// 			else{
// 				$this->session->set_flashdata('error_msg',"All values are same");
// 			}
// 		}
// 		redirect(base_url('admin/customer'),'refresh');
// 	}

// 	public function Delete_customers($id){
// 		$res = $this->Admin_model->Delete_customers($id);
// 		if($res){
// 			$this->session->set_flashdata('success_msg',"Success!");
// 		}
// 		else{
// 			$this->session->set_flashdata('error_msg',"Error occured");
// 		}
// 		redirect(base_url('admin/customer'),'refresh');
// 	}

// 	public function Cut_Stock(){
// 		$roll = $this->Admin_model->getCoatingRoll(['coating_status_cutting' => 1, 'coating_status' => 0]);
// 		$cutroll = $this->Admin_model->getRollAddedForCutting();
// 		$this->load->view('admin/Cut_Stock', compact('roll','cutroll'));
// 	}

// 	public function Stock_cut($roll_id)
// 	{
// 		$roll = $this->Admin_model->getCoatingRollDetailForCuttingById(['cutting_id' => $roll_id]);
// 		$sheet = $this->Admin_model->getFinishedSheet();

// 		$this->load->view('admin/stock_cut_details',compact('roll','sheet'));
// 	}

// 	public function stock_coated()
// 	{
// 		// $roll = $this->Admin_model->getAllRoll(['roll_status' => 0]);
// 		$coatroll = $this->Admin_model->getRollCoated_stack();

// 		$this->load->view('admin/stack_coated',compact('roll','coatroll'));
// 	}

// 	public function stock_not_coated()
// 	{
// 		// $roll = $this->Admin_model->getAllRoll(['roll_status' => 0]);
// 		$coatroll = $this->Admin_model->getRoll_not_Coated_stack();

// 		$this->load->view('admin/stack_not_coated',compact('roll','coatroll'));
// 	}

// 	public function stock_all_rolls(){
// 		$stock_all_rolls = $this->Admin_model->stock_all_rolls();
// 		$this->load->view('admin/stock_all_rolls',compact('stock_all_rolls'));
// 	}

// 	public function stock_rolls_sent(){
// 		$stock_all_rolls = $this->Admin_model->stock_rolls_sent();
// 		$this->load->view('admin/stock_rolls_sent',compact('stock_all_rolls'));
// 	}

// 	public function stock_rolls_not_sent(){
// 		$stock_all_rolls = $this->Admin_model->stock_rolls_not_sent();
// 		$this->load->view('admin/stock_rolls_not_sent',compact('stock_all_rolls'));
// 	}

// 	public function add_other_stock(){
// 		$this->load->view('admin/add_other_stock');
// 	}

// 	public function other_stock_report(){
// 		$data['all_other_stocks'] = $this->Admin_model->get_other_stocks_all();
// 		$this->load->view('admin/other_stock_report', $data);
// 	}


// 	public function Add_other_stock_fn(){
// 		$this->form_validation->set_rules('name','Name','trim|required');
// 		$this->form_validation->set_rules('qty','Quantity','trim|required');
// 		$this->form_validation->set_rules('weight','Weight','trim');
// 		$this->form_validation->set_rules('length','Length','trim');
// 		$this->form_validation->set_rules('description','Description','trim');
// 		if($this->form_validation->run() == false){
// 			$this->session->set_flashdata('val_error', '<div class="alert alert-danger">'.validation_errors().'</div>');
// 		}else
// 		{
// 			$res = $this->Admin_model->Add_other_stock_fn();
// 			if($res){
// 				$this->session->set_flashdata('success_msg',"Success!");
// 			}
// 			else{
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
// 			}
// 		}
// 		redirect(base_url('admin/other-stock-report'));
// 	}


// 	public function Update_other_stock_fn(){
// 		$this->form_validation->set_rules('name','Name','trim|required');
// 		$this->form_validation->set_rules('qty','Quantity','trim|required');
// 		$this->form_validation->set_rules('weight','Weight','trim');
// 		$this->form_validation->set_rules('length','Length','trim');
// 		$this->form_validation->set_rules('description','Description','trim');
// 		if($this->form_validation->run() == false){
// 			$this->session->set_flashdata('val_error', '<div class="alert alert-danger">'.validation_errors().'</div>');
// 		}else
// 		{
// 			$res = $this->Admin_model->Update_other_stock_fn();
// 			if($res){
// 				$this->session->set_flashdata('success_msg',"Success!");
// 			}
// 			else{
// 				$this->session->set_flashdata('error_msg',"No values Changed");
// 			}
// 		}
// 		redirect(base_url('admin/other-stock-report'));
// 	}

// 	public function Delete_other_stock($id){
// 		$res = $this->Admin_model->Delete_other_stock($id);
// 		if($res){
// 			$this->session->set_flashdata('success_msg',"Success!");
// 		}
// 		else{
// 			$this->session->set_flashdata('error_msg',"Error!");
// 		}
// 		redirect(base_url('admin/other-stock-report'));
// 	}

// 	public function add_sales(){
// 		$data['all_companys'] = $this->Admin_model->Get_all_customers();
// 		$this->load->view('admin/add_sales', $data);
// 	}



	

// 	public function Gett_rolls(){
// 		if ($this->input->post('param1') === 'all') {
// 			$data = $this->Admin_model->Gett_all_rolls();
// 			if ($data === false) {
// 				$output = array(
// 					'status' => 'false',
// 					'data' => null,
// 				);
// 			}else{
// 				$output = array(
// 					'status' => 'true',
// 					'data' => $data,
// 				);
// 			}
// 		}elseif($this->input->post('param1') === 'coat_all') {
// 			$data = $this->Admin_model->Gett_all_rollsWhere_coating_complete();
// 			if ($data === false) {
// 				$output = array(
// 					'status' => 'false',
// 					'data' => null,
// 				);
// 			}else{
// 				$output = array(
// 					'status' => 'true',
// 					'data' => $data,
// 				);
// 			}
// 		}elseif($this->input->post('param1') === 'cut_all') {
// 			$data = $this->Admin_model->Gett_all_rollsWhere_cutting_complete();
// 			if ($data === false) {
// 				$output = array(
// 					'status' => 'false',
// 					'data' => null,
// 				);
// 			}else{
// 				$output = array(
// 					'status' => 'true',
// 					'data' => $data,
// 				);
// 			}
// 		}
// 		echo json_encode($output);
// 	}

// 	public function Add_sales_fn(){
// 		$this->form_validation->set_rules('roll_type','Roll Type','trim|required');
// 		$this->form_validation->set_rules('roll','Roll Name','trim|required');
// 		$this->form_validation->set_rules('com_name','Company Name','trim|required');
// 		$this->form_validation->set_rules('price','Price','trim|required');
// 		$this->form_validation->set_rules('Quantity','Quantity','trim|required');
// 		if($this->form_validation->run() == false){
// 			$this->session->set_flashdata('val_error', '<div class="alert alert-danger">'.validation_errors().'</div>');
// 		}else
// 		{
// 			$res = $this->Admin_model->Add_sales();
// 			if($res){
// 				$this->session->set_flashdata('success_msg',"Success!");
// 				redirect(base_url('admin/sales'));
// 			}
// 			else{
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
// 				redirect($this->agent->referrer());
// 			}
// 		}
// 	}

// 	public function sales(){
// 		$data['all_sales'] = $this->Admin_model->get_all_Sales();
// 		$this->load->view('admin/sales', $data);
// 	}

// 	public function Update_sales_fn(){
// 		$this->form_validation->set_rules('roll_type','Roll Type','trim|required');
// 		$this->form_validation->set_rules('roll','Roll Name','trim|required');
// 		$this->form_validation->set_rules('com_name','Company Name','trim|required');
// 		$this->form_validation->set_rules('price','Price','trim|required');
// 		$this->form_validation->set_rules('Quantity','Quantity','trim|required');
// 		if($this->form_validation->run() == false){
// 			$this->session->set_flashdata('val_error', '<div class="alert alert-danger">'.validation_errors().'</div>');
// 		}else
// 		{
// 			$res = $this->Admin_model->Update_sales();
// 			if($res){
// 				$this->session->set_flashdata('success_msg',"Success!");
// 				redirect($this->agent->referrer());
// 			}
// 			else{
// 				$this->session->set_flashdata('error_msg',"Values are same");
// 				redirect($this->agent->referrer());
// 			}
// 		}
// 	}

// 	public function Delete_sales($sales_id,$roll_id){
// 		$res = $this->Admin_model->Delete_sales($sales_id,$roll_id);
// 		if($res){
// 			$this->session->set_flashdata('success_msg',"Successfully Deleted!");
// 			redirect($this->agent->referrer());
// 		}
// 		else{
// 			$this->session->set_flashdata('error_msg',"Error");
// 			redirect($this->agent->referrer());
// 		}
// 	}

// 	public function add_raw_materials($value='')
// 	{

// 		$this->form_validation->set_rules('raw_material_type','Raw material type','trim|required');
// 		if($this->form_validation->run() == false){
// 			// $this->session->set_flashdata('val_error', '<div class="alert alert-danger">'.validation_errors().'</div>');
// 			$this->load->view('admin/add_raw_materials');
// 		}else
// 		{
// 			$res = $this->Admin_model->add_raw_materials();

// 			if($res){
// 				$this->session->set_flashdata('success_msg',"Success!");
// 				redirect(base_url().'admin/manage-raw-materials');
// 			}
// 			else{
// 				$this->session->set_flashdata('error_msg',"Some error occured, refresh and try again");
// 				redirect(base_url().'admin/manage-raw-materials');
// 			}
// 		}
// 	}


// 		public function edit_inward_data($value='')
// 	{
// 		$this->form_validation->set_rules('raw_material_type','Raw material type','trim|required');
// 		if($this->form_validation->run() == false){
// 			// $this->session->set_flashdata('val_error', '<div class="alert alert-danger">'.validation_errors().'</div>');
// 			redirect(base_url().'admin/manage-raw-materials');
// 		}else
// 		{
// 			$res = $this->Admin_model->edit_inward_data();
// 			if($res){
// 				$this->session->set_flashdata('success_msg',"Success!");
// 				redirect(base_url().'admin/manage-raw-materials');
// 			}
// 			else{
// 				$this->session->set_flashdata('error_msg',"Some error occured, refresh and try again");
// 				redirect(base_url().'admin/manage-raw-materials');
// 			}
// 		}
// 	}

	
// 	public function manage_raw_materials($value='')
// 	{
// 		$data['all_data'] = $this->Admin_model->Get_all_new_raw_materials();
// 		// print_r($data);exit();
// 		$this->load->view('admin/manage_raw_materials', $data);
// 	}

// 	public function delete_Raw_material($inward_id='')
// 	{
// 		$result = $this->Admin_model->delete_Raw_material($inward_id);
// 		if($result){
// 			$this->session->set_flashdata('success_msg',"Successfully Deleted!");
// 			redirect(base_url().'admin/manage-raw-materials');
// 		}
// 		else{
// 			$this->session->set_flashdata('error_msg',"Some error occured, refresh and try again");
// 			redirect(base_url().'admin/manage-raw-materials');
// 		}
// 	}

// 	public function getRawMaterialDetailsByItSTwoTypes($value='')
// 	{
// 		$result = $this->Admin_model->getRawMaterialDetailsByItSTwoTypes();
// 		exit(json_encode($result));
// 	}

// 	public function Add_new_machines($value='')
// 	{
// 		$result = $this->Admin_model->Add_new_machines();
// 		if($result === "MP"){
// 			$this->session->set_flashdata('warn_msg',"Machine Name already present");
// 			redirect(base_url().'admin/add-new-machines');
// 		}elseif ($result === true) {
// 			$this->session->set_flashdata('success_msg',"Success!");
// 			redirect(base_url().'admin/add-new-machines');
// 		}else{
// 			$this->session->set_flashdata('warn_msg',"Some error occured, refresh and try again");
// 			redirect(base_url().'admin/add-new-machines');
// 		}
// 	}

// 	public function Add_neww_machines()
// 	{
// 		$data['machine_details'] = $this->Admin_model->get_all_machines();
// 		$this->load->view('admin/Add_new_machines',$data);
// 	}


// 	public function Edit_new_machine($value='')
// 	{
// 		$result = $this->Admin_model->Edit_new_machine();
// 		if($result === "MP"){
// 			$this->session->set_flashdata('warn_msg',"Machine Name already present");
// 			redirect(base_url().'admin/add-new-machines');
// 		}elseif ($result === true) {
// 			$this->session->set_flashdata('success_msg',"Success!");
// 			redirect(base_url().'admin/add-new-machines');
// 		}else{
// 			$this->session->set_flashdata('warn_msg',"Some error occured, refresh and try again");
// 			redirect(base_url().'admin/add-new-machines');
// 		}
// 	}

// 	public function Delete_new_machines($machine_id='')
// 	{
// 		$result = $this->Admin_model->Delete_new_machines($machine_id);
// 		if ($result === true) {
// 			$this->session->set_flashdata('success_msg',"Success!");
// 			redirect(base_url().'admin/add-new-machines');
// 		}else{
// 			$this->session->set_flashdata('warn_msg',"Some error occured, refresh and try again");
// 			redirect(base_url().'admin/add-new-machines');
// 		}
// 	}

// 	public function Get_Inward_second_type($value='')
// 	{
// 		$result = $this->Admin_model->Get_Inward_second_type();
// 		exit(json_encode($result));
// 	}

// 	public function Machine_details($machine_id= '') {
// 		$this->load->view('admin/Machine_details', compact('machine_id'));
// 	}


// 	public function get_weight_of_machine_where_inward_is_assigned(){
// 		$result = $this->Admin_model->get_weight_of_machine_where_inward_is_assigned();
// 		exit(json_encode($result));
// 	}


// 	public function Add_New_Beam(){
// 		$result = $this->Admin_model->Add_New_Beam();
// 		if ($result === true) {
// 			$this->session->set_flashdata('success_msg',"Success!");
// 			redirect(base_url().'admin/beam');
// 		}elseif ($result === 'al_name') {
// 			$this->session->set_flashdata('warn_msg',"Beam name already presesnt");
// 			redirect(base_url().'admin/beam');
// 		}else{
// 			$this->session->set_flashdata('warn_msg',"Some error occured, refresh and try again");
// 			redirect(base_url().'admin/beam');
// 		}
// 	}


// 	public function beam_created(){
// 		$data['all_beams'] = $this->Admin_model->all_beams();
// 		$this->load->view('admin/beam_created', $data);
// 	}


// 	public function delete_beam_created($beamC_id,$machine_id,$beam_weight){
		
// 		$result = $this->Admin_model->delete_beam_created($beamC_id,$machine_id,$beam_weight);
// 		if($result){
// 		redirect('admin/beam_created');
// 		} else {
// 			redirect('admin/beam_created');
// 		}
// 	}



// 	public function DeleteAllocatedWork($allocated_id, $beam_id, $staff_id, $start_date, $end_date, $page) {
// 		// echo 'hii';
// 		// exit();
			

// 		// $metre_used = $this->Admin_model->getWorkAllocateMetreUsed($allocated_id);
// 		// echo $metre_used;
// 		// exit();
// 		$result = $this->Admin_model->DeleteAllocatedWork($allocated_id);
// 		if ($result) {
// 			$result2 = $this->Admin_model->DeleteAllocatedWork_RollCreated($allocated_id);
// 			// if ($result2) {
// 				// $result3 = $this->Admin_model->changeBeamStatusOnDelete($beam_id,$metre_used);
// 			// }
// 			if ($result2) {
// 				$this->session->set_flashdata('success_msg',"Deleted!");
// 				redirect(base_url().'admin/work-report/'.$staff_id.'/'.$start_date.'/'.$end_date.'/'.$page);
// 			}else{
// 				$this->session->set_flashdata('warn_msg',"Some error occured, refresh and try again");
// 				redirect(base_url().'admin/work-report/'.$staff_id.'/'.$start_date.'/'.$end_date.'/'.$page);
// 			}
// 		}

// 	}


// 	public function editNewAllocatedWork() {
// 		$result = $this->Admin_model->editNewAllocatedWork();
// 		if ($result['status']) {
// 			// exit(json_encode($result));
// 			$result2 = $this->Admin_model->editRollsAfterWorkAllocation($result['insertId']);
// 			if ($result2) {
// 				$chnageBeamStatus = $this->Admin_model->changeBeamStatusOnAdd($result['insertId'], $this->input->post('Beam'));
// 				$decreaseRawMaterialWeight = $this->Admin_model->decreaseRawMaterialWeight($this->input->post('raw_material_weight'), $this->input->post('raw_material_id'), $this->input->post('cone_given'));
// 				if ($chnageBeamStatus) {
// 					$output = array(
// 						'status' => 'success',
// 						'msg' => 'Success'
// 					);
// 				}
// 			}
// 		}
// 		exit(json_encode($output));
// 	}


// 	public function CheckWeatherBeamAlreadyPresentInMachines(){
// 		$checkInAllocatedMachines = $this->Admin_model->checkInAllocatedMachines();
// 		if ($checkInAllocatedMachines['status']) {
// 			$beam_id = $checkInAllocatedMachines['data']->allocated_work_beam;
// 			$getTotalCloneMetersUsed = $this->Admin_model->getTotalCloneMetersUsed($beam_id);
// 			$ClonedMeters = 0;
// 			foreach ($getTotalCloneMetersUsed as $key => $value) {
// 				$ClonedMeters += $value->allocated_work_meters_used;
// 			}

// 			$BeamMeatersLeft = $this->Admin_model->BeamMeatersLeft($beam_id);
// 			$beamMeters = $BeamMeatersLeft->beamC_length;

// 			$totalBeamMetersLeft = $beamMeters - $ClonedMeters;

// 			if ($totalBeamMetersLeft >= 1) {
// 				$output = array(
// 					'status' => 'BeamInMachine',
// 					'beam_id' => $beam_id,
// 					'beam_details' => $BeamMeatersLeft,
// 					'BeamLeft' => $totalBeamMetersLeft,
// 					'beams_which_r_not_used' => null
// 				);
// 			}else{
// 				$output = array(
// 					'status' => 'BeamInMachineExhausted',
// 					'beam_id' => $beam_id,
// 					'beam_details' => $BeamMeatersLeft,
// 					'BeamLeft' => $totalBeamMetersLeft,
// 					'beams_which_r_not_used' => $this->Admin_model->beams_which_r_not_used()
// 				);
// 			}
// 		}else{
// 			$output = array(
// 				'status' => 'NoBeamInMachine',
// 				'beam_id' => null,
// 				'beam_details' => null,
// 				'BeamLeft' => null,
// 				'beams_which_r_not_used' => $this->Admin_model->beams_which_r_not_used()
// 			);
// 		}
// 		echo json_encode($output);
// 	}



// /**
//  * View for Excess Raw material
//  */

//  function add_excess_raw_materials() {
// 		$this->form_validation->set_rules('raw_material_type','Raw material type','trim|required');
		
// 		if($this->form_validation->run() == false){
// 			// $this->session->set_flashdata('val_error', '<div class="alert alert-danger">'.validation_errors().'</div>');
// 		$this->load->view('admin/add_excess_raw_material');
// 		}else
// 		{
			
// 			$res = $this->Admin_model->add_excess_raw_materials();
// 			// echo $res;
// 			// exit();
// 			if($res){
// 				$this->session->set_flashdata('success_msg',"Success!");
// 				redirect(base_url().'admin/manage-excess-raw-materials');
// 			}
// 			else{
// 				$this->session->set_flashdata('error_msg',"Some error occured, refresh and try again");
// 				redirect(base_url().'admin/manage-excess-raw-materials');
// 			}
// 		}
// }


// /**
//  * View for Wastage Raw material
//  */

// // P Starts
// 	//Wastage
	
// 	function add_wastage_raw_materials() {

// 		$this->form_validation->set_rules('raw_material_type','Raw material type','trim|required');
// 		if($this->form_validation->run() == false){
// 			// $this->session->set_flashdata('val_error', '<div class="alert alert-danger">'.validation_errors().'</div>');
// 			$this->load->view('admin/add_wastage_raw_material');
// 		}else
// 		{
			
// 			$res = $this->Admin_model->add_excess_raw_materials();
// 			// echo $res;
// 			// exit();
// 			if($res){
// 				$this->session->set_flashdata('success_msg',"Success!");
// 				redirect(base_url().'admin/manage-wastage-raw-materials');
// 			}
// 			else{
// 				$this->session->set_flashdata('error_msg',"Some error occured, refresh and try again");
// 				redirect(base_url().'admin/manage-wastage-raw-materials');
// 			}
// 		}
// 	}

 
//  /**
//  * View for Warp  Beam Report
//  */
//  		// Beam Created Report
// 	function add_warp_beam_report() {
// 		// $res = $this->Admin_model->Get_all_raw_materials();
// 		// $machine_details = $this->Admin_model->get_all_machines();
// 		$beam_data['beam_used_detail'] = $this->Admin_model->get_beam_used_detail();
// 		$this->load->view('admin/add_warp_beam_report',$beam_data);
// 	}
//  /**
//  * View for Coating  Add machine
//  */

// // P Starts
//  function coating_add_machine() {
//  		$this->load->view('admin/coating_add_machine');
// 		$this->form_validation->set_rules('couting_machine_name','Couting Machine Name','trim|required');
// 		$this->form_validation->set_rules('couting_machine_description','Couting Machine Description','trim');
// 		if($this->form_validation->run() == false){
// 			// echo 'hii';
// 			// exit();
// 			$this->session->set_flashdata('val_error', '<div class="alert alert-danger">'.validation_errors().'</div>');
// 		}else
// 		{
// 			// echo 'bye';
// 			// exit();
// 			$res = $this->Admin_model->add_machine_for_couting();
// 			if($res){
// 				$this->session->set_flashdata('success_msg',"Success!");
// 			}
// 			else{
// 				$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
// 			}
// 		}
// 		// redirect(base_url('admin/customer'),'refresh');

 	

// }

//  /**
//  * View for Coating Allocate
//  */

// // P Starts

//  function coating_allocate() {
//  	$data['staff_availability_list'] = $this->Admin_model->fetchStaffList();
//  	$data['couting_machine_data']    = $this->Admin_model->fetchCoutingMachine();
// 	$data['all_rolls'] = $this->Admin_model->AllNewRolls();
// 	$this->load->view('admin/coating_allocate', $data);
//  }
 
//  function newRollCreated(){
//  	$rolltype = $this->input->post('rolltype');
//  	$all_rolls_based_check = $this->Admin_model->fetchNewRollCreated($rolltype);
//  	echo json_encode($all_rolls_based_check);
//  }

//  function getInwardByInwardType(){
//  	$inwardtype = $this->input->post('inwardtype');
//  	$getInwardByInwardType = $this->Admin_model->getInwardByInwardType($inwardtype);
//  	echo json_encode($getInwardByInwardType);
//  }

//  function getInwardWeightByInwardTypeOfType(){
//  	$inwardtypeoftype = $this->input->post('inwardtypeoftype');
//  	$getInwardWeightByInwardTypeOfType = $this->Admin_model->getInwardWeightByInwardTypeOfType($inwardtypeoftype);
//  	echo json_encode($getInwardWeightByInwardTypeOfType);
//  }


//  function coatingAllocateDataInsert(){

//  	$this->form_validation->set_rules('customRadioInline1', 'Shift Type', 'trim|required');
//  	$this->form_validation->set_rules('staff', 'fieldlabel', 'trim|required');
//  	$this->form_validation->set_rules('machine', 'fieldlabel', 'trim|required');
//  	$this->form_validation->set_rules('Datee', 'fieldlabel', 'trim|required');

//  	$this->form_validation->set_rules('roll_type[]', 'Roll Type', 'trim|required');
//  	// $this->form_validation->set_rules('roll_name[]', 'Roll Name', 'trim|required');
 	

//  	$this->form_validation->set_rules('dcallocateF', 'Finished Checkbox', 'trim|required');
//  	$this->form_validation->set_rules('roll_type_f[]', 'Finished Roll Type', 'trim|required');
//  	$this->form_validation->set_rules('no_of_rolls_f[]', 'Finished Roll Length', 'trim|required');
//  	$this->form_validation->set_rules('roll_weight_f[]', 'Finished Roll Weight', 'trim|required');
//  	$this->form_validation->set_rules('roll_name_f[]', 'Finished Roll Name', 'trim|required');
 	

//  	$this->form_validation->set_rules('dcallocateU', 'Unfinished Checkbox', 'trim|required');
//  	$this->form_validation->set_rules('roll_type_u[]', 'Unfinished Roll Type', 'trim|required');
//  	$this->form_validation->set_rules('roll_weight_u[]', 'Unfinished Roll Weight', 'trim|required');
//  	$this->form_validation->set_rules('roll_name_u[]', 'Unfinished Roll Name', 'trim|required');

// 	$this->form_validation->set_rules('raw_material_type[]', 'Raw Material Type', 'trim|required');
//  	$this->form_validation->set_rules('raw_material_type_of_type[]', 'Raw Material Type of Type', 'trim|required');
//  	$this->form_validation->set_rules('weight[]', ' Raw Material Weight', 'trim|required');
//  	$this->form_validation->set_rules('weight_substraction[]', 'Raw Material Weight Substraction', 'trim|required');
 	
//  	if($this->form_validation->run() === FALSE){
		
// 		$output = [
// 			'status' 	=> false,
// 			'data'  	=> validation_errors(),
// 		]; 	

//  	} else {

//  	$customRadioInline1 	= $this->input->post("customRadioInline1");
//  	$staff 					= $this->input->post("staff");
//  	$machine 				= $this->input->post("machine");
//  	$couting_Date 			= date('Y-m-d h:i:s', strtotime($this->input->post("Datee")));

//  	$couting_allocate = [
//  		'coating_allocate_shift'    	=> $customRadioInline1,
//  		'coating_allocate_staff_id' 	=> $staff,
//  		'coating_allocate_machine_id' 	=> $machine,
//  		'coating_allocate_date' 		=> $couting_Date
//  	];
 	
//  	$coating_allocate_id = $this->Admin_model->insert_in_coating_allocate($couting_allocate);

//  		// ---------------------
 
// 	 	$roll_types 	= $this->input->post("roll_type[]");
// 	 	$roll_names 	= $this->input->post("roll_name[]");

// 	 	$total_roll = count($roll_types);
// 	 	$couting_roll = [];

// 	 	for($i=0; $i<$total_roll; $i++){
// 	 		if(isset($roll_names[$i])){
// 			 	$couting_roll = [
// 			 		'couting_rolls_type'    			=> $roll_types[$i],
// 			 		'couting_rolls_name' 				=> $roll_names[$i],
// 			 		'coating_rolls_allocate_id' 		=> $coating_allocate_id
// 			 		];


// 			 $couting_roll_insert_status =	$this->Admin_model->insert_in_coating_rolls($couting_roll);

// 		 			if($couting_roll_insert_status){
// 		 				if(isset($roll_names[$i])){
// 			 	 			$this->Admin_model->update_in_new_roll_created($roll_names[$i]);
// 			 	 		}
// 			 		}
// 			 }		
	 		
// 	 	}
	 	
//  		// ---------------------------

//  	// if(!empty($this->input->post("dcallocateF"))){

		 	
// 		 	$dcallocate_f 	= $this->input->post("dcallocateF");
// 		 	$roll_type_f 	= $this->input->post("roll_type_f[]");
// 		 	$no_of_rolls_f 	= $this->input->post("no_of_rolls_f[]");
// 		 	$roll_weight_f 	= $this->input->post("roll_weight_f[]");
// 		 	$roll_name_f 	= $this->input->post("roll_name_f[]");

// 		 	$total_OutputRollsF = count($roll_type_f);

// 		 	for($j=0; $j<$total_OutputRollsF; $j++){
		 	
// 		 	$coating_OutputRolls = [
// 		 		'coating_OutputRolls_output_type_f_u'    			=> $dcallocate_f,
// 		 		'coating_OutputRolls_roll_type_id'    			    => $roll_type_f[$j],
// 		 		'coating_OutputRolls_roll_length'					=> $no_of_rolls_f[$j],
// 		 		'coating_OutputRolls_roll_weight'					=> $roll_weight_f[$j],
// 		 		'coating_OutputRolls_roll_name'      				=> $roll_name_f[$j],
// 		 		'coating_OutputRolls_allocate_id'      				=> $coating_allocate_id
// 		 		];

// 				 $this->Admin_model->insert_in_coating_OutputRolls($coating_OutputRolls);
// 		 	}
// 	// }
	
// 		 	// echo json_encode($_POST);
// 		 	// exit();

// 	// if(!empty($this->input->post("dcallocateU"))){

// 		 	$roll_type_u =[];
// 		 	$dcallocate_u 	= $this->input->post("dcallocateU");
// 		 	$roll_type_u 	= $this->input->post("roll_type_u[]");
// 		 	$roll_weight_u 	= $this->input->post("roll_weight_u[]");
// 		 	$roll_name_u 	= $this->input->post("roll_name_u[]");

// 		 	// echo json_encode($roll_type_u);
// 		 	// exit();

// 		 	$total_OutputRollsU = count($roll_type_u);

// 		 	for($k=0; $k<$total_OutputRollsU; $k++){
		 	
// 		 	$coating_OutputRollsUn = [
// 		 		'coating_OutputRolls_output_type_f_u'    			=> $dcallocate_u,
// 		 		'coating_OutputRolls_roll_type_id'    			    => $roll_type_u[$k],
// 		 		'coating_OutputRolls_roll_weight'					=> $roll_weight_u[$k],
// 		 		'coating_OutputRolls_roll_name'      				=> $roll_name_u[$k],
// 		 		'coating_OutputRolls_allocate_id'      				=> $coating_allocate_id
// 		 		];

// 		 	$this->Admin_model->insert_in_coating_OutputRolls($coating_OutputRollsUn);
// 		 	}
// 	// }	 	


 	
//  	$raw_material_type 					= $this->input->post("raw_material_type[]");
//  	$raw_material_type_of_type 			= $this->input->post("raw_material_type_of_type[]");
//  	$weight 							= $this->input->post("weight[]");
//  	$weight_substraction 				= $this->input->post("weight_substraction[]");
 	
//  	$total_raw_material_consumed = count($raw_material_type);
 	

//  	for($m=0; $m<$total_raw_material_consumed; $m++){
 	
//  	$coating_raw_material_consumed = [
//  		'coating_rmc_raw_material_type'    			    => $raw_material_type[$m],
//  		'coating_rmc_raw_material_type_of_type'			=> $raw_material_type_of_type[$m],
//  		'coating_rmc_weight'							=> $weight[$m],
//  		'coating_rmc_weight_substration'				=> $weight_substraction[$m],
//  		'coating_rmc_allocate_id'		      			=> $coating_allocate_id
//  		];

//  	$used_inward_weight =  (float)$weight[$m] - (float)$weight_substraction[$m];
//  	$raw_material_consumed = $this->Admin_model->insert_in_coating_raw_material_consumed($coating_raw_material_consumed);

//  			if($raw_material_consumed){
//  				$this->Admin_model->update_in_coating_raw_material_consumed($raw_material_type_of_type[$m],$used_inward_weight);
//  			}
//  	}

//  	 	$output = [
// 			'status' 	=> true,
// 			'data'  	=> $coating_allocate_id
// 		];
 	
//  		}


//  		echo json_encode($output);
// 	}



//  function coating_report() {
//  	$data['staff_availability_list'] = $this->Admin_model->fetchStaffList();
//     // $data['couting_machine_data'] = $this->Admin_model->fetchCoutingMachine();
// 	// $data['all_rolls'] = $this->Admin_model->AllNewRolls();
// 	$this->load->view('admin/coating_report', $data);
// }

//  function coatingReportDetail(){

//  	// $this->form_validation->set_rules('start_date', 'Start Date', 'trim|required');
//  	// $this->form_validation->set_rules('end_date', 'End Date', 'trim|required');
//  	// $this->form_validation->set_rules('staff', 'Staff', 'trim|required');


//  	// if($this->form_validation->run() === FALSE){
		
// 		// $output = [
// 		// 	'status' 	=> false,
// 		// 	'data'  	=> validation_errors(),
// 		// ]; 	

//  	// } else {

//  	$start_date 	= date('Y-m-d h:i:s', strtotime($this->input->post("start_date")));
//  	$end_date 		= date('Y-m-d h:i:s', strtotime($this->input->post("end_date")));
//  	$staff	  		= $this->input->post("staff");
//  	// $couting_Date 			= date('Y-m-d h:i:s', strtotime($this->input->post("Datee")));

//  	$condition = [
//  		'coating_allocate_date >='    	=> $start_date,
//  		'coating_allocate_date <=' 		=> $end_date,
//  		'coating_allocate_staff_id' 	=> $staff
//  	];
 	
//  	$coating_report = $this->Admin_model->get_AllcoatingTableDetail($condition);
//  	// echo json_encode($coating_report);
//  	// exit;


//  	if(count($coating_report['coating_allocate_specific_data']) != 0 ){
// 	 	$output = [
// 	 		'status' 	=> 'true',
// 	 		'data'  	=> $coating_report,
// 	 	]; 
//  	} else {
//  		$output = [
// 	 		'status' 	=> 'false',
// 	 		'data'  	=> [],
// 	 	]; 
//  	}


//  	echo json_encode($output);
 	

// 		// }

// 	}





//  // P Ends
//  /**
//  * View for Coating report
//  */


//  /**
//  * View for Coati
//  */

 



// // P Starts

// 	public function manage_excess_raw_materials($value='')
// 	{
// 		$data['all_data'] = $this->Admin_model->get_excess_raw_materials();
// 		// print_r($data);exit();
// 		$this->load->view('admin/manage_excess_raw_materials', $data);
// 	}

// // P Starts
//   function get_inward_type_of_type() {

//   // 	$this->form_validation->set_rules('raw_material_type','Raw material type','trim|required');
// 		// if($this->form_validation->run() == false){
// 		// 	// $this->session->set_flashdata('val_error', '<div class="alert alert-danger">'.validation_errors().'</div>');
// 		// $this->load->view('admin/add_excess_raw_material');
// 		// }else
// 		// {
// 			$inward_type_of_type = $this->Admin_model->get_inward_type_of_type();
// 			echo json_encode($inward_type_of_type);
//   			exit();
// 			// $this->load->view('admin/add_excess_raw_material',$inward_type_of_type);
// 		// }
		
//    }

// // P Starts
// 	public function manage_wastage_raw_materials($value='')
// 	{
// 		$data['all_data'] = $this->Admin_model->get_wastage_raw_materials();
// 		// print_r($data);exit();
// 		$this->load->view('admin/manage_wastage_raw_materials', $data);
// 	}

// // P Starts
// 	function add_warp_fresh_beam_report() {
// 		$beam_data['beam_fresh_detail'] = $this->Admin_model->get_beam_fresh_detail();
// 			// echo '<pre>';
// 		// print_r($beam_data['beam_used_detail']);
// 		// exit();
// 		// $this->load->view('admin/warping', compact('res','machine_details'));
// 		$this->load->view('admin/add_warp_fresh_beam_report',$beam_data);
// 	}


// // P Starts


// 	/**
// 	* View for Cutting  add machine
// 	*/

// 	 function cutting_add_machine() {
// 	 	// echo 'hii';
// 	 	// exit();

// 	 		$this->load->view('admin/cutting_add_machine');
// 			$this->form_validation->set_rules('cutting_machine_name','Cutting Machine Name','trim|required');
// 			$this->form_validation->set_rules('cutting_machine_description','Cutting Machine Description','trim');
			
// 			if($this->form_validation->run() == false){
// 				$this->session->set_flashdata('val_error', '<div class="alert alert-danger">'.validation_errors().'</div>');
// 			} else
// 			{
// 				$res = $this->Admin_model->add_machine_for_cutting();
// 				if($res){
// 					$this->session->set_flashdata('success_msg',"Success!");
// 				}
// 				else{
// 					$this->session->set_flashdata('error_msg',"Something went wrong, please try again.");
// 				}
// 			}
// 			// redirect(base_url('admin/customer'),'refresh');

	 	

// 	}



// 	 /**
// 	 * View for Cutting Allocate
// 	 */

// 	 function cutting_allocate() {
// 	 	// $data = array(
// 	 	// 	'all_rolls' => $this->Admin_model->AllNewRolls(),
// 	 	// );
// 	 	$data['staff_availability_list'] = $this->Admin_model->fetchStaffList();
// 	 	$data['cutting_machine_data']    = $this->Admin_model->fetchCuttingMachine();
// 		$data['all_rolls'] = $this->Admin_model->AllNewRolls();
// 		$this->load->view('admin/cutting_allocate', $data);
// 	}


// 	function getCoatingRolls_for_cutting(){

// 		$data = $this->Admin_model->getCoatingRolls_for_cutting();

// 		$rolls_of_allocated_id = [];
// 		// $allocated_ids = [];
// 		$allocated_id_unique = [];
// 		$new_allocated_ids = [];
// 			if(count($data) > 0){		
// 				foreach ($data as $key => $value){
// 					$allocated_id_unique[] 			= $value->coating_rolls_allocate_id;;
// 				}
// 			}	


// 			foreach (array_unique($allocated_id_unique) as $key => $value) {
// 				$new_allocated_ids[] = $value;
// 			}
			 

// 			if(count($allocated_id_unique) > 0){		
// 				foreach ($new_allocated_ids as $key => $allocate_id) {
// 					$rolls_of_allocated_id[$key] = $this->Admin_model->getRolls_of_allocated_id($allocate_id);
// 				}
// 			}	

// 		// // // echo json_encode($data);
// 		// // // exit();

// 		if(count($rolls_of_allocated_id) > 0){
// 			$output = [
// 				'status' => true,
// 				'data'	=> $rolls_of_allocated_id
// 				];
// 		} else {
// 			$output = [
// 				'status' => false,
// 				'data'	=> ''
// 				];
// 		}

// 		echo json_encode($output);

// 	}

// 	function get_Manufacturing_output_Rolls_for_cutting(){

// 		$rolls_type = $this->input->post('rolltype');
// 		$rolls_output_type = $this->input->post('rolls_output');
// 		$manufacturing_rolls = $this->Admin_model->get_Manufacturing_output_Rolls_for_cutting($rolls_type,$rolls_output_type);

// 		if(count($manufacturing_rolls) > 0){
// 			$output = [
// 				'status' => true,
// 				'data'	 => $manufacturing_rolls
// 				];
// 		} else {
// 			$output = [
// 				'status' => false,
// 				'data'	 => ''
// 				];
// 		}

// 		echo json_encode($output);

// 	}	

// 	function get_Coating_output_Rolls_for_cutting(){

// 		$rolls_type = $this->input->post('rolltype');
// 		$rolls_output_type = $this->input->post('rolls_output');

// 		if($rolls_output_type == 'finished'){
// 			$rolls_output = 'finish';
// 		} else {
// 			$rolls_output = 'unfinish';
// 		}

// 		$coating_rolls = $this->Admin_model->get_Coating_output_Rolls_for_cutting($rolls_type,$rolls_output);

// 		if(count($coating_rolls) > 0){
// 			$output = [
// 				'status' => true,
// 				'data'	 => $coating_rolls
// 				];
// 		} else {
// 			$output = [
// 				'status' => false,
// 				'data'	 => ''
// 				];
// 		}

// 		echo json_encode($output);

// 	}


// 	 function cuttingAllocateDataInsert(){

// 	 	$this->form_validation->set_rules('customRadioInline1', 'Shift Type', 'trim|required');
// 	 	$this->form_validation->set_rules('staff', 'fieldlabel', 'trim|required');
// 	 	$this->form_validation->set_rules('machine', 'fieldlabel', 'trim|required');
// 	 	$this->form_validation->set_rules('Datee', 'fieldlabel', 'trim|required');

// 	 	$this->form_validation->set_rules('roll_category[]', 'Roll Type', 'trim|required');
// 	 	$this->form_validation->set_rules('roll_output[]', 'Roll Type', 'trim|required');
// 	 	$this->form_validation->set_rules('roll_type[]', 'Roll Type', 'trim|required');
// 	 	// $this->form_validation->set_rules('roll_name[]', 'Roll Name', 'trim|required');
	 	

// 	 	$this->form_validation->set_rules('dcallocateF', 'Finished Checkbox', 'trim|required');
// 	 	$this->form_validation->set_rules('roll_type_f[]', 'Finished Roll Type', 'trim|required');
// 	 	$this->form_validation->set_rules('no_of_rolls_f[]', 'Finished Roll Length', 'trim|required');
// 	 	$this->form_validation->set_rules('roll_weight_f[]', 'Finished Roll Weight', 'trim|required');
// 	 	$this->form_validation->set_rules('roll_name_f[]', 'Finished Roll Name', 'trim|required');
	 	

// 	 	$this->form_validation->set_rules('dcallocateU', 'Unfinished Checkbox', 'trim|required');
// 	 	$this->form_validation->set_rules('roll_type_u[]', 'Unfinished Roll Type', 'trim|required');
// 	 	$this->form_validation->set_rules('roll_weight_u[]', 'Unfinished Roll Weight', 'trim|required');
// 	 	$this->form_validation->set_rules('roll_name_u[]', 'Unfinished Roll Name', 'trim|required');

// 		$this->form_validation->set_rules('raw_material_type[]', 'Raw Material Type', 'trim|required');
// 	 	$this->form_validation->set_rules('raw_material_type_of_type[]', 'Raw Material Type of Type', 'trim|required');
// 	 	$this->form_validation->set_rules('weight[]', ' Raw Material Weight', 'trim|required');
// 	 	$this->form_validation->set_rules('weight_substraction[]', 'Raw Material Weight Substraction', 'trim|required');
	 	
// 	 	if($this->form_validation->run() === FALSE){
			
// 			$output = [
// 				'status' 	=> false,
// 				'data'  	=> validation_errors(),
				
// 			]; 	

// 	 	} else {

// 	 		 	$roll_category 	= $this->input->post("roll_category[]");
// 	 		 	$roll_output 	= $this->input->post("roll_output[]");
// 	 		 	$roll_types 	= $this->input->post("roll_type[]");
// 	 		 	$roll_names 	= $this->input->post("roll_name[]");


// 	 		 	$total_roll = count($roll_types);
// 	 		 	$cutting_roll = [];

// 	 		 	$result = false;
// 	 		 	for($x=0; $x<$total_roll; $x++){
// 	 		 		for($y=$x+1; $y<$total_roll; $y++){

// 	 		 			if($roll_category[$x] == $roll_category[$y] && $roll_output[$x] == $roll_output[$y] && $roll_types[$x] == $roll_types[$y] && $roll_names[
// 	 		 				$x] == $roll_names[$y]){
// 	 		 				$result = true;
// 	 						break;					 					
// 	 		 			}
// 	 		 		}
// 	 		 	}	

// 	 		 	if($result){
// 		 		 		$output = [
// 		 		 			'status' 	=> false,
// 		 		 			'data'  	=> 'Duplicate Rolls Insertion',
// 		 		 		]; 	
// 	 		 	} else {


// 	 	$customRadioInline1 	= $this->input->post("customRadioInline1");
// 	 	$staff 					= $this->input->post("staff");
// 	 	$machine 				= $this->input->post("machine");
// 	 	$cutting_Date 			= date('Y-m-d h:i:s', strtotime($this->input->post("Datee")));

// 	 	$cutting_allocate = [
// 	 		'cutting_allocate_shift'    	=> $customRadioInline1,
// 	 		'cutting_allocate_staff_id' 	=> $staff,
// 	 		'cutting_allocate_machine_id' 	=> $machine,
// 	 		'cutting_allocate_date' 		=> $cutting_Date
// 	 	];
	 	
// 	 	$cutting_allocate_id = $this->Admin_model->insert_in_cutting_allocate($cutting_allocate);

// 	 		// ---------------------
	 
	


// 		 	for($i=0; $i<$total_roll; $i++){

// 		 		if(isset($roll_names[$i])){
// 				 	$cutting_roll = [
// 				 		'cutting_roll_category'    			=> $roll_category[$i],
// 				 		'cutting_roll_output'    			=> $roll_output[$i],
// 				 		'cutting_rolls_type'    			=> $roll_types[$i],
// 				 		'cutting_rolls_name' 				=> $roll_names[$i],
// 				 		'cutting_rolls_allocate_id' 		=> $cutting_allocate_id
// 				 		];


// 				 $cutting_roll_insert_status =	$this->Admin_model->insert_in_cutting_rolls($cutting_roll);

// 			 			if($cutting_roll_insert_status){
// 			 				if($roll_category[$i] == 'manufacturing'){
// 					 				if(isset($roll_names[$i])){
// 						 	 			$this->Admin_model->update_in_new_roll_created($roll_names[$i]);
// 						 	 		}
// 				 	 		} else {
// 						 	 		if(isset($roll_names[$i])){
// 						 	 			$this->Admin_model->update_in_coating_OutputRolls($roll_names[$i]);
// 						 	 		}
// 				 	 		}
// 				 	    }
				 
// 				 }		
		 		
// 		 	}
		 	
// 	 		// ---------------------------

// 	 	// if(!empty($this->input->post("dcallocateF"))){

			 	
// 			 	$dcallocate_f 	= $this->input->post("dcallocateF");
// 			 	$roll_type_f 	= $this->input->post("roll_type_f[]");
// 			 	$no_of_rolls_f 	= $this->input->post("no_of_rolls_f[]");
// 			 	$roll_weight_f 	= $this->input->post("roll_weight_f[]");
// 			 	$roll_name_f 	= $this->input->post("roll_name_f[]");

// 			 	$total_OutputRollsF = count($roll_type_f);

// 			 	for($j=0; $j<$total_OutputRollsF; $j++){
			 	
// 			 	$cutting_OutputRolls = [
// 			 		'cutting_OutputRolls_output_type_f_u'    			=> $dcallocate_f,
// 			 		'cutting_OutputRolls_roll_type_id'    			    => $roll_type_f[$j],
// 			 		'cutting_OutputRolls_roll_length'					=> $no_of_rolls_f[$j],
// 			 		'cutting_OutputRolls_roll_weight'					=> $roll_weight_f[$j],
// 			 		'cutting_OutputRolls_roll_name'      				=> $roll_name_f[$j],
// 			 		'cutting_OutputRolls_allocate_id'      				=> $cutting_allocate_id
// 			 		];

// 					 $this->Admin_model->insert_in_cutting_OutputRolls($cutting_OutputRolls);
// 			 	}
// 		// }
		
// 			 	// echo json_encode($_POST);
// 			 	// exit();

// 		// if(!empty($this->input->post("dcallocateU"))){

// 			 	$roll_type_u =[];
// 			 	$dcallocate_u 	= $this->input->post("dcallocateU");
// 			 	$roll_type_u 	= $this->input->post("roll_type_u[]");
// 			 	$roll_weight_u 	= $this->input->post("roll_weight_u[]");
// 			 	$roll_name_u 	= $this->input->post("roll_name_u[]");

// 			 	// echo json_encode($roll_type_u);
// 			 	// exit();

// 			 	$total_OutputRollsU = count($roll_type_u);

// 			 	for($k=0; $k<$total_OutputRollsU; $k++){
			 	
// 			 	$cutting_OutputRollsUn = [
// 			 		'cutting_OutputRolls_output_type_f_u'    			=> $dcallocate_u,
// 			 		'cutting_OutputRolls_roll_type_id'    			    => $roll_type_u[$k],
// 			 		'cutting_OutputRolls_roll_weight'					=> $roll_weight_u[$k],
// 			 		'cutting_OutputRolls_roll_name'      				=> $roll_name_u[$k],
// 			 		'cutting_OutputRolls_allocate_id'      				=> $cutting_allocate_id
// 			 		];

// 			 	$this->Admin_model->insert_in_cutting_OutputRolls($cutting_OutputRollsUn);
// 			 	}
// 		// }	 	


	 	
// 	 	$raw_material_type 					= $this->input->post("raw_material_type[]");
// 	 	$raw_material_type_of_type 			= $this->input->post("raw_material_type_of_type[]");
// 	 	$weight 							= $this->input->post("weight[]");
// 	 	$weight_substraction 				= $this->input->post("weight_substraction[]");
	 	
// 	 	$total_raw_material_consumed = count($raw_material_type);
	 	

// 	 	for($m=0; $m<$total_raw_material_consumed; $m++){
	 	
// 	 	$cutting_raw_material_consumed = [
// 	 		'cutting_rmc_raw_material_type'    			    => $raw_material_type[$m],
// 	 		'cutting_rmc_raw_material_type_of_type'			=> $raw_material_type_of_type[$m],
// 	 		'cutting_rmc_weight'							=> $weight[$m],
// 	 		'cutting_rmc_weight_substration'				=> $weight_substraction[$m],
// 	 		'cutting_rmc_allocate_id'		      			=> $cutting_allocate_id
// 	 		];

// 	 	$used_inward_weight =  (float)$weight[$m] - (float)$weight_substraction[$m];
// 	 	$raw_material_consumed = $this->Admin_model->insert_in_cutting_raw_material_consumed($cutting_raw_material_consumed);

// 	 			if($raw_material_consumed){
// 	 				$this->Admin_model->update_in_cutting_raw_material_consumed($raw_material_type_of_type[$m],$used_inward_weight);
// 	 			}
// 	 	}

// 	 	 	$output = [
// 				'status' 	=> true,
// 				'data'  	=> 'Success',
				
// 			];
	 	
// 	 		} // $result else

// 	 	}	

// 	 		echo json_encode($output);
// 		}


// 		// P Start Cutting Reports

// 		function cutting_report() {
// 			$data['staff_availability_list'] = $this->Admin_model->fetchStaffList();
// 			$this->load->view('admin/cutting_report', $data);
// 		}


// 		function cuttingReportDetail(){

// 			$start_date 	= date('Y-m-d h:i:s', strtotime($this->input->post("start_date")));
// 		 	$end_date 		= date('Y-m-d h:i:s', strtotime($this->input->post("end_date")));
// 		 	$staff	  		= $this->input->post("staff");
// 		 	// $cutting_Date 			= date('Y-m-d h:i:s', strtotime($this->input->post("Datee")));

// 		 	$condition = [
// 		 		'cutting_allocate_date >='    	=> $start_date,
// 		 		'cutting_allocate_date <=' 		=> $end_date,
// 		 		'cutting_allocate_staff_id' 	=> $staff
// 		 	];
		 	
// 		 	$cutting_report = $this->Admin_model->get_AllcuttingTableDetail($condition);

// 		 	if(count($cutting_report['cutting_allocate_specific_data']) != 0 ){
// 			 	$output = [
// 			 		'status' 	=> 'true',
// 			 		'data'  	=> $cutting_report,
// 			 	]; 
// 		 	} else {
// 		 		$output = [
// 			 		'status' 	=> 'false',
// 			 		'data'  	=> [],
// 			 	]; 
// 		 	}


// 		 	echo json_encode($output);
		 	

// 				// }

// 			}














}?>