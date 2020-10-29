<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>家具后台管理</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.useso.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script LANGUAGE="JavaScript"><!--
　　function openwin() {
　　window.open ("creatproducts.php", "newwindow", "height=400, width=800,top=200,left=400,toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no")
　　}
 
    </script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand">家具后台管理</a>
            </div>

            <div class="header-right">
                您好，欢迎登录后台管理系统
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="admin.php"><i class="fa fa-home "></i>后台首页</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>产品管理<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="product-list.php">产品列表</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-list "></i>分类管理<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="sort-list.php">分类列表</a>
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="#"><i class="fa fa-comments-o "></i>留言板<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="message-list.php">留言列表</a>
                            </li>
                        </ul>
                    </li>                      
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
        <div>
        <input type="button" onclick="openwin()" value="新增产品">
        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-content">
                            <div class="table-responsive">
                                <table style="width: 1350px" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>名称</th>
                                            <th>分类</th>
                                            <th>现价</th>
                                            <th>原价</th>
                                            <th>标签</th>
                                            <th>尺寸（m）</th>
                                            <th>原料</th>
                                            <th>图片</th>
                                            <th>编辑</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require("fun.php");
                                            $query=mysql_query("select * from products");
                                            $i=0;
                                            while($value = mysql_fetch_array($query)){
                                            ++$i;
                                                if($i%=1){
                                                    $class='odd';                                   
                                                }else{
                                                    $class='even';}
                                                ?>
                                            <form method="post">
                                            <tr>
                                            <td><?php echo $value['id'] ?></td><input type="hidden" value="<?php echo $value['id'] ?>" name="id">
                                            <td><?php echo $value['name'] ?></td>
                                            <td><?php echo $value['sort'] ?></td>
                                            <td><?php echo $value['nprice'] ?></td>
                                            <td><?php echo $value['oprice'] ?></td>
                                            <td><?php echo $value['label'] ?></td>
                                            <td><?php echo $value['size'] ?></td>
                                            <td><?php echo $value['material'] ?></td>
                                             <td><img style="height: 80px;width: 80px;" src="<?php echo $value['img'] ?>"></td>
                                            <td class="center"> 
                                            <a href="editproduct.php?id=<?php echo $value['id']  ?>">
                                            <input type="button" value="编辑"  class="button" name="edit" onclick="window.location.href('连接')" >
                                            </a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="button" value="删除"  class="button" name="del" onclick="del()"></td>
                                            </tr>
                                            </form> 
                                            <?php }
                                                if(isset($_POST['del'])){
                                                $id=$_POST['id'];
                                                $del=mysql_query("Delete from products where id=$id");
                                                if($del){echo"<script>alert('删除成功！')</script>";
                                                    }else{
                                                    echo"<script>alert('删除失败！')</script>";
                                                    }
                                                }
                                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        <script language="javascript">
    function del(){
        if(confirm("您确定要删除吗?")){
            return true;
        }
        else {
            return false;
        }
    }
    </script>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
</body>
</html>
