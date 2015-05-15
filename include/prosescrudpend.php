<!-- proses.php -->
<?php

	include "../function/fungsi_user.php";
	// include "../koneksi.php";
	// $kode_kpok = $_POST['kode_kpok'];

	// kpok
	if (isset($_POST['tambahpend'])){
		tambahpend(
			$_POST['kode_pend'],
			$_POST['uname_userpend'],
			$_POST['nama_pend'],
			$_POST['jumlah_pend'],
			$_POST['tanggal_pend']);
		header("location:../user/pend.php");
	}
	elseif (isset($_POST['updatepend'])){
		updatepend(
			$_POST['kode_pend'],
			$_POST['uname_userpend'],
			$_POST['nama_pend'],
			$_POST['jumlah_pend'],
			$_POST['tanggal_pend']);
		header("location:../user/pend.php");
	}
	elseif (isset($_POST['hapuspend'])){
		hapuspend($_POST['kode_pend']);
	header("location:../user/pend.php");
	}

	//////////////////
	// ksek
	//////////////////

	if (isset($_POST['tambahksek'])){
		tambahksek(
			$_POST['kode_ksek'],
			$_POST['uname_userksek'],
			$_POST['nama_ksek'],
			$_POST['jenis_ksek'],
			$_POST['jumlah_ksek'],
			$_POST['harga_ksek'],
			$_POST['note_ksek']);
		header("location:../user/pen.php");
	}
	elseif (isset($_POST['updateksek'])){
		updateksek(
			$_POST['kode_ksek'],
			$_POST['nama_ksek'],
			$_POST['jenis_ksek'],
			$_POST['jumlah_ksek'],
			$_POST['harga_ksek'],
			$_POST['note_ksek']);
		header("location:../user/pen.php");
	}
	elseif (isset($_POST['hapusksek'])){
		hapusksek($_POST['kode_ksek']);
	header("location:../user/pen.php");
	}


	?>