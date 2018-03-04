<?php
/* Smarty version 3.1.30, created on 2018-03-02 03:10:37
  from "H:\wamp\wamp64\www\flowerApp\app\view\index\p-info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98c0ad1abec9_73881971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b563eb026441769f4e7bab7b8907243bc0bb8529' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\index\\p-info.html',
      1 => 1519960234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a98c0ad1abec9_73881971 (Smarty_Internal_Template $_smarty_tpl) {
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
index/p-info.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
jquery.js"><?php echo '</script'; ?>
>
    <title>个人资料</title>
</head>
<body>
<header>
    <a class="back" href="/flowerApp/index.php/set">
        <i class="iconfont icon-54"></i>
    </a>
    <h3>个人资料</h3>
    <a href="" class="back"></a>
</header>
<div class="con">
    <ul>
        <li class="uimg">
            <a href="javascript:void (0);">
                <h4><i class="iconfont icon-geren2"></i>&nbsp;头像</h4>
            </a>
            <div class="imgBox"><img src="<?php echo $_smarty_tpl->tpl_vars['udata']->value['upicture'];?>
" alt="" class="img-circle"></div>
        </li>
        <li>
            <a href="javascript:void (0);">
                <h4><i class="iconfont icon-iconfontgerenzhongxin"></i>&nbsp;昵称</h4>
            </a>
            <input type="text" name="unickname" value="<?php echo $_smarty_tpl->tpl_vars['udata']->value['unickname'];?>
" class="input-info" title="用户昵称">
        </li>
        <li>
            <a href="javascript:void (0);">
                <h4><i class="iconfont icon-icon2"></i>&nbsp;生日</h4>
            </a>
            <input type="text" title="生日" value="<?php echo $_smarty_tpl->tpl_vars['udata']->value['ubirthday'];?>
" name="ubirthday">
        </li>
        <li>
            <a href="javascript:void (0);">
                <h4><i class="iconfont icon-xiaoxi"></i>&nbsp;性别</h4>
            </a>
            <select name="usex" id="" title="sex">
                <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

            </select>
        </li>
        <li>
            <a href="javascript:void (0);">
                <h4><i class="iconfont icon-xin"></i>&nbsp;手机号</h4>
            </a>
            <input type="tel" title="phone" name="utel" value="<?php echo $_smarty_tpl->tpl_vars['udata']->value['utel'];?>
">
        </li>
    </ul>
</div>
<div class="mask">
    <ul>
        <li><label for="camera">拍照上传</label><input id="camera" type="file" accept="image/*;capture=camera"></li>
        <li><label for="localimg">选择本地相册</label><input id="localimg" type="file" accept="image/*" /></li>
    </ul>
    <div class="close">
        <i class="iconfont icon-icon-arrow-left2"></i>
    </div>
</div>
<div class="exit">
    完成编辑
</div>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_INDEX_PATH;?>
p-info.js"><?php echo '</script'; ?>
><?php }
}
