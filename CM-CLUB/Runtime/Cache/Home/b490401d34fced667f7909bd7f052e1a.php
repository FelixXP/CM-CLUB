<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CM-CLUB</title>
    <link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/IndexCss/Home.css" />
</head>
<body>
<div id='login_box'>
    <?php if($log == false): ?><span id="collect">关注我们</span>
        <span><a id='login' href="http://localhost/CM-CLUB/Index.php/Home/User/toLogin">登录</a></span>
        <span>/</span>
        <span><a id='register' href="http://localhost/CM-CLUB/Index.php/Home/User/toLogin#toregister">注册</a></span>
        <?php else: ?>
        <span><a id='personal' href="#"><?php echo ($username); ?></a></span><?php endif; ?>
    <div/>
    <div id="nav">
        <ul id="contents">
            <li><a href="#activity">活动</a></li>
            <li><a href="#club">公会</a></li>
            <li><a href="#"><img src="/CM-CLUB/Public/IndexImg/logo.png"></a></li>
            <li><a href="#time">时光</a></li>
            <li><a href="#message">留言</a></li>
        </ul>
        <div id="round">
            <span>&nbsp;&nbsp;&nbsp;past</span>
            <span><img src="/CM-CLUB/Public/IndexImg/round.png" ></span>
            <span>future</span>
        </div>
    </div>
<!--活动-->
    <div id="activity" class="mainBox">
        <span class="title"><?php echo ($arr['actTitle1']); ?></span>
        <span><img src="/CM-CLUB/Public/IndexImg/actArrow1.png"></span>
        <span class="title"><?php echo ($arr['actTitle2']); ?></span>
        <hr class="line">
        <p class="brief">
            <?php echo ($arr['actBrief1']); ?><br/>
            <?php echo ($arr['actBrief2']); ?><br/>
            <?php echo ($arr['actBrief3']); ?>
        </p>
        <br/>
        <span class="go goText"><a href="#">报名活动</a></span>
        <span class="go"><img src="/CM-CLUB/Public/IndexImg/actArrow2.png">&nbsp;</span>
    </div>
<!--公会-->
    <div id="club" class="mainBox">
        <span class="title cluTitle"><?php echo ($arr['cluTitle1']); ?></span>
        <span><img src="/CM-CLUB/Public/IndexImg/cluArrow1.png"></span>
        <span class="title cluTitle"><?php echo ($arr['cluTitle2']); ?></span>
        <hr class="line">
        <p class="brief cluBrief">
            <?php echo ($arr['cluBrief1']); ?><br/>
            <?php echo ($arr['cluBrief2']); ?><br/>
            <?php echo ($arr['cluBrief3']); ?>
        </p>
        <br/>
        <span class="go goText cluGoText"><a href="#" class="cluGo">加入公会</a></span>
        <span class="go"><img src="/CM-CLUB/Public/IndexImg/cluArrow2.png">&nbsp;</span>
    </div>
    <!--时光邮件-->
    <div id="time" class="mainBox">
        <span class="title timTitle"><?php echo ($arr['timTitle1']); ?></span>
        <span><img src="/CM-CLUB/Public/IndexImg/timArrow1.png"></span>
        <span class="title timTitle"><?php echo ($arr['timTitle2']); ?></span>
        <hr class="line">
        <p class="brief cluBrief">
            <?php echo ($arr['timBrief1']); ?><br/>
            <?php echo ($arr['timBrief2']); ?><br/>
            <?php echo ($arr['timBrief3']); ?>
        </p>
        <br/>
        <span class="go goText timGoText"><a href="#" class="timGo">时光邮件</a></span>
        <span class="go"><img src="/CM-CLUB/Public/IndexImg/timArrow2.png">&nbsp;</span>
    </div>
<!--留言-->
    <div id="message" class="mainBox">
        <span class="title mesTitle"><?php echo ($arr['mesTitle1']); ?></span>
        <span><img src="/CM-CLUB/Public/IndexImg/mesArrow1.png"></span>
        <span class="title mesTitle"><?php echo ($arr['mesTitle2']); ?></span>
        <hr class="line">
        <p class="brief mesBrief">
            <?php echo ($arr['mesBrief1']); ?><br/>
            <?php echo ($arr['mesBrief2']); ?><br/>
            <?php echo ($arr['mesBrief3']); ?>
        </p>
        <br/>
        <span class="go goText mesGoText"><a href="#" class="mesGo">留言吐槽</a></span>
        <span class="go"><img src="/CM-CLUB/Public/IndexImg/mesArrow2.png">&nbsp;</span>
    </div>

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
    </div>

<a id="toTop" href="#"><img src="/CM-CLUB/Public/IndexImg/toTop.png"></a>
</body>
</html>