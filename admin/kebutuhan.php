
<?php

session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut..
}
//cek level user
// if($_SESSION['sebagai']!="mahasiswa"){ die("Anda bukan mahasiswa");}//jika bukan admin jangan lanjut

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>kebutuhan page</h2>
</body>
</html>