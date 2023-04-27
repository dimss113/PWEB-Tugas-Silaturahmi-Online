<?php
include("config.php");

$nama = "";
$notelp = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = $_POST['username'];
  $notelp = $_POST['number'];
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>
    <div class="success-msg" id="success-msg" style="display: block;">
      <div class="success-img">
        <img src="images/image3.png" alt="">
      </div>
      <div class="message-box">

        <div class="catalog">
          <img src="images/image4.png" alt="">
        </div>
        <div class="message">
          <h1>Pesan untuk Cak Ery</h1>
          <form action="message.php" id="form-submit" method="post">
            <input type="hidden" id="namaMsg" name="nama" value="<?php echo $nama; ?>">
            <input type="hidden" id="notelpMsg" name="notelp" value="<?php echo $notelp; ?>">
            <textarea rows="10" cols="50" name="message">
                    </textarea>
            <button type="submit" name="message_submit" id="btn-submit-msg">submit</button>
          </form>
        </div>
      </div>
    </div>
  </body>

  <script>

  </script>

</html>