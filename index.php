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
                <form method="post" action="index.php" id="form">
                    <div class="input-group" >
                        <div class="input-field" id="nameField">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="username" placeholder="Nama" id="name" required>
                        </div>
                       
                        <div class="input-group">
                            <div class="input-field">
                                <i class="fa-solid fa-lock"></i>
                                <input type="Phone Number" name="password" placeholder="No. Telepon" id="telp" required>
                        </div>
                        <div class="signin">
                            <button type="button" id="switchBtn">Akses Admin</button>
                        </div>
                        
                        <div class="btn-field">
                            <button type="submit" name="submit" id="submitBtn">Masuk</button>
                        </div>
                    </div>
                </form>
            </div>
       
        </div>
    </div>
</body>

<script>
    
    let submitBtn = document.getElementById("submitBtn")
    let switchBtn = document.getElementById("switchBtn")
    let nameField = document.getElementById("nameField")
    let name = document.getElementById("name")
    let title = document.getElementById("title")
    let text = document.getElementById("text")
    let email = document.getElementById("email")
    let telp = document.getElementById("telp")
    let alert = document.getElementById("alert")
    
    switchBtn.onclick = function(){
            if (switchBtn.innerHTML == "Akses Admin") {
                console.log("masuk user");
                name.value = ""
                telp.value = ""
                name.placeholder = "Username"
                telp.placeholder = "Password"
                telp.type = "Password"
                switchBtn.innerHTML = "Akses User"
            } 
        else if (switchBtn.innerHTML == "Akses User") {
            console.log("masuk admin");
            name.value = ""
            telp.value = ""
            name.placeholder = "Nama"
            telp.placeholder = "No Telepon"
            telp.type = "Phone Number"
            switchBtn.innerHTML = "Akses Admin"
            }
    }

    submitBtn.onclick = function()
    {
        if (switchBtn.innerHTML == "Akses User")
        {
            <?php
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $db = mysqli_connect('localhost', 'root', '', 'silaturahmi');

                $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
                $result = mysqli_query($db, $query);

                if (mysqli_num_rows($result) == 1) {
                    $_SESSION['username'] = $username;
                    header('location: contact-book.php');
                } 
            }
            ?>
        }
        if (switchBtn.innerHTML == "Akses User")
        {
            <?php
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $db = mysqli_connect('localhost', 'root', '', 'silaturahmi');

                $query = "SELECT * FROM pejabat_login WHERE username='$username' AND password='$password'";
                $result = mysqli_query($db, $query);

                if (mysqli_num_rows($result) == 1) {
                    $_SESSION['username'] = $username;
                    header('location: tampilkan-pesan.php');
                } 
            }
            ?>
        }
    }
 
</script>
</html>



