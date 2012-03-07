<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dojo extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation','tank_auth'));
		$this->load->model('dojo_model');
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

		$data['dojo_data'] = $this->dojo_model->get(NULL, TRUE);

		$this->load->view('template/header', $data);
		$this->load->view('dojo/dojo', $data);
		$this->load->view('template/footer');
	}

	function lookup()
	{
		$this->load->library('uri');

		if($this->tank_auth->is_logged_in()){
			$data['username'] = $this->tank_auth->get_username();
			$data['user_data'] =  $this->tank_auth->get_user_data();
		} else {
			$data['username'] = NULL;
			$data['user_data'] = NULL;
		}
		
		$data['dojo_data'] = $this->dojo_model->get($this->uri->segment(2));

		$this->load->view('template/header', $data);
		($data['dojo_data'] != NULL)?$this->load->view('dojo/profile', $data):$this->load->view('dojo/404', $data);
		$this->load->view('template/footer', $data);
	}

	function create()
	{
		if(!$this->tank_auth->is_logged_in()){
			redirect("auth/login");
		} else {
			$data['username'] = $this->tank_auth->get_username();
			$data['user_data'] =  $this->tank_auth->get_user_data();
			$data['dojo_data'] = $this->dojo_model->get($data['user_data']->dojo);
			//check if the user already has a Dojo
			$this->load->view('template/header', $data);

			if(is_null($data['dojo_data'])) {
				$data['type'] =  "error";
				$data["title"] = "You already have a Dojo";
				$data["message"] ="Can't have multiple Dojos";
				$data["url"] = "/dojo/my";

				$this->load->view('template/message', $data);
			} else {
				//set validation rules
				$this->form_validation->set_rules('dojo_name', 'Dojo Name', 'trim|required|xss_clean|min_length[4]|max_length[100]|htmlspecialchars');
				$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|valid_email|required');
				$this->form_validation->set_rules('google_group', 'Google Group URL', 'trim|xss_clean|prep_url|htmlspecialchars');
				$this->form_validation->set_rules('twitter', 'Twitter', 'trim|xss_clean|htmlspecialchars');
				$this->form_validation->set_rules('time', 'Time', 'trim|xss_clean|htmlspecialchars');
				$this->form_validation->set_rules('country', 'Country', 'trim|required|xss_clean|country');
				$this->form_validation->set_rules('location', 'Location', 'trim|xss_clean|htmlspecialchars');
				$this->form_validation->set_rules('coordinates', 'Co-ordinates', 'trim|xss_clean|htmlspecialchars');
				$this->form_validation->set_rules('eb_id', 'EventBrite ID', 'trim|xss_clean|htmlspecialchars');
				$this->form_validation->set_rules('notes', 'Notes', 'trim|xss_clean');
				$this->form_validation->set_rules('need_mentors', 'Need Mentors', 'trim|xss_clean');
				$this->form_validation->set_rules('stage', 'Stage', 'trim|xss_clean|is_natural');
				$this->form_validation->set_rules('supporter_image', 'Supporter Image', 'trim|xss_clean|prep_url|htmlspecialchars');

				$data['errors'] = array();

				if ($this->form_validation->run()) { // validation ok
					if (!is_null($dojo_id = $this->dojo_model->create(
					$this->form_validation->set_value('dojo_name'),
					$this->form_validation->set_value('time'),
					$this->form_validation->set_value('country'),
					$this->form_validation->set_value('location'),
					$this->form_validation->set_value('coordinates'),
					$this->form_validation->set_value('email'),
					$this->form_validation->set_value('google_group'),
					$this->form_validation->set_value('twitter'),
					$this->form_validation->set_value('notes'),
					$this->form_validation->set_value('eb_id'),
					$this->form_validation->set_value('need_mentors'),
					$this->form_validation->set_value('stage'),
					$this->form_validation->set_value('supporter_image'),
					$data['user_data']->user_id
					))) {									// success
					
						redirect('/dojo/'.$dojo_id);

					} else { //failure
						die('fail');
						$errors = $this->dojo_model->get_error_message();
						foreach ($errors as $k => $v)	$data['errors'][$k] = $v." - ";

						$this->load->view('dojo/create', $data);
					}
				} else {
					$this->load->view('dojo/create', $data);
				}
			}
		$this->load->view('template/footer', $data);
		}
	}


	function edit()
	{
		if(!$this->tank_auth->is_logged_in()){
			redirect("auth/login");
		} else {
			$data['username'] = $this->tank_auth->get_username();
			$data['user_data'] =  $this->tank_auth->get_user_data();

			//check if the has a Dojo
			$this->load->view('template/header', $data);

			if(is_null($data['user_data']->dojo)){
				$data['type'] =  "error";
				$data["title"] = "You don't have a Dojo";
				$data["message"] ="You need a preexisting Dojo to edit";
				$data["url"] = "/dojo/";

				$this->load->view('template/message', $data);
			} else {
				//set validation rules
				$this->form_validation->set_rules('dojo_name', 'Dojo Name', 'trim|required|xss_clean|min_length[4]|max_length[100]|htmlspecialchars');
				$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|valid_email|required');
				$this->form_validation->set_rules('google_group', 'Google Group URL', 'trim|xss_clean|prep_url|htmlspecialchars');
				$this->form_validation->set_rules('twitter', 'Twitter', 'trim|xss_clean|htmlspecialchars');
				$this->form_validation->set_rules('time', 'Time', 'trim|xss_clean|htmlspecialchars');
				$this->form_validation->set_rules('country', 'Country', 'trim|required|xss_clean|country');
				$this->form_validation->set_rules('location', 'Location', 'trim|xss_clean|htmlspecialchars');
				$this->form_validation->set_rules('coordinates', 'Co-ordinates', 'trim|xss_clean|htmlspecialchars');
				$this->form_validation->set_rules('eb_id', 'EventBrite ID', 'trim|xss_clean|htmlspecialchars');
				$this->form_validation->set_rules('notes', 'Notes', 'trim|xss_clean');
				$this->form_validation->set_rules('need_mentors', 'Need Mentors', 'trim|xss_clean');
				$this->form_validation->set_rules('stage', 'Stage', 'trim|xss_clean|is_natural');
				$this->form_validation->set_rules('supporter_image', 'Supporter Image', 'trim|xss_clean|prep_url|htmlspecialchars');

				$data['errors'] = array();
				$data['dojo_data'] = $this->dojo_model->get($data['user_data']->dojo);

				if ($this->form_validation->run()) { // validation ok

					if (!is_null($dojo_id = $this->dojo_model->update(
					$data['user_data']->dojo,
					$this->form_validation->set_value('dojo_name'),
					$this->form_validation->set_value('time'),
					$this->form_validation->set_value('country'),
					$this->form_validation->set_value('location'),
					$this->form_validation->set_value('coordinates'),
					$this->form_validation->set_value('email'),
					$this->form_validation->set_value('google_group'),
					$this->form_validation->set_value('twitter'),
					$this->form_validation->set_value('notes'),
					$this->form_validation->set_value('eb_id'),
					$this->form_validation->set_value('need_mentors'),
					$this->form_validation->set_value('stage'),
					$this->form_validation->set_value('supporter_image')
					))) {									// success

						redirect('/dojo/'.$dojo_id);

					} else {//failure
						$errors = $this->dojo_model->get_error_message();
						foreach ($errors as $k => $v)	$data['errors'][$k] = $v." - ";
						$this->load->view('dojo/edit', $data);
					}
				} else {
					$this->load->view('dojo/edit', $data);
				}
			}
			$this->load->view('template/footer', $data);
		}
	}

	function my()
	{
		if(!$this->tank_auth->is_logged_in()){
			redirect("auth/login");
		} else {
			$this->load->model('users');
			$data['username'] = $this->tank_auth->get_username();
			$data['user_data'] =  $this->tank_auth->get_user_data();

			if(is_null($data['user_data']->dojo)){
				$data['type'] =  "error";
				$data["title"] = "You do not have a Dojo or are not logged in";
				$data["message"] = "";
				$data["url"] = "/";

				$this->load->view('template/header', $data);
				$this->load->view('template/message', $data);
				$this->load->view('template/footer', $data);
			} else {
				redirect('/dojo/'.$data['user_data']->dojo);
			}
		}
	}
}

/* End of file dojo.php */
/* Location: ./application/controllers/dojo.php */
