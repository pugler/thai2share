<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymember extends CI_Controller {

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
		$this->load->model('member_model');

		$member_info = $this->member_model->get_auth();

		if(empty($member_info)) {
			redirect(base_url().'login');
		}else {
			$member = $this->member_model->get_member_by_id($member_info['member_id']);
			$this->load->view('member/mymember',$member);	
		}		
	}

	public function update() {

		if(empty($_POST)) {
			redirect(base_url().'mymember');
		}else {
			$this->load->model('member_model');
			
			$this->member_model->update_info($_POST);	
			redirect(base_url().'mymember');
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */