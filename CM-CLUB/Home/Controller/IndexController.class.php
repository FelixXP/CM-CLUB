<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
//        $user = A('User');
//        $user->checkLogin();
        $arr=getContent();
        $this->assign('arr',$arr);
        $this->display('./Index/template');

    }
}