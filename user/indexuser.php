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
<title>user</title>
</head>
<body>
	<button><a href="../logout.php">logout</a></button>
	<?php echo "<h3>MY need : ".$_SESSION['username']."</h3>";?>
	<?php echo "<h3>MY need : ".$_SESSION['kode_user']."</h3>";?>

	<!-- read kebutuhan pokok -->
	<div style="float:left;padding: 0 50px;">
	<center>
		<h2>daftar kebutuhan bulanan</h2>
		<table style="border: 1 solid black";>
			<tr >
				<!-- <th style="border: 1px solid black"; >no</th> -->
				<th style="border: 1px solid black"; >kode kpok</th>
				<th style="border: 1px solid black";>nama</th>
				<th style="border: 1px solid black";>jenis</th>
				<th style="border: 1px solid black";>jumlah</th>
				<th style="border: 1px solid black";>harga</th>
				<th style="border: 1px solid black";>note</th>
			</tr>
			<?php

			include "fungsi_user.php";
			tampilkpok();
			?>

		</table>

		<h3>total harga:<?php
		
			$sql="SELECT SUM(harga_kpok) AS total FROM tb_kpok"; 
			$hasil = mysql_query($sql); 
			$r=mysql_fetch_assoc($hasil); 
			echo $r['total'];
		?></h3>
		<h3>last update:<?php?></h3>
		

		<h2>tambah kebutuhan bulanan</h2>
		<form action="prosescruduser.php" method="POST">
			<table>
				<tr>
					<td>kpok</td>
					<td><input type="text" name="kode_kpok"></td>
				</tr>	
				<tr>
					<td>nama</td>
					<td><input type="text" name="nama_kpok"></td>
				</tr>
				<tr>
					<td>jenis</td>
					<td>
					<select name="jenis_kpok">
						<option value="no">--</option>
						<option value="utang">utang</option>
						<option value="tabungan akhirat">tabungan akhirat</option>
						<option value="kampus">kampus</option>
						<option value="makan">makan</option>
					</select></td>
				</tr>	
				<tr>
					<td>jumlah</td>
					<td><input type="text" name="jumlah_kpok"></td>
				</tr>	
				<tr>
					<td>harga</td>
					<td><input type="text" name="harga_kpok"></td>
				</tr>
				<tr>
					<td>note</td>
					<td><input type="text" name="note_kpok"></td>
				</tr>
			</table>
			<input type="submit" name="tambah" value="tambah">
			<input type="submit" name="update" value="update">
			<input type="submit" name="hapus" value="hapus">
			<input type="reset">
		</form>
	</center>
	</div>


	<!-- read kebutuhan sekunder -->
	<!-- <hr>  -->
	<div style="float:left ;padding: 0 50px;">
	<center>
		<h2>daftar kebutuhan sekunder</h2>
		<table style="border: 1 solid black";>
			<tr >
				<!-- <th style="border: 1px solid black"; >no</th> -->
				<th style="border: 1px solid black"; >kode ksek</th>
				<th style="border: 1px solid black";>nama</th>
				<th style="border: 1px solid black";>jenis</th>
				<th style="border: 1px solid black";>jumlah</th>
				<th style="border: 1px solid black";>harga</th>
				<th style="border: 1px solid black";>note</th>
			</tr>
			<?php
			tampilksek();
			?>
		</table>
		<h3>total harga:<?php
		
			$sql="SELECT SUM(harga_ksek) AS total FROM tb_ksek"; 
			$hasil = mysql_query($sql); 
			$r=mysql_fetch_assoc($hasil); 
			echo $r['total'];
		?></h3>
		<h3>last update:<?php?></h3>

		<h2>tambah kebutuhan sekunder</h2>
		<form action="prosescruduser.php" method="POST">
			<table>
				<tr>
					<td>kpok</td>
					<td><input type="text" name="kode_ksek"></td>
				</tr>	
				<tr>
					<td>nama</td>
					<td><input type="text" name="nama_ksek"></td>
				</tr>
				<tr>
					<td>jenis</td>
					<td>
					<select name="jenis_ksek">
						<option value="no">--</option>
						<option value="pakaian">pakaian</option>
						<option value="kampus">kampus</option>
					</select></td>
				</tr>	
				<tr>
					<td>jumlah</td>
					<td><input type="text" name="jumlah_ksek"></td>
				</tr>	
				<tr>
					<td>harga</td>
					<td><input type="text" name="harga_ksek"></td>
				</tr>
				<tr>
					<td>note</td>
					<td><input type="text" name="note_ksek"></td>
				</tr>
			</table>
			<input type="submit" name="tambahksek" value="tambah">
			<input type="submit" name="updateksek" value="update">
			<input type="submit" name="hapusksek" value="hapus">
			<input type="reset">
		</form>
	</center>
	</div>


</body>
</html>

