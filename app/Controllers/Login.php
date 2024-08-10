<?php
namespace App\Controllers;
use App\Models\Login_model;  //menghubungkan ke Login_model
use App\Models\General_model;  //menghubungkan ke Login_model

class Login extends BaseController{
  public function index(){
    if(! $this->validate(['kd_pelanggan' => 'required', 'password' => 'required'])) {
      //menampilkan form Login
      $data = array(
        'isi' => 'login/login_view'
      );
      return view('layout/wrapper',$data);
    }else{
      //Authentication pengecekan data login pelanggan
      $info_login     = new Login_model();
      $kd_pelanggan   = $this->request->getPost('kd_pelanggan');
      $password       = $this->request->getPost('password');
      $cek =  $info_login->authentication($kd_pelanggan, $password);
      if($cek->getRow()){
        //Jika data benar maka masuk ke halaman home
        $session = session();
        $data_session = ['kd_pelanggan'=>$kd_pelanggan];
        $session->set($data_session);
        return redirect()->to('home'); 
      }else{
        //Jika data login salah maka kembali ke halaman login
        return redirect()->to('login'); 
      }
    }
  }//end fungsi index

  public function Logout(){
    //Menghapus Session
    $session = session();
    $session->destroy();
    return redirect()->to('home'); 
  }//end fungsi logout
  
  public function registrasi(){
    if (! $this->validate(['kd_pelanggan' => 'required', 'password' => 'required'])) {
      //menampilkan form inputan
      $data = array(
        'isi' => 'login/registrasi_view'
      );
      return view('layout/wrapper',$data);
    }else{
      //Menyimpan data pelanggan
      $model = new General_model();
      $data = array(
        'kd_pelanggan'      => $this->request->getPost('kd_pelanggan'),
        'nama_pelanggan'    => $this->request->getPost('nama_pelanggan'),
        'alamat_pelanggan'  => $this->request->getPost('alamat_pelanggan'),
        'telp_pelanggan'    => $this->request->getPost('telp_pelanggan'),
        'kota_pelanggan'    => $this->request->getPost('kota_pelanggan'),
        'email_pelanggan'   => $this->request->getPost('email_pelanggan'),
        'password'          => $this->request->getPost('password')
      );
      $model->add_new('pelanggan',$data);
      return redirect()->to('login');
    }
  } //End Fungsi Tambah
}