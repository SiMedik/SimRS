<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pensiunan extends CI_Controller {
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_datamaster');
		if ($this->session->userdata('status') != 'login') {
			redirect(base_url("admin/Login"));
		}
		
	}
	public function index()
	{
		$this->load->view('fo/view_header');
		$data['tb_pensiunan']	= $this->M_datamaster->tampil_data('tb_pensiunan');
		$this->load->view('fo/view_pensiun',$data);
		$this->load->view('fo/view_footer');
	}
	public function tambah(){
		$this->load->view('fo/view_header');
		$data['tb_pegawai']	= $this->M_datamaster->tampil_data('tb_pegawai');
		$this->load->view('fo/view_tambah_pensiunan',$data);
		$this->load->view('fo/view_footer');
	}
	public function aksi_tambah(){
		$nama_pensiunan	    = $this->input->post('nama_pensiunan');
		$tgl_pensiun	    = $this->input->post('tgl_pensiun');
		$catatan		    = $this->input->post('catatan');

		$data = array(
			'nama_pensiunan'	=> $nama_pensiunan,
			'tgl_pensiun'		=> $tgl_pensiun,
			'catatan'			=> $catatan
		);
		$this->M_datamaster->input_data($data,'tb_pensiunan');
		redirect('fo/Pensiunan');
	}
	public function edit($id_pensiunan){
		$where = array(
			'id_pensiunan' => $id_pensiunan
		);
		$this->load->view('fo/view_header');
		$data['tb_pensiunan'] = $this->M_datamaster->edit_data($where,'tb_pensiunan')->result();
		$data['tb_pegawai']   = $this->M_datamaster->tampil_data('tb_pegawai');
		$this->load->view('fo/view_edit_pensiunan',$data);
		$this->load->view('fo/view_footer');
	}
	public function update(){
		$id_pensiunan	    = $this->input->post('id_pensiunan');
		$nama_pensiunan	    = $this->input->post('nama_pensiunan');
		$tgl_pensiun	    = $this->input->post('tgl_pensiun');
		$catatan		    = $this->input->post('catatan');

		$data = array(
			'id_pensiunan'		=> $id_pensiunan,
			'nama_pensiunan'	=> $nama_pensiunan,
			'tgl_pensiun'		=> $tgl_pensiun,
			'catatan'			=> $catatan
		);
		$where = array(
			'id_pensiunan' => $id_pensiunan
		);
		
		$this->M_datamaster->update_data($where,$data,'tb_pensiunan');
		redirect('fo/Pensiunan');
	}
	public function hapus($id_pensiunan){
		$where = array(
			'id_pensiunan' => $id_pensiunan
		);
		$this->M_datamaster->hapus_data($where,'tb_pensiunan');
		redirect('fo/Pensiunan');
	}
}
