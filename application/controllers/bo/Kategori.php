<?php

	class Kategori extends CI_Controller
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
		$this->load->view('bo/view_header');
		$data['tb_kategori']	= $this->M_datamaster->tampil_data('tb_kategori');
		$this->load->view('bo/view_kategori',$data);
		$this->load->view('bo/view_footer');
	}
	public function tambah(){
		$this->load->view('bo/view_header');
		$this->load->view('bo/view_tambah_kategori');
		$this->load->view('bo/view_footer');
	}
	public function aksi_tambah(){
		$id_kategori		= $this->input->post('id_kategori');
		$nama_kategori		= $this->input->post('nama_kategori');
		$deskripsi_kategori = $this->input->post('deskripsi_kategori');

		$data           = array(
			'id_kategori'		=> $id_kategori,
			'nama_kategori'		=> $nama_kategori,
			'deskripsi_kategori'=> $deskripsi_kategori
		);

		$this->M_datamaster->input_data($data,'tb_kategori');
		redirect('bo/Kategori');
		
		
	}
	public function edit($id_kategori){
		$where = array(
			'id_kategori' => $id_kategori
		);
		$this->load->view('bo/view_header');
		$data['tb_kategori'] = $this->M_datamaster->edit_data($where,'tb_kategori')->result();
		$this->load->view('bo/view_edit_kategori',$data);
		$this->load->view('bo/view_footer');
	}
	public function update(){
		$id_kategori		= $this->input->post('id_kategori');
		$nama_kategori		= $this->input->post('nama_kategori');
		$deskripsi_kategori	= $this->input->post('deskripsi_kategori');

		$data           = array(
			'id_kategori'		=> $id_kategori,
			'nama_kategori'		=> $nama_kategori,
			'deskripsi_kategori'=> $deskripsi_kategori
		);

		$where = array(
			'id_kategori' => $id_kategori
		);

		$this->M_datamaster->update_data($where,$data,'tb_kategori');
		redirect('bo/Kategori');
		
	}
	public function hapus($id_kategori){
		$where = array(
			'id_kategori' => $id_kategori
		);

		$this->M_datamaster->hapus_data($where,'tb_kategori');
		redirect('bo/Kategori');
		
	}

	}

?>