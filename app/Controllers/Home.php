<?php
namespace App\Controllers;
use App\Models\Barang_model;
use App\Models\General_model;

class Home extends BaseController{
    public function index(){
      $data_barang = new Barang_model();
			$data = array(
				'data'	=> $data_barang->get_data_barang(), 
				'isi'		=> 'home/home_view' 
			);
      return view('layout/wrapper', $data);
    }

    public function detail($id){
      $data_barang = new Barang_model();
      $data = array (
        'data'  => $data_barang->info_barang($id)->getRow(),
        'isi'   => 'home/produk_detail'
      );
      return view('layout/wrapper', $data);
    }
}