<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>惠民超市</title>
<script type="text/javascript" src="__PUBLIC__/Index/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/Index/js/index.js"></script>
</head>
<link type="text/css" rel="stylesheet" href="__PUBLIC__/Index/css/global.css" />
<link type="text/css" rel="stylesheet" href="__PUBLIC__/Index/css/index.css" />
<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>惠民超市</title>
<script type="text/javascript" src="__PUBLIC__/Index/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/Index/js/header.js"></script>
</head>
<link type="text/css" rel="stylesheet" href="__PUBLIC__/Index/css/global.css" />
<link type="text/css" rel="stylesheet" href="__PUBLIC__/Index/css/header.css" />
<body>
<div class="header">
	<div class="hTop"><!--首页顶部导航开始-->
    <a href="#" class="hTop-a">收藏惠民</a>
    <ul>
    	<li>你好,欢迎来到惠民!</li>
        <li><a href="#">[登陆]</a><a href="#">[免费注册]</a><s></s></li>
        <li><a href="#">我的订单</a><s></s></li>
        <li class="vip"><img src="__PUBLIC__/Index/images/vip-new-ico.png" width="24" height="11"/>
        <a href="#">会员俱乐部</a></li>
        <li class="phone">
        <i></i><a href="#">手机惠民</a></li>
        <li><a href="#">客户服务</a></li>
        <li><a href="#">网站导航</a></li>
    </ul>
    </div><!--首页顶部导航结束-->
