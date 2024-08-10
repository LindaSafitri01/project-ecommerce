<?php namespace App\Models;
use CodeIgniter\Model;

class Pembayaran_model extends Model{
	protected $table = 'pembayaran';

	public function data_pembayaran(){
		$builder = $this->db->table('pembayaran');
		$builder->select('*');
		$builder->join('pesan', 'pembayaran.no_order = pesan.no_order', 'left');
		$query = $builder->get();
		return $query->getResult();
	}

	public function get_data_pembayaran(){
		$builder = $this->db->table('pembayaran');
		$builder ->select('*');
		$query = $builder->get();
		return $query->getResult();
	}

}
?>