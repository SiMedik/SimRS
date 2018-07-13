<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
 
	function __construct(){
		parent::__construct();		
		$this->load->model('');
		if ($this->session->userdata('status') != 'login') {
			redirect(base_url("admin/Login"));
		}
	}
	public function index()
	{
		$this->load->view('dokter/view_header');
		$this->load->view('dokter/view_dashboard');
		$this->load->view('dokter/view_footer');
	}
}
