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
    public function index(){
        $mClub=D('club');
        $cluList=$mClub->getClubList();
        $this->assign('cluList',$cluList);
        $this->display('Index/club');

    }

    //创建
    public function creClub(){
        $mClub=D('club');
        $res=$mClub->create();
        if($res){
            $this->success('创建成功');
        }
        else{
            $this->error('创建失败，请稍后重试');
        }

    }
}