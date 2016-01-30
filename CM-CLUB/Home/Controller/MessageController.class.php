<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/1/30
 * Time: 0:03
 */
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
    //添加新留言
    public function newMessage(){
        $mes=D('Message');
        if(!checkLogin()){
            echo "未登录";
        }else{
            $result=$mes->addMessage();
            if($result){
                $this->success("发表留言成功，即将返回上一页...");
            }
            else{
                $this->error("发表留言失败，请稍后重试...");
            }
        }
    }

    //获取留言列表
    public function getMessage(){
        $mes=D('Message');
        $row=$mes->getMessage();
        if($row){
//            dump($row);
//            echo"<hr/>";
            //返回JSON类型的数据
//            $row= json_encode($row,JSON_UNESCAPED_UNICODE);
            $this->ajaxReturn($row,'json');
        }
        else{
            echo "获取留言列表出错";
        }
    }
}