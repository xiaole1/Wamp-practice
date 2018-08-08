<?php
	require("conn.php");
	$name=$_POST["username"];
	$sex=$_POST["sex"];
	$age=$_POST["age"];
	$tel=$_POST["tel"];
	$address=$_POST["address"];
	$sql="Insert into stu(name_s,sex_s,age_s,tel_s,address_s)value('$name','$sex',$age,'$tel','$address')";
	$rs=mysql_query($sql,$conn);
if($rs){
	echo "<script type='text/javascript'>location.href='select.php';</script>";
}else{
	echo("添加失败");
}
mysql_close($conn);
?>