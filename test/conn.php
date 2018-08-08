<?php
	date_default_timezone_set("PRC");
	header("Content-type:text/html;charset=utf-8");
	$conn=@mysql_connect("localhost","root","12344567")or die("连接失败");
//	echo $conn;
	$db=mysql_select_db("test",$conn);
	mysql_query("set names utf8");
?>