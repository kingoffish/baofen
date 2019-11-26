<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $show_type = [
            ['type' => 'logo','method' => 'find','field' => 'path'],
        ];
        $config = [];
        foreach ($show_type as $item){
            $config[$item['type']] = M('config')->where(['type' => $item['type']])->field($item['field'])->{$item['method']}();
        }

        $this->assign('config', $config);
        $this->display();
    }

    public function index2()
    {
        var_dump(222);
    }
}