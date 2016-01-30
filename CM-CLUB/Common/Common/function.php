<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 2016/1/27
 * Time: 10:19
 */


//检查是否登录
function checkLogin(){
    if(!empty(session('name'))){
       return true;
    }else{
        return false;
    }
}




//发送邮件
function sentEmail($data){
    //加载第三方类swift，实现发送邮件功能
    Vendor('swift.lib.swift_required');

    //发送邮件,以QQ邮箱为例
    //配置邮箱服务器，得到传输对象
    $transport=\Swift_SmtpTransport::newInstance(C('EM_SERVER'),C('EM_PORT'));
    //设置登录帐号和密码
    $transport->setUsername(C('EM_USERNAME'));
    $transport->setPassword(C('EM_PASSWORD'));
    //得到发送邮件对象Swift_Mailer对象
    $mailer=\Swift_Mailer::newInstance($transport);
    //得到邮件信息对象
    $message=\Swift_Message::newInstance();
    //设置管理员信息
    $message->setFrom(array(C('EM_USERNAME')=>C('EM_ADMIN')));
    //设置接收邮件用户信息
    $message->setTo($data['email']);
    //设置邮件主题
    $message->setSubject($data['sub']);
    //设置邮件正文
    $message->setBody("{$data['str']}",'text/html','utf-8');

    //发送邮件
    try{
        if($mailer->send($message)){
            return true;
        }else{
            return false;
        }

    }catch(Swift_ConnectionExcption $e){
        echo '邮件发送失败';
        return false;
    }
}

//获取主页文本信息
function getContent(){
//    $arr=array();
//    $handle=fopen(C(MY_PUBLIC)."Text/activity.txt",'r');
//    while(!feof($handle)){
//        $key=trim(fgets($handle));
//        $arr[$key]=trim(fgets($handle));
//    }
    $arr=array(
        "actTitle1" =>"活动",
        "actTitle2" =>"找个借口聚一聚",
        "actBrief1" =>"在成长的道路上磕磕碰碰，学会了所谓的圆滑，见惯了虚伪，轻狂褪去，多了份深思的沉稳。",
        "actBrief2" =>"樱花盛开的季节，再重新踏上这片青春故土的时候，感恩每一个朋友，思念那些帮助我的人。",
        "actBrief3" =>"青春不散场，找个借口聚一聚",
        "cluTitle1" =>"公会",
        "cluTitle2" =>"莫名其妙走到一起",
        "cluBrief1" =>"你发现了么，我们一点点的改变，变得不再那么容易大喜大悲。",
        "cluBrief2" =>"然而在这个人来人往的繁华闹市中，最美好的回忆依旧是我们在同一个屋檐下共同走过的时光。",
        "cluBrief3" =>"缘分使然，莫名其妙走到一起",
        "mesTitle1" =>"留言",
        "mesTitle2" =>"叙回忆畅未来",
        "mesBrief1" =>"原谅我一生放荡不羁爱吐槽",
        "mesBrief2" =>"这里实在想不出文案了，自己脑补吧",
        "mesBrief3" =>"欢迎吐槽~",
        "timTitle1" =>"时光",
        "timTitle2" =>"写封信给未来",
        "timBrief1" =>"十年后的某一天，收到一封自己十年前发来的邮件，对比当年期望，你的梦想实现了么？",
        "timBrief2" =>"五十年过去，收到一封初恋情人五十年前的情书，那种感觉一定会非常特别吧？",
        "timBrief3" =>"时光未知，写封信给未来",
);
    return $arr;
}

