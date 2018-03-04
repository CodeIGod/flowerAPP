<?php

class details extends index_smarty
{
    public $gid;
    function __construct()
    {
        parent::__construct();
        $this->db = new mysql('goods');
        $this->mysql = new mysql('comments');
        $this->users=new mysql('index_user');
        session_start();
        $this->gid;
    }
    function index()
    {
        $gid = $_GET['gid'];
        $data = $this->db->where("gid=$gid")->select('*');
        $comments = $this->mysql->where("gid=$gid")->select("*");
        $uid=[];
        foreach ($comments as $v) {
            $users=$this->users->where("uid={$v['uid']}")->select("*")[0];
            array_push($uid,$users);
        }
        $this->smarty->assign('data', $data);
        $this->smarty->assign('gid', $gid);
        $this->smarty->assign('user', $uid);
        $this->smarty->assign('comments', $comments);
        $this->smarty->display('view/index/details.html');
    }

    //////////////添加评论///////////////////
    function addComments()
    {
        $uid = $_SESSION['uid'];
        if (isset($_POST['mpicture']) && $_POST['mpicture'] != '') {
            $this->mysql->insert("insert into comments (uid,gid,mcontent,msatisfaction,mpicture ) VALUES ({$uid},{$_POST['gid']},'{$_POST['mcontent']}','{$_POST['msatisfaction']}','{$_POST['mpicture']}')");
        }
        $row=$this->mysql->insert("insert into comments (uid,gid,mcontent,msatisfaction,mpicture ) VALUES ({$uid},{$_POST['gid']},'{$_POST['mcontent']}','{$_POST['msatisfaction']}','')");
        echo $row;


    }
}