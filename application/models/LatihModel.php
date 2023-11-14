<?php

	class LatihModel extends CI_Model{
		
		public function getAll(){
			return $this->db->get('data_latih');
		}

		public function countData(){
			return $this->db->count_all('data_latih');
		}

		public function insert($data){
			return $this->db->insert('data_latih',$data);
		}	

		public function get($id){
			$this->db->select('*');
			$this->db->from('data_latih');
			$this->db->where('id',$id);
			$query = $this->db->get()->result();
			return $query;
		}

		public function update($data, $id){
			$this->db->where('id',$id);
			$query = $this->db->update('data_latih',$data);
			return $query;
		}

		public function delete($id){
			$this->db->where('id',$id);
			$query = $this->db->delete('data_latih');
			return $query;
		}

		public function insert_batch($data){
			return $this->db->insert_batch('data_latih',$data);
		}

		public function deleteAll(){
			return $this->db->empty_table('data_latih');
		}
	}

?>
