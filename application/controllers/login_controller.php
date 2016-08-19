<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function __construct() { 
		/* Ini untuk instansiasi controller parda parent-nya 
		 dan agar bisa menggunakan properti dan fungsi turunannnya */
		parent::__construct();

		/* Load kebutuhan library */
		$this->load->model(array("login_model"));
	}

	/* Default */
	public function index() {

		$this->load->view("login/form_login");
	}

	/* Metode autentikasi untuk login */
	public function auth() {

		/* Tangkap data POST */
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		/* Setting validasi */
		/* required : harus di isi tidak boleh kosong, jika kosong maka akan terjadi kesalahan 
		   min_length : minimal karakter yang harus di isi adalah 5 karakter
		 */
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

		/* Kondisi jika inputan terjadi kesalahan */
		if ($this->form_validation->run() == FALSE)
			$this->load->view('login/form_login');
		else {
			/* Kondisi jika sukses */
			$query = $this->login_model->findUserPass($username,$password);
			
			/* Periksa apakah query terdapat hasil atau data atau jumlah row ? */
			if($query->num_rows() > 0)
				redirect("main"); /* Lakukan sesuatu */
			else {
				/* Aktifkan dulu library session-nya lalu 
				buat flash data menampilkan pesan error
				kegagalan pada login, password username tidak
				sama atau tidak terdapat datanya di dalam database */
				$this->session->set_flashdata('pesan_error','Username atau password salah!');
				redirect("login");
			}
		}
	}
}

/* End of file Login_controller.php */
/* Location: ./application/controllers/Login_controller.php */