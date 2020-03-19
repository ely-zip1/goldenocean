<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposit_details extends CI_Controller {
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
			'title' => "Deposit"
		);

		$this->load->view('templates/header', $data);
		$this->load->view('pages/deposit_details', $data);
		$this->load->view('templates/footer');
	}
}
?>
