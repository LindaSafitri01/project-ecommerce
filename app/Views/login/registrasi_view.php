<div class="container">
	<div class="row col-lg-6">
		<form method="post" action="<?php echo base_url() ?>/login/registrasi">
			<label>Username</label>
			<input name="kd_pelanggan" class="form-control" type="text" />
			<label>Password</label>
			<input name="password" class="form-control" type="password" />
			<label>Nama</label>
			<input name="nama_pelanggan" class="form-control" type="text" />
			<label>Alamat</label>
			<input name="alamat_pelanggan" class="form-control" type="text" />
			<label>Kota</label>
			<input name="kota_pelanggan" class="form-control" type="text" />
			<label>Telp</label>
			<input name="telp_pelanggan" class="form-control" type="text" />
			<label>Email</label>
			<input name="email_pelanggan" class="form-control" type="text" />
			<input type="submit" name="submit" class="btn btn-success" value="Simpan">
		</form>
	</div>
</div>