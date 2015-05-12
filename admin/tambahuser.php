
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
	<head></head>
	<body>

	<button><a href="index.php">home</a></button>
	<button><a href="../logout.php">logout</a></button>
		<!-- read kebutuhan pokok -->
	<center>
		<h2>daftar user</h2>
		<table style="border: 1 solid black";>
			<tr >
				<!-- <th style="border: 1px solid black"; >no</th> -->
				<th style="border: 1px solid black"; >kode user</th>
				<th style="border: 1px solid black";>username</th>
				<th style="border: 1px solid black";>password</th>
				<!-- <th style="border: 1px solid black";>lihat kebutuhan</th> cukup  click nama-->
				<th style="border: 1px solid black";>register Date</th>
			</tr>
			<?php

			include "fungsi_admin.php";
			tampiluser();
			?>

		</table>

		<h2>tambah user</h2>
		<form action="prosescrudadmin.php" method="POST">
			<tabl border="1";>
				<tr>
					<td>kode user</td>
					<td><input type="text" name="kode_user"></td>
				</tr>	
				<tr>
					<td>username</td>
					<td><input type="text" name="uname_user"></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="text" name="pass_user"></td>
				</tr>	
				<!-- <tr><td>register_Date</td><td><input type="date" name="registration_Date"></td></tr>	 tambahkan otoatis di db -->
			</table>
			<input type="submit" name="tambah" value="tambah">
			<input type="submit" name="update" value="update">
			<input type="submit" name="hapus" value="hapus">
			<input type="reset">
		</form>
	</center>
	</body>
</html>