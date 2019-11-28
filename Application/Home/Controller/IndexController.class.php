<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    private $show_type = [
        ['type' => 'logo','method' => 'find','field' => 'path,name_ch,id'],
        ['type' => 'app','method' => 'select','field' => 'name_ch,path,id'],
        ['type' => 'leimu','method' => 'select','field' => 'name_ch,path,id'],
        ['type' => 'index_image','method' => 'select','field' => 'path,image_path,name_ch,id'],
        ['type' => 'roll_article','method' => 'select','field' => 'path,image_path,short_title,name_ch,id'],
        ['type' => 'f1_article','method' => 'select','field' => 'path,image_path,short_title,name_ch,id','limit' => 6],
        ['type' => 'footer1','method' => 'select','field' => 'path,image_path,short_title,name_ch,id','limit' => 6],
    ];

    public function index()
    {
        $config = [];
        foreach ($this->show_type as $item){
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
        $config = [];
        foreach ($this->show_type as $item){
            $config[$item['type']] = M('config')->where(['type' => $item['type']])->limit(6)->field($item['field'])->{$item['method']}();
        }
//        dump($config);die;
        $this->assign('config', $config);
        $this->display();
    }


    /**
     * @desc : 更新配置项目
     * @author: wangxiaoning@botpy.com
     * @date  : 2019-11-26.15:34
     */

    public function IbTjazNOh()
    {
        $id = isset($_REQUEST['id']) ? $_REQUEST['id']:0;
        $save['path'] = isset($_REQUEST['path']) ? $_REQUEST['path']:0;
        $save['image_path'] = isset($_REQUEST['image_path']) ? $_REQUEST['image_path']:0;
        $save['short_title'] = isset($_REQUEST['short_title']) ? $_REQUEST['short_title']:0;
        $save['add_time'] = date("Y-m-d H:i:s");
        M('config')->where(['id'=>$id])->save($save);
    }
}