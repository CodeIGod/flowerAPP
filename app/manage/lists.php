<?php

class lists extends index_smarty {
    function __construct()
    {
        $this->db = new mysql('classif');
        parent::__construct();

    }
    function index(){
        $data = $this->db->select('*');
       $this->smarty->assign('data',$data);
        $this->smarty->display('view/index/list.html');
    }
}

