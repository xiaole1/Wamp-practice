<?php
header('Content-type:text/json'); 
$json='jsonpCallback({"n":"name","p":"password"})'; 
//echo $json;
$fn=$_GET["callback"];
echo "$fn($json)";
/*接口格式：json格式，传送内容：n代表姓名，p代表密码。采用jsonpCallback方法传送
显示在表单的用户名和密码文本框内*/
?>
