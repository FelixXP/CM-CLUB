<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $user = A('User');
        $user->checkLogin();
        $this->display('./Index/index');
    }
}