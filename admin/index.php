<?php

session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut..
}
//cek level user
// if($_SESSION['sebagai']!="mahasiswa"){ die("Anda bukan mahasiswa");}//jika bukan admin jangan lanjut

?>

<html>
<head>
<title>admin</title>
</head>
<body>
	<button><a href="../include/logout.php">logout</a></button>
	<button><a href="tambahuser.php">lihat user</a></button>
	<button><a href="kebutuhan.php">kebutuhan</a></button>

	<?php echo "<h3>Welcome ".$_SESSION['username']."</h3>";?>

	<!-- read kebutuhan pokok -->
	<center>

	</center>


</body>
</html>

