<?php 

class kegiatan extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('inc/frontend_header_view');
		$this->load->view('berita_view');
		$this->load->view('inc/frontend_footer_view');
	}
}



 ?>