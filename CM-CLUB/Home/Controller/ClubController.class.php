<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/3/3
 * Time: 16:54
 */
namespace Home\Controller;
use Think\Controller;
class ClubController extends Controller{

//创建
public function creClub(){
    if(!checkLogin()){
        $this->error("您尚未登录，请登录后重试...");
    }else{
        $mClub=D('club');
        $res=$mClub->create();
        if($res){
            $this->success("创建成功，即将返回上一页...");
        }else{
            $this->error("创建失败，请稍后重试...");
        }
    }
}
}