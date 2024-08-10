<?php namespace App\Models;
use CodeIgniter\Model;

class Retur_model extends Model{
  protected $table = 'retur';

  public function data_retur(){
    return $this->findAll();
  }

  public function info_retur($id=''){
    return $this->getWhere(['id_retur' => $id]); // $id merupakan parameter
  }
}
?>