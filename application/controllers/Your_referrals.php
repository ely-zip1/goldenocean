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
    $level_1_list = $this->ReferralModel->get_referees($member->id);
    $referral_bonus = $this->Referral_bonus_model->get_total_bonus($member->id);

    $total_downline = 0;
    $total_active = 0;

    $referral_list = array();
    $inactive_referral_list = array();

    foreach ($level_1_list as $level_1) {
      $total_downline++;

      if($this->DepositModel->has_active_deposit($level_1->referee_id)){
        if($this->Members->get_member_by_id($level_1->referee_id) != null){
          $total_active++;

          $referral1 = array();


          $level_1_data = $this->Members->get_member_by_id($level_1->referee_id);
          $total_deposit_1 = $this->DepositModel->get_total_deposit($level_1->referee_id);

          $referral1['username'] = $level_1_data->username;
          $referral1['email'] = $level_1_data->email_address;
          $referral1['total_deposit'] = '$ '.number_format($total_deposit_1->amount, '2', '.', ',');
          $referral1['level'] = 'Level 1';

          array_push($referral_list, $referral1);
        }

        if($this->ReferralModel->count_referrals($level_1_data->id) > 0){
          $level_2_list = $this->ReferralModel->get_referees($level_1->referee_id);

          foreach ($level_2_list as $level_2) {
            $total_downline++;

            if($this->DepositModel->has_active_deposit($level_2->referee_id)){
              if($this->Members->get_member_by_id($level_2->referee_id) != null){
                $total_active++;

                $referral2 = array();

                $level_2_data = $this->Members->get_member_by_id($level_2->referee_id);
                $total_deposit_2 = $this->DepositModel->get_total_deposit($level_2->referee_id);

                $referral2['username'] = $level_2_data->username;
                $referral2['email'] = $level_2_data->email_address;
                $referral2['total_deposit'] = '$ '.number_format($total_deposit_2->amount, '2', '.', ',');
                $referral2['level'] = 'Level 2';

                array_push($referral_list, $referral2);
              }

              if($this->ReferralModel->count_referrals($level_2_data->id) > 0){
                $level_3_list = $this->ReferralModel->get_referees($level_2->referee_id);

                foreach ($level_3_list as $level_3) {
                  $total_downline++;

                  if($this->DepositModel->has_active_deposit($level_3->referee_id)){
                    if($this->Members->get_member_by_id($level_3->referee_id) != null){
                      $total_active++;

                      $referral3 = array();

                      $level_3_data = $this->Members->get_member_by_id($level_3->referee_id);
                      $total_deposit_3 = $this->DepositModel->get_total_deposit($level_3->referee_id);

                      $referral3['username'] = $level_3_data->username;
                      $referral3['email'] = $level_3_data->email_address;
                      $referral3['total_deposit'] = '$ '.number_format($total_deposit_3->amount, '2', '.', ',');
                      $referral3['level'] = 'Level 3';

                      array_push($referral_list, $referral3);
                    }
                  }else{
                    $inactive_referral3 = array();

                    $inactive_3_data = $this->Members->get_member_by_id($level_3->referee_id);

                    $inactive_referral3['username'] = $inactive_3_data->username;
                    $inactive_referral3['email'] = $inactive_3_data->email_address;
                    $inactive_referral3['level'] = 'Level 3';

                    array_push($inactive_referral_list, $inactive_referral3);
                  }
                }
              }
            }else{
              $inactive_referral2 = array();

              $inactive_2_data = $this->Members->get_member_by_id($level_2->referee_id);

              $inactive_referral2['username'] = $inactive_2_data->username;
              $inactive_referral2['email'] = $inactive_2_data->email_address;
              $inactive_referral2['level'] = 'Level 2';

              array_push($inactive_referral_list, $inactive_referral2);
            }
          }
        }
      }else{
        $inactive_referral1 = array();

        $inactive_1_data = $this->Members->get_member_by_id($level_1->referee_id);

        $inactive_referral1['username'] = $inactive_1_data->username;
        $inactive_referral1['email'] = $inactive_1_data->email_address;
        $inactive_referral1['level'] = 'Level 1';

        array_push($inactive_referral_list, $inactive_referral1);
      }
    }

    $data['referral_list'] = $referral_list;

    $data['inactive_referral_list'] = $inactive_referral_list;

    $data['total_bonus'] = '$'. number_format($referral_bonus, '2', '.', ',');
    $data['total_referrals'] = $total_downline;
    $data['active_referrals'] = $total_active;

    $this->load->view('templates/header', $data);
    $this->load->view('pages/your_referrals', $data);
    $this->load->view('templates/footer');
  }

  public function list_referrals($member_id, $level){
    $referees = $this->ReferralModel->get_referees($member_id);

    $list = array();

    foreach ($referees as $referee) {
      $referral = array();

      $referee_data = $this->Members->get_member_by_id($referee->referee_id);
      $total_deposit = $this->DepositModel->get_total_deposit($referee->referee_id);

      $referral['username'] = $referee_data->username;
      $referral['email'] = $referee_data->email_address;
      $referral['total_deposit'] = $total_deposit->amount;
      $referral['level'] = $level;

      array_push($list, $referral);
    }

    return $list;
  }

}
