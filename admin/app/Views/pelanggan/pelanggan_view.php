<div class="container">
	<h2 align="center">Manajemen Data Pelanggan</h2>
</div>
<a href="<?php echo base_url() ?>/Pelanggan/tambah" class="btn btn-success">Tambah</a>
<div class="card col-lg-12">
<table class="table">
	<tr class="warning">
		<th>No.</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Telp</th>
		<th>Email</th>
		<th>Action</th>
	</tr>
	<?php
	$no = 1;
	if($data){
		foreach($data as $list){
			?>
			<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $list['nama_pelanggan'] ?></td>
			<td><?php echo $list['alamat_pelanggan'] ?></td>
			<td><?php echo $list['telp_pelanggan'] ?></td>
			<td><?php echo $list['email_pelanggan'] ?></td>
			<td>
				<a href="<?php echo base_url(); ?>/Pelanggan/Edit/<?php echo $list['kd_pelanggan'] ?>" class="btn btn-warning">Edit</a>
				<a href="<?php echo base_url(); ?>/Pelanggan/Delete/<?php echo $list['kd_pelanggan'] ?>" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		<?php
		$no++;
		}
	}
?>
</table>
</div>