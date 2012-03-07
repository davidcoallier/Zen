<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('template/header', $data);
			$data['requested_user'] = $this->users->get_user_by_username($this->uri->segment(2));
			if ($data['requested_user'] == NULL){
				$this->load->view('profile_404');
			} else {
				$this->load->view('profile', $data);
			}
			$this->load->view('template/footer');
		}
	}
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */
