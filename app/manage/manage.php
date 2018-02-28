<?php

class manage extends m_smarty
{
    function __construct()
    {
        parent::__construct();
    }

    ////////////打开登陆页面///////////////
    function index()
    {
        $this->smarty->display('view/management/login.html');
    }
    ////////////登陆页面输出验证码///////////////
    function code()
    {
        $RegImg = new code(200, 60, '4');
        $RegImg->outPut();
        session_start();
        $_SESSION['code'] = strtolower($RegImg->code);
    }
    ////////////登陆验证///////////////
    function regLogin(){
        $this->mysql=new mysql('manager_user');
        $data=$this->mysql->select("*");
        session_start();
        if ($_SESSION['code']==$_POST['code']){
            for ($i=0;$i<count($data);$i++){
                if ($data[$i]['username']==$_POST['username']){
                    if ($data[$i]['password']==md5($_POST['password'])){
                        $_SESSION['isLogin']='yes';
                        $_SESSION['username']=$_POST['username'];
                        echo 'ok';
                        exit();
                    }else{
                        echo 'psderror';
                        exit();
                    }
                }
            }
            echo 'username';
        }
        echo 'regerror';
    }
    //////////登陆后台管理页面//////////////
    function view(){
        $this->smarty->display('view/management/index.html');
    }

}