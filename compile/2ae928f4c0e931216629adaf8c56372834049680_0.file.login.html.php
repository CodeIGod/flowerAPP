<?php
/* Smarty version 3.1.30, created on 2018-02-28 01:30:52
  from "D:\wamp\www\flowerAPP\app\view\management\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a96064c3cd679_78765848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ae928f4c0e931216629adaf8c56372834049680' => 
    array (
      0 => 'D:\\wamp\\www\\flowerAPP\\app\\view\\management\\login.html',
      1 => 1519699064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a96064c3cd679_78765848 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>H~花伊、/后台登陆</title>
    <!--<link rel="stylesheet" href="<?php echo CSS_PUB;?>
base.css">-->
    <link rel="stylesheet" href="<?php echo CSS_PUB;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
manage_login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PUB;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
manage_login.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="login">
    <div class="loginTop">
        <div class="close">
        </div>
        <div class="cr">
            <label class="y" title="登陆">
                <span style="display: none;width: 30px;height: 50px;background: #f1c85f;color: #fff;border-radius: 30px;position: relative;top: 20px;">登陆</span>
            </label>
            <label class="p" title="注册"></label>
            <label class="b"></label>
        </div>
    </div>
    <div class="image">
        <img src="/flowerApp/static/image/avtar.png" alt="">
    </div>
    <div class="loginForm">
        <form>
            <div class="username">
                <input type="text" placeholder="Username" name="username">
            </div>
            <div class="password">
                <input type="password" placeholder="PassWord" name="password">
            </div>
            <div class="regChar">
                <img src="/flowerApp/index.php/manage/code" alt="" onclick="this.src='/flowerApp/index.php/manage/code?u='+Math.random();">
                <input type="text" placeholder="请输入验证码" oninvalid="setCustomValidity('请输入验证码')" maxlength="4">
            </div>
        </form>
    </div>

    <div class="loginBottom">
        <button type="submit">Login</button>
    </div>
</div>
</body>
</html><?php }
}
