<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
	//检查是否登录
	public function checkLogin(){
		if(isset($_SESSION['username'])){
			$this->assign('log',true);
			$this->assign('username',$_SESSION['username']);
		}else{
			$this->assign('log',false);
		}
	}
	
	//进入登录页
	public function toLogin(){
		if(isset($_SESSION['username'])){
			$this->display('Index/index');
		}else{
			$this->display('Login/login');
		}
	}
	
	//登录或注册
	public function log(){
		$act=I('get.act');
		$mUser=D('User');
		 if($act==='reg'){
			$res=$mUser->reg();
		 }elseif($act==='log'){
			;
		 }
	}
	
}