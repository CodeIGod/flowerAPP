<?php

class router
{
    static function index()
    {
        if (!isset($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO']=='/'){
            $model='manage';
            $fn='index';
        }else{
            $info=explode('/',substr($_SERVER['PATH_INFO'],1));
            $model=$info[0];
            $fn=isset($info[1])&&$info[1]?$info[1]:'index';
        }
        if (file_exists('app/manage/'.$model.'.php')){
            include 'app/manage/'.$model.'.php';
            if (class_exists($model)){
                $obj=new $model();
                if(method_exists($obj,$fn)){
                    $obj->$fn();
                }else{
                    $message=$fn.'不存在该方法';
                    include 'app/view/404.html';
                }
            }else{
                $message=$model.'类不存在';
                include "app/view/404.html";
            }
        }else{
            $message=$model.'文件不存在';
            include 'app/view/404.html';
        }
    }
}