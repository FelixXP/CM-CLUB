<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$this->assign('log',false);
		$this->assign('username','Felix');
		$this->display('./Index/index');
    }
}