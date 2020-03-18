<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Plans extends CI_Controller
{
	public function __construct()
        {
            parent::__construct();
						$this->load->model('Packagemodel');
						$this->load->model('DepositModel');
						$this->load->model('Members');
						$this->load->model('Deposit_Options');

            date_default_timezone_set('Asia/Manila');
        }

	public function index()
	{
		$data = array(
			'title' => "Plans"
		);

		$packages = $this->Packagemodel->get_packages();

		$data['plan1'] = strtoupper($packages[0]->package_name);
		$data['plan2'] = strtoupper($packages[1]->package_name);
		$data['plan3'] = strtoupper($packages[2]->package_name);

		$modes_of_payment = $this->Deposit_Options->get_all();

		$data['mode1'] = ucfirst($modes_of_payment[0]->name);
		$data['mode2'] = ucfirst($modes_of_payment[1]->name);
		$data['mode3'] = ucfirst($modes_of_payment[2]->name);
		$data['mode4'] = ucfirst($modes_of_payment[3]->name);
		$data['mode5'] = ucfirst($modes_of_payment[4]->name);
		$data['mode6'] = ucfirst($modes_of_payment[5]->name);

		// print_r($packages);

		// $url = "https://bitpay.com/api/rates";
	  //  $json = json_decode(file_get_contents($url));
	  //  $dollar = $btc = 0;
	  //  foreach($json as $obj){
	  //    echo '1 bitcoin = $'. $obj->rate .' '. $obj->name .' ('. $obj->code .')<br>';
		//  }


		$this->form_validation->set_rules('chosen_plan', 'Plan', 'required');
		$this->form_validation->set_rules('plan_payment_mode', 'Payment Mode', 'required');
		$this->form_validation->set_rules('deposit_amount', 'Deposit Amount', 'required|
			regex_match[/^(\d*\.)?\d+$/]|
			callback_valid_deposit');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('pages/plans', $data);
			$this->load->view('templates/footer');
		}
		else {
			$member_data = $this->Members->get_member($this->session->username);
			$deposit_data = array();

			$deposit_data['member_id'] = $member_data->id;
			$deposit_data['date'] = date('Y-m-d H:i:s');
			$deposit_data['amount'] = $_POST['deposit_amount'];

			if($_POST['chosen_plan'] == 'plan1'){
				$deposit_data['package_id'] = '1';
			}else if($_POST['chosen_plan'] == 'plan2'){
				$deposit_data['package_id'] = '2';
			}else if($_POST['chosen_plan'] == 'plan3'){
				$deposit_data['package_id'] = '3';
			}

			if($_POST['plan_payment_mode'] == 'mode1'){
				$deposit_data['deposit_options_id'] = '1';
			}else if($_POST['plan_payment_mode'] == 'mode1'){
				$deposit_data['deposit_options_id'] = '2';
			}else if($_POST['plan_payment_mode'] == 'mode2'){
				$deposit_data['deposit_options_id'] = '3';
			}else if($_POST['plan_payment_mode'] == 'mode3'){
				$deposit_data['deposit_options_id'] = '4';
			}else if($_POST['plan_payment_mode'] == 'mode4'){
				$deposit_data['deposit_options_id'] = '5';
			}else if($_POST['plan_payment_mode'] == 'mode5'){
				$deposit_data['deposit_options_id'] = '6';
			}

			$deposit_data['is_pending'] = '1';

			$this->DepositModel->add_deposit($deposit_data);

			redirect('deposit_details', refresh);
		}
	}

	function valid_deposit(){

		if($_POST['chosen_plan'] == 'plan1'){
			if($_POST['deposit_amount'] >= 80 && $_POST['deposit_amount'] <= 799){
				return true;
			}else {
    		$this->form_validation->set_message('valid_deposit', 'username already exists.');
				return false;
			}
		}
		else if($_POST['chosen_plan'] == 'plan2'){
			if($_POST['deposit_amount'] >= 800 && $_POST['deposit_amount'] <= 3999){
				return true;
			}else {
    		$this->form_validation->set_message('valid_deposit', 'username already exists.');
				return false;
			}
		}
		else if($_POST['chosen_plan'] == 'plan3'){
			if($_POST['deposit_amount'] >= 4000 && $_POST['deposit_amount'] <= 8000){
				return true;
			}else {
    		$this->form_validation->set_message('valid_deposit', 'username already exists.');
				return false;
			}
		}

	}

}
