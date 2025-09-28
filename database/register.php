<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Form Pendaftaran Akun</title>
</head>
<body>
  <h2>Daftar Akun Baru</h2>
  <form method="POST" action="">
    <label>Username:</label>
    <input type="text" name="username" required><br><br>

    <label>Password:</label>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Daftar">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST["username"];
      $password = $_POST["password"];
      
      // enkripsi password
      $password_hashed = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password_hashed')";
      if ($conn->query($sql) === TRUE) {
          echo "<p style='color:green;'>Akun berhasil didaftarkan!</p>";
      } else {
          echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
      }
  }
  ?>
</body>
</html>
