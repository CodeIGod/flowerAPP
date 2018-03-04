<?php
class list_show extends index_smarty {
    function __construct()
    {
        $this->db = new mysql('goods');
        parent::__construct();
    }
    function index(){
        $cid = $_GET['cid'];
        $data = $this->db->where("cid=$cid")->select('*');

        $this->smarty->assign('data',$data);
        $this->smarty->display('view/index/list_show.html');
    }
}