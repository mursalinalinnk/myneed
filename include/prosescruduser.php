<!-- proses.php -->
<?php

	include "../function/fungsi_user.php";
	// include "../koneksi.php";
	// $kode_kpok = $_POST['kode_kpok'];

	// kpok
	if (isset($_POST['tambah'])){
		tambahkpok(
			$_POST['kode_kpok'],
			$_POST['uname_userkpok'],
			$_POST['nama_kpok'],
			$_POST['jenis_kpok'],
			$_POST['jumlah_kpok'],
			$_POST['harga_kpok'],
			$_POST['note_kpok']);
		header("location:../user/../user/index.php");
	}
	elseif (isset($_POST['update'])){
		updatekpok(
			$_POST['kode_kpok'],
			$_POST['uname_userkpok'],
			$_POST['nama_kpok'],
			$_POST['jenis_kpok'],
			$_POST['jumlah_kpok'],
			$_POST['harga_kpok'],
			$_POST['note_kpok']);
		header("location:../user/index.php");
	}
	elseif (isset($_POST['hapus'])){
		hapuskpok($_POST['kode_kpok']);
	header("location:../user/index.php");
	}

	// ksek

	if (isset($_POST['tambahksek'])){
		tambahksek(
			$_POST['kode_ksek'],
			$_POST['nama_ksek'],
			$_POST['jenis_ksek'],
			$_POST['jumlah_ksek'],
			$_POST['harga_ksek'],
			$_POST['note_ksek']);
		header("location:../user/index.php");
	}
	elseif (isset($_POST['updateksek'])){
		updateksek(
			$_POST['kode_ksek'],
			$_POST['nama_ksek'],
			$_POST['jenis_ksek'],
			$_POST['jumlah_ksek'],
			$_POST['harga_ksek'],
			$_POST['note_ksek']);
		header("location:../user/index.php");
	}
	elseif (isset($_POST['hapusksek'])){
		hapusksek($_POST['kode_ksek']);
	header("location:../user/index.php");
	}


	?>