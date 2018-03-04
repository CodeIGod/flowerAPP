<?php
class person extends index_smarty{
    function __construct()
    {
        parent::__construct();
        $this->mysql=new mysql('index_user');
    }
    function index(){
        session_start();
        if (isset($_SESSION['login'])&&$_SESSION['login']=='yes'){
            $uid=$_SESSION['uid'];
            $data=$this->mysql->where("uid=$uid")->select("*")[0];
            $this->smarty->assign('data',$data);
            $this->smarty->display('view/index/personal.html');
        }else{
            $this->smarty->display('view/index/Signin.html');
        }
    }
}