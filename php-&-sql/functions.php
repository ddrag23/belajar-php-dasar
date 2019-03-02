<?php
// koneksi ke database
$conn = mysqli_connect("localhost","phpmyadmin","Ydldsn1980","phpdasar");

//menampilkan data dalam database
function query($query){
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows=[];
  while ($row = mysqli_fetch_assoc($result)) {
    // code...
    $rows[] = $row;
  }
  return $rows;
}

// menambahkan data ke database
function tambah($data){
  global $conn;
    $nama_agen = htmlspecialchars($data["nama_agen"]);
    $alamat =htmlspecialchars($data["alamat"]);
    $barang = htmlspecialchars($data ["barang"]);
//     // menambahkan data ke dalam Database
    $query = "INSERT INTO agen VALUES ('','$nama_agen','$alamat','$barang')";
    mysqli_query($conn, $query);
    die;
    // fungsi affected rows untuk menampilkan pesan error pada database
    return mysqli_affected_rows($conn);
}

function hapus($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM agen WHERE id =$id" );
  return mysqli_affected_rows($conn);
}
 ?>
