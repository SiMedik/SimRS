<?php

	class Merek extends CI_Controller
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
		$data['tb_merek']	= $this->M_datamaster->tampil_data('tb_merek');
		$this->load->view('keuangan/view_merek',$data);
		$this->load->view('keuangan/view_footer');
	}
	public function tambah(){
		$this->load->view('keuangan/view_header');
		$this->load->view('keuangan/view_tambah_merek');
		$this->load->view('keuangan/view_footer');
	}
	public function aksi_tambah(){
		$id_merek		= $this->input->post('id_merek');
		$kode			= $this->input->post('kode');
		$nama_merek		= $this->input->post('nama_merek');
		$catatan_merek  = $this->input->post('catatan_merek');

		$data           = array(
			'id_merek'			=> $id_merek,
			'kode'				=> $kode,
			'nama_merek'		=> $nama_merek,
			'catatan_merek'		=> $catatan_merek
		);

		$this->M_datamaster->input_data($data,'tb_merek');
		redirect('keuangan/Merek');
		
		
	}
	public function edit($id_merek){
		$where = array(
			'id_merek' => $id_merek
		);
		$this->load->view('keuangan/view_header');
		$data['tb_merek'] = $this->M_datamaster->edit_data($where,'tb_merek')->result();
		$this->load->view('keuangan/view_edit_merek',$data);
		$this->load->view('keuangan/view_footer');
	}
	public function update(){
		$id_merek		= $this->input->post('id_merek');
		$kode			= $this->input->post('kode');
		$nama_merek		= $this->input->post('nama_merek');
		$catatan_merek	= $this->input->post('catatan_merek');

		$data           = array(
			'id_merek'			=> $id_merek,
			'kode'				=> $kode,
			'nama_merek'		=> $nama_merek,
			'catatan_merek'		=> $catatan_merek
		);

		$where = array(
			'id_merek' => $id_merek
		);

		$this->M_datamaster->update_data($where,$data,'tb_merek');
		redirect('keuangan/Merek');
		
	}
	public function hapus($id_merek){
		$where = array(
			'id_merek' => $id_merek
		);

		$this->M_datamaster->hapus_data($where,'tb_merek');
		redirect('keuangan/Merek');
		
	}

	}

?>