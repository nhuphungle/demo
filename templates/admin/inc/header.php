<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaTAB EDU - Admin template</title>
        <link rel="stylesheet" type="text/css" href="/BNews/templates/admin/css/styles.css" media="screen" />
		<script type="text/javascript" src="/BNews/libraries/jquery/jquery-1.12.1.min.js"></script>
		<script type="text/javascript" src="/BNews/libraries/jquery/jquery.validate.js"></script>	
		<script type="text/javascript" src="/BNews/libraries/ckeditor/ckeditor.js"></script>
	</head>
	<body>
    	<!-- Header -->
        <div id="header">
            <!-- Header. Status part -->
            <div id="header-status">
                <div class="container_12">
                    <div class="grid_4">
						
                    	<ul class="user-pro">
						<?php
						$hoten = 'Khach';
						if(isset($_SESSION['user_info'])){
							
							$hoten = $_SESSION['user_info']['fullname'];
						
						?>
							<li><a href="Logout.php">Logout</a></li>
							<li>Chào, <a href="profile.php"><?php echo $hoten; ?></a></li>
						<?php
							}else{
						?>		
							<li><a href="Login.php">Login</a></li>
							<li>Chào, <?php echo $hoten ?> </a></li>	
						<?php
						}
						?>
                    	</ul>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End #header-status -->
            
            <!-- Header. Main part -->
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">
                        <div id="logo">
                            <ul id="nav">
                                <li id="current"><a href="index.php">Quản trị</a></li>
                                <li><a href="profile.php">Tài khoản</a></li>
                            </ul>
                        </div><!-- End. #Logo -->
                    </div><!-- End. .grid_12-->
                    <div style="clear: both;"></div>
                </div><!-- End. .container_12 -->
            </div> <!-- End #header-main -->
            <div style="clear: both;"></div>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul>
                            <li><a href="indexNews.php">Tin tức</a></li>
                            <li><a href="indexCat.php">Danh mục</a></li>
							<li><a href="indexUser.php">User</a></li>

                        </ul>
                        
                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->
        
		<div class="container_12">