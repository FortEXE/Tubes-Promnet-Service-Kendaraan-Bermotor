<?php foreach ($barang as $var): ?>
	<form action="<?= site_url('Cart_Barang/add') ?>" method="post">
	<input readonly type="text" name="id_barang" value="<?= $var['ID_BARANG'] ?>">
	<input readonly type="text" name="nama_barang" value="<?= $var['NAMA_BARANG'] ?>">
	<input readonly type="text" name="keterangan_barang" value="<?php if (empty($var['KETERANGAN_BARANG'])) {
		echo '-';
	}else {
		echo $var['KETERANGAN_BARANG'];
	} ?>">
	<input readonly type="text" name="stok_barang" value="<?= $var['STOK_BARANG'] ?>"><br>
	<input readonly type="number" name="harga_barang" value=<?= $var['HARGA_BARANG'] ?>><br>
	<input type="number" name="qty_barang">
	<input type="submit" name="submit" value="Tambah ke Keranjang">
	</form>
<?php endforeach ?>