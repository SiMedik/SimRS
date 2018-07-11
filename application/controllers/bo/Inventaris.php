<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
 
	function __construct(){
		parent::__construct();		
		$this->load->model('');
		if ($this->session->userdata('status') != 'login') {
			redirect(base_url("admin/Login"));
		}
		
	}
	public function index()
	{
		$this->load->view('bo/view_header');
		$this->load->view('bo/view_inventaris');
		$this->load->view('bo/view_footer');
	}
}
