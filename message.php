<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/message.css">
<title>留言板</title>
</head>

<body>
<div class="me">
<h1 align="center">留言板</h1><h4 align="center">如需回复，请留下您的联系方式</h2>
<form method="post">
	<div class="message">
	<textarea rows="18" cols="80" placeholder="请输入您要留言的内容..."  name="message" ></textarea></div></br>
    <div class="sub"><input type="submit" class="submit" name="submit" value="提交" /></div>
</form>
</body>
<?php
require("fun.php");
if(isset($_POST['submit'])){
	$message=$_POST['message'];
	if(!empty($message)){
	$query="insert into message (message) values('$message')";
	$result=mysql_query($query);
	if($result){
		echo"<script>alert('提交成功！')</script>";
		echo "window.location.href='message.php'"; 
	}else{
		echo"<script>alert('提交失败！')</script>";	
	}

}
else{
	echo"<script>alert('提交内容不能为空！')</script>";
}
}
?>