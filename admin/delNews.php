<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/dbconnect.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/CheckUser.php';?>
<div class="bottom-spacing">
	  <!-- Button -->
	  <div class="float-left">
		  <a href="addCat.php" class="button">
			<span>Thêmtin <img src="/BNews/templates/admin/images/plus-small.gif" alt="Thêm tin"></span>
		  </a>
	  </div>
	  <div class="clear"></div>
</div>

<div class="grid_12">
	<!-- Example table -->
	<?php
	if(!isset($_REQUEST['id_tt'])){
		header('LOCATION:indexNews.php');
		echo $_REQUEST['id_news'];
		exit();
	}
	$id_new = $_REQUEST['id_tt'];
	$sqlDel = "DELETE FROM news WHERE id_news = $id_new";
	$result = $mysqli->query($sqlDel);
	if($result){
			header('LOCATION:indexNews.php?msg=Xóa thành công');
				exit();
			}else{
				echo "Có lỗi xảy ra!";
			}
?>

<div style="clear: both;"></div> 
 </div>
	
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/footer.php';?> 