<!doctype html>
<html class="no-js" lang="en">
<?php
	require("fun.php");
	 $num=$_SERVER["QUERY_STRING"];//获取路径
	?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product Details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->		
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    
    <!-- All css files are included here. -->
    <!-- Bootstrap framework main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">
    
    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  
	<!-- header start -->
	<header class="header-pos blg">
		<div class="header-area header-middle">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2 col-sm-3 col-xs-12">
						<div class="logo">
							<a href="index.php"><img src="img/logo/logo1.png" alt="" /></a>
						</div>
					</div>
					<div class="col-md-10 col-sm-9 col-xs-12 text-right xs-center">
						<div class="main-menu display-inline hidden-sm hidden-xs">
							<nav>
                                <ul>
                                    <li><a href="index.php">首页</a></li>
                                    <li><a href="shop.php">更多家具</a></li>
                                    <li><a href="#">关于我们</a></li>
                                    <li><a href="#">联系方式</a></li>
                                    <li><a href="#" onclick="openwin()">留言板</a></li>
                                </ul>
                            </nav>
						</div>
						<div class="search-block-top display-inline">
							<div class="icon-search"></div>
							<div class="toogle-content">
								<form action="#" id="searchbox">
									<input type="text" placeholder="Search" />
									<button class="button-search"></button>
								</form>
							</div> 
						</div>
						<div class="setting-menu display-inline">
							<div class="icon-nav current"></div>
							<ul class="content-nav toogle-content">
								<li class="currencies-block-top">
									<div class="current"><b>语言</b></div>
									<ul>
										<li><a href="#">中文 (CHINESE)</a></li>
										<li><a href="#">英文 (ENGLISH)</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header end -->
	<div class="space-custom"></div>
	<!-- breadcrumb start -->
	<div class="breadcrumb-area">
		<div class="container">
			<ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i></a></li>
			</ol>			
		</div>
	</div>
	<!-- breadcrumb end -->
	<!-- shop-area start -->
	<div class="shop-area">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-5">					
					<div class="product-zoom">
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="home">
								<div class="pro-large-img">
								<?php
								 $query=mysql_query("select * from products where id='$num'"); 
								 $value = mysql_fetch_array($query)
								?>
									<img src="<?php echo $value['img'] ?>" alt="" />
									<a class="popup-link" href="<?php echo $value['img'] ?>">放大图片 <i class="fa fa-search-plus" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>				
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-7">
					<div class="product-details">
						<h2 class="pro-d-title"><?php echo $value['name'] ?></h2>
						<div class="pro-ref">
							<p>
								<label>原料   : </label> 
								<span> <?php echo $value['material'] ?></span>
							</p>
							<p>
								<label>尺寸（m）  ： </label> 
								<span><?php echo $value['size'] ?></span>
							</p>							
						</div>
						<div class="price-box">
							<span class="price product-price"><?php echo $value['nprice'] ?>￥</span>
							<span class="old-price product-price"><?php echo $value['oprice'] ?>￥</span>
						</div>
						<div class="short-desc">
							<p>俗话说“万丈高楼从地起”无论从款式、做工、材质，酷森的家具可谓是经得起考验与比较的。实木家具不仅要做到以上几点，更重要的是让实木 家具做到典雅、线条自然流畅、装饰简洁，浑然天成、不事雕饰；清式简洁气派壮重、精雕细琢，料无所不用其极；观其形、赏其工、品其内涵 ，方谓赏之妙处。故为爱好书画、向往艺术之士，特别喜爱的现代实木家具，它的严格精湛的工艺流程更是让专业人士叹为观止。</p>
						</div>
						<b>
						到店支持以下支付方式：
						</b>
						<div class="share-icon">
							<a ><i class="pay"><img src="img/payment/1.png"></i>  现金支付</a>
							<a ><i class="pay"><img src="img/payment/2.png"></i>  微信支付</a>
							<a ><i class="pay"><img src="img/payment/3.png"></i>  支付宝支付</a>
							<a ><i class="pay"><img src="img/payment/4.png"></i>  银联支付</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop-area end -->
	<!-- service-area start -->
	<div class="service-area pt-70 pb-40 gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="single-service mb-30">
						<div class="service-icon">
							<i class="pe-7s-world"></i>
						</div>
						<div class="service-title">
							<h3>快捷送达</h3>
							<p>全国更快更便捷的送至您身边</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service mb-30">
						<div class="service-icon">
							<i class="pe-7s-refresh"></i>
						</div>
						<div class="service-title">
							<h3>免费更换</h3>
							<p>30天内免费更换s</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service mb-30 sm-mrg">
						<div class="service-icon">
							<i class="pe-7s-headphones"></i>
						</div>
						<div class="service-title">
							<h3>优质售后</h3>
							<p>全天24小时保证售后维修</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service mb-30 xs-mrg sm-mrg">
						<div class="service-icon">
							<i class="pe-7s-gift"></i>
						</div>
						<div class="service-title">
							<h3>更多狂欢</h3>
							<p>多买多优惠，更有礼品相送</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- service-area end -->
	<!-- footer start -->
<footer class="black-bg">
	<div class="footer-top-area ptb-60" id="content">
		<div class="container">
			<div class="row">
							<div class="col-md-2 col-sm-4">
					<div class="footer-widget">
						<h3 class="footer-title">导航</h3>
						<ul class="block-content">
							<li><a href="#">热销产品</a></li>
							<li><a href="#">最新产品</a></li>
							<li><a href="#">优质服务</a></li>	
							<li><a href="#">联系我们</a></li>									
						</ul>							
					</div>					
				</div>
				<div class="col-md-3 col-sm-4">
					<div class="footer-widget">
						<h3 class="footer-title">联系我们</h3>
						<div class="footer-contact">
							<ul>
								<li><em class="fa fa-map-marker"></em>浙江省宁波市奉化区 <span>大成东路1599号</span></li>
								<li><em class="fa fa-phone"></em>联系号码:0574-88689681</li>
								<li><em class="fa fa-envelope-o"></em>Email: support@qq.com</li>
							</ul>
						</div>							
					</div>
				</div>
				<div class="col-md-3 col-sm-4 footer-sm">
					<div class="footer-widget">
						<h3 class="footer-title">营业时间</h3>
						<div class="footer-time">
							<p><span class="ft-content"><span class="day">春\夏\秋季</span><span class="time">08:00 - 17:00</span></span></p>
							<p><span class="ft-content"><span class="day">冬季</span><span class="time">09:00 - 16:00</span></span></p>
							<p><li class="fa ft-content">节假日除外</li>	</p>
						</div>							
					</div>					
				</div>
				<div class="col-md-2 col-sm-4 footer-sm">
					<div class="footer-widget">
						<h3 class="footer-title">详细地址</h3>
  						<div style="width:480px;height:260px;border:#ccc solid 1px;" id="dituContent"></div>						
					</div>					
				</div>
			</div>
		</div>
	</div>
</footer>
	<!-- Modal end -->
    
    
        <script language="JavaScript"><!--
　　function openwin() {
　　window.open ("message.php", "newwindow", "height=400, width=800,top=200,left=400,toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no")
　　}　//-->
    </script>
     <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(121.457443,29.675812);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_SMALL});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:0});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"酷森家具",content:"我的备注",point:"121.457847|29.675279",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- ajax-mail js -->
    <script src="js/ajax-mail.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- jquery.nivo.slider js -->
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>
</body>

</html>
