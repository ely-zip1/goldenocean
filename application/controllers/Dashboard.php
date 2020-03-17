<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
		public function __construct()
        {
            parent::__construct();
						$this->load->model('members');
						$this->load->model('Referral_codes');
        }

	public function index() {
		$data = array(
			'title' => "Dashboard"
		);

		$data['username'] =
		$this->load->view('templates/header', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer', $data);
	}
}
?>
