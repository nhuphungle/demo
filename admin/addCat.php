<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/dbconnect.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/CheckUser.php';?>
<!-- Form elements -->  
 <div class="grid_12">

	<div class="module">
		 <h2><span>Thêm danh mục tin</span></h2>
			
		 <div class="module-body">
		 <?php
			$erro = " ";
			if(isset($_POST['them'])){
			$tendmt = $_POST['tendmt'];
			//echo $tendmt;
				if($tendmt==NULL){
					$erro = "Vui lòng nhập lai!";
				}else{
				$tendmt = $mysqli->real_escape_string($tendmt);
				$sql = "INSERT INTO category(name) values('$tendmt')";
				$result = $mysqli->query($sql);
					if($result){
						header('LOCATION:indexCat.php?msg=Thêm thành công');
						exit();
					}else{
						echo "Có lỗi xảy ra!";
					}
				}
			}
		 ?>
			<form action="" method='post' enctype="multipart/form-data">
				<p>
					<label>Tên danh mục tin</label>
					<input type="text" name="tendmt" value="" class="input-medium" />
					<?php
					if(isset($erro)){
					echo "<span style='color:red;'>$erro</span>";}
					?>
				</p>
				<fieldset>
					<input class="submit-green" name="them" type="submit" value="Thêm" /> 
					<input class="submit-gray" name="reset" type="reset" value="Nhập lại" />
				</fieldset>
			</form>
		 </div> <!-- End .module-body -->

	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/footer.php';?>
