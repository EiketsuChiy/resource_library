<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"H:\wangzhanshixun\AppServ\www\ziyuanku\public/../application/index\view\index\index.html";i:1493691187;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>新闻管理</title>
<style>.a{
text-align: center;
margin-top: 200px;
	}</style>
</head>

<body>
<div class="a">
	
		<?php if(is_array($news) || $news instanceof \think\Collection): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<div>
				<h3><a target="_blank" href="<?php echo url('news/index',array('id'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a>【<?php echo $vo['time']; ?>】</h3>
				 <img src="__IMG__<?php echo $vo['pic']; ?>" height="50">
				 
				</div>
				
		<?php endforeach; endif; else: echo "" ;endif; ?>		
<embed src="__IMG__<?php echo $vo['video']; ?>";  width="600";height="600"; autostart="true";></embed>
<a href="<?php echo url('admin/login/index'); ?>">后台管理</a>

</div>

</body>
</html>