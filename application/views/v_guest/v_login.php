<?php 

if (isset($_SESSION['isLoggedIn']) ) {
  redirect('account/index','refresh');  
}?>
  
<form method="post" action="<?= site_url("auth/cek_login")?>">
  <fieldset>
    <legend>Login</legend>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="username" class="form-control col-sm-2" name="username" aria-describedby="usernameHelp" placeholder="Enter username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control col-sm-2" name="password" placeholder="Password">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
      
    <small>belum punya akun? <a href="<?= site_url("welcome/daftar") ?>" title="Daftar">Daftar akun</a></small>
    
  </fieldset>
</form>

