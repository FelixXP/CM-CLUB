<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/1/30
 * Time: 0:03
 */
namespace Home\Model;
use Think\Exception;
use Think\Model;
class MessageModel extends Model {
    //添加新留言
    public function addMessage(){
        $newMes=I('post.newMessage');
        $user_id=session('id');
        $username=session('name');
        $data=array(
            'user_id'=>$user_id,
            'username'=>$username,
            'content'=>$newMes,
        );
        $row=$this->table('message')->add($data);
        if($row){return true;}
        else{return false;}
    }

    //获取留言列表，返回JSON类型数据
    public function getMessage(){
        $row=$this->order('time desc')->table('message')->select();
        $i=0;
        if($row){
            while($row[$i]){
                $row[$i]['content']=html_entity_decode($row[$i]['content']);
                $i++;
            }
            return $row;
        }
        else{
            return false;
        }
    }
}