<?php
/* Smarty version 3.1.30, created on 2018-03-01 01:40:47
  from "H:\wamp\wamp64\www\flowerApp\app\view\index\order.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a975a1fa64246_86441415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5fb9d7e8313d3548abe05ed2f0fc370c9723278' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\index\\order.html',
      1 => 1519789506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/index/header.html' => 2,
  ),
),false)) {
function content_5a975a1fa64246_86441415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/order.css">
<?php $_smarty_tpl->_subTemplateRender("file:view/index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>



    <nav>
        <ul>
            <div class="nav_frist"></div>
            <li><a href="#"><span>全部</span></a></li>
            <li><a href="#"><span>待付款</span></a></li>
            <li><a href="#"><span>待收货</span></a></li>
            <li><a href="#"><span>待评价</span></a></li>
        </ul>
    </nav>
    <div class="con">
        <div class="con_goods">
            <p>2017-2-27 9:36</p>
            <div class="goods_info">
                <div class="left">
                    <img src="<?php echo IMG_INDEX_PATH;?>
goods_13.png" alt="">
                    <span>魅力的花花</span>
                </div>
                <span>￥558.00</span>
            </div>
            <div class="com">
                <div class="muliu">
                    查看物流
                </div>
                <div class="heji">
                    <p>共：<span>5</span>商品</p>
                    <p>合计：<span>599999</span>元</p>
                </div>
            </div>
        </div>
        <div class="con_goods">
            <p>2017-2-27 9:36</p>
            <div class="goods_info">
                <div class="left">
                    <img src="<?php echo IMG_INDEX_PATH;?>
goods_13.png" alt="">
                    <span>魅力的花花</span>
                </div>
                <span>￥558.00</span>
            </div>
            <div class="com">
                <div class="muliu">
                    查看物流
                </div>
                <div class="heji">
                    <p>共：<span>5</span>商品</p>
                    <p>合计：<span>599999</span>元</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_INDEX_PATH;?>
order.js"><?php echo '</script'; ?>
>
<?php }
}
