<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CM-CLUB 班级</title>
    <link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/IndexCss/logBox.css" />
    <link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/IndexCss/bottomBox.css" />
    <link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/IndexCss/club.css" />
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
    <li><a href="./Activity" id="actCont">活动</a></li>
    <li><a href="./Club/" id="cluCont">班级</a></li>
    <li><a href="#time" id="timCont">时光</a></li>
    <li><a href="./Message" id="mesCont" >留言</a></li>
</ul>
<ul id="content2">
    <li><a id="cluHome">班级首页</a></li>
    <li><a>我的班级</a></li>
    <li><a id="creClub">创建班级</a></li>
</ul>
<div id="main">
    <div id="searAct">
        <form action="#" method="get">
            <input type="search" name="search" id="searBox"/>
            <input type="submit" value="搜索班级" id="searSub"/>
            <span id="advSear"><a href="#">高级搜索</a></span>
        </form>
    </div>

    <div id="cluList">
        <?php if(is_array($cluList)): foreach($cluList as $key=>$clu): ?><div class="cluBox">
                <div class="cluBoxLeft">
                    <b><?php echo ($clu["clubname"]); ?></b>
                    <img src="/CM-CLUB/Public/IndexImg/logo.png">
                </div>
                <div class="cluBoxRight">
                    <p class="cluAdmin">
                        <span>创建人：<?php echo ($clu["admin"]); ?></span>
                        <span>创建时间：<?php echo ($clu["time"]); ?></span>
                    </p>
                    <p class="cluBrief">
                        <?php echo ($cluList[0][clubbrief]); ?>
                    </p>
                    <a href="#" class="join">立即加入</a>
                </div>
            </div><?php endforeach; endif; ?>

    </div>

    <!--<div id="creClubBox">-->
        <!--<b>创建公会</b>-->
        <!--<form action="http://localhost/CM-CLUB/index.php/Home/Club/creClub" method="post">-->
            <!--<table>-->
                <!--<tr>-->
                    <!--<td><span>公会名称：</span></td>-->
                    <!--<td><input type="text" name="cluName" id="namText" /></td>-->
                <!--</tr>-->
                <!--<tr>-->
                    <!--<td><span>公会简介：</span></td>-->
                    <!--<td><textarea name="cluBrief" id="breText" maxlength="200">content</textarea></td>-->
                <!--</tr>-->
            <!--</table>-->
            <!--<input type="submit" value="创 建" id="creSubmit"/>-->
            <!--<a href="#" id="creClose">取消</a>-->
        <!--</form>-->
    <!--</div>-->

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
<script type="text/javascript" src='/CM-CLUB/Public/IndexJs/jquery-2.1.4.js'></script>
<script type="text/javascript" src='/CM-CLUB/Public/IndexJs/club.js'></script>
</body>
</html>