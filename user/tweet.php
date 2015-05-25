


<form action="../include/tweetcrud.php" method="POST">
<table>
<tr>
	
	<input type="hidden" name="kode_tweet">
	<input type="hidden" name="uname_usertweet" value="<?php echo $user->uname_user;?>">
	<textarea name="tweet" placeholder="bagaimana keuanganmu hari ini ..."></textarea>
	<input type="date" class="form-control"  name="tgl_tweet">

</tr>
<tr>
	<input type="submit" name="tambahtweet" value="tweet" >
	<input type="submit" name="hapus" value="hapus">
</tr>
</table>
</form>