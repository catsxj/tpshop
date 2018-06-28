<?php 
 namespace app\admin\model;

 use think\Model;

 /**
  * 
  */
 class GoodsInfo extends Model
 {
 	protected $autoWriteTimestamp = true;
 	protected $createTime = "add_time";
 	protected $updateTime = "upd_time";
 	
 	/*function setCatIdAttr($val)
 	{
 		return (int)$val;
 	}*/
 }
?>