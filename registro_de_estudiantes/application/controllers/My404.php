<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->output->set_status_header('404'); 
	    $this->load->view('err404');//loading in custom error view
	}

}

/* End of file My404.php */
/* Location: ./application/controllers/My404.php */