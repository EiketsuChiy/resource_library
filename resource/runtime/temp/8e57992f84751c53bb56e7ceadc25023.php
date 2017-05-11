<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"H:\wangzhanshixun\AppServ\www\resource\public/../application/admin\view\admin\edit.html";i:1494048682;s:87:"H:\wangzhanshixun\AppServ\www\resource\public/../application/admin\view\common\top.html";i:1493170150;s:88:"H:\wangzhanshixun\AppServ\www\resource\public/../application/admin\view\common\left.html";i:1494202963;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>后台管理</title>
<meta name="description" content="Dashboard">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--Basic Styles-->
<link href="/ziyuanku/public/static/admin/style/bootstrap.css" rel="stylesheet">
<link href="/ziyuanku/public/static/admin/style/font-awesome.css" rel="stylesheet">
<link href="/ziyuanku/public/static/admin/style/weather-icons.css" rel="stylesheet">

<!--Beyond styles-->
<link id="beyond-link" href="/ziyuanku/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
<link href="/ziyuanku/public/static/admin/style/demo.css" rel="stylesheet">
<link href="/ziyuanku/public/static/admin/style/typicons.css" rel="stylesheet">
<link href="/ziyuanku/public/static/admin/style/animate.css" rel="stylesheet">
</head>
<body>
<!-- 头部 --> 
<div class="navbar">

    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    
                <h4>秦职院资源库后台管理</h4>
                        
                </a>

            </div>


            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->

            <div class="navbar-header pull-right">

                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                
                                <section>
                                    <h2><span class="profile"><span>欢迎您：<?php echo \think\Request::instance()->session('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                   退出登录&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',array('id'=>\think\Request::instance()->session('uid'))); ?>">
                                            修改密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div> 

<!-- /头部 -->

<div class="main-container container-fluid">
  <div class="page-container"> 
    <!-- Page Sidebar --> 
    <div class="page-sidebar" id="sidebar">
  <ul class="nav sidebar-menu">
    <!--Dashboard-->
    
    <li><span class="menu-text">&nbsp;<br>
      &nbsp;</span></li>
    <li> <a href="#" class="menu-dropdown"> <i class="menu-icon fa fa-user"></i> <span class="menu-text">管理员 </span> <i class="menu-expand"></i> </a>
      <ul class="submenu">
        <li> <a href="<?php echo url('admin/index'); ?>"> <span class="menu-text"> 管理列表 </span> <i class="menu-expand"></i> </a> </li>
      </ul>
    </li>
    <li> <a href="#" class="menu-dropdown"> <i class="menu-icon fa fa-list"></i> <span class="menu-text">计算机应用技术</span> <i class="menu-expand"></i> </a>
      <ul class="submenu">
        <li> <a href="<?php echo url('computerapp/index'); ?>"> <span class="menu-text"> 资源列表 </span> <i class="menu-expand"></i> </a> </li>
      </ul>
    </li>
    <li> <a href="#" class="menu-dropdown"> <i class="menu-icon fa fa-list"></i> <span class="menu-text">计算机网络技术</span> <i class="menu-expand"></i> </a>
      <ul class="submenu">
        <li> <a href="<?php echo url('net/index'); ?>"> <span class="menu-text"> 资源列表 </span> <i class="menu-expand"></i> </a> </li>
      </ul>
    </li>
    <li> <a href="#" class="menu-dropdown"> <i class="menu-icon fa fa-list"></i> <span class="menu-text">艺术设计</span> <i class="menu-expand"></i> </a>
      <ul class="submenu">
        <li> <a href="<?php echo url('art/index'); ?>"> <span class="menu-text"> 资源列表 </span> <i class="menu-expand"></i> </a> </li>
      </ul>
    </li>
    <li> <a href="#" class="menu-dropdown"> <i class="menu-icon fa fa-list"></i> <span class="menu-text">环境艺术设计</span> <i class="menu-expand"></i> </a>
      <ul class="submenu">
        <li> <a href="<?php echo url('env/index'); ?>"> <span class="menu-text"> 资源列表 </span> <i class="menu-expand"></i> </a> </li>
      </ul>
    </li>
    <li> <a href="#" class="menu-dropdown"> <i class="menu-icon fa fa-list"></i> <span class="menu-text">数字媒体应用</span> <i class="menu-expand"></i> </a>
      <ul class="submenu">
        <li> <a href="<?php echo url('media/index'); ?>"> <span class="menu-text"> 资源列表 </span> <i class="menu-expand"></i> </a> </li>
      </ul>
    </li>
    <li> <a href="#" class="menu-dropdown"> <i class="menu-icon fa fa-list"></i> <span class="menu-text">物联网应用技术</span> <i class="menu-expand"></i> </a>
      <ul class="submenu">
        <li> <a href="<?php echo url('iot/index'); ?>"> <span class="menu-text"> 资源列表 </span> <i class="menu-expand"></i> </a> </li>
      </ul>
    </li>
    <li> <a href="#" class="menu-dropdown"> <i class="menu-icon fa fa-list"></i> <span class="menu-text">数字展示技术</span> <i class="menu-expand"></i> </a>
      <ul class="submenu">
        <li> <a href="<?php echo url('display/index'); ?>"> <span class="menu-text"> 资源列表 </span> <i class="menu-expand"></i> </a> </li>
      </ul>
    </li>
    <li> <a href="#" class="menu-dropdown"> <i class="menu-icon fa fa-list"></i> <span class="menu-text">移动应用开发</span> <i class="menu-expand"></i> </a>
      <ul class="submenu">
        <li> <a href="<?php echo url('mobileapp/index'); ?>"> <span class="menu-text"> 资源列表 </span> <i class="menu-expand"></i> </a> </li>
      </ul>
    </li>
    <li> <a href="#" class="menu-dropdown"> <i class="menu-icon fa fa-list"></i> <span class="menu-text">留言管理</span> <i class="menu-expand"></i> </a>
      <ul class="submenu">
        <li> <a href="#"> <span class="menu-text"> 留言列表 </span> <i class="menu-expand"></i> </a> </li>
      </ul>
    </li>
    <li> <a href="#" class="menu-dropdown"> <i class="menu-icon fa fa-list"></i> <span class="menu-text">友情链接</span> <i class="menu-expand"></i> </a>
      <ul class="submenu">
        <li> <a href="#"> <span class="menu-text"> 友情链接列表 </span> <i class="menu-expand"></i> </a> </li>
      </ul>
    </li>
  </ul>
  <!-- /Sidebar Menu --> 
