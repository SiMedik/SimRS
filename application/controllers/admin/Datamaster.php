<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datamaster extends CI_Controller {
 
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
		$data['tb_jenjang'] = $this->M_datamaster->tampil_data('tb_jenjang');
		$this->load->view('admin/view_jenjang',$data);
		$this->load->view('admin/view_footer');

	}
	public function tambah(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_jenjang');
		$this->load->view('admin/view_footer');
	}
	public function aksi_tambah(){
		$kode_jenjang		= $this->input->post('kode_jenjang');
		$nama_jenjang		= $this->input->post('nama_jenjang');

		$data = array(
			'kode_jenjang'	=> $kode_jenjang,
			'nama_jenjang'	=> $nama_jenjang

		);

		$this->M_datamaster->input_data($data,'tb_jenjang');
		redirect('admin/Datamaster');
	}
	public function edit($id_jenjang){
		$where = array(
			'id_jenjang' => $id_jenjang
		);
		$this->load->view('admin/view_header');
		$data['tb_jenjang'] = $this->M_datamaster->edit_data($where,'tb_jenjang')->result();
		$this->load->view('admin/view_edit_jenjang',$data);
		$this->load->view('admin/view_footer');
	}
	public function update(){
		$id_jenjang			= $this->input->post('id_jenjang');
		$kode_jenjang		= $this->input->post('kode_jenjang');
		$nama_jenjang		= $this->input->post('nama_jenjang');

		$data = array(
			'id_jenjang'	=> $id_jenjang,
			'kode_jenjang'	=> $kode_jenjang,
			'nama_jenjang'	=> $nama_jenjang
		);
		$where = array(
			'id_jenjang' => $id_jenjang
		);
		$this->M_datamaster->update_data($where,$data,'tb_jenjang');
		redirect('admin/Datamaster');
	}
	public function hapus($id_jenjang){
		$where = array(
			'id_jenjang'	=> $id_jenjang
		);
		$this->M_datamaster->hapus_data($where,'tb_jenjang');
		redirect('admin/Datamaster');
	}

	public function jabatan(){
		$this->load->view('admin/view_header');
		$data['tb_jabatan'] = $this->M_datamaster->tampil_data('tb_jabatan');
		$this->load->view('admin/view_jabatan',$data);
		$this->load->view('admin/view_footer');
	}
	public function tambah_jabatan(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_jabatan');
		$this->load->view('admin/view_footer');
	}
	public function aksi_tambah_jabatan(){
		$kode_jabatan		= $this->input->post('kode_jabatan');
		$nama_jabatan		= $this->input->post('nama_jabatan');
		$tingkat_jabatan	= $this->input->post('tingkat_jabatan');

		$data = array(
			'kode_jabatan'	  => $kode_jabatan,
			'nama_jabatan'	  => $nama_jabatan,
			'tingkat_jabatan' => $tingkat_jabatan

		);

		$this->M_datamaster->input_data($data,'tb_jabatan');
		redirect('admin/Datamaster/jabatan');
	}
	public function edit_jabatan($id_jabatan){
		$where = array(
			'id_jabatan' => $id_jabatan
		);
		$this->load->view('admin/view_header');
		$data['tb_jabatan'] = $this->M_datamaster->edit_data($where,'tb_jabatan')->result();
		$this->load->view('admin/view_edit_jabatan',$data);
		$this->load->view('admin/view_footer');
	}
	public function update_jabatan(){
		$id_jabatan			= $this->input->post('id_jabatan');
		$kode_jabatan		= $this->input->post('kode_jabatan');
		$nama_jabatan		= $this->input->post('nama_jabatan');
		$tingkat_jabatan	= $this->input->post('tingkat_jabatan');

		$data = array(
			'id_jabatan'	  => $id_jabatan,
			'kode_jabatan'	  => $kode_jabatan,
			'nama_jabatan'	  => $nama_jabatan,
			'tingkat_jabatan' => $tingkat_jabatan

		);

		$where = array(
			'id_jabatan' => $id_jabatan
		);

		$this->M_datamaster->update_data($where,$data,'tb_jabatan');
		redirect('admin/Datamaster/jabatan');

	}

	public function hapus_jabatan($id_jabatan){
			$where = array(
			'id_jabatan' => $id_jabatan
		);

		$this->M_datamaster->hapus_data($where,'tb_jabatan');
		redirect('admin/Datamaster/jabatan');
	}
	public function poli()
	{
		$this->load->view('admin/view_header');
		$data['tb_poli'] = $this->M_datamaster->tampil_data('tb_poli');
		$this->load->view('admin/view_poli',$data);
		$this->load->view('admin/view_footer');

	}
	public function tambah_poli(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_poli');
		$this->load->view('admin/view_footer');
	}
	public function aksi_tambah_poli(){
		$kode_poli		= $this->input->post('kode_poli');
		$nama_poli		= $this->input->post('nama_poli');

		$data = array(
			'kode_poli'	=> $kode_poli,
			'nama_poli'	=> $nama_poli

		);

		$this->M_datamaster->input_data($data,'tb_poli');
		redirect('admin/Datamaster/poli');
	}
	public function edit_poli($id_poli){
		$where = array(
			'id_poli' => $id_poli
		);
		$this->load->view('admin/view_header');
		$data['tb_poli'] = $this->M_datamaster->edit_data($where,'tb_poli')->result();
		$this->load->view('admin/view_edit_poli',$data);
		$this->load->view('admin/view_footer');
	}
	public function update_poli(){
		$id_poli			= $this->input->post('id_poli');
		$kode_poli		= $this->input->post('kode_poli');
		$nama_poli		= $this->input->post('nama_poli');

		$data = array(
			'id_poli'	=> $id_poli,
			'kode_poli'	=> $kode_poli,
			'nama_poli'	=> $nama_poli
		);
		$where = array(
			'id_poli' => $id_poli
		);
		$this->M_datamaster->update_data($where,$data,'tb_poli');
		redirect('admin/Datamaster/poli');
	}
	public function hapus_poli($id_poli){
		$where = array(
			'id_poli'	=> $id_poli
		);
		$this->M_datamaster->hapus_data($where,'tb_poli');
		redirect('admin/Datamaster?poli');
	}
	public function spesialis(){
		$this->load->view('admin/view_header');
		$data['tb_spesialis'] = $this->M_datamaster->tampil_data('tb_spesialis');
		$this->load->view('admin/view_spesialis',$data);
		$this->load->view('admin/view_footer');
	}

	public function tambah_spesialis(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_spesialis');
		$this->load->view('admin/view_footer');
	}

	public function aksi_tambah_spesialis(){
		$nama_dokter		= $this->input->post('nama_dokter');
		$spesialis		    = $this->input->post('spesialis');

		$data = array(
			'nama_dokter'	=> $nama_dokter,
			'spesialis'		=> $spesialis

		);

		$this->M_datamaster->input_data($data,'tb_spesialis');
		redirect('admin/Datamaster/spesialis');
	}
	public function edit_spesialis($id_spesialis){
		$where = array(
			'id_spesialis' => $id_spesialis
		);
		$this->load->view('admin/view_header');
		$data['tb_spesialis'] = $this->M_datamaster->edit_data($where,'tb_spesialis')->result();
		$this->load->view('admin/view_edit_spesialis',$data);
		$this->load->view('admin/view_footer');
	}
	public function update_spesialis(){
		$id_spesialis		= $this->input->post('id_spesialis');
		$nama_dokter		= $this->input->post('nama_dokter');
		$spesialis		    = $this->input->post('spesialis');

		$data = array(
			'id_spesialis'  => $id_spesialis,
			'nama_dokter'	=> $nama_dokter,
			'spesialis'		=> $spesialis

		);
		$where = array(
			'id_spesialis' => $id_spesialis
		);

		$this->M_datamaster->update_data($where,$data,'tb_spesialis');
		redirect('admin/Datamaster/spesialis');

	}

	public function hapus_spesialis($id_spesialis){
		$where = array(
			'id_spesialis' => $id_spesialis
		);

		$this->M_datamaster->hapus_data($where,'tb_spesialis');
		redirect('admin/Datamaster/spesialis');

	}

	public function departement(){
		$this->load->view('admin/view_header');
		$data['tb_departemen'] = $this->M_datamaster->tampil_data('tb_departemen');
		$this->load->view('admin/view_departement',$data);
		$this->load->view('admin/view_footer');
	}

	public function tambah_departement(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_departement');
		$this->load->view('admin/view_footer');
	}

	public function aksi_tambah_departement(){
		$nama_depa		= $this->input->post('nama_depa');
		$alamat_depa	= $this->input->post('alamat_depa');

		$data = array(
			'nama_depa'		=> $nama_depa,
			'alamat_depa'	=> $alamat_depa

		);

		$this->M_datamaster->input_data($data,'tb_departemen');
		redirect('admin/Datamaster/departement');
	}
	public function edit_departement($id_depa){
		$where = array(
			'id_depa' => $id_depa
		);
		$this->load->view('admin/view_header');
		$data['tb_departemen'] = $this->M_datamaster->edit_data($where,'tb_departemen')->result();
		$this->load->view('admin/view_edit_departement',$data);
		$this->load->view('admin/view_footer');
	}
	public function update_depa(){
		$id_depa		= $this->input->post('id_depa');
		$nama_depa	     	= $this->input->post('nama_depa');
		$alamat_depa     	= $this->input->post('alamat_depa');

		$data = array(
			'id_depa'  => $id_depa,
			'nama_depa'	      => $nama_depa,
			'alamat_depa'     => $alamat_depa

		);
		$where = array(
			'id_depa' => $id_depa
		);

		$this->M_datamaster->update_data($where,$data,'tb_departemen');
		redirect('admin/Datamaster/departement');

	}

	public function hapus_departemen($id_depa){
		$where = array(
			'id_depa' => $id_depa
		);

		$this->M_datamaster->hapus_data($where,'tb_departemen');
		redirect('admin/Datamaster/departement');

	}
	public function gedung(){
		$this->load->view('admin/view_header');
		$data['tb_gedung'] = $this->M_datamaster->tampil_data('tb_gedung');
		$this->load->view('admin/view_gedung',$data);
		$this->load->view('admin/view_footer');
	}

	public function tambah_gedung(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_gedung');
		$this->load->view('admin/view_footer');
	}

	public function aksi_tambah_gedung(){
		$nama_gedung	= $this->input->post('nama_gedung');
		$alamat_gedung	= $this->input->post('alamat_gedung');
		$lantai			= $this->input->post('lantai');

		$data = array(
			'nama_gedung'		=> $nama_gedung,
			'alamat_gedung'	    => $alamat_gedung,
			'lantai'			=> $lantai

		);

		$this->M_datamaster->input_data($data,'tb_gedung');
		redirect('admin/Datamaster/gedung');
	}
	public function edit_gedung($id_gedung){
		$where = array(
			'id_gedung' => $id_gedung
		);
		$this->load->view('admin/view_header');
		$data['tb_gedung'] = $this->M_datamaster->edit_data($where,'tb_gedung')->result();
		$this->load->view('admin/view_edit_gedung',$data);
		$this->load->view('admin/view_footer');
	}
	public function update_gedung(){
		$id_gedung		= $this->input->post('id_gedung');
		$nama_gedung	= $this->input->post('nama_gedung');
		$alamat_gedung	= $this->input->post('alamat_gedung');
		$lantai			= $this->input->post('lantai');

		$data = array(
			'id_gedung' 		=> $id_gedung,
			'nama_gedung'		=> $nama_gedung,
			'alamat_gedung'	    => $alamat_gedung,
			'lantai'			=> $lantai

		);

		$where = array(
			'id_gedung' => $id_gedung
		);

		$this->M_datamaster->update_data($where,$data,'tb_gedung');
		redirect('admin/Datamaster/gedung');

	}

	public function hapus_gedung($id_gedung){
		$where = array(
			'id_gedung' => $id_gedung
		);

		$this->M_datamaster->hapus_data($where,'tb_gedung');
		redirect('admin/Datamaster/gedung');
	}

	public function ruang_inap(){
		$this->load->view('admin/view_header');
		$data['tb_inap'] = $this->M_datamaster->tampil_data('tb_inap');
		$this->load->view('admin/view_inap',$data);
		$this->load->view('admin/view_footer');
	}

	public function tambah_inap(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_inap');
		$this->load->view('admin/view_footer');
	}

	public function aksi_tambah_inap(){
		$nama_kamar  	= $this->input->post('nama_kamar');
		$kode_kamar		= $this->input->post('kode_kamar');

		$data = array(
			'nama_kamar'		=> $nama_kamar,
			'kode_kamar'	    => $kode_kamar

		);

		$this->M_datamaster->input_data($data,'tb_inap');
		redirect('admin/Datamaster/ruang_inap');
	}
	public function edit_inap($id_inap){
		$where = array(
			'id_inap' => $id_inap
		);
		$this->load->view('admin/view_header');
		$data['tb_inap'] = $this->M_datamaster->edit_data($where,'tb_inap')->result();
		$this->load->view('admin/view_edit_inap',$data);
		$this->load->view('admin/view_footer');
	}
	public function update_inap(){
		$id_inap		= $this->input->post('id_inap');
		$nama_kamar	    = $this->input->post('nama_kamar');
		$kode_kamar	    = $this->input->post('kode_kamar');

		$data = array(
			'id_inap' 		    => $id_inap,
			'nama_kamar'		=> $nama_kamar,
			'kode_kamar'	    => $kode_kamar
		);

		$where = array(
			'id_inap' => $id_inap
		);

		$this->M_datamaster->update_data($where,$data,'tb_inap');
		redirect('admin/Datamaster/ruang_inap');

	}

	public function hapus_inap($id_inap){
		$where = array(
			'id_inap' => $id_inap
		);

		$this->M_datamaster->hapus_data($where,'tb_inap');
		redirect('admin/Datamaster/ruang_inap');

	}

}

