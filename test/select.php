<?php
require("conn.php");
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<title>查看表格</title>
	<link rel="stylesheet" type="text/css" href="css/select.css" />
</head>
<body>
	<h3>内容查看</h3>
<?php
		$sql="select * from stu";
		$rs=mysql_query($sql,$conn);
		$arr=mysql_fetch_array($rs);
//		print_r($arr);
		do{?>
			<div>
				<span>姓名：<?php echo $arr["name_s"]?></span>
				<span>性别：<?php echo $arr["sex_s"]?></span>
				<span>年龄：<?php echo $arr["age_s"]?></span>
				<p>地址：<?php echo $arr["address_s"]?></p>
				<a href="del.php?id=<?php echo $arr["id_s"]?>">删除</a>
				<a href="update.php?id=<?php echo $arr["id_s"]?>">修改</a>
			</div>
		<?php
				
		}while($arr=mysql_fetch_array($rs));
		mysql_free_result($rs);
		mysql_close($conn);
?>
<a href="index.html">返回</a>
</body>
</html>