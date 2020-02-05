<?php 


/**
 * 
 */
class kegiatan extends CI_Controller
{
	
	public function index()
	{
		
		$this->load->view('inc/frontend_header_view');
		$this->load->view('kegiatan/kegiatan_view');
		$this->load->view('inc/frontend_footer_view');
	}
	public function geobike()
	{
		
		$this->load->view('inc/frontend_header_view');
		$this->load->view('kegiatan/geobike_view');
		$this->load->view('inc/frontend_footer_view');
	}
	public function dokan()
	{
		
		$this->load->view('inc/frontend_header_view');
		$this->load->view('kegiatan/dokan_view');
		$this->load->view('inc/frontend_footer_view');
	}
	public function geopark()
	{
		
		$this->load->view('inc/frontend_header_view');
		$this->load->view('kegiatan/geopark_view');
		$this->load->view('inc/frontend_footer_view');
	}
	public function tenda()
	{
		
		$this->load->view('inc/frontend_header_view');
		$this->load->view('kegiatan/tenda_view');
		$this->load->view('inc/frontend_footer_view');
	}
	public function tao()
	{
		
		$this->load->view('inc/frontend_header_view');
		$this->load->view('kegiatan/tao_view');
		$this->load->view('inc/frontend_footer_view');
	}
	public function laketoba()
	{
		
		$this->load->view('inc/frontend_header_view');
		$this->load->view('kegiatan/laketoba_view');
		$this->load->view('inc/frontend_footer_view');
	}
}


 ?>