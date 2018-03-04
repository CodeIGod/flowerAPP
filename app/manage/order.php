<?php
class order extends index_smarty {
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $this->smarty->display('view/index/order.html');
    }
}