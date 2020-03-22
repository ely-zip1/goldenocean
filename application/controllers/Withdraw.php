<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Withdraw extends CI_Controller
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
    $data['title'] = 'Withdraw';



    $this->load->view('templates/header', $data);
    $this->load->view('pages/withdraw', $data);
    $this->load->view('templates/footer');
  }

}
