<?php

	class Rawatugd extends CI_Controller
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
		$this->load->view('fo/view_rawatugd',$data);
		$this->load->view('fo/view_footer');
	}

	public function edit($id_pasien){
		$where = array(
			'id_pasien' => $id_pasien
		);
		$this->load->view('fo/view_header');
		$data['tb_dokter']	= $this->M_datamaster->tampil_data('tb_dokter');
		$data['tb_pasien']  = $this->M_datamaster->edit_data($where,'tb_pasien')->result();
		$this->load->view('fo/view_edit_rawatugd',$data);
		$this->load->view('fo/view_footer');
	}

	public function tambah(){
		$id_pasien   = $this->input->post('id_pasien');
		date_default_timezone_get('Asia/Makassar');
		$tgl		 = date("y-m-d");
		$dokter 	 = $this->input->post('dokter');
		$diagnosa    = $this->input->post('diagnosa');

		$data = array(
			'id_ugd'	=> $id_ugd,
			'id_pasien' => $id_pasien,
			'tgl'		=> $tgl,
			'dokter'	=> $dokter,
			'diagnosa'	=> $diagnosa
		);

		$this->M_datamaster->input_data($data,'tb_ugd');
		redirect('fo/Rawatugd');
 	}
}
?>