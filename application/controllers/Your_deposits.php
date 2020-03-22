<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Deposits_admin extends CI_Controller
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

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pages/pending_deposits', $data);
    $this->load->view('admin/templates/footer');
  }

}
