<?php
/* Smarty version 3.1.30, created on 2018-03-01 10:22:41
  from "H:\wamp\wamp64\www\flowerApp\app\view\index\Signin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a97d4710ede83_70199411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9efe2503b377b83f575b1a2da39d0f30b04f5b7' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\index\\Signin.html',
      1 => 1519899760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a97d4710ede83_70199411 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/Signin.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
jquery.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"><?php echo '</script'; ?>
>-->
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
<form class="cmxform" id="commentForm" method="get" action="">
    <div class="signin">
        <div class="user">
            <div class="waiyuan">
                <i class="iconfont icon-geren2" ></i>
            </div>
            <input type="text"  id="username" name="username"  placeholder="请输入您的账号或者用户名"  required>
        </div>
        <div class="pass">
            <div class="waiyuan">
                <i class="iconfont icon-icon2" ></i>
            </div>
            <input type="password"  id="password" name="password" placeholder="请输入您的密码" required >
        </div>
    </div>
    <div class="forget">
        <div class="back">
            <h5>忘记密码</h5>
        </div>
        <div class="jizhu">
            <div class="baiyuan"></div>
        </div>
    </div>
    <button class="liji">
        <h4>立即登录</h4>
        <h5>Begin to swim in the sea</h5>
    </button>
</form>
<div class="xian"></div>
<a href="/flowerApp/index.php/register">
    <div class="zheli">
        <h4>没有账号点这里~</h4>
    </div>
</a>
<div class="fangshi">
    <ul>
        <li>
            <i class="iconfont icon-qq"></i>
        </li>
        <li>
            <i class="iconfont icon-weixin-copy"></i>
        </li>
        <li>
            <i class="iconfont icon-weibo"></i>
        </li>
    </ul>
</div>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_INDEX_PATH;?>
Signin.js"><?php echo '</script'; ?>
><?php }
}
