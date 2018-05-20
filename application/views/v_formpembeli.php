<form action="<?= site_url('controller_pelanggan/proses_pembelian') ?>" method="POST" accept-charset="utf-8">
	
	<input type="text" name="nama" placeholder="input nama lengkap">
	<input type="text" name="alamat" placeholder="input alamat rumah">
	<input type="text" name="no_telp" placeholder="input no telepon">
	<input type="text" name="no_stnk" placeholder="input nomor STNK">
	<input type="text" name="tahun_stnk" placeholder="input tahun STNK">
	<input type="submit" name="submit" value="Submit">

	<h2>daftar barang yang dibeli</h2>
	<?php foreach ($cart_barang as $var): ?>
		<?= 'id: ' . $var['id'] ?><br>
		<?= 'nama barang: ' . $var['name'] ?><br>
		<?= 'qty: ' . $var['qty'] ?><br>
		<?= 'harga barang: ' . $var['price'] ?><br><br>
	<?php endforeach ?>
	
</form>	