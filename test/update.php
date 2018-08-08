<?php
require("conn.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>修改信息</title>
	</head>
	<body>
		<?php
		$id=$_GET["id"];
		$sql="select * from stu where id_s=$id";
		$rs=mysql_query($sql,$conn);
		$arr=mysql_fetch_array($rs);
//		print_r($arr);
		do{?>
		<form name="form1" action="c_update.php" method="post">
			<input type="hidden" name="id" id="id" value="<?php echo $arr['id_s']?>" />
			姓名：<input type="text" name="username" id="username" value="<?php echo $arr['name_s'];?>" /><br />
			年龄：<select name="age" id="age">
					<option value="28">1990</option>
					<option value="27">1991</option>
					<option value="26">1992</option>
					<option value="25">1993</option>
					<option value="24">1994</option>
			</select><br />
			性别：
			<?php
				if($arr['sex_s']=="男"){
			?>
				<input type="radio" name="sex" id="sex" value="男" checked />男<input type="radio" name="sex" value="女" />女<br />
			<?php
				}else{
			?> 
				<input type="radio" name="sex" id="sex" value="男"  />男<input type="radio" name="sex" value="女" checked/>女<br />
			<?php
				}
			?>
			电话：<input type="text" name="tel" id="tel" value="<?php echo $arr['tel_s'];?>"/><br /><br />
			地址：<textarea name="address" id="address" cols="30" rows="10"><?php echo $arr['address_s'];?></textarea><br />
			<input type="submit" name="sub" id="sub" value="修改" />
		</form>
		<?php	
		}while($arr=mysql_fetch_array($rs));
			 mysql_free_result($rs);
			 mysql_close($conn);
		?>
	</body>
</html>