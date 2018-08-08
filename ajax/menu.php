<?php
header("content-type:text/html;charset=utf-8");
header("Access-Control-Allow-Origin: *");
$code='[{"id_m":"1","title_m":"百度","addr_m":"http://www.baidu.com","type":"0"},{"id_m":"2","title_m":"腾讯","addr_m":"http://www.qq.com","type":"1","children_m":[{"title_c":"娱乐","addr_c":"http://news.qq.com/"},{"title_c":"新闻","addr_c":"http://finance.qq.com/"},{"title_c":"财经","addr_c":"http://ent.qq.com/"}]},{"id_m":"3","title_m":"网易","addr_m":"http://www.163.com/","type":"1","children_m":[{"title_c":"新闻","addr_c":"http://news.163.com/"},{"title_c":"财经","addr_c":"http://money.163.com/"},{"title_c":"娱乐","addr_c":"http://ent.163.com/"}]}]';
echo json_encode($code);
?>