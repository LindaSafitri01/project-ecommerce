<?php
namespace App\Controllers;
use App\Models\Keranjang_model;  //menghubungkan ke Pengiriman_model
use App\Models\General_model; //menghubungkan ke General_model

class Keranjang extends BaseController{
  public function index(){
    $session = session();
    $data_keranjang = new Keranjang_model();
		if($session->get('kd_pelanggan') != null){
			$kd_pelanggan = $session->get('kd_pelanggan');
			$data = array(
				'data' => $data_keranjang->get_keranjang($kd_pelanggan),
				'isi' => 'keranjang/keranjang_view'
			);
      return view('layout/wrapper',$data);
		}else{
			redirect('/login');
		}
	}

	public function add($kd_barang){
    $session = session();
		if($session->get('kd_pelanggan') != null){
      $keranjang = new Keranjang_model();
      $model = new General_model();
			$kd_pelanggan = $session->get('kd_pelanggan');
			$data_keranjang = $keranjang->get_data_keranjang($kd_pelanggan, $kd_barang)->getRow();
			if($data_keranjang){
				$data = array(
					'kd_pelanggan' => $kd_pelanggan,
					'kd_barang' => $kd_barang,
					'qty'	=> $data_keranjang->qty + 1
				);
				$where_data['kd_pelanggan'] = $kd_pelanggan;
				$where_data['kd_barang'] = $kd_barang;

        $model->edit_data('keranjang',$where_data, $data); 
			}else{
				$data = array(
					'kd_pelanggan' => $kd_pelanggan,
					'kd_barang' => $kd_barang,
					'qty'	=> 1
				);
        $model->add_new('keranjang',$data);
			}
      return redirect()->to('keranjang');
		}else{
      return redirect()->to('login');
		}
	}

	public function clear($kd_barang){
		//mendelete barang pada halaman keranjang
		$session = session();
		$kd_pelanggan = $session->get('kd_pelanggan');
    $model = new General_model();
		$where_data['kd_barang'] = $kd_barang;
		$wehere_data['kd_pelanggan'] = $kd_pelanggan;
    $model->delete_data('keranjang',$where_data);
    return redirect()->to('keranjang');
	}

	public function checkout(){
    $session = session();
    $model = new General_model();
    $keranjang_model = new Keranjang_model();
		if($session->get('kd_pelanggan') != null){
			//melakukan checkout atau penjualan
			$no_order = $keranjang_model->get_last_id()->getRow();
      if($no_order){
        $no_order = $no_order->no_order +1;
      }else{
        $no_order = 1;
      }
			$kd_pelanggan = $session->get('kd_pelanggan');
			$data = array(
				'no_order'		  => $no_order,
				'tanggal_order'	=> date("Y-m-d"),
				'alamat'		    => $this->request->getPost('alamat'),
				'kd_pelanggan'	=> $kd_pelanggan,
        'status'        => 'Proses'
			);
      $model->add_new('pesan',$data);

			//simpan ke tabel ada
      $keranjang = new Keranjang_model();
			$data_keranjang = $keranjang->get_keranjang($kd_pelanggan);
			$total_order =0;
			if($data_keranjang){
				foreach ($data_keranjang as $row) {
					$data_detail = array(
						'no_order'	  => $no_order,
						'kd_barang'	  => $row->kd_barang,
						'qty'         => $row->qty,
						'harga'       => $row->harga
					);
        $model->add_new('ada',$data_detail);
				$total_order += ($row->qty * $row->harga);
				}
			}
			//update total order
			$where_data['no_order'] = $no_order;
			$edit_data['total_order'] = $total_order;
      $model->edit_data('pesan',$where_data, $edit_data);

			//hapus data keranjang
			$where_delete['kd_pelanggan'] = $kd_pelanggan;
      $model->delete_data('keranjang',$where_delete);
      return redirect()->to('home');
		}else{
      return redirect()->to('keranjang');
		}
	}
}
?>