<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
	//进入登录页
	public function toLogin(){
        $this->display('Login/login');
	}
	
	//注册
	public function register(){
		$mUser=D('User');
        $statu=$mUser->reg();
        if($statu===1){//注册成功
            $this->success('注册成功，请到邮箱中激活帐号',U("Index/index"));
        }
        else{
            $this->error('注册失败，3秒后将跳转到上一页');
        }
	}


    //激活帐号
    public function activate()
    {
        $user = D('User');
        $statu = $user->activate();
        if ($statu === 1) {
            $this->success('帐号已经激活，即将跳转到登录页',U("User/toLogin"));
        }
        elseif ($statu === 2) {
            $this->success('链接已经过期，请重新注册',U("Index/index"));
        }
        elseif ($statu === 3) {
            $this->success('激活失败，请稍后重试',U("Index/index"));
        }
        elseif($statu===4){
            $this->success('激活成功，即将跳转到登录页',U("User/toLogin"));
        }else{
            $this->success('激活失败，请稍后重试',U("Index/index"));
        }

    }

    //登录
    public function login(){
        $user=D('User');
        $data=$user->login();
        $login_statu=$data['login_statu'];
        if($login_statu===1){
            //$this->success('帐号尚未激活，请先到邮箱激活帐号',U("User/toLogin"));
        }
        elseif($login_statu===2){
            $_SESSION['name']=$data['name'];
            $_SESSION['id']=$data['id'];
            $this->success('登录成功，即将跳转到首页',U("Index/index"));
        }
        elseif($login_statu===3){
            $this->success('帐号或密码错误',U("User/toLogin"));
        }
    }
}