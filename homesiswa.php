<?php
session_start();
include("connection.php");
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/home.css">

    <script  text="text/javascript">
      window.history.forward();
    </script>
</head>
<body>
  <div class="navbar">
    <nav >
        <div class="logo">
          <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <ul class="nav-links">
          <?php if ($_SESSION['username'] === "admin") { ?>
          <li><a href="admin.php">Admin</a></li>
          <?php } ?>
          <li><a href="home.php">Beranda</a></li>
          <li><a href="profil.php">Profil</a></li>
          <li><a href="kategori.php">Kategori</a></li>
          <li><a href="aktivitas.php">Aktivitas</a></li>
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