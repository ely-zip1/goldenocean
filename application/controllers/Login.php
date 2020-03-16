<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$data = array(
			'title' => "Login"
		);
		$this->load->view('login/header', $data);
		$this->load->view('login/login', $data);
		$this->load->view('login/footer', $data);
	}
}
?>
