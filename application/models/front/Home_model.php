<?php 

class Home_model extends CI_Model{

		/*-------------------------------------------------------------------------
	| Method : authenticate admin	
	|-------------------------------------------------------------------------*/
	// public function authAdmin($username, $password) {

	// 	$this->db->where('admin_name', $username);
	// 	$query = $this->db->get('admin');

	// 	if($query->num_rows() === 1) {
	// 		$db_row = $query->row();

	// 		if(password_verify($password, $db_row->admin_password)) {
	// 			$this->destroyLockscreen();
	// 			$this->session->set_userdata('authAdminLogin', $db_row->admin_session_key);
	// 			$this->session->set_userdata('authAdminLockscreen', '0');
	// 			return true;

	// 		} else {
	// 			return false;	
	// 		}

	// 	} else {
	// 		return false;
	// 	}

	// }

    /*-------------------------------------------------------------------------
	| Method : set admin remember me token	
	|-------------------------------------------------------------------------*/


	// public function setRememberMeToken($username, $remember_me_token, $ip_address, $lockscreen) {
	// 	$this->db->set('admin_remember_me_token', $remember_me_token);
	// 	$this->db->set('admin_lockscreen', $lockscreen);
	// 	$this->db->set('admin_public_ip', $ip_address);
	// 	$this->db->where('admin_name', $username);
	// 	$this->db->update('admin');

	// 	if($this->db->affected_rows() === 1) {
	// 		return true;
	// 	}

	// }

 //    /*-------------------------------------------------------------------------
	// | Method : validate remember me token	
	// |-------------------------------------------------------------------------*/
	// public function authRememberMeCookie($remember_me_token, $username, $ipaddress) {

	// 	$this->db->where('admin_name', $username);
	// 	$this->db->where('admin_public_ip', $ipaddress);
	// 	$query = $this->db->get('admin');

	// 	if($query->num_rows() === 1) {
	// 		$db_row = $query->row();

	// 		if(hash_equals($db_row->admin_remember_me_token, $remember_me_token)) {
	// 			$this->session->set_userdata('authAdminLogin', $db_row->admin_session_key);
	// 			$this->session->set_userdata('authAdminLockscreen', $db_row->admin_lockscreen);
	// 			return true;
	// 		}

	// 	}

	// }

 //    /*-------------------------------------------------------------------------
	// | Method : set admin remember me token	
	// |-------------------------------------------------------------------------*/
	// public function setLockscreen() {

	// 	$this->db->set('admin_lockscreen', 1);
	// 	$this->db->where('admin_session_key', $this->session->userdata('authAdminLogin'));
	// 	$this->db->update('admin');
	// 	$this->session->set_userdata('authAdminLockscreen', '1');
	// 	if($this->db->affected_rows() === 1) {
	// 		return true;
	// 	}

	// }

 //    /*-------------------------------------------------------------------------
	// | Method : destroy lockscreen
	// |-------------------------------------------------------------------------*/
	// public function destroyLockscreen() {
	// 	$this->db->set('admin_lockscreen', 0);
	// 	$this->db->where('admin_session_key', $this->session->userdata('authAdminLogin'));
	// 	$this->db->update('admin');
	// 	if($this->db->affected_rows() === 1) {
	// 		$this->session->unset_userdata('authAdminLockscreen');
	// 		return true;
	// 	}
	// }

 //    /*-------------------------------------------------------------------------
 //    | Method : Old Password Check
 //    |-------------------------------------------------------------------------*/
 //    public function oldPasswordCheck($id){

 //    	$uid = $id;

 //    	$opass = $this->input->post('opassword');

 //    	$this->db->where('admin_session_key', $uid);
 //    	$query = $this->db->get('admin');

 //    	if($query->num_rows() === 1 ){

 //    		$row    = $query->row();
 //    		$dbpass = $row->admin_password;

 //    		if( password_verify($opass, $dbpass )){

 //    			return true;    
 //    		}
 //    		else{
 //    			return false;
 //    		}
 //    	}
 //    	else{
 //    		return false;
 //    	}

 //    }

 //     /*-------------------------------------------------------------------------
 //    | Method : Change Password
 //    |-------------------------------------------------------------------------*/
 //    public function changePassword($uid){

 //    	$npass      = $this->input->post('npassword');
 //    	$password_hash = password_hash($npass, PASSWORD_BCRYPT);

 //    	$data          = array(
 //    		'admin_password' => $password_hash
 //    	); 

 //    	$this->db->where('admin_session_key', $uid);

 //    	if( $this->db->update('admin', $data) ) {

 //    		return true;

 //    	} else {

 //    		return false;

 //    	}


 //    }

 //    /*-------------------------------------------------------------------------
	// | Method : get admin profile data
	// |-------------------------------------------------------------------------*/
	// public function getAdminProfile() {

	// 	$this->db->select('admin_name as username, admin_img');
	// 	$this->db->where('admin_session_key', $this->session->userdata('authAdminLogin'));
	// 	$query = $this->db->get('admin');
	// 	return $query->row();

	// }



		public function fetchCatProductPrice($product_name) {
			$this->db->where('sc_name_key',$product_name);
			return $this->db->get('storage_calculator')->row('sc_name_price');
		}

		public function fetchCalculators($cat_id) {
			$this->db->where('sc_cat_id',$cat_id);
			return $this->db->get('storage_calculator')->result();
		}	


		public function getCatofStorageCalculator(){
			return	$this->db->get('storage_calculator_categories')->result();
		}


    /*-------------------------------------------------------------------------
	| Method : Insert insertUserSquareFeetCalculator
	|-------------------------------------------------------------------------*/
		public function insertUserSquareFeetCalculator(){
				$calDetail = json_encode($this->input->post('calDetail'),true);
				$decode = json_decode($calDetail,true);
				
						
				 

				$data = array(
					'usfc_username' => $this->input->post('username'),
					'usfc_email' => $this->input->post('email'),
					'usfc_mobile_number' => $this->input->post('mobile_number'),
					'usfc_square_feet' => $this->input->post('squarefeet_minimum')."-".$this->input->post('squarefeet_maximum'),
					'usfc_user_cal_detail' => $decode
				);

				$this->db->insert('user_square_feet_detail',$data);

					if($this->db->affected_rows() == 1){

						return $this->db->insert_id();
					}else{

						return false;
					}
				}

				
			


	    /*-------------------------------------------------------------------------
		| Method : get table first row
		|-------------------------------------------------------------------------*/
		public function fetchFirstRowTable($table,$table_id,$limit){
			$this->db->limit($limit);
			$this->db->order_by($table_id,'asc');
			$query = $this->db->get($table);
			return $query->result();
		}

		/*-------------------------------------------------------------------------
		| Method : get other rows
		|-------------------------------------------------------------------------*/
		public function fetchOtherRowsTable($table,$table_id,$except_rows){
			$this->db->select('*');
			$this->db->order_by($table_id,'asc');
			$query = $this->db->get($table);

			$this->db->limit($query->num_rows(), $except_rows);
			$this->db->order_by($table_id,'asc');
			$query2 = $this->db->get($table);
			return $query2->result();
		}

		/*-------------------------------------------------------------------------
		| Method : get all rows
		|-------------------------------------------------------------------------*/
		public function fetchAllRowsTable($table,$table_id){
			$this->db->select('*');
			$this->db->order_by($table_id,'asc');
			$query = $this->db->get($table);
			return $query->result();
		}


		/*-------------------------------------------------------------------------
		| Method : get banner image
		|-------------------------------------------------------------------------*/
		public function fetchBannerImage($page_name){
			$this->db->where('bi_image_page',$page_name);
			$query = $this->db->get('banner_image');
			return $query->row('bi_image');
		}

		public function fetchMetaData($page_name){
			$this->db->where('page_name',$page_name);
			// $this->db->order_by($table_id,'desc');
			$query = $this->db->get('meta_data');
			return $query->row();
		}

		/*-------------------------------------------------------------------------
		| Method : get Home
		|-------------------------------------------------------------------------*/
		public function fetchHome($page_name){
			$this->db->where('home_image_page',$page_name);
			$query = $this->db->get('home');
			return $query->result();
		}

		/*-------------------------------------------------------------------------
		| Method : get insertUserContactDetail
		|-------------------------------------------------------------------------*/
		public function insertUserContactDetail($storage,$name,$number,$email,$storage_list){
			$this->db->set('ucd_name',   $name);
			$this->db->set('ucd_storage',$storage);
			$this->db->set('ucd_number', $number);
			$this->db->set('ucd_email',  $email);
			$this->db->set('ucd_storage_list',$storage_list);
			$this->db->insert('user_contact_details');
			if($this->db->affected_rows() > 0){
				return true;
			} else {
				return false;
			}
		}






		/*-------------------------------------------------------------------------
		| Method : Fetch  Storage Calculator Categories by id
		|-------------------------------------------------------------------------*/
		public function getCatofSizeGuideLocation(){
			return	$this->db->get('size_guide_location')->result();
		}


