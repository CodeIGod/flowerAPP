<?php
/* Smarty version 3.1.30, created on 2018-03-04 10:12:42
  from "H:\wamp\wamp64\www\flowerApp\app\view\index\set.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9bc69a3cb537_12321600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '254fcd823dd46de78f39c3325a11431e7ebb19db' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\index\\set.html',
      1 => 1520158360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9bc69a3cb537_12321600 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PUB;?>
base.css">
    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/set.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
jquery.js"><?php echo '</script'; ?>
>
    <title>设置</title>
</head>
<body>
<header>
    <a class="back" href="/flowerApp/index.php/person">
        <i class="iconfont icon-54" ></i>
    </a>
    <h3>设置</h3>
</header>
<div class="con">
    <ul>
        <li>
            <a href="/flowerApp/index.php/set/info?">
                <h4><i class="iconfont icon-iconfontgerenzhongxin"></i>&nbsp;个人资料</h4>
                <i class="iconfont icon-icon-arrow-right2"></i>
            </a>
        </li>
        <li>
            <a href="/flowerApp/index.php/address/index">
                <h4><i class="iconfont icon-address"></i>&nbsp;收货地址</h4>
                <i class="iconfont icon-icon-arrow-right2"></i>
            </a>
        </li>
        <li>
            <a href="">
                <h4><i class="iconfont icon-icon2"></i>&nbsp;修改密码</h4>
                <i class="iconfont icon-icon-arrow-right2"></i>
            </a>
        </li>
        <li>
            <a href="">
                <h4><i class="iconfont icon-xiaoxi"></i>&nbsp;消息推送</h4>
                <i class="iconfont icon-icon-arrow-right2"></i>
            </a>
        </li>
        <li>
            <a href="">
                <h4><i class="iconfont icon-xin"></i>&nbsp;关于花伊</h4>
                <i class="iconfont icon-icon-arrow-right2"></i>
            </a>
        </li>
    </ul>
</div>
<div class="exit">
    退出登陆
</div>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_INDEX_PATH;?>
set.js"><?php echo '</script'; ?>
><?php }
}
