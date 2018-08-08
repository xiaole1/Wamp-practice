<?php
	header("Access-Control-Allow-Origin:*");
	require("conn.php");
	$sql="select * from stu";
	$result=mysql_query($sql,$conn);
	if (!$result){
		printf("Error:%\n",mysql_error($con));
		exit();
	}
	$jarr= array();
	while ($rows=mysql_fetch_array($result,MYSQL_ASSOC)){
		$count=count($rows);
		for ($i=0;$i<$count;$i++){
			unset($rows[$i]);
		}
		array_push($jarr,$rows);
	}
	$johj=new stdclass();
	foreach($jarr as $key=>$value){
		$jobj->$key=$value;
	}
	echo json_encode($jobj);
	mysql_close($conn);
?>