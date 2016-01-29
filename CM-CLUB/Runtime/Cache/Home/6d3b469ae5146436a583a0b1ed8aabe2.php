<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>CM-CLUB</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/LoginCss/demo.css" />
        <link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/LoginCss/style.css" />
		<link rel="stylesheet" type="text/css" href="/CM-CLUB/Public/LoginCss/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Welcome <span>This Is Felix Show Time</span></h1>
				<nav class="codrops-demos">
					<span>lustre lent to a humble house</span>
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="http://localhost/CM-CLUB/Home/User/login" autocomplete="on" method="post">
                                <h1>CM-CLUB</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > 用户名  </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Your Username"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> 密码  </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="*****" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">自动登录</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="登 录" /> 
								</p>
                                <p class="change_link">
									没有登录帐号？
									<a href="#toregister" class="to_register">注 册</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="http://localhost/CM-CLUB/Index.php/Home/User/register" autocomplete="on" method="post">
                                <h1> CM-CLUB </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">用户名</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="Mr.King" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">密码 </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="******"/>
                                </p>
								<p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > 邮箱</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="Mr.King@mail.com"/> 
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="注 册"/> 
								</p>
                                <p class="change_link">  
									已经有帐号？
									<a href="#tologin" class="to_register"> 直接登录 </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>