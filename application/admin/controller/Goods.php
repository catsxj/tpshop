<?php 
 namespace app\admin\controller;

 use think\Controller;
 use think\Request;

 /**
  * 
  */
 class Goods extends Controller
 {
 	
 	function show(Request $request)
 	{
 		return $this->fetch();
 	}
 	function update()
 	{
 		return $this->fetch();
 	}
 }
?>