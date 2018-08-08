<?php
require("conn.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link href="css/select.css" rel="stylesheet" type="text/css">
</head>
<body>
<h3>显示学员信息</h3>
<?php
$sql="select * from stu";
$rs=mysql_query($sql,$conn);
$arr=mysql_fetch_array($rs);
do{
	?>
    <div class="contents">
<span class="txt">姓名:<?php echo $arr["name_s"];?></span>
<span class="txt">性别:<?php echo $arr["sex_s"];?></span>
<span class="txt">年龄:<?php echo $arr["age_s"];?></span>
<span class="txt">电话:<?php echo $arr["tel_s"];?></span>
<a href="del.php?id=<?php echo $arr["id_s"];?>">删除</a> <a href="update.php?id=<?php echo $arr["id_s"];?>">修改</a>
<p>地址:<?php echo $arr["address_s"];?></p>
</div>
    <?php
	
}while($arr=mysql_fetch_array($rs));
mysql_free_result($rs);
mysql_close($conn);
?>
</body>
</html>