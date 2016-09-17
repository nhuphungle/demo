<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/dbconnect.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/CheckUser.php';?>
<?php
	$id_news = $_REQUEST['id_tt'];
	$query = "SELECT * FROM news WHERE id_news = $id_news";
	$re_query = $mysqli->query($query);
	$arr = mysqli_fetch_assoc($re_query);
	$tentin = $arr['name'];
	$chitiet = $arr['preview_text'];
	$mota = $arr['detail_text'];
	$hinhanh = $arr['picture'];
	$id_dmt = $arr['id_cat'];
	if($hinhanh != ''){
		$url = '/BNews/files/'.$hinhanh;
	}
?>
<div class="grid_12">

	<div class="module">
		 <h2><span>Sửa tin tức</span></h2>
			
		 <div class="module-body">
			<?php
			if(isset($_POST['sua'])){
				//$tenhinh = $_FILES['hinh_anh']['name'];
				$tentin = $_POST['tentin'];
				$danhmuc = $_POST['danhmuc'];
				$tenhinh = $_FILES['hinhanh']['name'];
				$mota = $_POST['mota'];
				$chitiet = $_POST['chitiet'];
				if($tenhinh == ""){
					$update =  "UPDATE news SET name = '$tentin', preview_text = '$mota',
								detail_text = '$chitiet', id_cat = $id_dmt
								WHERE  id_news = $id_news
								";
					$result = $mysqli->query($update);
					if($result){
						header("LOCATION:indexNews.php?msg=Sửa thành công");
					}else{
						echo "Lỗi khi sửa thông tin";
					}
				}else{
					$ar_tachchuoi=explode('.',$tenhinh);
					$dem=count($ar_tachchuoi);
					$duoifile=$ar_tachchuoi[$dem-1];
					$time=time();
					unset ($ar_tachchuoi[$dem-1]);
					$str_chuoi='';
					foreach($ar_tachchuoi as $key =>$value){
						if($key == 0){
							$str_chuoi=$value;
						}else{
							$str_chuoi=$str_chuoi.'.'.$value;
						}
					}
					$tenhinh=$str_chuoi.'_'.$time.'.'.$duoifile;
					//thực hiện xóa hình cũ
					//$path = $_SERVER['DOCUMENT_ROOT'];
					$url_old = $_SERVER['DOCUMENT_ROOT'].'/BNews/files/'.$hinhanh;
					$kq = unlink($url_old);
					if($kq){

						$tmp_name = $_FILES['hinhanh']['tmp_name'];
						$pathupload = $_SERVER['DOCUMENT_ROOT'].'/BNews/files/'.$tenhinh;
						$ketqua = move_uploaded_file($tmp_name,$pathupload);
						if($ketqua){
								$update =  "UPDATE news SET name = '$tentin', preview_text = '$mota',
								detail_text = '$chitiet',picture = '$tenhinh', id_cat = $id_dmt
								WHERE  id_news = $id_news
								";
								$result = $mysqli->query($update);
								if($result){
									header("LOCATION:indexNews.php?msg=Sửa thành công");
								}else{
									echo "Lỗi khi sửa thông tin";
								}
						
						}else{
							echo "Lỗi kh xóa ảnh cũ";
						}
					}
					
				}
			}	
				//$arr_U = mysqli_fetch_assoc($result);
			?>
			<?php
			if(isset($_POST['xoa'])){
				$url_old = $_SERVER['DOCUMENT_ROOT'].'/BNews/files/'.$hinhanh;
				$kq = unlink($url_old);
				if($kq){
					$que = "UPDATE news SET picture ='' WHERE id_news = $id_news";
					$re = $mysqli->query($que);
					if($re){
						header("LOCATION:editNews.php?id_tt={$id_news}");
					}else{
						echo "Có lỗi khi sửa thông tin";
					}
				}else{
					echo "Có lỗi khi xóa hình cũ";	
				}
			}
			?>
			<form action="" method="post" id="fm" name="fm" enctype="multipart/form-data">
				<p>
					<label>Tên tin</label>
					<input type="text" name="tentin" value="<?php echo $tentin; ?>" class="input-medium" />
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
						if($id_cat== $id_dmt){
							$selected = 'Selected="Selected"';
						}else{
							$selected ='';
						}
						
						?>
						<option <?php echo $selected; ?> value="<?php echo $id_cat; ?>"><?php echo $ten_cat?></option>
					<?php
					}
					?>
					</select>
				</p>
				<?php 
					if($hinhanh != ""){
						
				?>
				<p>
					<img src="<?php echo $url; ?>" width="150px" height="150px" />
					<input class="submit-green" name="xoa" type="submit" value="Xóa hình" /> 
				</p>
				<?php
					}
				?>
				<p>
					<label>Hình ảnh</label>
					<input type="file"  name="hinhanh" value="" />
				</p>
				<p>
					<label>Mô tả</label>
					<textarea name="mota"  rows="7" cols="90" class="ckeditor"><?php echo $mota; ?></textarea>
									</p>
				<p>
					<label>Chi tiết</label>
					<textarea  name="chitiet" rows="7" cols="90" class="ckeditor"><?php echo $chitiet; ?></textarea>
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
