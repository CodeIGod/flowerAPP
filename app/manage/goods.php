<?php
class goods extends m_smarty {
    function __construct()
    {
        parent::__construct();
        $this->mysql=new mysql('goods');
    }
    ///////////展示商品添加页面//////////////////
    function view(){
        $classif=new mysql('classif');
        $cData=$classif->select("*");
        $this->smarty->assign('classif',$cData);
        $this->smarty->display('view/management/goods.html');
    }

    ////////////功能区//////////////////
    function add(){
        $row=$this->mysql->insert($_POST);
        if ($row==1){
            echo "success";
        }else if($row<=0){
            echo "error";
        }

    }
    function show(){
        $goods=$this->mysql->select("*");
        $this->smarty->assign('goods',$goods);
        $obj = new page('goods','goods_show.html','show');
    }
    function delete(){
        $row=$this->mysql->delete("gid={$_POST['gid']}");
        if($row==1){
            echo 'success';
            exit();
        }else if($row<=0){
            echo 'error';
            exit();
        }
    }
    function update(){
        $row=$this->mysql->update("update goods set {$_POST['type']}='{$_POST['val']}' WHERE gid='{$_POST['gid']}'");
        if ($row==1){
            echo 'success';
            exit();
        }else if($row<=0){
            echo 'fail';
        }
    }

}