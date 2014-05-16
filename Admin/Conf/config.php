<?php
return array(
//'APP_DEBUG' => false, 				// 开启调试模式(运行是关闭)
'DB_TYPE'=> 'mysql',     				// 数据库类型
'DB_HOST'=> 'localhost',				// 数据库服务器地址
'DB_NAME'=>'nwpu_lab',			  		// 数据库名称
'DB_USER'=>'root', 						// 数据库用户名
'DB_PWD'=>'',				// 数据库密码
'DB_PORT'=>'3306',						// 数据库端口
'DB_PREFIX'=>'nwpu_',					// 数据表前缀
'No_CACHE_RUNTIME'=> false,    //开发时关闭，运行时开启
'Admin_AUTH_KEY'=>'AdminAuthId',		// SESSION_KEY
//'DB_CHARSET'=>'utf-8',             //翔去吧~~~
//'DEFAULT_CHARSET'=>'utf-8'           //翔去吧~~~
//'User_AUTH_KEY'=>'User_AUTH_KEY',
//'URL_CASE_INSENSITIVE' => true,      linux下开启（因为linux对大小写敏感）
//'SHOW_ERROR_MSG' =>false, 			//关闭错误(默认显示错误，开发完毕关闭错误提示)
);
?>