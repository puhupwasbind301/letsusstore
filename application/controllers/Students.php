<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Students extends CI_Controller {
	public function __construct() {
        parent:: __construct();
		$this->load->helper('url');
        $this->load->model('Students_model');
        $this->load->library("pagination");
    }
	public function index() {
        $this->load->model('Students_model');
        $config = array();
        $config["base_url"] = base_url() . "students";
        $config["total_rows"] = $this->students_model->get_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
		$data["links"] = $this->pagination->create_links();
		$data['students'] = $this->Students_model->get_students($config["per_page"], $page);
		$this->load->view('students/index', $data);
    }
}