<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gaewebsite Demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #121212;
      color: #fff;
    }
    .navbar {
      background-color: #1f1f1f;
    }
    .navbar-brand {
      font-weight: bold;
      color: #ffb400 !important;
    }
    .card {
      background-color: #1f1f1f;
      border: 1px solid #333;
      transition: transform 0.3s;
    }
    .card:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">⚖ Hercules Law Firm</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link text-light" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<header class="text-center py-5">
  <h1 class="display-4 fw-bold">Bangun Brand Anda dengan Digitalisasi</h1>
  <p class="lead">Website profesional untuk Jasa Hukum, UMKM, dan Personal Branding</p>
</header>

<!-- Content -->
<div class="container my-5">
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card p-3">
        <h4>⚖ Jasa Hukum</h4>
        <p>Tampilkan profil firma hukum, layanan, dan kontak agar lebih dipercaya klien.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-3">
        <h4>🛍 UMKM</h4>
        <p>Website sebagai etalase digital produk Anda untuk menarik lebih banyak pelanggan.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-3">
        <h4>👤 Personal Branding</h4>
        <p>Tingkatkan reputasi dengan menampilkan portofolio, pengalaman, dan karya terbaik.</p>
      </div>
    </div>
  </div>
</div>

<!-- Form -->
<div class="container my-5">
  <h2 class="text-center">Hubungi Kami</h2>
  <form action="process.php" method="POST" class="mx-auto" style="max-width: 600px;">
    <div class="mb-3">
      <label for="name" class="form-label">Nama</label>
      <input type="text" class="form-control" name="name" id="name" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="email" required>
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Pesan</label>
      <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-warning w-100">Kirim</button>
  </form>
</div>

<!-- Footer -->
<footer class="text-center py-3">
  <p>© 2025 Gaewebsite.com – Partner Digitalisasi Brand Anda</p>
</footer>

</body>
</html>
