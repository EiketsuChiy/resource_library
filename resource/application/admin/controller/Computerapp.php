<?php
namespace app\Admin\controller;
use app\Admin\model\Computerapp as ComputerappModel;
use app\admin\controller\Base;
class Computerapp extends Base
{
    public function index()
    {
        $list = ComputerappModel::paginate(6);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function detail(){
        $id=input('id');
        $Computerapps=db('Computerapp')->find($id);
        $this->assign('Computerapps',$Computerapps);
        return $this->fetch();
    }

    public function add()
    {   
        if(request()->isPost()){
            // dump($_POST); die;
            $data=[
                'title'=>input('title'),
                'content'=>input('content'),
                'datetime'=>input('datetime'),
                ];
            if($_FILES['file']['tmp_name']){
                $file = request()->file('file');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads/file');
                $data['file']='/uploads/file/'.$info->getSaveName();
            }
            if($_FILES['pic']['tmp_name']){
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads/image');
                $data['pic']='/uploads/image/'.$info->getSaveName();
            }
            if($_FILES['video']['tmp_name']){
                $file = request()->file('video');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads/video');
                $data['video']='/uploads/video/'.$info->getSaveName();
            }
            $validate = \think\Loader::validate('Computerapp');
            if(!$validate->scene('add')->check($data)){
               $this->error($validate->getError()); die;
            }

            if(db('Computerapp')->insert($data)){
                return $this->success('添加成功！','index');
            }else{
                return $this->error('添加失败！');
            }
            return;
        }
        
        return $this->fetch();
    }

    public function edit(){
        $id=input('id');
        $computerapp=db('Computerapp')->find($id);
        $delfile=Db('Computerapp')->where('id',$id)->value('file');
        $delpic=Db('Computerapp')->where('id',$id)->value('pic');
        $delvideo=Db('Computerapp')->where('id',$id)->value('video');
        if(request()->isPost()){
            $data=[
                'id'=>input('id'),
                'title'=>input('title'),
               'content'=>input('content'),
               'datetime'=>input('datetime'),
               
            ];
            if($_FILES['file']['tmp_name']){
                
                $file = request()->file('file');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads/file');
                $data['file']='/uploads/file/'.$info->getSaveName();
                unlink(ROOT_PATH.'public'.DS.'static'.$delfile);
            }
            if($_FILES['pic']['tmp_name']){
                
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads/image');
                $data['pic']='/uploads/image/'.$info->getSaveName();
                unlink(ROOT_PATH.'public'.DS.'static'.$delpic);
            }
            if($_FILES['video']['tmp_name']){
                
                $file = request()->file('video');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads/video');
                $data['video']='/uploads/video/'.$info->getSaveName();
                unlink(ROOT_PATH.'public'.DS.'static'.$delvideo);
            }
            $validate = \think\Loader::validate('Computerapp');
            if(!$validate->scene('edit')->check($data)){
               $this->error($validate->getError()); die;
            }
            if(db('Computerapp')->update($data)){
                
                $this->success('修改成功！','index');
            }else{
                $this->error('修改失败！');
            }
            return;
        }
        $this->assign('computerapp',$computerapp);
       
        return $this->fetch();
    }


    public function del(){
        $id=input('id');
        $delfile=Db('Computerapp')->where('id',$id)->value('file');
        $delpic=Db('Computerapp')->where('id',$id)->value('pic');
        $delvideo=Db('Computerapp')->where('id',$id)->value('video');
        for ($i=0; $i <4 ; $i++) { 
            switch ($i) {
                case 0:
                    if($delfile)
                    {
                       if(unlink(ROOT_PATH.'public'.DS.'static'.$delfile))
                       {
                            break;
                       }
                       else
                       {
                            $this->error('删除失败！');
                       }
                       break;
                    }
                    else
                    {
                       break;
                    }
                case 1:
                   if($delpic)
                    {
                       if(unlink(ROOT_PATH.'public'.DS.'static'.$delpic))
                       {
                            break;
                       }
                       else
                       {
                            $this->error('删除失败！');
                       }
                       break;
                    }
                    else
                    {
                        break;
                    }
                case 2:
                    if($delvideo)
                    {
                       if(unlink(ROOT_PATH.'public'.DS.'static'.$delvideo))
                       {
                            break;
                       }
                       else
                       {
                            $this->error('删除失败！');
                       }
                       break;
                    }
                    else
                    {
                        break;
                    }
                case 3:
                    db('Computerapp')->delete(input('id'));
                    $this->success('删除成功！','index');
                    break;
            }
        }

    }
}





