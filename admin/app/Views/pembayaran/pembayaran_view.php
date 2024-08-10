<div class="container">
	<h2 align="center">Manajemen Data Pembayaran</h2>
</div>
<div class="container">
</div>
<div class="card col-lg-12">
<table class="table">
	<tr class="warning">
		<th>No.</th>
		<th>Kode Pembayaran</th>
		<th>Tanggal Pembayaran</th>
		<th>Total Pembayaran</th>
		<th>Bank</th>
		<th>Bukti Pembayaran</th>
		<th>No Order</th>
	</tr>
	<?php
	$no = 1;
	if($data){
		foreach($data as $list){
			?>
			<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $list->kd_pembayaran ?></td>
			<td><?php echo $list->tanggal_pembayaran ?></td>
			<td><?php echo $list->total_pembayaran ?></td>
			<td><?php echo $list->bank ?></td>
			<td><?php echo $list->bukti_pembayaran ?></td>
			<td><?php echo $list->no_order ?></td>
		</tr>
		<?php
		$no++;
		}
	}
?>
</table>
</div>