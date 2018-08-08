<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<h2>php页面</h2>
<?php
$person=array("name"=>"lily","age"=>"19","sex"=>"男");
print_r($person);
foreach($person as $name=>$value){
	echo $name.":".$value."<br>";
}
?>
</body>
</html>