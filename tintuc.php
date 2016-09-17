<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/public/inc/header.php';?>
<div class="leftpanel">
	<?php require_once $_SERVER['DOCUMENT_ROOT'].'/BNews/templates/public/inc/left_bar.php';?>
</div>
<?php
	include_once $_SERVER['DOCUMENT_ROOT']."/BNews/function/dbconnect.php";
	$queryNew = "SELECT id_news,name,preview_text,picture FROM news  ORDER BY id_news DESC";
	$resultNew = $mysqli->query($queryNew);
?>

<div class="rightpanel">
	<div class="rightbody">
		<h1 class="title">Tin tức</h1>
		<div class="items-new">
			<ul>
			<?php
			while($rows = mysqli_fetch_assoc($resultNew)){
				$id_news = $rows['id_news'];
				$name = $rows['name'];
				$preview_text = $rows['preview_text'];
				$picture = $rows['picture'];
				$url = '/BNews/files/'.$picture;

			
			?>
			
				<li>
					<h2>
						<a href="chitiet.php?id_tt=<?php echo $id_news?>" title=""><?php echo $name; ?></a>
					</h2>
					<div class="item">
						<a href="chitiet.php?id_tt=<?php echo $id_news?>" title=""><img src="<?php echo $url ?>" alt="" /></a>
						<p><?php echo $preview_text; ?>
						</p>
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
			
