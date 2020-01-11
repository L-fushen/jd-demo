// JavaScript Document
$(function(){
	//alert(111);
	//广告自动轮播功能
	var arrImgL = new Array(
			"Public/Index/ad/hdL1.jpg",
			"Public/Index/ad/hdL2.jpg",
			"Public/Index/ad/hdL3.jpg",
			"Public/Index/ad/hdL4.jpg",
			"Public/Index/ad/hdL5.jpg"
		);
	
	var arrImgR = new Array(
			"Public/Index/ad/hdR1.jpg",
			"Public/Index/ad/hdR2.jpg",
			"Public/Index/ad/hdR3.jpg",
			"Public/Index/ad/hdR4.jpg",
			"Public/Index/ad/hdR5.jpg"
		);
	
	var thimes=1;
	function chanImgs(){
		//alert(arrImgL[4])
		if(thimes==6){
			thimes=1;
			$(".HomeAd,.AdBj").css("background","#E64245");
		}else if(thimes==2){
			$(".HomeAd,.AdBj").css("background","#41ADEB");
		}else if(thimes==5){
			$(".HomeAd,.AdBj").css("background","#AFD067");
		}else if(thimes==4){
			$(".HomeAd,.AdBj").css("background","#FBA85B");
		}else if(thimes==3){
			$(".HomeAd,.AdBj").css("background","#5B5EA3");
		}
		
		$(".adOpt a").removeClass("curr");
		$(".adOpt a:nth-child("+thimes+")").addClass("curr");
		$(".adL img").attr("src",arrImgL[thimes-1]);//自动轮播广告
		$(".adR img").attr("src",arrImgR[thimes-1]);//自动轮播广告
		thimes++;
	}
	var interval = window.setInterval(function(){//计数器
		chanImgs()
	},4000);
	
	//为每个超链接赋一个mouseover
	$(".adOpt a").each(function(index){
		
		$(this).hover(function(){
			//判断鼠标移到哪个连接上
			if(index==1){
				$(".HomeAd,.AdBj").css("background","#41ADEB");
			}else if(index == 2){
				$(".HomeAd,.AdBj").css("background","#5B5EA3");
			}else if(index == 4){
				$(".HomeAd,.AdBj").css("background","#B0CF68");	
			}else if(index==3){
				$(".HomeAd,.AdBj").css("background","#FBA85C");	
			}else if(index==0){
				$(".HomeAd,.AdBj").css("background","#E64346");
			}
		
			$(".adOpt a").removeClass("curr");
			th = index+1;
			$(".adOpt a:nth-child("+th+")").addClass("curr");
			clearInterval(interval);
			$(".adL img").attr("src",arrImgL[index]);//鼠标移到哪个就显示第几个广告
			$(".adR img").attr("src",arrImgR[index]);//鼠标移到哪个就显示第几个广告
			thimes = index+1;
			},function(){
				//移除鼠标的时候，动画继续进行
			interval = window.setInterval(function(){//计数器
				chanImgs()
			},4000);
		})
	})
	
	//广告右边 商品
	$(".Rbox-fl").each(function(index){
		$(this).hover(function(){
			$(this).children(".fl-pos").show().animate({left:3},200);
		},function(){
			$(this).children(".fl-pos").hide().animate({left:0});	
		})
	})
	
	//太阳自动转动
	var time = 1;
	function sun(){
		$(".rotate").css("-moz-transform","rotate("+time+"deg)");
		$(".rotate").css("-webkit-transform","rotate("+time+"deg)");
		$(".rotate").css("filter",
		"progid:DXImageTransform.AlphaImageLoader(src='Public/Index/images/sun.png', sizingMethod='crop'");
		time++;
	}
	var sunTime = window.setInterval(function(){//计数器
		sun()
	},50);
	
	//疯抢倒计时
	var SysSecond = 21600; //算好了剩余的秒数
	
	function SetRemainTime() {
	   SysSecond = SysSecond - 1;
	   var second = Math.floor(SysSecond % 60); // 计算秒  
	   var minite = Math.floor((SysSecond / 60) % 60);      //计算分 
	   var hour = Math.floor((SysSecond / 3600) % 24);      //计算小时 
	   
	   //将1转换为01
	   	var h = (hour<10 ? "0"+ hour : hour)  
	    var m = (minite<10 ? "0"+ minite : minite) 
		var s = (second<10 ? "0"+ second : second) 
		
	   $(".sk-time-num span:nth-child(5)").text(s);
	   $(".sk-time-num span:nth-child(3)").text(m);
	   $(".sk-time-num span:nth-child(1)").text(h);
 	}
	var InterValObj = window.setInterval(SetRemainTime, 1000); //间隔函数，1秒执
	
	//新鲜速递 商品
	$(".f-img").each(function(index){
		$(this).hover(function(){
			$(this).children(".f-a").animate({top:-36},200);
			$(this).children("span").animate({bottom:58},200);
			$(this).children(".f-btn").animate({bottom:0},200);
		},function(){
			$(this).children(".f-a").animate({top:0},200);
			$(this).children("span").animate({bottom:0},200);
			$(this).children(".f-btn").animate({bottom:-58},200);	
		})
	})
	
	//芝麻开门
	$(".open").click(function(){
		$(".g-o-sci").animate({top:508},1000);
		$(".g-o-t").css("opacity","1");//这句加在append前
		$(".g-o-t").animate({opacity:0},1000);//这句的作用是使DIV缓慢显示
		function opens(){
			$(".g-o-sci").animate({top:20},10).hide();
			$(".g-left").animate({left:-200},500);
			$(".g-right").animate({right:-200},500);
			clearInterval(opend);
		}
		var opend = window.setInterval(function(){//计数器
			opens()
		},1000);
		
	})
	
	//关闭优惠劵
	$(".g-h-close").click(function(){
		$(".g-o-sci").fadeIn('slow');
		$(".g-o-t").animate({opacity:1},500);//这句的作用是使DIV缓慢显示
		$(".g-left").animate({left:0},500);
		$(".g-right").animate({right:0},500);
	})
	
	//隐藏收下啦
	$(".g-h-a").hover(function(){
		$(".g-h-bottom").animate({top:265},200);
	},function(){
		$(".g-h-bottom").animate({top:255},200);
	})
	
	//汽车移动位置
	$(".g-left-ul li").each(function(index){
		$(this).mousemove(function(){
			if(index==0){
				$(".g-left-ul .car").css("top","25px").css("left","-11px");
			}else if(index==1){
				$(".g-left-ul .car").css("top","-20px").css("left","34px");
			}else if(index==2){
				$(".g-left-ul .car").css("top","-30px").css("left","78px");
			}else if(index==3){
				$(".g-left-ul .car").css("top","-10px").css("left","129px");
			}else if(index==4){
				$(".g-left-ul .car").css("top","13px").css("left","179px");
			}else if(index==5){
				$(".g-left-ul .car").css("top","20px").css("left","234px");
			}else if(index==6){
				$(".g-left-ul .car").css("top","-2px").css("left","278px");
			}else if(index==7){
				$(".g-left-ul .car").css("top","-20px").css("left","328px");
			}else if(index==8){
				$(".g-left-ul .car").css("top","-17px").css("left","368px");
			}else if(index==9){
				$(".g-left-ul .car").css("top","-6px").css("left","414px");
			}
			
			$(".g-left-ul li span").removeClass("currs");
			$(this).children("span").addClass("currs");	
		})	
	})
	
	//飞机移动位置
	$(".g-right-ul li").each(function(index){
		$(this).mousemove(function(){
			if(index==0){
				$(".g-right-ul .plane").css("top","0px").css("left","60px");
			}else if(index==1){
				$(".g-right-ul .plane").css("top","25px").css("left","45px");
			}else if(index==2){
				$(".g-right-ul .plane").css("top","-5px").css("left","100px");
			}else if(index==3){
				$(".g-right-ul .plane").css("top","25px").css("left","140px");
			}else if(index==4){
				$(".g-right-ul .plane").css("top","45px").css("left","250px");
			}
			
			$(".g-right-ul li span").removeClass("currs");
			$(this).children("span").addClass("currs");	
		})	
	})
	
	//我渴了商品列表右边广告
	$(".cl-right li a").each(function(index){
		$(this).hover(function(){
			$(this).children(".cl-title").animate({opacity:1},100);		
		},function(){
			$(this).children(".cl-title").animate({opacity:0},100);
		})	
	})
	
	//我饿了
	$(".foorR1 li a").each(function(index){
		$(this).hover(function(){
			$(this).children(".cl-title").animate({opacity:1},100);		
		},function(){
			$(this).children(".cl-title").animate({opacity:0},100);
		})	
	})
	
	//我闲了商品列表右边广告
	$(".foorR2 li a").each(function(index){
		$(this).hover(function(){
			$(this).children(".cl-title").animate({opacity:1},100);		
		},function(){
			$(this).children(".cl-title").animate({opacity:0},100);
		})	
	})
	
	//我饿了
	$(".foorR3 li a").each(function(index){
		$(this).hover(function(){
			$(this).children(".cl-title").animate({opacity:1},100);		
		},function(){
			$(this).children(".cl-title").animate({opacity:0},100);
		})	
	})
	
	//回到顶部
	function showload(){ 
		var lazyheight = $(window).scrollTop(); 
		if (lazyheight>=800) { 
			//alert("xxx");
			$(".goTop").fadeIn('slow');
		}else{
			$(".goTop").hide();
		}
	} 
	$(window).bind("scroll", function(){ 
	//当滚动条滚动时
	showload();
	}); 
	//点击跳到顶部
	$(".goTop").click(function(){
		 location.href = "#";	
	})

})

	