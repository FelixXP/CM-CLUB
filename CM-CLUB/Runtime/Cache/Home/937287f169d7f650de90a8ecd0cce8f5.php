<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CM-CLUB</title>
    <script src="/CM-CLUB/Public/IndexJs/jquery-2.1.4.js"></script>
    <link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/IndexCss/logBox.css" />
    <link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/IndexCss/message.css" />
    <link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/IndexCss/bottomBox.css" />
    <link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/editor/css/wangEditor.css">
    <link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/ctmessage-master/ctmessage-master.css">
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
<a href="#" id="logo"><img src="/CM-CLUB/Public/IndexImg/logo.png"></a>
<ul id="contents">
    <li><a href="#activity" id="actCont">活动</a></li>
    <li><a href="#club" id="cluCont">公会</a></li>
    <li><a href="#time" id="timCont">时光</a></li>
    <li><a href="#message" id="mesCont" >留言</a></li>
</ul>
<div id="main">
    <a id="toEdit" href="#edit"><span>我有话说</span></a>
<!--留言列表-->
    <div id="mesBox" ></div>

    <form id="edit" method="post" action="http://localhost/CM-CLUB/index.php/Home/Message/newMessage" onsubmit="return checkLength(); onFocus=clearMen()">
        <textarea id='textEditor' name="newMessage"></textarea>
        <input id="mesSubmit" type="submit" value="发表留言" />
        <p id="mention"></p>
    </form>
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

<script type="text/javascript" src='/CM-CLUB/Public/editor/js/jquery-1.10.2.min.js'></script>
<script type="text/javascript" src='/CM-CLUB/Public/editor/js/wangEditor.js'></script>
<script type="text/javascript" src='/CM-CLUB/Public/editor/js/editor.js'></script>
<script type="text/javascript" src='/CM-CLUB/Public/IndexJs/message.js'></script>
<script type="text/javascript" src='/CM-CLUB/Public/ctmessage-master/ctmessage-master.js'></script>
</body>
</html>