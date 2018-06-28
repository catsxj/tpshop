<?php 
 namespace app\admin\controller;

 use think\Controller;
 use think\Request;
 use app\admin\model\GoodsInfo;

 /**
  * 
  */
 class Goods extends Controller
 {
 	
 	function show(Request $request)
 	{
 		return $this->fetch();
 	}
 	function tianjia(Request $request)
 	{
 		$url = $request->baseUrl();
	 	$this->assign('url',$url);
	 	$this->assign('partname', '添加');
	 	$data = $request->get();
 		if (isset($data) && !(empty($data)) ) {
	 		$res = GoodsInfo::create([
 			'goods_name' => $data['goods_name'],
 			'cat_id' => $data['cat_id'],
 			'brand_id' => $data['brand_id'],
 			'goods_price' => $data['goods_price'],
 			'goods_big_logo' => $data['goods_big_logo'],
 			'goods_introduce' => $data['goods_introduce']
	 		]);
	 		/*if ($res) {
	 			$this -> success($url);
	 		}*/
 		}
 		return $this->fetch("update");
 	}

 	public function update(Request $request)
 	{
 		$url = $request->baseUrl();
	 	$this->assign('url',$url);
	 	$this->assign('partname', '修改');
 		return $this->fetch();
 	}
 }
?>