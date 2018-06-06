<input class="form-control" id="search" type="text" placeholder="Search..">
<table class="table table-hover table-condensed">
	<thead>
		<caption><a href="<?= site_url('user/tambah_properti') ?>" title="">tambah properti</a></caption>
		<tr>
			<th>no</th>
			<th>nama properti</th>
			<th>harga</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody id="v_table">

		<?php
		$i = 1;
		foreach ($properti as $val): ?>
		<tr>

			<?php if ($this->session->userdata('id') == $val['id_pemilik']): ?>
				
			<td><?= $i++ ?></td>
			<td><?= $val['nama_properti'] ?></td>
			<td><?= $val['harga'] ?></td>
			<td>
				<a href="<?= site_url('user/edit/'.$val['id']) ?>" title=""><button class="btn btn-warning btn-sm">edit</button></a>
				<a href="<?= site_url('user/hapus/'.$val['id']) ?>" title=""><button class="btn btn-danger btn-sm">delete</button></a>
			</td>
			<?php endif ?>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>