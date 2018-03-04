<?php
/* Smarty version 3.1.30, created on 2018-03-04 10:40:13
  from "H:\wamp\wamp64\www\flowerApp\app\view\index\buy.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9bcd0da7bcc8_35038069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '006cb55bb0e2ae9131463704bbeeff589b6d9675' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\index\\buy.html',
      1 => 1520160012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9bcd0da7bcc8_35038069 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/buy.css">
    <link rel="stylesheet" href="<?php echo CSS_PUB;?>
swiper.min.css">

    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
swiper.min.js"><?php echo '</script'; ?>
>

</head>
<body>
<header>
    <a href="javascript:history.back()" class="but"><i class="iconfont icon-54"></i></a>
    <h1 class="header_title">购物车(<span class="totalNumber g_num">3</span>)</h1>
    <a href="" class="but"><i class="iconfont icon-sousuo"></i></a>
</header>
<section>
    <ul class="item">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li class="goods" data-gid="<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
">
            <div class="choose"></div>
            <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt=""></a>
            <div class="con">
                <h1 class="name"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</h1>
                <h3 class="ename"><i><?php echo $_smarty_tpl->tpl_vars['v']->value['genname'];?>
</i></h3>
                <p class="type">规格：<span><?php echo $_smarty_tpl->tpl_vars['v']->value['spec'];?>
<span class="unit">&nbsp;枝装</span></span></p>
                <p class="price">价格：<strong class="jiage"><?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</strong></p>
            </div>
            <div class="num">
                <div class="number">
                    <div class="input-sub">
                        <i class="iconfont icon-icon-arrow-left2"></i>
                    </div>
                    <div class="input-num">
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['nums'];?>
">
                    </div>
                    <div class="input-add">
                        <i class="iconfont icon-icon-arrow-right2"></i>
                    </div>
                </div>
                <div class="del">&nbsp;删&nbsp;&nbsp;除</div>
            </div>
            <i class="iconfont icon-dui"></i>
        </li>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
</section>


<footer>
    <div class="footer_one">
        <div class="one_num">
            <span>共<span><strong class="totalNumber">1</strong>件，合计：<strong class="totalPrice">299</strong>元</span></span>
        </div>
        <div class="one_pay">
            <a href="/flowerAPP/index.php/pay/index">去结算</a>
        </div>

    </div>
    <div class="footer_two">
        <a href="/flowerApp/index.php/index"><i class="iconfont icon-shouye"></i></a>
        <a href="/flowerApp/index.php/lists/index"><i class="iconfont icon-daohang"></i></a>
        <a href="/flowerApp/index.php/buy" class="but_frist"><i class="iconfont icon-gouwuche"></i></a>
        <a href="/flowerApp/index.php/person"><i class="iconfont icon-iconfontgerenzhongxin"></i></a>
    </div>

</footer>
    <?php echo '<script'; ?>
 src="<?php echo JS_INDEX_PATH;?>
buy.js"><?php echo '</script'; ?>
><?php }
}
