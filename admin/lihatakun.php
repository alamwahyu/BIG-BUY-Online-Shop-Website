<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
<title>Untitled Document</title>
<link href = "css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h2>Daftar Member</h2><br/>
	<?php
	include"koneksi.php";
	$select="select*from users";
	$hasil=mysqli_query($koneksi,$select);
	$no=0;
	?>
	
	<table id="styletabel">
		<tr>
			<th width="3%">ID</th>
			<th width="8.3%">Username</th>
			<th width="8.3%">Email</th>
			<th width="8.3%">User Type</th>
			<th width="8.3%">Status</th>\
			<th colspan="2" width="10%">Aksi</th>
		</tr>
<?php
while($buff=mysqli_fetch_array($hasil)){
$no++;
?>
		<tr>
			<td width="3%"><?php echo $no;?></td>
			<td width="8.3%"><?php echo $buff['username'];?></td>
			<td width="8.3%"><?php echo $buff['email'];?></td>
			<td width="8.3%"><?php echo $buff['user_type'];?></td>
			<td width="8.3%"><?php echo $buff['status'];?></td>
			<td width="5%"><a href="?module=updateakun&pos&id=<?php echo $buff['id'];?>">edit</a></td>
		</tr>
	
	<?php
	};
	
	mysqli_close($koneksi);
	?>
	</table><br/> 
</body>
</html>