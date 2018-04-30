<input class="form-control" id="search" type="text" placeholder="Search..">
<table class="table table-hover table-condensed">
	<thead>
		<tr>
			<th>no</th>
			<th>nama properti</th>
			<th>nama pemilik</th>
			<th>harga</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody id="v_table">

		<?php
		$i = 1;
		foreach ($properti as $val): ?>
		<tr>

			<?php if ($this->session->userdata('id') != $val['id_pemilik']): ?>
				
			<td><?= $i++ ?></td>
			<td><?= $val['nama_properti'] ?></td>
			<td>
				<?php foreach ($user as $value): 

					if ($value['id'] == $val['id_pemilik']) {
						echo $value['username'];
					}

				endforeach ?>
			</td>
			<td><?= $val['harga'] ?></td>
			<td>
				<a href="<?= site_url('user/beli/'.$val['id']) ?>" title=""><button class="btn btn-success btn-sm">beli</button></a>
			</td>
			<?php endif ?>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>