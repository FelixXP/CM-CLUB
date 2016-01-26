<?php
namespace Home\Model;
use Think\Model;
Vendor('swift.lib.swift_required');
class UserModel extends Model {
	public function reg(){
		//接收参数
		$username=I('post.username','','addslashes');
		$password=I('post.password','','md5');
		$email=I('post.email');
		$time=time();
		//完成注册功能
		$token=md5($username.$password.$time);//验证令牌
		 // echo $token;
		 // echo "<hr>";
		 // echo $token+1;
		 // exit;
		$token_exptime=$time+1800;//令牌过期时间30分钟
		$data=array('username'=>$username,
					'password'=>$password,
					'email'=>$email,
					'token'=>$token,
					'token_exptime'=>$token_exptime,
					'time'=>$time
					);
		$res=$this->table('user')->add($data);
		
		if($res){
			$lastInsertId=$res;
		//发送邮件,以QQ邮箱为例
		//配置邮箱服务器，得到传输对象
		$transport=\Swift_SmtpTransport::newInstance('smtp.163.com',25);
		//设置登录帐号和密码
		$transport->setUsername('felixxp@163.com');
		$transport->setPassword('felix698023');
		//得到发送邮件对象Swift_Mailer对象
		$mailer=\Swift_Mailer::newInstance($transport);
		//得到邮件信息对象
		$message=\Swift_Message::newInstance();
		//设置管理员信息
		$message->setFrom(array('felixxp@163.com'=>'Felix'));
		//设置接收邮件用户信息
		$message->setTo(array($email=>'新用户'));
		//设置邮件主题
		$message->setSubject('激活邮件');
		//设置邮件正文
		$url="http://localhost/CM-CLUB/index.php/Home/User/activate/token/{$token}";
		$urlencode=urlencode($url);
		$str=<<<EOT
			亲爱的{$username}您好！感谢您的注册，承蒙厚爱。<br/>
			请点击以下链接激活帐号，即可登录！<br/>
			<a href="{$url}">{$urlencode}</a>
			<br/>
			如果点此链接无反应，可以将链接复制到浏览器地址栏中执行，链接有效时间为30分钟。
EOT;
		$message->setBody("{$str}",'text/html','utf-8');
		
		//发送邮件
		try{
			if($mailer->send($message)){
				echo "恭喜您{$username}注册成功，请到邮箱激活之后登陆<br/>";
				echo "3秒钟后将跳转到登录页面...";
				echo '<meta http-equiv="refresh" content="3;url=index.php#tologin"/>';
			}else{
				$this->table('user')->where("user_id={$lastInsertId}");
				echo "注册失败，请重新注册！";
				echo "3秒钟后将跳转到注册页面...";
				echo '<meta http-equiv="refresh" content="3;url=index.php#toregsiter"/>';
			}
			
		}catch(Swift_ConnectionExcption $e){
			echo '邮件发送失败';
		}
		
		
	}else{
		echo "用户注册失败！3秒钟后将跳转到注册页面...";
		echo '<meta http-equiv="refresh" content="3;url=index.php#toregsiter"/>';
	}
		}
	}
?>