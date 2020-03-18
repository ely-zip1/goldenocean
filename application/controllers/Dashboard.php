<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
		public function __construct()
        {
            parent::__construct();
						$this->load->model('DepositModel');
						$this->load->model('Members');
						$this->load->model('WithdrawalModel');
						$this->load->model('Referral_bonus_model');
						$this->load->model('Referralmodel');
						$this->load->model('Referral_codes');
						$this->load->model('Indirect_bonus_model');
        }

	public function index() {

		$data = array(
			'title' => "Dashboard",
			'profit' => '0',
			'deposit' => '0',
			'referral_bonus' => '0',
			'balance' => '0'
		);

		$member_data = $this->Members->get_member($this->session->userdata('username'));

		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = $this->session->userdata('fullname');
		$data['date_registered'] = $this->session->userdata('date_registered');

		$data['referral_code'] = $this->Referral_codes->get_members_code($member_data->referral_code_id)->code;

		$this->load->view('templates/header', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer', $data);
	}
}
?>
