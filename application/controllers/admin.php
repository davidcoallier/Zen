<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->model('dojo_model');
		$this->load->library('tank_auth');
	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['user_data'] =  $this->tank_auth->get_user_data();

			$this->load->view('template/header', $data);

			if ($data['user_data']->role == 0){
                if(isset($_POST['dojo_id'])){
                    $this->dojo_model->verify($_POST['dojo_id']);
                    $this->load->view('template/alert', array('type' => 'success', 'title' => 'Verified Checked Dojos', 'message' => 'Awww yeah...'));
                }
                $data['dojos'] = $this->dojo_model->get(null, null, true);
				$this->load->view('admin/dojo', $data);
			} else {
				$data['type'] =  "error";
				$data["title"] = "Awkward, You're not an admin...";
				$data["message"] ="Moving swiftly on";
				$data["url"] = "/";
                $this->load->view('template/message', $data);
			}
			$this->load->view('template/footer', $data);
		}
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
