<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		echo "MAIN CONTROLLER";
	}

}