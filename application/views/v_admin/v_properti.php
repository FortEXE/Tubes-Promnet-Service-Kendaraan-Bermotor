<input class="form-control" id="search" type="text" placeholder="Search..">
<table class="table table-hover table-condensed">
	<thead>
		<tr>
			<th>no</th>
			<th>id_pemilik</th>
			<th>nama properti</th>
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
			<td><?= $val['id_pemilik'] ?></td>
			<td><?= $val['nama_properti'] ?></td>
			<td><?= $val['harga'] ?></td>
			<td>
				<a href="<?= site_url('admin/edit/'.$val['id']) ?>" title=""><button class="btn btn-warning btn-sm">edit</button></a>
				<a href="<?= site_url('admin/hapus/'.$val['id']) ?>" title=""><button class="btn btn-danger btn-sm">delete</button></a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>