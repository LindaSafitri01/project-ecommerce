<?php namespace App\Controllers;
use App\Models\Pesan_model; //Menghubungkan ke Pesan_model 
use App\Models\General_model;
use App\Models\Barang_model;
use App\Models\Pelanggan_model;

class Pesan extends BaseController{
	public function index(){
		$datapesan = new Pesan_model();
		$data = array(
			'data' => $datapesan->data_pesan(),
			'isi' => 'Pesan/pesan_view'
		);
		return view('layout/wrapper', $data);
	} //End fungsi tampil

}
?>