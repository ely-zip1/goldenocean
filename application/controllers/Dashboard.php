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
						$this->load->model('ReferralModel');
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

		if(isset($member_data)){
			$pending_withdrawal = $this->WithdrawalModel->get_pending_withdrawal($member_data->id);
			$total_withdrawal = $this->WithdrawalModel->get_total_withdrawal_per_member($member_data->id);
			$last_withdrawal = $this->WithdrawalModel->get_latest_withdrawal_amount($member_data->id);
			$total_growth = $this->DepositModel->get_total_growth($member_data->id);
			$last_deposit = $this->DepositModel->get_latest_deposit_amount($member_data->id);
			$total_deposit = $this->DepositModel->get_total_deposit($member_data->id);


			$data['pending_withdrawals'] = '$ '.number_format($pending_withdrawal->total, 2, '.', ',');
			$data['total_withdrawals'] = '$ '.number_format($total_withdrawal->amount, 2, '.', ',');
			$data['last_withdrawal'] = '$ '.number_format($last_withdrawal->amount, 2, '.', ',');
			$data['total_growth'] = '$ '.number_format($total_growth, 2, '.', ',');
			$data['last_deposit'] = '$ '.number_format($last_deposit->amount, 2, '.', ',');
			$data['total_deposit'] = '$ '.number_format($total_deposit->amount, 2, '.', ',');
			// '$'.number_format($_POST['deposit_amount'], 2, '.', ',');

			// print_r($this->WithdrawalModel->get_pending_withdrawal($member_data->id));
		}
		$data['referral_code'] = $this->Referral_codes->get_members_code($member_data->referral_code_id)->code;

		$this->load->view('templates/header', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer', $data);
	}
}
?>
