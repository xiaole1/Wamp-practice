<?php
    header("content-type:text/html;charset=utf-8");
    header("Access-Control-Allow-Origin: *");
    $username=$_POST['name'];
    $password=$_POST['passwd'];
    if($username=="admin"){
        echo "01";
    }else{
        echo $password;
    }
    
?>