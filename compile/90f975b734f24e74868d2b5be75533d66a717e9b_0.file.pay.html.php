<?php
/* Smarty version 3.1.30, created on 2018-03-04 10:07:40
  from "H:\wamp\wamp64\www\flowerApp\app\view\index\pay.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9bc56ce6c490_31595942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90f975b734f24e74868d2b5be75533d66a717e9b' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\index\\pay.html',
      1 => 1520158057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9bc56ce6c490_31595942 (Smarty_Internal_Template $_smarty_tpl) {
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
<body>
<header>
    <a href="javascript:history.back()" class="but"><i class="iconfont icon-54"></i></a>
    <h1 class="header_title">用户结算</h1>
</header>
<section>
    <div class="address">
        <div class="zuo">
            <div class="adr_one">
                <span class="name"><?php echo $_smarty_tpl->tpl_vars['adr']->value['ad_name'];?>
</span>
                <span class="tel"><?php echo $_smarty_tpl->tpl_vars['adr']->value['ad_tel'];?>
</span>
            </div>
            <div class="adr_two">
                <p><?php echo $_smarty_tpl->tpl_vars['adr']->value['ad_city'];
echo $_smarty_tpl->tpl_vars['adr']->value['ad_adress'];?>
</p>
            </div>
        </div>

        <a href="/flowerAPP/index.php/address/index" class="you"><i class="iconfont icon-icon-arrow-right2"></i></a>
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
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['goodsData']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['goodsData']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li class="choose">
                <div class="box">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['goodsData']->value[$_smarty_tpl->tpl_vars['i']->value]['gthumb'];?>
" alt="">
                </div>
                <div class="title">
                    <p><?php echo $_smarty_tpl->tpl_vars['goodsData']->value[$_smarty_tpl->tpl_vars['i']->value]['gname'];?>
 <span><?php echo $_smarty_tpl->tpl_vars['spec']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</span>支装</p>
                </div>
                <div class="price">
                    <div class="num">数量：<span class="goods_num"><?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</span></div>
                    <div class="pri">价格：<span class="goods_price"><?php echo $_smarty_tpl->tpl_vars['goodsData']->value[$_smarty_tpl->tpl_vars['i']->value]['gprice'];?>
</span>元</div>

                </div>
            </li>
            <?php }
}
?>

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
            <a href="" class="buy">去付款</a>
        </div>
    </div>

</footer>
</body>
</html><?php }
}
