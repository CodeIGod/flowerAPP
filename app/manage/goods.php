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

    }
    function delete(){

    }
    function update(){

    }

}