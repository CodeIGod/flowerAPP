<?php

class classif extends m_smarty
{
    function __construct()
    {
        parent::__construct();
        $this->mysql = new mysql('classif');
    }

    function add()
    {
        $row = $this->mysql->insert($_POST);
        if ($row > 0) {
            echo 'ok';
        } else if ($row < 0) {
            echo 'error';
        }
    }

    function delete()
    {
        $row=$this->mysql->delete($_POST['cid']);
        if ($row==1){
            echo 'ok';
            exit();
        }else if($row<=0){
            echo 'error';
        }
    }

    /////////////
    function View()
    {
        $data=$this->mysql->select("*");
        $this->smarty->assign('data',$data);
        $obj = new page('classif','classif_show.html','view');
    }

    function update()
    {
        $row=$this->mysql->update("update classif set {$_POST['type']}='{$_POST['val']}' WHERE cid='{$_POST['cid']}'");
        if ($row==1){
            echo 'success';
            exit();
        }else if($row<=0){
            echo 'fail';
        }
    }
}