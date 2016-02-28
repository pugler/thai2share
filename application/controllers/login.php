<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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

		$this->load->view('member/login');
	}

	public function submit() {
		if(empty($_POST)) {
			redirect(base_url().'login');
		}else {
			$param = array(
						'email'	=>	$_POST['email'],
						'password' => $_POST['password'],
						'remember' => (!empty($_POST['remember']))? 'on' : 'off'
					);
			$this->load->model('member_model');
			$member_login = $this->member_model->login($param);

			if(empty($member_login)) {
				redirect(base_url().'login?fail');
			}else {
				redirect(base_url().'mymember');
			}

			
		}
	}

	public function logout() {
		delete_cookie('member_info');
		redirect(base_url().'login');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */