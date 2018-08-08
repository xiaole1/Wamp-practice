<?php
header("content-type:text/html;charset=utf-8");
$strhtml="";
$strhtml.="var note=[";
$strhtml.="{\"name\":\"lily\",\"age\":19},";
$strhtml.="{\"name\":\"lucy\",\"age\":19}";
$strhtml.="];";
echo $strhtml;

// 传送方式以字符串形式传输，传输内容为js对象。note为对象名称，name为人名，age为年龄
// 显示在表格里
?>