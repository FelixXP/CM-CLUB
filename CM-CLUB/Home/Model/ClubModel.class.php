<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/3/3
 * Time: 16:56
 */

namespace Home\Model;
use Think\Model;

class ClubModel extends Model{
//    创建
    public function create(){
        $cluName=I('post.cluName');
        $cluBrief=I('post.cluBrief');
        $user_id=session('id');
        $data1=array(
            'user_id'=>$user_id,
            'clubname'=>$cluName,
            'clubbrief'=>$cluBrief,
        );
        $club_id=$this->add($data1);
        $data2=array(
            'user_id'=>$user_id,
            'club_id'=>$club_id,
        );
        $result=M()->table('user_clu')->add($data2);
        if($result&&$club_id){
            return true;
        }
        else{
            return false;
        }
    }
}