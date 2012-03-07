<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index()
	{
		if($this->tank_auth->is_logged_in()){
			$data['username'] = $this->tank_auth->get_username();
			$data['user_data'] =  $this->tank_auth->get_user_data();
		} else {
			$data['username'] = NULL;
			$data['user_data'] = NULL;
		}
		$this->load->view('template/header', $data);
		$this->load->view('home', $data);
		$this->load->view('template/footer', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
