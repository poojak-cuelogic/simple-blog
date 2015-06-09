<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		if($login = $this->input->post('login')) {
			$this->page_data['login'] =& $login;
			
			$user_request = $this->api_mdl->get('accounts/login', array('email' => $login['email'], 'password' => $login['password']));
			
			if($user_request->status)
			{
				if($user_request->response->admin)
				{
					$this->session->set_userdata('user_id', $user_request->response->user_id);
					$this->session->set_userdata('admin', 1);
					redirect('mpc-admin/dashboard');
				}
			}
			$this->page_data['errors']['login'] = 'You have entered an invalid username/password.';
		}
	}
}


