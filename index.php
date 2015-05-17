<?PHP include "include/config.php";?>
<html>
	<head><title>selamat datang di  <?php  echo $site ['judul'];?></title>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"><!--font awesome-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><!--bootstrap-->
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--<link rel="stylesheet" type="text/css" href="css/cerulean-bootstrap.min.css">bootstrap tema -->
		<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
	</head>
	<body>
	
		<center>
		<h2>login form</h2>
			<form action="include/proseslogin2.php" method="POST">
				<table>
				<tr>

					<th>jenisuser</th>
					<td>
					<select name="sebagai">
						<option value="admin">admin</option>
						<option value="user">user</option>
						<option value="guest">guest</option>
					</select>
					</td>
				 </tr>
				 <tr>
					<th>username</th>
					<td><input type="text" id="username" name="username" placeholder="username"></td>
				</tr>
				<tr>
					<th>password</th>
					<td><input type="text" id="password" name="password" placeholder="*****"></td>
				</tr>
				</table>
				<input type="submit" value="login" name="login">
				<input type="reset">
			</form>
		</center>
	</body>
</html>