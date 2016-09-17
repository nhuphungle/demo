<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/public/inc/header.php';?>
<div class="leftpanel">
	<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/public/inc/left_bar.php';?>
</div>
<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/dbconnect.php';
	$id_n = $_REQUEST['id_tt'];
	$sql = "SELECT * FROM news WHERE id_news = {$id_n} ";
	$ketqua = $mysqli ->query($sql);
	$arr_TT =  mysqli_fetch_assoc($ketqua);
	$id_cat = $arr_TT['id_cat'];
	$tentintuc = $arr_TT['name'];
	$ChiTiet = $arr_TT['detail_text'];
	
?>

<div class="rightpanel">
	<div class="rightbody">
		<h1 class="title"><?php echo $tentintuc; ?></h1>
		<div class="items-new">
			<div class="new-detail">
				<?php
				echo $ChiTiet;
				?>
		</div>
		</div>
		
		<h2 class="title" style="margin-top:30px;color:#BBB">Tin tức liên quan</h2>
		<div class="items-new">
			
		<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/public/inc/tinlienquan.php';?>	
		</div>
	</div>
</div>
<div class="clr"></div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/public/inc/footer.php';?>	