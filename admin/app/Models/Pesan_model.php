<?php namespace App\Models;
use CodeIgniter\Model;

class Pesan_model extends Model{
	protected $table = 'pesan';

	public function data_pesan(){
		$builder = $this->db->table('pesan');
		$builder->select('*');
		$builder->join('pelanggan', 'pesan.kd_pelanggan = pelanggan.kd_pelanggan', 'left');
		$query = $builder->get();
		return $query->getResult();
	}

}
?>