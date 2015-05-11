<html>
	<head></head>
	<style type="text/css">
	
	</style>
	<body>
		<center>
		<h2>login form</h2>
			<form action="proseslogin2.php" method="POST">
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