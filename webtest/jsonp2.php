<?php
header('Content-type:text/json'); 
$json='jsonpCallback([{"title":"天气形势分析","t":"2016年天气暴雨预告形势"},{"title":"最新报告信息","t":"2016最新报告形势采用work文档"}])'; 
echo $json; 

/*接口格式：json格式，传送内容：title代表主标题，t代表副标题。采用jsonpCallback方法传送
显示在div里，每一条标题显示在h里，内容显示在div里*/
?>
