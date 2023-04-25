<!DOCTYPE html>
<html>
<head>
  <title>Formulir Registrasi</title>
  <style>
    body {
      background-color: #f2f2f2;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
      max-width: 500px;
      margin: 0 auto;
    }

    h1 {
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 20px;
      font-size: 16px;
    }

    button[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #3e8e41;
    }

    .error-message {
      color: #ff0000;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <h1>Formulir Registrasi</h1>
  <form action="proses-registrasi.php" method="post">
    <label for="name">Nama:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    <label for="confirm-password">Konfirmasi Password:</label>
    <input type="password" name="confirm-password" id="confirm-password" required>

    <!-- <input type="submit" value="Daftar" name="register"> -->
    <button type="submit" name="register">Daftar</button>


    <div class="error-message"></div>
    <div class="tombol">
      <p>Sudah punya akun? <a href="index.php">Login</a></p>
    </div>
  </form>


  <!-- create tombol login if user has account -->

  <!-- <script>
    document.querySelector("form").addEventListener("submit", function(e) {
      e.preventDefault();

      const name = this.querySelector("#name").value;
      const email = this.querySelector("#email").value;
      const password = this.querySelector("#password").value;
      const confirmPassword = this.querySelector("#confirm-password").value;

      if (password !== confirmPassword) {
        this.querySelector(".error-message").textContent = "Password tidak sama.";
      } else {
        // TODO: Kirim data ke server menggunakan AJAX
        this.reset();
        this.querySelector(".error-message").textContent = "";
        alert("Registrasi berhasil!");
      }
    });
  </script> -->
</body>
</html>