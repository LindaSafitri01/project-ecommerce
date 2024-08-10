<div class="container">
	<h2 align="center">Tambah Retur</h2>
</div>
<div class="card col-lg-12">
	<form name="form1" method="post" action="<?php echo base_url() ?>/retur/tambah">
		<p><label>ID Retur</label>
		<input type="text" class="form-control" name="id_retur"></p>
		<p><label>Tanggal Retur</label>
		<input type="date" class="form-control" name="tgl_retur"></p>
		<p><label>Tanggal Penerimaan Barang</label>
		<input type="date" class="form-control" name="tgl_penerimaan_barang"></p>
		<p><label>Kode Barang</label>
		<input type="text" class="form-control" name="kd_barang"></p>
		<p><label>Jumlah Barang</label>
		<input type="text" class="form-control" name="jumlah_barang"></p>
		<p><label>Keterangan</label>
			<input type="text" class="form-control" name="keterangan"></p>

			<input type="submit" name="submit" value="submit">

		</p>	
	</form>
</div>