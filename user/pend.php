<?php

session_start();
//cek apakah user sudah login
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut..
}
include "../function/fungsi_user.php";
$sql_ngambil_user = mysql_query( "SELECT * FROM tb_user WHERE uname_user = '$_SESSION[username]' ");
$user=mysql_fetch_object($sql_ngambil_user);

?>
	<button><a href="../include/logout.php">logout</a></button>
	<button><a href="index.php">home</a></button>
<h3>pendapatan</h3>
<table>
<tr>
	<th>kode pendapatan |</th>
	<th>nama pendapatan |</th>
	<th>jumlah pendapatan |</th>
	<th>tgl penerimaan</th>
</tr>

<?php
tampilpend();
?>
</table>

<form action="../include/prosescrudpend.php" method="POST">
	<table>
		<tr>	
				<td>kode pendapatan</td>
				<td><input type="text" name="kode_pend"></td>
		</tr>
		<tr>

				<!-- <td>uname_userpend</td> -->
				<input type="hidden" name="uname_userpend" value="<?php echo $user->uname_user;?>">
		</tr>
		<tr>
				<td>nama pendapatan</td>
				<td><input type="text" name="nama_pend"></td>
		</tr>
		<tr>
				<td>jumlah pnedapatan</td>
				<td><input type="text" name="jumlah_pend"></td>
		</tr>
		<tr>
				<td>tanggal penerimaan</td>
				<td><input type="date" name="tanggal_pend"></td>
		</tr>
	</table>
				<input type="submit" name="tambahpend" value="tambah">
				<input type="submit" name="updatepend" value="update">
				<input type="submit" name="hapuspend" value="hapus">
				<input type="reset">
</form>



<!-- /////////////////////////////////////////////// -->
<h3>tabungan</h3>

<!-- tampil tabungan -->
<table>
	<tr>
		<th>kode tabungan |</th>
		<th>nama tabungan |</th>
		<th>jumlah tabungan |</th>
		<th>update tabungan |</th>
		<th>note</th>
	</tr>

	<?php tampiltab(); ?>
</table>

<!-- tambah tabungan -->
<form action="../include/prosescrudpend.php" method="POST">
	<table>
		<tr>
			<td>kode tabungan</td>
			<td><input type="text" name="kode_tab"></td>
		</tr>
		<tr>
			<!-- <td>uname_usertab</td> -->
			<td><input type="hidden" name="uname_usertab" value="<?php echo $user->uname_user;?>"></td>
		</tr>
		<tr>
			<td>nama tabungan</td>
			<td><input type="text" name="nama_tab"></td>
		</tr>
		<tr>
			<td>jumlah</td>
			<td><input type="text" name="jumlah_tab"></td>
		</tr>
		<tr>
			<td>update</td>
			<td><input type="date" name="update_tab"></td>
		</tr>
		<tr>
			<td>note</td>
			<!-- <td><textarea name="note_tab"></textarea></td> -->
			<td><input type="text" name="note_tab"></td>
		</tr>
	</table>
				<input type="submit" name="tambahtab" value="tambah">
				<input type="submit" name="updatetab" value="update">
				<input type="submit" name="hapustab" value="hapus">
				<input type="reset">
</form>
