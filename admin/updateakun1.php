<?php
include"../koneksi.php";
if(isset($_POST['id'])){
$edit="update users set username='$_POST[username]',email='$_POST[email]',user_type='$_POST[user_type]',status='$_POST[status]' where id='$_POST[id]'";
$hasil=mysqli_query($koneksi,$edit);
if($hasil){
echo"('Selamat, data anda telah terupdate')";
}}?>