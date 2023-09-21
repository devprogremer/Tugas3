<!DOCTYPE html>
<html>
<head>
   <title>Halaman admin - www.malasngoding.com</title>
</head>
 <body>
  <?php 
  session_start();

 // cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
 header("location:index.php?pesan=gagal");
} 
?>

<h1>halaman login</h1>
<p>halo<b><?php echo $_SESSION['username'];?></b>Anda telah login sebagai<b><?php 
echo $_SESSION['level'];?>
</b>.</p>
<a href="logout.php">LOGOUT</a>
  <br/>
  <br/>

<a>membuat login multi level Dengan PHP</a>
</body>
</html>
