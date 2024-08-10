<div class="container">
	<h2 align="center">Tambah Pembayaran</h2>
</div>
<div class="card col-lg-12">
	<form name="form1" method="post" action="<?php echo base_url() ?>/pembayaran/tambah">
		<p><label>Kode Pembayaran</label>
		<input type="text" class="form-control" name="kd_pembayaran"></p>
		<p><label>Tanggal Pembayaran</label>
		<input type="date" class="form-control" name="tanggal_pembayaran"></p>
		<p><label>Total Pembayaran</label>
		<input type="text" class="form-control" name="total_pembayaran"></p>
		<p><label>Bank</label>
		<input type="text" class="form-control" name="bank"></p>
		<p><label>Bukti Pembayaran</label>
		<input type="text" class="form-control" name="bukti_pembayaran"></p>
		<p><label>Data Pesan</label>
			<select name="no_order" class="form-control">
				<?php
					if ($data_pesan) {
						foreach ($data_pesan as $row_pesan ) {
							?><option value="<?php echo $row_pesan->no_order ?> ">	
								<?php echo $row_pesan->no_order ?> </option> <?php
						}
				}
				?>
			</select></p>
		<p>
			<input type="submit" name="submit" value="submit">
		</p>	
	</form>
</div>
