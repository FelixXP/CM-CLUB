<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/2/28
 * Time: 20:12
 */

namespace Home\Controller;
use Think\Controller;

class ActivityController extends Controller{
    public function index(){
        $this->display('Index/activity');
    }
}