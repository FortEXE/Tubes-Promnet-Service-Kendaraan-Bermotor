<p>ketik untuk mencari atau klik untuk mensorting</p>
<input class="form-control" id="search" type="text" placeholder="Search..">
<table id="table" class="table table-hover table-condensed clickable-row">
	<caption><a href="<?= site_url('admin/tambah') ?>" title="">tambah akun</a></caption>
	<thead>
		<tr>
			<th onclick="sortTable(0)">no</th>
			<th onclick="sortTable(1)">username</th>
			<th onclick="sortTable(2)">email</th>
			<th onclick="sortTable(3)">user type</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody id="v_table">

		<?php 
		$i = 1;
		foreach ($data as $val): ?>
		<tr>
			<td><?= $i++ ?></td>
			<td><?= $val['username'] ?></td>
			<td><?= $val['email'] ?></td>
			<td><?= strtoupper($val['user_type']) ?></td>
			<td>
				<a href="<?= site_url('admin/edit/'.$val['id']) ?>" title=""><button class="btn btn-warning btn-sm">edit</button></a>
				<a href="<?= site_url('admin/hapus/'.$val['id']) ?>" title=""><button class="btn btn-danger btn-sm">delete</button></a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>