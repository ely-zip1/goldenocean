<?php

class Registration extends CI_Controller{
    public function __construct()
    {
            parent::__construct();
            $this->load->model('Members');
            $this->load->model('Referral_codes');
            $this->load->model('ReferralModel');

            date_default_timezone_set('Asia/Manila');
    }

    public function index($referral_code = ''){
        $data = array(
            'title' => "Registration"
        );


        if(isset($referral_code)){


            if($this->Referral_codes->is_valid_code($referral_code)){
                $data['referral_code'] = $referral_code;
            }else{
                $data['referral_code'] = $this->Referral_codes->get_root_code();
            }
        }

        $this->form_validation->set_rules('fullname', 'Full Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_is_new_email');
        $this->form_validation->set_rules('confirm_email', 'Email Confirmation', 'required|matches[email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|min_length[6]|matches[password]');
        $this->form_validation->set_rules('referral', 'Referral Code', 'required');


      	if ($this->form_validation->run() == FALSE) {
              // echo "failed validation";
      		$this->load->view('login/header', $data);
      		$this->load->view('login/registration', $data);
      		$this->load->view('login/footer');
      	}
      	else {
              	// echo "success validation";

                  $refcode = $this->Referral_codes->get_new_code();
                  $refcode->is_taken = '1';
                  $this->Referral_codes->take_code($refcode);

                  $options = [
                      'cost' => 11
                    ];
                  $password = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);

                  $user_data = array(
                      'full_name' => $_POST['fullname'],
                      'username' => $_POST['username'],
                      'email_address' => $_POST['email'],
                      'referral_code_id' => $refcode->id,
                      'date' => date('Y-m-d H:i:s'),
                      'password' => $password,
                      'account_type_id' => '2'
                  );

                  $this->Members->add_member($user_data);

                  if($this->Members->verify_member($user_data['email_address'],$_POST['password'])){
                      // echo "success";
                      $referrer_code = $this->Referral_codes->get_by_code($_POST['referral']);
                      $referrer_data = $this->Members->get_member_by_referral_id($referrer_code->id);
                      $new_member = $this->Members->get_member($user_data['email_address']);

                      $new_referral = array(
                          'referrer_id' => $referrer_data->id,
                          'member_id' => $new_member->id
                      );

                      $this->ReferralModel->add_referral($new_referral);

                      $this->session->set_flashdata("success","yeey");
                      redirect('registration','refresh');
                  }else{
                      // echo "failed";
                      $this->load->view('login/header', $data);
                      $this->load->view('login/registration', $data);
                      $this->load->view('login/footer');
                  }
      		}
    }

    function is_new_email(){

    	if($this->Members->has_duplicate_email($_POST['email'])){
    		$this->form_validation->set_message('is_new_email', 'Email address already exists.');
    		return false;
    	}else{
    		return true;
    	}
    }

    function is_new_username(){

    	if($this->Members->has_duplicate_email($_POST['email'])){
    		$this->form_validation->set_message('is_new_email', 'Email address already exists.');
    		return false;
    	}else{
    		return true;
    	}
    }
}
