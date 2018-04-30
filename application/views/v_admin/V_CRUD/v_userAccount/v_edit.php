<?php 
  
  foreach ($data as $value) {
    $id = $value['id'];
    $nama = $value['nama'];
    $username = $value['username'];
    $email = $value['email'];
    $user_type = $value['user_type'];
  }
  
 ?>

<form action="<?= site_url('account/proses_update/') . $id ?>" method="POST" role="form">
  <!-- <legend>Tambah</legend> -->

  <div class="form-group">
    <input type="hidden" class="form-control col-sm-3" name="id" value="<?= $id ?>">
  </div>
  <div class="form-group">
    <label for="username">Username:</label>
    <input required type="text" readonly class="form-control col-sm-3" name="username" value="<?= $username ?>">
  </div>
  <div class="form-group">
    <label for="username">Nama:</label>
    <input required type="text" class="form-control col-sm-3" name="nama" value="<?= $nama ?>">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input required type="text" class="form-control col-sm-3" name="email" value="<?= $email ?>">
  </div>
  <div class="form-group">
    <label for="user_type">User Type</label>
    <select required type="select" class="form-control col-sm-3" name="user_type" value="">
      
      <option value="admin" <?php if ($user_type == 'admin') {
        echo 'selected';
      } ?>>admin</option>
      <option value="user" <?php if ($user_type == 'user') {
        echo 'selected';
      } ?>>user</option>

    </select>
  </div>
  <button type="submit" name="submit" class="btn btn-success">Update</button>
</form>