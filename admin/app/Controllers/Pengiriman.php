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

	public function tambah(){
		if(! $this->validate(['kd_pengiriman' => 'required', 'tanggal_pengiriman' => 'required'])) {
			//Menampilkan form inputan
			$datapembayaran = new Pembayaran_model();
			$data = array(
				'data_pembayaran' => $datapembayaran->get_data_pembayaran(),
				'isi' => 'pengiriman/tambah_pengiriman'
			);
			return view('layout/wrapper',$data);
		}else{
			//Menyimpan data pengiriman
			$model = new General_model();
			$data = array (
				'kd_pengiriman' => $this->request->getPost('kd_pengiriman'),
				'tanggal_pengiriman' => $this->request->getPost('tanggal_pengiriman'),
				'nomor_resi' => $this->request->getPost('nomor_resi'),
				'kd_pembayaran' => $this->request->getPost('kd_pembayaran'),
			);
			$model->add_new('pengiriman',$data);
			return redirect()->to('pengiriman');
		}
	} //End Fungsi Tambah
}
?>