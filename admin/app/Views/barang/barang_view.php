<div class="container">
	<h2 align="center">Manajemen Data Barang</h2>
</div>
<a href="<?php echo base_url() ?>/Barang/tambah" class="btn btn-success">Tambah</a>
<div class="card col-lg-12">
<table class="table">
	<tr class="warning">
		<th>No.</th>
		<th>Nama</th>
		<th>Stok</th>
		<th>Harga</th>
		<th>Satuan</th>
		<th>Keterangan</th>
		<th>Status</th>
		<th>Gambar</th>
		<th>Action</th>
	</tr>
	<?php
	$no = 1;
	if($data){
		foreach($data as $list){
			?>
			<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $list['nama_barang'] ?></td>
			<td><?php echo $list['stok'] ?></td>
			<td><?php echo $list['harga'] ?></td>
			<td><?php echo $list['satuan'] ?></td>
			<td><?php echo $list['keterangan'] ?></td>
			<td><?php echo $list['status'] ?></td>
			<td><?php echo $list['gambar'] ?></td>
			<td>
				<a href="<?php echo base_url(); ?>/Barang/Edit/<?php echo $list['kd_barang'] ?>" class="btn btn-warning">Edit</a>
				<a href="<?php echo base_url(); ?>/Barang/Delete/<?php echo $list['kd_barang'] ?>" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		<?php
		$no++;
		}
	}
?>
</table>
</div>