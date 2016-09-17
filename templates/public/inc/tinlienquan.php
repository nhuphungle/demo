
			<?php
				//include_once "dbconnect.php";
				//$id_dmt = $_GET['id_DMT'];
				$sql = "SELECT * FROM news WHERE id_cat = {$id_cat} AND id_news != {$id_n} ORDER BY id_news DESC";
				$result1 = $mysqli->query($sql);
			?>
			<ul>
			<?php
				while($arr_New = mysqli_fetch_assoc($result1)){
					//echo "<pre>";
					//print_r($arr_TT);
					//echo "</pre>";
					$id_tt = $arr_New['id_news'];
					$ten_tt = $arr_New['name'];
					$hinhanh = $arr_New['picture'];
					$pre = $arr_New['preview_text'];
					$url = '/BNews/files/'.$hinhanh;

			?>	

				<li>
					<h2>
						<a href="chitiet.php?id_tt=<?php echo $id_tt; ?>" title=""><?php echo $ten_tt;?></a>
					</h2>
					<div class="item">
						<a href="chitiet.php?id_tt=<?php echo $id_tt; ?>" title=""><img src="<?php echo $url; ?>" alt=""></a>
						<p><?php echo $pre; ?></p>
						<div class="clr"></div>
					</div>
				</li>
			<?php
				}
			?>	
			</ul>