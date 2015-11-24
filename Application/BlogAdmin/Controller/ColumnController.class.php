<?php
namespace BlogAdmin\Controller;
class ColumnController extends CommonController {
    public  function column(){



        $this->display('Column/column');

    }

    /**
     * 栏目插入
     * */
    public function insert(){
        if($_POST){

        }
        else{
            $this->display('Column/add');
        }
    }
}