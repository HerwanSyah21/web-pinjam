<?php 
	/**
	 * 
	 */
	class Model extends CI_Model
	{
		public function get($tbl)
		{
			return $this->db->get($tbl);
		}

		public function get_where($tbl, $kondisi)
		{
			return $this->db->get_where($tbl, $kondisi);
		}

		public function insert($tbl, $data)
		{
			return $this->db->insert($tbl, $data);
		}

		public function update($tbl, $data, $kondisi)
		{
			return $this->db->update($tbl, $data, $kondisi);
		}

		public function delete($tbl, $kondisi)
		{
			$this->db->where($kondisi);
			return $this->db->delete($tbl);
		}
	}
?>