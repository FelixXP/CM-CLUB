<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>首页</title>
<meta charset='UTF-8'>
</head>
<body>
	<div id='login_box'>
	<?php if($log == false): ?><span><a id='login' href="http://localhost/CM-CLUB/Index.php/Home/User/toLogin">登录</a></span>
	<span>/</span>
	<span><a id='register' href="http://localhost/CM-CLUB/Index.php/Home/User/toLogin#toregister">注册</a></span>
	<?php else: ?>
	<span><a id='personal' href="#"><?php echo ($username); ?></a></span><?php endif; ?>
	<div/>
</body>
</html>