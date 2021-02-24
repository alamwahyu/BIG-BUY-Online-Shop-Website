<?php
    include('koneksi.php');
    include('categoryview.php');
?>
<html>
<head>
    <title>Online Shopping</title>
    <link href="css/stylegrid.css" rel="stylesheet" type="text/css">
    </head>
<h1>Category Product</h1>
<?php
    $sql="SELECT * FROM produk WHERE cat_id='$_GET[cat_id]'";
    $rs=mysqli_query($koneksi,$sql);
    $count=mysqli_num_rows($rs);
    if($count>0){
        while($row=mysqli_fetch_array($rs)){
        ?>
        <div class="list-barang">
            <div class="list-barang-ads">
            <img src="<?php echo $row['gambar']; ?>" width="300"><br>
            <h2>Nama: <?php echo $row['nama']; ?></h2>
            <h2>Harga: <?php echo $row['harga']; ?></h2>
            <p><?php echo $row['deskripsi']; ?></p>
        </div>
    </div>
</html>
<?php
        }
    }
    else
    {
        echo "No product this category";
    }
?>