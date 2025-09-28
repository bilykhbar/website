<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
// Inisialisasi variabel error dan data
$nameErr = $emailErr = "";
$name = $email = "";

// Fungsi untuk membersihkan input
function test_input($data) {
  $data = trim($data);              // hapus spasi awal/akhir
  $data = stripslashes($data);      // hapus backslash
  $data = htmlspecialchars($data);  // ubah tag HTML jadi aman
  return $data;
}

// Cek jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Validasi NAME
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // Cek apakah hanya huruf, spasi, tanda ' atau -
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  // Validasi EMAIL
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // Cek format email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}
?>

<h2>Form Validasi dengan PHP</h2>
<p><span class="error">* wajib diisi</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  
  Email: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
// Jika tidak ada error, tampilkan hasil input
if ($_SERVER["REQUEST_METHOD"] == "POST" && $nameErr == "" && $emailErr == "") {
  echo "<h2>Input Anda:</h2>";
  echo "Nama: " . $name;
  echo "<br>";
  echo "Email: " . $email;
}
?>

</body>
</html>
