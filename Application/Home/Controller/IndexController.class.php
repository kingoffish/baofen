<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        var_dump(111);die;
        $this->display();
    }

    public function index2(){
        var_dump(222);
    }
}