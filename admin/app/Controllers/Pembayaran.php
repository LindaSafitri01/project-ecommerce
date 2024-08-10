<?php namespace App\Controllers;
use App\Models\Pembayaran_model; //Menghubungkan ke Pembayaran_model 
use App\Models\General_model;
use App\Models\Pesan_model;

class Pembayaran extends BaseController{
	public function index(){
		$datapembayaran = new Pembayaran_model();
		$data = array(
			'data' => $datapembayaran->data_pembayaran(),
			'isi' => 'Pembayaran/pembayaran_view'
		);
		return view('layout/wrapper', $data);
	} //End fungsi tampil

}
?>