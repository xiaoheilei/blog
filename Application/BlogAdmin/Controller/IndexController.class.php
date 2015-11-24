<?php
namespace BlogAdmin\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->display('Index/index');
    }
}