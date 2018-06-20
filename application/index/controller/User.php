<?php 
	namespace app\index\controller;

	use think\Controller;

	/**
	 * 访问名称入口文件/模块名/控制器/方法名
	 * 入口文件：http://web.tpshop.com/index.php
	 * 模块名：index
	 * 控制器名：user
	 * 方法名：login/regist
	 */
	class User extends Controller
	{
		
		public function login()
		{
			return $this -> fetch();
		}

		public function regist()
		{
			return $this -> fetch();
		}

	}
 ?>