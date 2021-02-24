<?php
include"koneksi.php";
if(isset($_POST['id'])){
	$edit="UPDATE produk SET nama='$_POST[nama]', cat_id='$_POST[cat_id]',
	harga='$_POST[harga]', deskripsi='$_POST[deskripsi]', gambar='$_POST[gambar]'
	WHERE id='$_POST[id]'";
	$hasil=mysqli_query($koneksi, $edit);
	if($hasil){
		echo"<script>alert('Data Berhasil Diedit');window.location.href='?module=categoryview#pos';</script>";
}}?>