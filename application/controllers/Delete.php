<?php 

	class Delete extends CI_Controller{

		// Customer Panel




		//Delete Company Profile
		public function deleteServiceRequest(){

			$res = $this->Customer_model->deleteTable('requests','r_id',$this->input->post('rid'));
			
			if($res){

				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{

				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}

		//Delete deleteSupplier
		public function deleteSupplier(){

			$res = $this->Supplier_model->deleteTable('users','user_id',$this->input->post('sid'));
			
			if($res){

				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{

				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}

		//Delete deleteSupplierProduct
		public function deleteSupplierProduct(){

			$res = $this->Supplier_model->deleteTable('supplier_products','sp_id',$this->input->post('spid'));
			
			if($res){

				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{

				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}

		//Delete deleteSupplierProduct
		public function deleteInvoice(){

			$res = $this->Customer_model->deleteTable('request_invoice','ri_id',$this->input->post('riid'));
			
			if($res){

				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{

				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}


		public function deleteAllInvoice(){
			$res = $this->Customer_model->deleteAllDataTable('request_invoice');
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}



		//Delete Page
		public function deletePage($page_name = ""){

			$res = $this->Admin_model->deleteTable($page_name,$page_name[0].'_id',$this->input->post('sid'));
			
			if($res){

				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{

				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}

		//Delete Meta Data
		public function deleteMetaData(){

			
			$res = $this->Admin_model->deleteTable('meta_data','id',$this->input->post('mid'));
			if($res){

				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{

				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}

			//Delete About CEO
		public function deleteAboutCEO(){

			
			$res = $this->Admin_model->deleteTable('about_ceo','ac_id',$this->input->post('acid'));
			if($res){

				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{

				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}

		//Delete Calculator
		public function deleteStorageCalculator(){
				// echo 'hii';
				// exit():
			$res = $this->Admin_model->deleteTable('storage_calculator','sc_id',$this->input->post('scid'));
			
			if($res){
				// if($this->Admin_model->countStorageCalculator() == 0){
				// $dc = $this->Admin_model->deleteCategory($this->input->post('scid'));
				// }
				// echo $dc;
				// exit();
				// if($dc){
					$this->session->set_flashdata('success_msg',"Deleted Successfully!");
					redirect($this->agent->referrer());
				// }
			}
			else{

				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}

		//Delete Calculator Category
		public function deleteStorageCalculatorCategory(){
				// echo 'hii';
				// exit():
			$res = $this->Admin_model->deleteTable('storage_calculator_categories','scc_id',$this->input->post('sccid'));
			
			if($res){
				
					$this->session->set_flashdata('success_msg',"Deleted Successfully!");
					redirect($this->agent->referrer());
				
			}
			else{

				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}

		//Delete deleteUserSquareFeet
		public function deleteUserSquareFeet(){
			
			$res = $this->Admin_model->deleteTable('user_square_feet_detail','usfc_id',$this->input->post('usfcid'));
			
			if($res){

				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{

				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}


		//Delete CRI
		public function deleteCRI(){

			
			$res = $this->Admin_model->deleteTable('corpoate_responsibility_initiative','cri_id',$this->input->post('criid'));
			
			if($res){

				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{

				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}
		

		//Delete CovidPrecautions
		public function deleteCovidPrecautions(){
			$res = $this->Admin_model->deleteTable('covid_precautions','cp_id',$this->input->post('cpid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}


		//Delete Private Room
		public function deleteprivateRooms(){
			$res = $this->Admin_model->deleteTable('private_rooms','pr_id',$this->input->post('prid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}

		//Delete boxStorage
		public function deleteboxStorage(){
			$res = $this->Admin_model->deleteTable('box_storage','bs_id',$this->input->post('bsid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}


		//Delete utilityLocker
		public function deleteutilityLocker(){
			$res = $this->Admin_model->deleteTable('utility_locker','ul_id',$this->input->post('ulid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}


		//Delete bikeStorage
		public function deletebikeStorage(){
			$res = $this->Admin_model->deleteTable('bike_storage','bks_id',$this->input->post('bksid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}


		//Delete Benefits
		public function deleteBenefits(){
			$res = $this->Admin_model->deleteTable('benefits','benefit_id',$this->input->post('benefitid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}

		//Delete deletedelhiMundka
		public function deletedelhiMundka(){
			$res = $this->Admin_model->deleteTable('delhi_mundka','dm_id',$this->input->post('dmid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}

		//Delete deletegurgaonHondachowk
		public function deletegurgaonHondachowk(){
			$res = $this->Admin_model->deleteTable('gurgaon_hondachowk','ghc_id',$this->input->post('ghcid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}

		//Delete deletepuneRanjangaon
		public function deletepuneRanjangaon(){
			$res = $this->Admin_model->deleteTable('pune_ranjangaon','prg_id',$this->input->post('prgid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}


		//Delete deleteChennai
		public function deleteChennai(){
			$res = $this->Admin_model->deleteTable('chennai','c_id',$this->input->post('cid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}


		//Delete deleteHyderabad
		public function deleteHyderabad(){
			$res = $this->Admin_model->deleteTable('hyderabad','h_id',$this->input->post('hid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}

		public function deleteAllHyderabad(){
			$res = $this->Admin_model->deleteAllDataTable('hyderabad');
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}


		//Delete deleteKolkatta
		public function deleteKolkatta(){
			$res = $this->Admin_model->deleteTable('kolkatta','k_id',$this->input->post('kid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}


	


		//Delete deleteMumbai
		public function deleteMumbai(){
			$res = $this->Admin_model->deleteTable('mumbai','m_id',$this->input->post('mid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}

		//Delete deleteGoa
		public function deleteGoa(){
			$res = $this->Admin_model->deleteTable('goa','g_id',$this->input->post('gid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}


		//Delete deleteTestimonial
		public function deleteTestimonial(){
			$res = $this->Admin_model->deleteTable('testimonial','t_id',$this->input->post('tid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}
		


		//Delete Blogs
		public function deleteBlogs(){
			$res = $this->Admin_model->deleteTable('blogs','blog_id',$this->input->post('blogid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}
		

		//Delete deleteGallery
		public function deleteGallery(){
			$res = $this->Admin_model->deleteTable('gallery','gallery_id',$this->input->post('galleryid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}


		//Delete deletesizeGuide
		public function deletesizeGuide(){
			$res = $this->Admin_model->deleteTable('size_guide','sg_id',$this->input->post('sgid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}


		//Delete deleteFaqs
		public function deleteFaqs(){
			$res = $this->Admin_model->deleteTable('faqs','f_id',$this->input->post('fid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}


		//Delete deleteTermsAndConditions
		public function deleteTermsAndConditions(){
			$res = $this->Admin_model->deleteTable('terms_and_conditions','tac_id',$this->input->post('tacid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}


		//Delete deletePrivacyPolicy
		public function deletePrivacyPolicy(){
			$res = $this->Admin_model->deleteTable('privacy_policy','pp_id',$this->input->post('ppid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}
		
		//Delete News
		public function deleteNews(){
			$res = $this->Admin_model->deleteTable('news','news_id',$this->input->post('newsid'));
			if($res){

				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}
		

			//Delete deleteContactUs
		public function deleteContactUs(){
			$res = $this->Admin_model->deleteTable('contact_us','cu_id',$this->input->post('cuid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}
		

		//Delete deleteBannerImage
		public function deleteBannerImage(){
			$res = $this->Admin_model->deleteTable('banner_image','bi_id',$this->input->post('biid'));
			if($res){
				
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}
			else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}
		

		//Delete deleteBannerImage
		public function deleteHome(){
			$res = $this->Admin_model->deleteTable('home','home_id',$this->input->post('homeid'));
			if($res){
				// var_dump(file_exists($this->input->post('image_name')));
				// exit();
				unlink($this->input->post('image_name'));
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}
		


			//Delete deleteUserContactDetail
		public function deleteUserContactDetail(){
			$res = $this->Admin_model->deleteTable('user_contact_details','ucd_id',$this->input->post('ucdid'));
			if($res){
				$this->session->set_flashdata('success_msg',"Deleted Successfully!");
				redirect($this->agent->referrer());
			}else{
				$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
				redirect($this->agent->referrer());
			}
		}
		






















		// //Delete staff 
		// public function deleteMachine(){

		// 	$res = $this->Admin_model->deleteMachine();

		// 	if($res){

		// 		$this->session->set_flashdata('success_msg',"Deleted Successfully!");
		// 		redirect($this->agent->referrer());
		// 	}
		// 	else{

		// 		$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
		// 		redirect($this->agent->referrer());
		// 	}
		// }

		// //Delete staff 
		// public function deleteInventoryCat(){

		// 	$res = $this->Admin_model->deleteInventoryCat();

		// 	if($res){

		// 		$this->session->set_flashdata('success_msg',"Deleted Successfully!");
		// 		redirect($this->agent->referrer());
		// 	}
		// 	else{

		// 		$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
		// 		redirect($this->agent->referrer());
		// 	}
		// }

		// //Delete Vendor
		// public function deleteVendor(){

		// 	$res = $this->Admin_model->deleteVendor();

		// 	if($res){

		// 		$this->session->set_flashdata('success_msg',"Deleted Successfully!");
		// 		redirect($this->agent->referrer());
		// 	}
		// 	else{

		// 		$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
		// 		redirect($this->agent->referrer());
		// 	}
		// }
		

		// //Delete Purchase Order
		// public function deletePurchaseOrder(){

		// 	$res = $this->Admin_model->deletePurchaseOrder();

		// 	if($res){

		// 		$this->session->set_flashdata('success_msg',"Deleted Successfully!");
		// 		redirect($this->agent->referrer());
		// 	}
		// 	else{

		// 		$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
		// 		redirect($this->agent->referrer());
		// 	}
		// } 

		// //Delete Item
		// public function deleteItem(){

		// 	$res = $this->Admin_model->deleteItem();

		// 	if($res){

		// 		$this->session->set_flashdata('success_msg',"Deleted Successfully!");
		// 		redirect($this->agent->referrer());
		// 	}
		// 	else{

		// 		$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
		// 		redirect($this->agent->referrer());
		// 	}
		// }

		// //Delete Issued Inventory
		// public function deleteIssuedInventory(){

		// 	$res = $this->Admin_model->deleteIssuedInventory();

		// 	if($res){

		// 		$this->session->set_flashdata('success_msg',"Deleted Successfully!");
		// 		redirect($this->agent->referrer());
		// 	}
		// 	else{

		// 		$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
		// 		redirect($this->agent->referrer());
		// 	}
		// }

		// //Delete finished goods name by id
		// public function goodsDelete(){

		// 	$res = $this->Admin_model->deleteGoods();

		// 	if($res){

		// 		$this->session->set_flashdata('success_msg',"Deleted Successfully!");
		// 		redirect($this->agent->referrer());
		// 	}
		// 	else{

		// 		$this->session->set_flashdata('error_msg',"Failed to Delete, please try again!");
		// 		redirect($this->agent->referrer());

		// 	}
		// } 
	}
	
 ?>
