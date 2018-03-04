<?php
/* Smarty version 3.1.30, created on 2018-02-28 03:40:01
  from "D:\wamp\www\flowerAPP\app\view\index\pay.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a962491a0eea7_88935614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '600b09a0e05c3b0ce26d0a3dea1f5b83380e01a6' => 
    array (
      0 => 'D:\\wamp\\www\\flowerAPP\\app\\view\\index\\pay.html',
      1 => 1519789200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a962491a0eea7_88935614 (Smarty_Internal_Template $_smarty_tpl) {
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
index/pay.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_INDEX_PATH;?>
pay.js"><?php echo '</script'; ?>
>
</head>
<body class="bg-blur">
<header>
    <a href="javascript:history.back()" class="but"><i class="iconfont icon-54"></i></a>
    <h1 class="header_title">用户结算</h1>

</header>
<section>
    <div class="address">
        <div class="adr_one">
            <span class="name">张三</span>
            <span class="tel">123456789</span>
        </div>
        <div class="adr_two">
            <p>太原市小店区平阳路学府街口</p>
        </div>
        <a href="" class="you"><i class="iconfont icon-icon-arrow-right2"></i></a>
    </div>
    <div class="pay">
        <ul class="isCheck">
            <li class="unchecked ">
                <div class="weixin">
                    <span>微信支付</span>
                    <span>推荐使用 更安全使便捷</span>
                </div>
                <i class="iconfont icon-dui show"></i>
            </li>
            <li class="unchecked ">
                <div class="zhifubao">
                    <span>支付宝</span>
                    <span>支付订单，赢1999元红包</span>
                </div>
                <i class="iconfont icon-dui "></i>
            </li>
            <li class="unchecked">
                <div class="yinlian">
                    <span>银联在线支付</span>
                    <span></span>
                </div>
                <i class="iconfont icon-dui "></i>
            </li>
        </ul>
    </div>
    <div class="goods">
        <ul>
            <li class="choose">
                <div class="box">
                    <img src="<?php echo IMG_PATH;?>
payImg/pay_1.png" alt="">
                </div>
                <div class="title">
                    <p>婚礼手捧花 白粉 <span>12</span>支装</p>
                </div>
                <div class="price">
                    <div class="num">数量：<span class="goods_num">1</span></div>
                    <div class="pri">价格：<span class="goods_price">299</span>元</div>

                </div>
            </li>
            <li class="choose">
                <div class="box">
                    <img src="<?php echo IMG_PATH;?>
payImg/pay_2.png" alt="">
                </div>
                <div class="title">
                    <p>婚礼手捧花 白粉 12支装</p>
                </div>
                <div class="price">
                    <div class="num">数量：<span class="goods_num">1</span></div>
                    <div class="pri">价格：<span class="goods_price">299</span>元</div>
                </div>
            </li>
        </ul>
    </div>

</section>


<footer>
    <div class="tips">
        <p>配送至：山西省太原市</p>
    </div>
    <div class="payment">
        <div class="p-price">
            <span class="pp">共<span class="totalNumber">2</span>件 合计：</span>
            <strong class="totalPrice">799</strong><strong>元</strong>
        </div>

        <div class="p-pay">

            <a href="/flowerApp/index.php/order" class="buy">去付款</a>
        </div>
    </div>

</footer>
</body>
</html><?php }
}
