<div class="container">
	<h2 align="center">Tambah Pengiriman</h2>
</div>
<div class="card col-lg-12">
	<form name="form1" method="post" action="<?php echo base_url() ?>/pengiriman/tambah">
		<p><label>Kode Pengiriman</label>
		<input type="text" class="form-control" name="kd_pengiriman"></p>
		<p><label>Tanggal Pengiriman</label>
		<input type="date" class="form-control" name="tanggal_pengiriman"></p>
		<p><label>Nomor Resi</label>
		<input type="text" class="form-control" name="nomor_resi"></p>
		<p><label>Kode Pembayaran</label>
			<select name="kd_pembayaran" class="form-control">
				<?php
					if ($data_pembayaran) {
						foreach ($data_pembayaran as $row_pembayaran ) {
							?><option value="<?php echo $row_pembayaran->kd_pembayaran ?> ">	
								<?php echo $row_pembayaran->kd_pembayaran ?> </option> <?php
						}
				}
				?>
			</select></p>
		<p>
			<input type="submit" name="submit" value="submit">
		</p>	
	</form>
</div>
