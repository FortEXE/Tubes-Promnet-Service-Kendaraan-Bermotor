<input class="form-control" id="search" type="text" placeholder="Search..">
<table class="table table-hover table-condensed">
	<thead>
		<tr>
			<th>no</th>
			<th>id properti</th>
			<th>id username</th>
			<th>tanggal transaksi</th>
			<th>harga</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody id="v_table">

		<?php 
		$i = 1;
		foreach ($data as $val): ?>
		<tr>
			<td><?= $i++ ?></td>
			<td><?= $val['id_properti'] ?></td>
			<td><?= $val['id_username'] ?></td>
			<td><?= $val['tanggal_transaksi'] ?></td>
			<td><?= $val['harga'] ?></td>
			<td>				
				<a href="<?= site_url('admin/hapuslog/'.$val['id']) ?>" title=""><button class="btn btn-danger btn-sm">delete</button></a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>