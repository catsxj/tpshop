<?php 
	use think\Env;
	return [
		/*
		 *环境配置：
		 *生产环境prod
		 *开发环境dev
		 *测试环境test
		*/
		"app_status" => Env::get("status", "dev"),
		//视图输出字符串内容替换
	    'view_replace_str' => [
	        //定义前台资源路径
	        '__INDEX_CSS__' => '/static/index/style',
	        '__INDEX_JS__' => '/static/index/js',
	        '__INDEX_IMGS__' => '/static/index/images',
	        //定义后台资源路径
	        '__ADMIN_CSS__' => '/static/admin/css',
	        '__ADMIN_IMGS__' => '/static/admin/img',
	        
	    ],
	    // 应用调试模式
    	'app_debug'              => true,
	]
 ?>