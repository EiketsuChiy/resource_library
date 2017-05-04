<?php
namespace app\Admin\controller;
use app\Admin\model\Video as VideoModel;
use app\admin\controller\Base;
class Video extends Base
{
    public function index()
    {
        $list = VideoModel::paginate(3);
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
            
            if($_FILES['video']['tmp_name']){
                $file = request()->file('video');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads/video');
                $data['video']='/uploads/video/'.$info->getSaveName();
            }
            $validate = \think\Loader::validate('video');
            if(!$validate->scene('add')->check($data)){
               $this->error($validate->getError()); die;
            }
            if(db('video')->insert($data)){
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
        $Videos=db('Video')->find($id);
        $resource=Db('Article')->where('id',$id)->value('pic');
        if(request()->isPost()){
            $data=[
                'id'=>input('id'),
                'jieshao'=>input('jieshao'),
               
               
            ];
            
            if($_FILES['Video']['tmp_name']){
                
                $file = request()->file('Video');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads/video');
                $data['Video']='/uploads/video/'.$info->getSaveName();
            }
            $validate = \think\Loader::validate('Video');
            if(!$validate->scene('edit')->check($data)){
               $this->error($validate->getError()); die;
            }
            if(db('Video')->update($data)){
                unlink(ROOT_PATH.'public'.DS.'static'.$resource);
                $this->success('修改成功！','index');
            }else{
                $this->error('修改失败！');
            }
            return;
        }
        $this->assign('Videos',$Videos);
       
        return $this->fetch();
    }

   public function del(){
        $id=input('id');
        $resource=Db('video')->where('id',$id)->value('video');
        if(unlink(ROOT_PATH.'public'.DS.'static'.$resource))
        {
            db('video')->delete(input('id'));
            $this->success('删除文章成功！','index');
        }
        else
        {
            $this->error('删除文章失败！');
        }
     }

        
    }



