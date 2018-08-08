<?php
header("content-type:text/html;charset=utf-8");
header("Access-Control-Allow-Origin: *");
$str='[
    {"con":"全面分析","sig":"0","path":"Quanmian"},
    {"con":"领先用户模型","sig":"1","path":"Lingxian","child":[
        {"con":"EasyOps解决方案","path":"Shenru"},
        {"con":"版本比较及购买","path":"Kaifang"}]},
    {"con":"深入分析场景","sig":"0","path":"Shenru"},
    {"con":"开放技术平台","sig":"0","path":"Kaifang"},
    ]';
echo $str;
?>