<?php namespace App\Models;
use CodeIgniter\Model;

class Pengiriman_model extends Model{
	protected $table = 'pengiriman';

	public function data_pengiriman(){
		$builder = $this->db->table('pengiriman');
		$builder->select('*');
		$builder->join('pembayaran', 'pengiriman.kd_pembayaran = pembayaran.kd_pembayaran', 'left');
		$query = $builder->get();
		return $query->getResult();
	}

}
?>