

<form action="<?= site_url('account/proses_tambah') ?>" method="POST" role="form">
  <!-- <legend>Tambah</legend> -->

  <div class="form-group">
    <label for="username">Username:</label>
    <input required type="text" class="form-control col-sm-3" name="username" placeholder="Input username">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input required type="text" class="form-control col-sm-3" name="email" placeholder="Input email">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input required type="password" class="form-control col-sm-3" name="password" id="password" placeholder="Input password">
  </div>
  <div class="form-group">
    <label for="retype">Retype Password:</label>
    <input required type="password" class="form-control col-sm-3" id="retype" placeholder="Retype password">
  </div>

  <button type="submit" name="submit" class="btn btn-success">Tambah</button>
</form>