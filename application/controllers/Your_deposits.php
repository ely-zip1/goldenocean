<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Your_deposits extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('DepositModel');
    $this->load->model('Members');
    $this->load->model('Deposit_Options');
    $this->load->model('PackageModel');
    $this->load->model('Referral_bonus_model');
    $this->load->model('Indirect_bonus_model');
    $this->load->model('ReferralModel');
  }

  public function index()
  {
    $data['title'] = 'Deposits';

    $member = $this->Members->get_member($this->session->username);
    $deposits = $this->DepositModel->get_deposit_per_member($member->id);

    $total_deposit = 0;
    foreach ($deposits as $deposit) {
      if($deposit->is_pending == 0){
        $total_deposit += $deposit->amount;
      }
    }

    $data['total_details'] = number_format($total_deposit, 2, '.', ',');

    $this->load->view('templates/header', $data);
    $this->load->view('pages/your_deposits', $data);
    $this->load->view('templates/footer');
  }

}
