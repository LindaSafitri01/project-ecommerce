<form method="post" action="<?php echo base_url() ?>/keranjang/checkout">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ftco-anime">
				<div class="cart-list">
					<label>Alamat</label>
					<input name="alamat" type="text" class="form-control">
					<table class="table">
						<thead>
							<tr>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th>Nama Barang</th>
								<th>Harga</th>
								<th>Jumlah</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
						<?php
						if($data){
							$grand_total = 0;
							foreach ($data as $row) {
								$grand_total += $row->qty * $row->harga;
								?>
								<tr>
									<td class="product-remove">
										<a href="<?php echo base_url() ?>/keranjang/clear/<?php echo $row->kd_barang ?>" class="btn btn-lg btn-danger">-</a>
									</td>
									<td class="image-prod">
										<img class="img" src="<?php echo base_url()."/images/".$row->gambar ?> ">
									</td>
						  		<td><?php echo $row->nama_barang ?></td>
									<td>Rp. <?php echo number_format($row->harga) ?></td>
									<td><?php echo number_format($row->qty) ?></td>
									<td>Rp. <?php echo number_format($row->harga * $row->qty) ?></td>
								</tr>
								<?php
							}
							?>
							<tr><td colspan="5"> GrandTotal : </td><td> Rp. <?php echo number_format($grand_total) ?></td></tr>
							<?php
						}
						?>
					</tbody>
				</table>
				<input type="submit" name="submit" class="btn btn-lg btn-success" value="checout">
			</div>
		</div>
	</div>
</div>
</form>