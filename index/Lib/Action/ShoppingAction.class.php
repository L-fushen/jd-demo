<?php 
class ShoppingAction extends Action{
	function add(){
		$this->display();
	}
	function cart(){
		$this->display();
	}
	function addr(){
		ECHO __PUBLIC__."与主目录平级的public目录，供多个项目应用<br>";
        echo "<br>"."ROOT:网站的根目录地址".__ROOT__." ";
        echo "<br>"."APP:入口文件地址".__APP__." ";
        echo "<br>"."URL:当前模块地址".__URL__." ";
        echo "<br>"."SELF:当前url地址".__SELF__." ";
        echo "<br>"."ACTION:当前操作地址".__ACTION__." ";
        echo "<br>"."CURRENT:当前模块的模板目录".__CURRENT__." ";
        echo "<br>"."ACTION_NAME:当前操作名称".ACTION_NAME." ";
        echo "<br>"."APP_PATH::当前项目目录".APP_PATH." ";
        echo "<br>"."APP_NAME当前项目名称".APP_NAME." ";
        echo "<br>"."APP_TMPL_PATH:当前项目的模板目录".APP_TMPL_PATH." ";
        echo "<br>"."APP_PUBLIC_PATH:项目的公共文件目录".APP_PUBLIC_PATH." ";
        echo "<br>"."CONFIG_PATH:项目的配置文件目录".CONFIG_PATH." ";
        echo "<br>"."COMMON_PATH:项目的公共文件目录".COMMON_PATH." ";
        //自动缓存与表相关的全部信息
        echo "<br>"."项目的数据文件目录DATA_PATH".DATA_PATH." runtime下的data目录";
        echo "<br>"." ".GROUP_NAME."";
        echo "<br>"." ".IS_CGI."";
        echo "<br>"." ".IS_WIN."";
        echo "<br>"." ".LANG_SET."";
        echo "<br>"."LOG_PATH路径： ".LOG_PATH."";
        echo "<br>"."LANG_PATH路径： ".LANG_PATH."";
        echo "<br>"."TMPL_PATHL路径： ".TMPL_PATH.""; 
        //js放入的位置，供多个应用的公共资源
        echo "<br>"."PUBLIC路径： "._PUBLIC_."";
	}
}
?>