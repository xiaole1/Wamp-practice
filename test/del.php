<?php
	require("conn.php");
	$idm=$_GET["id"];
	$sql="delete from stu where id_s=$idm";
	mysql_query($sql,$conn);
	mysql_close($conn);
	echo "<script type='text/javascript'>location.href='select.php';</script>";
?>