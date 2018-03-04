<?php

class register extends index_smarty
{
    function __construct()
    {
        parent::__construct();
        $this->mysql = new mysql('index_user');
    }

    function index()
    {
        $this->smarty->display('view/index/register.html');
    }

    function reg()
    {
            if (preg_match('/^1[34578]\d{9}$/', $_POST['tel'])) {
                $psd = md5($_POST['cpassword']);
                $row = $this->mysql->insert("insert into index_user (username,password,utel) VALUES ('{$_POST['cname']}','{$psd}','{$_POST['tel']}')");
                if ($row == 1) {
                    session_start();
                    $_SESSION['login']='yes';
                    $_SESSION['uid'] = $this->mysql->mysql->insert_id;
                    echo 'ok';
                    exit();
                }else if ($row<=0){
                    echo 'error';
                }
            } else {
                echo 'telerror';
            }
    }
}