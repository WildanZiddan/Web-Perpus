<?php
session_start();
include("connection.php");
if (!isset($_SESSION['admin_username'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/home.css">
</head>
<body>
  <div class="navbar">
    <nav >
        <div class="logo">
          <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <ul class="nav-links">
        <?php if (in_array("admin", $_SESSION['admin_access'])) { ?>
        <li><a href="admin.php">Admin</a></li>
    <?php } elseif (in_array("guru", $_SESSION['admin_access']) || in_array("siswa", $_SESSION['admin_access'])) { ?>
        <!-- Jika pengguna guru atau siswa, sembunyikan elemen "Admin" -->
    <?php } ?>
          <li><a href="home.php">Beranda</a></li>
          <li><a href="profil.html">Profil</a></li>
          <li><a href="kategori.html">Kategori</a></li>
          <li><a href="aktivitas.html">Aktivitas</a></li>
          <li><a href="logout.php">Keluar</a></li>
        </ul>
      </nav>
  </div>
    

      <div class="home">
        <h1 class="title">Selamat datang di</h1>
        <p class="subtitle">Ini adalah website peminjaman buku <br> yang disediakan oleh perpustakaan</p>
      </div>
</body>
</html>