<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"D:\ProgramFiles\UPUPW_NP7.0\htdocs\resource\public/../application/admin\view\login\login.html";i:1494408306;}*/ ?>
<!DOCTYPE html>
<html><!--Head--><head>
    <meta charset="utf-8">
    <title>后台管理</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/resource/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/resource/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="/resource/public/static/admin/style/beyond.css" rel="stylesheet">
    <link href="/resource/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="/resource/public/static/admin/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">后台管理</div>
                <div class="loginbox-textbox">
                    <input value="admin" class="form-control" placeholder="username" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="code" name="code" style="margin:10px 0;width:80px;float:left;" type="text">
                    <img  style="float:left; cursor:pointer;" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();" />
				</div>
                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="登录" type="submit">
                </div>
            </div>
                <div class="logobox">
                    <p class="text-center">技术支持：信软科技工作室<br>
Copyright 2017-2018 All Rights Reserved</p>
                </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="/resource/public/static/admin/style/jquery.js"></script>
    <script src="/resource/public/static/admin/style/bootstrap.js"></script>
    <script src="/resource/public/static/admin/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="/resource/public/static/admin/style/beyond.js"></script>




</body><!--Body Ends--></html>