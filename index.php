<html>
<head>
    <title>BIG BUY THE REAL ONLINE SHOPPING</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
<body>
    <div id="wrapper">
    <div id="header">
        <div id="subheader">
    <div class="container">
        <p>BIG BUY THE REAL ONLINE SHOPPING</p>
            </div>
        </div>
        <!--==main header==-->
    <div id="main-header">
        <!--logo-->
    <div id="logo">
        <!--<span id="ist">MY</span><span id="iist">Shop.com</span>-->
        <img src="image/logo.png" width="250px" height="75px">
        </div>
        <!--==search==-->
        <div id="search">
        <form action="">
            <input class="search-area" type="text" name="text" placeholder="Ketikan Nama Barang">
            <input class="search-btn" type="submit" name="submit" value="Search">
            </form>
        </div>
        <!--==menu==-->
        <div id="menu-user">
        <li><a href="?module=login#pos">LOGIN</a></li>
        </div>
    </div>
        </div>
        <!--==navigasi bar==-->
        <div id="navigasi">
        <nav>
            <a href="#">Home</a>
            <a href="#">Electronik</a>
            <a href="#">Accesoris</a>
            <a href="#">Produk</a>
            <a href="#">Order</a>
            </nav>
        </div>
        <div>            
            <img src="image/ecom.gif" width="1350px" height="350px">
        </div>
        <div id="page">
        <?php
             if(isset($_GET['text'])){
                include"koneksi.php";
                $nama=$_GET['text'];
                $select="select*from produk where nama like '%$nama%'";
                $hasil=mysqli_query($koneksi,$select);
            if($nama==null)
                echo "Barang tidak ditemukan";
            else
                include"konten/tb_cari.php";}
        ?>
					<?php if(isset($_GET['module']))
				include "$_GET[module].php";
			else
				include "konten/homeutama.php";?>
		</div>
        <div id="footer">
                &copy; Copyright 2010
            </div>
    </div>
        </body>
</html>