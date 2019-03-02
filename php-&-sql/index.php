<?php
require 'functions.php';
$agen = query("SELECT * FROM agen");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>halaman admin</title>
  </head>
  <body>
    <h1>welcome to admin</h1>
    <br>
    <a href="tambah.php">tambahkan data</a>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No.</th>
        <th>aksi</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Barang</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($agen as $row):?>
      <tr>
        <td><?= $i;  ?></td>
          <td>
            <a href="#">ubah</a>
            <a href="hapus.php?id= <?= $row["id"]; ?>">hapus</a>
          </td>
        <td><?= $row["nama_agen"]; ?></td>
        <td><?= $row["alamat"]; ?></td>
        <td><?= $row["barang"]; ?></td>
      </tr>
      <?php $i++ ?>
    <?php  endforeach;?>
    </table>
  </body>
</html>
