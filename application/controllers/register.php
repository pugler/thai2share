<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('member/register');
	}

	public function confirm() {
		mail('y.apichotbavorn@gmail.com','test','test message');
		$result['status'] = 500;
		$result['data'] = array();
		$result['message'] = "";
		$this->load->model('member_model');

		if(!empty($_POST)) {
			foreach($_POST as $name=>$value) {
				if(!empty($value)) {
					$data[$name] = $value;
				}
			}
		}else {
			$result['message'] = "Wrong Parameter!";
		}

		$member_register = $this->member_model->register($data);

		$result = array(
						'status'	=> 	$member_register['status'],
						'data'		=>	$member_register['body']['result'],
						'message'	=>	$member_register['body']['message']
					);

		$result['encrypt_verify_key'] = $this->encrypt_verify_key($result['data']); 
		
		if($result['status'] != 200) {
			$this->load->view('member/register_result',$result);	
		}else {
			$this->load->view('member/email_register',$result);
		}		
	}

	public function verify($key) {
		$data = $this->decrypt_verify_key($key);
		list($member_id,$email) = explode("|",$data);

		$verify_data = array(
						'member_id'	=>	$member_id,
						'email'		=>	$email
					);

		$this->load->model('member_model');

		$verify_member = $this->member_model->verify_member($verify_data);

		if($verify_member) {
			$return['status'] = 200;
			$return['message'] = "Verify Completed!";
		}else {
			$return['status'] = 500;
			$return['message'] = "Please verify again!";
		}
		$this->load->view('member/verify_member',$return);
	}

	private function encrypt_verify_key($data) {
		$key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");	    
	    
	    $key_size =  strlen($key);
	    
	    $plaintext = $data['member_id']."|".$data['email'];

	    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
	    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	    $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $plaintext, MCRYPT_MODE_CBC, $iv);

	    $ciphertext = $iv . $ciphertext;
	    
	    $ciphertext_base64 = base64_encode($ciphertext);

	    return $ciphertext_base64;
    
	}

	private function decrypt_verify_key($ciphertext_base64) {
		$key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
		$ciphertext_dec = base64_decode($ciphertext_base64);
	    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
	    # retrieves the IV, iv_size should be created using mcrypt_get_iv_size()
	    $iv_dec = substr($ciphertext_dec, 0, $iv_size);
	    
	    # retrieves the cipher text (everything except the $iv_size in the front)
	    $ciphertext_dec = substr($ciphertext_dec, $iv_size);

	    # may remove 00h valued characters from end of plain text
	    $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key,
	                                    $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);
	    
	    return  $plaintext_dec;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */