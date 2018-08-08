<?php
	require("conn.php");
	$id=$_POST["id"];
	$name=$_POST["username"];
	$sex=$_POST["sex"];
	$age=$_POST["age"];
	$tel=$_POST["tel"];
	$address=$_POST["address"];
	$sql="update stu set name_s='$name',sex_s='$sex',age_s='$age',tel_s='$tel',address_s='$address' where id_s = $id;";
	$rs=mysql_query($sql,$conn);
	if($rs){
		echo "<script type='text/javascript'>location.href='select.php';</script>";
	}else{
		echo("修改失败");
	}
	mysql_close($conn);
	
	
?>