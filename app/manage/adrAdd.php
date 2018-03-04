<?php
class adrAdd extends index_smarty{
    function __construct()
    {
        parent::__construct();
        $this->mysql=new mysql('adress');

    }
    function index(){
        $this->smarty->display('view/index/adrAdd.html');
    }
    function add(){
        session_start();
        $uid=$_SESSION['uid'];
        if ($_POST['ad_status']=='1'){
            $this->adr->update("update adress set ad_status='0' WHERE uid=$this->uid");
        }
        $row=$this->mysql->insert("insert into adress (uid,ad_name,ad_tel,ad_city,ad_adress,ad_status) VALUES ({$uid},'{$_POST['ad_name']}','{$_POST['ad_tel']}','{$_POST['ad_city']}','{$_POST['ad_adress']}','{$_POST['ad_status']}')");
        if ($row==1){
            echo 'ok';
        }else if ($row<=0){
            echo 'error';
        }
    }
}
