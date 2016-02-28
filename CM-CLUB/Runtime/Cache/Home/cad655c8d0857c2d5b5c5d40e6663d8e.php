<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CM-CLUB 公会</title>
    <link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/IndexCss/logBox.css" />
    <link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/IndexCss/bottomBox.css" />
    <link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/IndexCss/activity.css" />
</head>
<body>
<!--添加登录框-->
<body>
<div id='login_box'>
    <?php if($log == false): ?><span id="collect"><a href="http://weibo.com/2231865444/profile">关注我们</a></span>
        <span><a id='login' href="http://localhost/CM-CLUB/Index.php/Home/User/toLogin">登录</a></span>
        <span>/</span>
        <span><a id='register' href="http://localhost/CM-CLUB/Index.php/Home/User/toLogin#toregister">注册</a></span>
        <?php else: ?>
        <span id="collect"><a href="http://weibo.com/2231865444/profile">关注我们</a></span>
        <span><a id='personal' href="#"><?php echo ($username); ?></a></span>
        <span><a id='logout' href="<?php echo U('Home/User/logout');?>">退出</a></span><?php endif; ?>
</div>
<!--添加菜单栏-->
<link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/IndexCss/contentBox.css" />
<a href="http://localhost/CM-CLUB/index.php/Home/Index" id="logo"><img src="/CM-CLUB/Public/IndexImg/logo.png"></a>
<ul id="contents">
    <li><a href="#activity" id="actCont">活动</a></li>
    <li><a href="#club" id="cluCont">公会</a></li>
    <li><a href="#time" id="timCont">时光</a></li>
    <li><a href="#message" id="mesCont" >留言</a></li>
</ul>
<div id="main">
    <div id="left">
        <div id="calendar"></div>
        <span><a id="topAct" href="#">热门活动</a></span>
        <span><a id="myAct" href="#">我的活动</a></span>
    </div>

    <div id="right">
        <div id="searAct">
            <span>搜索你想要参加的活动</span>
            <br/>
            <form action="#" method="get">
                <input type="search" name="search" id="searBox"/>
                <input type="submit" value="搜索" id="searSub"/>
            </form>
        </div>
    </div>
</div>


<!--添加底部-->
<div id="bottom">
    <div id="contactUs">
        <b>联系我们</b>
        <hr>
        <p>邮箱：felixxp@163.com</p>
        <p>电话：18814128046</p>
        <p>地址：广东省广州市番禺区大学城外环西路100号广东工业大学</p>
    </div>
    <div id="collectUs">
        <b>关注我们</b>
        <hr>
        <p>微信：XP68046</p>
        <p>微博：@Felix_XP</p>
        <p>GitHub：https://github.com/FelixXP</p>
    </div>
</div>
</body>
</html>