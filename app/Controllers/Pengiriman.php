<?php namespace App\Controllers;
use App\Models\Pengiriman_model; //Menghubungkan ke Pengiriman_model 
use App\Models\General_model;
use App\Models\Pembayaran_model;

class Pengiriman extends BaseController{
	public function index(){
		$datapengiriman = new Pengiriman_model();
		$data = array(
			'data' => $datapengiriman->data_pengiriman(),
			'isi' => 'Pengiriman/pengiriman_view'
		);
		return view('layout/wrapper', $data);
	} //End fungsi tampil

}
?>