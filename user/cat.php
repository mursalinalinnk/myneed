<?php

session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut..
}

include "../function/fungsi_user.php";
//cek apakah user sudah login

$sql_ngambil_user = mysql_query( "SELECT * FROM tb_user WHERE uname_user = '$_SESSION[username]' ");
$user=mysql_fetch_object($sql_ngambil_user);
//cek level user
// if($_SESSION['sebagai']!="mahasiswa"){ die("Anda bukan mahasiswa");}//jika bukan admin jangan lanjut


?>
<html>
<head>
	<title><?php  echo $site ['judul'];?></title>
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"><!--font awesome-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"><!--bootstrap-->
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<!--<link rel="stylesheet" type="text/css" href="css/cerulean-bootstrap.min.css">bootstrap tema -->
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>


	<button><a href="../include/logout.php">logout</a></button>
	<button><a href="index.php">home</a></button>

<h3>categori kebutuhan</h3>
<table>
	
<?php tampilkatkeb(); ?>
</table>


<form action="../include/prosescrudkatkeb.php" method="POST">
	<table>
		<tr>
			<td>kode katkeb</td>
			<td><input type="text" name="kode_katkeb"></td>
		</tr>
		<tr>
			<td>user katkeb</td>
			<td><input type="hidden" name="uname_userkatkeb" value="<?php echo $user->uname_user;?>"></td>
		</tr>
		<tr>
			<td>nama kategori kebutuhan yang baru : </td>
			<td><input type="text" name="nama_katkeb"></td>
		</tr>
	</table>
			<input type="submit" name="tambahkatkeb" value="tambah">
			<!-- <input type="submit" name="updatekatkeb" value="update"> -->
			<input type="submit" name="hapuskatkeb" value="hapus">
</form>

</body>
</html>