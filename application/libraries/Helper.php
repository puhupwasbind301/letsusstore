<?php 

class Helper {
    protected $CI;
    public function __construct() {
        $this->CI = & get_instance();
    }

    /*-------------------------------------------------------------------------
	| Method : Auth cookie login
	|-------------------------------------------------------------------------*/
    public function authCookieLogin() {
        $cookie_value = get_cookie('remember_me_token');

        if(!empty($cookie_value)) {
            $cookieValueArr = explode('|', $cookie_value);
            
            $remember_me_token = $cookieValueArr[0];
            $username          = $cookieValueArr[1];

            $ipaddress = $this->getIpAddress();

            $this->CI->Model->authRememberMeCookie($remember_me_token, $username, $ipaddress);
        } else {
            return false;
        }

    }

    /*-------------------------------------------------------------------------
	| Method : Get ip address of client
	|-------------------------------------------------------------------------*/
    public function getIpAddress() {
        $ipaddress = '';
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if(getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if(getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if(getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if(getenv('HTTP_FORWARDED'))
		$ipaddress = getenv('HTTP_FORWARDED');
		else if(getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
            $ipaddress = 'UNKNOWN';
            
            return $ipaddress;
    }

    /*-------------------------------------------------------------------------
	| Method : Get admin profile
	|-------------------------------------------------------------------------*/
    public function getAdminProfile() {

        $result = $this->CI->Admin_model->getAdminProfile();
        return $result;

    }

    /*-------------------------------------------------------------------------
    | Method : Get admin profile
    |-------------------------------------------------------------------------*/
    public function SocialLink() {

        $result = $this->CI->Model->getSocialLinks(1);      
        return $result;

    }


}