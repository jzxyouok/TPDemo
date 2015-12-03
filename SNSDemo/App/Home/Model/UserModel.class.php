<?php
namespace Home\Model;
header("Content-type:text/html;charset=utf-8");
use Think\Model;
class UserModel extends Model{
    protected  $_auto = array(
        array('user_password','md5',1,'function'),
        array('regist_time','time',1,'function'),
    );
    protected $_validate = array(
        array('user_email','','{%error_email}',0,'unique',1),
        array('repassword','user_password','{%error_repassword}',0,'confirm'),
    );
}

