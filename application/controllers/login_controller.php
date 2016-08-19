<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model(array("login_model"));
	}

	public function index() {
		$this->load->view("login/form_login");
	}

	/* Metode autentikasi untuk login */
	public function auth() {
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		/* Setting validasi */
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

		/* Kondisi jika inputan terjadi kesalahan */
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login/form_login');
		} else {
			/* Kondisi jika sukses */
			$query = $this->login_model->findUserPass($username,$password);
			
			/* Jika hasilnya lebih dari 0 atau ada isinya ? */
			/* maka ? */
			if($query->num_rows() > 0) {
				/* Lakukan sesuatu */
				echo "SUKSES";
			}
		}
	}
}

/* End of file Login_controller.php */
/* Location: ./application/controllers/Login_controller.php */