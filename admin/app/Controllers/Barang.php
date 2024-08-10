<?php namespace App\Controllers;
use App\Models\Barang_model; //menghubungkan ke barang_model
use App\Models\General_model;

class Barang extends BaseController{
	public function index(){
		$databrg = new Barang_model();
		$data = array(
			'data' => $databrg->data_barang(),
			'isi' => 'Barang/barang_view'
		);
		return view('layout/wrapper',$data);
	}

	public function tambah(){
		if (! $this->validate(['kd_barang' => 'required', 'nama_barang' => 'required'])) {
			//menampilkan  form inputan
			$data = array(
				'isi' => 'barang/tambah_barang' //barang = controller, tambah_barang = view
			);
			return view('layout/wrapper',$data);
		}else{
			//Menyimpan data barang
			$model = new General_model();
			$data = array(
				'kd_barang' => $this->request->getPost('kd_barang'),
				'nama_barang' => $this->request->getPost('nama_barang'),
				'stok' => $this->request->getPost('stok'),
				'harga' => $this->request->getPost('harga'),
				'satuan' => $this->request->getPost('satuan'),
				'keterangan' => $this->request->getPost('keterangan'),
				'status' => $this->request->getPost('status'),
				'gambar' => $this->request->getPost('gambar')
			);
			$model->add_new('barang',$data);
			return redirect()->to('barang');
		}
	} //Untuk menambahkan function lain contoh function edit buatnya dibawah ini // End Fungsi Tambah

	public function edit($id){
		if (! $this->validate(['kd_barang' => 'required', 'nama_barang' => 'required'])) { //utk mengecek apakah udah mengisi form dengan benar atau tidak, jika belum maka,akan menampilkan form yg di if 
			//menampilkan form imputan edit
			$info_barang = new barang_model();
			$data = array( // isi dari $data yang dilempar ke view
				'kd_barang' => $id,
				'data'         => $info_barang->info_barang($id)->getRow(),
				'isi'          => 'barang/edit_barang' // lokasi view utk konten
			);
			return view('layout/wrapper',$data);	
		}else{
			//update data barang dan kembali ke halaman barang
			$model = new General_model();
			$data = array(
				'nama_barang'   => $this->request->getPost('nama_barang'),
				'stok' => $this->request->getPost('stok'),
				'harga' => $this->request->getPost('harga'),
				'satuan' => $this->request->getPost('satuan'),
				'keterangan' => $this->request->getPost('keterangan'),
				'status' => $this->request->getPost('status'),
				'gambar' => $this->request->getPost('gambar')
			);
			$where_data['kd_barang'] = $id;
			$model->edit_data('barang',$where_data, $data);
			return redirect()->to('barang');
		}
	} //End Fungsi Edit 

	public function delete($id){
		$model = new General_model();
		$where_data['kd_barang'] = $id;
		$model->delete_data('barang',$where_data);
		return redirect()->to('barang');
	}
}
?>