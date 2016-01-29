<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //检查登录情况
        if(checkLogin()){
            $this->assign('log',true);
            $this->assign('username',$_SESSION['name']);
        }else{
            $this->assign('log',false);
        }
        //从文本获取首页内容
        $arr=getContent();
        $this->assign('arr',$arr);
        //显示首页
        $this->display('index');
    }

    //页面跳转
    public function linkTo($aim="index"){
        $this->display($aim);
    }
   public function testFelix(){
    echo "110";
}
}