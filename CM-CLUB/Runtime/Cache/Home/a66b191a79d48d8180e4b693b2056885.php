<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CM-CLUB</title>
    <link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/IndexCss/logBox.css" />
</head>
<body>
<div id='login_box'>
    <?php if($log == false): ?><span id="collect">关注我们</span>
        <span><a id='login' href="http://localhost/CM-CLUB/Index.php/Home/User/toLogin">登录</a></span>
        <span>/</span>
        <span><a id='register' href="http://localhost/CM-CLUB/Index.php/Home/User/toLogin#toregister">注册</a></span>
        <?php else: ?>
        <span><a id='personal' href="#"><?php echo ($username); ?></a></span><?php endif; ?>
</div>
</body>
</html>