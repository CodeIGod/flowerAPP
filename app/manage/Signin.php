<?php
class Signin extends index_smarty {
    function __construct()
    {
        parent::__construct();
        $this->mysql=new mysql('index_user');
    }
    function index(){
        $this->smarty->display('view/index/Signin.html');
    }
    //////////用户名和手机号登陆验证///////////////
    function login(){
        $data=$this->mysql->select("*");
        session_start();
        foreach ($data as $v){
            if ($v['username']==$_POST['username']||$v['utel']==$_POST['username']) {
                if ($v['password']==md5($_POST['password'])){
                    $_SESSION['login']='yes';
                    $_SESSION['uid']=$v['uid'];
                    echo 'success';
                    exit();
                }else{
                    echo 'psderror';
                    exit();
                }
            }
        }
        echo 'usererror';

    }
}