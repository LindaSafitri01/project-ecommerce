<?php namespace App\Models;
use CodeIgniter\Model;

class Barang_model extends Model{
	protected $table = 'barang';

	public function data_barang(){
		return $this->findAll();
	}

	public function info_barang($id=''){
		return $this->getWhere(['kd_barang' => $id]); // $id merupakan parameter
	}

	public function get_data_barang(){
		$builder = $this->db->table('barang');
		$builder ->select('*');
		$query = $builder->get();
		return $query->getResult();
	}
}
?>