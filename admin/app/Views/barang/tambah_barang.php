<div class="container">
	<h2 align="center">Tambah Pelanggan</h2>
</div>
<div class="card col-lg-12">
	<form name="form1" method="post" action="<?php echo base_url() ?>/barang/tambah">
		<p><label>Kode Barang</label>
		<input type="text" class="form-control" name="kd_barang"></p>
		<p><label>Nama Barang</label>
		<input type="text" class="form-control" name="nama_barang"></p>
		<p><label>Stok Barang</label>
		<input type="text" class="form-control" name="stok"></p>
		<p><label>Harga Barang</label>
		<input type="text" class="form-control" name="harga"></p>
		<p><label>Satuan</label>
		<input type="text" class="form-control" name="satuan"></p>
		<p><label>Keterangan</label>
		<input type="text" class="form-control" name="keterangan"></p>
		<p><label>Status</label>
		<input type="text" class="form-control" name="status"></p>
		<p><label>Gambar</label>
		<input type="text" class="form-control" name="gambar"></p>
			<input type="submit" name="submit" value="submit">

		</p>	
	</form>
</div>