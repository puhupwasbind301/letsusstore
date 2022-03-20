<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	
	/*-------------------------------------------------------------------------
	| Method : Authenticate admin	
	|-------------------------------------------------------------------------*/
	public function auth_admin() {

		if(!$this->session->userdata('authAdminLogin')) {	
			$this->helper->authCookieLogin();
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if($this->form_validation->run() === FALSE) {

				$this->load->view('admin/login');

			} else {

				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$remember_me = $this->input->post('remember_me');
				$result   = $this->Admin_model->authAdmin($username, $password);

				if($result) {
					if($remember_me === '1') {
						$this->auth_remember_me($username);
					}
					redirect(base_url('admin'));
				} else {
					$this->session->set_flashdata('loginMsg', '<div class="text-center alert alert-danger">Username or Password is incorrect.</div>');
					redirect(base_url('web-admin'));
				}

			}

		} else {
			redirect(base_url('admin'));
		}
		
	}

	/*-------------------------------------------------------------------------
	| Method : Remember me
	|-------------------------------------------------------------------------*/
	private function auth_remember_me($username) {
		
		$remember_me_token = bin2hex(random_bytes(20));

		$ipaddress = $this->helper->getIpAddress();

		$result = $this->Admin_model->setRememberMeToken($username, $remember_me_token, $ipaddress, $lockscreen = 0);

		if(!empty($result)) {
			$cookie = array(
				'name'     => 'remember_me_token',
				'value'    => $remember_me_token.'|'.$username,
				'expire'   => '2629746',  // one month
				'domain'   => null,
				'path'     => '/',
				'prefix'   => null,
				'secure'   => false,
				'httponly' => true
			);
			set_cookie($cookie);
			return true;
		}

	}

	/*-------------------------------------------------------------------------
	| Method : authenticate lock screen
	|-------------------------------------------------------------------------*/
	public function auth_lockscreen() {

		if($this->session->userdata('authAdminLockscreen') === '1' && $this->session->userdata('authAdminLogin')) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if($this->form_validation->run() === FALSE) {

				$this->load->view('admin/lockscreen');

			} else {

				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$result   = $this->Admin_model->authAdmin($username, $password);

				if($result) {
					redirect(base_url('admin'));
				} else {
					$this->session->set_flashdata('loginMsg', '<div class="text-center alert alert-danger">Password is incorrect.</div>');
					redirect(base_url('admin/lockscreen'));
				}

			}

		} else {
			redirect(base_url('admin'));
		}
		
	}

	/*-------------------------------------------------------------------------
	| Method : Logout admin
	|-------------------------------------------------------------------------*/
	public function logout() {
		session_destroy();
		$this->Admin_model->destroyLockscreen();
		delete_cookie('remember_me_token');
		redirect(base_url('web-admin'));
	}
}
?>