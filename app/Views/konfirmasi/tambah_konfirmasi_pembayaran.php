<div class="container">
	<div class="row col-lg-6">
		<form method="post" action="<?php echo base_url() ?>Konfirmasi/tambah">
			<label>Nomor Order</label>
			<input name="no_order" class="form-control" type="text" />
			<label>Tanggal Konfirmasi</label>
			<input name="tgl_konfirmasi" class="form-control" type="date" />
			<label>Jumlah Pembayaran</label>
			<input name="jumlah_pembayaran" class="form-control" type="text" /><br>
			<input type="submit" name="submit" class="btn btn-success" value="Simpan">
		</form>
	</div>
</div>