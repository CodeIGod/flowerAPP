<?php

class address extends index_smarty
{
    public $uid;

    function __construct()
    {
        parent::__construct();
        $this->adr = new mysql('adress');
        session_start();
        $this->uid = $_SESSION['uid'];
    }

    function index()
    {
        $data = $this->adr->where("uid=$this->uid and ad_status='0'")->select("*");
        $default = $this->adr->where("uid=$this->uid and ad_status='1'")->select("*")[0];
        $this->smarty->assign('data', $data);
        $this->smarty->assign('default', $default);
        $this->smarty->display('view/index/address.html');
    }

    function select()
    {
        $ad_id=$_POST['ad_id'];
        $row=$this->adr->update("update adress set ad_status='0' WHERE uid=$this->uid");
        if ($row==1){
            $rows=$this->adr->update("update adress set ad_status='1' WHERE uid=$this->uid and ad_id=$ad_id");
            if ($rows==1){
                echo 'ok';
            }
        }


    }
}