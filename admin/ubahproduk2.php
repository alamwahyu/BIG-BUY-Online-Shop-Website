<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Untitled Document</title>
	</head>
	<body>

<?php
$id=$_GET['id'];
include"koneksi.php";
$select="select*from produk where id='$id'";
$hasil=mysqli_query($koneksi,$select);
while($buff=mysqli_fetch_array($hasil)){
	?>

<h2> Edit Data </h2><br/>
<form action="?module=ubahproduk" method="post">
<form action="?module=ubahproduk" method="post">
<table width="487" border="0">
<input type="hidden" name="id" value="<?php echo $buff['id'];?>"/>
	<tr>
		<td width="150"> Nama Produk </td>
		<td width="327"><input type="text" name="nama" value="<?php echo $buff['nama'];?>"/></td>
	</tr>
	<tr>
		<td>Kategori ID</td>
		<td><input type="text" name="cat_id" value="<?php echo $buff['cat_id'];?>"/></td>
	</tr>
	<tr>
		<td> Harga</td>
		<td><input type="text" name="harga" value="<?php echo $buff['harga'];?>"/></td>
	</tr>
	<tr>
		<td> Deskripsi Produk</td>
		<td><input type="text" name="deskripsi" value="<?php echo $buff['deskripsi'];?>"/></td>
	</tr>
	
	
	<tr>
	<td height="68" align="right"><input type="reset" value="reset" /></td>
	<td><input type="submit" value="submit" /></td>
	</tr>
	</table>
	</form>
	<?php
};
mysqli_close($koneksi);
?>
</body>
</html>