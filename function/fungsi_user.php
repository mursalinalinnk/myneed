<?php


	include "../include/config.php";
//------ fungsi kebutuhan pokok------
	function tambahkpok($kode_kpok, $uname_userkpok, $nama_kpok, $jenis_kpok, $jumlah_kpok, $harga_kpok, $note_kpok){
		$sql="INSERT INTO tb_kpok(kode_kpok,uname_userkpok,nama_kpok,jenis_kpok,jumlah_kpok,harga_kpok,note_kpok)
				VALUES('$kode_kpok','$uname_userkpok','$nama_kpok','$jenis_kpok','$jumlah_kpok','$harga_kpok','$note_kpok')";
		$hasil=mysql_query($sql);
		return ($hasil);
	}

	function tampilkpok(){
		// nanti tambahlan berdasarkan kode user
		// $data=array();
		$sql="SELECT * FROM tb_kpok WHERE uname_userkpok = '$_SESSION[username]' ";
			$hasil=mysql_query($sql);
			while ($row=mysql_fetch_array($hasil)) {
			echo "
					<tr>
						<td>$row[kode_kpok]</td>
						<td>$row[nama_kpok]</td>
						<td>$row[jenis_kpok]</td>
						<td>$row[jumlah_kpok]</td>
						<td>$row[harga_kpok]</td>
						<td>$row[note_kpok]</td>
					</tr>
			";
			}
		return ($hasil);
	}

	function updatekpok($kode_kpok, $uname_userkpok, $nama_kpok, $jenis_kpok, $jumlah_kpok, $harga_kpok, $note_kpok){
		$sql="UPDATE tb_kpok SET  uname_userkpok='$uname_userkpok',nama_kpok='$nama_kpok', jenis_kpok='$jenis_kpok', jumlah_kpok='$jumlah_kpok', harga_kpok='$harga_kpok', note_kpok='$note_kpok'
		WHERE kode_kpok='$kode_kpok' ";
		$hasil=mysql_query($sql);
	}

	function hapuskpok($kode_kpok){
		$sql="DELETE FROM tb_kpok WHERE kode_kpok='$kode_kpok'";
		$hasil=mysql_query($sql) or die(mysql_error());
		return ($hasil);
	}



//------ fungsi kebutuhan sekond------
	function tambahksek($kode_ksek, $nama_ksek, $jenis_ksek, $jumlah_ksek, $harga_ksek, $note_ksek){
		$sql="INSERT INTO tb_ksek(kode_ksek,nama_ksek,jenis_ksek,jumlah_ksek,harga_ksek,note_ksek)
				VALUES('$kode_ksek','$nama_ksek','$jenis_ksek','$jumlah_ksek','$harga_ksek','$note_ksek')";
		$hasil=mysql_query($sql);
		return ($hasil);
	}

	
	function tampilksek(){
	// nanti tambahlan berdasarkan kode user
	// $data=array();
	$sql="SELECT * FROM tb_ksek WHERE uname_userksek = '$_SESSION[username]'";
		$hasil=mysql_query($sql);
		while ($row=mysql_fetch_array($hasil)) {
		echo "
				<tr>
					<td>$row[kode_ksek]</td>
					<td>$row[nama_ksek]</td>
					<td>$row[jenis_ksek]</td>
					<td>$row[jumlah_ksek]</td>
					<td>$row[harga_ksek]</td>
					<td>$row[note_ksek]</td>
				</tr>
		";
		}
	return ($hasil);
	}

	function updateksek($kode_ksek, $nama_ksek, $jenis_ksek, $jumlah_ksek, $harga_ksek, $note_ksek){
		$sql="UPDATE tb_ksek SET  nama_ksek='$nama_ksek', jenis_ksek='$jenis_ksek', jumlah_ksek='$jumlah_ksek', harga_ksek='$harga_ksek', note_ksek='$note_ksek'
		WHERE kode_ksek='$kode_ksek' ";
		$hasil=mysql_query($sql);
	}

	function hapusksek($kode_ksek){
		$sql="DELETE FROM tb_ksek WHERE kode_ksek='$kode_ksek'";
		$hasil=mysql_query($sql) or die(mysql_error());
		return ($hasil);
	}
?>