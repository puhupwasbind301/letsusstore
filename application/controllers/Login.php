<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model','Login_model');
	}

	
	/*-------------------------------------------------------------------------
	| Method : Authenticate Vendor	
	|-------------------------------------------------------------------------*/
	public function auth_vendor($type) {

		// if(!$this->session->userdata('authVendorLogin')) {	
			// $this->helper->authCookieLogin();
			// echo json_encode($type);
			// echo json_encode($_POST);
			// exit();
			if($type == 'register'){
			$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[users.user_email]');
			} else {
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			}
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if($type == 'register'){
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
			$this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('vendor', 'Vendor', 'trim|required');
			// $this->form_validation->set_rules('country', 'Country', 'trim|required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|exact_length[10]');
			}
			$data = [];
			if($this->form_validation->run() === FALSE) {
				$data = [
					'status' => false,
					'message' => validation_errors(),
					'vendor' => null,
					'data' => []
						];
					// $this->load->view('admin/login');
					// echo json_encode($data);
					// exit();
			} else {
				$email = $this->input->post('email');
				$password = sha1($this->input->post('password'));
				if($type == 'register'){
				$company_name = $this->input->post('company_name');
				$vendor = $this->input->post('vendor');
				$username = $this->input->post('username');
				$country = $this->input->post('country');
				$mobile = $this->input->post('mobile');
				$register = $this->Login_model->sign_up($company_name,$username,$email,$vendor,$password,$country,$mobile);
				
				$data = [
					'status' => true,
					'message' => 'Successfully Register as '.$vendor,
					'vendor' => $vendor,
					'data' => ['username'=>$username]
						];
				$this->session->set_userdata('authVendorLogin',['username'=>$username,'is_login'=>true,'user_type'=>$vendor,'user_id'=>$register]);		
				} else {
				$login = $this->Login_model->sign_in($email,$password);

				if($login){
						$data = [
							'status' => true,
							'message' => 'Successfully Login',
							'vendor' => $login->user_vendor_type,
							'data' => ['username'=>$login->user_name ]
								];
						$this->session->set_userdata('authVendorLogin',['username'=>$login->user_name,'is_login'=>true,'user_type'=>$login->user_vendor_type,'user_id'=>$login->user_id]);
						} else {
							$data = [
								'status' => false,
								'message' => 'Login Failed',
								'vendor' => null,
								'data' => []
									];
							}
				}
				
				// redirect(base_url('supplier'));
				// exit();
				// $remember_me = $this->input->post('remember_me');
				// $result   = $this->Admin_model->authAdmin($username, $password);

				// if($result) {
				// 	if($remember_me === '1') {
				// 		$this->auth_remember_me($username);
				// 	}
				// 	redirect(base_url('supplier'));
				// } else {
				// 	$this->session->set_flashdata('loginMsg', '<div class="text-center alert alert-danger">Username or Password is incorrect.</div>');
				// 	redirect(base_url('web-admin'));
				// }

			}
			echo json_encode($data);

		} 
		// else {
		// 	echo 'bye';
		// 	// redirect(base_url('supplier'));
		// }
		
	

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
		// session_destroy();
		// $this->Admin_model->destroyLockscreen();
		// delete_cookie('remember_me_token');
		$this->session->unset_userdata('authVendorLogin');
		redirect(base_url('home/sign-in'));
	}


	/*-------------------------------------------------------------------------
	| Method : Forgot Password
	|-------------------------------------------------------------------------*/
	public function forgot_password() {
		$checkEmailExists = $this->Login_model->checkEmailExists($this->input->post('email'));
		if($checkEmailExists){

			// $to = "puhupwasdeveloper@gmail.com";
			// $subject = "Reset Link sent and click on that and change password";
			// $message = "
			// <html>
			// <head>
			// <title>Reset Link</title>
			// </head>
			// <body>
			// <p>Let us Store</p>
			// <h5><a href=".base_url().">Reset Password</a></h5>
			// </body>
			// </html>
			// ";
			// // Always set content-type when sending HTML email
			// $headers = "MIME-Version: 1.0" . "\r\n";
			// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// // More headers
			// $headers .= 'From: <puhupwasbind301@gmail.com>' . "\r\n";
			// $headers .= 'Cc: puhupwasbind301@gmail.com' . "\r\n";
			// mail($to,$subject,$message,$headers);




				
			 		// $to = "puhupwasdeveloper@gmail.com";
			// $subject = "Reset Link sent and click on that and change password";
			// $message = "
			// <html>
			// <head>
			// <title>Reset Link</title>
			// </head>
			// <body>
			// <p>Let us Store</p>
			// <h5><a href=".base_url().">Reset Password</a></h5>
			// </body>
			// </html>
			// ";
			// // Always set content-type when sending HTML email
			// $headers = "MIME-Version: 1.0" . "\r\n";
			// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// // More headers
			// $headers .= 'From: <puhupwasbind301@gmail.com>' . "\r\n";
			// $headers .= 'Cc: puhupwasbind301@gmail.com' . "\r\n";
			// mail($to,$subject,$message,$headers);
			
// 			$to = "puhupwasbind301@gmail.com";
//             $subject = "My subject";
//             $txt = "Hello world!";
//             $headers = "From: puhupwasdeveloper@gmail.com" . "\r\n" .
//             "CC: puhupwasbind301@gmail.com";
            
//             if(mail($to,$subject,$txt,$headers)){
//                 echo 'done';
//             } else {
//                 echo 'failed';
//             }




				// $this->load->library('email');
			 //   $to = $this->input->post('email') ;  // User email pass here
			 //   $subject = 'LetUsStoreNew';

			 //   $from = 'puhupwasdeveloper@gmail.com';     // Pass here your mail id

			 //   // <tr>
			 //   //   <td colspan="2">

			 //   //     <img src="letusstore/assets/img/logo/letusstore-logo.png" width="300px" vspace=10 />
			 //   //    </td>
			 //   // </tr>';

			 //   $emailContent = 'hiii PUhupwas';

			 //   $config['protocol']     = 'smtp';
			 //   $config['smtp_host']    = 'ssl://smtp.gmail.com';
			 //   $config['smtp_port']    = '465';
			 //   $config['smtp_timeout'] = '30';
			 //   $config['smtp_crypto'] = 'ssl';
			 //   $config['wordwrap'] = TRUE;

			 //   $config['smtp_user']    = 'puhupwasdeveloper@gmail.com';    //Important
			 //   $config['smtp_pass']    = '***';  //Important

			 //   $config['charset']    = 'utf-8';
			 //   $config['newline']    = "\r\n";
			 //   $config['crlf']    = "\r\n";
			 //   $config['mailtype'] = 'html'; // or html
			 //   $config['validation'] = TRUE; // bool whether to validate email or not 
			 //  	 // thisisthesecretpasswordyoushouldknowaboutit9250183000
			 //	 // thisisthesecretpasswordyoushouldknowaboutit9250183000	
			 //   $this->email->initialize($config);
			 //   $this->email->set_mailtype("html");
			 //   $this->email->from($from);
			 //   $this->email->to($to);
			 //   $this->email->subject($subject);
			 //   $this->email->message($emailContent);

			 //   if($this->email->send()){
			 //       echo 'Mail Sent Successfully';
			 //   	// $this->session->set_flashdata('msg',"Mail has been sent successfully");
			 //   	// $this->session->set_flashdata('msg_class','alert-success');		
			 //   } else {
			 //       echo 'Mail Sent Failed';
			 //       print_r($this->email->print_debugger());	
			 //   }

					$to_email = $this->input->post('email');
					$subject = "Letsustore change password reset link";
					$body = `<a href='`.base_url()."home/sign-in?msg=".'forget'."&email=".$to_email.`' >Click</a>`;
					


		            $headers = "MIME-Version: 1.0" . "\r\n";
		            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		            $headers = "From: puhupwasdeveloper@gmail.com";
		            
					if (mail($to_email, $subject, $body, $headers)) {
					    echo "Email successfully sent to $to_email...";
					} else {
					    echo "Email sending failed...";
					}

			
		}
		echo $checkEmailExists;
	}

		public function change_password(){
		    $this->form_validation->set_rules('new_password','New Password','trim|required');
		    $this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|matches[new_password]');
		    if($this->form_validation->run() == false) {
		        $data  = ['status'  => false,'msg' => validation_errors()];
		    } else {
		        	$changed = $this->Login_model->changePasswordVendor($this->input->post('new_password'),$this->input->post('email2'));
		            $data  = ['status'=>$changed,'msg'=>($changed)?'Password Changed':'Something went wrong!'];
		    }     
	// 		if($this->input->post('new_password') == $this->input->post('confirm_password')){
	// 			$changed = $this->Login_model->changePasswordVendor($this->input->post('new_password'),'puhupwasdeveloper@gmail.com');
	// 			echo json_encode(['status'=>$changed,'msg'=>($changed)?'Password Changed':'Something went wrong!']);
	// 		} else {
	// 			echo json_encode(['status'=>false,'msg'=>'Password doesn\'t match']);
	// 		}
	
	        echo json_encode($data);
		}
}
?>