</div>
 
    <!-- /Page Sidebar --> 
    <!-- Page Content -->
    <div class="page-content"> 
      <!-- Page Breadcrumb -->
      <div class="page-breadcrumbs">
        <ul class="breadcrumb">
          <li> <a href="#">系统</a> </li>
          <li> <a href="<?php echo url('admin/lst'); ?>">管理员管理</a> </li>
          <li class="active">修改管理员</li>
        </ul>
      </div>
      <!-- /Page Breadcrumb --> 
      
      <!-- Page Body -->
      <div class="page-body">
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
              <div class="widget-header bordered-bottom bordered-blue"> <span class="widget-caption">修改管理员信息</span> </div>
              <div class="widget-body">
                <div id="horizontal-form">
                  <form class="form-horizontal" role="form" action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $admins['id']; ?>">
                    <div class="form-group">
                      <label for="username" class="col-sm-2 control-label no-padding-right">管理员名</label>
                      <div class="col-sm-6">
                        <input class="form-control" id="username" placeholder="" name="username" value="<?php echo $admins['username']; ?>"  type="text">
                      </div>
                      <p class="help-block col-sm-4 red">* 必填</p>
                    </div>
                    <div class="form-group">
                      <label for="group_id" class="col-sm-2 control-label no-padding-right">管理员密码</label>
                      <div class="col-sm-6">
                        <input class="form-control" id="password" placeholder="" name="password"  type="text">
                      </div>
                      <p class="help-block col-sm-4 red">* 留空则表示不修改密码</p>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">保存信息</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Page Body --> 
    </div>
    <!-- /Page Content --> 
  </div>
</div>

<!--Basic Scripts--> 
<script src="/ziyuanku/public/static/admin/style/jquery_002.js"></script> 
<script src="/ziyuanku/public/static/admin/style/bootstrap.js"></script> 
<script src="/ziyuanku/public/static/admin/style/jquery.js"></script> 
<!--Beyond Scripts--> 
<script src="/ziyuanku/public/static/admin/style/beyond.js"></script>
</body>
</html>