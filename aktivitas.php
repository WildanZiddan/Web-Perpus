<?php
session_start();
include("connection.php");
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/aktivitas.css">
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
              <?php } ?>
              <li><a href="home.php">Beranda</a></li>
              <li><a href="profil.html">Profil</a></li>
              <li><a href="kategori.html">Kategori</a></li>
              <li><a href="aktivitas.html">Aktivitas</a></li>
            </ul>
          </nav>
      </div>

      <div class="galeri">
      </div>
</body>
</html>