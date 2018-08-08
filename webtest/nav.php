<?php
header("content:text/html;charset=utf-8");
$str='[[{"p_id":"1","p_type":"node","child":["a","b","c"]},{"p_id":"2","p_type":"js"}],[{"p_id":"3","p_type":"node","child":["d","e","f"]},{"p_id":"4","p_type":"ss"}]]';
echo $str;
//<!-- 显示二级菜单
//包含child表示有二级菜单内容为child里的内容，一级菜单显示p_type内容 -->
?>