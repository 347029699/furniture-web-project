<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>家具产品添加</title>
</head>

<body>
<h1>添加产品</h1>
<form action="" name="form" method="post" enctype="multipart/form-data">
	请输入家具名称：<input type="text" name="name">
	</br></br>分类：<select name="sort"><option value="沙发">沙发</option><option value="椅子">椅子</option><option value="写字台">写字台</option><option value="床">床</option><option value="茶几">茶几</option><option value="书柜">书柜</option></select>
	</br></br>请输入现价：<input type="text" name="nprice">元
	</br></br>请输入原价：<input type="text" name="oprice">元
	</br></br>标签：<select name="label"><option value="无">无</option><option value="热销">热销</option><option value="新品">新品</option></select>
    </br></br>产品图片添加 ： <input type="file" name="file" />
	</br></br>
    <input type="submit" name="submit" value="保存并更新" />
</form>
</body>
<?php
require("fun.php");
if(isset($_POST['submit'])){
$file = $_FILES['file'];//得到传输的数据
$filename ="./img/product".time().$_FILES["file"]["name"];//改名
$filename =iconv("UTF-8","gb2312",$filename);//转码，把utf-8转成gb2312,返回转换后的字符串， 或者在失败时返回 FALSE。
$type = strtolower(substr($filename,strrpos($filename,'.')+1)); //得到文件类型，并且都转化成小写
$allow_type = array('jpg','jpeg','gif','png'); //定义允许上传的类型
//判断文件类型是否被允许上传
if(!in_array($type, $allow_type)){
  //如果不被允许，则直接停止程序运行
  echo"图片格式错误！";
  return ;
}
//判断是否是通过HTTP POST上传的
if(!is_uploaded_file($file['tmp_name'])){
  //如果不是通过HTTP POST上传的
  echo"上传错误！";
  return ;
}
$upload_path = ".\BS\img\product"; //上传文件的存放路径
//开始移动文件到相应的文件夹
if( move_uploaded_file($file['tmp_name'],$upload_path.$filename)){
	echo "图片上传成功!";
	$name=$_POST['name'];
	$nprice=$_POST['nprice'];
	$oprice=$_POST['oprice'];
	$sort=$_POST['sort'];
	$label=$_POST['label'];
	$img="img/product/".$filename.".".$type;
	if($name&&$price=""){
		echo"<script>alert('名字与价格不能为空！')</script>";
	}
	else if(!preg_match("/^[\d]$/",$oprice)){
		echo"<script>alert('原价必须为数字！')</script>";
	}
	else if(!preg_match("/^[\d]$/",$nprice)){
		echo"<script>alert('现价必须为数字！')</script>";
	}
	$query="insert into products set (name,sort,nprice,oprice,label,img)values('$name','$sort',$nprice,$oprice,'$label','$img')";
	if($result=mysql_query($query)){
		echo"<script>alert('产品添加成功！')</script>";
		echo "window.location.href='creatproducts.php'"; 
	}else{
		echo"数据库上传失败";	
	}
}else{
 	echo "图片上传失败!";
}
}
?>