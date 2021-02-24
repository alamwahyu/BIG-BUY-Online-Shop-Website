<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Untitled Document</title>
</head>

<body>
	<?php
	$id=$_GET['id'];
	include"koneksi.php";
	$select="select*from users where id='$id'";
	$hasil=mysqli_query($koneksi,$select);
	while($buff=mysqli_fetch_array($hasil)){
	?>
	<h2>Edit data</h2><br/>
	<form action="admin/updateakun1.php" method="post">
	<form width="487" border="0">
	<input type="hidden" name="id" value="<?php echo $buff['id'];?>"/>
	<table>
	<tr>
		<td width="150">Username</td>
		<td width="327"><input type="text" name="username" value="<?php echo $buff['username'];?>"/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $buff['email'];?>"/></td>
	</tr>
	<tr>
		<td>User Type</td>
		<td><input type="text" name="user_type" value="<?php echo $buff['user_type'];?>"/></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><select name="status" >
				<option value="pilih status"></option>
				<option value="Aktif">Aktif</option>
				<option value="Tidak Aktif">Tidak Aktif</option>
			</select></td>
	</tr>
	<tr>
		<td height="68" align="right"><input type="reset" value="reset"/></td>
		<td><input type="submit" value="Submit"/></td>
	</tr>
</table>
</form>
<?php
};
mysqli_close($koneksi);
?>	
</body>
</html>
