<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fund_transfer  extends CI_Controller
{
	public function __construct()
        {
            parent::__construct();
						$this->load->model('PackageModel');
						$this->load->model('DepositModel');
						$this->load->model('Members');
						$this->load->model('Deposit_Options');
						$this->load->model('WithdrawalModel');
            $this->load->model('Referral_bonus_model');
            $this->load->model('Fund_transfer_model');
						$this->load->model('Referral_codes');

            date_default_timezone_set('Asia/Manila');
        }

	public function index()
	{
    $data = array(
      'title' => 'Fund Transfer'
    );

    $member_data = $this->Members->get_member($this->session->username);

		$total_growth = $this->DepositModel->get_total_growth($member_data->id);
    $total_withdrawn = $this->WithdrawalModel->compute_total_withdrawn ($member_data->id);
    $total_bonus = $this->Referral_bonus_model->get_total_bonus($member_data->id);
		$total_reinvestment = $this->DepositModel->get_total_member_reinvestment($member_data->id);
    $total_sent = $this->Fund_transfer_model->get_total_sent($member_data->id);
    $total_received = $this->Fund_transfer_model->get_total_received($member_data->id);

    $account_balance = ($total_growth + $total_bonus + $total_received) - $total_withdrawn - $total_reinvestment->amount - $total_sent;

    $data['account_balance'] = $account_balance;

    $this->form_validation->set_rules('receiver_code', 'Code', 'required|callback_validate_code');
    $this->form_validation->set_rules('transfer_amount', 'Amount', 'required|regex_match[/^(\d*\.)?\d+$/]|less_than_equal_to['.$account_balance.']');

    if($this->form_validation->run() == FALSE){
			// print_r('akjhfkajsthfklsadf');
      $this->load->view('templates/header', $data);
      $this->load->view('pages/fund_transfer', $data);
      $this->load->view('templates/footer');
    }
    else{
      $transfer_data = array(
				'sender_member_id' => $member_data->id
			);

      $referral_code_data = $this->Referral_codes->get_by_code($_POST['receiver_code']);
      $receiver_data = $this->Members->get_member_by_referral_id($referral_code_data->id);

      $transfer_data['receiver_member_id'] = $receiver_data->id;
      $transfer_data['amount'] = $_POST['transfer_amount'];
      $transfer_data['date'] = date('Y-m-d H:i:s');

      $this->Fund_transfer_model->add($transfer_data);

			// print_r($transfer_data);
      $this->session->set_flashdata('transfer_success', "You successfuly transfered $ ".number_format($_POST['transfer_amount'], 2, '.', ',')." to ".$_POST['receiver_code']."!" );

      redirect('fund_transfer', 'refresh');
    }
  }

  public function validate_code()
  {
    $is_code_valid = $this->Referral_codes->verify_member_code($_POST['receiver_code']);

		// print_r($is_code_valid);

    if($is_code_valid){
      return true;
    }else{
      $this->form_validation->set_message('validate_code', 'Code entered is invalid.');
      return false;
    }
  }
}
