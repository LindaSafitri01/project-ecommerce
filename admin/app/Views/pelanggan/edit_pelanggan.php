<div class="container">
	<h2 align="center">Edit Pelanggan</h2>
</div>
<div class="card col-lg-12">
<form method="post" action="<?php echo base_url() ?>/pelanggan/edit/<?php echo $kd_pelanggan ?>">
	<p><label>Kode Pelanggan</label>
		<input type="text" class="form-control" readonly="" name="kd_pelanggan"
			value="<?php echo $kd_pelanggan ?>"></p>
	<p><label>Nama Pelanggan</label>
		<input type="text" class="form-control" name="nama_pelanggan"
			value="<?php echo $data->nama_pelanggan ?>"></p>
	<p><label>Alamat Pelanggan</label>
		<input type="text" class="form-control" name="alamat_pelanggan"
			value="<?php echo $data->alamat_pelanggan ?>"></p>
	<p><label>Telp Pelanggan</label>
		<input type="text" class="form-control" name="telp_pelanggan"
			value="<?php echo $data->telp_pelanggan ?>"></p>
	<p><label>Kota Pelanggan</label>
		<input type="text" class="form-control" name="kota_pelanggan"
			value="<?php echo $data->kota_pelanggan ?>"></p>
	<p><label>Email Pelanggan</label>
		<input type="text" class="form-control" name="email_pelanggan"
			value="<?php echo $data->email_pelanggan ?>"></p>
	<p><label>Password</label>
		<input type="password" class="form-control" name="password"
			value="<?php echo $data->password ?>"></p>
	<p>
		<input type="submit" name="submit" value="Simpan">
	</p>	
</form>
</div>