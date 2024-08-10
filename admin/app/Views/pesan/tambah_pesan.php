<div class="container">
	<h2 align="center">Tambah Order</h2>
</div>
<div class="card col-lg-12">
	<form name="form1" method="post" action="<?php echo base_url() ?>/pesan/tambah">
		<p><label>No Order</label>
		<input type="text" class="form-control" name="no_order"></p>
		<p><label>Tanggal Order</label>
		<input type="date" class="form-control" name="tanggal_order"></p>
		<p><label>Total Order</label>
		<input type="text" class="form-control" name="total_order"></p>
		<p><label>Pelanggan</label>
			<select name="kd_pelanggan" class="form-control">
				<?php
					if ($data_pelanggan) {
						foreach ($data_pelanggan as $row_pelanggan ) {
							?><option value="<?php echo $row_pelanggan->kd_pelanggan ?> ">	
								<?php echo $row_pelanggan->nama_pelanggan ?> </option> <?php
						}
				}
				?>
			</select></p>
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th>No</th>
					<th>Barang</th>
					<th>Qty</th>
					<th>Harga</th>
					<th>Action</th>
				</tr>
				<tr id="footer_barang">
					<td style="text-align:right" colspan="5">
						<a class="btn btn-success" id="add_row_barang"> Tambah Barang</a>
					</td>
				</tr>
			</table>
		</div>
		<p>
			<input type="submit" name="submit" value="submit">
		</p>	
	</form>
</div>
<script>
	var barang_select ='';
	<?php
	if($data_barang){
		foreach ($data_barang as $row_barang){
			?> barang_select += '<option value="<?php echo $row_barang->kd_barang ?>">\
			<?php echo $row_barang->nama_barang ?> </option>';
			<?php
		}
	}
	?>
	var no=1;
	var index_table=0;
	$("#add_row_barang").click(function(){
		$("#footer_barang").before(
			'<tr id="row_barang_'+index_table+'">\
			<td>'+no+'</td>\
			<td><select name="kd_barang['+index_table+']" class="form-control">'+barang_select+'</select></td>\
			<td><input name="qty['+index_table+']" class="form-control" type="text"></td>\
			<td><input name="harga['+index_table+']" class="form-control" type="text"></td>\
			<td><a onclick="remove_div_id(\'row_barang_'+index_table+'\',1)" class="btn btn-danger">-</a></td>\
		');
		no++;
		index_table++;
	});

	function remove_div_id(id){
		$('#'+id).remove();
	}
</script>