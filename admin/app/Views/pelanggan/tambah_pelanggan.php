<div class="container">
	<h2 align="center">Tambah Pelanggan</h2>
</div>
<div class="card col-lg-12">
	<form name="form1" method="post" action="<?php echo base_url() ?>/pelanggan/tambah">
		<p><label>Kode Pelanggan</label>
		<input type="text" class="form-control" name="kd_pelanggan"></p>
		<p><label>Nama Pelanggan</label>
		<input type="text" class="form-control" name="nama_pelanggan"></p>
		<p><label>Alamat Pelanggan</label>
		<input type="text" class="form-control" name="alamat_pelanggan"></p>
		<p><label>Telp Pelanggan</label>
		<input type="text" class="form-control" name="telp_pelanggan"></p>
		<p><label>Kota Pelanggan</label>
		<input type="text" class="form-control" name="kota_pelanggan"></p>
		<p><label>Email Pelanggan</label>
			<input type="text" class="form-control" name="email_pelanggan"></p>
		<p><label>Password</label>
		<input type="password" class="form-control" name="password"></p>
		<p>
			<input type="submit" name="submit" value="submit">

		</p>	
	</form>
</div>