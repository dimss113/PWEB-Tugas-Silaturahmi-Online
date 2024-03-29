<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Contoh Tabel HTML dan CSS</title>
	<style>
		body {
			background-color: #f2f2f2;
		}
		body{
    width: 100%;
    height: 100vh;
    background-position: bottom;
    background-size: center;
    position: relative;
    background-image: url(../images/image1.png);
    background-size: cover;
    background-repeat: no-repeat;
}

		table {
			border-collapse: collapse;
			width: 100%;
			max-width: 800px;
			margin: 50px auto;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			border-radius: 10px;
		}

		th, td {
			padding: 15px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #007bff;
			color: #fff;
			font-weight: bold;
		}

		tr:hover {
			background-color: #f5f5f5;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
		</thead>
		<tbody>
		 <?php
    $sql = "SELECT * FROM pejabat_login";
    $query = mysqli_query($db, $sql);

    while ($siswa = mysqli_fetch_array($query)) {
      echo "<tr>";

      echo "<td>" . $siswa['id'] . "</td>";
      echo "<td>" . $siswa['username'] . "</td>";
      echo "<td>" . $siswa['password'] . "</td>";
      echo "</tr>";
    }
    ?>
		</tbody>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

  </table>


  	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>NoTelp</th>
				<th>Pesan</th>
			</tr>
		</thead>
		<tbody>
		 <?php
        $sql = "SELECT * FROM pesan_warga";
        $query = mysqli_query($db, $sql);

        while ($siswa = mysqli_fetch_array($query)) {
          echo "<tr>";

          echo "<td>" . $siswa['nama'] . "</td>";
          echo "<td>" . $siswa['nomor'] . "</td>";
          echo "<td>" . $siswa['pesan'] . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
      <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    
    </table>
</body>
</html>