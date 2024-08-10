 <div class="container">
	<h2 align="center">Edit Barang</h2>
</div>
<div class="card col-lg-12">
	<form method="post" action="<?php echo base_url() ?>/barang/edit/<?php echo $kd_barang ?>">
		<p><label>Kode Barang</label>
			<input type="text" class="form-control" readonly="" name="kd_barang"
				value="<?php echo $kd_barang ?>"></p>
		<p><label>Nama barang</label>
			<input type="text" class="form-control" name="nama_barang"
				value="<?php echo $data->nama_barang ?>"></p>
		<p><label>Stok</label>
			<input type="text" class="form-control" name="stok"
				value="<?php echo $data->stok ?>"></p>
		<p><label>Harga</label>
			<input type="text" class="form-control" name="harga"
				value="<?php echo $data->harga ?>"></p>
		<p><label>Satuan</label>
			<input type="text" class="form-control" name="satuan"
				value="<?php echo $data->satuan ?>"></p>
		<p><label>Keterangan</label>
			<input type="text" class="form-control" name="keterangan"
				value="<?php echo $data->keterangan ?>"></p>
		<p><label>Status</label>
			<input type="text" class="form-control" name="status"
				value="<?php echo $data->status ?>"></p>
		<p><label>Gambar</label>
			<input type="text" class="form-control" name="gambar"
				value="<?php echo $data->gambar ?>"></p>
		<p>
			<input type="submit" name="submit" value="Simpan">
		</p>
	</form>
</div>