<?php
/* Smarty version 3.1.30, created on 2018-03-04 07:28:41
  from "H:\wamp\wamp64\www\flowerApp\app\view\index\adrAdd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9ba029bce787_18133780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e910f04e077a63b291f9387debb60be67d78e80' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\index\\adrAdd.html',
      1 => 1520148510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9ba029bce787_18133780 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>编辑收货地址</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/adrAdd.css">
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
adrAdd.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="header">
    <a href="javascript:history.back()"><i class="iconfont icon-54"></i></a>
    <span>新建收货地址</span>
    <a></a>
</div>
<form action="">
<div class="header3">
    <h4>收货人:</h4><input type="text" name="ad_name" value="" placeholder=""><i class="iconfont icon-kefu"></i></div>

<div class="header4">
    <h4>手机号码：</h4><input type="text" name="ad_tel" value="">
</div>

<div class="header5">
    <h4>所在地区：</h4><textarea id="TextArea1" cols="25" rows="2" name="ad_city"></textarea>
</div>
<div class="header4">
    <h4>详细地址：</h4><input type="text" name="ad_adress" value="">
</div>
<div class="header6">
    <h4>设置为默认地址：</h4>
    <div id="div1" class="open1">
        <div id="div2" class="open2"></div>
    </div>
</div>
</form>
<div class="di">
    <a href="">确认</a>
</div>

</body>
</html>

<?php }
}
