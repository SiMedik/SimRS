<?php
	class M_datamaster extends CI_Model{

		function tampil_data($table){
			return $this->db->get($table)->result();
		}
		function input_data($data,$tabel){
			$res = $this->db->insert($tabel,$data);
			return $res;
		}
		function edit_data($where,$tabel){
			return $this->db->get_where($tabel,$where);
		}
		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		function hapus_data($where,$tabel){
			$this->db->where($where);
			$this->db->delete($tabel);
		}
	}
?>