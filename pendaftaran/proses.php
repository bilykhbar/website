<?php
// process.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesan Terkirim</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #121212;
      color: #fff;
    }
    .card {
      background-color: #1f1f1f;
      border: 1px solid #333;
    }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">

<div class="card p-4 text-center" style="max-width: 500px;">
  <h2>✅ Pesan Anda Berhasil Dikirim!</h2>
  <p><strong>Nama:</strong> <?php echo $name; ?></p>
  <p><strong>Email:</strong> <?php echo $email; ?></p>
  <p><strong>Pesan:</strong> <?php echo $message; ?></p>
  <a href="index.php" class="btn btn-warning mt-3">Kembali ke Halaman Utama</a>
</div>

</body>
</html>
