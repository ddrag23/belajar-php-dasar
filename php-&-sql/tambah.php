<?php
require 'functions.php';

if ( isset($_POST["submit"]) ) {
  
// cek sukses atau tidak menambahkan data ke dalam database
  if (tambah($_POST) > 0) {
    echo "<script>
      alert('berhasil menambahkan');
      document.location.href = 'index.php';
    </script>";
  }else {
    echo "<script>
      alert('gagal menambahkan');
      document.location.href = 'index.php';
    </script>";
  }

}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tambah data agen</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <h2>Tambah Data Agen</h2>
      <ul>
        <label for="nama_agen">Nama :</label>
        <li><input type="text" name="nama_agen" id="nama_agen"></li>
      </ul>
      <ul>
        <label for="alamat">Alamat :</label>
        <li><input type="text" name="alamat" id="alamat"></li>
      </ul>
      <ul>
        <label for="barang">Barang :</label>
        <li><input type="text" name="barang" id="barang"></li>
      </ul>
      <ul>
        <li><button type="submit" name="submit">tambah data</button></li>
      </ul>
    </form>
  </body>
</html>
