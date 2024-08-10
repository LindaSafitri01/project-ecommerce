<div class="container">
  <div class="row">
    <div class="col-lg-6 mb-5 ftco-animate">
      <a href="<?php echo base_url()."/images/".$data->gambar ?>" class="image-popup">
      <img src="<?php echo base_url()."/images/".$data->gambar ?>" class="img-fluid">
      </a>
    </div>
    <div class="col-lg-6 product-details pl-md-5 ftco-animate">
      <h3><?php echo $data->nama_barang ?></h3>
      <p><?php echo "Rp. ". number_format($data->harga, 0, ",", "."); ?></p>
      <p><?php echo $data->keterangan ?></p>
      <div class="input-group col-md-6 d-flex mb-3">
        <input type="number" name="quantity" class="form-control input-number" value="1">
      </div>
      <p>Tersedia : <?php echo $data->stok ?></p>
      <p>
        <a href="<?php echo base_url()."/Keranjang/add/".$data->kd_barang ?>" class="btn btn-black py-3 px-5">Masukkan ke Keranjang</a>
      </p>
    </div>
  </div>
</div>