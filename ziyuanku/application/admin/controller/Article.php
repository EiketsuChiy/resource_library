<?php
namespace app\Admin\controller;
use app\Admin\model\Article as ArticleModel;
use app\admin\controller\Base;
class Article extends Base
{
    public function lst()
    {
    	// $list = ArticleModel::paginate(3);
        // $list=db('article')->alias('a')->join('cate c','c.id=a.cateid')->field('a.id,a.title,a.pic,a.author,a.state,c.catename')->paginate(3);
        $list = ArticleModel::paginate(3);
    	$this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {	
    	if(request()->isPost()){
            // dump($_POST); die;
			$data=[
    			'title'=>input('title'),
                
               
               
              
                
    			
            ];
            
            if($_FILES['pic']['tmp_name']){
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['pic']='/uploads/'.$info->getSaveName();
            }
    		$validate = \think\Loader::validate('Article');
    		if(!$validate->scene('add')->check($data)){
			   $this->error($validate->getError()); die;
			}
    		if(db('Article')->insert($data)){
    			return $this->success('添加成功！','lst');
    		}else{
    			return $this->error('添加失败！');
    		}
    		return;
    	}
        
        return $this->fetch();
    }

    public function edit(){
        $id=input('id');
        $articles=db('Article')->find($id);
        $resource=Db('Article')->where('id',$id)->value('pic');
        if(request()->isPost()){
            $data=[
                'id'=>input('id'),
                'title'=>input('title'),
               
               
            ];
            
            if($_FILES['pic']['tmp_name']){
                
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['pic']='/uploads/'.$info->getSaveName();
            }
            $validate = \think\Loader::validate('Article');
            if(!$validate->scene('edit')->check($data)){
               $this->error($validate->getError()); die;
            }
            if(db('Article')->update($data)){
                unlink(ROOT_PATH.'public'.DS.'static'.$resource);
                $this->success('修改成功！','lst');
            }else{
                $this->error('修改失败！');
            }
            return;
        }
        $this->assign('articles',$articles);
       
        return $this->fetch();
    }

    public function del(){
        $id=input('id');
        $resource=Db('Article')->where('id',$id)->value('pic');
        if(unlink(ROOT_PATH.'public'.DS.'static'.$resource))
        {
            db('Article')->delete(input('id'));
            $this->success('删除文章成功！','lst');
        }
        else
        {
            $this->error('删除文章失败！');
        }
    }




}
