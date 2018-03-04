<?php
/* Smarty version 3.1.30, created on 2018-03-02 01:23:48
  from "H:\wamp\wamp64\www\flowerApp\app\view\index\personal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98a7a4afeff4_33869004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6f6b133016ec85d7602fe7e16ce218183c75811' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\index\\personal.html',
      1 => 1519953377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a98a7a4afeff4_33869004 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PUB;?>
bootstrap.min.css">
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
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
jquery.js"><?php echo '</script'; ?>
>
    <title>个人</title>
</head>
<body>
    <div class="top">
        <div class="Smallfunction">
            <a class="setup" href="/flowerApp/index.php/set/index">
                <i class="iconfont icon-shezhi" ></i>
            </a>
            <a class="remind">
                <i class="iconfont icon-xiaoxi"></i>
            </a>
        </div>
        <div class="touxiang">
        <a href="/flowerApp/index.php/set">
            <div class="circular">
                <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['upicture'];?>
" alt="" class="img-circle">
            </div>
            </a>
        </div>
        <span class="shuer"><?php echo $_smarty_tpl->tpl_vars['data']->value['unickname'];?>
</span>
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
                <a href="/flowerApp/index.php/order?uid=<?php echo $_smarty_tpl->tpl_vars['data']->value['uid'];?>
">
                    <span>订单信息</span>
                    <i class="iconfont icon-gengduo" ></i>
                </a>
            </li>
            <li>
                <a href="">
                    <span>待发货</span>
                    <i class="iconfont icon-gengduo" ></i>
                </a>
            </li>
            <li>
                <a href="">
                    <span>待收货</span>
                    <i class="iconfont icon-gengduo" ></i>
                </a>
            </li>
            <li>
                <a href="">
                    <span>待评价</span>
                    <i class="iconfont icon-gengduo" ></i>
                </a>
            </li>
            <li>
                <a href="">
                    <span>已完成的订单</span>
                    <i class="iconfont icon-gengduo" ></i>
                </a>
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
