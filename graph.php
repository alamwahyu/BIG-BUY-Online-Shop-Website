<?php
 include"koneksi.php";
$dataPoints = array(
	array("x"=> 10, "y"=> 41),
	array("x"=> 20, "y"=> 35, "indexLabel"=> "Lowest"),
	array("x"=> 30, "y"=> 50),
	array("x"=> 40, "y"=> 45),
	array("x"=> 50, "y"=> 52),
	array("x"=> 60, "y"=> 68),
	array("x"=> 70, "y"=> 38),
	array("x"=> 80, "y"=> 71, "indexLabel"=> "Highest"),
	array("x"=> 90, "y"=> 52),
	array("x"=> 100, "y"=> 60),
	array("x"=> 110, "y"=> 36),
	array("x"=> 120, "y"=> 49),
	array("x"=> 130, "y"=> 41)
);
	
?>
<!DOCTYPE HTML>
<html>
<head> 
<?php
$query = "SELECT produk.cat_id, category.name, from produk
			INNER JOIN category ON produk.cat_id=category.id";
$databarang1 = mysqli_query($koneksi,$query);
$databarang = mysqli_fetch_array($databarang1);
				$query="SELECT * FROM category";
$datakategori1 = mysqli_query($koneksi,$query);
$datakategori = mysqli_fetch_array($datakategori1);
				$counter=10;
					foreach($datakategori AS $kategori){
						$dataPoints[]=array('x'=>$counter, 'y'=>0, 'indexLabel'=>ucfirst($kategori['produk']));
						$counter += 10;
				}

$i=0;
foreach($dataPoints as $point){
	foreach($databarang as $barang){
		if($point['indexLabel'] == ucfirst($barang['category'])){
			$dataPoints[$i]['y'] += 1;
		}
	}
	$i++;
}?>

<?php if (!isset($dataPoints)): ?>
	<div id="no-display"></div>
<?php else: ?>
	<div id="chartContainer" style="height: 370px; width: 100%; margin-top: 50px;"></div>
<?php endif; ?>

<script type="text/javascript" src="<?=BASEURL;?>/olshop/js/canvasjs.min.js"></script>
<script type="text/javascript">
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Graphic Penjualan Barang"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>    