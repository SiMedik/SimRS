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
		function tampil($id_pasien){
			return $this->db->query('SELECT count(b.id_pasien) as Jalan ,count(c.id_pasien) as Inap ,count(d.id_pasien) as UGD FROM tb_pasien a left join tb_jalan b on a.id_pasien = b.id_pasien left join tb_nginap c on a.id_pasien = c.id_pasien left join tb_ugd d on a.id_pasien = d.id_pasien where a.id_pasien = '.$id_pasien.' group by a.id_pasien')->row();
		}
	}
?>