<?php
namespace BlogAdmin\Controller;
use Think\Controller;
class CommonController extends Controller {
    protected static $u_id;
    //初始化公共信息
    public function _initialize()
    {
        //网站导航
        $webmap = C('Menu');
        $this->assign('webmap',$webmap);
    }

}