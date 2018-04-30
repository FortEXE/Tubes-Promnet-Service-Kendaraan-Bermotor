<?php foreach ($properti as $var):
	$id = $var['id'];
	$id_pemilik = $var['id_pemilik'];
	$nama_properti = $var['nama_properti'];
	$harga = $var['harga'];
endforeach ?>

<h3>deskripsi properti</h3>
<table class="table table-striped">
  <tr>
    <th>Nama Properti:</th>
    <td><?= $nama_properti ?></td>
  </tr>
  <tr>
    <th>Harga:</th>
    <td><?= $harga ?></td>
  </tr>
  <tr>
    <th>Pemilik:</th>
    <td><?php foreach ($user as $value) {
    	if ($value['id'] == $id_pemilik) {
    		echo $value['username'];
    	}
    } ?></td>
  </tr>
</table>
<strong>Beli properti ini?</strong>
<div>
	<form action="<?= site_url('properti/proses_beli/'). $id ?>" method="POST" role="form">
  <!-- <legend>Tambah</legend> -->

  <div class="form-group">
    <input required type="hidden" class="form-control col-sm-3" name="id" value="<?= $id ?>">
  </div>
  <div class="form-group">
    <input required type="hidden" class="form-control col-sm-3" name="id_pemilik" value="<?= $id_pemilik ?>">
  </div>
  <div class="form-group">
    <input required type="hidden" class="form-control col-sm-3" name="harga" value="<?= $harga ?>">
  </div>

  <button type="submit" name="submit" class="btn btn-success">Ya</button>
  <a href="<?= site_url('user/beliProperti') ?>" title=""><button class="btn btn-warning">Tidak</button></a>
</form>
</div>