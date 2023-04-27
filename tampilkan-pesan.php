<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Message App</title>
    <style>
      body{
        width: 100%;
        height: 100vh;
        background-position: bottom;
        background-size: center;
        position: relative;
        background-image: url(images/image1.png);
        background-size: cover;
        background-repeat: no-repeat;
    }
      </style>
    <link font-family: "Montserrat" , sans-serif;
      href="https://fonts.googleapis.com/css?family=McLaren|Montserrat&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/viewStyles.css" />
  </head>

  <body>
    <div id="root">
      <header>
        <h1>Message</h1>
      </header>
      <?php
        $sql = "SELECT * FROM pesan_warga";
        $query = mysqli_query($db, $sql);
      ?>
        <?php
        while ($pesan = mysqli_fetch_array($query)): ?>
        <div class="note">
          <?php
          echo "<h1>" . $pesan['nama'] . " " .$pesan['nomor'] . "</h1>";
          echo "<p>" . $pesan['pesan'] . "</p>";
          ?>
        </div>
        <?php endwhile; ?>
      <footer>
        <p>Copyright ⓒ 2023</p>
      </footer>
    </div>
  </body>

</html>