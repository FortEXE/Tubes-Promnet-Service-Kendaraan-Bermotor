
<h4>pilih menu:</h4>

<a href="<?= site_url('user/jualProperti') ?>" title="">
	<button class="btn btn-secondary">Jual Properti</button>
</a>
<a href="<?= site_url('user/beliProperti') ?>" title="">
	<button class="btn btn-secondary">Beli Properti</button>
</a>

<?php if ($this->session->userdata('user_type') == 'admin'): ?>
	<br>
	<small><a href="<?= site_url('admin') ?>" title="">masuk sebagai admin</a></small>
<?php endif ?>