<?php
namespace app\admin\validate;
use think\Validate;
class Yingyong extends Validate
{
    protected $rule = [
        //'jieshao'  =>  'require|max:25',
        
    ];

    protected $message  =   [
        //'jieshao.require' => '文章标题必须填写',
       
        

    ];

    protected $scene = [
        //'add'  =>  ['title','cateid'],
        //'edit'  =>  ['title','cateid'],
    ];




}
