<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        // dump(config());
        //dump('__INDEX_JS__');
        return $this->fetch();
    }
}
