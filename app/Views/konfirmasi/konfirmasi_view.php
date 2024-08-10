<form method="post" action="<?php echo base_url() ?>keranjang/checkout">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ftco-anime">
				<div class="cart-list">
					<a href="<?php echo base_url()?>Konfirmasi/tambah" class="btn btn-success">Tambah</a>
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nomor Order</th>
								<th>Tanggal Konfirmasi</th>
								<th>Jumlah Pembayaran</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no=1;
							if($data){
								foreach ($data as $row) {
									?>
									<tr>
										<td>
											<?php echo $no ?>
										</td>
										<td>
											<?php echo $row->no_order ?>
										</td>
										<td>
											<?php echo $row->tgl_konfirmasi ?>
										</td>
										<td>
											<?php echo $row->jumlah_pembayaran ?>
										</td>
									</tr>
									<?php
									$no++;
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</form>