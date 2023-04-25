<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['update_pesan'])) {

  // ambil data dari formulir
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // buat query
  $sql = "INSERT INTO contact_book (nama, email, subject, message) VALUE ('$nama', '$email', '$subject', '$message')";
  $query = mysqli_query($db, $sql);

  // apakah query simpan berhasil?
  if ($query) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: status.php?status=suksesMessage');
  } else {
    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
    header('Location: status.php?status=gagalMessage');
  }


} else {
  die("Akses dilarang...");
}

?>