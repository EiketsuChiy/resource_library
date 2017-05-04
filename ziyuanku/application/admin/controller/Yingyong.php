<?php
namespace app\Admin\controller;
use app\Admin\model\Yingyong as YingyongModel;
use app\admin\controller\Base;
class Yingyong extends Base
{
    public function index()
    {
        $list = YingyongModel::paginate(3);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {   
        if(request()->isPost()){
            // dump($_POST); die;
            $data=[
                'jieshao'=>input('jieshao'),
                ];
            
            if($_FILES['pic']['tmp_name']){
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['pic']='/uploads/'.$info->getSaveName();
            }
            $validate = \think\Loader::validate('Yingyong');
            if(!$validate->scene('add')->check($data)){
               $this->error($validate->getError()); die;
            }
            if(db('Yingyong')->insert($data)){
                return $this->success('添加文章成功！','index');
            }else{
                return $this->error('添加文章失败！');
            }
            return;
        }
        
        return $this->fetch();
    }

    public function edit(){
        $id=input('id');
        $yingyongs=db('yingyong')->find($id);
        if(request()->isPost()){
            $data=[
                'id'=>input('id'),
                'jieshao'=>input('jieshao'),
               
               
            ];
            
            if($_FILES['pic']['tmp_name']){
                
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['pic']='/uploads/'.$info->getSaveName();
            }
            $validate = \think\Loader::validate('yingyong');
            if(!$validate->scene('edit')->check($data)){
               $this->error($validate->getError()); die;
            }
            if(db('yingyong')->update($data)){
                $this->success('修改成功！','index');
            }else{
                $this->error('修改失败！');
            }
            return;
        }
        $this->assign('yingyongs',$yingyongs);
       
        return $this->fetch();
    }

    public function del(){
        $id=input('id');
        if(db('yingyong')->delete(input('id'))){
            $this->success('删除成功！','index');
        }else{
            $this->error('删除失败！');
        }
        
    }


}
