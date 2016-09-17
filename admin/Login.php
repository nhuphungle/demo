<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/dbconnect.php';?>
<!-- Form elements -->

 <div class="grid_12">

	<div class="module">
		 <h2><span>Login</span></h2>
		<?php
		if(isset($_POST['Login'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM users WHERE username = '$username' and password = '$password' LIMIT 1";
			//echo $sql;
			$result = $mysqli->query($sql);
			$arr_U = mysqli_fetch_assoc($result);
			$count = count($arr_U);
			if($count > 0){
				$_SESSION['user_info'] = $arr_U;
				header("LOCATION:index.php");
				exit();
			}else{
				echo "Mật khẩu hoặc tên đang nhập sai";
			}
		}
		?>	
		 <div class="module-body">
			<form action="" method='post' enctype="multipart/form-data">
				<p>
					<label>Tên đăng nhập</label>
					<input type="text" name="username" value="" class="input-medium" />
					
				</p>
				<p>
					<label>Mật khẩu</label>
					<input type="text" name="password" value="" class="input-medium" />
					
				</p>
				
				<fieldset>
					<input class="submit-green" name="Login" type="submit" value="Đăng nhập" /> 
					<input class="submit-gray" name="reset" type="reset" value="Nhập lại" />
				</fieldset>
			</form>
		 </div> <!-- End .module-body -->

	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/footer.php';?>
