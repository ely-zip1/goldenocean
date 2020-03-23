<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Your_referrals extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('DepositModel');
    $this->load->model('Members');
    $this->load->model('Deposit_Options');
    $this->load->model('PackageModel');
    $this->load->model('ReferralModel');
    $this->load->model('Referral_bonus_model');
  }

  public function index()
  {
    $data['title'] = 'Referrals';

    $member = $this->Members->get_member($this->session->username);
    $referees = $this->ReferralModel->get_referees($member->id);
    $referral_bonus = $this->Referral_bonus_model->get_total_bonus($member->id);

    $total_downline = 0;
    $total_active = 0;
    foreach ($referees as $downline) {
      $total_downline++;
      if($this->DepositModel->has_deposit($downline->referee_id)){
        $total_active++;
      }
    }

    $data['total_bonus'] = '$'. number_format($referral_bonus, '2', '.', ',');
    $data['total_referrals'] = $total_downline;
    $data['active_referrals'] = $total_active;

    $this->load->view('templates/header', $data);
    $this->load->view('pages/your_referrals', $data);
    $this->load->view('templates/footer');
  }

}