</div>
<div style="width:1210px; margin:0 auto;margin-top:20px;">
    <div class="hMain clear">
        <div class="logo"><a href="#"><img src="__PUBLIC__/Index/images/logo.jpg" width="270"height="80"/></a></div>
        <div class="search">
            <div class="i-search"><!--首页头部搜索开始-->
            <form acttion="#" method="get">
            <input type="text" name="search" placeholder="请输入关键字" value="" class="searchIn"/>
            <input type="button" value="搜索" class="sub"/>
            </form>
            </div>
            <ul>
                <li>热门搜索:</li>
                <li><a href="#">茅台</a></li>
                <li><a href="#">铁观音</a></li>
                <li><a href="#">可乐</a></li>
                <li><a href="#">维生素</a></li>
                <li><a href="#">蛋白质</a></li>
                <li><a href="#">奶粉</a></li>
            </ul>
        </div><!--首页头部搜索结束-->
        
        <div class="myHm"><!--首页头部我的惠/购物车民开始-->
            <div class="myHms"><a href="#">我的惠民</a><b></b></div>
			<div class="myHms-i">
				<p>你好,请<a href="#">登陆</a></p>
                <ul>
                	<li><a href="#">待处理订单</a></li>
                    <li><a href="#">咨询回复</a></li>
                    <li><a href="#">降价商品</a></li>
                    <li><a href="#">优惠卷</a></li>
                </ul>
                <ol>
                	<li><a href="#">我的订单&nbsp;></a></li>
                    <li><a href="#">我的关注&nbsp;></a></li>
                    <li><a href="#">我的惠豆&nbsp;></a></li>
                    <li><a href="#">为我推荐&nbsp;></a></li>
                </ol>
                <div class="myBo clear">
                    <div class="newly">最近浏览的商品：</div>
                    <div class="newly-a"><a href="#">查看浏览历史>></a></div>
                    <div class="newImg clear">
                <dl>
                    <dt><a href="#"><img src="__PUBLIC__/Index/testImg/newly.jpg" width="50" height="50"/></a></dt>
                    <dt><a href="#"><img src="__PUBLIC__/Index/testImg/newly.jpg" width="50" height="50"/></a></dt>
                    <dt><a href="#"><img src="__PUBLIC__/Index/testImg/newly.jpg" width="50" height="50"/></a></dt>
                    <dt><a href="#"><img src="__PUBLIC__/Index/testImg/newly.jpg" width="50" height="50"/></a></dt>
                    <dt><a href="#"><img src="__PUBLIC__/Index/testImg/newly.jpg" width="50" height="50"/></a></dt>
                </dl>
                    </div>
                </div>
			</div>
            
            <!--首页头部购物车-->
			<div class="shoppingCart">
            	<span class="shopping">
                	<span class="shopping-amount">10</span>
                </span>
                <a href="#">去购物车结算</a><b></b>
            </div>
            <div class="sCart-i">
            	<?php if(1 == 0): ?><div class="sCart-box"><b></b>购物车中还没有商品，赶紧选购吧！</div>
            	<?php else: ?>
                <div class="sCartListBox">
                	<h4>最新加入的商品</h4>
                    <!--购物车商品列表-->
                    <div class="sCartList clear">
                    
                    	<div class="sList-top">
                        	<div class="f1">
                        		<span>满减</span>购满3件，即可享受满减优惠
                        	</div>
                        	<div class="f2">小计：￥<span>75.00</span></div>
                        </div>
                        
                       <div class="sList-bottom clear">
                         <div class="f3">
                            <a href="#"><img src="__PUBLIC__/Index/testImg/newly.jpg" width="50" height="50"/></a>
                         </div>
                        
                        <div class="f4"><a href="#">新疆特产 一品玉和田大枣四星450g*3袋</a></div>
                        <div class="f5">
                        	<h5><b style="color:red;">￥75.00</b>
                            <b style="color:#999;">×1</b></h5>
                            <a href="#">删除</a>
                        </div>
                       </div>
                      
                    </div>
                    
                    <div class="sCartList clear">
                    
                    	<div class="sList-top">
                        	<div class="f1">
                        		<span>满减</span>购满3件，即可享受满减优惠
                        	</div>
                        	<div class="f2">小计：￥<span>75.00</span></div>
                        </div>
                        
                       <div class="sList-bottom clear">
                         <div class="f3">
                            <a href="#"><img src="__PUBLIC__/Index/testImg/newly.jpg" width="50" height="50"/></a>
                         </div>
                        
                        <div class="f4"><a href="#">新疆特产 一品玉和田大枣四星450g*3袋</a></div>
                        <div class="f5">
                        	<h5><b style="color:red;">￥75.00</b>
                            <b style="color:#999;">×1</b></h5>
                            <a href="#">删除</a>
                        </div>
                       </div>
                      
                    </div>
                    
                     <!--购物车商品结算-->
                     <div class="closing">
                     	<div class="closTop">
                        	<div class="closTopLeft">共<span>2</span>件商品</div>
                            <div class="closTopRight">共计<strong>￥75.00</strong></div>
                        </div>
                        <div class="closSub clear"><a href="#">去购物车结算</a></div>
                     </div>
                </div><?php endif; ?>
                <!--购物车商品列表结束-->
            </div>
        </div><!--首页头部我的惠民结束-->
    </div>
    
	<div class="hMenu">
    	<div class="hMenu-left"><a href="#">惠民超市分类商品</a><b></b></div>
        <dl class="hMenu-right">
        	<dt><a href="#">平价专场</a></dt>
        	<dt><a href="#">团购</a></dt>
            <dt><a href="#">闪购</a></dt>
            <dt><a href="#">秒杀</a></dt>
            <dt><a href="#">夺宝岛</a></dt>
        </dl>
    </div>
    
    <!--首页头部分类商品-->
    <div class="cateWares">
    	
        <!--生鲜食品-->
    	<div class="gurgle">
        	<div class="gl">
            	<div class="gur-i">
                	<b></b>
                    <h1><a href="#">生鲜食品</a></h1>
                    <ul>
                        <li><a href="#">苹果</a></li>
                        <li><a href="#">苹果</a></li>
                        <li><a href="#">苹果</a></li>
                    </ul>
                </div>
            </div>
        </div>
         <!--类型商品 左边大框-->
        <div class="freshBox">
        	<div class="fConter">
            	<ul>
                	<li><a href="#">水果</a></li>
                    <li><a href="#">蔬菜</a></li>
                    <li><a href="#">海鲜水产</a></li>
                    <li><a href="#">加工类肉食</a></li>
                    <li><a href="#">水果</a></li>
                    <li><a href="#">蔬菜</a></li>
                    <li><a href="#">海鲜水产</a></li>
                    <li><a href="#">加工类肉食</a></li>
                </ul>
                <a href="#"><img src="__PUBLIC__/Index/testImg/tu.png" width="370" height="315"/></a>
            </div>
        </div>
        
        <!--中文美酒-->
        <div class="wine">
        	<div class="wine-gl">
            	<div class="wine-i">
                	<b></b>
                    <h1><a href="#">中外美酒</a></h1>
                    <ul>
                        <li><a href="#">白酒</a></li>
                        <li><a href="#">红酒</a></li>
                        <li><a href="#">葡萄酒</a></li>
                    </ul>
                </div>
            </div>
        </div>
         <!--类型商品 左边大框-->
        <div class="wineBox">
        	<div class="wConter">
            	<ul>
                	<li><a href="#">白酒</a></li>
                    <li><a href="#">蔬菜</a></li>
                    <li><a href="#">海鲜水产</a></li>
                    <li><a href="#">加工类肉食</a></li>
                    <li><a href="#">水果</a></li>
                    <li><a href="#">蔬菜</a></li>
                    <li><a href="#">海鲜水产</a></li>
                    <li><a href="#">加工类肉食</a></li>
                </ul>
                <div>
                	<a href="#"><img src="__PUBLIC__/Index/testImg/jiu.jpg" width="370" height="315"/></a>
                </div>
            </div>
        </div>
        
        <!--饮料冲调-->
        <div class="drink">
        	<div class="drink-gl">
            	<div class="drink-i">
                	<b></b>
                    <h1><a href="#">饮料冲调</a></h1>
                    <ul>
                        <li><a href="#">牛奶</a></li>
                        <li><a href="#">咖啡</a></li>
                        <li><a href="#">茶叶</a></li>
                    </ul>
                </div>
            </div>
        </div>
         <!--类型商品 左边大框-->
        <div class="drinkBox">
        	<div class="dConter">
            	<ul>
                	<li><a href="#">白酒</a></li>
                    <li><a href="#">蔬菜</a></li>
                    <li><a href="#">海鲜水产</a></li>
                    <li><a href="#">加工类肉食</a></li>
                    <li><a href="#">水果</a></li>
                    <li><a href="#">蔬菜</a></li>
                    <li><a href="#">海鲜水产</a></li>
                    <li><a href="#">加工类肉食</a></li>
                </ul>
                <div>
                	<a href="#"><img src="__PUBLIC__/Index/testImg/yin.jpg" width="370" height="315"/></a>
                </div>
            </div>
        </div>
        
        <!--悠闲食品-->
        <div class="leisure">
        	<div class="leisure-gl">
            	<div class="leisure-i">
                	<b></b>
                    <h1><a href="#">悠闲食品</a></h1>
                    <ul>
                        <li><a href="#">干果</a></li>
                        <li><a href="#">巧克力</a></li>
                        <li><a href="#">进口食品</a></li>
                    </ul>
                </div>
            </div>
        </div>
         <!--类型商品 左边大框-->
        <div class="leisureBox">
        	<div class="lConter">
            	<ul>
                	<li><a href="#">白酒</a></li>
                    <li><a href="#">蔬菜</a></li>
                    <li><a href="#">海鲜水产</a></li>
                    <li><a href="#">加工类肉食</a></li>
                    <li><a href="#">水果</a></li>
                    <li><a href="#">蔬菜</a></li>
                    <li><a href="#">海鲜水产</a></li>
                    <li><a href="#">加工类肉食</a></li>
                </ul>
                <div>
                	<a href="#"><img src="__PUBLIC__/Index/testImg/you.jpg" width="370" height="315"/></a>
                </div>
            </div>
        </div>
        
        <!--粮油保健-->
        <div class="oily">
        	<div class="oily-gl">
            	<div class="oily-i">
                	<b></b>
                    <h1><a href="#">粮油、保健</a></h1>
                    <ul>
                        <li><a href="#">橄榄油</a></li>
                        <li><a href="#">大米</a></li>
                        <li><a href="#">花生油</a></li>
                    </ul>
                </div>
            </div>
        </div>
         <!--类型商品 左边大框-->
        <div class="oilyBox">
        	<div class="oConter">
            	<ul>
                	<li><a href="#">白酒</a></li>
                    <li><a href="#">蔬菜</a></li>
                    <li><a href="#">海鲜水产</a></li>
                    <li><a href="#">加工类肉食</a></li>
                    <li><a href="#">水果</a></li>
                    <li><a href="#">蔬菜</a></li>
                    <li><a href="#">海鲜水产</a></li>
                    <li><a href="#">加工类肉食</a></li>
                </ul>
                <div>
                	<a href="#"><img src="__PUBLIC__/Index/testImg/you.jpg" width="370" height="315"/></a>
                </div>
            </div>
        </div>
        
        
    </div>
    <!--首页头部分类商品结束-->
