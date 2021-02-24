<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Untitled Document</title>
	</head>
	
	<body>
		<div align="center" class="style1">
		<h2>Lihat Produk</h2>
		</div>
		<?php
		include"koneksi.php";
		$select="select * from produk";
		$hasil=mysqli_query($koneksi, $select);
		$no =1;
		?>
		
		<table width="600px" border="1" style="table-layout:fixed">
			<col width="35px" />
			<col width="140px" />
			<col width="140px" />
			<col width="100px" />
			<col width="35px" />
			<col width="160px" />
			<col width="122px" />
			<tr>
				<td style="overflow:hidden; text-overflow:ellipsis;">ID</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">Nama</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">Kategori ID</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">Harga</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">Deskripsi</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">Gambar</td>
			</tr>
		</table>
		
		<?php
		while($buff=mysqli_fetch_array($hasil)){
			?>
			<table width="600px" border="1" style="table-layout:fixed" >
				<col width="35px" />
				<col width="140px" />
				<col width="140px" />
				<col width="100px" />
				<col width="35px" />
				<col width="160px" />
				<col width="60px" />
				<col width="60px" />
				<tr>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $no;?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['nama'];?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['cat_id'];?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['harga'];?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['deskripsi'];?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['gambar'];?></td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><a href="?module=ubahproduk2&id=<?php echo $buff['id'];?>">edit</td>
					<td style="overflow:hidden; text-overflow:ellipsis;"><a href="?module=hapusproduk&id=<?php echo $buff['id'];?>">hapus</td>
				</tr>
				
		</table>
		
		<?php 
		$no++;
		};
		mysqli_close($koneksi);
		?><br />
		<a href="?module=mainpage#pos">Kembali Ke Halaman Utama</a>
	</body>
</html>