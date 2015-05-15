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
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
			<!-- <td><h4>kode kategori kebutuhan</h4></td> -->
			<td><input type="hidden" name="kode_katkeb" placeholder="hanya untuk menghapus"></td>
		</tr>
		<tr>
			<!-- <td>user katkeb</td> -->
			<td><input type="hidden" name="uname_userkatkeb" value="<?php echo $user->uname_user;?>"></td>
		</tr>
		<tr>
			<td><h4>nama kategori kebutuhan yang baru : </h4></td>
			<td><input type="text" name="nama_katkeb"></td>
		</tr>
	</table>
			<input type="submit" name="tambah" value="tambah">
			<input type="submit" name="hapus" value="hapus">
</form>

</body>
</html>