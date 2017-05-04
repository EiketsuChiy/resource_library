<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index extends \think\Controller
{
    public function Index()
    {
        
        $news = Db::name('news')->order('time desc')->limit(2)->select();
        $this->assign("news",$news);
        $this->assign("result",$news);
        $htmla = $this->fetch();
        return $htmla;
    }




}
