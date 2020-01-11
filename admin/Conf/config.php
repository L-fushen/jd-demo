<?php
return array(
	//'配置项'=>'配置值'
	"APP_DEBUG"	=> true,	//是否开启调试模式
	"DEFAULT_MODULE"	=> "Index",	//默认模块名称
	"DEFAULT_ACTION"	=> "index",	//默认操作名称
	"DB_HOST"	=>	"localhost",	//服务器地址
	"DB_NAME"	=>	"huiming",	//数据库地址
	"DB_USER"	=>	"root",	//用户名
	"DB_PWD"	=>	"",	//密码
	'DB_PREFIX'             => '',    // 数据库表前缀
	'TMPL_L_DELIM'          => '{{',	// 模板引擎普通标签开始标记
    'TMPL_R_DELIM'          => '}}',	// 模板引擎普通标签结束标记
);
?>