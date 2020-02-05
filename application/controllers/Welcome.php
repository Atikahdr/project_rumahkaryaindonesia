<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{		
		$this->load->view('inc/frontend_header_view');
		$this->load->view('berita_view');
		$this->load->view('inc/frontend_footer_view');
	}
}
