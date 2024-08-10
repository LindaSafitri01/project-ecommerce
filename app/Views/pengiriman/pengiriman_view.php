<div class="container">
	<h2 align="center">Manajemen Data Pengiriman</h2>
</div>
<div class="container">
</div>
<div class="card col-lg-12">
<table class="table">
	<tr class="warning">
		<th>No.</th>
		<th>Kode Pengiriman</th>
		<th>Tanggal Pengiriman</th>
		<th>Nomor Resi</th>
		<th>Kode Pembayaran</th>
	</tr>
	<?php
	$no = 1;
	if($data){
		foreach($data as $list){
			?>
			<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $list->kd_pengiriman ?></td>
			<td><?php echo $list->tanggal_pengiriman ?></td>
			<td><?php echo $list->nomor_resi ?></td>
			<td><?php echo $list->kd_pembayaran ?></td>
		</tr>
		<?php
		$no++;
		}
	}
?>
</table>
</div>