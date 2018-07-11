<?php

	class P_Jawab extends CI_controller
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
		$data['tb_pjawab']	= $this->M_datamaster->tampil_data('tb_pjawab');
		$this->load->view('bo/view_pjawab',$data);
		$this->load->view('bo/view_footer');
	}
	public function tambah(){
		$this->load->view('bo/view_header');
		$this->load->view('bo/view_tambah_pjawab');
		$this->load->view('bo/view_footer');
	}
	public function aksi_tambah(){
		$id_pjawab			= $this->input->post('id_pjawab');
		$kode_pjawab		= $this->input->post('kode_pjawab');
		$nama_pjawab		= $this->input->post('nama_pjawab');
		$catatan_pjawab 	= $this->input->post('catatan_pjawab');

		$data           = array(
			'id_pjawab'			=> $id_pjawab,
			'kode_pjawab'		=> $kode_pjawab,
			'nama_pjawab'		=> $nama_pjawab,
			'catatan_pjawab'	=> $catatan_pjawab
		);

		$this->M_datamaster->input_data($data,'tb_pjawab');
		redirect('bo/P_Jawab');
		
		
	}
	public function edit($id_pjawab){
		$where = array(
			'id_pjawab' => $id_pjawab
		);
		$this->load->view('bo/view_header');
		$data['tb_pjawab'] = $this->M_datamaster->edit_data($where,'tb_pjawab')->result();
		$this->load->view('bo/view_edit_pjawab',$data);
		$this->load->view('bo/view_footer');
	}
	public function update(){
		$id_pjawab			= $this->input->post('id_pjawab');
		$kode_pjawab		= $this->input->post('kode_pjawab');
		$nama_pjawab		= $this->input->post('nama_pjawab');
		$catatan_pjawab		= $this->input->post('catatan_pjawab');

		$data           = array(
			'id_pjawab'			=> $id_pjawab,
			'kode_pjawab'		=> $kode_pjawab,
			'nama_pjawab'		=> $nama_pjawab,
			'catatan_pjawab'	=> $catatan_pjawab
		);

		$where = array(
			'id_pjawab' => $id_pjawab
		);

		$this->M_datamaster->update_data($where,$data,'tb_pjawab');
		redirect('bo/P_Jawab');
		
	}
	public function hapus($id_pjawab){
		$where = array(
			'id_pjawab' => $id_pjawab
		);

		$this->M_datamaster->hapus_data($where,'tb_pjawab');
		redirect('bo/P_Jawab');
		
	}
	}

?>