<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Modellogin');
		
	}
	public function index()
	{
		$this->load->view('admin/view_login');
	}
	function aksi_login(){
		$adm_username = $this->input->post('adm_username');
		$adm_pass     = $this->input->post('adm_pass');

		$where = array(
				'adm_username' => $adm_username,
				'adm_pass'     => $adm_pass
			);

		$cek = $this->Modellogin->cek_login("tb_admin",$where);
		if($cek->num_rows() > 0){
			foreach ($cek->result() as $row)
			{
			$data_session = array(
				'adm_username' => $adm_username,
				'adm_pass'     => $adm_pass,
				'adm_level'    => $row->adm_level,
				'status'       => "login",
				'adm_nama'	   => $row->adm_nama,
				'adm_foto'	   => $row->adm_foto
			);
			
			$this->session->set_userdata($data_session);

			$qad = $cek->row();
			if($adm_username == $qad->adm_username && $adm_pass == $qad->adm_pass){
				if($qad->adm_level == 'Super Admin')
					redirect('admin/Dashboard');
				else if($qad->adm_level == 'Dokter')
					redirect('dokter/Dashboard');
				else if($qad->adm_level == 'Front Office')
					redirect('Fo/Dashboard');
				else if($qad->adm_level == 'Back Office')
					redirect('bo/Dashboard');
				else
					redirect('admin/Login');
				}	
			}
		}
		else
		{
			redirect('admin/Login');
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('admin/Login');
	}
}
