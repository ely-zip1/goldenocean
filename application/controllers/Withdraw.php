<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Withdraw extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('DepositModel');
    $this->load->model('WithdrawalModel');
    $this->load->model('Members');
    $this->load->model('Deposit_Options');
    $this->load->model('PackageModel');
    $this->load->model('Referral_bonus_model');
    $this->load->model('Indirect_bonus_model');
    $this->load->model('ReferralModel');
  }

  public function index()
  {
    $data['title'] = 'Withdraw';

    $member = $this->Members->get_member($this->session->username);
    $withdrawals = $this->WithdrawalModel->get_total_withdrawal_per_member($member->id);

    $pending_withdrawal = $this->WithdrawalModel->get_pending_withdrawal($member->id);
    $total_growth = $this->DepositModel->get_total_growth($member->id);
    $total_withdrawn = $this->WithdrawalModel->compute_total_withdrawn ($member->id);
    $total_bonus = $this->Referral_bonus_model->get_total_bonus($member->id);

    $account_balance = ()$total_growth + $total_bonus) - $total_withdrawn;
    $data['account_balance'] = $account_balance;
    $data['pending_withdrawal'] = $pending_withdrawal->total;

    $data['selected_mode'] = 'mode1';

    $this->form_validation->set_rules('plan_payment_mode', 'Payment Mode', 'required');
    $this->form_validation->set_rules('withdraw_amount', 'Withdraw Amount', 'required|regex_match[/^(\d*\.)?\d+$/]');

    if ($this->form_validation->run() == FALSE) {
      if(isset($_POST['plan_payment_mode'])){
				$data['selected_mode'] = $_POST['plan_payment_mode'];
      }
      $this->load->view('templates/header', $data);
      $this->load->view('pages/withdraw', $data);
      $this->load->view('templates/footer');
    }

  }

}
