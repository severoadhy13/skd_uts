<?php
require "daftarconn.php";

if(isset($_POST["register"])){
    if(registrasi($_POST) > 0){
        echo "<script>
            alert('User baru berhasil ditambahkan');
            </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}
?>



<div class="login-box">
  <link rel="stylesheet" href="style.css">
  <h2>Registrasi Siswa</h2>
  <br>
  <form action="#" method="post" action="">
    <div class="user-box">
      <input type="text" name="rusername" id="rusername">
      <label>Masukkan Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="rpass" id="rpass">
      <label>Masukkan Password</label>
    </div>
    
    <div class="user-box">
      <input type="password" name="kpass" id="kpass">
      <label>Konfirmasi Password</label>
    </div>

    <p><a href="login.php">Login</a></p>
  <br>
    <div  class="form-action-buttons">
      <input type="submit" name="register">
  </div>
  </form>

</div>

