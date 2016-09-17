<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/dbconnect.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/CheckUser.php';?>
<!-- Form elements -->   
<script type="text/javascript">
			$(document).ready(function(){
				$("#fm").validate({
					rules:{
						tendangnhap:{
							required:true,
							minlength:2,
							maxlength:10,
						},
						matkhau:{
							required:true,
						},
						hovaten:{
							required:true,
						}
					}, 
					messages:{
						tendangnhap:{
							required:"<span style='color:red'>Tên đăng nhập không được để trống</span>",
							minlength:"Nhập tối thiếu 2 kí tự",
							maxlength:"Nhập tối đa 10 kí tự",
						},
						matkhau:{
							required:"<span style='color:red'>Password không được để trống</span>",
						},
						hovaten:{
							required:"<span style='color:red'>Fullname không được để trống</span>",
						}
					}
				});
			});
		</script>
<div class="grid_12">

	<div class="module">
		 <h2><span>Thêm user</span></h2>
			
		 <div class="module-body">
		 <?php
			if(isset($_POST['them'])){
			$username = $_POST['tendangnhap'];
			$password = $_POST['matkhau'];
			$fullname = $_POST['hovaten'];
			//echo $tendmt;
			$str = "SELECT * FROM users where username='$username' LIMIT 1";
			$ketqua = $mysqli->query($str);
			$row = mysqli_fetch_assoc($ketqua);
			$count = count($row);
			if($count > 0){
				echo "<span style='color:red;'>Tên đăng nhập đã tồn tại!</span>";
				}else{
					$sql = "INSERT INTO users(username,password,fullname) values('$username','$password','$fullname')";
					$result = $mysqli->query($sql);
					if($result){
						header('LOCATION:indexUser.php?msg=Thêm thành công');
						exit();
					}else{
						echo "Có lỗi xảy ra!";
					}
				}
			}
		 ?>
			<form action="" id="fm" name="fm" method='post' enctype="multipart/form-data">
				<p>
					<label>Username</label>
					<input type="text" name="tendangnhap" value="" class="input-medium" />
				</p>
				<p>
					<label>Password</label>
					<input type="password" name="matkhau" value="" class="input-medium" />
				</p>
				<p>
					<label>Full name</label>
					<input type="text" name="hovaten" value="" class="input-medium" />
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
