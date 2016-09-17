<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/dbconnect.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/CheckUser.php';?>
<script type="text/javascript">
			$(document).ready(function(){
				$("#fm").validate({
					rules:{
						tentin:{
							required:true,							
						}
						
					}, 
					messages:{
						tentin:{
							required:"<span style='color:red'>Tên đăng nhập không được để trống</span>",					
						}
					}
				});
			});
		</script>

<div class="grid_12">

	<div class="module">
		 <h2><span>Thêm tin tức</span></h2>
			
		 <div class="module-body">
		 <?php
		 if(isset($_POST['them'])){
			$tenhinh = $_FILES['hinh_anh']['name'];
			$tentin = $_POST['tentin'];
			$danhmuc = $_POST['danhmuc'];
			$mota = $_POST['mota'];
			$chitiet = $_POST['chitiet'];
			//$picture = $_POST['picture'];
			if($tenhinh==''){
				$str = "INSERT INTO news(name,preview_text,detail_text,id_cat) value('$tentin','$mota','$chitiet','$danhmuc')";
				$kq = $mysqli->query($str);
				if($kq){
					header("LOCATION:indexNews.php?msg=Thêm thành công");
				}else{
					echo "Có lỗixảy ra !";
				}
		 	}else{
				$tmp_name=$_FILES['hinh_anh']['tmp_name'];
					$ar_tachchuoi=explode('.',$tenhinh);
						
						$dem=count($ar_tachchuoi);
						$duoifile=$ar_tachchuoi[$dem-1];
						$time=time();
						unset ($ar_tachchuoi[$dem-1]);
						$str_chuoi='';
						foreach($ar_tachchuoi as $key =>$value){
							if($key==0){
								$str_chuoi=$value;
							}else{
								$str_chuoi=$str_chuoi.'.'.$value;
							}
						}
				$tenhinh=$str_chuoi.'_'.$time.'.'.$duoifile;			
				$pathupload = $_SERVER['DOCUMENT_ROOT'].'/BNews/files/'.$tenhinh;
				$ketqua = move_uploaded_file($tmp_name,$pathupload);
				if($ketqua){
				$sql = "INSERT INTO news(name,preview_text,detail_text,id_cat,picture) VALUES('$tentin','$mota','$chitiet','$danhmuc','$tenhinh')";
				$result = $mysqli->query($sql);	
					if($result){
					header("LOCATION:indexNews.php?msg=Thêm thành công");
					exit();
					}else{
					echo "Có lỗi xảy ra khi thêm tin tức!";
					}	
				}
				
			 }
		 }
		 ?>
			<form action="" method="post" id="fm" name="fm" enctype="multipart/form-data">
				<p>
					<label>Tên tin</label>
					<input type="text" name="tentin" value="" class="input-medium" />
				</p>
				<p>
					<label>Danh mục tin</label>
					<select  name="danhmuc" class="input-short">
					<?php
					$sql = "SELECT * FROM category";
					$result = $mysqli->query($sql);
					while($rows = mysqli_fetch_assoc($result)){
					$id_cat = $rows['id_cat'];
					$ten_cat = $rows['name'];	
					
					?>
						<option value="<?php echo $id_cat; ?>"><?php echo $ten_cat?></option>
					<?php
					}
					?>
					</select>
				</p>
				<p>
					<label>Hình ảnh</label>
					<input type="file"  name="hinh_anh" value="" />
				</p>
				<p>
					<label>Mô tả</label>
					<textarea name="mota" value="" rows="7" cols="90" class="ckeditor"></textarea>
				</p>
				<p>
					<label>Chi tiết</label>
					<textarea  name="chitiet" value="" rows="7" cols="90" class="ckeditor"></textarea>
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