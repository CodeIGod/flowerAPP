<?php
class activity extends m_smarty{
    function __construct()
    {
        parent::__construct();
        $this->mysql=new mysql('activity');
    }
    function view(){
        $good=new mysql('goods');
        $data=$good->select("*");
        $this->smarty->assign("goods",$data);
        $this->smarty->display('view/management/activity.html');
    }
    function add(){
        $row=$this->mysql->insert($_POST);
        if($row==1){
            echo 'success';
        }else if($row<=0){
            echo 'error';
        }
    }
    function show(){
        $act=$this->mysql->select("*");
        $this->smarty->assign('tos',$act);
        $obj = new page('activity','activity_show.html','show');
    }
    function delete(){
        $row=$this->mysql->delete("aid={$_POST['aid']}");
        if ($row==1){
            echo 'success';
        }else if ($row<=0){
            echo 'error';
        }
    }

    function update(){
        $row=$this->mysql->update("update activity set {$_POST['type']}='{$_POST['val']}' WHERE aid={$_POST['aid']}");
        if($row==1){
            echo 'success';
        }else if ($row<=0){
            echo 'error';
        }
    }
}