		public function fetchSizeGuide($cat_id) {
			$this->db->where('sg_cat_id',$cat_id);
			return $this->db->get('size_guide')->result();
		}	
















//     /*-------------------------------------------------------------------------
// 	| Method : get staff list
// 	|-------------------------------------------------------------------------*/
// 	public function fetchStaffList(){

// 		$this->db->select('*');
// 		$this->db->order_by('staff_name');
// 		$query = $this->db->get('staff_member');
// 		return $query->result();

// 	}
		
// 	/*-------------------------------------------------------------------------
// 	| Method : get staff list
// 	|-------------------------------------------------------------------------*/
// 	public function fetchStaffListAttendance($date) {

// 		$this->db->select('attendance.*, staff_member.staff_name, staff_member.staff_id');
// 		$this->db->from('staff_member');
// 		$this->db->join('attendance', 'attendance_staff = staff_id', 'left');
// 		$this->db->order_by('staff_name');
// 		$this->db->where('attendance_date', $date);
// 		$query = $this->db->get();
// 		return $query->result();

// 	}


//     /*-------------------------------------------------------------------------
// 	| Method : Insert Staff
// 	|-------------------------------------------------------------------------*/
// 	public function insertStaff(){


// 		if($this->input->post('id') != ''){

// 			$id = $this->input->post('id');
// 		}
// 		else{

// 			$id = '';
// 		}

// 		$date = $this->input->post('doj');

// 		$newDate = date("Y-m-d", strtotime($date));

// 		$data = array(

// 			'staff_id' => $id,
// 			'staff_name' => $this->input->post('name'),
// 			'staff_mobile' => $this->input->post('mobile'),
// 			'staff_email' => $this->input->post('email'),
// 			'staff_gender' => $this->input->post('gender'),
// 			'staff_doj' => $newDate,
// 			'staff_addr' => $this->input->post('address'),
// 			'staff_desc' => $this->input->post('desc'),
// 		);

// 		$this->db->where('staff_id', $this->input->post('id'));
// 		$q = $this->db->get('staff_member');

// 		if($q->num_rows() === 1){

// 			$this->db->where('staff_id', $this->input->post('id'));
// 			$this->db->update('staff_member',$data);

// 			if($this->db->affected_rows() > 0 ){

// 				return true;
// 			}
// 			else{

// 				return false;
// 			}
// 		}
// 		else{

// 			$this->db->insert('staff_member',$data);

// 			if($this->db->affected_rows() == 1){

// 				return true;
// 			}
// 			else{

// 				return false;
// 			}
// 		}

		
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Delete Staff by id
// 	|-------------------------------------------------------------------------*/
// 	public function deleteStaff(){

// 		$this->db->where('staff_id',$this->input->post('sid'));
// 		$this->db->delete('staff_member');
// 		if($this->db->affected_rows() === 1){

// 			return true;
// 		}
// 		else{
// 			return false;
// 		}

// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : get staff list
// 	|-------------------------------------------------------------------------*/
// 	public function fetchAllMachine() {

// 		$this->db->select('*');
// 		$this->db->order_by('machine_title');
// 		$query = $this->db->get('machines');
// 		return $query->result();

// 	}


// 	/*-------------------------------------------------------------------------
// 	| Method : get staff list
// 	|-------------------------------------------------------------------------*/
// 	public function fetchAllMachineinWeaving() {

// 		$this->db->order_by('machine_id DESC');
// 		$query = $this->db->get('new_manufacturing_machines');
// 		return $query->result();

// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Insert Staff
// 	|-------------------------------------------------------------------------*/
// 	public function insertMachine(){


// 		if(!$this->input->post('id') == ''){

// 			$id = $this->input->post('id');
// 		}
// 		else{

// 			$id = '';
// 		}

// 		$date = $this->input->post('dop');

// 		$newDate = date("Y-m-d", strtotime($date));
		

// 		$data = array(

// 			'machine_id' => $id,
// 			'machine_model' => $this->input->post('model'),
// 			'machine_title' => $this->input->post('title'),
// 			'machine_dop' => $newDate,
// 			'machine_type' => $this->input->post('type'),
// 			'machine_amount' => $this->input->post('amount'),
// 			'machine_dec' => $this->input->post('desc', true),
// 			'machine_consumption_type' => $this->input->post('consumption'),
// 			'machine_unit' => $this->input->post('unit'),
// 		);

// 		$this->db->where('machine_id',$this->input->post('id'));
// 		$q = $this->db->get('machines');

// 		if($q->num_rows() === 1){

// 			$this->db->where('machine_id',$this->input->post('id'));
// 			$this->db->update('machines',$data);

// 			if($this->db->affected_rows() > 0 ){

				
// 				return true;
// 			}
// 			else{

// 				return false;
// 			}
// 		}
// 		else{

// 			$this->db->insert('machines',$data);

// 			if($this->db->affected_rows() == 1){

// 				return true;
// 			}
// 			else{

// 				return false;
// 			}
// 		}

		
// 	}


// 	/*-------------------------------------------------------------------------
// 	| Method : Insert new machines
// 	|-------------------------------------------------------------------------*/
// 	public function insertManufacturingMachine(){


// 		if(!$this->input->post('id') == ''){

// 			$id = $this->input->post('id');
// 		}
// 		else{

// 			$id = '';
// 		}

// 		$date = $this->input->post('dop');

// 		$newDate = date("Y-m-d", strtotime($date));
		

// 		$data = array(

// 			'machine_id' => $id,
// 			'machine_model' => $this->input->post('model'),
// 			'machine_title' => $this->input->post('title'),
// 			'machine_dop' => $newDate,
// 			'machine_type' => $this->input->post('type'),
// 			'machine_amount' => $this->input->post('amount'),
// 			'machine_dec' => $this->input->post('desc', true),
// 			'machine_consumption_type' => $this->input->post('consumption'),
// 			'machine_unit' => $this->input->post('unit'),
// 		);

// 		$this->db->where('machine_id',$this->input->post('id'));
// 		$q = $this->db->get('new_manufacturing_machines');

// 		if($q->num_rows() === 1){

// 			$this->db->where('machine_id',$this->input->post('id'));
// 			$this->db->update('new_manufacturing_machines',$data);

// 			if($this->db->affected_rows() > 0 ){

				
// 				return true;
// 			}
// 			else{

// 				return false;
// 			}
// 		}
// 		else{

// 			$this->db->insert('new_manufacturing_machines',$data);

// 			if($this->db->affected_rows() == 1){

// 				return true;
// 			}
// 			else{

// 				return false;
// 			}
// 		}

		
// 	}

// 	// Delete manufacturing machines

// 	public function delete_wraping_machine() {
// 		$this->db->where('machine_id',$this->input->post('mid'));
// 		$this->db->delete('new_manufacturing_machines');

// 		if($this->db->affected_rows() === 1){

// 			return true;
// 		}
// 		else{

// 			return false;
// 		}
// 	}


// 	public function get_weight_raw_material() {
// 		// $this->db->where('inward_type', $this->input->post('param1'));
// 		// $this->db->where('inward_type_of_type', $this->input->post('param2'));
// 		$this->db->where('name', $this->input->post('param3'));
// 		$query = $this->db->get('raw_materials');
// 		return $query->row();

// 	}


// 	public function decreaseRawMaterialWeight($weight, $rw_id, $cone_weight) {
// 		$new_weight = $weight - $cone_weight;
// 		$this->db->set('weight', $new_weight);
// 		$this->db->where('raw_mat_id', $rw_id);
// 		$this->db->update('raw_materials');
// 		return true;
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Delete Machine by id
// 	|-------------------------------------------------------------------------*/
// 	public function deleteMachine(){

// 		$this->db->where('machine_id',$this->input->post('mid'));
// 		$this->db->delete('machines');

// 		if($this->db->affected_rows() === 1){

// 			return true;
// 		}
// 		else{

// 			return false;
// 		}
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : insert staff Attendance
// 	|-------------------------------------------------------------------------*/
// 	public function insertStaffAttendance($sid, $status,$timein, $timeout, $hours){

// 		$newDate = date("Y-m-d", strtotime($this->input->post('adate')));

// 		$data = array(

// 			'attendance_staff' => $sid,
// 			'attendance_date' => $newDate,
// 			'attendance_status' => $status,
// 			'attendance_time_in' => $timein,
// 			'attendance_time_out' => $timeout,
// 			'attendance_hours' => $hours,
// 		);

		


// 		$this->db->where('attendance_date',$newDate);
// 		$this->db->where('attendance_staff',$sid);
// 		$q = $this->db->get('attendance');

// 		if($q->num_rows() == 1){

// 			$this->db->where('attendance_date',$newDate);
// 			$this->db->where('attendance_staff',$sid);
// 			$this->db->update('attendance',$data);

// 			if($this->db->affected_rows() > 0){

// 				return true;
// 			}
// 			else{

// 				return false;
// 			}
// 		}
// 		else{

// 			$this->db->insert('attendance',$data);

// 			if($this->db->affected_rows() == 1){

// 				return true;
// 			}
// 			else{

// 				return false;
// 			}
// 		}
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : get staff to assign work
// 	|-------------------------------------------------------------------------*/
// 	public function getStaff(){
		
// 		$this->db->select('staff_name, staff_id');
// 		$this->db->order_by('staff_name','asc');
// 		$query = $this->db->get('staff_member');
// 		return $query->result();
// 	}

// 	public function getStaffNamebyId($id){

// 		// $this->db->select('staff_name');
// 		$this->db->where('staff_id',$id);
// 		$query = $this->db->get('staff_member');
// 		return $query->row()->staff_name;
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : get machine to assign work
// 	|-------------------------------------------------------------------------*/
// 	public function getMachine(){

// 		$query = $this->db->get('machines');
// 		return $query->result();

// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : fetch allocated work to staff
// 	|-------------------------------------------------------------------------*/
// 	public function fetchAllocatedWork($date){

// 		// $this->db->select('w.*, s.staff_name, m.machine_model, ms.*, beam.*');
// 		$this->db->where('w.work_date',$date);
// 		$this->db->order_by('w.work_shift');
// 		$this->db->from('work_assign w');
// 		$this->db->join('staff_member s','s.staff_id = w.work_staff_id','inner');
// 		$this->db->join('machines m','m.machine_id = w.work_machine_id','inner');
// 		$this->db->join('machinestatus ms','ms.mstatus_work_id = w.work_id','left');
// 		// $this->db->join('new_beam','new_beam.beam_id = w.work_beam_id','inner');
// 		$this->db->join('beam_in_machines','beam_in_machines.bim_beam_id = w.work_beam_id','inner');
// 		$query = $this->db->get();

// 		return $query->result();
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : insert work allocated
// 	|-------------------------------------------------------------------------*/
// 	public function insertWorkAllocated(){

// 		$newDate = date("Y-m-d", strtotime($this->input->post('wdate')));


// 		$data = array(

// 			'work_staff_id' => $this->input->post('staff'),
// 			'work_machine_id' => $this->input->post('machine'),
// 			'work_date' => $newDate,
// 			'work_beam_id' => $this->input->post('beamid'),
// 			'work_shift' => $this->input->post('shift'),
// 			'work_cone_given' => $this->input->post('cone'),
// 		);

// 		$this->db->insert('work_assign',$data);

// 		if($this->db->affected_rows() == 1){

// 			return true;
// 		}
// 		else{

// 			return false;
// 		}
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : edit work allocated
// 	|-------------------------------------------------------------------------*/
// 	public function editWorkAllocated(){

// 		$data = array(

// 			'work_staff_id' => $this->input->post('sname'),
// 			'work_date' => $this->input->post('edate'),
// 			'work_shift' => $this->input->post('shift'),
// 			'work_cone_given' => $this->input->post('cone'),
// 		);


// 		$this->db->where('work_id',$this->input->post('wid'));
// 		$this->db->update('work_assign',$data);

// 		if($this->db->affected_rows() > 0){

// 			return true;
// 		}
// 		else{

// 			return false;
// 		}
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Insert Stock Category
// 	|-------------------------------------------------------------------------*/
// 	public function insertInventoryCat(){



// 		$data = array(

// 			'inventory_category' => $this->input->post('scategory'),
// 			'inventory_cat_desc' => $this->input->post('sdesc'),
// 		);

// 		$this->db->where('inventory_cat_id',$this->input->post('invid'));
// 		$q = $this->db->get('inventory_cat');

// 		if($q->num_rows() == 1){

// 			$this->db->where('inventory_cat_id',$this->input->post('invid'));
// 			$this->db->update('inventory_cat',$data);

// 			if($this->db->affected_rows() > 0){

// 				return true;
// 			}
// 			else{

// 				return false;
// 			}
// 		}
// 		else{

// 			$this->db->insert('inventory_cat',$data);

// 			if($this->db->affected_rows() == 1){

// 				return true;
// 			}
// 			else{

// 				return false;
// 			}
// 		}

		
// 	}
	
// 	/*-------------------------------------------------------------------------
// 	| Method : fetch stock category
// 	|-------------------------------------------------------------------------*/
// 	public function fetchStockCategory(){

// 		$this->db->order_by('inventory_category');
// 		$query = $this->db->get('inventory_cat');

// 		return $query->result();
// 	}
	

// 	/*-------------------------------------------------------------------------
// 	| Method : Delete Inventory Category by id 
// 	|-------------------------------------------------------------------------*/
// 	public function deleteInventoryCat(){

// 		$this->db->where('inventory_cat_id',$this->input->post('invent_id'));
// 		$this->db->delete('inventory_cat');

// 		if($this->db->affected_rows() == 1){

// 			return true;
// 		}
// 		else{

// 			return false;
// 		}
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : insert vendor  
// 	|-------------------------------------------------------------------------*/
// 	public function insertVendor(){



// 		$data = array(

// 			'vendor_comp_name' => $this->input->post('compname'),
// 			'vendor_comp_phone' => $this->input->post('comphone'),
// 			'vendor_comp_email' => $this->input->post('compemail'),
// 			'vendor_comp_addr' => $this->input->post('compaddress'),
// 			'vendor_comp_country' => $this->input->post('country'),
// 			'vendor_comp_state' => $this->input->post('state'),
// 			'vendor_comp_city' => $this->input->post('city'),
// 			'vendor_comp_pincode' => $this->input->post('pincode'),
// 			'vendor_name' => $this->input->post('vendorname'),
// 			'vendor_phone' => $this->input->post('vendorphone'),
// 			'vendor_addr' => $this->input->post('vendoraddr'),
// 			'vendor_bank_name' => $this->input->post('bankname'),
// 			'vendor_branch_name' => $this->input->post('branchname'),
// 			'vendor_account_no' => $this->input->post('accountno'),
// 			'vendor_ifsc_code' => $this->input->post('ifsccode'),
// 		);

// 		$this->db->where('vendor_id',$this->input->post('vendorid'));
// 		$q = $this->db->get('vendors');

// 		if($q->num_rows() == 1){

// 			$this->db->where('vendor_id',$this->input->post('vendorid'));
// 			$this->db->update('vendors',$data);

// 			if($this->db->affected_rows() > 0){

// 				return true;
// 			}
// 			else{

// 				return false;
// 			}
// 		}
// 		else{

// 			$this->db->insert('vendors',$data);

// 			if($this->db->affected_rows() == 1){

// 				return true;
// 			}
// 			else{

// 				return false;
// 			}

// 		}

		
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : fetch all vendor  
// 	|-------------------------------------------------------------------------*/
// 	public function fetchAllVendor(){

// 		$this->db->order_by('vendor_comp_name');
// 		$query = $this->db->get('vendors');

// 		return $query->result();

// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Delete Vendor by Id 
// 	|-------------------------------------------------------------------------*/
// 	public function deleteVendor(){
		
// 		$this->db->where('vendor_id',$this->input->post('vid'));
// 		$this->db->delete('vendors');

// 		if($this->db->affected_rows() == 1){

// 			return true;
// 		}
// 		else{

// 			return false;
// 		}
// 	}
	
// 	/*-------------------------------------------------------------------------
// 	| Method : fetch vendor by id  
// 	|-------------------------------------------------------------------------*/
// 	public function fetchVendorDetail($id){

// 		$this->db->select('vendor_name');
// 		$this->db->where('vendor_id',$id);
// 		$query = $this->db->get('vendors');

// 		return $query->row();

// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Insert Stock Category
// 	|-------------------------------------------------------------------------*/
// 	public function insertPurchaseOrder(){

// 		$newDate = date("Y-m-d", strtotime($this->input->post('pdate')));

// 		$data = array(

// 			'vpo_vendor_id' => $this->input->post('vendorid'),
// 			'vpo_category' => $this->input->post('category'),
// 			'vpo_date' => $newDate,
// 		);



// 		$this->db->insert('vend_purchase_order',$data);

// 		if($this->db->affected_rows() == 1){

// 			return true;
// 		}
// 		else{

// 			return false;
// 		}
		
		
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : fetch vendor by id  
// 	|-------------------------------------------------------------------------*/
// 	public function fetchPurchaseOrder($id){

// 		$this->db->select('vpo.*, i.*');
// 		$this->db->from('vend_purchase_order vpo');
// 		$this->db->join('item i','i.item_purchase_order_id = vpo.vpo_id','left');
// 		$this->db->order_by('vpo.vpo_category');
// 		$this->db->where('vpo.vpo_vendor_id',$id);
// 		$this->db->group_by('i.item_purchase_order_id');
// 		$query = $this->db->get('');

// 		return $query->result();

// 	}
	
// 	/*-------------------------------------------------------------------------
// 	| Method : Delete Vendor by Id 
// 	|-------------------------------------------------------------------------*/
// 	public function deletePurchaseOrder(){
		
// 		$this->db->where('vpo_id',$this->input->post('po_id'));
// 		$this->db->delete('vend_purchase_order');

// 		if($this->db->affected_rows() == 1){

// 			return true;
// 		}
// 		else{

// 			return false;
// 		}
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : fetch Purchase Order by id  
// 	|-------------------------------------------------------------------------*/
// 	public function fetchPurchaseOrderById($id){

// 		$this->db->select('vpo.*, v.vendor_name');
// 		$this->db->from('vend_purchase_order vpo');
// 		$this->db->join('vendors v','v.vendor_id = vpo.vpo_vendor_id','inner');
// 		$this->db->where('vpo_id',$id);
// 		$query = $this->db->get();

// 		return $query->row();

// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : insert item  
// 	|-------------------------------------------------------------------------*/
// 	public function insertItem(){

// 		$data = array(

// 			'item_vendor_id' => $this->input->post('vendid'),
// 			'item_purchase_order_id' => $this->input->post('poid'),
// 			'item_type' => $this->input->post('itype'),
// 			'item_inv_cat' => $this->input->post('icateg'),
// 			'item_inventory' => $this->input->post('invitem'),
// 			'item_quantity' => $this->input->post('quantity'),
// 			'item_re_order' => $this->input->post('reorder'),
// 			'item_free' => $this->input->post('free'),
// 			'item_discount' => $this->input->post('discount'),
// 			'item_mrp' => $this->input->post('mrp'),
// 			'item_rate' => $this->input->post('rate'),
// 		);

// 		$this->db->where('item_id',$this->input->post('itemid'));
// 		$q = $this->db->get('item');

// 		if($q->num_rows() == 1){

// 			$this->db->where('item_id',$this->input->post('itemid'));
// 			$this->db->update('item',$data);

// 			if($this->db->affected_rows() > 0){

// 				return true;
// 			}
// 			else{

// 				return false;
// 			}
// 		}
// 		else{

// 			$this->db->insert('item',$data);

// 			if($this->db->affected_rows() == 1){

// 				return true;
// 			}
// 			else{

// 				return false;
// 			}

// 		}

		
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : fetch Item by Purchase order id  
// 	|-------------------------------------------------------------------------*/
// 	public function fetchItem($id){

// 		$this->db->from('item i');
// 		$this->db->join('inventory_cat ic','ic.inventory_cat_id = i.item_inv_cat','left	');
// 		$this->db->where('item_purchase_order_id',$id);
// 		$query = $this->db->get('');

// 		return $query->result();

// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : Delete Item by id
// 	|-------------------------------------------------------------------------*/
// 	public function deleteItem(){
		
// 		$this->db->where('item_id',$this->input->post('itemidd'));
// 		$this->db->delete('item');

// 		if($this->db->affected_rows() == 1){

// 			return true;
// 		}
// 		else{

// 			return false;
// 		}
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : get only item only by vendor id
// 	|-------------------------------------------------------------------------*/
// 	public function getTotalItemPurchaseOrder($id){
		
// 		$this->db->where('item_purchase_order_id',$id);
// 		$query = $this->db->get('item');

// 		return $query->result();
// 	}

	
// 	/*-------------------------------------------------------------------------
// 	| Method : insert Purchase Received
// 	|-------------------------------------------------------------------------*/
// 	public function insertPurchaseReceived(){

// 		$data = array(
// 			'pr_invoice_no' => $this->input->post('invoice'),
// 			'pr_vendor_id' => $this->input->post('vendorid'),
// 			'pr_purchaseorder_id' => $this->input->post('purordid'),
// 			'pr_payment_mode' => $this->input->post('payment'),
// 			'pr_invtotalamount' => $this->input->post('intamt'),
// 			'pr_paid_amount' => $this->input->post('pamount'),
// 		);

// 		$this->db->insert('purchase_rec',$data);

// 		if($this->db->affected_rows() == 1){

// 			return true;
// 		}
// 		else{

// 			return false;
// 		}
// 	}
	

// 	/*-------------------------------------------------------------------------
// 	| Method : get MAx invoice no
// 	|-------------------------------------------------------------------------*/
// 	public function getMaxInvoiceNo(){

// 		$this->db->select_max('pr_invoice_no');
// 		$result = $this->db->get('purchase_rec')->row();  
// 		return $result->pr_invoice_no;
		
// 	}
	
// 	/*-------------------------------------------------------------------------
// 	| Method :fetch all purchase received
// 	|-------------------------------------------------------------------------*/
// 	public function fetchAllPurchaseRec(){

// 		$this->db->select('pr.*, v.vendor_name, vpo.*');
// 		$this->db->from('purchase_rec pr');
// 		$this->db->join('vendors v','v.vendor_id = pr.pr_vendor_id','left');
// 		$this->db->join('vend_purchase_order vpo','vpo.vpo_id = pr.pr_purchaseorder_id','left');
// 		$query = $this->db->get();

// 		return $query->result();
		
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method :fetch  purchase received by ID
// 	|-------------------------------------------------------------------------*/
// 	public function fetchAllPurchaseRecById($id){

// 		$this->db->select('pr.*, v.vendor_name, vpo.*');
// 		$this->db->from('purchase_rec pr');
// 		$this->db->join('vendors v','v.vendor_id = pr.pr_vendor_id','left');
// 		$this->db->join('vend_purchase_order vpo','vpo.vpo_id = pr.pr_purchaseorder_id','left');
// 		$this->db->where('pr.pr_id',$id);
// 		$query = $this->db->get();

// 		return $query->row();
		
// 	}

// 	/*-------------------------------------------------------------------------
// 	| Method : fetch Item by Inventory Id  
// 	|-------------------------------------------------------------------------*/
// 	public function fetchItemByInventoryId($id){

// 		$this->db->from('item i');
// 		$this->db->join('inventory_cat ic','ic.inventory_cat_id = i.item_inv_cat','left	');
// 		$this->db->where('i.item_inv_cat',$id);
// 		$query = $this->db->get('');

// 		return $query->result();

// 	}
	
// 	/*-------------------------------------------------------------------------
// 	| Method : fetch Item by Available for Inventory Cat and Item   
// 	|-------------------------------------------------------------------------*/
// 	public function getItemAvailable($invc, $item){

// 		$this->db->from('item i');
// 		$this->db->join('inventory_cat ic','ic.inventory_cat_id = i.item_inv_cat','left	');
// 		$this->db->where('i.item_inv_cat',$invc);
// 		$this->db->where('i.item_id',$item);
// 		$query = $this->db->get('');

// 		return $query->row();

// 	}

// 	public function getInventoryIssuedQty($id){

// 		$this->db->where('item_id',$id);
// 		$query = $this->db->get('item');

// 		return $query->row();

// 	}
	
// 	/*-------------------------------------------------------------------------
// 	| Method : insert inventory item issued  
// 	|-------------------------------------------------------------------------*/
// 	public function insertInventoryIssue(){

// 		$quantity = $this->input->post('quantityneed[]');
// 		// $discount = $this->input->post('discount[]');
// 		$item = $this->input->post('itemid[]');

		

// 		foreach($item as $key => $value){

// 			$data = array(

// 				'stck_staff_id'  => $this->input->post('stfid'),
// 				'stck_inventory_cat_id'  => $this->input->post('invcat'),
// 				'stck_item_id'  => $item[$key],
// 				'stck_quantity'  => $quantity[$key],
// 				// 'stck_discount'  => $discount[$key],
// 				'stck_remarks'  => $this->input->post('remarks'),
// 				// 'stck_total'  	=> $this->input->post('totalamt'),
// 				// 'stck_receipt_no'  => $this->input->post('receiptno'),
// 			);

// 			$qtyOld = $this->getInventoryIssuedQty($value);

// 			$qty = (int)$qtyOld->item_quantity - (int)$quantity[$key];


// 			$datas = array(
// 				'item_quantity' => $qty,
// 			);

// 			$this->db->where('item_id',$value);
//                 $this->db->update('item',$datas); //This process use to update inventory item quantity when quantity issued

//                 $this->db->insert('stockissues',$data);
//             }

//             if($this->db->affected_rows() > 0){
//             	return 1;
//             }
//             else{
//             	return 0;
//             }


//         }

// 	//get max receipt no
//         public function getMaxReceipt(){

//         	$this->db->select_max('stck_receipt_no');
//         	$result = $this->db->get('stockissues')->row();  
//         	return $result->stck_receipt_no;
//         }


//         //fetch Issued Inventory
//         public function fetchListofIssuedInventory(){

//         	$this->db->select('si.*, sm.staff_name, i.*, ic.inventory_category');
//         	$this->db->from('stockissues si');
//         	$this->db->join('staff_member sm','sm.staff_id = si.stck_staff_id','left');
//         	$this->db->join('item i','i.item_id = si.stck_item_id','left');
//         	$this->db->join('inventory_cat ic','ic.inventory_cat_id = si.stck_inventory_cat_id','left');
//         	$this->db->where('si.stck_quantity !=',0,FALSE);
//         	$this->db->order_by('stck_created_at');
//         	$query = $this->db->get();

//         	return $query->result();
//         }

//         //fetch issued item details by id
//         public function fetchIssuedInventoryById($id){

//         	$this->db->where('stckissue_id',$id);
//         	$query = $this->db->get('stockissues');

//         	return $query->row();
//         }

//         //delete issued item 
//         public function deleteIssuedInventory(){

//         	$issue =  $this->fetchIssuedInventoryById($this->input->post('issuedid'));
//         	$item = $this->getInventoryIssuedQty($issue->stck_item_id);
        	
//         	$qty = (int)$issue->stck_quantity + (int)$item->item_quantity;

//         	$datas = array(

//         		'item_quantity' => $qty,
//         	);

        	

//         	$this->db->where('item_id',$issue->stck_item_id);
//         	$this->db->update('item',$datas);

//         	$this->db->where('stckissue_id',$this->input->post('issuedid'));
//         	$this->db->delete('stockissues');

//         	if($this->db->affected_rows() == 1){

//         		return true;
//         	}
//         	else{

//         		return false;
//         	}
//         }

//       //get inventory category by Staff id from issued inventory
//         public function getInventoryCatbyStaffId(){

//         	$this->db->select('si.* ,ic.inventory_category');
//         	$this->db->from('stockissues si');
//         	$this->db->join('inventory_cat ic','ic.inventory_cat_id = si.stck_inventory_cat_id','left');
//         	$this->db->where('si.stck_staff_id',$this->input->post('id'));
//         	$this->db->group_by('si.stck_inventory_cat_id');
//         	$query = $this->db->get();

//         	return $query->result();
//         }

//       //get item by Inventory Cat ID
//         public function getItemByInventoryCatById(){

//         	$this->db->select('si.*, i.item_inventory');
//         	$this->db->from('stockissues si');
//         	$this->db->join('item i','i.item_id = si.stck_item_id','left');
//         	$this->db->where('si.stck_inventory_cat_id',$this->input->post('id'));
//         	$this->db->group_by('si.stck_item_id');
//         	$query = $this->db->get();

//         	return $query->result();
//         }

//       //get issued item by 3 param
//         public function getIssuedItem(){

//         	$this->db->select('si.*, i.*');
//         	$this->db->from('stockissues si');
//         	$this->db->join('item i','i.item_id = si.stck_item_id','left');
//         	$this->db->where('si.stck_staff_id',$this->input->post('staff'));
//         	// $this->db->where('si.stck_inventory_cat_id',$this->input->post('inventorycat'));
//         	// $this->db->where('si.stck_item_id',$this->input->post('item'));
//         	$this->db->where('si.stck_quantity!= ',0,FALSE);
//         	$query = $this->db->get();

//         	return $query->result();
//         }

//       //get inventory issued by id
//         public function getInventoryIssuedById($id){

//         	$this->db->where('stckissue_id',$id);
//         	$query = $this->db->get('stockissues');

//         	return $query->row();
//         }



//       //insert return inventory
//         public function returnInventoryInsert(){

//         	foreach ($_POST['ItemInfo'] as $key => $getData) {

//         		$qty = (int)$getData['tqty'] - (int)$getData['rqty'] - (int)$getData['wastage'] - (int)$getData['used'];

//         		$data = array(
//         			'stck_quantity' => $qty,
//         		);

//         		$qtyOld = $this->getInventoryIssuedQty($getData['itemid']);                
//         		$qty = $qtyOld->item_quantity + $getData['rqty'];


//         		$datas = array(

//         			'item_quantity' => $qty,
//         		);

//         		$this->db->where('item_id' , $getData['itemid']);
//         		$this->db->update('item' , $datas);

//         		$this->db->where('stckissue_id' , $getData['issuedid']);
//         		$this->db->update('stockissues' , $data);

//         		$retdate = date('Y-m-d',strtotime($getData['retdate']));
//         		$isdate = date('Y-m-d',strtotime($getData['idate']));

//         		$this->db->select_max('unique_id_fgoods');
//         		$result = $this->db->get('returninventory')->row();  
//         		$uid = $result->unique_id_fgoods;
//         		$fid = $uid+1; 
//         		if($getData['fgoodqty'] != ''){

//         			$stock = array(

//         				'finisged_goods_id' => $getData['goodcat'],
//         				'fnished_goods_qty' => $getData['fgoodqty'],
//         				'finished_goods_created_on' => $retdate,
//         				'retinv_unique_fgoods' => $fid,

//         			);
//         		}

//         		$retdatas = array(
//         			'retinv_item_id' => $getData['itemid'],
//         			'retinv_return_qty' => $getData['rqty'],
//         			'retinv_remarks' => $getData['remarks'],
//         			'retinv_inventory_cat' => $qtyOld->item_inv_cat,
//         			'retinv_return_date' => $retdate,
//         			'retinv_stck_issued_id' => $getData['issuedid'],
//         			'retinv_wastage	' => $getData['wastage'],
//         			'retinv_used' => $getData['used'],
//         			'retinv_issdate' => $isdate,
//         			'retinv_fgood_id' => $getData['goodcat'],
//         			'retinv_goods_qty' => $getData['fgoodqty'],
//         			'unique_id_fgoods' => $fid,
//         		);

//         		$this->db->insert('returninventory',$retdatas);

//         	}


//         	if($this->db->affected_rows() > 0){
        		
//         		if(count($stock) != 0){

//         			$this->db->insert('finishedgoods_stock',$stock);

//         			if($this->db->affected_rows() == 1){

//         				return true;
//         			}

//         		}
//         		else{

//         			return true;
//         		}		

        		
//         	}
//         	else{
//         		return false;
//         	}

//         }

//         //INsert finished goods
//         public function insertFinishedGoods(){

//         	$data = array(

//         		'goods_name' => $this->input->post('goods')
//         	);

//         	$this->db->where('goods_id',$this->input->post('gid'));
//         	$q = $this->db->get('goods');

//         	if($q->num_rows() == 1){

//         		$this->db->where('goods_id',$this->input->post('gid'));
//         		$this->db->update('goods',$data);

//         		if($this->db->affected_rows() > 0){

//         			return true;
//         		}
//         		else{

//         			return false;
//         		}
//         	}
//         	else{

//         		$this->db->insert('goods',$data);

//         		if($this->db->affected_rows() == 1){

//         			return true;
//         		}
//         		else{

//         			return false;
//         		}

//         	}

        	
//         }

//         //fetch all finished goods name
//         public function fetchAllFinishedGoods(){

//         	$query = $this->db->get('goods');

//         	return $query->result();
//         }

//         //delete Finished Goods from list of goods
//         public function deleteGoods(){

//         	$this->db->where('goods_id',$this->input->post('gdid'));
//         	$this->db->delete('goods');

//         	if($this->db->affected_rows() == 1){

//         		return true;
//         	}
//         	else{

//         		return false;
//         	}
//         }

//         //fetch stock of finished goods
//         public function fetchAllFinishedGoodsStock(){

//         	$this->db->select('fgs.*, SUM(fgs.fnished_goods_qty) AS qty, g.goods_name', FALSE);
//         	$this->db->from('finishedgoods_stock fgs');
//         	$this->db->join('goods g','g.goods_id = fgs.finisged_goods_id','inner');
//         	$this->db->group_by('fgs.finisged_goods_id');
//         	$query = $this->db->get();
//         	return $query->result();
//         	// $this->db->select('fgs.*, g.goods_name');
//         	// $this->db->from('finishedgoods_stock fgs');
//         	// $this->db->join('goods g','g.goods_id = fgs.finisged_goods_id','inner');
//         	// $query = $this->db->get();
//         	// return $query->result();
//         }

//         //get machine title by id
//         public function getMachineTitle($id){

//         	$this->db->select('machine_title');
//         	$this->db->where('machine_id',$id);
//         	$query = $this->db->get('machines');

//         	return $query->row();
//         }

//         //insert beam in machine
//         public function insertBeamForMachine(){

//         	$bdate = date("Y-m-d", strtotime($this->input->post('idate')));

//         	$data = array(

//         		'beam_install_date' => $bdate,
//         		'beam_length' => $this->input->post('length'),
//         		'beam_length_red' => $this->input->post('length'),
//         		'beam_weight' => $this->input->post('weight'),
//         		'beam_weight_red' => $this->input->post('weight'),
//         		'beam_machine_id' => $this->input->post('mid'), 
//         	);

//         	$this->db->insert('beam',$data);

//         	if($this->db->affected_rows() == 1){

//         		return true;
//         	}
//         	else{

//         		return false;
//         	}

//         }

//         //fetch all beam inserted in particular machine by machine ID
//         public function fetchAllBeamByMachineId($id){

//         	$this->db->where('beam_machine_id',$id);
//         	$query = $this->db->get('beam');

//         	return $query->result();
//         }

//         public function fetchAllBeamByMachineId2($id){
//         	$this->db->from('beam_in_machines');
//         	$this->db->join('new_beam','new_beam.beam_id= beam_in_machines.bim_beam_id','inner');
//         	$this->db->where('bim_machine_id',$id);
//         	$query = $this->db->get('');

//         	return $query->result();
//         }

//         //get machine on which beam has been installed from beam table
//         public function getMachineFromBeam(){

//         	$this->db->select('b.beam_machine_id, m.machine_model');
//         	$this->db->from('beam b');
//         	$this->db->join('machines m','m.machine_id = b.beam_machine_id','inner');
//         	$this->db->group_by('b.beam_machine_id');
//         	$query = $this->db->get();

//         	return $query->result();
//         }

//         public function getMachineFromBeam2(){
//         	$this->db->select('*');
//         	$this->db->from('beam_in_machines');
//         	$this->db->join('machines m','m.machine_id = beam_in_machines.bim_machine_id','inner');
//         	$this->db->group_by('beam_in_machines.bim_machine_id');
//         	$query = $this->db->get();

//         	return $query->result();
//         }


//         //get latest beam in a Machine particular machine by machine id
//         public function getLatestBeamMachine($mid){

//         	$this->db->select('*');
//         	$this->db->from('beam');
//         	$this->db->where('beam_machine_id', $mid);
//         	$this->db->order_by('beam_install_date', 'desc');
//         	$this->db->limit(1);
//         	$query = $this->db->get();

       
//         		return $query->row();
        
//         }


//         public function getLatestBeamMachine2($mid){

//         	$this->db->select('*');
//         	$this->db->from('beam_in_machines');
//         	$this->db->where('bim_machine_id', $mid);
//         	$this->db->order_by('bim_time', 'desc');
//         	$this->db->limit(1);
//         	$query = $this->db->get();

        
//         		return $query->row();
        
//         }

//         //get beam details by id
//         public function getBeamDetailsById($id){

//         	$this->db->where('beam_id',$id);
//         	$query = $this->db->get('beam');

//         	return $query->row();
//         }

//         //get work details by id
//         public function getWorkDetails($id){

//         	$this->db->where('work_id',$id);
//         	$query = $this->db->get('work_assign');

//         	return $query->row();
//         }

//         //get latest beam inserted in a particular machine
//         public function getLatestBeamMachinefunc($id){

//         	$this->db->select('*');
//         	$this->db->from('beam');
//         	$this->db->where('beam_machine_id', $id);
//         	$this->db->order_by('beam_install_date', 'desc');
//         	$this->db->limit(1);
//         	$query = $this->db->get();

//         	return $query->row();
//         }

//         public function getnewBeamDetailsById($id){

//         	$this->db->where('beam_id',$id);
//         	$query = $this->db->get('new_beam');

//         	return $query->row();
//         }

//         public function getnewBeamLeangthLeftById($id){

//         	$this->db->where('bim_beam_id',$id);
//         	$query = $this->db->get('beam_in_machines');

//         	return $query->row();
//         }

//         //insert in deatails of work after work
//         public function insertDetailsAfterWork(){


//         	$wrk = $this->getWorkDetails($this->input->post('wrkid'));

//         	$usedcone = (float)$wrk->work_cone_given - (float)$this->input->post('conew');

//         	$beam = $this->getnewBeamLeangthLeftById($this->input->post('bid'));

//         	$length = (float)$beam->bim_beam_length_left - (float)$this->input->post('meter');	
        	
//         	$data = array(

//         		'work_meter' => $this->input->post('meter'),
//         		'work_wastage' => $this->input->post('wastage'),
//         		'work_coneweight' => $this->input->post('conew'),
//         		'work_roll_weight' => $this->input->post('rweight'),
//         		'work_used_cone_weight' => $usedcone,
//         		'work_beam_bal' => $length,
//         		'work_no_of_roll_weight' => $this->input->post('noroll'),
//         		'work_core_weight' => $this->input->post('conweight'),
//         	);
        	
//         	$beamd = array(

//         		'bim_beam_length_left' => $length,
//         	);

//         	$this->db->where('work_id',$this->input->post('wrkid'));
//         	$this->db->update('work_assign',$data);

//         	if ($this->db->affected_rows() > 0) {

//         		foreach ($this->input->post('roll_nam') as $key2 => $value2) {
//         			$this->db->set('roll_work_asign_id', $this->input->post('wrkid'));
//         			$this->db->set('roll_machine_id', $this->input->post('mchnid'));
//         			$this->db->set('roll_beam_id', $this->input->post('bid'));
//         			$this->db->set('roll_staff_id', $this->input->post('staff_id'));
//         			$this->db->set('roll_name', $value2);
//         			$this->db->set('roll_length', $this->input->post('roll_lengt')[$key2]);
//         			$this->db->set('roll_weight', $this->input->post('roll_weigh')[$key2]);
//         			$this->db->insert('roll');
//         		}

//         		if($this->db->affected_rows() > 0)
//         		{
//         			$this->db->where('bim_beam_id',$this->input->post('bid'));
//         			$this->db->update('beam_in_machines',$beamd);

//         			if($this->db->affected_rows() > 0)
//         			{
//         				$this->db->set('beam_length_red', $length);
//         				$this->db->where('beam_id',$this->input->post('bid'));
//         				$this->db->update('new_beam');
//         				if($this->db->affected_rows() > 0){
//         					return true;
//         				}else{
//         					return false;
//         				}
//         			}
//         			else{

//         				return false;
//         			}
//         		}
//         		else{

//         			return false;
//         		}
//         	}else{
//         		return false;
//         	}

        	


//         }

//         //insert machine stop and start time
//         public function insertMachineStatus(){

//         	$ndate = date('Y-m-d',strtotime($this->input->post('sdate')));

//         	$time1 = strtotime($this->input->post('stoptime'));
//         	$time2 = strtotime($this->input->post('strttime'));

//         	  $checkTime = $time2;
//         	  $loginTime = $time1;
//         	  $diff = $checkTime - $loginTime;
//         	  if ($diff < 0) {
//         	    $diff =  ($loginTime - $checkTime)-24*60*60;
//         	    $hours = round(abs($diff) / 3600,2);
//         	  }else{
//         	    $diff = $checkTime - $loginTime;
//         	    $hours = round(abs($diff) / 3600,2);
//         	  }
 
//             // $hours = round(abs($time2 - $time1) / 3600,2);
                           
//         	$data = array(

//         		'mstatus_machine_id' => $this->input->post('machid'),
//         		'mstatus_work_id' => $this->input->post('wrkid'),
//         		'mstatus_date' => $ndate,
//         		'mstatus_stop_time' => $this->input->post('stoptime'),
//         		'mstatus_start_time' => $this->input->post('strttime'),
//         		'mstatus_reason' => $this->input->post('reason'),
//         		'mstatus_shift' => $this->input->post('mshift'),
//         		'mstatus_machine_closed' => $hours,
//         		'mstatus_part' => json_encode($this->input->post('part')),
//         		'mstatus_qty' => json_encode($this->input->post('qty')),
//         		'mstatus_amount' => json_encode($this->input->post('amount')),
//         	);

//         	$this->db->insert('machinestatus',$data);

//         	if($this->db->affected_rows() == 1){

//         		return true;
//         	}
//         	else{

//         		return false;
//         	}


//         }

//         //get staff detail by id and date
//         public function getStaffDetailReportById(){

//         	$fdate = date('Y-m-d',strtotime($this->input->post('fdate')));
//         	$sdate = date('Y-m-d',strtotime($this->input->post('sdate')));

//         	if($fdate === $sdate){

//         		$this->db->select('*');
//         		$this->db->from('work_assign wa');
//         		$this->db->join('staff_member sm','sm.staff_id = wa.work_staff_id','inner');
//         		$this->db->join('machines m','m.machine_id = wa.work_machine_id','inner');
//         		$this->db->join('machinestatus ms','ms.mstatus_machine_id = wa.work_machine_id','inner');
//         		$this->db->join('attendance a','a.attendance_staff = wa.work_staff_id','inner');
//         		$this->db->where('wa.work_date', $fdate);
//         		$this->db->where('ms.mstatus_date', $fdate);
//         		$this->db->where('a.attendance_date', $fdate);
//         		$this->db->where('wa.work_staff_id',$this->input->post('staff'));
//         		$this->db->where('a.attendance_staff', $this->input->post('staff'));
//         		$this->db->order_by('wa.work_date');
//         		$this->db->group_by('wa.work_shift');
//         		$query = $this->db->get();

//         		return $query->result();
//         	}
//         	else{

//         		$this->db->select('*');
//         		$this->db->from('work_assign wa');
//         		$this->db->join('staff_member sm','sm.staff_id = wa.work_staff_id','left');
//         		$this->db->join('machines m','m.machine_id = wa.work_machine_id','left');
//         		$this->db->join('machinestatus ms','ms.mstatus_machine_id = wa.work_machine_id','left');
//         		$this->db->join('attendance a','a.attendance_staff = wa.work_staff_id','left');
//         		$this->db->where('wa.work_date >=', $fdate);
//         		$this->db->where('wa.work_date <=', $sdate);
//         		// $this->db->where('ms.mstatus_date >=', $fdate);
//         		// $this->db->where('ms.mstatus_date <=', $sdate);
//         		$this->db->where('a.attendance_date >=', $fdate);
//         		$this->db->where('a.attendance_date <=', $sdate);
//         		$this->db->where('wa.work_staff_id',$this->input->post('staff'));
//         		$this->db->where('a.attendance_staff', $this->input->post('staff'));
//         		$this->db->order_by('wa.work_date');
//         		$this->db->group_by('wa.work_id');

//         		$query = $this->db->get();

//         		return $query->result();
//         	}
        	
//         }

//    // puhupwas start
//    //get staff detail by id and date
//         public function getStaffReportById($staff,$staffyear,$staffmonth){

// 	       	$data = [];
// 	       	$dateS = date('Y-m-d H:i:s', strtotime(trim($staffyear).'-'.trim($staffmonth).'-00'));
// 	       	$dateE = date('Y-m-d H:i:s', strtotime(trim($staffyear).'-'.trim($staffmonth).'-31'));
	       	
// 	       	$this->db->from('allocated_work as aw');
// 	       	$this->db->where('allocated_work_current_date >=', $dateS);
// 	       	$this->db->where('allocated_work_current_date <', $dateE);
// 	       	$this->db->where('allocated_work_staff', $staff);
// 	       	$query = $this->db->get();

// 	       	$result = $query->result_array();


// 	       	$coneE = 0;
// 	       	$beamL = 0;
// 	       	$beamLength =  0;
// 	       	// $allocatedRolls = 0;
// 	       	$wastage = 0;
// 	       	$beamIds = array();
// 	       	$beamName = array();
// 	       	$allocated_work_id = array();
// 	       	// $new_rolls_created = array();
// 	       	$allocated_work_machines = array();

// 	       	foreach ($result as $key => $value) {
// 	       		$allocated_work_id[] = $value['allocated_work_id'];
// 	       		$beamIds[] = $value['allocated_work_beam']; 
// 	       		$allocated_work_machines[] = $value['allocated_work_machines']; 
	       		
// 	       		$coneE += $value['allocated_work_cone_given'];
// 	       		$wastage += $value['allocated_work_wastage'];
// 	       		$beamL += $value['allocated_work_meters_used'];
// 	       		// $allocatedRolls += $value['allocated_work_no_of_rolls']; 
// 	       	}
	       	

// 	       	if (empty($beamIds)) {
// 	       		return $data = '';
// 	       	}

// 	       	$this->db->where_in('beamC_id', $beamIds);
// 	       	$querybeam = $this->db->get('Beam_Created');
// 	       	$resultbeam = $querybeam->result_array();

// 	       	foreach ($resultbeam as $key => $value) {
// 	       		$beamLength = $beamLength + $value['beamC_length'];
// 	       		$beamName[] = $value['beamC_name'];
// 	       	}


// 	       	$this->db->where_in('new_roll_allocated_work_id', $allocated_work_id);
// 	       	$queryRoll = $this->db->get('new_rolls_created');
// 	       	$resultRoll = $queryRoll->result_array();



// 	       	$this->db->where_in('machine_id', $allocated_work_machines);
// 	       	$this->db->select('machine_model');
// 	       	$queryMachine = $this->db->get('new_manufacturing_machines');
// 	       	$resultMachine = $queryMachine->result_array();
	       	
// 	       	$machine_model = array();
// 	       	 foreach ($resultMachine as $key => $value) {
// 	       		$machine_model[] = $value['machine_model'];
// 	       	}

	    

// 	       	$beamNameStr = implode(' , ', $beamName);

// 	       	$metersExcBeamL = $beamLength - $beamL;

// 	       	$resultMachineName = implode(' , ', $machine_model);

// 	       	$tRawUsesd = 0;
// 	       	$inwardType = array();
// 	       	$this->db->where_in('manufacturing_work_allocate_id', $allocated_work_id);
// 	       	$queryRawUased = $this->db->get('manufacturing_work_allocate_inwards_used');
// 	       	$dataRawUased = $queryRawUased->result();
// 	       	foreach ($dataRawUased as $keyRaw => $valueRaw) {
// 	       		$tRawUsesd += $valueRaw->inward_weight;
// 	       		$this->db->where('inward_id', $valueRaw->inward_id);
// 	       		$queryInwardD = $this->db->get('Inward');
// 	       		$inwardType[] = $queryInwardD->row('inward_type').' - '.$queryInwardD->row('inward_type_of_type');
// 	       	}
	       	
// 	       	$rawMaterialsUsedType = implode(", ", array_unique($inwardType));

// 	       	$data = array(
// 	       		'dateS' => $dateS,
// 	       		'dateE' => $dateE,
// 	       		'totalCone' => $coneE,
// 	       		'totalbeam_Length' => $beamL,
// 	       		'metersExcBeamL' => $metersExcBeamL,
// 	       		'beamNameStr' => $beamNameStr,
// 	       		// 'allocatedRolls' => $allocatedRolls,
// 	       		'resultRoll' => $resultRoll,
// 	       		'resultMachineName' => $resultMachineName,
// 	       		'wastage' => $wastage,
// 	       		'work_id' => $allocated_work_id,
// 	       		'raw_material_used_weight' => $tRawUsesd,
// 	       		'rawMaterialsUsedType' => $rawMaterialsUsedType,
// 	       	);
// 	       	return (!empty($data))? $data : '';
        	
//         }

//    // puhupwas ends

//         //get staff detail by date range
//         public function getStaffDetailByDate(){

//         	$datef = date('Y-m-d',strtotime($this->input->post('dfdate')));
//         	$dates = date('Y-m-d',strtotime($this->input->post('dsdate')));
//         	$shift = $this->input->post('shift');

//         	if($datef === $dates){

//         		$this->db->select('ws.*, sm.staff_name, m.machine_model, ms.*, a.attendance_hours');
//         		$this->db->from('work_assign ws');
//         		$this->db->join('staff_member sm','sm.staff_id = ws.work_staff_id','inner');
//         		$this->db->join('machines m','m.machine_id = ws.work_machine_id','inner');
//         		$this->db->join('machinestatus ms','ms.mstatus_machine_id = ws.work_machine_id','inner');
//         		$this->db->join('attendance a','a.attendance_staff = ws.work_staff_id','inner');

//         		$this->db->where('ws.work_date', $datef);
//         		if($shift != ''){

//         			$this->db->where('ws.work_shift',$shift);
//         			$this->db->order_by('ws.work_shift');
//         		}
//         		$this->db->where('ms.mstatus_date', $datef);
//         		$this->db->where('a.attendance_date', $datef);
//         		$this->db->order_by('ws.work_date');


//         		$query = $this->db->get();

//         		return $query->result();
//         	}
//         	else{

//         		$this->db->select('ws.*, sm.staff_name, m.machine_model, ms.*, a.attendance_hours');
//         		$this->db->from('work_assign ws');
//         		$this->db->join('staff_member sm','sm.staff_id = ws.work_staff_id','inner');
//         		$this->db->join('machines m','m.machine_id = ws.work_machine_id','inner');
//         		$this->db->join('machinestatus ms','ms.mstatus_machine_id = ws.work_machine_id','inner');
//         		$this->db->join('attendance a','a.attendance_staff = ws.work_staff_id','inner');
//         		$this->db->where('ws.work_date >=', $datef);
//         		$this->db->where('ws.work_date <=', $dates);
//         		if($shift != ''){

//         			$this->db->where('ws.work_shift',$shift);
//         			$this->db->order_by('ws.work_shift');
//         		}
//         		$this->db->where('ms.mstatus_date >=', $datef);
//         		$this->db->where('ms.mstatus_date <=', $dates);
//         		$this->db->where('a.attendance_date >=', $datef);
//         		$this->db->where('a.attendance_date <=', $dates);
//         		$this->db->order_by('ws.work_date');
//         		$this->db->group_by('ws.work_id');
//         		$query = $this->db->get();

//         		return $query->result();
//         	}
//         }

//         //get machine status by date
//         public function getMachineStatus($date){
        	
//         	$this->db->select('*');
//         	$this->db->from('machinestatus ms');
//         	$this->db->join('machines m','m.machine_id = ms.mstatus_machine_id','inner');
//         	$this->db->where('ms.mstatus_date',$date);
//         	$query = $this->db->get();

//         	return $query->result();
//         }

//         //update 
//         public function updateDetailsAfterWork(){
        	
//         	$wrk = $this->getWorkDetails($this->input->post('wrkid'));

//         	$usedcone = (float)$wrk->work_cone_given - (float)$this->input->post('conew');

//         	$beam = $this->getnewBeamLeangthLeftById($this->input->post('bid'));

//         	$length = (float)$beam->bim_beam_length_left - (float)$this->input->post('meter');	
        		
//         	$data = array(

//         		'work_meter' => $this->input->post('meter'),
//         		'work_wastage' => $this->input->post('wastage'),
//         		'work_roll_weight' => $this->input->post('rweight'),
//         		'work_no_of_roll_weight' => $this->input->post('noroll'),
//         		'work_core_weight' => $this->input->post('conweight'),
//         	);

//         	$this->db->where('work_id',$this->input->post('wrkid'));
//         	$this->db->update('work_assign',$data);

//         	if ($this->db->affected_rows() > 0) {
//         		return true;
//         	}else{
//         		return false;
//         	}
        	
//         }

//         //get beam balance by machine id
//         public function getBeamBalanceById($mid){

//         	$this->db->select('beam_length_red');
//         	$this->db->where('beam_machine_id',$mid);
//         	$this->db->order_by('beam_install_date', 'desc');
//         	$this->db->limit('1');

//         	$query = $this->db->get('beam');

//         	return $query->row();
//         }

//         //get staff attendance status of time out

//        public function getStaffAttendStatus($id, $date){

//        	$this->db->where('attendance_staff',$id);
//        	$this->db->where('attendance_date', $date);

//        	$query = $this->db->get('attendance');

     

//        		if($query->row('attendance_time_out') != null){

//        			return true;
//        		}
//        		else{

//        			return false;
//        		}

//        }

//        //get machine report

//        public function getMachineReport(){

//        	$machine = $this->input->post('machine');
//        	$beam = $this->input->post('bid');

      
//        	$this->db->select('*');
//        	$this->db->from('work_assign');
//        	$this->db->join('new_beam','beam_id = work_beam_id','left');
//        	$this->db->join('machines','machine_id = work_machine_id','left');
//        	$this->db->where('work_beam_id', $beam);
//        	$this->db->where('work_machine_id', $machine);
//        	$query = $this->db->get();

//        	return $query->result();
        	
//        }


//        //fetch maintenance report
//        public function fetchMachineMaintenanceReport(){

//        		$datef = date('Y-m-d',strtotime($this->input->post('fdate')));
//         	$dates = date('Y-m-d',strtotime($this->input->post('sdate')));
        	
//         	if($datef === $dates){

//         		$this->db->select('*');
//         		$this->db->from('machinestatus');
//         		$this->db->join('machines','machine_id = mstatus_machine_id','inner');
//         		$this->db->where('mstatus_date', $datef);
//         		$this->db->where('mstatus_machine_id', $this->input->post('machine'));
//         		$this->db->order_by('mstatus_date');
//         		$query = $this->db->get();

//         		return $query->result();
//         	}
//         	else{

//         		$this->db->select('*');
//         		$this->db->from('machinestatus');
//         		$this->db->join('machines','machine_id = mstatus_machine_id','inner');
//         		$this->db->where('mstatus_date >=', $datef);
//         		$this->db->where('mstatus_date <=', $dates);
//         		$this->db->where('mstatus_machine_id', $this->input->post('machine'));
//         		$this->db->order_by('mstatus_date');
//         		$query = $this->db->get();

//         		return $query->result();
//         	}
//        }

//        //get all machine maintenance report
//        public function fetchAllMachineMaintenance(){

//  			$datef = date('Y-m-d',strtotime($this->input->post('dfdate')));
//         	$dates = date('Y-m-d',strtotime($this->input->post('dsdate')));
        	
//         	if($datef === $dates){

//         		$this->db->select('*');
//         		$this->db->from('machinestatus ms');
//         		$this->db->join('machines m','m.machine_id = ms.mstatus_machine_id','left');
//         		$this->db->where('ms.mstatus_date', $datef);
//         		$this->db->order_by('ms.mstatus_date');
//         		$query = $this->db->get();

//         		return $query->result();
//         	}
//         	else{

//         		$this->db->select('*');
//         		$this->db->from('machinestatus ms');
//         		$this->db->join('machines m','m.machine_id = ms.mstatus_machine_id','left');
//         		$this->db->where('ms.mstatus_date >=', $datef);
//         		$this->db->where('ms.mstatus_date <=', $dates);
//         		$this->db->order_by('ms.mstatus_date');
//         		$query = $this->db->get();

//         		return $query->result();
//         	}      	


//        }

//        public function Insert_raw_materials(){
//        	$this->db->set('weight', $this->input->post('weight'));
//        	$this->db->set('name', $this->input->post('name'));
//        	$this->db->set('inward_type', $this->input->post('raw_material_type'));
//        	$this->db->set('inward_type_of_type', $this->input->post('raw_custom_type'));
//        	$this->db->set('machine_id', $this->input->post('select_machines'));
//        	if (!empty($this->input->post('date'))) {
//        			$this->db->set('time', date('Y-m-d H:i:s', strtotime($this->input->post('date'))) );
//        		}
//        	$this->db->insert('raw_materials');
//        	if ($this->db->affected_rows() > 0) {
//        		$this->db->where('inward_type', $this->input->post('raw_material_type'));
//        		$this->db->where('inward_type_of_type', $this->input->post('raw_custom_type'));
//        		$query = $this->db->get('Inward');
//        		$inward_weight = $query->row('inward_weight');
//        		$id = $query->row('inward_id');
//        		$new_weight = $inward_weight - $this->input->post('weight');
//        		$this->db->set('inward_weight', $new_weight);
//        		$this->db->where('inward_id', $id);
//        		$this->db->update('Inward');

//        		$this->db->where('Machine_id', $this->input->post('select_machines'));
//        		$query2 = $this->db->get('Machine_details');
//        		if ($query2->num_rows() > 0) {
//        			$weight_in_machines = $query2->row('Present_weight');
//        			$new_weight = $weight_in_machines + $this->input->post('weight');
//        			$this->db->set('Present_weight', $new_weight);
//        			$this->db->where('Machine_id', $this->input->post('select_machines'));
//        			$this->db->update('Machine_details');
//        		}else{
//        			$this->db->set('Machine_id', $this->input->post('select_machines'));
//        			$this->db->set('Present_weight', $this->input->post('weight'));
//        			$this->db->insert('Machine_details');
//        		}
//        		if ($this->db->affected_rows() > 0) {
//        			return true;
//        		}

//        	}
//        }

//        public function Get_all_raw_materials(){
//        	$this->db->order_by('time DESC');
//        	$query = $this->db->get('raw_materials');
//        	return $query->result();
//        }

//        public function Calculate_raw_minus_beam(){
//        	$query = $this->db->get('raw_materials');
//        	$result = $query->result();
//        	if ($query->num_rows() > 0) {
//        		$x = 0;
//        		foreach ($result as $key => $value) {
//        			$weight[$x] = $value->weight;
//        			$x++;
//        		}
//        		return array_sum($weight);
//        	}else{
//        		$weight = 0;
//        		return $weight;
//        	}
//        }

//        public function Calculate_totalbeam_weight(){
//        	$query = $this->db->get('new_beam');
//        	$result = $query->result();
//        	if ($query->num_rows() > 0) {
//        		$x = 0;
//        		foreach ($result as $key => $value) {
//        			$tweight[$x] = $value->beam_weight;
//        			$x++;
//        		}
//        		$net_weight = array_sum($tweight);


//        		$y = 0;
//        		foreach ($result as $key => $values) {
//        			$weight_wastage[$y] = $values->beam_wastage;
//        			$y++;
//        		}
//        		$twastage_weight = array_sum($weight_wastage);
//        		$weight = $net_weight + $twastage_weight;
//        		return $weight;
//        	}else{
//        		$weight = 0;
//        		return $weight;
//        	}
//        }

//        public function Insert_Beam(){
//        	$this->db->set('beam_weight', $this->input->post('weight'));
//        	$this->db->set('beam_length', $this->input->post('length'));
//        	$this->db->set('beam_wastage', $this->input->post('wastage'));
//        	$this->db->set('beam_name', $this->input->post('name'));
//        	$this->db->set('beam_length_red', $this->input->post('length'));
//        	$this->db->insert('new_beam');
//        	if ($this->db->affected_rows() > 0) {
//        		return true;
//        	}
//        }

//        public function Get_all_beam(){
//        	$this->db->order_by('beam_time DESC');
//        	$query = $this->db->get('new_beam');
//        	return $query->result();
//        }


//        public function Get_beams_not_used(){
//        	$this->db->where('beam_used_status', '0');
//        	$this->db->order_by('beam_time DESC');
//        	$query = $this->db->get('new_beam');
//        	return $query->result();
//        }


//        public function Get_beam_by_id_ajax($beam_id){
//        	$this->db->where('beam_id', $beam_id);
//        	$query = $this->db->get('new_beam');
//        	return $query->row();
//        }

//        public function Add_beam_in_machine(){
//        	$this->db->set('machine_beam_id', $this->input->post('select_beam'));
//        	$this->db->where('machine_id', $this->input->post('machine_id'));
//        	$this->db->update('machines');
//        	if ($this->db->affected_rows() > 0) {
//        		return true;
//        	}
//        }

//        public function Change_beam_status(){
//        	$this->db->set('beam_used_status', '1');
//        	$this->db->where('beam_id', $this->input->post('select_beam'));
//        	$this->db->update('new_beam');
//        	if ($this->db->affected_rows() > 0) {
//        		return true;
//        	}
//        }


//        public function Get_machine_details_by_id($machine_id){
//        	$this->db->where('machine_id', $machine_id);
//        	$query = $this->db->get('machines');
//        	return $query->row();
//        }

//        public function Add_beam_in_machine2(){
//        	$this->db->set('bim_beam_id', $this->input->post('select_beam'));
//        	$this->db->set('bim_machine_id', $this->input->post('machine_id'));
//        	$this->db->set('bim_beam_length_left', $this->input->post('length'));
//        	$this->db->set('bim_beam_weight_left', $this->input->post('weight'));
//        	$this->db->insert('beam_in_machines');
//        	if ($this->db->affected_rows() > 0) {
//        		return true;
//        	}
//        }


//        public function get_all_beams_by_machine_id($machine_id){
//        	$this->db->from('beam_in_machines');
//        	$this->db->join('new_beam','beam_id = bim_beam_id','inner');
//        	$this->db->where('bim_machine_id', $machine_id);
//        	$this->db->order_by('bim_time DESC');
//        	$query = $this->db->get();
//        	return $query->result();
//        }


//        public function Check_beam_length_left_in_machine($machine_id){
//        	$this->db->where('bim_machine_id', $machine_id);
//        	$this->db->order_by('bim_time DESC');
//        	$this->db->limit('1');
//        	$query = $this->db->get('beam_in_machines');
//        	return $query->row('bim_beam_length_left');
//        }

//        //get All roll which are not used
//        public function getAllRoll($condition)
//        {
//        		$this->db->where($condition);
//        		return $this->db->get('roll')->result();

//        }

//        //get roll detail by id
//        public function getRollDetailById($condition)
//        {
//        		$this->db->where($condition);
//        		return $this->db->get('roll')->row();
//        }

//        //add roll before coating
//        public function addCoatingRoll()
//        {
//        		$this->db->set('coating_roll_name',$this->input->post('rname',true));
//        		$this->db->set('coating_roll_id',$this->input->post('rollid',true));
//        		$this->db->set('coating_roll_weight',$this->input->post('rweight',true));
//        		$this->db->set('coating_roll_length',$this->input->post('rlength',true));

//        		$this->db->insert('coating');

//        		if($this->db->affected_rows() === 1)
//        		{
//        			return true;
//        		}
//        		else
//        		{
//        			return false;
//        		}
//        } 

//        //changes status of the roll
//        public function changeStatusOfRoll($rollid)
//        {
//        		$this->db->set('roll_status',1);
//        		$this->db->where('roll_id',$rollid);

//        		$this->db->update('roll');

//        		if($this->db->affected_rows() > 0)
//        		{
//        			return true;
//        		}
//        }

//        //get roll which are not coated yet
//        public function getRollCoat()
//        {
//        		return $this->db->get('coating')->result();
//        }

//        public function getRollCoated_stack()
//        {
//        		$this->db->where('coating_status_cutting', '1');
//        		return $this->db->get('coating')->result();
       			
//        }

//        public function getRoll_not_Coated_stack()
//        {
//        		$this->db->where('coating_status_cutting', '0');
//        		return $this->db->get('coating')->result();
       			
//        }

//        public function addRollAfterCoating()
//        {
//        		$this->db->set('coating_roll_weight_after_coating',$this->input->post('roll_weight_after',true));
//        		$this->db->set('coating_chemical',$this->input->post('chemical',true));
//        		$this->db->set('coating_color',$this->input->post('color',true));
//        		$this->db->set('coating_status_cutting',1);

//        		$this->db->where('coating_id',$this->input->post('crollid',true));

//        		$this->db->update('coating');

//        		if($this->db->affected_rows() > 0)
//        		{
//        			return true;
//        		}
//        		else
//        		{
//        			return false;
//        		}
//        }

//        public function getCoatingRoll($condition)
//        {
//        		$this->db->where($condition);
//        		return $this->db->get('coating')->result();

//        }

//        public function getCoatingRollDetailForCuttingById($condition)
//        {

//        		$this->db->where($condition);
//        		return $this->db->get('coating')->row();
//        }

//        //
//        public function addCuttingRoll()
//        {
//        		$this->db->set('cutting_roll_name',$this->input->post('rname',true));
//        		$this->db->set('cutting_coating_roll_id',$this->input->post('rollid',true));
//        		$this->db->set('cutting_roll_weight',$this->input->post('rweight',true));
//        		$this->db->set('cutting_roll_length',$this->input->post('rlength',true));
//        		$this->db->set('cutting_weight_deduct',$this->input->post('rweight',true));
//        		$this->db->set('cutting_length_deduct',$this->input->post('rlength',true));

//        		$this->db->insert('cutting');

//        		if($this->db->affected_rows() > 0)
//        		{
//        			return true;
//        		}
//        		else
//        		{
//        			return false;
//        		}
//        }

//        //
//        public function changeStatusOfRollCoating($crollid)
//        {
//        		$this->db->set('coating_status',1);
//        		$this->db->where('coating_id',$crollid);

//        		$this->db->update('coating');

//        		if($this->db->affected_rows() > 0)
//        		{
//        			return true;
//        		}
//        		else
//        		{
//        			return false;
//        		}
//        }

//        //
//        public function getRollAddedForCutting()
//        {
//        		return $this->db->get('cutting')->result();
//        }

//        //
//        public function addSheetFromRollCut()
//        {
//        		$this->db->set('fcr_roll_name',$this->input->post('rollname',true));
//        		$this->db->set('fcr_coating_id',$this->input->post('coatrollid',true));
//        		$this->db->set('fcr_cutting_id',$this->input->post('cutrollid',true));
//        		$this->db->set('fcr_weight',$this->input->post('sheetweight',true));
//        		$this->db->set('fcr_length',$this->input->post('sheetlength',true));
//        		$this->db->set('fcr_wastage',$this->input->post('sheetwastage',true));

//        		$this->db->insert('finished_cut_roll');

//        		if($this->db->affected_rows() === 1)
//        		{
//        			$cuttingid  = $this->input->post('cutrollid',true);
//        			$length = $this->input->post('sheetlength',true);
//        			$weight = $this->input->post('sheetweight',true);
//        			$waste = $this->input->post('sheetwastage',true);

//        			$this->adjustRollInCutting($cuttingid, $length, $weight, $waste);
//        			return true;
//        		}
//        		else
//        		{
//        			return false;
//        		}
//        }

//        //
//        public function adjustRollInCutting($cuttingid, $length, $weight, $waste)
//        {
//        		$cut = $this->getCoatingRollDetailForCuttingById(['cutting_id' => $cuttingid]);

//        		$rlength = (float)$cut->cutting_length_deduct - (float)$length;
//        		$rweight = (float)$cut->cutting_weight_deduct - (float)$weight - (float)$waste;

//        		$data = array(

//        				'cutting_length_deduct' => $rlength,
//        				'cutting_weight_deduct' => $rweight
//        		);

//        		$this->db->where('cutting_id',$cuttingid);
//        		$this->db->update('cutting',$data);

//        		if($this->db->affected_rows() > 0)
//        		{
//        			return true;
//        		}
//        		else
//        		{
//        			return false;
//        		}

//        }

//        //
//        public function getFinishedSheet($roll_id)
//        {
//        		$this->db->where('fcr_cutting_id',$roll_id);
//        		return $this->db->get('finished_cut_roll')->result();
//        }


//        public function Get_roll_by_id($work_id,$work_beam_id,$work_machine_id,$work_staff_id){
//        	$this->db->where('roll_work_asign_id', $work_id);
//        	$this->db->where('roll_machine_id', $work_machine_id);
//        	$this->db->where('roll_beam_id', $work_beam_id);
//        	$this->db->where('roll_staff_id', $work_staff_id);
//        	$query = $this->db->get('roll');
//        	return $query->result();
//        }

//        public function Add_customers(){
//        	$data = array(
//        		'customer_name' => $this->input->post('company_name'),
//        		'customer_location' => $this->input->post('company_location'),
//        		'customer_number' => $this->input->post('company_number'),
//        		'customer_email' => $this->input->post('email_id'),
//        		'customer_description' => $this->input->post('description'),
//        	);
//        	$this->db->insert('customers', $data);
//        	if ($this->db->affected_rows() > 0 ) {
//        		return true;
//        	}
//        }

//        public function Get_all_customers(){
//        	$this->db->order_by('customer_created_date DESC');
//        	$query = $this->db->get('customers');
//        	return $query->result();
//        }

//        public function Edit_customers(){
//        	$data = array(
//        		'customer_name' => $this->input->post('company_name'),
//        		'customer_location' => $this->input->post('company_location'),
//        		'customer_number' => $this->input->post('company_number'),
//        		'customer_email' => $this->input->post('email_id'),
//        		'customer_description' => $this->input->post('description'),
//        	);
//        	$this->db->where('customer_id', $this->input->post('customer_id'));
//        	$this->db->update('customers', $data);
//        	if ($this->db->affected_rows() > 0 ) {
//        		return true;
//        	}
//        }

//        public function Delete_customers($id){
//        		$this->db->where('customer_id', $id);
//        		$this->db->delete('customers');
//        		if ($this->db->affected_rows() > 0 ) {
//        			return true;
//        		}
//        	}

//        public function getCuttingRollDetailForCuttingById($condition)
//        {

//        		$this->db->where($condition);
//        		return $this->db->get('cutting')->row();
//        }

//        public function stock_all_rolls(){
//        	$this->db->order_by('roll_made_date DESC');
//        	 $query = $this->db->get('roll');
//        	 return $query->result();
//        }

//        public function get_machine_by_id($machine_id){
//        	$this->db->where('machine_id', $machine_id);
//        	$query = $this->db->get('machines');
//        	return $query->row();
//        }

//        public function get_beam_by_id($beam_id){
//        	$this->db->where('beam_id', $beam_id);
//        	$query = $this->db->get('new_beam');
//        	return $query->row();
//        }

//        public function get_staff_by_id($staff_id){
//        	$this->db->where('staff_id', $staff_id);
//        	$query = $this->db->get('staff_member');
//        	return $query->row();
//        }

//        public function stock_rolls_sent(){
//        	$this->db->where('roll_status', 1);
//        	$this->db->order_by('roll_made_date DESC');
//        	 $query = $this->db->get('roll');
//        	 return $query->result();
//        }

//        public function stock_rolls_not_sent(){
//        	$this->db->where('roll_status', 0);
//        	$this->db->order_by('roll_made_date DESC');
//        	 $query = $this->db->get('roll');
//        	 return $query->result();
//        }

//        public function Add_other_stock_fn(){
//        	$this->db->set('other_stock_name', $this->input->post('name'));
//        	$this->db->set('other_stock_qty', $this->input->post('qty'));
//        	$this->db->set('other_stock_weight', $this->input->post('weight'));
//        	$this->db->set('other_stock_lenght', $this->input->post('length'));
//        	$this->db->set('other_stock_description', $this->input->post('description'));
//        	$this->db->insert('other_stock');
//        	if ($this->db->affected_rows() > 0) {
//        		return true;
//        	}
//        }

//        public function get_other_stocks_all(){
//        	$this->db->order_by('other_stock_created DESC');
//        	$query = $this->db->get('other_stock');
//        	return $query->result();
//        }


//        public function Update_other_stock_fn(){
//        	$this->db->set('other_stock_name', $this->input->post('name'));
//        	$this->db->set('other_stock_qty', $this->input->post('qty'));
//        	$this->db->set('other_stock_weight', $this->input->post('weight'));
//        	$this->db->set('other_stock_lenght', $this->input->post('length'));
//        	$this->db->set('other_stock_description', $this->input->post('description'));
//        	$this->db->where('other_stock_id', $this->input->post('id'));
//        	$this->db->update('other_stock');
//        	if ($this->db->affected_rows() > 0) {
//        		return true;
//        	}
//        }

//        public function Delete_other_stock($id){
//        	$this->db->where('other_stock_id', $id);
//        	$this->db->delete('other_stock');
//        	if ($this->db->affected_rows() > 0) {
//        		return true;
//        	}
//        }

//        public function Gett_all_rolls(){
//        	$this->db->where('roll_sales_status', '0');
//        	$query = $this->db->get('roll');
//        	if ($query->num_rows() > 0) {
//        		return $query->result();
//        	}else{
//        		return false;
//        	}
//        }

//        public function Gett_all_rollsWhere_coating_complete(){
//        	$this->db->from('coating');
//        	$this->db->where('coating_status_cutting', '1');
//        	$this->db->join('roll', 'roll.roll_id = coating.coating_roll_id', 'inner');
//        	$this->db->where('roll_sales_status', '0');
//        	$query = $this->db->get();
//        	if ($query->num_rows() > 0) {
//        		return $query->result();
//        	}else{
//        		return false;
//        	}
//        }

//        public function Gett_all_rollsWhere_cutting_complete(){
//        	$this->db->from('cutting');
//        	$this->db->join('coating', 'coating.coating_id = cutting.cutting_coating_roll_id', 'inner');
//        	$this->db->join('roll', 'roll.roll_id = coating.coating_roll_id', 'inner');
//        	$this->db->where('roll_sales_status', '0');
//        	$query = $this->db->get();
//        	if ($query->num_rows() > 0) {
//        		return $query->result();
//        	}else{
//        		return false;
//        	}
//        }

//        public function Add_sales(){
//        	$this->db->set('sales_roll_type', $this->input->post('roll_type'));
//        	$this->db->set('sales_roll_id', $this->input->post('roll'));
//        	$this->db->set('sales_company_id', $this->input->post('com_name'));
//        	$this->db->set('sales_price', $this->input->post('price'));
//        	$this->db->set('sales_qty', $this->input->post('Quantity'));
//        	$this->db->insert('sales');
//        	if ($this->db->affected_rows() > 0) {
//        		$this->db->set('roll_sales_status', '1');
//        		$this->db->where('roll_id', $this->input->post('roll'));
//        		$this->db->update('roll');
//        		if ($this->db->affected_rows() > 0) {
//        			return true;
//        		}
//        	}
//        }

//        public function get_all_Sales(){
//        	$this->db->order_by('sales_created DESC');
//        	return $this->db->get('sales')->result();
//        }

//        public function get_roll_details_by_roll_id($roll_id){
//        	$this->db->where('roll_id', $roll_id);
//        	return $this->db->get('roll')->row();
//        }

//        public function get_customers_detsils_by_customer_id($customer_id){
//        	$this->db->where('customer_id', $customer_id);
//        	return $this->db->get('customers')->row();
//        }

//        public function Update_sales(){
//        	$this->db->set('sales_roll_type', $this->input->post('roll_type'));
//        	$this->db->set('sales_roll_id', $this->input->post('roll'));
//        	$this->db->set('sales_company_id', $this->input->post('com_name'));
//        	$this->db->set('sales_price', $this->input->post('price'));
//        	$this->db->set('sales_qty', $this->input->post('Quantity'));
//        	$this->db->where('sales_id', $this->input->post('sales_id'));
//        	$this->db->update('sales');
//        	if ($this->db->affected_rows() > 0) {
//        		return true;
//        	}
//        }

//        public function Delete_sales($sales_id,$roll_id){
//        	$this->db->where('sales_id', $sales_id);
//        	$this->db->delete('sales');
//        	if ($this->db->affected_rows() > 0) {
//        		$this->db->set('roll_sales_status', '0');
//        		$this->db->where('roll_id', $roll_id);
//        		$this->db->update('roll');
//        		if ($this->db->affected_rows() > 0) {
//        			return true;
//        		}
//        	}
//        }

//        public function add_raw_materials(){

//        	$this->db->where('inward_type', $this->input->post('raw_material_type'));
//        	$this->db->where('inward_type_of_type', $this->input->post('raw_custom_type'));
//        	$query = $this->db->get('Inward');
//        	if ($query->num_rows() > 0) {
//        		$weight = $query->row('inward_weight');
//        		$new_weight = $weight + $this->input->post('weight');
//        		$this->db->set('inward_weight', $new_weight);
//        		if ($this->input->post('raw_material_type') === 'Yarn') {
//        			$no_of_cartons = $query->row('inward_no_of_cartons');
//        			$total_no_of_cartons = $no_of_cartons + $this->input->post('no_of_cartons');
//        			$this->db->set('inward_no_of_cartons', $total_no_of_cartons);
//        			$avg = $new_weight / $total_no_of_cartons;
//        			$this->db->set('inward_avg_weight', $avg);
//        		}

//        		if (!empty($this->input->post('date'))) {
//        			$this->db->set('inward_date', date('Y-m-d H:i:s', strtotime($this->input->post('date'))) );
//        		}

//        		$this->db->where('inward_type', $this->input->post('raw_material_type'));
//        		$this->db->where('inward_type_of_type', $this->input->post('raw_custom_type'));
//        		$this->db->update('Inward');
//        	}else{
//        		$this->db->set('inward_type', $this->input->post('raw_material_type'));
//        		$this->db->set('inward_weight', $this->input->post('weight'));
//        		$this->db->set('inward_type_of_type', $this->input->post('raw_custom_type'));
//        		if ($this->input->post('raw_material_type') === 'Yarn') {
//        			$this->db->set('inward_no_of_cartons', $this->input->post('no_of_cartons'));
//        			$avg = $this->input->post('weight') / $this->input->post('no_of_cartons');
//        			$this->db->set('inward_avg_weight', $avg);
//        		}
//        		if (!empty($this->input->post('date'))) {
//        			$this->db->set('inward_date', date('Y-m-d H:i:s', strtotime($this->input->post('date'))) );
//        		}
//        		$this->db->insert('Inward');
//        	}
//        		return true;
//        }


//       public function edit_inward_data(){

//        	$this->db->set('inward_weight', $this->input->post('weight'));
//        	if ($this->input->post('raw_material_type') === 'Yarn') {
//        		$this->db->set('inward_no_of_cartons', $this->input->post('no_of_cartons'));
//        		$avg = $this->input->post('weight') / $this->input->post('no_of_cartons');
//        		$this->db->set('inward_avg_weight', $avg);
//        	}
//        	$this->db->where('inward_id', $this->input->post('id'));
//        	$this->db->update('Inward');
//        	return true;

//        }


//      public function Get_all_new_raw_materials(){
//        	$this->db->order_by('inward_date DESC');
//        	$query = $this->db->get('Inward');
//        	return $query->result();
//        }


//        public function delete_Raw_material($inward_id){
//        	$this->db->where('inward_id', $inward_id);
//        	$this->db->delete('Inward');
//        	if ($this->db->affected_rows() > 0) {
//        		return true;
//        	}
//        }

//        public function getRawMaterialDetailsByItSTwoTypes(){
//        	$this->db->where('inward_type', $this->input->post('firsttype'));
//        	$this->db->where('inward_type_of_type', $this->input->post('secondtype'));
//        	$query = $this->db->get('Inward');
//        	return $query->row();
//        }

//        public function Add_new_machines()
//        {
//        	$this->db->where('mac_name', $this->input->post('machine_name'));
//        	$query = $this->db->get('New_Machines');
//        	if ($query->num_rows() > 0) {
//        		return "MP";
//        	}else{
//        		$this->db->set('mac_name', $this->input->post('machine_name'));
//        		$this->db->insert('New_Machines');
//        		if ($this->db->affected_rows() > 0) {
//        			return true;
//        		}
//        	}
//        }

//        public function get_all_machines()
//        {
//        		// $this->db->where('mac_id', $machine_id);
//        		$this->db->order_by('mac_id DESC');
//        		$query = $this->db->get('New_Machines');
//        		return $query->result();

//        }

//        public function Edit_new_machine(){
//        	$this->db->where('mac_name', $this->input->post('machine_name'));
//        	$query = $this->db->get('New_Machines');
//        	if ($query->num_rows() > 0) {
//        		return "MP";
//        	}else{
//        		$this->db->set('mac_name', $this->input->post('machine_name'));
//        		$this->db->where('mac_id', $this->input->post('mid'));
//        		$this->db->update('New_Machines');
//        		if ($this->db->affected_rows() > 0) {
//        			return true;
//        		}
//        	}
//        }

//        public function Delete_new_machines($machine_id)
//        {
//        	$this->db->where('mac_id', $machine_id);
//        	$this->db->delete('New_Machines');
//        	if ($this->db->affected_rows() > 0) {
//        		return true;
//        	}
//        }


//        public function Get_Inward_second_type(){
//        	$this->db->where('inward_type', $this->input->post('param1'));
//        	$query = $this->db->get('Inward');
//        	if ($query->num_rows() > 0) {
//        		return $query->result();
//        	}else{
//        		return false;
//        	}
//        }


//        public function get_machine_name_by_id($machine_id){
//        	$this->db->where('mac_id', $machine_id);
//        	$query = $this->db->get('New_Machines');
//        	return $query->row();
//        }


//        public function get_machine_present_weight_by_id($machine_id){
//        	$this->db->where('Machine_id', $machine_id);
//        	$query = $this->db->get('Machine_details');
//        	return $query->row();
//        }

//        public function get_last_inward_in_warping_by_id($machine_id){
//        	$this->db->where('machine_id', $machine_id);
//        	$this->db->order_by('raw_mat_id DESC');
//        	$query = $this->db->get('raw_materials');
//        	return $query->row();
//        }

//        public function get_machines_where_inward_added()
//        {
//        		$query = $this->db->query("SELECT * FROM `Machine_details` WHERE `Present_weight` > 0");
//        		$machine_where_inward_has_been_added = $query->result();
//        		foreach ($machine_where_inward_has_been_added as $key => $value) {
//        			$machine_id[] = $value->Machine_id;
//        		}
//        		$Machine_details = array();
//        		foreach ($machine_id as $key => $valuei) {
//        			$query1 = $this->db->query("SELECT * FROM `New_Machines` WHERE `mac_id` = '$valuei'");
//        			if($query1->num_rows() > 0){
//        			$Machine_details[] = $query1->row();
//        			}
//        		}
//        		return $Machine_details;
//        }

//        public function get_weight_of_machine_where_inward_is_assigned(){
//        		$this->db->where('Machine_id', $this->input->post('param1'));
//        		$query = $this->db->get('Machine_details');
//        		return $query->row();
//        }

//        public function Add_New_Beam(){

//        	$this->db->where('beamC_name', $this->input->post('Beam_Name'));
//        	$query = $this->db->get('Beam_Created');
//        	if ($query->num_rows() > 0) {
//        		return 'al_name';
//        	}else{
//        		if(!empty($this->input->post('selectDate'))) {
//        			$date = date('Y-m-d H:i:s', strtotime($this->input->post('selectDate')));
//        			$this->db->set('beamC_time', $date);
//        		}
//        		$this->db->set('beamC_weight', $this->input->post('beam_weight'));
//        		$this->db->set('beamC_length', $this->input->post('length'));
//        		$this->db->set('beamC_name', $this->input->post('Beam_Name'));
//        		$this->db->set('beamC_machine_id', $this->input->post('select_machines'));
//        		$this->db->insert('Beam_Created');
//        		if ($this->db->affected_rows() > 0) {
//        			$this->db->where('Machine_id', $this->input->post('select_machines'));
//        			$query2 = $this->db->get('Machine_details');
//        			$weight = $query2->row('Present_weight');
//        			$new_weight = $weight - $this->input->post('beam_weight');

//        			$this->db->set('Present_weight', $new_weight);
//        			$this->db->where('Machine_id', $this->input->post('select_machines'));
//        			$this->db->update('Machine_details');
//        			if ($this->db->affected_rows() > 0) {
//        				return true;
//        			}
//        		}

//        	}
//        }


//        public function all_beams(){
//        	$this->db->order_by('beamC_id DESC');
//        	$query = $this->db->get('Beam_Created');
//        	return $query->result();
//        }



//        public function staffs_present_today()
//        {
//        	 $date = new DateTime("now");

//        	 $curr_date = $date->format('Y-m-d ');

//        	 $this->db->select('*');
//        	 $this->db->from('attendance');
//        	 $this->db->where('DATE(attendance_date)',$curr_date);
//        	 $this->db->where('attendance_status', '1');
//        	 $query = $this->db->get();
//        	 return $query->result();
//        }


//        public function stafs_already_assigned_work($data){
//        	if (!empty($data)) {
//        		foreach ($data as $key => $value) {
//        			$staff_id[] = $value->attendance_staff;
//        		}
//        		$date = new DateTime("now");

//        		$curr_date = $date->format('Y-m-d ');

//        		$this->db->select('*');
//        		$this->db->from('allocated_work');
//        		$this->db->where('DATE(allocated_work_current_date)',$curr_date);
//        		$this->db->where_in('allocated_work_staff', $staff_id);
//        		$query = $this->db->get();
//        		return $query->result();
//        	}else{
//        		return null;
//        	}
//        }

//        public function staff_availability_list($data, $attandence){

//        	// Staffs which are already assigned today
//        	if (!empty($data)) {
//        		foreach ($data as $key => $value) {
//        			$staff_id[] = $value->allocated_work_staff;
//        		}
//        	}

//        	// Staffs who is present today
//        	if (!empty($attandence)) {
//        		foreach ($attandence as $key => $value2) {
//        			$staff_id_attn[] = $value2->attendance_staff;
//        		}
//        	}



//        	if (empty($data) && empty($attandence)) {
//        		return null;
//        	}

//        	if (empty($attandence)) {
//        		return null;
//        	}

//        	if (!empty($data) && !empty($attandence)) {
       		
//        		$new_staff_id = array_diff($staff_id_attn, $staff_id);

//        		$this->db->select('*');
//        		$this->db->from('staff_member');
//        		$this->db->where_in('staff_id', $new_staff_id);
//        		$query = $this->db->get();
//        		return $query->result();
//        	}elseif (empty($data) && !empty($attandence)) {
//        		$this->db->select('*');
//        		$this->db->from('staff_member');
//        		$this->db->where_in('staff_id', $staff_id_attn);
//        		$query = $this->db->get();
//        		return $query->result();
//        	}else{
//        		return null;
//        	}

//        }

//        public function machines_already_assigned_today(){

//        	$date = new DateTime("now");

//        	$curr_date = $date->format('Y-m-d ');

//        	$this->db->select('*');
//        	$this->db->from('allocated_work');
//        	$this->db->where('DATE(allocated_work_current_date)',$curr_date);
//        	$query = $this->db->get();
//        	return $query->result();

//        }


//        public function machines_which_r_free_today($data) {

//        	// if (!empty($data)) {
//        	// 	foreach ($data as $key => $value) {
//        	// 		$machine_id[] = $value->allocated_work_machines;
//        	// 	}
//        	// 	$this->db->where_not_in('machine_id', $machine_id);
//        	// }

//        	$this->db->select('*');
//        	$this->db->from('new_manufacturing_machines');
//        	$query = $this->db->get();
//        	return $query->result();
//        }


//        public function beams_which_r_not_used() {
//        	$this->db->where('beamC_usedStatus', '0');
//        	$query = $this->db->get('Beam_Created');
//        	return $query->result();
//        }


//        public function DeleteAllocatedWork($allocted_id) {
//        	$this->db->where('allocated_work_id', $allocted_id);
//        	$query = $this->db->delete('allocated_work');
//        	if ($this->db->affected_rows() > 0) {
//        		return true;
//        	}
//        }


//        public function DeleteAllocatedWork_RollCreated($allocted_id) {
//        	$this->db->where('new_roll_allocated_work_id', $allocted_id);
//        	$this->db->delete('new_rolls_created');
//        	return true;
//        }

//        public function changeBeamStatusOnDelete($beam_id, $metre_used) {
       	
//        	$this->db->where('beamC_id', $beam_id);
//        	$old_total_metre_used = $this->db->get('Beam_Created')->row('beamC_length');
//        	$new_total_metre_used = $old_total_metre_used + $metre_used;

//        	$this->db->set('beamC_usedStatus', '1');
//        	$this->db->set('beamC_length', $new_total_metre_used);
//        	$this->db->where('beamC_id', $beam_id);
//        	$this->db->update('Beam_Created');
//        	return true;
//        }


//        public function addNewAllocatedWork() {
//        	if (!empty($this->input->post('Date'))) {
//        		$this->db->set('allocated_work_current_date', date('Y-m-d H:i:s', strtotime($this->input->post('Date'))));
//        	}
//        	$this->db->set('allocated_work_shift_type', $this->input->post('shift_type'));
//        	$this->db->set('allocated_work_staff', $this->input->post('staff'));
//        	$this->db->set('allocated_work_machines', $this->input->post('Machines'));
//        	$this->db->set('allocated_work_beam', $this->input->post('Beam'));
//        	$this->db->set('allocated_work_meters_used', $this->input->post('meters_used'));
//        	$this->db->set('allocated_work_cone_given', $this->input->post('cone_given'));
//        	$this->db->set('allocated_work_wastage', $this->input->post('wastage'));
//        	// $this->db->set('allocated_work_raw_material_weight', $this->input->post('raw_material_weight'));
//        	// $this->db->set('allocated_work_raw_material_id', $this->input->post('raw_material_id'));
//        	// $this->db->set('allocated_work_raw_material_name', $this->input->post('raw_material_name'));
//        	$this->db->insert('allocated_work');
//        	if ($this->db->affected_rows() > 0) {
//        		return array(
//        			'status' => true,
//        			'insertId' => $this->db->insert_id(),
//        		);
//        	}
//        }


//        public function editNewAllocatedWork() {
//        	$this->db->set('allocated_work_shift_type', $this->input->post('shift_type'));
//        	$this->db->set('allocated_work_staff', $this->input->post('staff'));
//        	$this->db->set('allocated_work_machines', $this->input->post('Machines'));
//        	$this->db->set('allocated_work_beam', $this->input->post('Beam'));
//        	$this->db->set('allocated_work_meters_used', $this->input->post('meters_used'));
//        	$this->db->set('allocated_work_cone_given', $this->input->post('cone_given'));
//        	$this->db->set('allocated_work_wastage', $this->input->post('wastage'));
//        	$this->db->where('allocated_work_id', $this->input->post('id'));
//        	$this->db->update('allocated_work');
//    		return array(
//    			'status' => true,
//    			'insertId' => $this->input->post('id'),
//    		);
//        }


//        public function addRollsAfterWorkAllocation($id) {
//        	if (!empty($this->input->post('roll_weightF'))) {
//        		foreach ($this->input->post('roll_weightF') as $key => $value) {
//        			$this->db->set('new_roll_allocated_work_id', $id);
//        			$this->db->set('new_roll_typef', 'finished');
//        			$this->db->set('new_roll_type', $this->input->post('roll_typeF')[$key]);
//        			$this->db->set('new_roll_length', $this->input->post('roll_lengthF')[$key]);
//        			$this->db->set('new_roll_name', $this->input->post('roll_nameF')[$key]);
//        			$this->db->set('new_roll_weight', $value);
//        			$this->db->insert('new_rolls_created');
//        		}
//        	}

//        	if (!empty($this->input->post('roll_weightU'))) {
//        		foreach ($this->input->post('roll_weightU') as $key2 => $value2) {
//        			$this->db->set('new_roll_allocated_work_id', $id);
//        			$this->db->set('new_roll_typef', 'unfinished');
//        			$this->db->set('new_roll_type', $this->input->post('roll_typeU')[$key2]);
//        			$this->db->set('new_roll_name', $this->input->post('roll_nameU')[$key2]);
//        			$this->db->set('new_roll_weight', $value2);
//        			$this->db->insert('new_rolls_created');
//        		}
//        	}
//        	return true;
//        }


//        public function editRollsAfterWorkAllocation($id) {
//        	$this->db->where('new_roll_allocated_work_id', $id);
//        	$this->db->delete('new_rolls_created');
//        	foreach ($this->input->post('roll_weight') as $key => $value) {
//        		$this->db->set('new_roll_allocated_work_id', $id);
//        		$this->db->set('new_roll_weight', $value);
//        		$this->db->insert('new_rolls_created');
//        	}
//        	return true;
//        }


//        public function changeBeamStatusOnAdd($work_id, $beam_id) {
//        	$this->db->set('beamC_usedStatus', '1');
//        	$this->db->where('beamC_id', $beam_id);
//        	$this->db->update('Beam_Created');
//        		return true;
//        }


//        public function checkInAllocatedMachines() {
//        	$this->db->where('allocated_work_machines', $this->input->post('param1'));
//        	$this->db->order_by('allocated_work_id DESC');
//        	$query = $this->db->get('allocated_work');
//        	if ($query->num_rows() > 0) {
//        		return array('status' => true, 'data' => $query->row() );
//        	}else{
//        		return array('status' => false, 'data' => null, );
//        	}
//        }


//        public function getTotalCloneMetersUsed($beam_id) {
//        	$this->db->where('allocated_work_beam', $beam_id);
//        	$query = $this->db->get('allocated_work');
//        	return $query->result();

//        }


//        public function BeamMeatersLeft($beam_id) {
//        	$this->db->where('beamC_id', $beam_id);
//        	$query = $this->db->get('Beam_Created');
//        	return $query->row();
//        }


//        public function AddRollsName() {
//        	$this->db->where( 'roll_types_name' ,$this->input->post('roll_type'));
//        	$query = $this->db->get('Roll_Types');
//        	if ($query->num_rows() > 0) {
//        		return 'Duplicate';
//        	}else{
//        		$this->db->set( 'roll_types_name' ,$this->input->post('roll_type'));
//        		$this->db->insert('Roll_Types');
//        		if ($this->db->affected_rows() > 0) {
//        			return true;
//        		}
//        	}
//        }



//        public function AllNewRolls() {
//        	$this->db->order_by('roll_types_id DESC');
//        	$query = $this->db->get('Roll_Types');
//        	return $query->result();
//        }


//        public function EditNewRolls() {
//        	$this->db->set( 'roll_types_name' ,$this->input->post('roll_type'));
//        	$this->db->where('roll_types_id', $this->input->post('roll_id'));
//        	$this->db->update('Roll_Types');
//        	return true;
//        }


//        public function workReportAll($limit, $start) {
//        	$this->db->limit($limit, $start);
//        	$query = $this->db->get('allocated_work');
//        	return $query->result();
//        }

//         public function countAllin_allocated_work(){
//         	$this->db->select('*');
//         	$query = $this->db->get('allocated_work');
// 	        return $query->num_rows();
// 	    }

// 	    public function countAllin_allocated_work_filter($staff_id, $start_date, $end_date) {
// 	    	$this->db->where('allocated_work_staff', $staff_id);
// 	    	$startformat = date("Y-m-d H:i:s",strtotime(str_replace('-', '/', $start_date)));
//        		$endformat = date("Y-m-d H:i:s",strtotime(str_replace('-', '/', $end_date)));
//        		$this->db->where('allocated_work_current_date >=',$startformat);
//        		$this->db->where('allocated_work_current_date <=',$endformat);
//        		$query = $this->db->get('allocated_work');
// 	    	return $query->num_rows();
// 	    }


// 	    public function All_allocated_work_filter($staff_id, $start_date, $end_date,$limit, $start) {
// 	    	$this->db->where('allocated_work_staff', $staff_id);
// 	    	$startformat = date("Y-m-d H:i:s",strtotime(str_replace('-', '/', $start_date)));
//        		$endformat = date("Y-m-d H:i:s",strtotime(str_replace('-', '/', $end_date)));
//        		$this->db->where('allocated_work_current_date >=',$startformat);
//        		$this->db->where('allocated_work_current_date <=',$endformat);
//        		$this->db->limit($limit, $start);
// 	    	$query = $this->db->get('allocated_work');
// 	       	return $query->result();
// 	    }

//        public function workReportAllByParams($staff_id, $start_date, $end_date, $limit, $start) {

//        	if ($staff_id !== 'all') {
//        		$this->db->where('allocated_work_staff', $staff_id);
//        	}

//        	if ($start_date !== 'any' && $end_date !== 'any'){

//        		$startformat = date("Y-m-d H:i:s",strtotime(str_replace('-', '/', $start_date)));
//        		$endformat = date("Y-m-d H:i:s",strtotime(str_replace('-', '/', $end_date)));
//        		$this->db->where('allocated_work_current_date >=',$startformat);
//        		$this->db->where('allocated_work_current_date <=',$endformat);

//        	}
//        		$this->db->limit($limit, $start);
// 	       	$query = $this->db->get('allocated_work');
// 	       	return $query->result();
//        }


     

// 		// public function get_students($limit, $start) {
// 	 //        $this->db->limit($limit, $start);
// 	 //        $query = $this->db->get('allocated_work');
// 		// 	return $query->result();
// 	 //    }



//        public function get_all_users(){
// 			$wh =array();
// 			$SQL ='SELECT * FROM allocated_work LIMIT 10';
// 			$wh[] = " is_admin = 0";
// 			if(count($wh)>0)
// 			{
// 				$WHERE = implode(' and ',$wh);
// 				return $this->datatable->LoadJson($SQL,$WHERE);
// 			}
// 			else
// 			{
// 				return $this->datatable->LoadJson($SQL);
// 			}
// 		}



//        public function getMachineByMachineId($machine_id){
//        	$this->db->where('machine_id', $machine_id);
//        	$query = $this->db->get('new_manufacturing_machines');
//        	return $query->row();
//        }

//        public function beamDetailsByBeamId($beam_id) {
//        	$this->db->where('beamC_id', $beam_id);
//        	$query = $this->db->get('Beam_Created');
//        	return $query->row();
//        }


//        public function getAllRollsFromWorkId($work_id) {
//        	$this->db->where('new_roll_allocated_work_id', $work_id);
//        	$query = $this->db->get('new_rolls_created');
//        	return $query->result();
//        }

//        public function allocated_work_by_work_id($work_id) {
//        	$this->db->where('allocated_work_id', $work_id);
//        	$query = $this->db->get('allocated_work');
//        	return $query->row();
//        }

//        public function allStaff() {
//        	$this->db->order_by("staff_name", "asc");
//        	$query = $this->db->get('staff_member');
//        	return $query->result();
//        }

//        public function getRollTypeDetalisbyRollId($roll_id) {
//        	$this->db->where('roll_types_id', $roll_id);
//        	$query = $this->db->get('Roll_Types');
//        	return $query->row();
//        }



//        public function delete_beam_created($beamC_id,$machine_id,$beam_weight){
//        	$this->db->where('beamC_id',$beamC_id);
//        	$result = $this->db->delete('Beam_Created');
//        	if($this->db->affected_rows() === 1){

//        		$this->db->where('Machine_id',$machine_id);
//        		$machineRowById = $this->db->get('Machine_details');
//        		if($machineRowById->num_rows() === 1){
//        		$present_weight = $machineRowById->row('Present_weight');
//        		$present_weight_increased = $present_weight+$beam_weight;

//        		$this->db->where('Machine_id',$machine_id);
//        		$this->db->set('Present_weight',$present_weight_increased);
//        		$this->db->update('Machine_details');
//    			}

//        		return true;
//       	 }


//       }


//      public function all_beams_report(){
//        	$this->db->order_by('beamC_id DESC');
//        	$query = $this->db->get('Beam_Created');
//        	return $query->result();
//        }

//        public function all_beams_report_2(){
//        	$this->db->order_by('beamC_id DESC');
//        	$this->db->where('beamC_usedStatus','1');
//        	$query = $this->db->get('Beam_Created');
//        	return $query->result();
//        }


//     public function allocated_beam_data_by_id($beam_created_id){
       	
// 	$this->db->select('*');
// 	$this->db->from('allocated_work');
// 	$this->db->join('staff_member','staff_id = allocated_work_staff','left');
// 	$this->db->join('new_manufacturing_machines','machine_id = allocated_work_machines','left');
// 	$this->db->where('allocated_work_beam',$beam_created_id);
// 	$this->db->order_by('allocated_work_current_date ASC');
// 	$allocated_beam_data = $this->db->get();
	
// 	return $allocated_beam_data->result();

//     }

//     public function get_RollsCreated_allocated_work_id($allocated_work_id) {
//     	$this->db->select('*');
//     	$this->db->from('new_rolls_created');
//     	$this->db->where('new_roll_allocated_work_id',$allocated_work_id);
//     	$allocated_beam_data = $this->db->get();
//     	return $allocated_beam_data->result();
//     }


//     public function get_RollsType_allocated_work_id($roll_type_id){
//     	$this->db->select('*');
//     	$this->db->from('Roll_Types');
//     	$this->db->where('roll_types_id',$roll_type_id);
//     	$roll_type_data = $this->db->get();
//     	return $roll_type_data->row('roll_types_name');	
//     }

//         public function roll_data_by_allocated_id($allocated_work_ids){
// 			// $this->db->select('DISTINCT `new_roll_allocated_work_id`');        	
//         	$this->db->where_in('new_roll_allocated_work_id',$allocated_work_ids);

//         	$roll_data =  $this->db->get('new_rolls_created');

//     //     	$this->db->select('DISTINCT `new_roll_allocated_work_id`');
// 				return $this->db->get('new_rolls_created')->result();        		
//         }

//         public function roll_data_by_roll_id($new_roll_allocated_work_id){
// $this->db->where('new_roll_allocated_work_id',$new_roll_allocated_work_id);
//         		// $this->db->select('DISTINCT `new_roll_allocated_work_id`');

// 				return $this->db->get('new_rolls_created')->result();  
//         }


//  //      public function allocated_beam_data_by_id_1($beam_created_id){
//  //       	$this->db->where('allocated_work_beam',$beam_created_id);
//  //       	$allocated_beam_data = $this->db->get('allocated_work');

//  //       	// $allocated_work_staff_beam=0;
//  //     	foreach ($allocated_beam_data->result() as $key => $value) {
// 	// $allocated_work_id_beam[] 					= $value->allocated_work_id;
// 	// $allocated_work_staff_beam[] 				= $value->allocated_work_staff;
// 	// $allocated_work_machines_beam[] 			= $value->allocated_work_machines;
// 	// $allocated_work_meters_used_beam[] 			= $value->allocated_work_meters_used;
// 	// $allocated_work_cone_given_beam[] 			= $value->allocated_work_cone_given;
// 	// $allocated_work_wastage_beam[] 				= $value->allocated_work_wastage;
// 	// $allocated_work_roll_type_beam[] 			= $value->allocated_work_roll_type;
// 	// $allocated_work_no_of_rolls_beam[] 			= $value->allocated_work_no_of_rolls;
// 	// $allocated_work_current_date_beam[] 		= $value->allocated_work_current_date;
// 	// $allocated_work_raw_material_weight_beam[] 	= $value->allocated_work_raw_material_weight;
// 	// $allocated_work_raw_material_id_beam[] 		= $value->allocated_work_raw_material_id;
// 	// $allocated_work_raw_material_name_beam[]	= $value->allocated_work_raw_material_name;
//  // 			}


//  // 			// return $allocated_work_staff_beam;
//  // 			// return $allocated_work_staff_beam;
//  // 			// print_r($allocated_work_staff_beam);
//  // 			// exit();
//  // 		$this->db->select('staff_name');
//  // 		$this->db->where_in('staff_id',$allocated_work_staff_beam);
//  // 		$staff_name_data = $this->db->get('staff_member');
//  // 		$staff_name = $staff_name_data->result_array();

//  // 		return $staff_name;

//  // 		$this->db->select('machine_model');
//  // 		$this->db->where_in('machine_id',$allocated_work_machines_beam);
//  // 		$machine_model_data = $this->db->get('new_manufacturing_machines');
//  // 		$machine_model = $machine_model_data->result_array();


//  // 		$this->db->select('new_roll_weight');
//  // 		$this->db->where_in('new_roll_allocated_work_id',$allocated_work_id_beam);
//  // 		$new_roll_weight_data = $this->db->get('new_rolls_created');
//  // 		$new_roll_weight = $new_roll_weight_data->result_array();

//  // 		$allocated_beam_data_original = array(
//  // 			'staff_name' 					   => $staff_name,
//  // 			'machine_model' 				   => $machine_model,
//  // 			'allocated_work_meters_used_beam'  => $allocated_work_meters_used_beam,
//  // 			'allocated_work_cone_given_beam'   => $allocated_work_cone_given_beam,
//  // 			'allocated_work_wastage_beam'	   => $allocated_work_wastage_beam,
//  // 			'new_roll_weight'	   			   => $new_roll_weight,
//  // 			'allocated_work_no_of_rolls_beam'  => $allocated_work_no_of_rolls_beam,
//  // 			'allocated_work_raw_material_weight_beam' => $allocated_work_raw_material_weight_beam,
//  // 			'allocated_work_raw_material_name_beam'	=> $allocated_work_raw_material_name_beam

//  // 		);

//  //       	return $allocated_beam_data_original;
   
//  //   	// return $allocated_work_staff_beam->result_array();
//  //       }


//        public function add_excess_raw_materials(){
//         	// echo '<pre>';
//        		// print_r($_POST);
//        		// exit();

//        	$this->db->where('inward_type', $this->input->post('raw_material_type'));
//        	$this->db->where('inward_type_of_type', $this->input->post('raw_custom_type'));
//        	$query = $this->db->get('inward_excess_raw_material');
//        	if ($query->num_rows() > 0) {
//        		$weight = $query->row('inward_weight');
//        		$new_weight = $weight + $this->input->post('weight');
//        		$this->db->set('inward_weight', $new_weight);
       		
//        		if ($this->input->post('raw_material_type') === 'Yarn') {
//        			$no_of_cartons = $query->row('inward_no_of_cartons');
//        			$total_no_of_cartons = $no_of_cartons + $this->input->post('no_of_cartons');
//        			$this->db->set('inward_no_of_cartons', $total_no_of_cartons);
//        			$avg = $new_weight / $total_no_of_cartons;
//        			$this->db->set('inward_avg_weight', $avg);
//        		}

//        		if (!empty($this->input->post('date'))) {
//        			$this->db->set('inward_date', date('Y-m-d H:i:s', strtotime($this->input->post('date'))) );
//        		}

//        		$this->db->where('inward_type', $this->input->post('raw_material_type'));
//        		$this->db->where('inward_type_of_type', $this->input->post('raw_custom_type'));
//        		$this->db->update('inward_excess_raw_material');
//        	}
//        	else{

//        		$this->db->set('inward_type', $this->input->post('raw_material_type'));
//        		$this->db->set('inward_weight', $this->input->post('weight'));
//        		$this->db->set('inward_type_of_type', $this->input->post('raw_custom_type'));
//        		if ($this->input->post('raw_material_type') === 'Yarn') {
//        			$this->db->set('inward_no_of_cartons', $this->input->post('no_of_cartons'));
//        			$avg = $this->input->post('weight') / $this->input->post('no_of_cartons');
//        			$this->db->set('inward_avg_weight', $avg);
//        		}
//        		if (!empty($this->input->post('date'))) {
//        			$this->db->set('inward_date', date('Y-m-d H:i:s', strtotime($this->input->post('date'))) );
//        		}
//        		$this->db->insert('inward_excess_raw_material');
//        	}
//        		return true;
//        }


// 	// P Starts
	
//      public function get_excess_raw_materials(){
//        	$this->db->order_by('inward_date DESC');
//        	$query = $this->db->get('inward_excess_raw_material');
//        	return $query->result();
//        }


//        // P Starts
//         public function get_inward_type_of_type(){

//        		if ($this->input->post('raw_material_type') === 'Yarn') {
       			 
//        			 $this->db->where('inward_type', $this->input->post('raw_material_type'));
// 			     $query = $this->db->get('Inward');
// 			     if ($query->num_rows() > 0) {
// 			     	return $query->result();
// 			     }
//        		} else {
//        			return;
//        		}
//        }


//        public function get_wastage_raw_materials(){
//        	$this->db->order_by('inward_date DESC');
//        	$query = $this->db->get('inward_excess_raw_material');
//        	return $query->result();
//        }



//         public function get_beam_fresh_detail(){
//        	$this->db->select('*');
//        	$this->db->from('Beam_Created');
//        	$this->db->join('raw_materials','machine_id = beamC_machine_id','inner');
//        	$this->db->join('New_Machines','mac_id = beamC_machine_id','inner');
//        	$this->db->where('beamC_usedStatus',0);
//        	$this->db->order_by('raw_materials.time','ASC');
//        	$beam_fresh_detail =	$this->db->get();
//        	return $beam_fresh_detail->result();
//        }


//        // P Starts
//         public function add_machine_for_couting(){
//        	$data = array(
//        		'couting_machine_name' => $this->input->post('couting_machine_name'),
//        		'couting_machine_description' => $this->input->post('couting_machine_description'),
//        	);
//        	$this->db->insert('coating_machine', $data);
//        	if ($this->db->affected_rows() > 0 ) {
//        		return true;
//        	}
//        }


//          public function get_beam_used_detail(){
//        	$this->db->select('*');
//        	$this->db->from('Beam_Created');
//        	$this->db->join('raw_materials','machine_id = beamC_machine_id','inner');
//        	$this->db->join('New_Machines','mac_id = beamC_machine_id','inner');
//        	$this->db->where('beamC_usedStatus',1);
//        	$this->db->order_by('raw_materials.time','ASC');
//        	$beam_used_detail =	$this->db->get();
//        	return $beam_used_detail->result();
//        }


//        public function fetchCoutingMachine(){
//        	return $this->db->get('coating_machine')->result();
//        }


//        // P Starts

//        public function fetchNewRollCreated($roll_types_id){
//        	// return $roll_types_id;
       	
//        	$this->db->where('coating_roll_name_status', 0 );
//        	$this->db->where('new_roll_type',$roll_types_id);
//        	return $this->db->get('new_rolls_created')->result();
//        }


//        public function getInwardByInwardType($inward_type){
       	
//        	$this->db->where('inward_type',$inward_type);
//        	return $this->db->get('Inward')->result();
//        }

//        public function getInwardWeightByInwardTypeOfType($inwardtypeoftype){
//        	// return $inwardtypeoftype;
//        	$this->db->select('inward_weight');
//        	$this->db->where('inward_id',$inwardtypeoftype);
//        	return $this->db->get('Inward')->row();
//        }

//        // All insert for Coating Allocate page
//        public function insert_in_coating_allocate($couting_allocate){
//        		// return $inwardtypeoftype;
//        	$this->db->insert('coating_allocate', $couting_allocate);
//        	return  $this->db->insert_id();
//        }

//        public function insert_in_coating_rolls($couting_roll){
//        		// return $inwardtypeoftype;
//        	$this->db->insert('coating_rolls', $couting_roll);
//        	return  true;
//        }

//        public function update_in_new_roll_created($roll_name_id){
//        	$this->db->where('new_roll_id', $roll_name_id);
//        	$this->db->update('new_rolls_created', ['coating_roll_name_status' => 1]);
//        	return  true;
//        }

//        public function insert_in_coating_OutputRolls($coating_OutputRolls){
//        		// return $inwardtypeoftype;
//        	$this->db->insert('coating_OutputRolls', $coating_OutputRolls);
//        	return  true;
//        }

//        public function insert_in_coating_raw_material_consumed($coating_raw_material_consumed){
//        		// return $inwardtypeoftype;
//        	$this->db->insert('coating_raw_material_consumed', $coating_raw_material_consumed);
//        	return  true;
//        }

//         public function update_in_coating_raw_material_consumed($inward_id, $used_inward_weight){
//        	$this->db->where('inward_id', $inward_id);
//        	$this->db->update('Inward', ['inward_weight' => $used_inward_weight]);
//        	return  true;
//        }


//        // Coating Report from All Coating Table
       
//        public function get_AllcoatingTableDetail($condition){
	     
// 	       $courting_report = [];
// 	       $this->db->from('coating_allocate');
// 	       $this->db->join('staff_member','staff_id = coating_allocate_staff_id','left');
// 	       $this->db->where($condition);
// 	       $coating_allocate_specific_data = $this->db->get()->result();
// 	       // return $coating_allocate_specific_data;

// 	       $courting_report['coating_allocate_specific_data'] = $coating_allocate_specific_data;
// 	       // return $courting_report;
// 	       // 
// 	       foreach ($coating_allocate_specific_data as $key => $value) {
   				
//    				$this->db->from('coating_rolls');
//    				$this->db->join('Roll_Types','roll_types_id = couting_rolls_type','left');
//    				$this->db->join('new_rolls_created','new_roll_id = couting_rolls_name','left');
//    				$this->db->where('coating_rolls_allocate_id', $value->coating_allocate_id);
//    				$courting_report['coating_rolls_specific_data'][$key] = $this->db->get()->result();
   			
//    				$this->db->from('coating_OutputRolls');
//    				$this->db->join('Roll_Types','roll_types_id = coating_OutputRolls_roll_type_id','left');
//    				$this->db->where('coating_OutputRolls_allocate_id', $value->coating_allocate_id);
//    				$courting_report['coating_OutputRolls_specific_data'][$key] = $this->db->get()->result();

//    				$this->db->from('coating_raw_material_consumed');
//    				$this->db->join('Inward','inward_id = coating_rmc_raw_material_type_of_type','left');
//    				$this->db->where('coating_rmc_allocate_id', $value->coating_allocate_id);
//    				$courting_report['coating_raw_material_consumed_specific_data'][$key] = $this->db->get()->result();
// 	       }

//        return $courting_report;

//        }

//        // P Starts
       
//        	public function getWorkAllocateMetreUsed($allocated_id){
//        		// $this->db->select('allocated_work_meters_used');
//        		$this->db->where('allocated_work_id',$allocated_id);
//        		return $this->db->get('allocated_work')->row('allocated_work_meters_used');
//        	}


//        	public function no_of_rolls_of_allocated_work_id($allocated_id){
//        		$this->db->where('new_roll_allocated_work_id',$allocated_id);
//        		$query = $this->db->get('new_rolls_created');
//        		return $query->num_rows(); 
//        	}

      
//        	// Cutting Modal data
//        	 public function add_machine_for_cutting(){
//        		$data = array(
//        			'cutting_machine_name' => $this->input->post('cutting_machine_name'),
//        			'cutting_machine_description' => $this->input->post('cutting_machine_description'),
//        		);

//        		$this->db->insert('cutting_machine', $data);
//        		if ($this->db->affected_rows() > 0 ) {
//        			return true;
//        		}
//        	}


//        	public function fetchCuttingMachine(){
//        		return $this->db->get('cutting_machine')->result();
//        	}


//        	public function getCoatingRolls_for_cutting(){
//        		return $this->db->get('coating_rolls')->result();
//        	}


//        	public function getRolls_of_allocated_id($allocated_id){
//        		$this->db->where('coating_rolls_allocate_id',$allocated_id);
//        		return $this->db->get('coating_rolls')->result();
//        	}

       	


//        	public function get_Manufacturing_output_Rolls_for_cutting($rolls_type,$rolls_output_type){
//        		$this->db->where('coating_roll_name_status', 0 );
//        		$this->db->where('new_roll_typef',$rolls_output_type);
//        		$this->db->where('new_roll_type',$rolls_type);
//        		return $this->db->get('new_rolls_created')->result();
//        	}

//        	public function get_Coating_output_Rolls_for_cutting($rolls_type,$rolls_output){
//        		$this->db->where('cutting_coating_roll_name_status', 0 );
//        		$this->db->where('coating_OutputRolls_output_type_f_u',$rolls_output);
//        		$this->db->where('coating_OutputRolls_roll_type_id',$rolls_type);
//        		return $this->db->get('coating_OutputRolls')->result();
//        	}


//        	// All insert for Cutting Allocate page
//        	public function insert_in_cutting_allocate($cutting_allocate){
//        			// return $inwardtypeoftype;
//        		$this->db->insert('cutting_allocate', $cutting_allocate);
//        		return  $this->db->insert_id();
//        	}


//        	public function insert_in_cutting_rolls($cutting_roll){
//        			// return $inwardtypeoftype;
//        		$this->db->insert('cutting_rolls', $cutting_roll);
//        		return  true;
//        	}


//        	public function insert_in_cutting_OutputRolls($cutting_OutputRolls){
//        			// return $inwardtypeoftype;
//        		$this->db->insert('cutting_OutputRolls', $cutting_OutputRolls);
//        		return  true;
//        	}

//        	public function insert_in_cutting_raw_material_consumed($cutting_raw_material_consumed){
//        			// return $inwardtypeoftype;
//        		$this->db->insert('cutting_raw_material_consumed', $cutting_raw_material_consumed);
//        		return  true;
//        	}

//        	 public function update_in_cutting_raw_material_consumed($inward_id, $used_inward_weight){
//        		$this->db->where('inward_id', $inward_id);
//        		$this->db->update('Inward', ['inward_weight' => $used_inward_weight]);
//        		return  true;
//        	}


//         public function update_in_coating_OutputRolls($roll_name_id){
//        	$this->db->where('coating_OutputRolls_id', $roll_name_id);
//        	$this->db->update('coating_OutputRolls', ['cutting_coating_roll_name_status' => 1]);
//        	return  true;
//        }

//        	       // Cutting Report from All Cutting Table
       	       
//        	       public function get_AllcuttingTableDetail($condition){
       		     
//        		       $cutting_report = [];
//        		       $this->db->from('cutting_allocate');
//        		       $this->db->join('staff_member','staff_id = cutting_allocate_staff_id','left');
//        		       $this->db->where($condition);
//        		       $cutting_allocate_specific_data = $this->db->get()->result();
       		       

//        		       $cutting_report['cutting_allocate_specific_data'] = $cutting_allocate_specific_data;
//        		       // return $cutting_report;
       		       
//        		       foreach ($cutting_allocate_specific_data as $key => $value) {
       	   			
//        	   				$this->db->from('cutting_rolls');
//        	   				$this->db->join('Roll_Types','roll_types_id = cutting_rolls_type','left');
//        	   				$this->db->join('new_rolls_created','new_roll_id = cutting_rolls_name','left');
//        	   				$this->db->where('cutting_rolls_allocate_id', $value->cutting_allocate_id);
//        	   				$cutting_report['cutting_rolls_specific_data'][$key] = $this->db->get()->result();
       	   			
//        	   				$this->db->from('cutting_OutputRolls');
//        	   				$this->db->join('Roll_Types','roll_types_id = cutting_OutputRolls_roll_type_id','left');
//        	   				$this->db->where('cutting_OutputRolls_allocate_id', $value->cutting_allocate_id);
//        	   				$cutting_report['cutting_OutputRolls_specific_data'][$key] = $this->db->get()->result();

//        	   				$this->db->from('cutting_raw_material_consumed');
//        	   				$this->db->join('Inward','inward_id = cutting_rmc_raw_material_type_of_type','left');
//        	   				$this->db->where('cutting_rmc_allocate_id', $value->cutting_allocate_id);
//        	   				$cutting_report['cutting_raw_material_consumed_specific_data'][$key] = $this->db->get()->result();
//        		       }



//        	       return $cutting_report;

//        	       }


//        // P Ends
       

// public function AddManufacturingInwards($manufacturingAllocateWorkID) {
// 	foreach ($this->input->post('raw_material_name') as $key => $value) {
// 		$this->db->set('inward_id', $value);
// 		$this->db->set('inward_weight', $this->input->post('inward_used')[$key]);
// 		$this->db->set('manufacturing_work_allocate_id', $manufacturingAllocateWorkID);
// 		$this->db->insert('manufacturing_work_allocate_inwards_used');
// 	}
// 	return true;
// }

// public function decreaseInwardMaterialWeight(){
// 	foreach ($this->input->post('raw_material_name') as $key => $value) {
// 		$this->db->where('inward_id', $value);
// 		$query = $this->db->get('Inward');
// 		$presentInwardWeight = $query->row('inward_weight');

// 		$deductedWeight = (float)$presentInwardWeight - (float)$this->input->post('inward_used')[$key];
// 		$this->db->set('inward_weight', $deductedWeight);
// 		$this->db->where('inward_id', $value);
// 		$this->db->update('Inward');
// 	}
// 	return true;
// }

// public function get_raw_materials_used($allocate_id){
// 	$this->db->where('manufacturing_work_allocate_id', $allocate_id);
// 	$query = $this->db->get('manufacturing_work_allocate_inwards_used');
// 	return $query->result();
// }

// public function get_inward_materials_used($inward_id){
// 	$this->db->where('inward_id', $inward_id);
// 	$query = $this->db->get('Inward');
// 	return $query->row();
// }



    }
    ?>