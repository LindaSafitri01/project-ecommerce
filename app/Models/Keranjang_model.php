<?php namespace App\Models;
use CodeIgniter\Model;

class Keranjang_model extends Model{
  protected $table = 'keranjang';

  public function get_data_keranjang($kd_pelanggan, $kd_barang){
    return $this->getWhere(['kd_pelanggan' => $kd_pelanggan, 'kd_barang' => $kd_barang]);
  }

  public function get_keranjang($kd_pelanggan=''){
    $builder = $this->db->table('keranjang');
    $builder->select('*');
    $builder->join('barang','barang.kd_barang = keranjang.kd_barang', 'left');
    $builder->where('kd_pelanggan', $kd_pelanggan);
    $query = $builder->get();
    return $query->getResult();
  }

  public function get_last_id() {
    $builder = $this->db->table('pesan')
    ->select('no_order')
    ->orderBy('no_order', 'DESC')
    ->limit(1);
    return $builder->get();
  }
}
?>