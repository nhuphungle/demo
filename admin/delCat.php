<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/dbconnect.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/CheckUser.php';?>
<div class="bottom-spacing">
	  <!-- Button -->
	  <div class="float-left">
		  <a href="addCat.php" class="button">
			<span>Thêm danh mục tin <img src="/BNews/templates/admin/images/plus-small.gif" alt="Thêm tin"></span>
		  </a>
	  </div>
	  <div class="clear"></div>
</div>

<div class="grid_12">
	<!-- Example table -->
	<?php
	if(!isset($_REQUEST['idcat'])){
		header('LOCATION:indexCat.php');
		echo $_REQUEST['idcat'];
		exit();
	}
	$id_cat = $_REQUEST['idcat'];
	$sqlDel = "DELETE FROM category WHERE id_cat = $id_cat";
	$result = $mysqli->query($sqlDel);
	if($result){
				header('LOCATION:indexCat.php?msg=Xóa thành công');
				exit();
			}else{
				echo "Có lỗi xảy ra!";
			}
?>

<div style="clear: both;"></div> 
 </div>
	
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/footer.php';?> 