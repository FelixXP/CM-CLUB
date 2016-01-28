<?php
return array(
	//'配置项'=>'配置值'
	// 显示页面Trace信息
	'SHOW_PAGE_TRACE' =>true,
	 /* 数据库设置 */
    'DB_TYPE' =>  'mysql',	// 数据库类型
    'DB_HOST' =>  'localhost',	// 服务器地址
    'DB_NAME' =>  'cm_club',	// 数据库名
    'DB_USER' =>  'alex',	// 用户名
    'DB_PWD'  =>  'alex1024',	// 密码
    'DB_PORT' =>  '3306',	// 端口

    /*邮件设置*/
    'EM_PORT'=>25,//发送邮件端口
    'EM_SERVER'=>'smtp.163.com',//邮箱服务器
    'EM_USERNAME'=>'felixxp@163.com',//发送邮件的帐号
    'EM_PASSWORD'=>'felix698023',//发送邮件的密码
    'EM_ADMIN'=>'Felix',//发送者名称


    '__PUBLIC__'    =>  APP_PATH.'Public',// 站点公共目录
);