</div>
</body>
</html>
<!--主页头部包含文件-->
<div class="HomeBox"><!--外层盒子开始-->
<div class="HomeAd"></div><!--主页大广告 end-->
<div style="width:1210px;margin:auto;padding-bottom:20px;" class="clear">
	<div class="AdBj"><!--大广告盒子-->
    	<div class="AdLeft">
            	<div class="adL">
                	<a href="#"><img src="__PUBLIC__/Index/ad/hdL1.jpg" width="340" height="260"></a>
                </div>
            	<div class="adR">
                	<a href="#"><img src="__PUBLIC__/Index/ad/hdR1.jpg" width="300" height="370"></a>
                </div>
                <div class="adOpt clear">
                	<a class="curr" href="javascript:void()"></a>
                    <a  class="ff" href="javascript:void()"></a>
                    <a href="javascript:void()"></a>
                    <a href="javascript:void()"></a>
                    <a href="javascript:void()"></a>
                </div>
        </div>
        
        <div class="AdRight">
            	<img src="__PUBLIC__/Index/images/adtop.jpg" width="290" height="68"/>
                <div class="Rbox">
                	<div class="Rbox-top"></div>
                    <div class="RboxMain">
                        <div class="Rbox-fl">
                        	<a href="#"><img src="__PUBLIC__/Index/testImg/adR2.jpg" width="80"height="80"></a>
                            <div class="fl-pos">
                            	<p><a href="#">第二瓶半价!</a></p>
                                <span>￥11.50</span>
                            </div>		
                        </div>
                        
                        <div class="Rbox-fl">
                        	<a href="#"><img src="__PUBLIC__/Index/testImg/adR1.jpg" width="80"height="80"></a>
                            <div class="fl-pos">
                            	<p><a href="#">第二瓶半价!</a></p>
                                <span>￥11.50</span>
                            </div>			
                        </div>
                        
                        <div class="Rbox-fl">
                        	<a href="#"><img src="__PUBLIC__/Index/testImg/adR3.jpg" width="80"height="80"></a>
                            <div class="fl-pos">
                            	<p><a href="#">第二瓶半价!</a></p>
                                <span>￥11.50</span>
                            </div>		
                        </div>
                        
                        <div class="Rbox-fl">
                        	<a href="#"><img src="__PUBLIC__/Index/testImg/adR3.jpg" width="80"height="80"></a>
                            <div class="fl-pos">
                            	<p><a href="#">第二瓶半价!</a></p>
                                <span>￥11.50</span>
                            </div>			
                        </div>
                        
                        <div class="Rbox-fl">
                        	<a href="#"><img src="__PUBLIC__/Index/testImg/adR2.jpg" width="80"height="80"></a>
                            <div class="fl-pos">
                            	<p><a href="#">第二瓶半价!</a></p>
                                <span>￥11.50</span>
                            </div>		
                        </div>
                        
                        <div class="Rbox-fl">
                        	<a href="#"><img src="__PUBLIC__/Index/testImg/adR1.jpg" width="80"height="80"></a>
                            <div class="fl-pos">
                            	<p><a href="#">第二瓶半价!</a></p>
                                <span>￥11.50</span>
                            </div>			
                        </div>
                        
                        <div class="Rbox-fl">
                        	<a href="#"><img src="__PUBLIC__/Index/testImg/adR2.jpg" width="80"height="80"></a>
                            <div class="fl-pos">
                            	<p><a href="#">第二瓶半价!</a></p>
                                <span>￥11.50</span>
                            </div>		
                        </div>
                        
                        <div class="Rbox-fl">
                        	<a href="#"><img src="__PUBLIC__/Index/testImg/adR1.jpg" width="80"height="80"></a>
                            <div class="fl-pos">
                            	<p><a href="#">第二瓶半价!</a></p>
                                <span>￥11.50</span>
                            </div>			
                        </div>
                        
                        <div class="Rbox-fl">
                        	<a href="#"><img src="__PUBLIC__/Index/testImg/adR1.jpg" width="80"height="80"></a>
                            <div class="fl-pos">
                            	<p><a href="#">第二瓶半价!</a></p>
                                <span>￥11.50</span>
                            </div>			
                        </div>
                        
                    </div>
                </div>
            </div>
    </div><!--外层盒子 end-->
	
    <!--手快有,手慢无/新鲜上市-->
	<div class="seckilling clear">
    
		<div class="skLeft">
			<div class="skTop clear">
				<div style="float:left; margin-right:10px;"><h1>手快有，手慢无</h1></div>
				<div style="float:left; color:#999;"><h3> 每日3场准点限量秒杀</h3></div>
			</div>
            
            <div class="mc">
            	<div class="rotate"></div>
                
                <!--疯抢-->
                <div class="sk-tab">
                	<i></i>
                    <div class="sk-clock"></div>
                    <div class="sk-tab-item">
                    	<a href="javascript:viod()" class="left-item-ul">
                        	<b></b>
                            <span>早场 06:00</span>
                        </a>
                        <a href="javascript:viod()" class="center-item-ul">
                        	<b></b>
                            <span class="buy">午场 12:00 正在疯抢</span>
                        </a>
                        <a href="javascript:viod()" class="right-item-ul">
                        	<b></b>
                            <span>晚场 18:00</span>
                        </a>
                    </div>
                </div>
                
                <!--倒计时-->
                <div class="sk-time">
                	<div class="sk-time-text">秒杀计时器</div>
                    <div class="sk-time-num">
                    	<span>06</span>
                        <b>:</b>
                        <span>00</span>
                        <b>:</b>
                        <span>00</span>
                    </div>
                </div>
                
                <!--疯抢列表-->
                <ul class="sk-list">
                	<li class="sk-list-p1">
                    	<div class="sk-list-img">
                        	<a href="#">
                            	<img src="__PUBLIC__/Index/testImg/item.jpg" width="180"height="180"/>
                            </a>
                        </div>
                        <div class="sk-list-name"><a href="#">原材料上涨 最后一批劲爆价格3.8折！</a></div>
                        <div class="sk-list-price">
                        	<strong>￥21.90</strong>
                            <del>58.00</del>
                        </div>
                        <div class="sk-list-btn">
                        	<a href="#">立即秒杀</a>
                        </div>
                    </li>
                    <li class="sk-list-p1">
                    	<div class="sk-list-img">
                        	<a href="#">
                            	<img src="__PUBLIC__/Index/testImg/item.jpg" width="180"height="180"/>
                            </a>
                        </div>
                        <div class="sk-list-name"><a href="#">原材料上涨 最后一批劲爆价格3.8折！</a></div>
                        <div class="sk-list-price">
                        	<strong>￥21.90</strong>
                            <del>58.00</del>
                        </div>
                        <div class="sk-list-btn">
                        	<a href="#">立即秒杀</a>
                        </div>
                    </li>
                    <li class="sk-list-p1">
                    	<div class="sk-list-img">
                        	<a href="#">
                            	<img src="__PUBLIC__/Index/testImg/item.jpg" width="180"height="180"/>
                            </a>
                        </div>
                        <div class="sk-list-name"><a href="#">原材料上涨 最后一批劲爆价格3.8折！</a></div>
                        <div class="sk-list-price">
                        	<strong>￥21.90</strong>
                            <del>58.00</del>
                        </div>
                        <div class="sk-list-btn">
                        	<a href="#">立即秒杀</a>
                        </div>
                    </li>
                </ul>
            </div>
		</div>
        
        <div class="skRight">
        	<div class="skNew"><h1>新鲜上市</h1></div>
            <div class="NewLayout">
            	<div class="N-img"><img src="__PUBLIC__/Index/testImg/skNew.jpg" width="240"height="240"></div>
                <div class="N-name">
                	<a href="#">聚福鲜挪威进口鲜冻三文鱼 刺身生鱼片 每份500克默认带皮发货</a>
                </div>
                <div class="N-ext">海鲜水产生鲜冷,聚福鲜挪威进口鲜冻三文鱼</div>
                <div class="N-price">
                	<strong>￥118.00</strong>
                    <del>￥198.00</del>
                </div>
            </div>
        </div>
        
	</div>
    <!--手快有,手慢无/新鲜上市 end-->
	
    <!--新鲜速递-->
    <div class="fresh">
    	<div class="fresh-mt">新鲜速递</div>
    	<div class="fresh-box clear">
        	<div class="fresh-img">
            	<a href="#"><img src="__PUBLIC__/Index/ad/fr.jpg" width="375"height="310"></a>
            </div>
             <!--新鲜速递 商品列表-->
            <div class="fresh-list">
            	<div class="f-img">
                	<a href="#" class="f-a">
                    	<img src="__PUBLIC__/Index/testImg/pingg.jpg" width="138" height="138"/>
                    </a>
                    <span>￥88.00</span>
                    <div class="f-btn">
                    	<p><a href="#">天禾园生态 陕西延长</a></p>
                        <a href="javascript:viod()" class="btn-s">加入购物车</a>
                    </div>
                </div>
                
                <div class="f-img">
                	<a href="#" class="f-a">
                    	<img src="__PUBLIC__/Index/testImg/pingg.jpg" width="138" height="138"/>
                    </a>
                    <span>￥88.00</span>
                    <div class="f-btn">
                    	<p><a href="#">天禾园生态 陕西延长</a></p>
                        <a href="javascript:viod()" class="btn-s">加入购物车</a>
                    </div>
                </div>
                
                <div class="f-img">
                	<a href="#" class="f-a">
                    	<img src="__PUBLIC__/Index/testImg/pingg.jpg" width="138" height="138"/>
                    </a>
                    <span>￥88.00</span>
                    <div class="f-btn">
                    	<p><a href="#">天禾园生态 陕西延长</a></p>
                        <a href="javascript:viod()" class="btn-s">加入购物车</a>
                    </div>
                </div>
                
                <div class="f-img">
                	<a href="#" class="f-a">
                    	<img src="__PUBLIC__/Index/testImg/pingg.jpg" width="138" height="138"/>
                    </a>
                    <span>￥88.00</span>
                    <div class="f-btn">
                    	<p><a href="#">天禾园生态 陕西延长</a></p>
                        <a href="javascript:viod()" class="btn-s">加入购物车</a>
                    </div>
                </div>
                <div class="f-img">
                	<a href="#" class="f-a">
                    	<img src="__PUBLIC__/Index/testImg/pingg.jpg" width="138" height="138"/>
                    </a>
                    <span>￥88.00</span>
                    <div class="f-btn">
                    	<p><a href="#">天禾园生态 陕西延长</a></p>
                        <a href="javascript:viod()" class="btn-s">加入购物车</a>
                    </div>
                </div>
                <div class="f-img">
                	<a href="#" class="f-a">
                    	<img src="__PUBLIC__/Index/testImg/pingg.jpg" width="138" height="138"/>
                    </a>
                    <span>￥88.00</span>
                    <div class="f-btn">
                    	<p><a href="#">天禾园生态 陕西延长</a></p>
                        <a href="javascript:viod()" class="btn-s">加入购物车</a>
                    </div>
                </div>
                <div class="f-img">
                	<a href="#" class="f-a">
                    	<img src="__PUBLIC__/Index/testImg/pingg.jpg" width="138" height="138"/>
                    </a>
                    <span>￥88.00</span>
                    <div class="f-btn">
                    	<p><a href="#">天禾园生态 陕西延长</a></p>
                        <a href="javascript:viod()" class="btn-s">加入购物车</a>
                    </div>
                </div>
                <div class="f-img">
                	<a href="#" class="f-a">
                    	<img src="__PUBLIC__/Index/testImg/pingg.jpg" width="138" height="138"/>
                    </a>
                    <span>￥88.00</span>
                    <div class="f-btn">
                    	<p><a href="#">天禾园生态 陕西延长</a></p>
                        <a href="javascript:viod()" class="btn-s">加入购物车</a>
                    </div>
                </div>
                <div class="f-img">
                	<a href="#" class="f-a">
                    	<img src="__PUBLIC__/Index/testImg/pingg.jpg" width="138" height="138"/>
                    </a>
                    <span>￥88.00</span>
                    <div class="f-btn">
                    	<p><a href="#">天禾园生态 陕西延长</a></p>
                        <a href="javascript:viod()" class="btn-s">加入购物车</a>
                    </div>
                </div>
                <div class="f-img">
                	<a href="#" class="f-a">
                    	<img src="__PUBLIC__/Index/testImg/pingg.jpg" width="138" height="138"/>
                    </a>
                    <span>￥88.00</span>
                    <div class="f-btn">
                    	<p><a href="#">天禾园生态 陕西延长</a></p>
                        <a href="javascript:viod()" class="btn-s">加入购物车</a>
                    </div>
                </div>
            </div>
            <!--新鲜速递 商品列表 end-->
        </div>
    </div><!--新鲜速递 end-->
    
    <!--名酒柜开始-->
    <div class="vintage">
    	<div class="v-left">
        	<div class="vText">名酒柜</div>
            <ul>
            	<li><a href="#">
                	<img src="__PUBLIC__/Index/testImg/wine1.jpg" width="240" height="350"/>
                </a></li>
                <li><a href="#">
                	<img src="__PUBLIC__/Index/testImg/wine2.jpg" width="240" height="350"/>
                </a></li>
                <li><a href="#">
                	<img src="__PUBLIC__/Index/testImg/wine3.jpg" width="240" height="350"/>
                </a></li>
            </ul>
        </div>
        <div class="v-right">
        	<div class="vText">粮油橱柜</div>
            <ul>
            	<li><a href="#">
                	<img src="__PUBLIC__/Index/testImg/wine4.jpg" width="240" height="350"/>
                </a></li>
                <li><a href="#">
                	<img src="__PUBLIC__/Index/testImg/wine5.jpg" width="240" height="350"/>
                </a></li>
            </ul>
        </div>
    </div><!--名酒柜 end-->
    
    <!--地理美食-->
	<div class="gCate clear">
    	<div class="gTop clear">
				<div style="float:left; margin-right:10px;"><h1>美食地理</h1></div>
				<div style="float:left; color:#999;"><h3>带您吃遍世界各地</h3></div>
                <div class="open clear">
                	<span class="g-o-t">芝麻开门！</span>
                    <span class="g-o-sci"></span>
                </div>
		</div>
        <!--遮罩层/隐藏优惠劵-->
        <div class="g-hide">
        	<span class="g-h-close"></span>
        	<h1>发现了一张优惠券</h1>
            <a href="#" class="g-h-a">
            	<div class="g-h-top">
                	<p>大唐西域</p>
                	<p>满199减10元</p>
                </div>
                <div class="g-h-bottom">
                	<p>收下啦</p>
                    <span></span>
                </div>
            </a>
        </div>
         <!--遮罩层/隐藏优惠劵 end-->
		<div class="g-left">
			 <div class="g-left-ul">
             	<ul>
                   <li class="g-li1 curr"><span class="currs"></span><p>新疆</p></li>
                   <li class="g-li2"><span></span><p>四川</p></li>
                   <li class="g-li3"><span></span><p>内蒙</p></li>
                   <li class="g-li4"><span></span><p>湖南</p></li>
                   <li class="g-li5"><span></span><p>浙江</p></li>
                   <li class="g-li6"><span></span><p>湖北</p></li>
                   <li class="g-li7"><span></span><p>北京</p></li>
                   <li class="g-li8"><span></span><p>辽宁</p></li>
                   <li class="g-li9"><span></span><p>山西</p></li>
                   <li class="g-li10"><span></span><p>云南</p></li>
                </ul>
                <div class="car"></div>
             </div>
             <div class="g-left-box">
             	<div class="g-list">
                	<div class="g-list-img">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/ga1.jpg" width="100" height="100"/></a>
                    </div>
                	<div class="g-list-btn">
                        <p><a href="#">新疆特产 一品玉和田大枣六星450g*3袋</a></p>
                        <strong>￥109.00</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </div>
               <div class="g-list">
                	<div class="g-list-img">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/ga1.jpg" width="100" height="100"/></a>
                    </div>
                	<div class="g-list-btn">
                        <p><a href="#">新疆特产 一品玉和田大枣六星450g*3袋</a></p>
                        <strong>￥109.00</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </div>
                <div class="g-list">
                	<div class="g-list-img">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/ga1.jpg" width="100" height="100"/></a>
                    </div>
                	<div class="g-list-btn">
                        <p><a href="#">新疆特产 一品玉和田大枣六星450g*3袋</a></p>
                        <strong>￥109.00</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </div>
                <div class="g-list">
                	<div class="g-list-img">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/ga1.jpg" width="100" height="100"/></a>
                    </div>
                	<div class="g-list-btn">
                        <p><a href="#">新疆特产 一品玉和田大枣六星450g*3袋</a></p>
                        <strong>￥109.00</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </div>
             </div>
		</div>
        
        <div class="g-right">
        	<div class="g-right-ul">
             	<ul>
                   <li class="p-li1 curr"><span class="currs"></span><p>法国</p></li>
                   <li class="p-li2"><span></span><p>西班牙</p></li>
                   <li class="p-li3"><span></span><p>德国</p></li>
                   <li class="p-li4"><span></span><p>意大利</p></li>
                   <li class="p-li5"><span></span><p>中国</p></li>
                </ul>
                <div class="plane"></div>
             </div>
             <div class="g-right-box">
             	<div class="g-list">
                	<div class="g-list-img">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/ga1.jpg" width="100" height="100"/></a>
                    </div>
                	<div class="g-list-btn">
                        <p><a href="#">新疆特产 一品玉和田大枣六星450g*3袋</a></p>
                        <strong>￥109.00</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </div>
               <div class="g-list">
                	<div class="g-list-img">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/ga1.jpg" width="100" height="100"/></a>
                    </div>
                	<div class="g-list-btn">
                        <p><a href="#">新疆特产 一品玉和田大枣六星450g*3袋</a></p>
                        <strong>￥109.00</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </div>
                <div class="g-list">
                	<div class="g-list-img">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/ga1.jpg" width="100" height="100"/></a>
                    </div>
                	<div class="g-list-btn">
                        <p><a href="#">新疆特产 一品玉和田大枣六星450g*3袋</a></p>
                        <strong>￥109.00</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </div>
                <div class="g-list">
                	<div class="g-list-img">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/ga1.jpg" width="100" height="100"/></a>
                    </div>
                	<div class="g-list-btn">
                        <p><a href="#">新疆特产 一品玉和田大枣六星450g*3袋</a></p>
                        <strong>￥109.00</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </div>
             </div>
        </div>
        
	</div>
    <!--地理美食 end-->
    
    <!--我渴了商品列表-->
    <div class="catalogue">
    	<div class="cl-left">
        	<div class="cl-l-img"><img src="__PUBLIC__/Index/testImg/ll.jpg" width="240" height="415"/></div>
            <div class="cl-left-top">我渴了。</div>
        </div>
        <div class="cl-center">
        	<ul>
            	<li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
            </ul>
            <ul>
            	<li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="cl-right">
        	<ul>
            	<li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r1.jpg" width="130" height="70"/>
                        <span class="cl-title">汇源</span>
                    </a>
                </li>
                <li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r2.jpg" width="130" height="70"/>
                        <span class="cl-title">露露</span>
                    </a>
                </li>
                <li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r3.jpg" width="130" height="70"/>
                        <span class="cl-title">雀巢</span>
                    </a>
                </li>
                <li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r4.jpg" width="130" height="70"/>
                        <span class="cl-title">朗博</span>
                    </a>
                </li>
                <li class="cl-end">
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r5.jpg" width="130" height="70"/>
                        <span class="cl-title">Perrier巴黎水</span>
                    </a>
                </li>
               
            </ul>
        </div>
    </div>
    <!--我渴了商品列表 end-->
    
     <!--我饿了商品列表-->
    <div class="catalogue">
    	<div class="cl-left">
        	<div class="cl-l-img"><img src="__PUBLIC__/Index/testImg/ll1.jpg" width="240" height="415"/></div>
            <div class="cl-left-top foor1">我饿了。</div>
        </div>
        <div class="cl-center">
        	<ul>
            	<li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
            </ul>
            <ul>
            	<li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="cl-right foorR1">
        	<ul>
            	<li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r1.jpg" width="130" height="70"/>
                        <span class="cl-title">汇源</span>
                    </a>
                </li>
                <li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r2.jpg" width="130" height="70"/>
                        <span class="cl-title">露露</span>
                    </a>
                </li>
                <li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r3.jpg" width="130" height="70"/>
                        <span class="cl-title">雀巢</span>
                    </a>
                </li>
                <li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r4.jpg" width="130" height="70"/>
                        <span class="cl-title">朗博</span>
                    </a>
                </li>
                <li class="cl-end">
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r5.jpg" width="130" height="70"/>
                        <span class="cl-title">Perrier巴黎水</span>
                    </a>
                </li>
               
            </ul>
        </div>
    </div>
    <!--我渴了商品列表 end-->
    
     <!--我闲了商品列表-->
    <div class="catalogue">
    	<div class="cl-left">
        	<div class="cl-l-img"><img src="__PUBLIC__/Index/testImg/ll3.jpg" width="240" height="415"/></div>
            <div class="cl-left-top foor2">我闲了。</div>
        </div>
        <div class="cl-center">
        	<ul>
            	<li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
            </ul>
            <ul>
            	<li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="cl-right foorR2">
        	<ul>
            	<li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r1.jpg" width="130" height="70"/>
                        <span class="cl-title">汇源</span>
                    </a>
                </li>
                <li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r2.jpg" width="130" height="70"/>
                        <span class="cl-title">露露</span>
                    </a>
                </li>
                <li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r3.jpg" width="130" height="70"/>
                        <span class="cl-title">雀巢</span>
                    </a>
                </li>
                <li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r4.jpg" width="130" height="70"/>
                        <span class="cl-title">朗博</span>
                    </a>
                </li>
                <li class="cl-end">
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r5.jpg" width="130" height="70"/>
                        <span class="cl-title">Perrier巴黎水</span>
                    </a>
                </li>
               
            </ul>
        </div>
    </div>
    <!--我渴了商品列表 end-->
    
     <!--我馋了商品列表-->
    <div class="catalogue">
    	<div class="cl-left">
        	<div class="cl-l-img"><img src="__PUBLIC__/Index/testImg/ll4.jpg" width="240" height="415"/></div>
            <div class="cl-left-top foor3">我馋了。</div>
        </div>
        <div class="cl-center">
        	<ul>
            	<li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-cen-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
            </ul>
            <ul>
            	<li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
                <li  class="cl-bot-list">
                	<div class="cl-l-box">
                    	<a href="#"><img src="__PUBLIC__/Index/testImg/we.jpg" width="100" height="100"/></a>
                        <p><a href="#">单立减5元！正宗凉茶加多宝</a></p>
                        <strong>￥78.90</strong>
                        <span><a href="javascript:void()">加入购物车</a></span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="cl-right foorR3">
        	<ul>
            	<li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r1.jpg" width="130" height="70"/>
                        <span class="cl-title">汇源</span>
                    </a>
                </li>
                <li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r2.jpg" width="130" height="70"/>
                        <span class="cl-title">露露</span>
                    </a>
                </li>
                <li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r3.jpg" width="130" height="70"/>
                        <span class="cl-title">雀巢</span>
                    </a>
                </li>
                <li>
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r4.jpg" width="130" height="70"/>
                        <span class="cl-title">朗博</span>
                    </a>
                </li>
                <li class="cl-end">
                	<a href="#">
                    	<img src="__PUBLIC__/Index/ad/r5.jpg" width="130" height="70"/>
                        <span class="cl-title">Perrier巴黎水</span>
                    </a>
                </li>
               
            </ul>
        </div>
    </div>
    <!--我渴了商品列表 end-->
    <div class="goTop"></div>
