<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['register'])) {

  // ambil data dari formulir
  $username = $_POST['name'];
  $password = $_POST['password'];

  // buat query
  $sql = "INSERT INTO pejabat_login (username, password) VALUE ('$username', '$password')";
  $query = mysqli_query($db, $sql);

  // apakah query simpan berhasil?
  if ($query) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: status.php?status=suksesRegister');
  } else {
    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
    header('Location: status.php?status=gagalRegister');
  }


} else {
  die("Akses dilarang...");
}
?>