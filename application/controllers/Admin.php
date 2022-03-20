<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->library("pagination");


        // $this->load->library('CKEditor');
        // $this->load->helper('ckeditor_helper');
        // $this->ckeditor->basePath = base_url().'asset/ckeditor/';
        // $this->ckeditor->config['toolbar'] = array(
        //                 array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
        //                                                     );
        // $this->ckeditor->config['language'] = 'it';
        // $this->ckeditor->config['width'] = '730px';
        // $this->ckeditor->config['height'] = '300px';   


		if($this->session->userdata('authAdminLockscreen') === '1' && $this->session->userdata('authAdminLogin')) {
			redirect(base_url('admin/lockscreen'));
		}	
		if(!$this->session->userdata('authAdminLogin')) {
			$this->helper->authCookieLogin();
			// $this->session->set_flashdata('loginMsg', '<div class="alert alert-warning text-center">Sorry, You are not logged in </div>');
			redirect(base_url('web-admin'));
		}
	} 
	public function index(){
		$countTable = $this->Admin_model->countPage(['user_contact_details']);
		$countTable['agent'] = $this->Admin_model->getTableById('users',['user_vendor_type'=>'Agent'])->num_rows();
		$countTable['investor'] = $this->Admin_model->getTableById('users',['user_vendor_type'=>'Investor'])->num_rows();
		$countTable['supplier'] = $this->Admin_model->getTableById('users',['user_vendor_type'=>'Supplier'])->num_rows();
		$countTable['customer'] = $this->Admin_model->getTableById('users',['user_vendor_type'=>'Customer'])->num_rows();
		$countTable['register_customer_requests'] = $this->Admin_model->getTableById('requests',['r_user_id !='=>NULL])->num_rows();
		$countTable['unregister_customer_requests'] = $this->Admin_model->getTableById('requests',['r_user_id'=>NUll])->num_rows();
		// $storage_calculator = $this->Admin_model->countStorageCalculator();
		$this->load->view('admin/index',compact('countTable'));
	}
	

	public function metaDataView() {
		$data = $this->Admin_model->fetchTable('meta_data','id');
		$this->load->view('admin/metaDataView',compact('data'));
	}

	// home page
	public function mainSection() {
		$no_of_main_section_added = $this->Admin_model->fetchBanner('home');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('home');
		$this->load->view('admin/main_section',compact('no_of_main_section_added','no_of_meta_added'));
	}

	public function mainSectionView() {
		$data = $this->Admin_model->fetchHome('main-section');
		$this->load->view('admin/main_section_view',compact('data'));
	}

	

	public function ourWorks() {
		$no_of_our_work_added = $this->Admin_model->fetchBanner('home');
		$this->load->view('admin/our_works',compact('no_of_our_work_added'));
	}

	public function ourWorksView() {
		$data = $this->Admin_model->fetchHome('our-works');
		$this->load->view('admin/our_works_view',compact('data'));
	}


	public function meetTheTeam() {
		$no_of_meet_the_team_added = $this->Admin_model->fetchBanner('home');
		$this->load->view('admin/meet_the_team',compact('no_of_meet_the_team_added'));
	}
	
	public function meetTheTeamView() {
		$data = $this->Admin_model->fetchHome('meet-the-team');
		$this->load->view('admin/meet_the_team_view',compact('data'));
	}

	public function newsAndArticles() {
		$no_of_news_and_articles_added = $this->Admin_model->fetchBanner('home');
		$this->load->view('admin/news_and_articles',compact('no_of_news_and_articles_added'));
	}
	
	public function newsAndArticlesView() {
		$data = $this->Admin_model->fetchHome('news-and-articles');
		$this->load->view('admin/news_and_articles_view',compact('data'));
	}


	// About us

	// public function warehouse() {
	// 	$no_of_banned_added = $this->Admin_model->fetchBanner('company-profile');

	// 	$this->load->view('admin/warehouse',compact('no_of_banned_added'));
		
	// }
	// public function warehouseView() {

	// 	$data = $this->Admin_model->fetchTable('company_profile','cp_id');
	// 	$this->load->view('admin/warehouse_view',compact('data'));
	// }	

	public function page($page_name="") {
		$no_of_banned_added = $this->Admin_model->fetchBanner($page_name);
		$this->load->view('admin/'.$page_name,compact('no_of_banned_added','page_name'));
	}

	public function pageView($page_name="") {
			$data = $this->Admin_model->fetchTable($page_name,$page_name[0].'_id');
			$this->load->view('admin/'.$page_name.'_view',compact('data','page_name'));
	}

	public function aboutUs() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('about_us');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('about_us');
		$this->load->view('admin/about_us',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function aboutUsView() {
			$data = $this->Admin_model->fetchTable('about_us','a_id');
			$this->load->view('admin/about_us_view',compact('data'));
	}

	public function warehouse() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('warehouse');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('warehouse');
		$this->load->view('admin/warehouse',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function warehouseView() {
			$data = $this->Admin_model->fetchTable('warehouse','w_id');
			$this->load->view('admin/warehouseView',compact('data'));
	}

	public function shed() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('shed');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('shed');
		$this->load->view('admin/shed',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function shedView() {
			$data = $this->Admin_model->fetchTable('shed','s_id');
			$this->load->view('admin/shed_view',compact('data'));
	}


	public function rcc() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('rcc');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('rcc');
		$this->load->view('admin/rcc',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function rccView() {
			$data = $this->Admin_model->fetchTable('rcc','r_id');
			$this->load->view('admin/rcc_view',compact('data'));
	}

	public function bts() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('bts');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('bts');
		$this->load->view('admin/bts',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function btsView() {
			$data = $this->Admin_model->fetchTable('bts','b_id');
			$this->load->view('admin/bts_view',compact('data'));
	}

	public function land() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('land');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('land');
		$this->load->view('admin/land',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function landView() {
			$data = $this->Admin_model->fetchTable('land','l_id');
			// print('<pre>'.$data);
			$this->load->view('admin/landView',compact('data'));
	}

	public function three_pl() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('three_pl');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('three_pl');
		$this->load->view('admin/three_pl',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function threePLView() {
			$data = $this->Admin_model->fetchTable('three_pl','t_id');
			$this->load->view('admin/threePLView',compact('data'));
	}

	public function waste_management() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('waste_management');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('waste_management');
		$this->load->view('admin/waste_management',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function wasteManagementView() {
			$data = $this->Admin_model->fetchTable('waste_management','w_id');
			$this->load->view('admin/wasteManagementView',compact('data'));
	}

	public function manpower() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('manpower');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('manpower');
		$this->load->view('admin/manpower',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function manpowerView() {
			$data = $this->Admin_model->fetchTable('manpower','m_id');
			$this->load->view('admin/manpowerView',compact('data'));
	}

	public function loaders() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('loaders');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('loaders');
		$this->load->view('admin/loaders',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function loaderView() {
			$data = $this->Admin_model->fetchTable('loaders','l_id');
			$this->load->view('admin/loaderView',compact('data'));
	}

	public function pickers_and_packers() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('pickers_and_packers');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('pickers_and_packers');
		$this->load->view('admin/pickers_and_packers',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function pickersAndPackersView() {
			$data = $this->Admin_model->fetchTable('pickers_and_packers','p_id');
			$this->load->view('admin/pickersAndPackersView',compact('data'));
	}

	public function supervisor() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('supervisor');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('supervisor');
		$this->load->view('admin/supervisor',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function supervisorView() {
			$data = $this->Admin_model->fetchTable('supervisor','s_id');
			$this->load->view('admin/supervisorView',compact('data'));
	}

	public function security() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('security');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('security');
		$this->load->view('admin/security',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function securityView() {
			$data = $this->Admin_model->fetchTable('security','s_id');
			$this->load->view('admin/securityView',compact('data'));
	}

	public function deo() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('deo');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('deo');
		$this->load->view('admin/deo',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function deoView() {
			$data = $this->Admin_model->fetchTable('deo','d_id');
			$this->load->view('admin/deoView',compact('data'));
	}


	public function material_handling() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('material_handling');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('material_handling');
		$this->load->view('admin/material_handling',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function materialHandlingView() {
			$data = $this->Admin_model->fetchTable('material_handling','m_id');
			$this->load->view('admin/materialHandlingView',compact('data'));
	}		


	public function forklift() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('forklift');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('forklift');
		$this->load->view('admin/forklift',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function forkliftView() {
			$data = $this->Admin_model->fetchTable('forklift','f_id');
			$this->load->view('admin/forkliftView',compact('data'));
	}
	
	public function clamper() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('clamper');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('clamper');
		$this->load->view('admin/clamper',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function clamperView() {
			$data = $this->Admin_model->fetchTable('clamper','c_id');
			$this->load->view('admin/clamperView',compact('data'));
	}


	public function hpt() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('hpt');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('hpt');
		$this->load->view('admin/hpt',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function hptView() {
			$data = $this->Admin_model->fetchTable('hpt','h_id');
			$this->load->view('admin/hptView',compact('data'));
	}

	public function stackers() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('stackers');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('stackers');
		$this->load->view('admin/stackers',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function stackersView() {
			$data = $this->Admin_model->fetchTable('stackers','s_id');
			$this->load->view('admin/stackersView',compact('data'));
	}

	public function technology() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('technology');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('technology');
		$this->load->view('admin/technology',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function technologyView() {
			$data = $this->Admin_model->fetchTable('technology','t_id');
			$this->load->view('admin/technologyView',compact('data'));
	}

	public function software() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('software');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('software');
		$this->load->view('admin/software',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function softwareView() {
			$data = $this->Admin_model->fetchTable('software','s_id');
			$this->load->view('admin/softwareView',compact('data'));
	}

	public function hardware() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('hardware');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('hardware');
		$this->load->view('admin/hardware',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function hardwareView() {
			$data = $this->Admin_model->fetchTable('hardware','h_id');
			$this->load->view('admin/hardwareView',compact('data'));
	}

	public function distribution_services() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('distribution_services');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('distribution_services');
		$this->load->view('admin/distribution_services',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function distributionServicesView() {
			$data = $this->Admin_model->fetchTable('distribution_services','d_id');
			$this->load->view('admin/distributionServicesView',compact('data'));
	}

	public function primary_service() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('primary_service');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('primary_service');
		$this->load->view('admin/primary_service',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function primaryServiceView() {
			$data = $this->Admin_model->fetchTable('primary_service','p_id');
			$this->load->view('admin/primaryServiceView',compact('data'));
	}

	public function secondary_service() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('secondary_service');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('secondary_service');
		$this->load->view('admin/secondary_service',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function secondaryServiceView() {
			$data = $this->Admin_model->fetchTable('secondary_service','s_id');
			$this->load->view('admin/secondaryServiceView',compact('data'));
	}

	public function d2c_services() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('d2c_services');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('d2c_services');
		$this->load->view('admin/d2c_services',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function d2cServicesView() {
			$data = $this->Admin_model->fetchTable('d2c_services','d_id');
			$this->load->view('admin/d2cServicesView',compact('data'));
	}


	public function investor() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('investor');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('investor');
		$this->load->view('admin/investor',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function investorView() {
			$data = $this->Admin_model->fetchTable('investor','i_id');
			$this->load->view('admin/investorView',compact('data'));
	}

	

	
	public function storage() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('storage');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('storage');
		$this->load->view('admin/storage',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function storageView() {
		$data = $this->Admin_model->fetchTable('storage','s_id');
		$this->load->view('admin/storageView',compact('data'));
	}


	public function privateRooms() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('private-rooms');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('private-rooms');
		$this->load->view('admin/private_rooms',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function privateRoomsView() {
		$data = $this->Admin_model->fetchTable('private_rooms','pr_id');
		$this->load->view('admin/private_rooms_view',compact('data'));
	}


	public function boxStorage() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('box-storage');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('box-storage');
		$this->load->view('admin/box_storage',compact('no_of_banned_added','no_of_meta_added'));
	}


	public function boxStorageView() {
		$data = $this->Admin_model->fetchTable('box_storage','bs_id');
		$this->load->view('admin/box_storage_view',compact('data'));		
	}


	public function utilityLocker() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('utility-locker');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('utility-locker');
		$this->load->view('admin/utility_locker',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function utilityLockerView() {
		$data = $this->Admin_model->fetchTable('utility_locker','ul_id');
		$this->load->view('admin/utility_locker_view',compact('data'));
	}

	public function bikeStorage() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('bike-storage');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('bike-storage');
		$this->load->view('admin/bike_storage',compact('no_of_banned_added','no_of_meta_added'));
	}

	public function bikeStorageView(){
		$data = $this->Admin_model->fetchTable('bike_storage','bks_id');
		$this->load->view('admin/bike_storage_view',compact('data'));
	}


	// Benefits
	public function benefits() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('benefits');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('benefits');
		$this->load->view('admin/benefits',compact('no_of_banned_added','no_of_meta_added'));
		
	}
	public function benefitsView(){
		$data = $this->Admin_model->fetchTable('benefits','benefit_id');
		$this->load->view('admin/benefits_view',compact('data'));
	}







	// RESOURCE
	public function testimonial() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('testimonial');
		$this->load->view('admin/testimonial',compact('no_of_banned_added'));
		
	}
	public function testimonialView(){
		$data = $this->Admin_model->fetchTable('testimonial','t_id');
		$this->load->view('admin/testimonial_view',compact('data'));
	}

	public function blogs() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('blogs');
		$this->load->view('admin/blogs',compact('no_of_banned_added'));
		
	}
	public function blogsView(){
		$data = $this->Admin_model->fetchTable('blogs','blog_id');
		$this->load->view('admin/blogs_view',compact('data'));
	}

	public function gallery() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('gallery');
		$this->load->view('admin/gallery',compact('no_of_banned_added'));
		
	}

	public function galleryView(){
		$data = $this->Admin_model->fetchTable('gallery','gallery_id');
		$this->load->view('admin/gallery_view',compact('data'));
	}

	public function sizeGuide(){
		$size_guide_categories = $this->Admin_model->getCatofSizeGuideLocation();
		$no_of_banned_added = $this->Admin_model->fetchBanner('size-guide');
		$this->load->view('admin/size_guide',compact('no_of_banned_added','size_guide_categories'));
		
	}

	public function sizeGuideView(){
		$size_guide_view = $this->Admin_model->fetchSizeGuide();
		$size_guide_categories = $this->Admin_model->getCatofSizeGuideLocation();

		$data = $this->Admin_model->fetchTable('size_guide','sg_id');
		$this->load->view('admin/size_guide_view',compact('data','size_guide_view','size_guide_categories'));
	}

	public function faqs() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('faqs');
		$this->load->view('admin/faqs',compact('no_of_banned_added'));
		
	}

	public function faqsView(){
		$data = $this->Admin_model->fetchTable('faqs','f_id');
		$this->load->view('admin/faqs_view',compact('data'));
	}

	public function termsAndConditions() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('terms-and-conditions');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('terms-and-conditions');
		$this->load->view('admin/terms_and_conditions',compact('no_of_banned_added','no_of_meta_added'));
		
	}
	public function termsAndConditionsView(){
		$data = $this->Admin_model->fetchTable('terms_and_conditions','tac_id');
		$this->load->view('admin/terms_and_conditions_view',compact('data'));
	}

	public function privacyPolicy() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('privacy-policy');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('privacy-policy');
		$this->load->view('admin/privacy_policy',compact('no_of_banned_added','no_of_meta_added'));
		
	}
	public function privacyPolicyView(){
		$data = $this->Admin_model->fetchTable('privacy_policy','pp_id');
		$this->load->view('admin/privacy_policy_view',compact('data'));
	}	

	public function news() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('news');
		$this->load->view('admin/news',compact('no_of_banned_added'));
		
	}

	public function newsView(){
		$data = $this->Admin_model->fetchTable('news','news_id');
		$this->load->view('admin/news_view',compact('data'));
	}


	public function contactUs() {
		$no_of_banned_added = $this->Admin_model->fetchBanner('contact-us');
		$no_of_meta_added = $this->Admin_model->fetchMetaData('contact-us');
		$this->load->view('admin/contact_us',compact('no_of_banned_added','no_of_meta_added'));
		
	}

	public function contactUsView(){
		$data = $this->Admin_model->fetchTable('contact_us','cu_id');
		$this->load->view('admin/contact_us_view',compact('data'));
	}

	public function bannerImageView(){
		$data = $this->Admin_model->fetchTable('banner_image','bi_id');
		$this->load->view('admin/banner_image_view',compact('data'));
	}

	// user contact detail
	public function userContactDetail(){


		$data = $this->Admin_model->fetchTable('user_contact_details','ucd_id');
		$this->load->view('admin/user_contact_details',compact('data'));
	}



	//Agent Lists
	public function agentList() {
		$data = $this->Admin_model->getTableById('users',['user_vendor_type'=>'Agent'])->result();
		$this->load->view('admin/agent_list',compact('data'));
	}

	//Investor Lists
	public function investorList() {
		$data = $this->Admin_model->getTableById('users',['user_vendor_type'=>'Investor'])->result();
		$this->load->view('admin/investor_list',compact('data'));
	}

	//Customer Lists
	public function customerList() {
		$data = $this->Admin_model->getTableById('users',['user_vendor_type'=>'Customer'])->result();
		$this->load->view('admin/customer_list',compact('data'));
	}

	// Customer Service Request List
	public function customer_service_request_list($user_id=null) {
		if($user_id == null){
		$requests = $this->Admin_model->getTableById('requests',['r_user_id !='=>NUll])->result();
		} else {
		$requests = $this->Admin_model->getTableById('requests',['r_user_id'=>$user_id])->result();
		}
		$this->load->view('admin/customer_service_request_list',compact('requests'));
	}

	// Unauthrised Customer Service Request List
	public function unautherised_customer_service_request_list() {
		$requests = $this->Admin_model->getTableById('requests',['r_user_id'=>NUll])->result();
		$this->load->view('admin/unautherised_customer_service_request_list',compact('requests'));
	}

	// Authrised Customer Service Request List
	public function autherised_customer_service_request_list() {
		$requests = $this->Admin_model->getTableById('requests',['r_user_id !='=>NUll])->result();
		$this->load->view('admin/autherised_customer_service_request_list',compact('requests'));
	}

	// update updateRejectRequest
	public function updateRejectRequest($r_id,$user_id,$status) {
		// echo $status;
		// echo '<br>';
		// echo 'rejected';
		// exit();
		// if($status == 'rejected'){
		$requests = $this->Admin_model->updateTable('requests',['r_id'=> $r_id],['r_status'=>'rejected']);
		// }
		// if($status == 'pending'){
		// $requests = $this->Admin_model->updateTable('requests',['r_id'=> $r_id],['r_status'=>'pending']);
		// }	
		redirect(base_url("admin/autherised_customer_service_request_list/").$user_id);
	}

	public function invoiceGenerate($r_id,$user_id) {
		$request_detail = $this->Admin_model->getTableById('requests',['r_id'=>$r_id])->row();
		$user_detail = $this->Admin_model->getTableById('users',['user_id'=>$user_id])->row();
		
		$this->load->view('admin/invoice_generate',compact('request_detail','user_detail','user_id'));
	}

	public function nonCustomerInvoiceGenerate($r_id) {
		$request_detail = $this->Admin_model->getTableById('requests',['r_id'=>$r_id])->row();
		// $user_detail = $this->Admin_model->getTableById('users',['user_id'=>$user_id])->row();
		
		$this->load->view('admin/invoice_generate',compact('request_detail'));
	}

	// insert requestInvoice
	public function requestInvoice() {
		$this->form_validation->set_rules('req_no','Request No.','trim|required');
		$this->form_validation->set_rules('req_name','Request Name','trim|required');
		$this->form_validation->set_rules('quantity','Quantity','trim|required');
		$this->form_validation->set_rules('price','Price','trim|required');
		$this->form_validation->set_rules('total','Total','trim|required');
		//$this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		} else {
			$c_insert_id = $this->Admin_model->insertRequestInvoice();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			// $dd = $this->upload_image('chennai','chennai','filename','c_id', 'c_image', $c_insert_id);
			// if($c_insert_id || $dd['status']){
			if($c_insert_id){
				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			} else {
				$datas['result']  = false;
				// $datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$datas['msg']	=  'Failed to Genrate invoice.';
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	

	public function supplierList() {
		$data = $this->Admin_model->getTableById('users',['user_vendor_type'=>'Supplier'])->result();
		$this->load->view('admin/supplier_list',compact('data'));
	}

	public function supplierProductList($user_id) {
		$data = $this->Admin_model->getTableById('supplier_products',['sp_user_id'=>$user_id])->result();
		$this->load->view('admin/supplier_product_list',compact('data'));
	}
	



	//upload file
	// public function upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
	// {
	//     // func_get_args();	
	// 	// print_r($table);
	// 	// print_r($path_folder);
	// 	// print_r($file_input_name);
	// 	// print_r($table_id_name);
	// 	// print_r($table_image_name);
	// 	// print_r($insert_id);
	// 	// exit();
	//     $ext = pathinfo($_FILES[$file_input_name]['name'], PATHINFO_EXTENSION);
	//     if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'mp4' && $ext != 'avi' && $ext != 'wmv' && $ext != 'mpg' && $ext != 'movie' && $ext != 'qt') {
	//         $this->session->set_flashdata('error', $ext.' type of files are not allowed to upload, Try again');
	//         redirect($_SERVER['HTTP_REFERER']);
	//         exit();
	//     }


	//     $new_name = "file_".strtolower(uniqid().time().'.'.pathinfo($_FILES[$file_input_name]['name'], PATHINFO_EXTENSION));


	//     $config['upload_path']          = './uploads/'.$path_folder; //file save path
	//     $config['allowed_types']        = 'png|jpg|jpeg|gif|mp4|avi|wmv|mpg|movie|qt';
	//     $config['max_size']             =  99999;
	//     $config['file_name']		    =  $new_name;

	    

	//     $this->load->library('upload', $config);
	//     if ( !$this->upload->do_upload($file_input_name) )
	//     {
	//         $error = array('error' => $this->upload->display_errors());
	//         $this->session->set_flashdata('error', $error);
	//     }else
	//     {
	//         if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif') {
	//             $type = 'video';
	//         }else{
	//             $type = 'image';
	//         }

	//         $data = array('upload_data' => $this->upload->data());
	//         $this->session->set_flashdata('success', $error);
	 
	//         // $data=array(
	//         //     'user_id' 	  => user()->id,
	//         //     'banner_type' => $type,
	//         //     'banner_file' => 'uploads/banners/'.$new_name,
	//         //     'title' 	  => $this->input->post('title'),
	//         //     'description' => $this->input->post('desciption')
	//         // );   
	        
	//         $data=array(
	//             $table_id_name		=> $insert_id,
	//             $table_image_name   => 'uploads/'.$path_folder.'/'.$new_name
	//         );
	        
	//         $data = $this->security->xss_clean($data);
	//         $this->admin_model->insert($data, $table);
	//         $this->session->set_flashdata('msg', 'File Uploaded Successfully'); 

	//     }

	//     redirect($_SERVER['HTTP_REFERER']);
	    
	// }


	public function upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id=''){

			$new_name = "file_".strtolower(uniqid().time().'.'.pathinfo($_FILES[$file_input_name]['name'], PATHINFO_EXTENSION));

			// mkdir('./uploads/'.$path_folder, 0777, true);
			// var_dump(!file_exists('./uploads/'.$path_folder));
			// var_dump(!is_dir('./uploads/'.$path_folder));
			// exit();	
			// writable
			// $s= var_dump(mkdir('./uploads/'.$path_folder, 0777));
			// echo $s;
			// exit();

			if(!file_exists('./uploads/'.$path_folder)) {
				if(!is_dir('./uploads/'.$path_folder)) {
				// mkdir('./uploads/'.$path_folder, 0777, true);
				
				try{
					if(!mkdir('./uploads/'.$path_folder, 0777, true)){
						throw new Exception('No Folder Created');
						clearstatcache();
					}
				} catch (Exception $e) {
					  $output = [
					  	'status' => false,
					  	'data' => '',
					  	'msg' => $e->getMessage()
					  ];
				 }
			   }

			}

            // writable ends


			$output = array();
	        $config['upload_path']   = './uploads/'.$path_folder; 
	        $config['allowed_types'] = 'gif|jpg|png|mp4|pdf|jpeg'; 
	        $config['max_size']      = 100500; 
	        $config['max_width']     = 10048; 
	        $config['max_height']    = 10048;  
	        $config['file_name']	 = $new_name;

            $this->load->library('upload', $config);
            // $this->upload->initialize($config);


		    // echo base_url().'uploads/'.$path_folder.'/'.$new_name;
		    // exit();
	        if ( !$this->upload->do_upload($file_input_name)) {
	           $error = array('error' => $this->upload->display_errors()); 
	           $output = [
	           	'status' => false,
	           	'data' => $error,
	           	// 'data' => '',
	           	'msg' => 'Upload file Error'
	           ];
	        }
			
	        else { 
	        	// if($error == 'Choose Image')
	           $data2 = array('upload_data' => $this->upload->data());
			   $data=array(
				    $table_image_name   => 'uploads/'.$path_folder.'/'.$new_name
				);
				
				$data = $this->security->xss_clean($data);
				if(empty($insert_id)){
					$this->db->insert($table,$data);	
				} else {
				$this->db->where($table_id_name,$insert_id);
				$this->db->update($table,$data);
				}
				// $this->session->set_flashdata('msg', 'File Uploaded Successfully'); 
	   			// echo "File uploaded Successfully!";
				 $output = [
					'status' => true,
					'data' => '',
					'msg' => 'File Uploaded Successfully'
				 ];
	        } 

	        return $output;
	   } 


	/*-------------------------------------------------------------------------
	| Method : PUHUPWAS STARTS
	|-------------------------------------------------------------------------*/

	public function insertPage($page_name = ""){
		$this->form_validation->set_rules('title','Title','trim|required');
		// $this->form_validation->set_rules('desc','Description','trim|required'); 
		// echo $_POST['desc'];
		// exit();
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		} else {
			$insert_id = $this->Admin_model->insertPage($page_name);

			$dd = $this->upload_image($page_name,$page_name,'filename',$page_name[0].'_id', 	$page_name[0].'_image', $insert_id);

			// echo '<pre>';
			// echo json_encode(strip_tags(strip_tags($dd['data']['error'])));
			// exit();
			if($insert_id){
				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			} else {
				$datas['result']  = false;
				// $datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$datas['msg']	=  'Something went wrong.';
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);

	}


	/*-------------------------------------------------------------------------
	| Method : Update Company Profile 
	|-------------------------------------------------------------------------*/
	public function updatePage($page_name = ""){
		$upd = $this->Admin_model->insertPage($page_name);
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image($page_name, $page_name,'filename',$page_name[0].'_id', 	$page_name[0].'_image', $upd);

		if($upd||$dd['status']){
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		} else {
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}
		echo json_encode($datas);
	}
	

	/*-------------------------------------------------------------------------
	| Method : insert Company Profile
	|-------------------------------------------------------------------------*/

	public function insertAboutCEO(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}

		else{
			$ac_insert_id = $this->Admin_model->insertAboutCEO();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('about_ceo','about_ceo','filename','ac_id', 'ac_image', $ac_insert_id);
			
			if($ac_insert_id && $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);

	}


	/*-------------------------------------------------------------------------
	| Method : Update Company Profile 
	|-------------------------------------------------------------------------*/

	public function updateAboutCEO(){

		$upd_id = $this->Admin_model->insertAboutCEO();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('about_ceo','about_ceo','filename','ac_id', 'ac_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}


	public function storageCalculator(){
		$data['storage_calculator_categories'] = $this->Admin_model->getCatofStorageCalculator();
		$this->load->view('admin/storage_calculator',$data);
	}



	public function storageCalculatorView(){
		$data['storage_calculator_view'] = $this->Admin_model->fetchStorageCalculator();
		$data['storage_calculator_categories'] = $this->Admin_model->getCatofStorageCalculator();
		$this->load->view('admin/storage_calculator_view',$data);
	}

	public function updateCategory(){
		$data['storage_calculator_view'] = $this->Admin_model->fetchStorageCalculator();
		$data['storage_calculator_categories'] = $this->Admin_model->getCatofStorageCalculator();
		$this->load->view('admin/update_calculator_category',$data);
	}
	
	
	public function userSquareFeet(){
		$data['user_square_feet_detail'] = $this->Admin_model->fetchUserSquareFeetDetail();
		$this->load->view('admin/user_square_feet',$data);
	}


	public function insertStorageCategory(){
		$output = array();
		$catAlready = $this->Admin_model->checkAlreadyStorageCategories(strtoupper($this->input->post('storage_cat_name')));
		if($catAlready){
		$data = [
			'scc_name' => strtoupper($this->input->post('storage_cat_name')),
			'scc_name_key' => str_replace(' ','-',strtolower($this->input->post('storage_cat_name')))
		];
		$catRes = $this->Admin_model->insertStorageCategories($data);
		$output = [
			'status' => true,
			'massage' => 'Successfully inserted category.'
			];
			$this->session->set_flashdata('success_msg',"Successfully Added");

		} else {
		$output = [
			'status' => false,
			'massage' => 'Duplicate Entry.'
			];
			$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
		}
		// if($catRes){
		// 	$this->session->flashdata('msg','Successfully Added Category');
		// } else {
		// 	$this->session->flashdata('msg','Something Went Wrong');
		// }
		echo json_encode($output);
	}



	public function updateStorageCalculatorCategory(){
		$output = array();
		$catAlready = $this->Admin_model->checkAlreadyStorageCategories(strtoupper($this->input->post('storage_cat_name')));
		if($catAlready){
		$data = [
			'scc_name' => strtoupper($this->input->post('storage_cat_name')),
			'scc_name_key' => str_replace(' ','-',strtolower($this->input->post('storage_cat_name')))
		];
		$catRes = $this->Admin_model->updateStorageCategories($data,$this->input->post('sccid'));
		$output = [
			'status' => true,
			'massage' => 'Successfully inserted category.'
			];
			$this->session->set_flashdata('success_msg',"Successfully Added");

		} else {
		$output = [
			'status' => false,
			'massage' => 'Duplicate Entry.'
			];
			$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
		}
		echo json_encode($output);
	}



	public function insertStorageCalculator(){
		$data = [
			'sc_name'    	=> $this->input->post('title'),
			'sc_cat_id'     => $this->input->post('storage_calculator_categories'),
			'sc_name_key'   => str_replace([' ', '(', ')'],'_',strtolower($this->input->post('title'))),
			'sc_name_price' => $this->input->post('squarefeet')
		];
		
		$ins_id = $this->Admin_model->insertStorageCalculator($data);
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('storage_calculator','storage_calculator','filename','sc_id', 'sc_image', $ins_id);

		if($ins_id && $dd['status']){

			$datas['result']  = true;
			$datas['msg']	=  'Success';
			$this->session->set_flashdata('success_msg',"Successfully Added");
		}
		else{

			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
		}


		echo json_encode($datas);
	}

	public function updateStorageCalculator(){
		$output = array();
		$scid = $this->input->post('scid');


		$data = [
			'sc_name'    	=> $this->input->post('title'),
			'sc_cat_id'     => $this->input->post('storage_calculator_categories'),
			'sc_name_key'   => str_replace([' ', '(', ')'],'_',strtolower($this->input->post('title'))),
			'sc_name_price' => $this->input->post('squarefeet')
		];
		
		$upd_id = $this->Admin_model->updateStorageCalculator($data,$scid);
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('storage_calculator','storage_calculator','filename','sc_id', 'sc_image', $upd_id);
		if($upd_id||$dd['status']) {
			$output = [
				'status' => true,
				'message' => 'Successfully Updated Calculator.'
				];
				$this->session->set_flashdata('success_msg', 'Successfully Updated');
			
		} else {
			$output = [
				'status' => false,
				'message' => 'You have not made any changes.'
				];
				$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
			}

		echo json_encode($output);
	}


	/*-------------------------------------------------------------------------
	| Method : insert CRI
	|-------------------------------------------------------------------------*/

	public function insertCRI(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}

		else{
			$cri_insert_id = $this->Admin_model->insertCRI();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('corpoate_responsibility_initiative','corpoate_responsibility_initiative','filename','cri_id', 'cri_image', $cri_insert_id);
			
			if($cri_insert_id && $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);

	}


	/*-------------------------------------------------------------------------
	| Method : Update CRI 
	|-------------------------------------------------------------------------*/

	public function updateCRI(){

		$upd_id = $this->Admin_model->insertCRI();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('corpoate_responsibility_initiative','corpoate_responsibility_initiative','filename','cri_id', 'cri_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}





	/*-------------------------------------------------------------------------
	| Method : insert CovidPrecautions
	|-------------------------------------------------------------------------*/

	public function insertCovidPrecautions(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}
		else{
			$cp_insert_id = $this->Admin_model->insertCovidPrecautions();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('covid_precautions','covid_precautions','filename','cp_id', 'cp_image', $cp_insert_id);
			
			if($cp_insert_id || $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);

	}


	/*-------------------------------------------------------------------------
	| Method : Update CovidPrecautions
	|-------------------------------------------------------------------------*/

	public function updateCovidPrecautions(){

		$upd_id = $this->Admin_model->insertCovidPrecautions();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('covid_precautions','covid_precautions','filename','cp_id', 'cp_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}






	/*-------------------------------------------------------------------------
	| Method : insert Private Room
	|--------------------------------------------------------------------------*/

	public function insertprivateRooms(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}
		else{
			$pr_insert_id = $this->Admin_model->insertprivateRooms();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('private_rooms','private_rooms','filename','pr_id', 'pr_image', $pr_insert_id);
			
			if($pr_insert_id || $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);

	}


	/*-------------------------------------------------------------------------
	| Method : Update Private Room
	|-------------------------------------------------------------------------*/

	public function updateprivateRooms(){

		$upd_id = $this->Admin_model->insertprivateRooms();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('private_rooms','private_rooms','filename','pr_id', 'pr_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}







	/*-------------------------------------------------------------------------
	| Method : insert Box Storage
	|--------------------------------------------------------------------------*/

	public function insertboxStorage(){
		
		$this->form_validation->set_rules('title','Title','trim');
		// $this->form_validation->set_rules('desc','Description','trim');
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}
		else{
			$bs_insert_id = $this->Admin_model->insertboxStorage();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('box_storage','box_storage','filename','bs_id', 'bs_image', $bs_insert_id);
			
			if($bs_insert_id || $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);

	}


	/*-------------------------------------------------------------------------
	| Method : Update Box Storage
	|-------------------------------------------------------------------------*/

	public function updateboxStorage(){

		$upd_id = $this->Admin_model->insertboxStorage();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('box_storage','box_storage','filename','bs_id', 'bs_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}





		/*-------------------------------------------------------------------------
	| Method : insert Utility Storage
	|--------------------------------------------------------------------------*/

	public function insertutilityLocker(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}else{
			$ul_insert_id = $this->Admin_model->insertutilityLocker();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('utility_locker','utility_locker','filename','ul_id', 'ul_image', $ul_insert_id);
			
			if($ul_insert_id && $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);

	}


	/*-------------------------------------------------------------------------
	| Method : Update Utility Storage
	|-------------------------------------------------------------------------*/

	public function updateutilityLocker(){

		$upd_id = $this->Admin_model->insertutilityLocker();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('utility_locker','utility_locker','filename','ul_id', 'ul_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}






	/*-------------------------------------------------------------------------
	| Method : insert Bike Storage
	|--------------------------------------------------------------------------*/

	public function insertbikeStorage(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}else{
			$bks_insert_id = $this->Admin_model->insertbikeStorage();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('bike_storage','bike_storage','filename','bks_id', 'bks_image', $bks_insert_id);
			
			if($bks_insert_id || $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update Bike Storage
	|-------------------------------------------------------------------------*/

	public function updatebikeStorage(){

		$upd_id = $this->Admin_model->insertbikeStorage();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('bike_storage','bike_storage','filename','bks_id', 'bks_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}





	/*-------------------------------------------------------------------------
	| Method : insert Benefits
	|--------------------------------------------------------------------------*/

	public function insertBenefits(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}else{
			$benefit_insert_id = $this->Admin_model->insertBenefits();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('benefits','benefits','filename','benefit_id', 'benefit_image', $benefit_insert_id);
			
			if($benefit_insert_id || $dd['status']){
				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{
				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update Benefits
	|-------------------------------------------------------------------------*/

	public function updateBenefits(){

		$upd_id = $this->Admin_model->insertBenefits();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('benefits','benefits','filename','benefit_id', 'benefit_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}



	/*-------------------------------------------------------------------------
	| Method : insert insertdelhiMundka
	|--------------------------------------------------------------------------*/

	public function insertdelhiMundka(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}else{
			$dm_insert_id = $this->Admin_model->insertdelhiMundka();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('delhi_mundka','delhi_mundka','filename','dm_id', 'dm_image', $dm_insert_id);
			
			if($dm_insert_id || $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updatedelhiMundka
	|-------------------------------------------------------------------------*/

	public function updatedelhiMundka(){

		$upd_id = $this->Admin_model->insertdelhiMundka();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('delhi_mundka','delhi_mundka','filename','dm_id', 'dm_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}





	/*-------------------------------------------------------------------------
	| Method : insert insertgurgaonHondachowk
	|--------------------------------------------------------------------------*/

	public function insertgurgaonHondachowk(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		} else {
			$ghc_insert_id = $this->Admin_model->insertgurgaonHondachowk();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('gurgaon_hondachowk','gurgaon_hondachowk','filename','ghc_id', 'ghc_image', $ghc_insert_id);
			
			if($ghc_insert_id || $dd['status']){
				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else {

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updategurgaonHondachowk
	|-------------------------------------------------------------------------*/

	public function updategurgaonHondachowk(){

		$upd_id = $this->Admin_model->insertgurgaonHondachowk();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('gurgaon_hondachowk','gurgaon_hondachowk','filename','ghc_id', 'ghc_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}



	/*-------------------------------------------------------------------------
	| Method : insert insertpuneRanjangaon
	|--------------------------------------------------------------------------*/

	public function insertpuneRanjangaon(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}else{
			$prg_insert_id = $this->Admin_model->insertpuneRanjangaon();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('pune_ranjangaon','pune_ranjangaon','filename','prg_id', 'prg_image', $prg_insert_id);
			
			if($prg_insert_id || $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updatepuneRanjangaon
	|-------------------------------------------------------------------------*/

	public function updatepuneRanjangaon(){

		$upd_id = $this->Admin_model->insertpuneRanjangaon();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('pune_ranjangaon','pune_ranjangaon','filename','prg_id', 'prg_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : insert insertChennai
	|--------------------------------------------------------------------------*/

	public function insertChennai(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}else{
			$c_insert_id = $this->Admin_model->insertChennai();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('chennai','chennai','filename','c_id', 'c_image', $c_insert_id);
			
			if($c_insert_id || $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updateChennai
	|-------------------------------------------------------------------------*/

	public function updateChennai(){

		$upd_id = $this->Admin_model->insertChennai();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('chennai','chennai','filename','c_id', 'c_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : insert insertHyderabad
	|--------------------------------------------------------------------------*/

	public function insertHyderabad(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}else{
			$h_insert_id = $this->Admin_model->insertHyderabad();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('hyderabad','hyderabad','filename','h_id', 'h_image', $h_insert_id);
			
			if($h_insert_id || $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updateHyderabad
	|-------------------------------------------------------------------------*/

	public function updateHyderabad(){

		$upd_id = $this->Admin_model->insertHyderabad();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('hyderabad','hyderabad','filename','h_id', 'h_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : insert insertKolkatta
	|--------------------------------------------------------------------------*/

	public function insertKolkatta(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}else{
			$k_insert_id = $this->Admin_model->insertKolkatta();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('kolkatta','kolkatta','filename','k_id', 'k_image', $k_insert_id);
			
			if($k_insert_id || $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updateKolkatta
	|-------------------------------------------------------------------------*/

	public function updateKolkatta(){

		$upd_id = $this->Admin_model->insertKolkatta();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('kolkatta','kolkatta','filename','k_id', 'k_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : insert insertMumbai
	|--------------------------------------------------------------------------*/

	public function insertMumbai(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}else{
			$m_insert_id = $this->Admin_model->insertMumbai();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('mumbai','mumbai','filename','m_id', 'm_image', $m_insert_id);
			
			if($m_insert_id || $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updateMumbai
	|-------------------------------------------------------------------------*/

	public function updateMumbai(){

		$upd_id = $this->Admin_model->insertMumbai();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('mumbai','mumbai','filename','m_id', 'm_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}



	/*-------------------------------------------------------------------------
	| Method : insert insertGoa
	|--------------------------------------------------------------------------*/

	public function insertGoa(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}else{
			$g_insert_id = $this->Admin_model->insertGoa();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('goa','goa','filename','g_id', 'g_image', $g_insert_id);
			
			if($g_insert_id || $dd['status']){
				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{
				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updateGoa
	|-------------------------------------------------------------------------*/

	public function updateGoa(){

		$upd_id = $this->Admin_model->insertGoa();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('goa','goa','filename','g_id', 'g_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : insert insertTestimonial
	|--------------------------------------------------------------------------*/

	public function insertTestimonial(){
		// echo json_encode($_POST);
		// exit();

		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		} else {
			$t_insert_id = $this->Admin_model->insertTestimonial();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('testimonial','testimonial','filename','t_id', 't_image', $t_insert_id);
			if($t_insert_id || $dd['status']){
				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{
				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updateTestimonial
	|-------------------------------------------------------------------------*/

	public function updateTestimonial(){

		$upd_id = $this->Admin_model->insertTestimonial();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('testimonial','testimonial','filename','t_id', 't_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}




	/*-------------------------------------------------------------------------
	| Method : insert Blogs
	|--------------------------------------------------------------------------*/

	public function insertBlogs(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		} else {
			$blog_insert_id = $this->Admin_model->insertBlogs();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('blogs','blogs','filename','blog_id', 'blog_image', $blog_insert_id);
			
			if($blog_insert_id && $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update Blogs
	|-------------------------------------------------------------------------*/

	public function updateBlogs(){

		$upd_id = $this->Admin_model->insertBlogs();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('blogs','blogs','filename','blog_id', 'blog_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : insert insertGallery
	|--------------------------------------------------------------------------*/

	public function insertGallery(){
		
		// $this->form_validation->set_rules('title','Title','trim');
		// $this->form_validation->set_rules('desc','Description','trim');
		
		// if($this->form_validation->run() == false){
		// 	$datas['result'] = false;
		// 	$datas['msg']	 = validation_errors();
		// } else {
			// $gallery_insert_id = $this->Admin_model->insertGallery();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('gallery','gallery','filename','gallery_id', 'gallery_image');
			
			if($dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		// }

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updateGallery
	|-------------------------------------------------------------------------*/

	public function updateGallery(){

		$upd_id = $this->input->post('galleryid');
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('gallery','gallery','filename','gallery_id', 'gallery_image', $upd_id);
		if($dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}


	public function insertSizeGuideLocation(){
		
			$output = array();
			$catAlready = $this->Admin_model->checkAlreadySizeGuideLocation(strtoupper($this->input->post('location_name')));
			if($catAlready){
			$data = [
				'sgl_name' => strtoupper($this->input->post('location_name')),
				'sgl_name_key' => str_replace(' ','-',strtolower($this->input->post('location_name')))
			];
			$catRes = $this->Admin_model->insertSizeGuideLocation($data);
			$output = [
				'status' => true,
				'massage' => 'Successfully inserted category.'
				];
				$this->session->set_flashdata('success_msg',"Successfully Added");

			} else {
			$output = [
				'status' => false,
				'massage' => 'Duplicate Entry.'
				];
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
			// if($catRes){
			// 	$this->session->flashdata('msg','Successfully Added Category');
			// } else {
			// 	$this->session->flashdata('msg','Something Went Wrong');
			// }
			echo json_encode($output);
		
			
	}


	/*-------------------------------------------------------------------------
	| Method : insert insertsizeGuide
	|--------------------------------------------------------------------------*/

	
	public function insertsizeGuide(){
		
		$this->form_validation->set_rules('total_size','Total Size','trim|required|is_unique[size_guide.sg_total_size]');
		$this->form_validation->set_rules('item','Item','trim|required');
		$this->form_validation->set_rules('flat_size','Flat Size','trim|required');
		
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		} else {
			$sg_insert_id = $this->Admin_model->insertsizeGuide();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			// $dd = $this->upload_image('size_guide','size_guide','filename','sg_id', 'sg_image', $sg_insert_id);
			
			if($sg_insert_id){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  'Something went wrong.';
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updatesizeGuide
	|-------------------------------------------------------------------------*/

	public function updatesizeGuide(){

		$upd_id = $this->Admin_model->insertsizeGuide();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		// $dd = $this->upload_image('size_guide','size_guide','filename','sg_id', 'sg_image', $upd_id);
		if($upd_id) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  'Something went wrong';
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}



	/*-------------------------------------------------------------------------
	| Method : insert insertFaqs
	|--------------------------------------------------------------------------*/

	public function insertFaqs(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		} else {
			$f_insert_id = $this->Admin_model->insertFaqs();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			// $dd = $this->upload_image('faqs','faqs','filename','f_id', 'f_image', $f_insert_id);
			
			if($f_insert_id ){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updateFaqs
	|-------------------------------------------------------------------------*/

	public function updateFaqs(){

		$upd_id = $this->Admin_model->insertFaqs();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		// $dd = $this->upload_image('faqs','faqs','filename','f_id', 'f_image', $upd_id);
		if($upd_id) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}



	/*-------------------------------------------------------------------------
	| Method : insert insertTermsAndConditions
	|--------------------------------------------------------------------------*/

	public function insertTermsAndConditions(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		} else {
			$tac_insert_id = $this->Admin_model->insertTermsAndConditions();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('terms_and_conditions','terms_and_conditions','filename','tac_id', 'tac_image', $tac_insert_id);
			
			if($tac_insert_id || $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updateTermsAndConditions
	|-------------------------------------------------------------------------*/

	public function updateTermsAndConditions(){

		$upd_id = $this->Admin_model->insertTermsAndConditions();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('terms_and_conditions','terms_and_conditions','filename','tac_id', 'tac_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}




	/*-------------------------------------------------------------------------
	| Method : insert insertPrivacyPolicy
	|--------------------------------------------------------------------------*/

	public function insertPrivacyPolicy(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		} else {
			$pp_insert_id = $this->Admin_model->insertPrivacyPolicy();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('privacy_policy','privacy_policy','filename','pp_id', 'pp_image', $pp_insert_id);
			
			if($pp_insert_id || $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updatePrivacyPolicy
	|-------------------------------------------------------------------------*/

	public function updatePrivacyPolicy(){

		$upd_id = $this->Admin_model->insertPrivacyPolicy();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('privacy_policy','privacy_policy','filename','pp_id', 'pp_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}




	/*-------------------------------------------------------------------------
	| Method : insert News
	|--------------------------------------------------------------------------*/

	public function insertNews(){
		
		$this->form_validation->set_rules('title','Title','trim|required');
		// // $this->form_validation->set_rules('desc','Description','trim|required');  
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}else{
			$news_insert_id = $this->Admin_model->insertNews();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('news','news','filename','news_id', 'news_image', $news_insert_id);
			
			if($news_insert_id && $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update Bike Storage
	|-------------------------------------------------------------------------*/

	public function updateNews(){

		$upd_id = $this->Admin_model->insertNews();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('news','news','filename','news_id', 'news_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}





	/*-------------------------------------------------------------------------
	| Method : insert insertContactUs
	|--------------------------------------------------------------------------*/

	public function insertContactUs(){
		
		// $this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('phone','Phone','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('working_hours','Working Hours','trim|required');
		// $this->form_validation->set_rules('download_brochure','Download Brochure','trim|required');
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}else{
			$cu_insert_id = $this->Admin_model->insertContactUs();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('contact_us','contact_us','filename','cu_id', 'cu_brochure', $cu_insert_id);
			
			if($cu_insert_id){
				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updateContactUs 
	|-------------------------------------------------------------------------*/

	public function updateContactUs(){

		$upd_id = $this->Admin_model->insertContactUs();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		// $dd = $this->upload_image('contact_us','contact_us','filename','cu_id', 'cu_image', $upd_id);
		if($upd_id) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}





	/*-------------------------------------------------------------------------
	| Method : insert addBannerImage
	|--------------------------------------------------------------------------*/

	public function addBannerImage(){


		$this->form_validation->set_rules('filename','Filename','trim');
		$this->form_validation->set_rules('image_page','Image Page','trim');
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}else{
			$bi_insert_id = $this->Admin_model->addBannerImage();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('banner_image','banner_image','filename','bi_id', 'bi_image', $bi_insert_id);
			
			if($bi_insert_id && $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updateBannerImage 
	|-------------------------------------------------------------------------*/

	public function updateBannerImage(){

		$upd_id = $this->Admin_model->addBannerImage();
		// // upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('banner_image','banner_image','filename','bi_id', 'bi_image', $upd_id);
		if($upd_id && $dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}

	/*-------------------------------------------------------------------------
	| Method : insert addMetaData
	|--------------------------------------------------------------------------*/

	public function addMetaData(){
	

		$this->form_validation->set_rules('meta_title','Meta Title','trim');
		$this->form_validation->set_rules('meta_keyword','Meta Keyword','trim');
		
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}else{
			$bi_insert_id = $this->Admin_model->addMetaData();
			
			
			if($bi_insert_id){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  "Something went wrong.";
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updateMetaData 
	|-------------------------------------------------------------------------*/

	public function updateMetaData(){

		$upd_id = $this->Admin_model->addMetaData();
		// // upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		
		if($upd_id) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  "Something went wrong.";
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}




	/*-------------------------------------------------------------------------
	| Method : insert insertHome
	|--------------------------------------------------------------------------*/

	public function insertHome(){


		$this->form_validation->set_rules('filename','Filename','trim');
		$this->form_validation->set_rules('image_page','Image Page','trim');
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}else{
			$home_insert_id = $this->Admin_model->insertHome();
			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
			$dd = $this->upload_image('home','home','filename','home_id', 'home_image', $home_insert_id);
			
			if($home_insert_id && $dd['status']){

				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{

				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : Update updateHome 
	|-------------------------------------------------------------------------*/

	public function updateHome(){

		$upd_id = $this->Admin_model->insertHome();
		// // upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('home','home','filename','home_id', 'home_image', $upd_id);
		if($upd_id||$dd['status']) {
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		}
		else{
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}

		echo json_encode($datas);
	}


	/*-------------------------------------------------------------------------
	| Method : insert insertSupplierProduct 
	|-------------------------------------------------------------------------*/

	public function insertSupplierProduct() {

		$this->form_validation->set_rules('product_name','Product Name','trim|required');
		$this->form_validation->set_rules('product_type','Product Type','trim|required');
		$this->form_validation->set_rules('product_price','Title','trim|required');
		// $this->form_validation->set_rules('desc','Description','trim|required'); 
		
		if($this->form_validation->run() == false){
			$datas['result'] = false;
			$datas['msg']	 = validation_errors();
		}

		else {
			
			$insert_id = $this->Admin_model->insertSupplierProduct();
			
			$dd = $this->upload_image('supplier_products','supplier_products','filename','sp_id', 	'sp_image', $insert_id);

			// echo '<pre>';
			// echo json_encode(strip_tags(strip_tags($dd['data']['error'])));
			// exit();
			
			if($insert_id && $dd['status']){
				$datas['result']  = true;
				$datas['msg']	=  'Success';
				$this->session->set_flashdata('success_msg',"Successfully Added");
			}
			else{
				$datas['result']  = false;
				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
			}
		}

		echo json_encode($datas);

	}


	/*-------------------------------------------------------------------------
	| Method : Update Supplier Product
	|-------------------------------------------------------------------------*/
	public function updateSupplierProduct(){
		$updated_id = $this->Admin_model->insertSupplierProduct();
		// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
		$dd = $this->upload_image('supplier_products','supplier_products','filename','sp_id', 	'sp_image', $updated_id);

		if($updated_id||$dd['status']){
			$datas['result']  = true;
			$datas['msg']	=  "Success";
			$this->session->set_flashdata('success_msg', 'Successfully Updated');
		} else { 
			$datas['result']  = false;
			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
		}
		echo json_encode($datas);
	}





// /*-------------------------------------------------------------------------
// 	| Method : insert insertMeetTheTeam
// 	|--------------------------------------------------------------------------*/

// 	public function insertMeetTheTeam(){


// 		$this->form_validation->set_rules('filename','Filename','trim');
// 		$this->form_validation->set_rules('image_page','Image Page','trim');
		
// 		if($this->form_validation->run() == false){
// 			$datas['result'] = false;
// 			$datas['msg']	 = validation_errors();
// 		}else{
// 			$home_insert_id = $this->Admin_model->insertMeetTheTeam();
// 			// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
// 			$dd = $this->upload_image('home','home','filename','home_id', 'home_image', $home_insert_id);
			
// 			if($home_insert_id && $dd['status']){

// 				$datas['result']  = true;
// 				$datas['msg']	=  'Success';
// 				$this->session->set_flashdata('success_msg',"Successfully Added");
// 			}
// 			else{

// 				$datas['result']  = false;
// 				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
// 				$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
// 			}
// 		}

// 		echo json_encode($datas);
// 	}


// 	/*-------------------------------------------------------------------------
// 	| Method : Update updateMeetTheTeam 
// 	|-------------------------------------------------------------------------*/

// 	public function updateMeetTheTeam(){

// 		$upd_id = $this->Admin_model->insertMeetTheTeam();
// 		// // upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
// 		$dd = $this->upload_image('home','home','filename','home_id', 'home_image', $upd_id);
// 		if($upd_id && $dd['status']) {
// 			$datas['result']  = true;
// 			$datas['msg']	=  "Success";
// 			$this->session->set_flashdata('success_msg', 'Successfully Updated');
// 		}
// 		else{
// 			$datas['result']  = false;
// 			$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
// 			$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
// 		}

// 		echo json_encode($datas);
// 	}





// 	-------------------------------------------------------------------------
// 		| Method : insert insertNewsAndArticles
// 		|--------------------------------------------------------------------------

// 		public function insertNewsAndArticles(){


// 			$this->form_validation->set_rules('filename','Filename','trim');
// 			$this->form_validation->set_rules('image_page','Image Page','trim');
			
// 			if($this->form_validation->run() == false){
// 				$datas['result'] = false;
// 				$datas['msg']	 = validation_errors();
// 			}else{
// 				$home_insert_id = $this->Admin_model->insertNewsAndArticles();
// 				// upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
// 				$dd = $this->upload_image('home','home','filename','home_id', 'home_image', $home_insert_id);
				
// 				if($home_insert_id && $dd['status']){

// 					$datas['result']  = true;
// 					$datas['msg']	=  'Success';
// 					$this->session->set_flashdata('success_msg',"Successfully Added");
// 				}
// 				else{

// 					$datas['result']  = false;
// 					$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
// 					$this->session->set_flashdata('warn_msg',"Failed to Add, Please try again.");
// 				}
// 			}

// 			echo json_encode($datas);
// 		}


// 		/*-------------------------------------------------------------------------
// 		| Method : Update updateNewsAndArticles 
// 		|-------------------------------------------------------------------------*/

// 		public function updateNewsAndArticles(){

// 			$upd_id = $this->Admin_model->insertNewsAndArticles();
// 			// // upload_image($table='',$path_folder='',$file_input_name='',$table_id_name='', $table_image_name='', $insert_id='')
// 			$dd = $this->upload_image('home','home','filename','home_id', 'home_image', $upd_id);
// 			if($upd_id && $dd['status']) {
// 				$datas['result']  = true;
// 				$datas['msg']	=  "Success";
// 				$this->session->set_flashdata('success_msg', 'Successfully Updated');
// 			}
// 			else{
// 				$datas['result']  = false;
// 				$datas['msg']	=  strip_tags(strip_tags($dd['data']['error']));
// 				$this->session->set_flashdata('warn_msg', 'You have not made any changes.');
// 			}

// 			echo json_encode($datas);
// 		}
















// 	/*-------------------------------------------------------------------------
// 	| Method : Blank	
// 	|-------------------------------------------------------------------------*/
// 	public function blank(){

// 		$this->load->view('admin/blank');
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Setting	
// 	|-------------------------------------------------------------------------*/
	public function setting(){
		$this->form_validation->set_rules('opassword','Old Password','trim|required');
		$this->form_validation->set_rules('npassword','New Password','trim|required|min_length[8]');
		$this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[npassword]');

		if($this->form_validation->run() == false){

			$data['error'] = validation_errors();
			$this->load->view('admin/setting',$data);				
		}

		else{
			$uid = $this->session->userdata('authAdminLogin');
			$result   = $this->Admin_model->oldPasswordCheck($uid);

			if($result) {

				$result = $this->Admin_model->changePassword($uid);

				if($result) {

					$this->session->set_flashdata('success_msg',"Password Updated!");
					redirect($this->agent->referrer());

				} 
				else {

					$this->session->set_flashdata('error_msg',"Wrong Password");
					redirect($this->agent->referrer());

				}
			}
			else{

				$this->session->set_flashdata('warn_msg',"Old Password is incorrect!");
				redirect($this->agent->referrer());						
			}
		}
	}

	/*-------------------------------------------------------------------------
	| Method : Admin set lock screen
	|-------------------------------------------------------------------------*/
	public function set_lockscreen() {

		$result = $this->Admin_model->setLockscreen();
		redirect(base_url('admin/lockscreen'));

	}


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
// 	// echo json_encode($this->input->post('raw_material_name'));
// 	// exit();

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

// // P Starts
// public function updateNewAllocatedWork() {
// 	// echo json_encode('puhupwas');
// 	// echo json_encode($_POST);
// 	// exit();
// 	$allocated_id = $this->input->post('edit_allocated_id');
	
	
// 	$result = $this->Admin_model->updateNewAllocatedWork($allocated_id);
// 	// echo json_encode('puhupwas');
// 	// echo json_encode($result);
// 	// exit();

// 	// if ($result['status']) {
// 		$result3 = $this->Admin_model->UpdateManufacturingInwards($result['insertId'],$allocated_id);
		
// 		$result2 = $this->Admin_model->updateRollsAfterWorkAllocation($result['insertId'],$allocated_id);
// 		if ($result2) {
// 			$chnageBeamStatus = $this->Admin_model->changeBeamStatusOnAdd($result['insertId'], $this->input->post('Beam'));

// 			// $decreaseRawMaterialWeight = $this->Admin_model->decreaseRawMaterialWeight($this->input->post('raw_material_weight'), $this->input->post('raw_material_id'), $this->input->post('cone_given'));
// 			$decreaseRawMaterialWeight = $this->Admin_model->decreaseInwardMaterialWeight();
// 			if ($chnageBeamStatus) {
// 				$output = array(
// 					'status' => 'success',
// 					'msg' => 'Successfully made changes'
// 				);
// 			}
// 		}
// 	// }
// 	exit(json_encode($output));
// }
// // P Ends

// // puhpwas
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
//  	$total_roll_length = 0;
//  	$total_roll_weight = 0;



//  	foreach ($allocated_beam_data as $key => $value) {
//  		// $data = $this->get_RollsCreated_allocated_work_id($value->allocated_work_id);
//  		$meter[] = $value->allocated_work_meters_used;
//  		$cone[] = $value->allocated_work_cone_given;
//  		$wastage[] = $value->allocated_work_wastage;
//  		$total_of_raw_materials_used[] = $this->get_total_of_raw_materials_used($value->allocated_work_id);
		
// 		$no_of_rolls_of_allocated_work_id = $this->Admin_model->no_of_rolls_of_allocated_work_id($value->allocated_work_id); 	

// 		$roll_length = $this->get_RollsCreated_allocated_work_id($value->allocated_work_id, 'length');
// 		// $roll_length_html = implode($roll_length[0][0]);
// 		$roll_weight = $this->get_RollsCreated_allocated_work_id($value->allocated_work_id, 'weight');
// 		// $roll_weight_html = implode($roll_weight[0][0]);


		
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
//          <td>'.$roll_length['html'].'</td>
//          <td>'.$roll_weight['html'].'</td>
//          <td>'.$this->get_RollsCreated_allocated_work_id($value->allocated_work_id, 'name').'</td>
//          <td>'.$no_of_rolls_of_allocated_work_id.'</td>
//          <td>'.date('d-m-Y', strtotime($value->allocated_work_current_date)).'</td>
//          </tr>';


//         $newRollWeight += $this->get_RollsCreated_allocated_work_id_total_weight($value->allocated_work_id);
//         $totalNoofRoll += $no_of_rolls_of_allocated_work_id;
//  	$total_roll_length += $roll_length['roll_total_value'];
//  	$total_roll_weight += $roll_weight['roll_total_value'];

//  }

//  		$tfoot = '<tr>
//          <th colspan="3" class="text-center">Total</th>
//          <th>'.array_sum($meter).'m</th>
//          <th>'.array_sum($total_of_raw_materials_used).'kg</th>
//          <th>'.array_sum($wastage).'kg</th>
//          <th ></th>
//          <th ></th>
//          <th>'.$total_roll_length.'</th>
//          <th>'.$total_roll_weight.'</th>
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
//  	$roll_total_value = 0;
//  	$html = '<table class="table table-bordered">';
//  	foreach ($data  as $key => $value){
 	
//  	// $html .= '<tr>
//     // <th>'.$value->new_roll_weight.'</th>
//     // </tr>';

//     	if($roll == 'typef'){
//     		$roll_total_value = '';
// 	 		$html .= '<tr>
// 	          <th>'.$value->new_roll_typef.'</th>
// 	        </tr>';
// 	    } else if($roll == 'type'){
// 	    	$roll_total_value = '';
// 	    	$roll_name = '';
// 	    	if(!empty($value->new_roll_type)){$roll_name = $this->name->getRollTypeDetalisbyRollId($value->new_roll_type)->roll_types_name;}
// 	 		$html .= '<tr>
// 	          <th>'.$roll_name.'</th>
// 	        </tr>';
// 	    } else if($roll == 'length'){
// 	    	$roll_total_value += $value->new_roll_length;
// 	 		$html .= '<tr>
// 	          <th>'.$value->new_roll_length.'</th>
// 	        </tr>';
// 	    }else if($roll == 'name'){
// 	    	$roll_total_value = '';
// 	 		$html .= '<tr>
// 	          <th>'.$value->new_roll_name.'</th>
// 	        </tr>';
// 	    } else if ($roll == 'weight'){
// 	    	$roll_total_value += $value->new_roll_weight;
// 	 		$html .= '<tr>
// 	          <th>'.$value->new_roll_weight.'</th>
// 	       </tr>';
// 	    }

//  	}
//  	$html .= '</table>';
//  	if(in_array($roll, ['length','weight'])){
// 	 	$all_data = [
// 	 		'html' => $html,
// 	 		'roll_total_value' => $roll_total_value
// 	 		];
//  		return $all_data;
//  	} else {
//  		return $html;	
//  	}
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
// 	// P Starts
// 	$data['inward'] = $this->Admin_model->Get_all_new_raw_materials();
// 	$data['manufacturing_work_allocate_inwards_used'] = $this->Admin_model->get_raw_materials_used($work_id);
// 	$data['new_rolls_created_finished'] = $this->Admin_model->getAllRollsFromWorkId_finished($work_id);
// 	$data['new_rolls_created_unfinished'] = $this->Admin_model->getAllRollsFromWorkId_unfinished($work_id);
// 	// P Ends
// 	// echo '<pre>';
// 	// print_r($data['new_rolls_created_unfinished']);
// 	// exit();

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

// 			if($res) {
// 				$this->session->set_flashdata('success_msg',"Success!");
// 				redirect(base_url().'admin/manage-raw-materials');
// 			}
// 			else {
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
// 			if($beam_id != 0){
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
// 					'beams_which_r_not_used' => $this->Admin_model->beams_which_r_not_used()
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
// 				'beams_which_r_not_used' => null
// 			);
// 		}
// 		}// end beam_id !=0 
// 		else{
// 			$output = array(
// 					'status' => 'NoBeamInMachine',
// 					'beam_id' => null,
// 					'beam_details' => null,
// 					'BeamLeft' => null,
// 					'beams_which_r_not_used' => null
// 				);
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

}
?>