</div>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<link type="text/css" rel="stylesheet" href="__PUBLIC__/Index/css/global.css" />
<link type="text/css" rel="stylesheet" href="__PUBLIC__/Index/css/footer.css" />
<body>
<div class="end clear">
	<div class="end-box">
    	<div class="box-top">
        	<dl class="fore1">
                <dt><b></b><strong>购物指南</strong></dt>
                <dd>
                    <div><a href="#">购物流程</a></div>
                    <div><a href="#" >会员介绍</a></div>
                    <div><a href="#">团购/机票</a></div>
                    <div><a href="#">常见问题</a></div>
                    <div><a href="#">大家电</a></div>
                    <div><a href="#">联系客服</a></div>
                </dd>
			</dl>
            <dl class="fore2">		
                <dt><b></b><strong>配送方式</strong></dt>
                <dd>
                    <div><a href="#">上门自提</a></div>
                    <div><a href="#">211限时达</a></div>
                    <div><a href="#">配送服务查询</a></div>
                    <div><a href="#">配送费收取标准</a></div>
                    <div><a href="#">海外配送</a></div>
                </dd>
			</dl>
            <dl class="fore3">
                <dt><b></b><strong>支付方式</strong></dt>
                <dd>
                    <div><a href="#">货到付款</a></div>
                    <div><a href="#">在线支付</a></div>
                    <div><a href="#">分期付款</a></div>
                    <div><a href="#">邮局汇款</a></div>
                    <div><a href="#">公司转账</a></div>
                </dd>
			</dl>
            <dl class="fore4">		
                <dt><b></b><strong>售后服务</strong></dt>
                <dd>
                    <div><a href="#">售后政策</a></div>
                    <div><a href="#">价格保护</a></div>
                    <div><a href="#">退款说明</a></div>
                    <div><a href="#">返修/退换货</a></div>
                    <div><a href="#">取消订单</a></div>
                </dd>
			</dl>
            <dl class="fore5">
                <dt><b></b><strong>特色服务</strong></dt>
                <dd>			
                    <div><a href="#">夺宝岛</a></div>
                    <div><a href="#">DIY装机</a></div>
                    <div><a href="#">延保服务</a></div>
                    <div><a href="#">京东卡</a></div>
                    <div><a href="#">节能补贴</a></div>
                </dd>
			</dl>
        </div>
        <div style="text-align: center; margin-top:15px;">
			<p>
				<a target="_blank" href="#">惠民简介</a> | 
				<a target="_blank" href="#">About FORTHWITH</a> | 
				<a target="_blank" href="#">广告服务</a> | 
				<a target="_blank" href="#">联系我们</a> | 
				<a target="_blank" href="#">招聘信息</a> | 
				<a target="_blank" href="#">网站律师</a> | 
				<a target="_blank" href="#">FORTHWITH English</a> | 
				<a target="_blank" href="#">通行证注册</a> | 
				<a target="_blank" href="#">产品答疑</a>
			</p>
				Copyright &#169; 2013 - 2014 FORTHWITH Corporation, All Rights Reserved
			<br><br>
				惠民公司 <a target="_blank" href="#">版权所有</a>
			<br>
			</div>
    </div>
</div>
</body>
</html>
<!--页脚包含文件-->
</div><!--外层盒子结束-->
</body>
</html>