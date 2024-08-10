<?php namespace App\Models;
use CodeIgniter\Model;

class Login_model extends Model{
  protected $table = 'pelanggan';

  public function authentication($kd_pelanggan='', $password=''){
    return $this->getWhere(['kd_pelanggan' => $kd_pelanggan, 'password' => $password]);
  }
}