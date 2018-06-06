<center><input class="form-control col-lg-3" id="search" type="text" placeholder="Search.."></center>
<br>
<br>
<table align='center'>
	<thead>
		<tr align='center'>
			<th>nomor</th>
			<th>id barang</th>
			<th>nama barang</th>
			<th>harga barang</th>
		</tr>
	</thead>
	<tbody id="v_table" class="table">
		<?php $i=$this->uri->segment('10') + 1;
		foreach ($barang as $value): ?>

			<tr>
				<td><?= $i++; ?></td>
				<td><?= $value['ID_BARANG']; ?></td>
				<td><?= $value['NAMA_BARANG']; ?></td>
				<td><?= $value['HARGA_BARANG']; ?></td>
				<td>
					<a href="<?= site_url('controller_utama/detailbarang/'.$value['ID_BARANG']) ?>" title="Detail Barang">Detail Barang</a>
				</td>
			</tr>
		<?php endforeach ?>

	</tbody>
</table>
		<center>
		<?= $this->pagination->create_links(); ?>
		</center>