<!DOCTYPE html>
<html>

  <head>
    <title>Ucapan Selamat</title>
    <style>
      body {
        background-color: #f2f2f2;
      }

      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        text-align: center;
        margin-top: 50px;
        border-radius: 10px;
      }

      h1 {
        font-size: 36px;
        margin-bottom: 20px;
      }

      p {
        font-size: 24px;
        margin-bottom: 40px;
      }

      button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      button:hover {
        background-color: #0062cc;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <?php 
      if (isset($_GET['status']))
      {
        if ($_GET['status'] == 'suksesMessage') {
          echo "<h1>selamat!</h1>";
          echo "<p>Anda telah berhasil mengirimkan pesan kepada pejabat.</p>";
          echo "<form action='contact-book.php'>
                  <button>Kembali</button>
                </form>";
        } 
        else if ($_GET['status'] == 'gagalMessage') {
          echo "<h1>gagal!</h1>";
          echo "<p>Anda gagal mengirimkan pesan kepada pejabat.</p>";
          echo "<form action='contact-book.php'>
                  <button>Kembali</button>
                </form>";
        }
        else if($_GET['status'] == 'suksesRegister')
        {
          echo "<h1>selamat!</h1>";
          echo "<p>Anda telah berhasil melakukan registrasi akun.</p>";
          echo "<form action='register.php'>
                  <button>Kembali</button>
                </form>";
        }
        else if($_GET['status'] == 'gagalRegister')
        {
          echo "<h1>gagal!</h1>";
          echo "<p>Anda gagal dalam melakukan registrasi akun.</p>";
          echo "<form action='register.php'>
                  <button>Kembali</button>
                </form>";
        }

      }
      ?>
      <!-- <form action="contact-book.php">
        <button>Kembali</button>
      </form> -->
    </div>
  </body>

</html>