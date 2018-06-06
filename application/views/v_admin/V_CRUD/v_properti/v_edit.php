<?php 
  
  foreach ($data as $value) {
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
    <!-- <input required type="text" class="form-control col-sm-3" name="id_pemilik" value="<?= $id_pemilik ?>"> -->
    <select class="form-control col-sm-3" name="id_pemilik">
      <?php foreach ($data2 as $value): ?>
        <option value="<?= $value['id'] ?>" <?php if ($value['id'] == $id_pemilik) {
          echo "selected";
        } ?>><?= $value['id'] ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control col-sm-3" name="id" value="<?= $id_properti ?>">
  </div>
  <div class="form-group">
    <label for="username">Nama Properti:</label>
    <input required type="text" readonly class="form-control col-sm-3" name="nama_properti" value="<?= $nama_properti ?>">
  </div>
  <div class="form-group">
    <label for="harga">Harga:</label>
    <input required type="text" class="form-control col-sm-3" name="harga" value="<?= $harga ?>">
  </div>
  
  <button type="submit" name="submit" class="btn btn-success">Update</button>
</form>