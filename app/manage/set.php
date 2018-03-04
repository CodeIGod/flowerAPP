<?php

class set extends index_smarty
{
    function __construct()
    {
        parent::__construct();
        $this->mysql = new mysql('index_user');
    }

    function index()
    {
        $this->smarty->display('view/index/set.html');
    }

    function info()
    {
        session_start();
        $uid = $_SESSION['uid'];
        $data = $this->mysql->where("uid=$uid")->select("*")[0];
        $str="";
        if ($data['usex'] == '男') {
            $str .= "<option value='男' selected>男</option><option value='女'>女</option>";
        } else if ($data['usex'] == '女') {
            $str .= "<option value='女' selected>女</option><option value='男'>男</option>";
        }
        $this->smarty->assign('udata', $data);
        $this->smarty->assign('str', $str);
        $this->smarty->display("view/index/p-info.html");
    }

    //////////修改个人信息///////////
    function alter()
    {
        session_start();
        $uid = $_SESSION['uid'];
        $row = $this->mysql->update("update index_user set {$_GET['keys']}='{$_GET['val']}' WHERE uid=$uid");
        echo $row;
    }

    function exitLogin()
    {
        session_start();
        unset($_SESSION['login']);
        if (!isset($_SESSION['login'])) {
            echo 'ok';
        }

    }
}