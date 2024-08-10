<div class="container">
	<h2 align="center">Manajemen Data Retur</h2>
</div>
<a href="<?php echo base_url() ?>/Retur/tambah" class="btn btn-success">Tambah</a>
<div class="card col-lg-12">
<table class="table">
	<tr class="warning">
		<th>No.</th>
		<th>ID Retur</th>
		<th>Tanggal Retur</th>
		<th>Tanggal Penerimaan Barang</th>
		<th>Kode Barang</th>
		<th>Jumlah Barang</th>
		<th>Keterangan</th>
	</tr>
	<?php
	$no = 1;
	if($data){
		foreach($data as $list){
			?>
			<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $list['id_retur'] ?></td>
			<td><?php echo $list['tgl_retur'] ?></td>
			<td><?php echo $list['tgl_penerimaan_barang'] ?></td>
			<td><?php echo $list['kd_barang'] ?></td>
			<td><?php echo $list['jumlah_barang'] ?></td>
			<td><?php echo $list['keterangan'] ?></td>
		</tr>
		<?php
		$no++;
		}
	}
?>
</table>
</div>