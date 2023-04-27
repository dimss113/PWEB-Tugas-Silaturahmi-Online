<?php
include("config.php");

if (isset($_POST['submitAdmin'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $db = mysqli_connect('localhost', 'root', '', 'silaturahmi');

  $query = "SELECT * FROM pejabat_login WHERE username='$username' AND password='$password'";
  $result = mysqli_query($db, $query);

  if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header('location: tampilkan-pesan.php');
  }
  else 
  {
    header('location: akses-admin.php');
  }
}
?>