<?php

	class Inventori extends CI_Controller
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
		$this->load->view('keuangan/view_header');
		$data['tb_inventori']	= $this->M_datamaster->tampil_data('tb_inventori');
		$this->load->view('keuangan/view_inventori',$data);
		$this->load->view('keuangan/view_footer');
	}
	public function tambah(){
		$this->load->view('keuangan/view_header');
		$this->load->view('keuangan/view_tambah_inventori');
		$this->load->view('keuangan/view_footer');
	}
	public function aksi_tambah(){
		$id_inventori			= $this->input->post('id_inventori');
		$kode_inventori			= $this->input->post('kode_inventori');
		$nama_inventori			= $this->input->post('nama_inventori');
		$catatan_inventori 	= $this->input->post('catatan_inventori');

		$data           = array(
			'id_inventori'			=> $id_inventori,
			'kode_inventori'		=> $kode_inventori,
			'nama_inventori'		=> $nama_inventori,
			'catatan_inventori'		=> $catatan_inventori
		);

		$this->M_datamaster->input_data($data,'tb_inventori');
		redirect('keuangan/Inventori');
		
		
	}
	public function edit($id_inventori){
		$where = array(
			'id_inventori' => $id_inventori
		);
		$this->load->view('keuangan/view_header');
		$data['tb_inventori'] = $this->M_datamaster->edit_data($where,'tb_inventori')->result();
		$this->load->view('keuangan/view_edit_inventori',$data);
		$this->load->view('keuangan/view_footer');
	}
	public function update(){
		$id_inventori			= $this->input->post('id_inventori');
		$kode_inventori			= $this->input->post('kode_inventori');
		$nama_inventori			= $this->input->post('nama_inventori');
		$catatan_inventori		= $this->input->post('catatan_inventori');

		$data           = array(
			'id_inventori'			=> $id_inventori,
			'kode_inventori'		=> $kode_inventori,
			'nama_inventori'		=> $nama_inventori,
			'catatan_inventori'		=> $catatan_inventori
		);

		$where = array(
			'id_inventori' => $id_inventori
		);

		$this->M_datamaster->update_data($where,$data,'tb_inventori');
		redirect('keuangan/Inventori');
		
	}
	public function hapus($id_inventori){
		$where = array(
			'id_inventori' => $id_inventori
		);

		$this->M_datamaster->hapus_data($where,'tb_inventori');
		redirect('keuangan/Inventori');
		
	}
	}

?>