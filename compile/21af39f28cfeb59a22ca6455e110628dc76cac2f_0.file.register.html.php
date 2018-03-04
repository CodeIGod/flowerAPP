<?php
/* Smarty version 3.1.30, created on 2018-03-01 15:54:54
  from "H:\wamp\wamp64\www\flowerApp\app\view\index\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98224e47f972_06286344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21af39f28cfeb59a22ca6455e110628dc76cac2f' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\index\\register.html',
      1 => 1519919690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a98224e47f972_06286344 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/register.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"><?php echo '</script'; ?>
>
<style>
    .error:last-child{
        color:red;
        position: absolute;
        bottom: -20px;
        left: .6rem;
        font-size: .22rem;
    }
</style>
</head>
<body>
<div class="logo"></div>
<div class="zhanwei"></div>
<form class="cmxform" id="commentForm">
    <div class="signin">
        <div class="user">
            <div class="waiyuan">
                <i class="iconfont icon-geren2" ></i>
            </div>
            <input type="text" class="form-control" id="cname" name="cname" placeholder="请输入您的账号或者用户名">
        </div>
        <div class="pass">
            <div class="waiyuan">
                <i class="iconfont icon-icon2" ></i>
            </div>
            <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="请输入您的密码">
        </div>
        <div class="pass">
            <div class="waiyuan">
                <i class="iconfont icon-icon2" ></i>
            </div>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="请再次输入您的密码">
        </div>
        <div class="pass">
            <div class="waiyuan">
                <i class="iconfont icon-icon2" ></i>
            </div>
            <input type="tel" class="form-control" id="phone" name="tel" placeholder="请填写您的手机号"  maxlength="11"  minlength="11" pattern="">
        </div>
        <div class="yanzhengma">
            <div class="yanzheng">
                <input type="text" id="cyan" >
            </div>
            <div class="fasong">
                <h5>发送验证码</h5>
            </div>
        </div>
    </div>
    <div>
    <button class="liji">
        <h4>立即注册</h4>
        <h5>Begin to swim in the sea</h5>
    </button>
    </div>
</form>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_INDEX_PATH;?>
register.js"><?php echo '</script'; ?>
><?php }
}
