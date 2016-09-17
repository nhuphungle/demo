<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/dbconnect.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/CheckUser.php';?>
<!-- Form elements -->
<?php
	if(!isset($_REQUEST['idcat'])){
		header('LOCATION:indexCat.php');
		exit();
	}
	$id_cat = $_REQUEST['idcat'];
	$sql = "SELECT * FROM category WHERE id_cat= {$id_cat}";
	$result = $mysqli->query($sql);
	$arr_dmt = mysqli_fetch_assoc($result);
	$tendmt = htmlspecialchars($arr_dmt['name']);
	
?>
		    
<div class="grid_12">
	
	<div class="module">
		 <h2><span>Sửa danh mục tin</span></h2>
			
		 <div class="module-body">
		 <?php
		 if(isset($_POST['sua'])){
			 $tendmt = $_POST['tendmt'];
				
			$sqlEdit = "UPDATE category SET name = '$tendmt' WHERE id_cat = {$id_cat}";
			$ketqua = $mysqli->query($sqlEdit);
			if($ketqua){
				header('LOCATION:indexCat.php?msg=Sửa thành công');
				exit();
			}else{
				echo "Có lỗi xảy ra!";
			}
		 }
		 ?>
		 	<form action="" method='post' enctype="multipart/form-data">
				<p>
					<label>Tên danh mục tin</label>
					<input type="text" name="tendmt" value="<?php echo $tendmt; ?>" class="input-medium" />
				</p>
				<fieldset>
					<input class="submit-green" name="sua" type="submit" value="Sửa" /> 
					<input class="submit-gray" name="reset" type="reset" value="Nhập lại" />
				</fieldset>
			</form>
		 </div> <!-- End .module-body -->

	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/footer.php';?>
