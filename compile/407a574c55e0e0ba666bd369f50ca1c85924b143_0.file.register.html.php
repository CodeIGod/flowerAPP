<?php
/* Smarty version 3.1.30, created on 2018-02-28 04:02:03
  from "D:\wamp\www\flowerAPP\app\view\index\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9629bbc8d486_57150221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '407a574c55e0e0ba666bd369f50ca1c85924b143' => 
    array (
      0 => 'D:\\wamp\\www\\flowerAPP\\app\\view\\index\\register.html',
      1 => 1519790522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9629bbc8d486_57150221 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"><?php echo '</script'; ?>
>
</head>
<style>
    .error:last-child{
        color:red;
        position: absolute;
        bottom: -20px;
    }
</style>
</head>
<body>
<div class="logo"></div>
<div class="zhanwei"></div>
<form class="cmxform" id="commentForm" method="get" action="">
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
            <input type="text" class="form-control" id="phone" name="phone" placeholder="请填写您的手机号"  maxlength="11"  minlength="11">
        </div>
        <div class="yanzhengma">
            <div class="yanzheng">
                <input type="text" id="cyan" >
            </div>
            <button class="fasong">
                <h5>发送验证码</h5>
            </button>
        </div>

    </div>
    <a href="/flowerApp/index.php/Signin">
    <button class="liji">
        <h4>立即注册</h4>
        <h5>Begin to swim in the sea</h5>
    </button>
    </a>
</form>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_INDEX_PATH;?>
register.js"><?php echo '</script'; ?>
><?php }
}
