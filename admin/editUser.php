<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/dbconnect.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/CheckUser.php';?>
<!-- Form elements -->
<?php
	if(!isset($_REQUEST['id_user'])){
		header('LOCATION:indexUser.php');
		exit();
	}
	$id_user = $_REQUEST['id_user'];
	$sql = "SELECT * FROM users WHERE id_user = {$id_user}";
	$result = $mysqli->query($sql);
	$arr_user = mysqli_fetch_assoc($result);
	$tendangnhap = $arr_user['username'];
	$matkhau = $arr_user['password'];
	$hovaten = $arr_user['fullname'];
?>
		    
<div class="grid_12">
	
	<div class="module">
		 <h2><span>Sửa danh mục tin</span></h2>
			
		 <div class="module-body">
		 <?php
		 if(isset($_POST['sua'])){
			//$username = $_POST['tendangnhap'];
			$password = $_POST['matkhau'];
			$fullname = $_POST['hovaten'];
			if($password != ''){	
				$sqlEdit = "UPDATE users SET password = '$password', fullname = '$fullname' WHERE id_user = {$id_user}";
				$ketqua = $mysqli->query($sqlEdit);
				if($ketqua){
					header('LOCATION:indexUser.php?msg=Sửa thành công');
					exit();
				}else{
					echo "Có lỗi xảy ra!";
				}
			}else{
				$sqlEdit = "UPDATE users SET fullname = '$fullname' WHERE id_user = {$id_user}";
				$ketqua = $mysqli->query($sqlEdit);
				if($ketqua){
					header('LOCATION:indexUser.php?msg=Sửa thành công');
					exit();
				}else{
					echo "Có lỗi xảy ra!";
				}
			}
		 }
		 ?>
		 	<form action="" method='post' enctype="multipart/form-data">
				<p>
					<label>Username: <?php echo $tendangnhap;?></label>
					
				</p>
				<p>
					<label>Password</label>
					<input type="password" name="matkhau" value="" class="input-medium" />
				</p>
				<p>
					<label>Fullname</label>
					<input type="text" name="hovaten" value="<?php echo $hovaten; ?>" class="input-medium" />
				</p>
				
				
				<fieldset>
					<input class="submit-green" name="sua" type="submit" value="Sửa" /> 
					<input class="submit-gray" name="reset" type="reset" value="Nhập lại" />
				</form>
		 </div> <!-- End .module-body -->

	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/footer.php';?>
