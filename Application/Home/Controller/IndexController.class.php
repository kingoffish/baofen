<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        var_dump($_REQUEST);die;
//        $this->display();
    }

    public function index2(){
        var_dump(222);
    }
}