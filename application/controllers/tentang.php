<?php 


/**
 * 
 */
class tentang extends CI_Controller
{
	
	public function index()
	{
		
		$this->load->view('inc/frontend_header_view');
		$this->load->view('tentang/tentang_kami_view');
		$this->load->view('inc/frontend_footer_view');
	}
}


 ?>