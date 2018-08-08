<?php
date_default_timezone_set ( "PRC" );
header("Content-type: text/html; charset=utf-8"); 
$conn=mysql_connect("localhost","root","root") or die("连接失败");//链接数据库服务器
$db=mysql_select_db("students",$conn);
mysql_query("set names utf8");

?>