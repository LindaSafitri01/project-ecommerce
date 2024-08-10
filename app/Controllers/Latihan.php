<?php
namespace App\Controllers;
class Latihan extends BaseController{
    public function index(){
      $data = array(
        'data'  => 'Latihan',
        'isi'   => 'latihan/latihan_view'
      );
      return view('layout/wrapper', $data);
    }
}