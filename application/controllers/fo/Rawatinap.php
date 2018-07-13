<?php

	class Rawatinap extends CI_Controller
	{
		
		function __construct(){
		parent::__construct();		
		$this->load->model('M_datamaster');
		if ($this->session->userdata('status') != 'login') {
			redirect(base_url("admin/Login"));
		}
		
	}

	public function index(){
		$this->load->view('fo/view_header');
		$data['tb_pasien']	= $this->M_datamaster->tampil_data('tb_pasien');
		$this->load->view('fo/view_rawat_inap',$data);
		$this->load->view('fo/view_footer');
	}

	public function edit($id_pasien){
		$where = array(
			'id_pasien' => $id_pasien
		);
		$this->load->view('fo/view_header');
		$data['tb_inap']	= $this->M_datamaster->tampil_data('tb_inap');
		$data['tb_dokter']	= $this->M_datamaster->tampil_data('tb_dokter');
		$data['tb_pasien']  = $this->M_datamaster->edit_data($where,'tb_pasien')->result();
		$this->load->view('fo/view_edit_rawat_inap',$data);
		$this->load->view('fo/view_footer');
	}

	public function tambah(){
		$id_nginap	 = $this->input->post('id_nginap');
		$id_pasien   = $this->input->post('id_pasien');
		date_default_timezone_get('Asia/Makassar');
		$tgl		 = date("y-m-d");
		$ruangan	 = $this->input->post('ruangan');
		$kelas		 = $this->input->post('kelas');
		$no_kamar	 = $this->input->post('no_kamar');
		$dokter 	 = $this->input->post('dokter');
		$diagnosa    = $this->input->post('diagnosa');
		$biaya	     = $this->input->post('biaya');

		$data = array(
			'id_nginap'	=> $id_nginap,
			'id_pasien' => $id_pasien,
			'tgl'		=> $tgl,
			'ruangan'	=> $ruangan,
			'kelas' 	=> $kelas,
			'no_kamar' 	=> $no_kamar,
			'dokter' 	=> $dokter,
			'diagnosa'	=> $diagnosa,
			'biaya'	    => $biaya
		);

		$this->M_datamaster->input_data($data,'tb_nginap');
		redirect('fo/Rawatinap');
 	}
}
?>