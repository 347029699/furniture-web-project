<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin-login</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.useso.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="assets/js/jquery.cookie.js"></script>
 	<script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>

</head>
<body style="background-color: #E2E2E2; background-image: url(assets/img/bg.jpg);" >
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <font size="44px">后台管理登录</font>
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                            <div class="panel-body" style="background-color: #FFFFFF;border-radius: 9px;">
                                <form method="post">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" id="number" name="number" class="form-control" placeholder="手机号" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" id="password" name="password" class="form-control"  placeholder="密码" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="remebernumber" />记住账号密码
                                            </label>
                                            <span class="pull-right">
                                                   <a href="#" >忘记密码？ </a> 
                                            </span>
                                        </div>
                                     <input class="btn btn-primary" type="submit" name="btn" value="登录">
                                    <hr /> 
                                </form>
                            </div>
                        </div>
       				 </div>
    				</div>
</body>
</html>
<script type="text/javascript">
    $(function () {   	
    	var number = $.cookie('number');
    　　　　   var password = $.cookie('password');
      //页面加载的时候从cookie中取出用户名和密码填充对应的输入框
       $('#number').val(number);   　　　　  
       $("#password").val(password)
       //选中保存的复选框　
    　　　　if(number != null && number != '' && password != null && password != ''){
    	$("#remebernumber").attr('checked',true);
		}
    });
    
    function remeber(){
    	
    	var number = $("#number").val();
    	var password = $("#password").val();
    	
    	//判断复选框的选择状态添加cookie
    	if ($("#remebernumber").is(":checked")) {		
    	　　　　//存储一个带7天期限的cookie
    	　　　　$.cookie("number", number, { expires: 7 });
    	　　　　$.cookie("password", password, { expires: 7 });
    	　　}
    	　　else {   	　　　　
    	　　　　$.cookie("number", "", { expires: -1 });
    	　　　　$.cookie("password", "", { expires: -1 });
    	　　}
    	//提交表单
    	$("#login_form").submit();
    }
</script>
<?php
include("fun.php");
if(!session_id()){session_start();}
if(!empty($_SESSION['number'])){
    echo"<script>window.location.href='admin.php';</script>";
}
else{
if(isset($_POST['btn'])){
    $number=$_POST['number'];
    $password=$_POST['password'];
    $result = mysql_query("select * from admin where number = '$number'");

    if(empty($result)){
        echo "<script>alert('用户名不存在!');location.href='login.php';</script>"; 
    }else{
        $result = mysql_fetch_array($result);
        $loginpassword = $result['password'];
        if($password==$loginpassword){
         echo"<script>window.location.href='admin.php';</script>";   
           $_SESSION['number']=$number;            ////session
        }else{
                  echo"<script>alert('登录失败，请检查密码是否输入正确！');location.href='login.php';</script>";          // 账号密码错误
        }
    }
    }
}
?>