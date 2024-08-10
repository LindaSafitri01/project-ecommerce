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

	public function tambah(){
		if(! $this->validate(['kd_pembayaran' => 'required', 'tanggal_pembayaran' => 'required'])) {
			//Menampilkan form inputan
			$datapesan = new Pesan_model();
			$data = array(
				'data_pesan' => $datapesan->get_data_pesan(),
				'isi' => 'pembayaran/tambah_pembayaran'
			);
			return view('layout/wrapper',$data);
		}else{
			//Menyimpan data pembayaran
			$model = new General_model();
			$data = array (
				'kd_pembayaran' => $this->request->getPost('kd_pembayaran'),
				'tanggal_pembayaran' => $this->request->getPost('tanggal_pembayaran'),
				'total_pembayaran' => $this->request->getPost('total_pembayaran'),
				'bank' => $this->request->getPost('bank'),
				'bukti_pembayaran' => $this->request->getPost('bukti_pembayaran'),
				'no_order' => $this->request->getPost('no_order'),
			);
			$model->add_new('pembayaran',$data);
			return redirect()->to('pembayaran');
		}
	} //End Fungsi Tambah

}
?>