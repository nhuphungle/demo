<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/dbconnect.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/CheckUser.php';?>
<div class="bottom-spacing">
	  <!-- Button -->
	  <div class="float-left">
		  <a href="addUser.php" class="button">
			<span>Thêm user<img src="/BNews/templates/admin/images/plus-small.gif" alt="Thêm tin"></span>
		  </a>
	  </div>
	  <div class="clear"></div>
</div>

<div class="grid_12">
	<!-- Example table -->
	<?php
	if(!isset($_REQUEST['id_user'])){
		header('LOCATION:indexUser.php');
		echo $_REQUEST['id_user'];
		exit();
	}
	$id_user = $_REQUEST['id_user'];
	$sqlDel = "DELETE FROM users WHERE id_user = $id_user";
	$result = $mysqli->query($sqlDel);
	if($result){
				header('LOCATION:indexUser.php?msg=Xóa thành công');
				exit();
			}else{
				echo "Có lỗi xảy ra!";
			}
?>

<div style="clear: both;"></div> 
 </div>
	
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/footer.php';?> 
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
					header("LOCATION:indexNews.php?msg=Sửa thành công");
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