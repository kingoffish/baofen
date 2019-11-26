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

        $this->assign('config', $config);
        $this->display();
    }

    /**
     * @desc : 获取配置项目
     * @author: wangxiaoning@botpy.com
     * @date  : 2019-11-26.15:34
     */

    public function SY5uVsuZB()
    {
        $config = M('config')->select();
        $return_data = [];
        foreach ($config as $item){
            $return_data[$item['type']][] = $item;
        }

        $this->assign('config', $return_data);
        $this->display();
    }


    /**
     * @desc : 更新配置项目
     * @author: wangxiaoning@botpy.com
     * @date  : 2019-11-26.15:34
     */

    public function IbTjazNOh()
    {

    }
}