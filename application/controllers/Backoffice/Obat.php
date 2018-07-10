<?php

	/**
	 * 
	 */
	class Obat extends CI_Controller
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
		$data['tb_obat']	= $this->M_datamaster->tampil_data('tb_obat');
		$this->load->view('Backoffice/view_obat',$data);
		$this->load->view('Backoffice/view_footer');
	}
	public function tambah(){
		$this->load->view('Backoffice/view_header');
		$this->load->view('Backoffice/view_tambah_obat');
		$this->load->view('Backoffice/view_footer');
	}
	public function aksi_tambah(){
		$kode_obat		= $this->input->post('kode_obat');
		$nama_obat		= $this->input->post('nama_obat');
		$kategori_obat  = $this->input->post('kategori_obat');
		$jenis_obat		= $this->input->post('jenis_obat');
		$merek_obat    	= $this->input->post('merek_obat');
		$expired		= $this->input->post('expired');

		$data           = array(
			'kode_obat'			=> $kode_obat,
			'nama_obat'			=> $nama_obat,
			'kategori_obat'		=> $kategori_obat,
			'jenis_obat'		=> $jenis_obat,
			'merek_obat'		=> $merek_obat,
			'expired	'		=> $expired	
		);

		$this->M_datamaster->input_data($data,'tb_obat');
		redirect('Backoffice/Obat');
	}
	public function edit($id_obat){
		$where = array(
			'id_obat' => $id_obat
		);
		$this->load->view('Backoffice/view_header');
		$data['tb_obat'] = $this->M_datamaster->edit_data($where,'tb_obat')->result();
		$this->load->view('Backoffice/view_edit_obat',$data);
		$this->load->view('Backoffice/view_footer');
	}
	public function update(){
		$id_obat		= $this->input->post('id_obat');
		$kode_obat		= $this->input->post('kode_obat');
		$nama_obat		= $this->input->post('nama_obat');
		$kategori_obat  = $this->input->post('kategori_obat');
		$jenis_obat		= $this->input->post('jenis_obat');
		$merek_obat    	= $this->input->post('merek_obat');
		$expired		= $this->input->post('expired	');

		$data           = array(
			'id_obat'			=> $id_obat,
			'kode_obat'			=> $kode_obat,
			'nama_obat'			=> $nama_obat,
			'kategori_obat'		=> $kategori_obat,
			'jenis_obat'		=> $jenis_obat,
			'merek_obat'		=> $merek_obat,
			'expired	'		=> $expired	);

		$where = array(
			'id_obat' => $id_obat
		);

		$this->M_datamaster->update_data($where,$data,'tb_obat');
		redirect('Backoffice/Obat');
		
	}
	public function hapus($id_obat){
		$where = array(
			'id_obat' => $id_obat
		);

		$this->M_datamaster->hapus_data($where,'tb_obat');
		redirect('Backoffice/Obat');
		
	}
	}

?>