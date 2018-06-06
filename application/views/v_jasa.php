<center><input class="form-control col-lg-3" id="search" type="text" placeholder="Search.."></center>
<br>
<br>
<table align='center'>
	<thead align='center'>
		<tr>
			<th>Nomor</th>
			<th>id jasa</th>
			<th>Nama Jasa</th>
			<th>Kategori Jasa</th>
			<th>Harga Jasa</th>
		</tr>
		
	</thead>
	
	<tbody id="v_table" class="table">
		<?php $i=1;
		foreach ($jasa as $value): ?>

			<?php if ($i <=	 1000): ?>
			<tr>
				<td><?= $i++; ?></td>
				<td><?= $value['ID_JASA']; ?></td>
				<td><?= $value['NAMA_JASA']; ?></td>
				<td><?= $value['KATEGORI_JASA']; ?></td>
				<td><?= $value['HARGA_JASA']; ?></td>
			</tr>
			<?php endif ?>
		<?php endforeach ?>
	</tbody>
</table>