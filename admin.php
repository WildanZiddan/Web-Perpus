<?php
    session_start();
    if ($_SESSION['username'] !== "admin") {
        header("Location: home.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/admin.css">

</head>
<body>
<div class="navbar">
    <nav >
        <div class="logo">
          <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <ul class="nav-links">
            <li><a href="home.php">Beranda</a></li>
            <li><a href="pelajaran.php">Pelajaran</a></li>
            <li><a href="fiksi.php">Fiksi</a></li>
            <li><a href="biografi.php">Biografi</a></li>
            <li><a href="logout.php">Keluar</a></li>
        </ul>
      </nav>
  </div>    

</body>
</html>