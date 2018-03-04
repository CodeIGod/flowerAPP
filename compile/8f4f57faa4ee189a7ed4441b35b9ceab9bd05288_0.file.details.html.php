<?php
/* Smarty version 3.1.30, created on 2018-03-04 14:39:01
  from "H:\wamp\wamp64\www\flowerApp\app\view\index\details.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9c0505cee577_47790579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f4f57faa4ee189a7ed4441b35b9ceab9bd05288' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\index\\details.html',
      1 => 1520174222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9c0505cee577_47790579 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>详情页</title>

    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/details.css">
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
details.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="top">
    <img src="<?php echo IMG_PATH;?>
lqimg/huana__20.png" alt="">
    <a class="left" href="javascript:history.back()" style="z-index: 999"><i class="iconfont icon-54"></i></a>
    <a class="right" href="javascript:history.back()"><i class="iconfont icon-wodefenxiang"></i></a>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <span class="span1"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</span>
    <span class="span2">TO THE MOST BEAUTIFUL YOU</span>
</div>

<div class="boss">
    <div class="box1"></div>
    <div class="box">
        <div class="imgbox">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['gslide'];
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('foo', explode(',',$_prefixVariable1));
?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['foo']->value[0];?>
" alt="">

        </div>
    </div>
    <div class="p">
        <div class="p1">
            PINK ROSE
        </div>
        <div class="p2">
            RMB <?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
.00
        </div>
    </div>
    <div class="p">
        <div class="p1">
            规格
        </div>
        <div class="p2">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['gspec'];
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('foo', explode(',',$_prefixVariable2));
?>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['foo']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['foo']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <div class="p2_1"><?php echo $_smarty_tpl->tpl_vars['foo']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</div>
            <?php }
}
?>

        </div>
    </div>

    <div class="p">
        <div class="p1">
            数量
        </div>
        <div class="p2">

            <div class="p2_3">-</div>
            <div class="p2_2">1</div>
            <div class="p2_3 p2_4">+</div>
        </div>
    </div>
    <a href="" class="buy">
        <span class="span1">立即购买</span>
        <div class="span2">PURCHASE IMMEDIATELY</div>
    </a>
    <div class="title">
        <hr>
        <div class="title_con">
            <div class="p1">HOT ARTLCLES</div>
            <div class="p2">Product details</div>
            <div class="p3">产 品 详 情</div>
        </div>
    </div>
    <div class="xq">
        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gimg'];?>
" alt="">
    </div>
    <div class="listnav">
        <?php $_smarty_tpl->_assignInScope('foo', explode(',',$_smarty_tpl->tpl_vars['v']->value['gpicture']));
?>
        <?php $_smarty_tpl->_assignInScope('foo2', explode('^',$_smarty_tpl->tpl_vars['v']->value['gdesc']));
?>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['foo']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['foo']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['foo2']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['foo2']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <div class="list">
            <div class="left">

                <img src="<?php echo $_smarty_tpl->tpl_vars['foo']->value[$_smarty_tpl->tpl_vars['i']->value];?>
" alt="">

            </div>
            <?php echo $_smarty_tpl->tpl_vars['foo2']->value[$_smarty_tpl->tpl_vars['i']->value];?>

        </div>
        <?php }
}
?>

        <?php }
}
?>

    </div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<div class="footer">
    <a href=""><i class="iconfont icon-kefu"></i></a>
    <a href="#" class="active"><i class="iconfont icon-xiaoxi1"></i></a>
    <a href=""><i class="iconfont icon-shiwujiaoxing"></i></a>
    <a href="#" class="shops"><img src="<?php echo IMG_PATH;?>
lqimg/huana_40.png" alt=""></a>
</div>
<div class="mask">
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['comments']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['comments']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <div class="list">
        <div class="head">
            <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['i']->value]['upicture'];?>
" alt="">
        </div>
        <span class="span1"><?php echo $_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['i']->value]['unickname'];?>
</span>
        <span class="span2"><?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->tpl_vars['i']->value]['mdate'];?>
</span>
        <div class="i">
            <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->tpl_vars['i']->value]['msatisfaction']+1 - (1) : 1-($_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->tpl_vars['i']->value]['msatisfaction'])+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 1, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?>
            <i class="iconfont icon-shiwujiaoxing star"></i>
            <?php }
}
?>

            <?php
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['k']->step = 1;$_smarty_tpl->tpl_vars['k']->total = (int) ceil(($_smarty_tpl->tpl_vars['k']->step > 0 ? 5-$_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->tpl_vars['i']->value]['msatisfaction']+1 - (1) : 1-(5-$_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->tpl_vars['i']->value]['msatisfaction'])+1)/abs($_smarty_tpl->tpl_vars['k']->step));
if ($_smarty_tpl->tpl_vars['k']->total > 0) {
for ($_smarty_tpl->tpl_vars['k']->value = 1, $_smarty_tpl->tpl_vars['k']->iteration = 1;$_smarty_tpl->tpl_vars['k']->iteration <= $_smarty_tpl->tpl_vars['k']->total;$_smarty_tpl->tpl_vars['k']->value += $_smarty_tpl->tpl_vars['k']->step, $_smarty_tpl->tpl_vars['k']->iteration++) {
$_smarty_tpl->tpl_vars['k']->first = $_smarty_tpl->tpl_vars['k']->iteration == 1;$_smarty_tpl->tpl_vars['k']->last = $_smarty_tpl->tpl_vars['k']->iteration == $_smarty_tpl->tpl_vars['k']->total;?>
            <i class="iconfont icon-shiwujiaoxing"></i>
            <?php }
}
?>

        </div>
        <br>
        <span class="span3"><?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->tpl_vars['i']->value]['mcontent'];?>
</span>
    </div>
    <?php }
}
?>


    <div class="error">×</div>
    <div class="evaluate">我也要评论</div>
</div>
<div class="shop">
    <img src="<?php echo IMG_PATH;?>
lqimg/hua_03.png" alt="">
    <div class="error">×</div>
</div>
<form class="eval">
    <a class="left" href="#"><i class="iconfont icon-54"></i></a>
    <a class="right" href="#"><i class="iconfont icon-wodefenxiang"></i></a>
    <div class="span">评论发表</div>
    <div class="text">
        <textarea name="mcontent" id="" maxlength="200" title=""></textarea>
        <div class="file">
            <div class="files">
                <span>+</span>
            </div>
            <input type="file" style="opacity: 0;">
            <input type="hidden" name="mpicture" class="mpicture">
            <p>UPLOAD PLCTUR</p>
        </div>
        <div class="msatisfaction">
            <input type="hidden" id="msatisfaction" name="msatisfaction" title="" value="0">
            <i class="iconfont icon-shiwujiaoxing"></i>
            <i class="iconfont icon-shiwujiaoxing"></i>
            <i class="iconfont icon-shiwujiaoxing"></i>
            <i class="iconfont icon-shiwujiaoxing"></i>
            <i class="iconfont icon-shiwujiaoxing"></i>
        </div>
        <input type="hidden" name="gid" value="<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
">
        <div class="num">
            <span class="num1">0</span>
            <span class="num2">/</span>
            <span class="num3">200</span>
        </div>
    </div>
    <input type="submit">
</form>
</body>
</html><?php }
}
