<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>家具产品编辑</title>
</head>

<body>
<h1>产品编辑（若无需更换可以不用编辑）</h1>
	<h4>产品<?php 
	require("fun.php");
	 $num=$_SERVER["QUERY_STRING"];//获取路径
	echo $num;
	$query=mysql_query("select * from products where $num");
	$value = mysql_fetch_array($query)
	 ?> </h4></br></br>
<form action="" name="form" method="post" enctype="multipart/form-data">
	请输入家具名称：<input type="text" name="name" placeholder="默认"></br>家具名:<?php echo $value['name']; ?>
	</br></br>分类：
	<select name="sort">
	<option value="默认">默认</option>
	<option value="沙发">沙发</option>
	<option value="椅子">椅子</option>
	<option value="写字台">写字台</option>
	<option value="床">床</option>
	<option value="茶几">茶几</option>
	<option value="书柜">书柜</option>
	</select>
	</br>分类:<?php echo $value['sort']; ?>
	</br></br>请输入现价：<input type="text" name="nprice" placeholder="默认">元
	</br>现价:<?php echo $value['nprice']; ?>
	</br></br>请输入原价：<input type="text" name="oprice" placeholder="默认">元
	</br>原价:<?php echo $value['oprice']; ?>
	</br></br>标签：
	<select name="label">
	<option value="默认">默认</option>
	<option value="无">无</option>
	<option value="热销">热销</option>
	<option value="新品">新品</option>
	</select>
	</br>标签:<?php echo $value['label']; ?>
	</br></br>
    <input type="submit" name="submit" value="保存并更新" />
</form>
</body>
<?php
if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$nprice=$_POST['nprice'];
	$oprice=$_POST['oprice'];
	$sort=$_POST['sort'];
	$label=$_POST['label'];

	if($name!='默认'){
		$query1="update products set name='$name' where $num";}
		else{$query1="";}
	if($nprice!='默认'){
		$query2="update products set nprice='$nprice' where $num";}
		else{query2="";}
	if($oprice!='默认'){
		$query3="update products set oprice='$oprice' where $num";}
		else{query3="";}
	if($sort!='默认'){
		$query4="update products set sort='$sort' where $num";}	
		else{query4="";}
	if($label!='默认'){
		$query5="update products set label='$label' where $num";}
		else{query5="";}
	if($result=mysql_query($query1,$query2,$query3,$query4,$query5)){
		echo"<script>alert('产品更新成功！')</script>";
		echo "window.location.href='editproducts.php?$num'"; 
	}else{
		echo"数据库上传失败";	
	}
}
?>