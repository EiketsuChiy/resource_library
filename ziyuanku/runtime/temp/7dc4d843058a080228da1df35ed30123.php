<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"D:\ProgramFiles\UPUPW_NP7.0\htdocs\ziyuanku\public/../application/index\view\index\index.html";i:1493712472;}*/ ?>
<!DOCTYPE html>
<html>
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
<video src="__IMG__<?php echo $vo['video']; ?>";  width="300" ; height="300"; controls="controls"; preload="auto">The video is not supported by this browser,please change another browser.</video>

<a href="<?php echo url('/index.php/admin/login/index'); ?>">后台管理</a>

</div>

</body>
</html>