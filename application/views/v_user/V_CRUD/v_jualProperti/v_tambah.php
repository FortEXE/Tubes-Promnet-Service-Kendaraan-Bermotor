<form action="<?= site_url('properti/proses_tambah') ?>" method="POST" role="form">
  <!-- <legend>Tambah</legend> -->

  <div class="form-group">
    <label for="nama_properti">Nama Properti:</label>
    <input required type="text" class="form-control col-sm-3" name="nama_properti" placeholder="Input nama_properti">
  </div>
  <div class="form-group">
    <label for="harga">harga:</label>
    <input required type="number" min="0" class="form-control col-sm-3" name="harga" placeholder="Input harga">
  </div>

  <button type="submit" name="submit" class="btn btn-success">Tambah</button>
</form>