<?php namespace App\Controllers;
use App\Models\Retur_model; //menghubungkan ke Pelanggan_model
use App\Models\General_model;

class Retur extends BaseController{
	public function index(){
		$datartr = new Retur_model();
		$data = array(
			'data' => $datartr->data_retur(),
			'isi' => 'retur/retur_view'
		);
		return view('layout/wrapper',$data);
	}

	public function tambah(){
		if (! $this->validate(['id_retur' => 'required', 'tgl_retur' => 'required'])) {
			//menampilkan  form inputan
			$data = array(
				'isi' => 'retur/tambah_retur' //retur = controller, tambah_retur = view
			);
			return view('layout/wrapper',$data);
		}else{
			//Menyimpan data retur
			$model = new General_model();
			$data = array(
				'id_retur' => $this->request->getPost('id_retur'),
				'tgl_retur' => $this->request->getPost('tgl_retur'),
				'kd_barang' => $this->request->getPost('kd_barang'),
				'jumlah_barang' => $this->request->getPost('jumlah_barang'),
				'keterangan' => $this->request->getPost('keterangan'),
				'tgl_penerimaan_barang' => $this->request->getPost('tgl_penerimaan_barang')
			);
			$model->add_new('retur',$data);
			return redirect()->to('retur');
		}
	} //Untuk menambahkan function lain contoh function edit buatnya dibawah ini // End Fungsi Tambah



}
?>