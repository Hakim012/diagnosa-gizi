<?php
class Batita_model extends CI_Model
{

	function getDataBatita($limit, $start)
	{
		$query = $this->db->get('mst_batita', $limit, $start);
		return $query;
	}

	public function getAllData()
	{
		return $this->db->get('mst_batita');
	}

	public function insert($data)
	{
		return $this->db->insert('mst_batita', $data);
	}

	public function get($id){
		$this->db->select('*');
		$this->db->from('mst_batita');
		$this->db->where('id',$id);
		$query = $this->db->get()->result();
		return $query;
	}

	public function update($data, $id){
		$this->db->where('id',$id);
		$query = $this->db->update('mst_batita',$data);
		return $query;
	}

	public function delete($id){
		$this->db->where('id',$id);
		$query = $this->db->delete('mst_batita');
		return $query;
	}


	public function search($keyword)
	{
		$this->db->select('*');
		$this->db->from('mst_batita');
		$this->db->like('nama', $keyword);
		return $this->db->get()->result();
	}

	public function reset()
	{
		return $this->db->query("DELETE from mst_batita ");
	}

}
