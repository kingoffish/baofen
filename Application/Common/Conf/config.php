<?php
return array(
	//'配置项'=>'配置值'
    'TMPL_CACHE_ON' => false,//禁止模板编译缓存
    'HTML_CACHE_ON' => false,//禁止静态缓存

    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'typecho', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'wyt05223775', // 密码

//    'DB_USER'   => 'typecho', // 用户名
//    'DB_PWD'    => 'BHjy6L2KNLJmKB3Y', // 密码


    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'typecho_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
);