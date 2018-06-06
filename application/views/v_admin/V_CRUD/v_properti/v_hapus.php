<?php foreach ($data as $var):
	$id = $var['id'];
	$username = $var['username'];
	$email = $var['email'];
	$password = $var['password'];
endforeach ?>
<strong>Hapus username <?= $username ?>?</strong>
<div>
	<a href="<?= site_url('account/proses_hapus/'. $id) ?>" title=""><button class="btn btn-sm btn-danger">ya</button></a>
	<a href="<?= site_url('admin/userAccount') ?>" title=""><button class="btn btn-sm btn-success">tidak</button></a>
</div>