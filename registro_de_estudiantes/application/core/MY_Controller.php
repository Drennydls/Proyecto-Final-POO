<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function loggedIn()
	{
		if ($this->session->userdata('logged_in') === true) {
			header('location:'.base_url().'dashboard');
		}
	}

	public function loggedRegisterIn()
	{
		if ($this->session->userdata('logged_in') === true) {
			header('location:'.base_url().'dashboard');
		}
	}

	public function notLoggedIn()
	{
		if ($this->session->userdata('logged_in') != true) {
			header('location:'.base_url().'');
		}
	}

	public function show_404()
    {
        $CI =& get_instance();
        $CI->load->view('err404');
        echo $CI->output->get_output();
        exit;
    }

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */ ?>