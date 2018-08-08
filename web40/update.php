<?php
require("conn.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$id=$_GET["id"];
$sql="select * from stu where id_s=$id";
$rs=mysql_query($sql,$conn);
$arr=mysql_fetch_array($rs);
do{
	?>
<form name="form1" action="c_update.php" method="post">
<input type="hidden" name="id" value="<?php echo $arr['id_s'];?>">
姓名:<input type="text" name="username" value="<?php echo $arr['name_s'];?>"><br>
<?php 
if($arr['sex_s']=="男"){
	
	
	?>
性别：<input type="radio" name="sex" value="男" checked>男<input type="radio" name="sex" value="女">女<br>
<?php
}else{
?>
性别：<input type="radio" name="sex" value="男" >男<input type="radio" name="sex" value="女" checked>女<br>
<?php
		}
	
?>
电话:<input type="text" name="tel" value="<?php echo $arr['tel_s'];?>"><br>
 出生年：<select name="age">
<option value="28" selected>1990</option>
<option value="27">1991</option>
<option value="26">1992</option>
<option value="25">1993</option>
<option value="24">1994</option>
</select>
<br>
地址:<textarea name="address"><?php echo $arr['address_s'];?></textarea><br>
<input type="submit" name="sub" value="修改">
</form>
<?php
	
}while($arr=mysql_fetch_array($rs));
mysql_free_result($rs);
mysql_close($conn);
?>
</body>
</html>