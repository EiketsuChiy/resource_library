<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"H:\wangzhanshixun\AppServ\www\ziyuanku\public/../application/admin\view\index\index.htm";i:1493175093;s:86:"H:\wangzhanshixun\AppServ\www\ziyuanku\public/../application/admin\view\common\top.htm";i:1493170150;s:87:"H:\wangzhanshixun\AppServ\www\ziyuanku\public/../application/admin\view\common\left.htm";i:1493552985;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>后台管理</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__PUBLIC__/style/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/style/font-awesome.css" rel="stylesheet">
    <link href="__PUBLIC__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__PUBLIC__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/style/demo.css" rel="stylesheet">
    <link href="__PUBLIC__/style/typicons.css" rel="stylesheet">
    <link href="__PUBLIC__/style/animate.css" rel="stylesheet">
    
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


  <li><span class="menu-text">&nbsp;<br>&nbsp;</span></li> 


                    <li>
                        <a href="#" class="menu-dropdown">
  <i class="menu-icon fa fa-user"></i>
  <span class="menu-text">管理员 </span>
  <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
  <li>
      <a href="<?php echo url('admin/lst'); ?>">
          <span class="menu-text">
              管理列表          </span>
          <i class="menu-expand"></i>
      </a>
  </li>
                        </ul>  
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
  <i class="menu-icon fa fa-list"></i>
  <span class="menu-text">计算机应用技术</span>
  <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
  <li>
      <a href="<?php echo url('video/index'); ?>">
          <span class="menu-text">
              视频管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="<?php echo url('article/lst'); ?>">
          <span class="menu-text">
              文档管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="<?php echo url('yingyong/index'); ?>">
          <span class="menu-text">
              练习题管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              自学资源库         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
                        </ul>  
                    </li> 
<li>
                        <a href="#" class="menu-dropdown">
  <i class="menu-icon fa fa-list"></i>
  <span class="menu-text">计算机网络技术</span>
  <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
  <li>
      <a href="#">
          <span class="menu-text">
              视频管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              文档管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              练习题管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              自学资源库         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
                        </ul>  
                    </li> 

<li>
                        <a href="#" class="menu-dropdown">
  <i class="menu-icon fa fa-list"></i>
  <span class="menu-text">艺术设计</span>
  <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
  <li>
      <a href="#">
          <span class="menu-text">
              视频管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              文档管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              练习题管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              自学资源库         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
                        </ul>  
                    </li> 

<li>
                        <a href="#" class="menu-dropdown">
  <i class="menu-icon fa fa-list"></i>
  <span class="menu-text">环境艺术设计</span>
  <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
  <li>
      <a href="#">
          <span class="menu-text">
              视频管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              文档管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              练习题管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              自学资源库         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
                        </ul>  
                    </li> 

<li>
                        <a href="#" class="menu-dropdown">
  <i class="menu-icon fa fa-list"></i>
  <span class="menu-text">数字媒体应用</span>
  <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
  <li>
      <a href="#">
          <span class="menu-text">
              视频管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              文档管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              练习题管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              自学资源库         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
                        </ul>  
                    </li> 

<li>
                        <a href="#" class="menu-dropdown">
  <i class="menu-icon fa fa-list"></i>
  <span class="menu-text">物联网应用技术</span>
  <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
  <li>
      <a href="#">
          <span class="menu-text">
              视频管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              文档管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              练习题管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              自学资源库         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
                        </ul>  
                    </li> 

<li>
                        <a href="#" class="menu-dropdown">
  <i class="menu-icon fa fa-list"></i>
  <span class="menu-text">数字展示技术</span>
  <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
  <li>
      <a href="#">
          <span class="menu-text">
              视频管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              文档管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              练习题管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              自学资源库         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
                        </ul>  
                    </li> 

<li>
                        <a href="#" class="menu-dropdown">
  <i class="menu-icon fa fa-list"></i>
  <span class="menu-text">移动应用开发</span>
  <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
  <li>
      <a href="#">
          <span class="menu-text">
              视频管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              文档管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              练习题管理         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  <li>
      <a href="#">
          <span class="menu-text">
              自学资源库         </span>
          <i class="menu-expand"></i>
      </a>
  </li>
                        </ul>  
                    </li> 
<li>
                        <a href="#" class="menu-dropdown">
  <i class="menu-icon fa fa-list"></i>
  <span class="menu-text">留言管理</span>
  <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
  <li>
      <a href="#">
          <span class="menu-text">
              留言列表        </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  
                        </ul>  
                    </li> 
<li>
                        <a href="#" class="menu-dropdown">
  <i class="menu-icon fa fa-list"></i>
  <span class="menu-text">友情链接</span>
  <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
  <li>
      <a href="#">
          <span class="menu-text">
              友情链接列表        </span>
          <i class="menu-expand"></i>
      </a>
  </li>
  
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
                                        <li class="active">秦皇岛职业技术学院资源库后台管理</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
				<div style="text-align:center; line-height:1000%; font-size:24px;">
                增删改查 由我做主<br>
                <p style="color:#f00;">欢迎来到小笨蛋后台管理系统，有任何问题请联系QQ：1289649331</p></div>
                </div>
                

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="__PUBLIC__/style/jquery_002.js"></script>
    <script src="__PUBLIC__/style/bootstrap.js"></script>
    <script src="__PUBLIC__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__PUBLIC__/style/beyond.js"></script>
    


</body></html>