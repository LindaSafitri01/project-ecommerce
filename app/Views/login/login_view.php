<div class="container">
	<div class="row col-lg-6">
		<?php if(isset($error)) echo $error ?> <br>
		<form method="post" action="<?php echo base_url('Login'); ?>">
			<label>Kode Pelanggan</label>
			<input name="kd_pelanggan" class="form-control" type="text">

			<label>Password</label>
			<input name="password" class="form-control" type="password"><br>

			<input type="submit" name="submit" class="btn btn-success" value="Login" />
			<a href="<?php echo base_url() ?>/login/registrasi" class="btn btn-warning">Registrasi</a>
		</form>
	</div>
</div>