<?php


class Machineajax extends CI_Controller {

	//get purchase order by vendor id
	public function getPurchaseOrder()
	{
		
		$vid = $this->input->post('vid');

		$data = $this->Admin_model->fetchPurchaseOrder($vid);

		echo json_encode($data);
	}

	//get item by purchase order id
	public function getItemByPurchaseOid(){

		$poid = $this->input->post('pro');

		$data = $this->Admin_model->getTotalItemPurchaseOrder($poid);

		echo json_encode($data);
	}

	// Get Total Amount of Purchase Order

		public function getTotalAmount(){

			$id = $this->input->post('pro');
			$data = $this->Admin_model->getTotalItemPurchaseOrder($id); 
			$total = 0;
			foreach($data as $key => $val):

						  $total1 = $val->item_quantity*$val->item_rate;
                          $sub = $val->item_free*$val->item_rate;

                          $total2 = $total1-$sub;
                          $total += $total2-$val->item_discount;

			endforeach;

			echo json_encode($total);
			
		}

		//get item 
		public function getItem(){

			$id = $_POST['id'];

			$data = $this->Admin_model->fetchItemByInventoryId($id);
			
			echo json_encode($data);
		}

		//get Item Available to issue
		public function getItemAvailable(){

			$invc = $this->input->post('inventorycat');
			$itemid = $this->input->post('item');

			$data = $this->Admin_model->getItemAvailable($invc, $itemid);

			echo json_encode($data); 
		}

		//get Inventory category by Staff Id
		public function getInventoryCatbyStaffId(){

			$data = $this->Admin_model->getInventoryCatbyStaffId();

			echo json_encode($data);
		}
		

		//get Item by Inventory Cat ID 
		public function getItemByInventoryCatById(){

			$data = $this->Admin_model->getItemByInventoryCatById();

			echo json_encode($data);
		}

		//get issued item by 3 param
		public function getIssuedItem(){

			$data = $this->Admin_model->getIssuedItem();

			echo json_encode($data);
		}

		//get latest beam in particular machine
		public function getLatestBeamMachine(){

			$data = $this->Admin_model->getLatestBeamMachine2($this->input->post('mac'));

			echo json_encode($data);

		}

		//get staff detail report by id and date
		public function getStaffDetailReportById(){

			$data = $this->Admin_model->getStaffDetailReportById();

			echo json_encode($data);

		}

// puhupwas start
		public function getStaffReportById($id = '', $month = '', $year = ''){
			// echo '<pre>';
			// print_r($year);
			// exit();

		$staffData = $this->Admin_model->getStaffReportById($id,$year,$month);
		$staff =$this->Admin_model->getStaff();
		$workerName =$this->Admin_model->getStaffNamebyId($id);
		$this->load->view('admin/staff_report', compact('staffData','staff','workerName','month','year'));
		}
// puhupwas ends

		//get staff detail by date range
		public function getStaffDetailByDate(){

			$data = $this->Admin_model->getStaffDetailByDate();

			echo json_encode($data);
		}

		//get mamchine report
		public function getMachineReport(){

			$data = $this->Admin_model->getMachineReport();

			echo json_encode($data);
		}

		//get machine beam
		public function getmachineBeamDate(){

			$data = $this->Admin_model->fetchAllBeamByMachineId2($this->input->post('machine'));

			echo json_encode($data);
		}

		//machine maintenance report
		public function getMachineMaintenanceReport(){


			$data = $this->Admin_model->fetchMachineMaintenanceReport();

			echo json_encode($data);
		}

		//all machine maintenance report
		public function getAllMachineMaintenance(){

			$data = $this->Admin_model->fetchAllMachineMaintenance();

			echo json_encode($data);
		}


}