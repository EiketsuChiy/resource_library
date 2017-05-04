<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class News extends \think\Controller
{
    public function Index()
    {
        
        //$arid=input('arid');
    	//$articles=db('news')->find($arid);
        //$this->assign(array(
    		//'articles'=>$articles,));
       // $htmla = $this->fetch();
        //return $htmla;
        $id=input('id');
        $news=db('news')->find($id);
        //dump($news);
        $this->assign('news',$news);
        return $this->fetch();

    }




}
