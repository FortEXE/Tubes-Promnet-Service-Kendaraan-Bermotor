<?php 
  
  foreach ($properti as $value) {
    $id_properti = $value['id'];
    $id_pemilik = $value['id_pemilik'];
    $nama_properti = $value['nama_properti'];
    $harga = $value['harga'];
  }
 ?>

<form action="<?= site_url('properti/proses_update/') . $id_properti ?>" method="POST" role="form">
  <!-- <legend>Tambah</legend> -->

  <div class="form-group">
    <label for="id_pemilik">id pemilik</label>
    <input required readonly type="text" class="form-control col-sm-3" name="id_pemilik" value="<?= $id_pemilik ?>">
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control col-sm-3" name="id" value="<?= $id_properti ?>">
  </div>
  <div class="form-group">
    <label for="username">Nama Properti:</label>
    <input required type="text" class="form-control col-sm-3" name="nama_properti" value="<?= $nama_properti ?>">
  </div>
  <div class="form-group">
    <label for="harga">Harga:</label>
    <input required type="number" min="0" class="form-control col-sm-3" name="harga" value="<?= $harga ?>">
  </div>
  
  <button type="submit" name="submit" class="btn btn-success">Edit Properti</button>
</form>