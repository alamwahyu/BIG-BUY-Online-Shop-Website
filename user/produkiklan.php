<?php
    include('koneksi.php');
?>
<h2>Product Iklan</h2>
<form action="" method="post" enctype="multipart/form-data">
    Nama :<input type="text" name="nama"><br>
    Category:<select name="category">
                <?php
                    $sql="SELECT * FROM category";
                    $rs=mysqli_query($koneksi,$sql);
                ?>
                    <option>Pilih Category</option>
                <?php
                    while($catrow=mysqli_fetch_array($rs)){
                ?>
                <option value="<?php echo $catrow['id']; ?>"><?php echo $catrow['name']; ?></option>
                <?php 
                    }
                ?>
             </select><br>
    Harga:<input type="number" name="harga"><br>
    Deskripsi:<textarea name="deskripsi"></textarea><br>
    Picture:<input type="file" name="productpic"><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
    if(isset($_POST['submit'])){
        $sqlinsert="INSERT produk SET
                                nama='$_POST[nama]',
                                cat_id='$_POST[category]',
                                harga='$_POST[harga]',
                                deskripsi='$_POST[deskripsi]',
                                gambar='pic'";
        mysqli_query($koneksi,$sqlinsert);  
        
        $last_id=mysqli_insert_id($koneksi);                                
        $pic=$_SERVER['DOCUMENT_ROOT'] . "/olshop/produkPic/".$last_id.$_FILES["productpic"]["name"];
        move_uploaded_file($_FILES["productpic"]["tmp_name"],$pic);
        $sqlupdate="UPDATE produk SET gambar='$pic'
                                    WHERE id='$last_id'";
        mysqli_query($koneksi,$sqlupdate);
    }
?>