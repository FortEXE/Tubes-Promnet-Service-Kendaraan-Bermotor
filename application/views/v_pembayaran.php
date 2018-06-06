<h3 align='center'>yang harus dibayar senilai: <?php echo 'Rp. '. number_format($this->cart->total(),0,'.','.'); ?></h3>

<form align="center" action="<?= site_url('controller_transaksi_barang/proses_pembayaran') ?>" method="POST" accept-charset="utf-8">
	
	<select name="payment">
		<option value="cash">Cash</option>
		<option value="atm">ATM</option>
		<option value="other">other</option>
	</select>

	<input type="number" name="jumlahpembayaran" placeholder="input pembayaran">

	<input type="submit" name="submit" value="Konfirmasi Bayar">
</form>	