<?php
// koneksi ke database
$conn = mysqli_connect("localhost","phpmyadmin","Ydldsn1980","phpdasar");
// mengambil data table dari database.
$result = mysqli_query($conn,"SELECT * FROM agen");
if (!$result) {
  echo mysqli_error($conn);
  // code...
  // 4 cara ambil isi dari table / bisa disebut juga fetch dari object result
  // 1. mysqli_fetch_row(); = menampilkan satu baris horizontal/mengembalikan array numerik
  // 2. mysqli_fetch_assoc(); = menampilkan / mengembalikan array assosiativ
  // 3. mysqli_fetch_array(); = multi fungsi. bisa numerik bisa assosiativ. tapi data menjadi double
  // 4. mysqli_fetch_object(); = mengambil data menggunakan object dengan cara :
  // contoh : $agen->nama
}
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
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No.</th>
        <th>aksi</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Barang</th>
      </tr>
      <?php $i = 1 ?>
      <?php while ($row = mysqli_fetch_assoc($result)) :?>
      <tr>
        <td><?= $i;  ?></td>
          <td>
            <a href="#">ubah</a>
            <a href="#">hapus</a>
          </td>
        <td><?= $row["nama_agen"]; ?></td>
        <td><?= $row["alamat"]; ?></td>
        <td><?= $row["barang"]; ?></td>
      </tr>
      <?php $i++ ?>
    <?php  endwhile;?>
    </table>
  </body>
</html>
