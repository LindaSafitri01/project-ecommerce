<?php namespace App\Models;
use CodeIgniter\Model;

class Pelanggan_model extends Model{
	protected $table = 'pelanggan';

	public function data_pelanggan(){
		return $this->findAll();
	}

	public function info_pelanggan($id=''){
		return $this->getWhere(['kd_pelanggan' => $id]); // $id merupakan parameter
	}

	public function get_data_pelanggan(){
		$builder = $this->db->table('pelanggan');
		$builder ->select('*');
		$query = $builder->get();
		return $query->getResult();
	}
}
?>