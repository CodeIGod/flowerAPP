<?php
/* Smarty version 3.1.30, created on 2018-02-28 03:51:00
  from "D:\wamp\www\flowerAPP\app\view\index\personal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9627249e14b2_75810076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '182fb33377f40ee6427b4be3aad4210466982edb' => 
    array (
      0 => 'D:\\wamp\\www\\flowerAPP\\app\\view\\index\\personal.html',
      1 => 1519789633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9627249e14b2_75810076 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../../static/js/public/rem.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PUB;?>
base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/personal.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/header_fo.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
jquery.js"><?php echo '</script'; ?>
>
    <title>个人</title>
</head>
<body>
    <div class="top">
        <div class="Smallfunction">
            <div class="setup">
                <i class="iconfont icon-shezhi" ></i>

            </div>
            <div class="remind">
                <i class="iconfont icon-xiaoxi"></i>
            </div>
        </div>
        <div class="touxiang">
        <a href="/flowerApp/index.php/Signin">
            <div class="circular">
                <img src="<?php echo IMG_PATH;?>
wsimg/55b9130c120d66ecf352b7c65de7fc99.jpg" alt="">
            </div>
            </a>
        </div>
        <span class="shuer">shuer  gou</span>
        <p class="classmate">Classmates who kept on sending small sheet for<br>
            the end of the semester</p>
    </div>
    <div class="function">
        <div class="Collection">
            <div class="redpoint">
                <div class="smallpoint"></div>
            </div>
            <i class="iconfont icon-wujiaoxingkong" ></i>
            <span>收藏夹</span>

        </div>
        <div class="shop">
            <div class="redpoint">
                <div class="smallpoint"></div>
            </div>
            <i class="iconfont icon-dianpu" ></i>
            <span>店 &nbsp;铺</span>
        </div>
        <div class="browse">
            <div class="redpoint">
                <div class="smallpoint"></div>
            </div>
            <i class="iconfont icon-liulanjilu" ></i>
            <span>浏览记录</span>
        </div>

    </div>
    <div class="gun">
        <div class="smallbox">
            <div class="gunyuan"></div>
            <div class="yuanjiao"></div>
        </div>
    </div>
    <div class="dingdan">
        <ul>
            <li>
                <a href="/flowerApp/index.php/order">
                    <span>订单信息</span>
                    <i class="iconfont icon-gengduo" ></i>
                </a>
            </li>
            <li>
                <span>待发货</span>
                <i class="iconfont icon-gengduo" ></i>
            </li>
            <li>
                <span>待收货</span>
                <i class="iconfont icon-gengduo" ></i>
            </li>
            <li>
                <span>待评价</span>
                <i class="iconfont icon-gengduo" ></i>
            </li>
            <li>
                <span>已完成的订单</span>
                <i class="iconfont icon-gengduo" ></i>
            </li>
        </ul>
    </div>
    <footer>
        <a href="/flowerApp/index.php/index" ><i class="iconfont icon-shouye"></i></a>
        <a href="/flowerApp/index.php/lists/index"><i class="iconfont icon-daohang"></i></a>
        <a href="/flowerApp/index.php/buy"><i class="iconfont icon-gouwuche"></i></a>
        <a href="/flowerApp/index.php/person" class="but_frist"><i class="iconfont icon-iconfontgerenzhongxin"></i></a>
    </footer>
</body>
</html><?php }
}
