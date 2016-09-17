<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/header.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/dbconnect.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/CheckUser.php';?>
<div class="bottom-spacing">
<?php
if(isset($_REQUEST['msg'])){
	echo $_REQUEST['msg'];
}
?>

	  <!-- Button -->
	  <div class="float-left">
		  <a href="addNews.php" class="button">
			<span>Thêm tin <img src="/BNews/templates/admin/images/plus-small.gif" alt="Thêm tin"></span>
		  </a>
	  </div>
	  <div class="clear"></div>
</div>
<div class="grid_12">
	<!-- Example table -->
	<div class="module">
		<h2><span>Danh sách tin</span></h2>
		
		<div class="module-table-body">
			<form action="">
			<table id="myTable" class="tablesorter">
				<thead>
					<tr>
						<th style="width:4%; text-align: center;">ID</th>
						<th>Tên tin tức</th>
						<th style="width:20%">Danh mục</th>
						<th style="width:16%; text-align: center;">Hình ảnh</th>
						<th style="width:11%; text-align: center;">Chức năng</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$sql = "SELECT n.id_news, n.name as ten_tt, n.picture, n.id_cat, c.name as ten_cat
					FROM news AS n INNER JOIN category AS c 
					ON n.id_cat = c.id_cat
					ORDER BY n.id_news DESC";
					$ketqua = $mysqli->query($sql);
					//echo $ketqua;
					$i = 1;
					while($rows = mysqli_fetch_assoc($ketqua)){
					$id_tintuc = $rows['id_news'];
					$id_cat = $rows['id_cat'];
					$tenTT = $rows['ten_tt'];
					//$preview = $rows['preview_text'];
					$hinhanh = $rows['picture'];
					$ten_cat = $rows['ten_cat'];
					if($hinhanh != ''){
						$url = '/BNews/files/'.$hinhanh;
						}
					//2 tin đó có lô gỗi ì, em ko biet 
				?>
					<tr>
						<td class="align-center"><?php echo $i ?></td>
						<td><a href=""><?php echo $tenTT?></a></td>
						<td><?php echo $ten_cat ?></td>
						<td align="center">
						<?php
							if($hinhanh == ''){
								echo "<span style='color:red'>Không có hình</span>";
							}else{
							?>	
								<img src="<?php echo $url;?>" class="hoa" />
							<?php
							}
						?>
						</td>
						<td align="center">
							<a href="editNews.php?id_tt=<?php echo $id_tintuc; ?>">Sửa <img src="/BNews/templates/admin/images/pencil.gif" alt="edit" /></a>
							<a href="delNews.php?id_tt=<?php echo $id_tintuc; ?>">Xóa <img src="/BNews/templates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
						</td>
					<?php
					$i++;
					}
					?>	
					</tr>
					
				</tbody>
			</table>
			</form>
		 </div> <!-- End .module-table-body -->
	</div> <!-- End .module -->
		 <div class="pagination">           
			<div class="numbers">
				<span>Trang:</span> 
				<a href="">1</a> 
				<span>|</span> 
				<a href="">2</a> 
				<span>|</span> 
				<span class="current">3</span> 
				<span>|</span> 
				<a href="">4</a> 
				<span>|</span> 
				<a href="">5</a> 
				<span>|</span> 
				<a href="">6</a> 
				<span>|</span> 
				<a href="">7</a>
				<span>|</span> 
				<a href="">8</a> 
				<span>|</span> 
				<a href="">9</a>
				<span>|</span> 
				<a href="">10</a>   
			</div> 
			<div style="clear: both;"></div> 
		 </div>
	
</div> <!-- End .grid_12 -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/admin/inc/footer.php';?> 