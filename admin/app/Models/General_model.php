<?php namespace App\Models;
use CodeIgniter\Model;

class General_model extends Model{
	public function add_new($table, $data){
		$db = $this->db->table($table);
		return $db->insert($data);
	}

	public function edit_data($table, $where, $data){
		$db = $this->db->table($table);
		$db->where($where);
		return $db->update($data);
	}

	public function delete_data($table, $where)
	{
		$builder = $this->db->table($table);
		return $builder->delete($where);
	}
}
?>