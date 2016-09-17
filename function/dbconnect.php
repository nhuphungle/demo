<?php
		// khởi tạo đối tựng kết nối csdl
	$mysqli =  new mysqli('localhost','root','','bnews');
		//thiết lập lại font chữ 
	$mysqli -> set_charset('utf8');
		//hiển thị thông báo lỗi
	if(mysqli_connect_errno()){
		echo "kết nối không thành không".mysqli_connect_error();
		exit ();
	}
		
?>	
