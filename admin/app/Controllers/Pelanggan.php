<?php namespace App\Controllers;
use App\Models\Pelanggan_model; //menghubungkan ke Pelanggan_model
use App\Models\General_model;

class Pelanggan extends BaseController{
	public function index(){
		$dataplg = new Pelanggan_model();
		$data = array(
			'data' => $dataplg->data_pelanggan(),
			'isi' => 'pelanggan/pelanggan_view'
		);
		return view('layout/wrapper',$data);
	}

	public function tambah(){
		if (! $this->validate(['kd_pelanggan' => 'required', 'nama_pelanggan' => 'required'])) {
			//menampilkan  form inputan
			$data = array(
				'isi' => 'pelanggan/tambah_pelanggan' //pelanggan = controller, tambah_pelanggan = view
			);
			return view('layout/wrapper',$data);
		}else{
			//Menyimpan data pelanggan
			$model = new General_model();
			$data = array(
				'kd_pelanggan' => $this->request->getPost('kd_pelanggan'),
				'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
				'alamat_pelanggan' => $this->request->getPost('alamat_pelanggan'),
				'telp_pelanggan' => $this->request->getPost('telp_pelanggan'),
				'kota_pelanggan' => $this->request->getPost('kota_pelanggan'),
				'email_pelanggan' => $this->request->getPost('email_pelanggan'),
				'password' => $this->request->getPost('password')
			);
			$model->add_new('pelanggan',$data);
			return redirect()->to('pelanggan');
		}
	} //Untuk menambahkan function lain contoh function edit buatnya dibawah ini // End Fungsi Tambah

	public function edit($id){
		if (! $this->validate(['kd_pelanggan' => 'required', 'nama_pelanggan' => 'required'])) { //utk mengecek apakah udah mengisi form dengan benar atau tidak, jika belum maka,akan menampilkan form yg di if 
			//menampilkan form imputan edit
			$info_pelanggan = new Pelanggan_model();
			$data = array( // isi dari $data yang dilempar ke view
				'kd_pelanggan' => $id,
				'data'         => $info_pelanggan->info_pelanggan($id)->getRow(),
				'isi'          => 'pelanggan/edit_pelanggan' // lokasi view utk konten
			);
			return view('layout/wrapper',$data);	
		}else{
			//update data pelanggan dan kembali ke halaman pelanggan
			$model = new General_model();
			$data = array(
				'nama_pelanggan'   => $this->request->getPost('nama_pelanggan'),
				'alamat_pelanggan' => $this->request->getPost('alamat_pelanggan'),
				'telp_pelanggan'   => $this->request->getPost('telp_pelanggan'),
				'kota_pelanggan'   => $this->request->getPost('kota_pelanggan'),
				'email_pelanggan'  => $this->request->getPost('email_pelanggan'),
				'password'         => $this->request->getPost('password')
			);
			$where_data['kd_pelanggan'] = $id;
			$model->edit_data('pelanggan',$where_data, $data);
			return redirect()->to('pelanggan');
		}
	} //End Fungsi Edit 

	public function delete($id){
		$model = new General_model();
		$where_data['kd_pelanggan'] = $id;
		$model->delete_data('pelanggan',$where_data);
		return redirect()->to('pelanggan');
	}
}
?>