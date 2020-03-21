<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account_settings extends CI_Controller
{
	public function __construct()
        {
            parent::__construct();
						$this->load->model('PackageModel');
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

		$member_data = $this->Members->get_member($this->session->username);

		$data['account_name'] = $member_data->username;
		$data['date_registered'] = $member_data->date;
		$data['email_address'] = $member_data->email_address;
		$data['full_name'] = $member_data->full_name;

		if(isset($_POST['account_submit'])){
			if($_POST['account_submit'] == 'reset_password'){
				$this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[6]');
				$this->form_validation->set_rules('confirm_new_password', 'Password Confirmation', 'required|min_length[6]|matches[new_password]');
			}
			else if($_POST['account_submit'] == 'bank'){
				$this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
				$this->form_validation->set_rules('bank_account_name', 'Account Name', 'required');
				$this->form_validation->set_rules('bank_account_number', 'Account Number', 'required');
			}
			else if($_POST['account_submit'] == 'bitcoin'){
				$this->form_validation->set_rules('bitcoin_account', 'Bitcoin Account', 'required');
			}
			else if($_POST['account_submit'] == 'ethereum'){
				$this->form_validation->set_rules('ethereum_account', 'Ethereum Account', 'required');
			}
			else if($_POST['account_submit'] == 'paypal'){
				$this->form_validation->set_rules('paypal_account', 'Paypal Account', 'required');
			}
			else if($_POST['account_submit'] == 'abra'){
				$this->form_validation->set_rules('abra_account', 'Abra Account', 'required');
			}
			else if($_POST['account_submit'] == 'neteller'){
				$this->form_validation->set_rules('neteller_account', 'Neteller Account', 'required');
			}
			else if($_POST['account_submit'] == 'advcash'){
				$this->form_validation->set_rules('advcash_account', 'Advcash Account', 'required');
			}
		}



		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
	    $this->load->view('pages/account_settings', $data);
	    $this->load->view('templates/footer');
		}else{
			$data['password_update_success'] = 'Password updated!';

			$this->load->view('templates/header', $data);
	    $this->load->view('pages/account_settings', $data);
	    $this->load->view('templates/footer');
		}


  }

}
