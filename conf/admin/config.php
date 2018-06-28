<?php 
 return [
 	//视图输出字符串内容替换
    'view_replace_str' => [
        //后台header\left\right文件路径
        '__ADMIN_INDEX_PATH__' => '/admin/index',
        
	        //定义后台资源路径
	        '__ADMIN_CSS__' => '/static/admin/css',
            '__ADMIN_JS__' => '/static/admin/js',
	        '__ADMIN_IMGS__' => '/static/admin/img',
    ],
    'database'               => [
        'type'            => 'mysql',
        'hostname'        => 'localhost',
        'database'        => 'tpshop',
        'username'        => 'root',
        'password'        => '123456',
        'hostport'        => '3306',
        'charset'         => 'utf8',
        'prefix'          => 'tpshop_',
        'auto_timestamp'  => false
    ],
 ]
?>