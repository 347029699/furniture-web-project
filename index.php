<?php
	require("fun.php");
	?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>家具-首页</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

<!-- All css files are included here. -->
<!-- Bootstrap framework main css -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- This core.css file contents all plugings css file. -->
<link rel="stylesheet" href="css/core.css">
<!-- Theme shortcodes/elements style -->
<link rel="stylesheet" href="css/shortcode/shortcodes.css">
<!-- Theme main style -->
<link rel="stylesheet" href="css/style.css">
<!-- Responsive css -->
<link rel="stylesheet" href="css/responsive.css">
<!-- User style -->
<link rel="stylesheet" href="css/custom.css">

<!-- Modernizr JS -->
<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!-- header start -->
<header class="header-pos">
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
                                    <li><a href="index.php">首页</a> </li>
                                    <li><a href="shop.php">更多家具</a></li>
                                    <li><a href="#about">关于我们</a></li>
                                    <li><a href="#content">联系方式</a></li>
                                    <li><a href="#" onclick="openwin()">留言板</a></li>
                                </ul>
                            </nav>
						</div>
						<div class="search-block-top display-inline">
							<div class="icon-search"></div>
							<div class="toogle-content">
								<form action="search.php" id="searchbox" method="get">
									<input type="text" name="content" placeholder="搜索" />
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
									<li><a href="index.php">中文 (CHINESE)</a></li>
									<li><a href="index-en.php">英文 (ENGLISH)</a></li>
								</ul>
							</li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
	<div class="mobile-menu-area visible-sm visible-xs">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="mobile-menu">
							<nav id="mobile-menu-active">
								<ul>
                                    <li><a href="index.php">首页</a> </li>
                                    <li><a href="shop.php">更多家具</a></li>
                                    <li><a href="#">关于我们</a></li>
                                    <li><a href="#">联系方式</a></li>
                                    <li><a href="#" onclick="openwin()">留言板</a></li>
								</ul>
							</nav>							
						</div>
					</div>
				</div>
			</div>
		</div>
</header>
<div class="slider-container">
	<div id="mainSlider" class="nivoSlider slider-image">
		<img src="img/slider/1.jpg" alt="" title="#htmlcaption1">
		<img src="img/slider/2.jpg" alt="" title="#htmlcaption2">
	</div>
	<div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
		<div class="container">
			<div class="slide1-text">
				<div class="middle-text">
					<div class="cap-dec cap-1 wow bounceInRight" data-wow-duration="0.9s" data-wow-delay="0s">
						<h2>酷森</h2>
					</div>	
					<div class="cap-dec cap-2 wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
						<h2>环保健康</h2>
					</div>	
					<div class="cap-text wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.3s">
						具有独特的风格个性家具原料来自于天然，集自然精华于一身，真实展现实木家具的独特品味
					</div>
					<div class="cap-readmore wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
						<a href="#">更多家具</a>
					</div>	
				</div>	
			</div>				
		</div>
	</div>
	<div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
		<div class="container">
			<div class="slide1-text">
				<div class="middle-text">
					<div class="cap-dec cap-1 wow bounceInRight" data-wow-duration="0.9s" data-wow-delay="0s">
						<h2>欧瑞莎</h2>
					</div>	
					<div class="cap-dec cap-2 wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
						<h2>高雅古典</h2>
					</div>	
					<div class="cap-text wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.3s">
						大气、雍容、华贵、富丽。
					</div>
					<div class="cap-readmore wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
						<a href="#">更多家具</a>
					</div>	
				</div>	
			</div>					
		</div>
	</div>
</div>
<div class="banner-area pt-70">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="single-banner">
					<a href="#"><img src="img/banner/1.jpg" alt="" /></a>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="single-banner">
					<a href="#"><img src="img/banner/2.jpg" alt="" /></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="best-sell-area pt-100">
	<div class="container">
		<div class="row">
			<div class="section-title text-center mb-20">
				<h2>热卖产品</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="product-tab">
					<div class="row">
						<div class="tab-content">
							<div class="tab-pane active" id="home">
								<div class="product-carousel">
										<?php
											$query=mysql_query("select * from products where label='热销'");
											while ($result=mysql_fetch_array($query)){
										?>
									<div class="col-md-12">
										<div class="product-wrapper mb-40">
											<div class="product-img">
												<a href="#"><img style="" src="<?php echo $result['img']; ?>" alt="" /></a>
												<span class="hot-label">热销</span>
											</div>
											<div class="product-content">
												<div class="pro-title">
													<h3><a href="#"><?php echo $result['name']; ?></a></h3>
												</div>
												<div class="price-reviews">
													<div class="price-box">
														<span class="price product-price"><?php echo $result['nprice']; ?>￥</span>
														<span class="old-price product-price"><?php echo $result['oprice']; ?>￥</span>
													</div>
												</div>
											</div>
										</div>
									</div>			
								<?php } ?>							
							</div>
						</div>
					</div>
				</div>					
			</div>
		</div>
	</div>
</div>
<div class="new-arrival-area pt-30">
	<div class="container">
		<div class="row">
			<div class="section-title text-center mb-50">
				<h2>最新产品 </h2>
			</div>
		</div>		
		<div class="row">
			<div class="product-carousel">
				<?php
					$query=mysql_query("select * from products where label='新品'");
						while ($result=mysql_fetch_array($query)){
				?>
				<div class="col-md-12">
					<div class="product-wrapper mb-40">
							<div class="product-img">
								<a href="#"><img src="<?php echo $result['img']; ?>" alt="" /></a>
								<span class="new-label">新品</span>
							</div>
						<div class="product-content">
							<div class="pro-title">
								<h3><a href="#"><?php echo $result['name']; ?></a></h3>
							</div>
							<div class="price-reviews">
								<div class="price-box">
									<span class="price product-price"><?php echo $result['nprice']; ?>￥</span>
									<span class="old-price product-price"><?php echo $result['oprice']; ?>￥</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>					
		</div>
	</div>
</div>
<!-- new-arrival-area end -->
<!-- service-area start -->
<div class="service-area pt-70 pb-40 gray-bg" id="about">
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
						<p>30天内免费更换</p>
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
								<li><em class="fa fa-comments-o"></em></li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:orange" href="#" onclick="openwin()"> 留言板</a>
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
<!-- footer end -->
    <script language="JavaScript"><!--
　　function openwin() {
　　window.open ("message.php", "newwindow", "height=400, width=800,top=200,left=400,toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no")
　　}　//-->
    </script>
<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap framework js -->
<script src="js/bootstrap.min.js"></script>
<!-- ajax-mail js -->
<script src="js/ajax-mail.js"></script>
<!-- owl.carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- jquery.nivo.slider js -->
<script src="js/jquery.nivo.slider.pack.js"></script>
<!-- All js plugins included in this file. -->
<script src="js/plugins.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="js/main.js"></script>
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
</body>
</html>
