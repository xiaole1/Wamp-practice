<?php
header("content-type:text/html;charset=utf-8");
require("smarty/Smarty.class.php");
$smarty=new Smarty();
$smarty->template_dir="templates/";
$smarty->compile_dir="templates_c/";
$smarty->config_dir="configs/";
$smarty->cache_dir="cache/";
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";
?>