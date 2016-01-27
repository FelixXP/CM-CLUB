<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 2016/1/27
 * Time: 10:19
 */

Vendor('swift.lib.swift_required');
//加载第三方类swift，实现发送邮件功能

function sentEmail($data){
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