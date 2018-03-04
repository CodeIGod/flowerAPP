<?php
class order_detail extends index_smarty{
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $this->smarty->display('view/index/order_detail.html');
    }
}