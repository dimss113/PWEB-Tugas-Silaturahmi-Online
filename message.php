<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['message_submit'])) {

  // ambil data dari formulir
  $nama = $_POST['nama'];
  $nomor = $_POST['notelp'];
  $pesan = $_POST['message'];

  // buat query
  $sql = "INSERT INTO pesan_warga (nama, nomor, pesan) VALUE ('$nama', '$nomor', '$pesan')";
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