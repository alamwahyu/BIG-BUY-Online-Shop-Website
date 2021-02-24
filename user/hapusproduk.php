<?php
include"koneksi.php";
$id=$_GET['id'];
$hapus="delete from produk where id='$id'";
$hasil=mysqli_query($koneksi,$hapus);
if($hapus){
	echo
	"<script>alert('Data Berhasil Dihapus');window.location.href='?module=categoryview#pos';</script>";
}?>