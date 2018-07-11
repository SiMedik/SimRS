<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_datamaster');
		if ($this->session->userdata('status') != 'login') {
			redirect(base_url("admin/Login"));
		}
		
	}
	public function index()
	{
		$this->load->view('admin/view_header');
		$data['tb_admin']	= $this->M_datamaster->tampil_data('tb_admin');
		$this->load->view('admin/view_admin',$data);
		$this->load->view('admin/view_footer');
	}
	public function tambah(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_admin');
		$this->load->view('admin/view_footer');
	}
	public function aksi_tambah(){
		$adm_nama		    = $this->input->post('adm_nama');
		$adm_username		= $this->input->post('adm_username');
		$adm_pass			= $this->input->post('adm_pass');
		$adm_level			= $this->input->post('adm_level');
		
		$this->load->library(array('upload','image_lib'));
		$nmfile					    = "admin-".time();//nama file
		$config['upload_path']		= './upload/foto_admin/';//penyimpanan
		$config['allowed_types']	= 'gif|jpg|png|jpeg|bmp';//type 
		$config['max_size']			= '2048';//
		$config['max_width']		= '1488';//
		$config['max_height']		= '1668';//
		$config['file_name']		= $nmfile;//

		$this->upload->initialize($config);
		
		if($_FILES['filefoto']['name'])
		{
			if($this->upload->do_upload('filefoto'))
			{
				$gbr = $this->upload->data();
				$data  = array(
							'adm_nama'			 => $adm_nama,
							'adm_username'		 => $adm_username,
							'adm_pass'			 => $adm_pass,
							'adm_foto'	         => $gbr['file_name'],
							'adm_level'		  	 => $adm_level
						);
			}
		}
		else
		{
			$data = array(
						'adm_nama'			 => $adm_nama,
						'adm_username'		 => $adm_username,
						'adm_pass'			 => $adm_pass,
						'adm_level'		  	 => $adm_level
					);
		}
			
		$res = $this->M_datamaster->input_data($data,'tb_admin');
		if($res==1){
		 	redirect('admin/Admin');
		 }
		 else{
		 	echo "gagal";		
		 }
	}
	public function edit($id_admin){
		$where = array(
			'id_admin' => $id_admin
		);
		$this->load->view('admin/view_header');
		$data['tb_admin'] = $this->M_datamaster->edit_data($where,'tb_admin')->result();
		$this->load->view('admin/view_edit_admin',$data);
		$this->load->view('admin/view_footer');
	}
	public function update(){
		$id_admin			= $this->input->post('id_admin');
		$adm_nama		    = $this->input->post('adm_nama');
		$adm_username		= $this->input->post('adm_username');
		$adm_pass			= $this->input->post('adm_pass');
		$adm_level			= $this->input->post('adm_level');
		
		$this->load->library(array('upload','image_lib'));
		$nmfile					    = "admin-".time();//nama file
		$config['upload_path']		= './upload/foto_admin/';//penyimpanan
		$config['allowed_types']	= 'gif|jpg|png|jpeg|bmp';//type 
		$config['max_size']			= '2048';//
		$config['max_width']		= '1488';//
		$config['max_height']		= '1668';//
		$config['file_name']		= $nmfile;//

		$this->upload->initialize($config);
		
		if($_FILES['filefoto']['name'])
		{
			if($this->upload->do_upload('filefoto'))
			{
				$gbr = $this->upload->data();
				$data  = array(
							'id_admin'			 => $id_admin,
							'adm_nama'			 => $adm_nama,
							'adm_username'		 => $adm_username,
							'adm_pass'			 => $adm_pass,
							'adm_foto'	         => $gbr['file_name'],
							'adm_level'		  	 => $adm_level
						);
			}
		}
			else
			{
				$data = array(
							'id_admin'			 => $id_admin,
							'adm_nama'			 => $adm_nama,
							'adm_username'		 => $adm_username,
							'adm_pass'			 => $adm_pass,
							'adm_level'		  	 => $adm_level
						);
			}
			
		$where = array(
			'id_admin' => $id_admin
		);
		$this->M_datamaster->update_data($where,$data,'tb_admin');
		redirect('admin/Admin');
	}
	public function hapus($id_admin){
		$where = array(
			'id_admin' => $id_admin
		);
		$this->M_datamaster->hapus_data($where,'tb_admin');
		redirect('admin/Admin');
	}
}
