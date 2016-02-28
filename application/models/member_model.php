<?php
class Member_model extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            $this->db = $this->load->database('default',TRUE);
    }

    public function register($data) {
    	$return['status'] = 500;
    	$return['body']['result'] = array();
    	$return['body']['message'] = "";


    	$this->db->select('*');
    	$this->db->from('member');
    	$this->db->where('username',$data['email']);
    	$this->db->or_where('email',$data['email']);

    	$query = $this->db->get();
    	$check_member = $query->num_rows();
    	if($check_member != 0) {
    		$return['body']['message'] = "Duplicated username or email!";
    		return $return;
    	}else {
    		$param = array(
    				'email'		=>	$data['email'],
    				'username'	=>	$data['email'],
    				'password'	=>	md5($data['password']),
    				'newsletter'=>	(!empty($data['subscript_newsletter']) && ($data['subscript_newsletter'] == 'on'))? 1 : 0,
    				'create_date' => date('Y-m-d H:i:s')
    			);

    		$insert_member = $this->db->insert('member',$param);

    		$insert_id = $this->db->insert_id();

    		$member = $this->get_member_by_id($insert_id);
    		$return['status'] = 200;
    		$return['body']['result'] = $member;

    	}    	
    	return $return;
    }

    function get_member_by_id($id) {
    	$this->db->select('*');
    	$this->db->from('member');
    	$this->db->where('member_id',$id);

    	$query = $this->db->get();
    	return $query->row_array();
    }
    
    function verify_member($data) {
    	
		$this->db->set('status', '1');
		$this->db->set('verify_date',date('Y-m-d H:i:s'));
		$this->db->where('member_id', $data['member_id']);
		
		return $this->db->update('member'); 
    }

    function login($data) {
    	$this->db->select('*');
    	$this->db->from('member');
    	$this->db->where('email',$data['email']);
    	$this->db->where('password',md5($data['password']));
    	$query = $this->db->get();
    	$member_data = $query->row_array();

    	if(!empty($member_data)) {
    		if(!empty($data['remember']) && $data['remember'] == 'on') {
    			$member_data['remember'] = 'on';
    		}
    		$this->create_auth($member_data);	
    	}

    	return $member_data;
    	
    }

    function create_auth($data) {

		$cookie_data = array(
							'member_id'	=>	$data['member_id'],
							'username'	=>	$data['username'],
							'email'		=>	$data['email']
						);

		if(!empty($data['remember'])) {
			$expire = 60*60*24*365;  // expire for 1 year
		}else {
			$expire = 0;
		}

		return set_cookie('member_info',base64_encode(json_encode($cookie_data)),$expire);

    }

    function get_auth() {
    	$member_cookie = get_cookie('member_info');
    	return json_decode(base64_decode($member_cookie),true);
    }

    function update_info($data) {

    	foreach($data as $key=>$value) {
    		if($value == '') {
    			unset($data[$key]);
    		}
    	}

    	if(!empty($data['newsletter']) && $data['newsletter'] == 'on') {
    		$data['newsletter'] = 1;
    	}else {
    		$data['newsletter'] = 0;
    	}

    	if(!empty($data['password'])) {
    		$data['password'] = md5($data['password']);
    		unset($data['cpassword']);
    	}
    	$member = $this->get_auth();
    	foreach($data as $key=>$value) {
    		$this->db->set($key, $value);	
    	}
    	
		$this->db->where('member_id', $member['member_id']);
		return $this->db->update('member'); 
    }

}