<?php 
	namespace app\index\controller;

	use think\Controller;

	/**
	 * 
	 */
	class Order extends Controller
	{
		
		function order()
		{
			return $this->fetch();
		}

		function flowOne(){
			return $this->fetch();
		}

		function flowTwo(){
			return $this->fetch();
		}

		function flowThree(){
			return $this->fetch();
		}
	}
?>