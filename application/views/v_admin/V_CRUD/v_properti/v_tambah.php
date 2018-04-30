<form action="<?= site_url('properti/proses_tambah') ?>" method="POST" role="form">
  <!-- <legend>Tambah</legend> -->

  <div class="form-group">
    <label for="username">Nama Properti:</label>
    <input required type="text" class="form-control col-sm-3" name="username" placeholder="Input username">
  </div>
  <div class="form-group">
    <label for="email">Harga:</label>
    <input required type="text" class="form-control col-sm-3" name="email" placeholder="Input email">
  </div>
  <button type="submit" name="submit" class="btn btn-success">Tambah</button>
</form>