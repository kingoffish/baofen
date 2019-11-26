<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $show_type = [
            ['type' => 'logo','method' => 'find','field' => 'path'],
            ['type' => 'app','method' => 'select','field' => 'name_ch,path'],
            ['type' => 'leimu','method' => 'select','field' => 'name_ch,path'],
            ['type' => 'index_image','method' => 'select','field' => 'path,image_path'],
            ['type' => 'roll_article','method' => 'select','field' => 'path,image_path,short_title'],
            ['type' => 'f1_article','method' => 'select','field' => 'path,image_path,short_title','limit' => 6],
            ['type' => 'footer1','method' => 'select','field' => 'path,image_path,short_title','limit' => 6],
        ];
        $config = [];
        foreach ($show_type as $item){
            $config[$item['type']] = M('config')->where(['type' => $item['type']])->limit(6)->field($item['field'])->{$item['method']}();
        }
//        dump($config);die;
        $this->assign('config', $config);
        $this->display();
    }

    public function index2()
    {
        var_dump(222);
    }
}