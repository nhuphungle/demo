<?php 
	include_once $_SERVER['DOCUMENT_ROOT']."/BNews/function/dbconnect.php";
	//$mysqli -> set_charset("utf-8");
	$queryDMT = "SELECT * FROM category";
	$result = $mysqli->query($queryDMT);
?>
<h2>Danh mục tin</h2>
<ul>
	<?php
	while($rowDMT = mysqli_fetch_assoc($result)){		
		//lấy giá trị
		$idDMT = $rowDMT['id_cat'];
		$TenDanhMucTin = $rowDMT['name'];
	?>
	<li><a href="danhmuc.php?id_dmt=<?php echo $idDMT;?>"><?php echo $TenDanhMucTin; ?></a></li>
	<?php
	}
	?>
</ul>