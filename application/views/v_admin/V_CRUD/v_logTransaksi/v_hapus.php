<?php foreach ($data as $var):
	$id = $var['id'];
endforeach ?>
<strong>Hapus log id = <?= $id ?>?</strong>
<div>
	<a href="<?= site_url('log/proses_hapus/'. $id) ?>" title=""><button class="btn btn-sm btn-danger">ya</button></a>
	<a href="<?= site_url('admin/logtransaksi') ?>" title=""><button class="btn btn-sm btn-success">tidak</button></a>
</div>