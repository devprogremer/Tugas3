<! DOCTYPE html>
<html>
<head>
  <title>Halaman Siswa</title>
</head>
<body>

    <?php
    session_start();

   // cek apakah yang mengakses halasan ini sudah login 
if ($_SESSION['level']==""){
 header("location:index.php?pesan-pagal");
 }

?>
<h1>halaman Pegawai</h1>

<p>Halo <b>
<?php echo $_SESION['username']; 
?></b> Anda telah login sebagai <b>
<?php echo $_SESSION['level'];
?></b>.</p>
<a href="logout.php">LOGOUT</a>

<br/>
<br/>
<a>Membuat Multi Level Dengan PHP</a>
</body>
</html>
