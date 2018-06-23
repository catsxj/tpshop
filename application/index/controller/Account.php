<?php 
	namespace app\index\controller;

	use think\Controller;

	/**
	 * user：用户中心》用户信息
	 * address：用户中心》住址
	 */
	class Account extends Controller
	{
		
		public function user()
		{
			return $this -> fetch();
		}

		public function address()
		{
			return $this -> fetch();
		}
	}
?>