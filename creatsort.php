<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>家具产品添加</title>
</head>

<body>
<h1>添加产品</h1>
<form action="" name="form" method="post" enctype="multipart/form-data">
	</br></br>请输入类别：<input type="text" name="sortname">
    <input type="submit" name="submit" value="保存并更新" />
</form>
</body>
<?php
require("fun.php");
if(isset($_POST['submit'])){
	$sortname=$_POST['sortname'];
	$query="insert into sort set (sortname)values('$sortname')";
	if($result=mysql_query($query)){
		echo"<script>alert('类别添加成功！')</script>";
		echo "window.location.href='creatsort.php'"; 
	}else{
		echo"数据库上传失败";	
	}

}
?>