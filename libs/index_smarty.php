<?php

class index_smarty
{
    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir('app');
        $this->smarty->setCompileDir('compile');
    }
    function checkLogin(){
        session_start();
        if(!$_SESSION['login']){
            return false;
        }
        return true;
    }

}