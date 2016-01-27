<?php
namespace Home\Model;
use Think\Exception;
use Think\Model;
class UserModel extends Model {
	//注册---返回$statu
    //statu=1 操作成功  statu=2 写入数据库失败  statu=3 发送邮件失败
    public function reg(){
		//接收参数
		$username=I('post.username','','addslashes');
		$password=I('post.password','','md5');
		$email=I('post.email');
		$time=time();
		//完成注册功能
		$token=md5($username.$password);//验证令牌
		$token_exptime=$time+1800;//令牌过期时间30分钟
		$data=array('username'=>$username,
					'password'=>$password,
					'email'=>$email,
					'token'=>$token,
					'token_exptime'=>$token_exptime,
					'time'=>date('Y-m-d H:i:s',$time)
					);
        try{
            $res=$this->table('user')->add($data);
        }
        catch(Exception $e){
            $statu=2;
            return $statu;
        }

        $lastInsertId=$res;
        if($res){//插入数据成功，发送邮件
            //设置数据
            $datalist=array();
            //邮件用户信息
            $datalist['email']=array($email=>'新用户');
            //邮件主题
            $datalist['sub']='激活邮件';
            //邮件正文
            $url='http://localhost/CM-CLUB/Home/User/activate/token/'.$token;
            $urlencode=urlencode($url);
            $datalist['str']=<<<EOT
			亲爱的{$username}您好！感谢您的注册，承蒙厚爱。<br/>
			请点击以下链接激活帐号，即可登录！<br/>
			<a href="{$url}">{$urlencode}</a>
			<br/>
			如果点此链接无反应，可以将链接复制到浏览器地址栏中执行，链接有效时间为30分钟。
EOT;
            //调用sentEmail函数，发送邮件
            $sent=\sentEmail($datalist);
            if(!$sent){//发送邮件失败，删除数据库中数据
                $this->table('user')->where("user_id={$lastInsertId}")->delete();
                $statu=3;
            }else{
                $statu=1;
            }
        }
        return $statu;
	}

    //激活帐号
    public function activate(){
    //$atatu=1 帐号已经激活
    //$atatu=2 令牌过期
    //$atatu=3 激活操作失败
    //$atatu=4 激活成功
        $token=I('get.token','','addslashes');
        $res1=$this->field('user_id,token_exptime,statu')
                   ->table('user')
                   ->where("token='{$token}'")
                   ->select();
        $data=$res1[0];
        if(!empty($res1)){
            //如果帐号已经激活
            if($data['statu']!=='0'){
                $statu=1;
                dump($data['statu']);
                exit;
                return $statu;
            }
            //如果令牌时间过期
            $now=time();
            if($now>$data['token_exptime']){
                $statu=2;
                $this->table('user')->where("user_id='{$data['user_id']}'")->delete();
                return $statu;
            }

            $res2=$this->table('user')->where("user_id='{$data['user_id']}'")->setField('statu','1');
            //如果修改statu失败
            if(!$res2){
                $statu=3;
                return $statu;
            }else{
                $statu=4;
                return $statu;
            }
        }
        else{
            $statu=3;
            return $statu;
        }




    }

    //登录
    public function login(){
        $username=I('post.username','','addslashes');
        $password=I('post.password','','md5');
        $data=array();
        $row=$this->table('user')->where("username='{$username}' AND password='{$password}'")->select();
        $data['name']=$row[0]['username'];
        $data['id']=$row[0]['user_id'];
        if($row){
            if($data['statu']=='0'){
                //帐号未激活
                $data['login_statu']=1;
                return $data;
            }else{
                //登录完成
                $data['login_statu']=2;
                return $data;
            }
        }else{
            //帐号或密码错误
            $data['login_statu']=3;
            return $data;
        }
    }
}
?>