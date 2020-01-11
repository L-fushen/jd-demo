// JavaScript Document
$(function(){
	//首页头部js特效
	//我的惠民
	$(".myHms,.myHms-i").hover(function(){
		$(".myHms").children("b").css("top","7px").css("border-color","transparent transparent #ccc transparent");
		$(".myHms-i").show();
		$(".myHms").addClass("newHm");
	},function(){
		$(".myHms-i").hide();
		$(".myHms").removeClass("newHm");
		$(".myHms").children("b").css("top","13px").css("border-color","#ccc transparent transparent");
	})
	//购物车结算
	$(".shoppingCart,.sCart-i").hover(function(){
		$(".sCart-i").show();
		$(".shoppingCart").addClass("newsCart");
	},function(){
		$(".sCart-i").hide();
		$(".shoppingCart").removeClass("newsCart");
	})
	
	//分类商品列表

	//类型商品生鲜食品
	$(".gurgle,.freshBox").hover(function(){
		$(".freshBox").show();
		$(".gurgle").addClass("newGurSd");
		$(".gur-i").children("b").css("background-position","0 0");
		$(".gl").css("width","210px").addClass("newBack").css("height","80px");
	},function(){
		$(".freshBox").hide();
		$(".gurgle").removeClass("newGurSd");
		$(".gur-i").children("b").css("background-position","0 -50px");
		$(".gl").removeClass("newBack");
	})
	
	//类型商品美酒
	$(".wine,.wineBox").hover(function(){
		$(".wineBox").show();
		$(".wine-gl").css("width","210px").addClass("newBack");
		$(".wine").addClass("newShadow");
		$(".wine-i").children("b").css("background-position","-40px 0");
	},function(){
		$(".wineBox").hide();
		$(".wine-gl").removeClass("newBack");
		$(".wine").removeClass("newShadow");
		$(".wine-i").children("b").css("background-position","-40px -50px");
	})
	
	//类型商品饮料
	$(".drink,.drinkBox").hover(function(){
		$(".drinkBox").show();
		$(".drink-gl").css("width","210px").addClass("newBack");
		$(".drink").addClass("newShadow");
		$(".drink-i").children("b").css("background-position","-80px 0");
	},function(){
		$(".drinkBox").hide();
		$(".drink-gl").removeClass("newBack");
		$(".drink").removeClass("newShadow");
		$(".drink-i").children("b").css("background-position","-80px -50px");
	})
	
	//类型商品悠闲
	$(".leisure,.leisureBox").hover(function(){
		$(".leisureBox").show();
		$(".leisure-gl").css("width","210px").addClass("newBack");
		$(".leisure").addClass("newShadow");
		$(".leisure-i").children("b").css("background-position","-120px 0");
	},function(){
		$(".leisureBox").hide();
		$(".leisure-gl").removeClass("newBack");
		$(".leisure").removeClass("newShadow");
		$(".leisure-i").children("b").css("background-position","-120px -50px");
	})
	
	//类型商品油粮
	$(".oily,.oilyBox").hover(function(){
		$(".oilyBox").show();
		$(".oily-gl").css("width","210px").addClass("newBack");
		$(".oily").addClass("newShadow");
		$(".oily-i").children("b").css("background-position","-160px 0");
	},function(){
		$(".oilyBox").hide();
		$(".oily-gl").removeClass("newBack").css("width","190px");
		$(".oily").removeClass("newShadow");
		$(".oily-i").children("b").css("background-position","-160px -50px");
	})
})