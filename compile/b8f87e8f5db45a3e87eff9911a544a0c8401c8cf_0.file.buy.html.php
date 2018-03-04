<?php
/* Smarty version 3.1.30, created on 2018-02-28 03:34:03
  from "D:\wamp\www\flowerAPP\app\view\index\buy.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a96232be92bc5_28922150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8f87e8f5db45a3e87eff9911a544a0c8401c8cf' => 
    array (
      0 => 'D:\\wamp\\www\\flowerAPP\\app\\view\\index\\buy.html',
      1 => 1519788633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a96232be92bc5_28922150 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width,inifial-scale:1.0;maximum-scale=1.0,user-scalable=0">

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
    <a href="javascript:history.back()" class="but"><i class="iconfont icon-address"></i></a>
    <h1 class="header_title">购物车(<span class="totalNumber g_num">3</span>)</h1>
    <a href="" class="but"><i class="iconfont icon-sousuo"></i></a>
</header>
<section>
    <ul class="item">
        <li class="goods" data-gid="">
            <div class="choose"></div>
            <a href=""><img src="<?php echo IMG_PATH;?>
payImg/pay_1.png" alt=""></a>
            <div class="con">
                <h1 class="name">婚礼手捧花</h1>
                <h3 class="ename">WEDDING FLOWER</h3>
                <p class="color">颜色：<span>白粉</span></p>
                <p class="type">规格：<span>12<span>支装</span></span></p>
                <p class="price">价格：<strong class="jiage">299</strong></p>
            </div>
            <div class="num">
                <div class="number">
                    <div class="input-sub">
                        <i class="iconfont icon-icon-arrow-left2"></i>
                    </div>
                    <div class="input-num">
                        <input type="text" value="1">
                    </div>
                    <div class="input-add">
                        <i class="iconfont icon-icon-arrow-right2"></i>
                    </div>
                </div>
                <div class="del">&nbsp;删&nbsp;&nbsp;除</div>
            </div>
            <i class="iconfont icon-dui show"></i>
        </li>
        <li class="goods">
            <div class="choose"></div>
            <a href=""><img src="<?php echo IMG_PATH;?>
payImg/pay_2.png" alt=""></a>
            <div class="con">
                <h1 class="name">婚礼手捧花</h1>
                <h3 class="ename">WEDDING FLOWER</h3>
                <p class="color">颜色：<span>白粉</span></p>
                <p class="type">规格：<span>12<span>支装</span></span></p>
                <p class="price">价格：<strong class="jiage">299</strong></p>
            </div>
            <div class="num">
                <div class="number">
                    <div class="input-sub">
                        <i class="iconfont icon-icon-arrow-left2"></i>
                    </div>
                    <div class="input-num">
                        <input type="text" value="1">
                    </div>
                    <div class="input-add">
                        <i class="iconfont icon-icon-arrow-right2"></i>
                    </div>
                </div>
                <div class="del">&nbsp;删&nbsp;&nbsp;除</div>
            </div>
            <i class="iconfont icon-dui show"></i>
        </li>
        <li class="goods">
            <div class="choose"></div>
            <a href=""><img src="<?php echo IMG_PATH;?>
payImg/pay_1.png" alt=""></a>
            <div class="con">
                <h1 class="name">婚礼手捧花</h1>
                <h3 class="ename">WEDDING FLOWER</h3>
                <p class="color">颜色：<span>白粉</span></p>
                <p class="type">规格：<span>12<span>支装</span></span></p>
                <p class="price">价格：<strong class="jiage">299</strong></p>
            </div>
            <div class="num">
                <div class="number">
                    <div class="input-sub">
                        <i class="iconfont icon-icon-arrow-left2"></i>
                    </div>
                    <div class="input-num">
                        <input type="text" value="1">
                    </div>
                    <div class="input-add">
                        <i class="iconfont icon-icon-arrow-right2"></i>
                    </div>
                </div>
                <div class="del">&nbsp;删&nbsp;&nbsp;除</div>
            </div>
            <i class="iconfont icon-dui show"></i>
        </li>
    </ul>
</section>


<footer>
    <div class="footer_one">
        <div class="one_num">
            <span>共<span><strong class="totalNumber">1</strong>件，合计：<strong class="totalPrice">299</strong>元</span></span>
        </div>
        <div class="one_pay">
            <a href="/flowerApp/index.php/pay">去结算</a>
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
