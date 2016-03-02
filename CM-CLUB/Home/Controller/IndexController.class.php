<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
//        session(null);
        //检查登录情况
        if(checkLogin()){
            $this->assign('log',true);
            $this->assign('username',session('name'));
        }else{
            $this->assign('log',false);
        }
        //从文本获取首页内容
        $arr=getContent();
        $this->assign('arr',$arr);
        //显示首页
//        dump($arr);
        $this->display('club');
    }

    //页面跳转
    public function linkTo($aim="index"){
        if(checkLogin()){
            $this->assign('log',true);
            $this->assign('username',session('name'));
        }else{
            $this->assign('log',false);
        }
        $this->display($aim);
    }
   public function testFelix(){
    echo "110";
}
}