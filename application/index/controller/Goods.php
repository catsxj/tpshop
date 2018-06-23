<?php 
	namespace app\index\controller;

	use think\Controller;

	class Goods extends Controller{
		public function goodslist(){
			return $this->fetch("list");
		}
		public function goods(){
			return $this->fetch();
		}
	}
?>