<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_datamaster');
		if ($this->session->userdata('status') != 'login') {
			redirect(base_url("fo/Login"));
		}
		
	}
	public function index()
	{
		$this->load->view('fo/view_header');
		$data['tb_pasien']	= $this->M_datamaster->tampil_data('tb_pasien');
		$this->load->view('fo/view_pasien',$data);
		$this->load->view('fo/view_footer');
	}
	public function tambah(){
		$this->load->view('fo/view_header');
		$this->load->view('fo/view_tambah_pasien');
		$this->load->view('fo/view_footer');
	}
	public function aksi_tambah(){
		$no_regis		= $this->input->post('no_regis');
		$nama_pasien	= $this->input->post('nama_pasien');
		$jenis_kelamin  = $this->input->post('jenis_kelamin');
		$goldar			= $this->input->post('goldar');
		$tempatlahir    = $this->input->post('tempatlahir');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$nama_ibu		= $this->input->post('nama_ibu');
		$alamat			= $this->input->post('alamat');
		$agama			= $this->input->post('agama');
		$no_hp			= $this->input->post('no_hp');
		$pekerjaan		= $this->input->post('pekerjaan');
		$status_menikah	= $this->input->post('status_menikah');

		$data           = array(
			'no_regis'			=> $no_regis,
			'nama_pasien'		=> $nama_pasien,
			'jenis_kelamin'		=> $jenis_kelamin,
			'goldar'			=> $goldar,
			'tempatlahir'		=> $tempatlahir,
			'tanggal_lahir'		=> $tanggal_lahir,
			'nama_ibu'			=> $nama_ibu,
			'alamat'			=> $alamat,
			'agama'				=> $agama,
			'no_hp'				=> $no_hp,
			'pekerjaan'			=> $pekerjaan,
			'status_menikah'	=> $status_menikah
		);

		$this->M_datamaster->input_data($data,'tb_pasien');
		redirect('fo/pasien');
		
		
	}
	public function edit($id_pasien){
		$where = array(
			'id_pasien' => $id_pasien
		);
		$this->load->view('fo/view_header');
		$data['tb_pasien'] = $this->M_datamaster->edit_data($where,'tb_pasien')->result();
		$this->load->view('fo/view_edit_pasien',$data);
		$this->load->view('fo/view_footer');
	}
	public function update(){
		$id_pasien		= $this->input->post('id_pasien');
		$no_regis		= $this->input->post('no_regis');
		$nama_pasien	= $this->input->post('nama_pasien');
		$jenis_kelamin  = $this->input->post('jenis_kelamin');
		$goldar			= $this->input->post('goldar');
		$tempatlahir    = $this->input->post('tempatlahir');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$nama_ibu		= $this->input->post('nama_ibu');
		$alamat			= $this->input->post('alamat');
		$agama			= $this->input->post('agama');
		$no_hp			= $this->input->post('no_hp');
		$pekerjaan		= $this->input->post('pekerjaan');
		$status_menikah	= $this->input->post('status_menikah');

		$data           = array(
			'id_pasien'			=> $id_pasien,
			'no_regis'			=> $no_regis,
			'nama_pasien'		=> $nama_pasien,
			'jenis_kelamin'		=> $jenis_kelamin,
			'goldar'			=> $goldar,
			'tempatlahir'		=> $tempatlahir,
			'tanggal_lahir'		=> $tanggal_lahir,
			'nama_ibu'			=> $nama_ibu,
			'alamat'			=> $alamat,
			'agama'				=> $agama,
			'no_hp'				=> $no_hp,
			'pekerjaan'			=> $pekerjaan,
			'status_menikah'	=> $status_menikah
		);

		$where = array(
			'id_pasien' => $id_pasien
		);

		$this->M_datamaster->update_data($where,$data,'tb_pasien');
		redirect('fo/pasien');
		
	}
	public function hapus($id_pasien){
		$where = array(
			'id_pasien' => $id_pasien
		);

		$this->M_datamaster->hapus_data($where,'tb_pasien');
		redirect('fo/pasien');
		
	}

}
