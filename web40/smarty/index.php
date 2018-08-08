<?php
require("config.php");
$arr="测验";
$info="模板测试内容";
$smarty->assign("num",$arr);
$smarty->assign("info",$info);
$smarty->display("index.html");
?>