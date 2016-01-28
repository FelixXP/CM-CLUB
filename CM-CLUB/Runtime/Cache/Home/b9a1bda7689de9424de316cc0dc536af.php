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
            <li><a href="#">公会</a></li>
            <li><a href="#"><img src="/CM-CLUB/Public/IndexImg/logo.png"></a></li>
            <li><a href="#">时光</a></li>
            <li><a href="#">留言</a></li>
        </ul>
        <div id="round">
            <span>&nbsp;&nbsp;&nbsp;past</span>
            <span><img src="/CM-CLUB/Public/IndexImg/round.png" ></span>
            <span>future</span>
        </div>
    </div>

    <div id="activity">
        <span class="title"><?php echo ($arr['actTitle1']); ?></span>
        <span><img src="/CM-CLUB/Public/IndexImg/arrowAct1.png"></span>
        <span class="title"><?php echo ($arr['actTitle2']); ?></span>
        <!--<p class="line">123</p>-->
        <hr class="line">
        <p class="brief">
            <?php echo ($arr['actBrief1']); ?><br/>
            <?php echo ($arr['actBrief2']); ?><br/>
            <?php echo ($arr['actBrief3']); ?>
        </p>
        <br/>
        <span class="go goText"><a href="#">报名活动</a></span>
        <span class="go"><img src="/CM-CLUB/Public/IndexImg/arrowAct2.png">&nbsp;</span>
    </div>


    <div id="bottom">

    </div>

</body>
</html>