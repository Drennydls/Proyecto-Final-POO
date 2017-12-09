<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller
{

	public function view($page = 'login')
	{
	    if ( ! file_exists(APPPATH.'views/'.$page.'.php'))
	    {
            // Whoops, we don't have a page for that!
            $this->show_404();
	    }

	    $data['title'] = ucfirst($page); // Capitalize the first letter

	    setlocale(LC_TIME,'spanish');
	    $dateutf = strftime("%A, %d de %B del %Y");
	    $dateutf = ucfirst(iconv("ISO-8859-1","UTF-8",$dateutf));
	    $data['fechaActual'] = $dateutf;

	    if ($page == 'login' || $page == 'register' || $page == 'recoverpassword') {
	    	$this->loggedIn();
	    }
	    /*elseif ($page == 'register') {
	    	$this->loggedRegisterIn();
	    }*/
	    else{
	    	$this->notLoggedIn();

	    	$this->load->library('session');

	    	$this->load->model('model_users');
	    	$data['userData'] = $this->model_users->fetchUserData($this->session->userdata('user_id'));
	    }

	    if ($page == 'login' || $page == 'register' || $page == 'recoverpassword') {
	    	$this->load->view('templates/login/header', $data);
		    $this->load->view($page, $data);
		    $this->load->view('templates/login/footer', $data);
	    }
	    else{
	    	// $this->load->view('templates/berea/header', $data);
		    $this->load->view($page, $data);
		    // $this->load->view('templates/berea/footer', $data);
	    }
	}

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */
