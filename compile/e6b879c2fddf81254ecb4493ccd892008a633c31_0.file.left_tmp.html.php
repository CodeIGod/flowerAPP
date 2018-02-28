<?php
/* Smarty version 3.1.30, created on 2018-02-27 08:45:23
  from "H:\wamp\wamp64\www\flowerApp\app\view\management\left_tmp.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a951aa3aec0f8_04666990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6b879c2fddf81254ecb4493ccd892008a633c31' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\management\\left_tmp.html',
      1 => 1519720024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a951aa3aec0f8_04666990 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>H~花伊、/后台管理系统，欢迎您！</title>
    <link rel="stylesheet" href="<?php echo CSS_PUB;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PUB;?>
manage_base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
manage_index.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {
            let btn = $('.m-left>h5');
            btn.on('click', function () {
                $(this).toggleClass('active').next('ul').slideToggle();
            });
            $('.m-left>ul>li>a').hover(function () {
                $(this).closest('li').toggleClass('active');
            });
        });
    <?php echo '</script'; ?>
>
</head>
<body>
<div class="m-left">
    <div class="hy-logo">
        <img src="<?php echo IMG_PATH;?>
" alt="" class="img-thumbnail">
    </div>
    <h5 class="">分类管理</h5>
    <ul>
        <li class=""><a href="/flowerApp/index.php/manage/view">添加</a></li>
        <li><a href="/flowerApp/index.php/classif/view">展示</a></li>
    </ul>
    <h5 class="">商品管理</h5>
    <ul>
        <li class=""><a href="/flowerApp/index.php/goods/view">添加</a></li>
        <li><a href="/flowerApp/index.php/goods/view">展示</a></li>
    </ul>
</div>
<div class="m-right">
    <div class="user-info">
        <div class="info-l">
            欢迎使用APP数据管理系统
        </div>
        <div class="info-r">
            <i class="iconfont"></i>
            <a href="">退出登陆</a>
        </div>
    </div>
<?php }
}
