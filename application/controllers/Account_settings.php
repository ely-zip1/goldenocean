<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account_settings extends CI_Controller
{
	public function __construct()
        {
            parent::__construct();
						$this->load->model('Packagemodel');
						$this->load->model('DepositModel');
						$this->load->model('Members');
						$this->load->model('Deposit_Options');

            date_default_timezone_set('Asia/Manila');
        }

	public function index()
	{
		$data = array(
			'title' => "Account Settings"
		);

    			$this->load->view('templates/header', $data);
    			$this->load->view('pages/account_settings', $data);
    			$this->load->view('templates/footer');
  }

}
