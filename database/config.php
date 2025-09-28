<?php
$servername = "localhost";  // server XAMPP
$username_db = "root";      // default user MySQL di XAMPP
$password_db = "";          // default password kosong
$database = "tokonafa";     // nama database kamu

// buat koneksi
$conn = new mysqli($servername, $username_db, $password_db, $database);

// cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
