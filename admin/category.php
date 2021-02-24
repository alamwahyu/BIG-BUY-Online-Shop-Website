<?php 
    include('koneksi.php');
?>
<html>
<head>
    <title>Registration system PHP and MySQL - Create user</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
    <style>
        .header {
            background: #f29a7f;
        }
        button[name=submit] {
            background: #f29a7f;
        }
    </style>
</head>
<div class="header">
<h2>Category</h2>
</div>
<div class="form">
<form action="#" method="post">
    <div class="input-group">
    Category Nama:<input type="text" name="category"><br></div>
    <div class="input-group">
    Deskripsi :<input type="text" name="deskripsi"><br></div>
    <div class="input-group">
    <input type="submit" class="btn" name="submit" value="submit"></div>
</form>
</div>

<?php
    if(isset($_POST['submit'])){
        $sql="INSERT category SET
            name='$_POST[category]',
            deskripsi='$_POST[deskripsi]'";
        mysqli_query($koneksi,$sql);
        echo"<script>alert('Category Berhasil ditambahkan');</script>";

    } 
?>