<?php
    include('koneksi.php');
?>

<?php
    $sql="SELECT * FROM category ORDER BY id DESC";
    $rs=mysqli_query($koneksi,$sql);
    $count = mysqli_num_rows($rs);
    if($count>0){
        while($row=mysqli_fetch_array($rs)){
    ?>
        <a href="productview.php?cat_id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a> |
    <?php
        }
    }
    else
    {
        echo "<h2>No category in this site</h2>";
    }
?>