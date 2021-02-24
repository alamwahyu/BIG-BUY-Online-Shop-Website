 <html>
		<?php
			
		?>
		
		
		<?php
		$i=0;
		while($buff=mysqli_fetch_array($hasil)){
			
		$i++;
		if($i==1){
			echo '<table width="600px" border="1" style="table-layout:fixed">
			<col width="35px" />
			<col width="140px" />
			<col width="140px" />
			<col width="100px" />
			<col width="140px" />
			<col width="100px" />
			<tr>
				<td style="overflow:hidden; text-overflow:ellipsis;">id</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">Nama Barang</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">Category id</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">harga</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">deskripsi</td>
				<td style="overflow:hidden; text-overflow:ellipsis;">gambar</td>
		</table>';
		}
			
		?>

		<table width="600px" border="1" style="table-layout:fixed" >
			<col width="35px" />
			<col width="140px" />
			<col width="140px" />
			<col width="100px" />
			<col width="160px" />
			<col width="60px" />
			<tr>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $i;?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['nama'];?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['cat_id'];?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['harga'];?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['deskripsi'];?></td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><?php echo $buff['gambar'];?></td>
				<!--<td style="overflow:hidden; text-overflow:ellipsis;"><a href="?module=edit&id=<?php echo $buff['id'];?>">edit</td>
				<td style="overflow:hidden; text-overflow:ellipsis;"><a href="?module=hapus&id=<?php echo $buff['id'];?>">hapus</td>-->
			</tr>
		</table>
		<?php
		};
		if($i==0)
			echo "Username Not Found!";
		mysqli_close($koneksi);
		?><br/>
</html>