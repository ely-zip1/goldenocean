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
  }

  public function index()
  {
    $data['title'] = 'Referrals';

    $this->load->view('templates/header', $data);
    $this->load->view('pages/your_referrals', $data);
    $this->load->view('templates/footer');
  }

}
