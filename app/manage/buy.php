<?php

class buy extends index_smarty
{
    function __construct()
    {
        parent::__construct();
        $this->db = new mysql('shop');
    }

    function index()
    {
        if ($this->checkLogin()) {
            $uid = $_SESSION['uid'];
            $sql = "select goods.*,shop.nums,shop.spec from goods,shop WHERE goods.gid=shop.gid AND uid=$uid";
            $data = $this->db->select($sql);
            $this->smarty->assign('data', $data);
            $this->smarty->display('view/index/buy.html');
        } else {
            $this->smarty->display('view/index/Signin.html');
        }
    }

    function add()
    {
        $gid = $_GET['gid'];
        session_start();
        $uid = $_SESSION['uid'];
        $data = $this->db->where("gid=$gid and uid=$uid")->select('*')[0];
        $spec = $_GET['spec'];
        $nums = $_GET['nums'];
        if ($data['spec'] != $spec) {
            $sql = "insert into shop (gid,nums,spec,uid) VALUES ('{$gid}','{$nums}','{$spec}','{$uid}')";
            $row = $this->db->insert($sql);
            echo $row;
            exit();
        } else if ($data['spec'] == $spec) {
            $nums .= $data['nums'];
            $sql = "update shop set nums=$nums WHERE gid=$gid AND uid=$uid";
            $row = $this->db->update($sql);
            echo $row;
        }


    }

    function delete()
    {
        $gid = $_GET['gid'];
        session_start();
        $uid = $_SESSION['uid'];
        $row = $this->db->delete("gid=$gid and uid=$uid");
        echo $row;
    }

    function number()
    {
        $nums = $_GET['nums'];
        $gid = $_GET['gid'];
        session_start();
        $uid = $_SESSION['uid'];
        $sql = "update shop set nums=$nums WHERE gid=$gid AND uid=$uid";
        $row = $this->db->update($sql);
        echo $row;
    }
}