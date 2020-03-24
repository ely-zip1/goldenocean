<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('pages/upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
          $data= array(
            'title' => 'Account Settings'
          );
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['file_name']            = $this->session->username;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->session->set_flashdata($error);

                        // $this->load->view('pages/upload_form', $error);
                        redirect('account_settings','refresh');

                          //
                    			// $this->load->view('templates/header', $data);
                    	    // $this->load->view('pages/account_settings', $data);
                    	    // $this->load->view('templates/footer');
                }
                else
                {
                  // $data['upload_data'] = array('upload_data' => $this->upload->data());
                  $data['upload_data'] = $this->upload->data();

                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/upload_success', $data);
                        $this->load->view('templates/footer');
                        //
                        // $this->load->view('templates/header', $data);
                        // $this->load->view('pages/account_settings', $data);
                        // $this->load->view('templates/footer');

                }
        }
}
?>
