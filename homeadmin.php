
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
        <img src="image/logo.png" width="250px" height="75px">
        <!--<span id="ist">MY</span><span id="iist">Shop.com</span>-->
        </div>
        <!--==search==-->
        <div id="search">
        <form action="">
            <input class="search-area" type="text" name="text" placeholder="Search here">
            <input class="search-btn" type="submit" name="submit" value="Search">
            </form>
        </div>
        <div id="menu-user">
        <li><a href="index.php?logout='1'" style="color: #ff7675;">LOGOUT</a></li>
        </div>
  
        
    </div>
        </div>
        <!--==navigasi bar==-->
        <div id="navigasi">
        <nav>
            <a href="?module=home#pos">Home</a>
            <a href="?module=category#pos">Tambah Kategori</a>
            <a href="?module=produkiklan#pos">Tambah Iklan</a>
            <a href="?module=lihatproduk#pos">Edit Iklan</a>
            <a href="?module=lihatproduk#pos">Hapus Iklan</a>
            <a href="?module=lihatakun#pos">Lihat Status Akun</a>
            </nav>
        </div>

        <div>            
            <img src="image/ecom.gif" width="1350px" height="350px">
        </div>

        <div id="page">
					<?php if(isset($_GET['module']))
				include "admin/$_GET[module].php";
			else
				include "admin/home.php";?>
		</div>
        <div id="footer">
            <p>&copy; Copyright 2010</p>
        </div>
    </div>
        </body>
</html>