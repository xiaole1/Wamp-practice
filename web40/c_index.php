<?php
require("conn.php");
$name=$_POST["username"];
$sex=$_POST["sex"];
$age=$_POST["age"];
$address=$_POST["address"];
$tel=$_POST["tel"];
$sql="insert into stu(name_s,sex_s,age_s,tel_s,address_s) values('$name','$sex',$age,'$tel','$address')
";
$rs=mysql_query($sql,$conn);
if($rs){
	echo "<script type='text/javascript'>location.href='select.php';</script>";
}else{
	echo "失败";
}
mysql_close($conn);
?>
