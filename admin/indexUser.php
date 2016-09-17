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
		  <a href="addUser.php" class="button">
			<span>Thêm user <img src="/BNews/templates/admin/images/plus-small.gif" alt="Thêm tin"></span>
		  </a>
	  </div>
	  <div class="clear"></div>
</div>

<div class="grid_12">
	<!-- Example table -->
	<div class="module">
		<h2><span>Danh sách user</span></h2>
		
		<div class="module-table-body">
			<form action="">
			
			<table id="myTable" class="tablesorter">
				
				<thead>
					<tr>
					
						<th style="width:2%; text-align: center;">STT</th>
						<th style="width:10%;">Username</th>	
												
						<th style="width:10%; text-align: center;">Fullname</th>
						<th style="width:5%; text-align: center;">Chức năng</th>
						
						
					</tr>
				</thead>
				<tbody>
				<?php
					$sql = "SELECT * FROM users";
					$ketqua = $mysqli->query($sql);
					$i = 1;
					while($rows = mysqli_fetch_assoc($ketqua)){
					$id_user = $rows['id_user'];
					$username = $rows['username'];
					
					$fullname = $rows['fullname'];
					/*echo "<pre>";
						print_r($rows);
					echo "<pre>";*/
					
				?>
			
					<tr>
						<td class="align-center"><?php echo $i; ?></td>
						<td class="align-center"><a href=""><?php echo $username; ?></a></td>
						<td class="align-center"><?php echo $fullname; ?></td>
						<td align="center">
							<a href="editUser.php?id_user=<?php echo $id_user; ?>">Sửa <img src="/BNews/templates/admin/images/pencil.gif" alt="edit" /></a>
							<a href="delUser.php?id_user=<?php echo $id_user; ?>">Xóa <img src="/BNews/templates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
						</td>
					</tr>	
					<?php
					$i++;
					}
					?>
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