<?php
	header("Content-type:text/html;charset=utf-8");
	$name=$_POST["names"];
	if($name=="admin"){
		echo "用户名已占用";
	}else{
		echo "用户名可用";
	}
	
?>