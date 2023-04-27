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
    <div class="container">
      <div class="formbox">
        <div class="box">
          <h1 id="title">Masuk</h1>
          <form action="proses-login.php" id="form" method="post">
            <div class="input-group">
              <div class="input-field" id="nameField">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Username" id="name" name="username" required>
              </div>

              <div class="input-group">
                <div class="input-field">
                  <i class="fa-solid fa-lock"></i>
                  <input type="password" placeholder="Password" id="telp" name="password" required>
                </div>
                <div class="signin">
                  <button type="button" id="switchBtn">Akses User</button>
                </div>

                <div class="btn-field">
                  <button type="submit" id="submitBtn" name="submitAdmin">Masuk</button>
                </div>
              </div>
          </form>
        </div>

      </div>
    </div>
  </body>

  <script>

    let submitBtn = document.getElementById("submitBtn")
    let msgBtn = document.getElementById("btn-submit-msg");
    let switchBtn = document.getElementById("switchBtn")
    let nameField = document.getElementById("nameField")
    let name = document.getElementById("name")
    let title = document.getElementById("title")
    let text = document.getElementById("success-msg")
    let email = document.getElementById("email")
    let telp = document.getElementById("telp")
    let alert = document.getElementById("alert")

    switchBtn.onclick = function()
    {
      window.location.href = "index.php";
    }

  </script>

</html>