<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
 
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
		$data['tb_pegawai']	= $this->M_datamaster->tampil_data('tb_pegawai');
		$this->load->view('bo/view_pegawai',$data);
		$this->load->view('bo/view_footer');
	}
	public function tambah(){
		$this->load->view('bo/view_header');
		$data['tb_jenjang']	= $this->M_datamaster->tampil_data('tb_jenjang');
		$data['tb_jabatan']	= $this->M_datamaster->tampil_data('tb_jabatan');
		$this->load->view('bo/view_tambah_pegawai',$data);
		$this->load->view('bo/view_footer');
	}
	public function aksi_tambah(){
		$nama_pegawai 		 = $this->input->post('nama_pegawai');
		$jk			  		 = $this->input->post('jk');
		$tempat_lahir 		 = $this->input->post('tempat_lahir');
		$tgl_lahir	  		 = $this->input->post('tgl_lahir');
		$nik		  		 = $this->input->post('nik');
		$nip	 	 		 = $this->input->post('nip');
		$agama		 		 = $this->input->post('agama');
		$pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
		$jabatan 			 = $this->input->post('jabatan');
		$pangkat 			 = $this->input->post('pangkat');
		$alamat 			 = $this->input->post('alamat');
		$no_hp				 = $this->input->post('no_hp');

		$this->load->library(array('upload','image_lib'));
		$nmfile					    = "pegawai-".time();//nama file
		$config['upload_path']		= './upload/boto_pegawai/';//penyimpanan
		$config['allowed_types']	= 'gif|jpg|png|jpeg|bmp';//type 
		$config['max_size']			= '2048';//
		$config['max_width']		= '1488';//
		$config['max_height']		= '1668';//
		$config['file_name']		= $nmfile;//

		$this->upload->initialize($config);
		
		if($_FILES['fileboto']['name'])
		{
			if($this->upload->do_upload('fileboto'))
			{
				$gbr = $this->upload->data();
				$data  = array(
							'boto'	     			 => $gbr['file_name'],
							'nama_pegawai'		  	 => $nama_pegawai,
							'jk'					 => $jk,
							'tempat_lahir'			 => $tempat_lahir,
							'tgl_lahir'				 => $tgl_lahir,
							'nik'					 => $nik,
							'nip'					 => $nip,
							'agama'					 => $agama,
							'pendidikan_terakhir'	 => $pendidikan_terakhir,
							'jabatan'				 => $jabatan,
							'pangkat'				 => $pangkat,
							'alamat'				 => $alamat,
							'no_hp'					 => $no_hp
						);
			}
			else
			{
				$data = array(
							'nama_pegawai'		  	 => $nama_pegawai,
							'jk'					 => $jk,
							'tempat_lahir'			 => $tempat_lahir,
							'tgl_lahir'				 => $tgl_lahir,
							'nik'					 => $nik,
							'nip'					 => $nip,
							'agama'					 => $agama,
							'pendidikan_terakhir'	 => $pendidikan_terakhir,
							'jabatan'				 => $jabatan,
							'pangkat'				 => $pangkat,
							'alamat'				 => $alamat,
							'no_hp'					 => $no_hp
						);
			}
		}		
		
		$res = $this->M_datamaster->input_data($data,'tb_pegawai');
		if($res==1){
		 	redirect('bo/pegawai');
		}
		 else{
		 	echo "gagal";		
		}
	}
	public function edit($id_pegawai){
		$where = array(
			'id_pegawai' => $id_pegawai
		);
		$this->load->view('bo/view_header');
		$data['tb_pegawai'] = $this->M_datamaster->edit_data($where,'tb_pegawai')->result();
		$data['tb_jenjang']	= $this->M_datamaster->tampil_data('tb_jenjang');
		$data['tb_jabatan']	= $this->M_datamaster->tampil_data('tb_jabatan');
		$this->load->view('bo/view_edit_pegawai',$data);
		$this->load->view('bo/view_footer');
	}

	public function update(){

		$id_pegawai 		 = $this->input->post('id_pegawai');
		$nama_pegawai 		 = $this->input->post('nama_pegawai');
		$jk			  		 = $this->input->post('jk');
		$tempat_lahir 		 = $this->input->post('tempat_lahir');
		$tgl_lahir	  		 = $this->input->post('tgl_lahir');
		$nik		  		 = $this->input->post('nik');
		$nip	 	 		 = $this->input->post('nip');
		$agama		 		 = $this->input->post('agama');
		$pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
		$jabatan 			 = $this->input->post('jabatan');
		$pangkat 			 = $this->input->post('pangkat');
		$alamat 			 = $this->input->post('alamat');
		$no_hp				 = $this->input->post('no_hp');

		$this->load->library(array('upload','image_lib'));
		$nmfile					    = "pegawai-".time();//nama file
		$config['upload_path']		= './upload/boto_pegawai/';//penyimpanan
		$config['allowed_types']	= 'gif|jpg|png|jpeg|bmp';//type 
		$config['max_size']			= '2048';//
		$config['max_width']		= '1488';//
		$config['max_height']		= '1668';//
		$config['file_name']		= $nmfile;//
		$this->upload->initialize($config);
		
		if($_FILES['fileboto']['name'])
		{
			if($this->upload->do_upload('fileboto'))
			{
				$gbr = $this->upload->data();
				$data  = array(
							'id_pegawai'		  	 => $id_pegawai,
							'boto'	     			 => $gbr['file_name'],
							'nama_pegawai'		  	 => $nama_pegawai,
							'jk'					 => $jk,
							'tempat_lahir'			 => $tempat_lahir,
							'tgl_lahir'				 => $tgl_lahir,
							'nik'					 => $nik,
							'nip'					 => $nip,
							'agama'					 => $agama,
							'pendidikan_terakhir'	 => $pendidikan_terakhir,
							'jabatan'				 => $jabatan,
							'pangkat'				 => $pangkat,
							'alamat'				 => $alamat,
							'no_hp'					 => $no_hp

						);
			}
		}
		else
			{
				$data = array(
							'id_pegawai'		  	 => $id_pegawai,
							'nama_pegawai'		  	 => $nama_pegawai,
							'jk'					 => $jk,
							'tempat_lahir'			 => $tempat_lahir,
							'tgl_lahir'				 => $tgl_lahir,
							'nik'					 => $nik,
							'nip'					 => $nip,
							'agama'					 => $agama,
							'pendidikan_terakhir'	 => $pendidikan_terakhir,
							'jabatan'				 => $jabatan,
							'pangkat'				 => $pangkat,
							'alamat'				 => $alamat,
							'no_hp'					 => $no_hp
						);
			}
		
		$where = array(
			'id_pegawai' => $id_pegawai
		);
		$this->M_datamaster->update_data($where,$data,'tb_pegawai');
		redirect('bo/Pegawai');
	}
	public function hapus($id_pegawai){
		$where = array(
			'id_pegawai' => $id_pegawai
		);
		$this->M_datamaster->hapus_data($where,'tb_pegawai');
		redirect('bo/pegawai');
	}
}
