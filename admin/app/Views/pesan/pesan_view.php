<a href="<?php echo base_url() ?>/Pesan/tambah" class="btn btn-success">Tambah</a>
<div class="container">
	<h2 align="center">Manajemen Data Pesan</h2>
</div>
<div class="container">

</div>
<div class="card col-lg-12">
<table class="table">
	<tr class="warning">
		<th>No.</th>
		<th>No order</th>
		<th>Tanggal order</th>
		<th>Pelanggan</th>
		<th>Status</th>
		<th>Total order</th>
		<th>Action</th>
	</tr>
	<?php
	$no = 1;
	if($data){
		foreach($data as $list){
			?>
			<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $list->no_order ?> </td>
			<td><?php echo $list->tanggal_order ?></td>
			<td><?php echo $list->nama_pelanggan ?></td>
			<td><?php echo $list->status ?></td>
			<td>Rp. <?php echo number_format($list->total_order) ?></td>
			<td>
				<a href="<?php echo base_url(); ?>/Pesan/Detail/<?php echo $list->no_order ?>" class="btn btn-warning">Detail</a>
			</td>
			</tr>
			<?php
			$no++;
		}
	}
	?>
</table>	
</div>