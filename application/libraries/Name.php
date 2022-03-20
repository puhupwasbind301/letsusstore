<?php

	/**
	 * Library
	 */
	class Name
	{
		
		public function __construct()
		{
			$this->CI = & get_instance();
		}


		// Get Total Amount of Purchase Order

		public function getTotalItemPurchaseOrder($id){

			$data = $this->CI->Admin_model->getTotalItemPurchaseOrder($id); 
			$total = 0;
			foreach($data as $key => $val):

						  $total1 = $val->item_quantity*$val->item_rate;
                          $sub = $val->item_free*$val->item_rate;

                          $total2 = $total1-$sub;
                          $total += $total2-$val->item_discount;

			endforeach;

			return $total;
		}

		// get MAx invoice number for purchase received
		public function getMaxInvoiceNo(){

			$highno = $this->CI->Admin_model->getMaxInvoiceNo();

			return $highno;
		}


		// 
		public function fetchItemById($id){

			$data = $this->CI->Admin_model->fetchItem($id);
			return $data;
		}
		

		// 
		public function getMaxReceipt(){

			$rec = $this->CI->Admin_model->getMaxReceipt();
			return $rec;
		}

		//get staff attendance status
		public function getStaffAttendStatus($id, $date){


			$res = $this->CI->Admin_model->getStaffAttendStatus($id, $date);

			return $res;
		}

		public function get_raw_materiats_left(){
			$check_negative_values = $this->CI->Admin_model->Calculate_raw_minus_beam();
			$calculate_totalbeam_weight = $this->CI->Admin_model->Calculate_totalbeam_weight();
			$total = $check_negative_values - $calculate_totalbeam_weight;
			return $total;
		}

		public function Check_beam_length_left_in_machine($machine_id){
			$result = $this->CI->Admin_model->Check_beam_length_left_in_machine($machine_id);
			return $result;
		}

		public function Get_roll_by_id($work_id,$work_beam_id,$work_machine_id,$work_staff_id){
			$result = $this->CI->Admin_model->Get_roll_by_id($work_id,$work_beam_id,$work_machine_id,$work_staff_id);
			return $result;
		}


		public function get_machine_by_id($machine_id){
			$result = $this->CI->Admin_model->get_machine_by_id($machine_id);
			return $result;
		}


		public function get_beam_by_id($beam_id){
			$result = $this->CI->Admin_model->get_beam_by_id($beam_id);
			return $result;
		}

		public function get_staff_by_id($staff_id){
			$result = $this->CI->Admin_model->get_staff_by_id($staff_id);
			return $result;
		}

		public function get_roll_details_by_roll_id($roll_id){
			$result = $this->CI->Admin_model->get_roll_details_by_roll_id($roll_id);
			return $result;
		}

		public function get_customers_detsils_by_customer_id($customer_id){
			$result = $this->CI->Admin_model->get_customers_detsils_by_customer_id($customer_id);
			return $result;
		}

		public function get_machine_name_by_id($machine_id){
			$result = $this->CI->Admin_model->get_machine_name_by_id($machine_id);
			return $result;
		}

		public function get_machine_present_weight_by_id($machine_id){
			$result = $this->CI->Admin_model->get_machine_present_weight_by_id($machine_id);
			return $result;
		}

		public function get_last_inward_in_warping_by_id($machine_id){
			$result = $this->CI->Admin_model->get_last_inward_in_warping_by_id($machine_id);
			return $result;
		}

		public function getMachineByMachineId($machine_id) {
			$result = $this->CI->Admin_model->getMachineByMachineId($machine_id);
			return $result;
		}

		public function beamDetailsByBeamId($beam_id) {
			$result = $this->CI->Admin_model->beamDetailsByBeamId($beam_id);
			return $result;
		}

		public function getAllRollsFromWorkId($work_id) {
			$result = $this->CI->Admin_model->getAllRollsFromWorkId($work_id);
			return $result;
		}

		public function getRollTypeDetalisbyRollId($roll_id) {
			$result = $this->CI->Admin_model->getRollTypeDetalisbyRollId($roll_id);
			return $result;
		}

		public function getRawMaterialsUsedinWaork($work_allocate_id) {
			$totalWeightUsed = 0;
			$type = array();
			$result = $this->CI->Admin_model->get_raw_materials_used($work_allocate_id);
			foreach ($result as $key => $value) {
				$totalWeightUsed += $value->inward_weight;
				$Itype = $this->CI->Admin_model->get_inward_materials_used($value->inward_id);
				$type[] = $Itype->inward_type.' ( '.$Itype->inward_type_of_type.' ) ';
			}
			$implodeType = implode(", ", array_unique($type));
			return $implodeType.' - '.$totalWeightUsed;
		}


		// P Starts


	

	}

?>