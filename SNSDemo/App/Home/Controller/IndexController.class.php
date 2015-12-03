<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 用户注册控制器
 * login()实现用户登录
 * regist()实现用户注册
 */
class IndexController extends Controller{
    /**用户登录函数**/
    public function login(){
        $data = $_POST;
        $user_email = $data['user_email'];
        $user_password = $data['user_password'];
        $User = D('User');
        //查找，根据email和password，如果匹配，返回数据，不匹配返回为null
        //这里存在问题 代码有累赘，可以优化，
        $rs_email = $User->where("user_email='".$user_email."'")->find();
        $rs_password = $User->where("user_password='".md5($user_password)."'")->find();
        if($data){
            if($this->checkLogin($rs_email, $rs_password)){
                //根据email得到用户信息
                $rs = $User->where("user_email='".$user_email."'")->field('user_id')->find();
//                print_r($rs);
                session('user_id',$rs[user_id]);
//                var_dump(session(user_id));
//                echo sessionsavepath();
//                var_dump(session(user));
                $this->redirect('index');
            }
        }
        $this->display('login');
    }
    /**用户注册**/
    public function regist(){
        $User = D('User');
        if(!empty($_POST)){
            if($User->create()){
                $User->user_id = md5(time().mt_rand(1, 1000000));
                $User->add();
                $this->redirect('login');
            }else{
                 exit($User->getError());
            }
        }
       
        $this->display('regist');
        
    }
    public function index(){
        $user_id = session(user_id);
//        echo $user_id;
        $this->checkUser($user_id);
        $User = D('User');
        $Comment = D('Comment');
        $rs_comment = $Comment->select();
        $rs_user = $User->where("user_id=$user_id")->find();
        $this->assign('user',$rs_user);
        $this->assign('comment',$rs_comment);
//        $this->assign('user',$user_id);
//        log($user_id);
        $this->display('index');
    }
    public function userList(){
        
        $this->display('user_list');
    }
    
    public function edit(){
        $user_id = session(user_id);
        $this->checkUser($user_id);
        $User = D('User');
        $data = $_POST;
//        var_dump($data);
        if(!empty($data)){
            if($User->create($data,2)){
                $User->user_hoby = join('-', $data[user_hoby]);
                $User->where("user_id=$user_id")->save();
            }
        }
        
        $user_one = $User->where("user_id=$user_id")->find();
        $this->assign('user',$user_one);
        $this->display('edit');
    }
    
    public function logout(){
        session(user_id,null);
        $this->redirect('login');
    }


    /**判断登录 检查密码和用户是否匹配**/
    public function checkLogin($emai,$password){
        if(!$emai){
            echo "<script>alert('用户错误！');</script>";
            return FALSE;
        }  else {
            if(!$password){
                echo "<script>alert('密码错误！');</script>";
                return FALSE;
            }  else {
                return TRUE;
            }
        }
    }
    public function checkUser($user_id){
        if(empty($user_id)){
            $this->redirect("login");
        }
    }
}