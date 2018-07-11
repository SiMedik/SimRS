<?php
	
	class Dokter extends CI_Controller
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
		$this->load->view('fo/view_header');
		$data['tb_dokter']	= $this->M_datamaster->tampil_data('tb_dokter');
		$this->load->view('fo/view_dokter',$data);
		$this->load->view('fo/view_footer');
	}
	public function tambah(){
		$this->load->view('fo/view_header');
		$this->load->view('fo/view_tambah_dokter');
		$this->load->view('fo/view_footer');
	}
	public function aksi_tambah(){
		$nama_dokter		= $this->input->post('nama_dokter');
		$no_izin_praktek	= $this->input->post('no_izin_praktek');
		$spesialis		  	= $this->input->post('spesialis');
		$alumni		  	= $this->input->post('alumni');
		$no_hp				= $this->input->post('no_hp');
		$alamat  	= $this->input->post('alamat');
		date_default_timezone_get('Asia/Makassar');
		$date_created		= date("y-m-d h:i:s");

		$data           = array(
			'nama_dokter' 		=> $nama_dokter,
			'no_izin_praktek'	=> $no_izin_praktek,
			'spesialis'			=> $spesialis,
			'alumni'			=> $alumni,
			'no_hp'				=> $no_hp,
			'alamat'			=> $alamat,
			'date_created'		=> $date_created	
		);

		$this->M_datamaster->input_data($data,'tb_dokter');
		redirect('fo/Dokter');
	}
	public function edit($id_dokter){
		$where = array(
			'id_dokter' => $id_dokter
		);
		$this->load->view('fo/view_header');
		$data['tb_dokter'] = $this->M_datamaster->edit_data($where,'tb_dokter')->result();
		$this->load->view('fo/view_edit_dokter',$data);
		$this->load->view('fo/view_footer');
	}
	public function update(){
		$id_dokter			= $this->input->post('id_dokter');
		$nama_dokter		= $this->input->post('nama_dokter');
		$no_izin_praktek	= $this->input->post('no_izin_praktek');
		$spesialis		  	= $this->input->post('spesialis');
		$alumni		  		= $this->input->post('alumni');
		$no_hp				= $this->input->post('no_hp');
		$alamat  			= $this->input->post('alamat');
		date_default_timezone_get('Asia/Makassar');
		$date_created		= date("y-m-d h:i:s");

		$data           = array(
			'id_dokter'			=> $id_dokter,
			'nama_dokter' 		=> $nama_dokter,
			'no_izin_praktek'	=> $no_izin_praktek,
			'spesialis'			=> $spesialis,
			'alumni'			=> $alumni,
			'no_hp'				=> $no_hp,
			'alamat'			=> $alamat,
			'date_created'		=> $date_created	);

		$where = array(
			'id_dokter' => $id_dokter
		);

		$this->M_datamaster->update_data($where,$data,'tb_dokter');
		redirect('fo/Dokter');
		
	}
	public function hapus($id_dokter){
		$where = array(
			'id_dokter' => $id_dokter
		);

		$this->M_datamaster->hapus_data($where,'tb_dokter');
		redirect('fo/Dokter');
		
	}
	}

?>