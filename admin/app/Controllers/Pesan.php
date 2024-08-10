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

	public function tambah(){
		if(! $this->validate(['no_order' => 'required', 'tanggal_order' => 'required'])) {
			//Menampilkan form inputan
			$databarang = new Barang_model();
			$datapelanggan = new Pelanggan_model();
			$data = array(
				'data_pelanggan' => $datapelanggan->get_data_pelanggan(),
				'data_barang' => $databarang->get_data_barang(),
				'isi' => 'pesan/tambah_pesan'
			);
			return view('layout/wrapper',$data);
		}else{
			//Menyimpan data pesan
			$model = new General_model();
			$data = array (
				'no_order' => $this->request->getPost('no_order'),
				'tanggal_order' => $this->request->getPost('tanggal_order'),
				'total_order' => $this->request->getPost('total_order'),
				'kd_pelanggan' => $this->request->getPost('kd_pelanggan'),
				'status' => "Proses"
			);
			$model->add_new('pesan',$data);

			//simpan ke tabel ada
			$kd_barang = $this->request->getPost('kd_barang');
			$qty = $this->request->getPost('qty');
			$harga = $this->request->getPost('harga');
			if(is_array($kd_barang)){
				foreach ($kd_barang as $key => $value) {
					$data_detail = array(
						'no_order' => $this->request->getPost('no_order'),
						'kd_barang' => $kd_barang[$key],
						'qty' => $qty[$key],
						'harga' => $harga[$key]
					);
					$model->add_new('ada',$data_detail);
				}
			}
			return redirect()->to('pesan');
		}
	} //End Fungsi Tambah
}
?>