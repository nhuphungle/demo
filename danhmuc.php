<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/public/inc/header.php';?>
				<div class="leftpanel">
					<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/public/inc/left_bar.php';?>
				</div>
				<div class="rightpanel">
					<div class="rightbody">
					<?php
					include_once $_SERVER['DOCUMENT_ROOT'].'/BNews/function/dbconnect.php';
					$id_DMT = $_REQUEST['id_dmt'];
					$sqlDMT = "SELECT * FROM category WHERE id_cat = {$id_DMT} ORDER BY id_cat DESC";
					$result = $mysqli -> query($sqlDMT);
					$arr_DMT = mysqli_fetch_assoc($result);
					$ten_DMT = $arr_DMT['name'];
					?>

						<h1 class="title">Tin tức >> <?php echo $ten_DMT; ?></h1>
						<div class="items-new">
							<ul>
							<?php
							$query = "SELECT * FROM news WHERE id_cat = {$id_DMT}";
							// truy vấn
							$result = $mysqli -> query($query);
							while($arr_TT = mysqli_fetch_assoc($result)){
								$ten_tt = $arr_TT['name'];
								$id_news = $arr_TT['id_news'];
								$pre = $arr_TT['preview_text'];
								$hinhanh = $arr_TT['picture'];
								$url = '/BNews/files/'.$hinhanh;

							?>
								<li>
									<h2>
										<a href="chitiet.php?id_tt=<?php echo $id_news;?>" title=""><?php echo $ten_tt;?></a>
									</h2>
									<div class="item">
										<a href="chitiet.php?id_tt=<?php echo $id_news;?>" title=""><img src="<?php echo $url; ?>" alt="" /></a>
										<p><?php echo $pre; ?></p>
										<div class="clr"></div>
									</div>
								</li>
							<?php 
							}
							?>
							</ul>
							
							<div class="paginator">
								<a href="">Trang 1</a> | 
								<a href="" class="active">Trang 2</a> |
								<a href="">Trang 3</a> |
								<a href="">Trang 4</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clr"></div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/public/inc/footer.php';?>		