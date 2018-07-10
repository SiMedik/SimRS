<?php

	/**
	 * 
	 */
	class Apoteker extends CI_Controller
	{
		
		function __construct(){
		parent::__construct();		
		$this->load->model('M_datamaster');
		if ($this->session->userdata('status') != 'login') {
			redirect(base_url("admin/Login"));
		}
		
	}
	public function index()
	{
		$this->load->view('Backoffice/view_header');
		$data['tb_apoteker']	= $this->M_datamaster->tampil_data('tb_apoteker');
		$this->load->view('Backoffice/view_apoteker',$data);
		$this->load->view('Backoffice/view_footer');
	}
	public function tambah(){
		$this->load->view('Backoffice/view_header');
		$this->load->view('Backoffice/view_tambah_apoteker');
		$this->load->view('Backoffice/view_footer');
	}
	public function aksi_tambah(){
		$nama_apoteker		= $this->input->post('nama_apoteker');
		$alamat_apoteker  	= $this->input->post('alamat_apoteker');
		$no_hp				= $this->input->post('no_hp');
		$jenis_kelamin    	= $this->input->post('jenis_kelamin');
		date_default_timezone_get('Asia/Makassar');
		$date_created		= date("y-m-d h:i:s");

		$data           = array(
			'nama_apoteker'			=> $nama_apoteker,
			'alamat_apoteker'		=> $alamat_apoteker,
			'no_hp'					=> $no_hp,
			'jenis_kelamin'			=> $jenis_kelamin,
			'date_created	'		=> $date_created	
		);

		$this->M_datamaster->input_data($data,'tb_apoteker');
		redirect('Backoffice/Apoteker');
	}
	public function edit($id_apoteker){
		$where = array(
			'id_apoteker' => $id_apoteker
		);
		$this->load->view('Backoffice/view_header');
		$data['tb_apoteker'] = $this->M_datamaster->edit_data($where,'tb_apoteker')->result();
		$this->load->view('Backoffice/view_edit_apoteker',$data);
		$this->load->view('Backoffice/view_footer');
	}
	public function update(){
		$id_apoteker		= $this->input->post('id_apoteker');
		$nama_apoteker		= $this->input->post('nama_apoteker');
		$alamat_apoteker  	= $this->input->post('alamat_apoteker');
		$no_hp				= $this->input->post('no_hp');
		$jenis_kelamin    	= $this->input->post('jenis_kelamin');
		date_default_timezone_get('Asia/Makassar');
		$date_created		= date("y-m-d h:i:s");

		$data           = array(
			'id_apoteker'			=> $id_apoteker,
			'nama_apoteker'			=> $nama_apoteker,
			'alamat_apoteker'		=> $alamat_apoteker,
			'no_hp'					=> $no_hp,
			'jenis_kelamin'			=> $jenis_kelamin,
			'date_created	'		=> $date_created	);

		$where = array(
			'id_apoteker' => $id_apoteker
		);

		$this->M_datamaster->update_data($where,$data,'tb_apoteker');
		redirect('Backoffice/Apoteker');
		
	}
	public function hapus($id_apoteker){
		$where = array(
			'id_apoteker' => $id_apoteker
		);

		$this->M_datamaster->hapus_data($where,'tb_apoteker');
		redirect('Backoffice/Apoteker');
		
	}
	}

?>