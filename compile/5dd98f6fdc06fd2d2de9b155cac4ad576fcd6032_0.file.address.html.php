<?php
/* Smarty version 3.1.30, created on 2018-03-04 09:27:55
  from "H:\wamp\wamp64\www\flowerApp\app\view\index\address.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9bbc1b776904_46905367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dd98f6fdc06fd2d2de9b155cac4ad576fcd6032' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\index\\address.html',
      1 => 1520154877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9bbc1b776904_46905367 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>shou huo</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
	<link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/address.css">
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
address.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="header">
		<a href="javascript:history.back()"><i class="iconfont icon-54"></i></a>
		<span>收货地址</span>
		<a href=""><div class="jia">+</div></a>
	</div>
	<div class="adr-list-wrap">
		<ul>
			<li data-ad_id="<?php echo $_smarty_tpl->tpl_vars['default']->value['ad_id'];?>
" class="active">
				<div class="adrTop">
					<div class="adr-name"><?php echo $_smarty_tpl->tpl_vars['default']->value['ad_name'];?>
</div>
					<div class="adr-tel"><?php echo $_smarty_tpl->tpl_vars['default']->value['ad_tel'];?>
</div>
					<div class="adr-status">[默认]</div>
				</div>
				<div class="adrBottom">
					<div class="city">
						<?php echo $_smarty_tpl->tpl_vars['default']->value['ad_city'];?>

					</div>
					<div class="adress">
						<span>详细地址：</span><?php echo $_smarty_tpl->tpl_vars['default']->value['ad_adress'];?>

					</div>
				</div>
			</li>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<li data-ad_id="<?php echo $_smarty_tpl->tpl_vars['v']->value['ad_id'];?>
">
				<div class="adrTop">
					<div class="adr-name"><?php echo $_smarty_tpl->tpl_vars['v']->value['ad_name'];?>
</div>
					<div class="adr-tel"><?php echo $_smarty_tpl->tpl_vars['v']->value['ad_tel'];?>
</div>
					<div class="adr-status"></div>
				</div>
				<div class="adrBottom">
					<div class="city">
						<?php echo $_smarty_tpl->tpl_vars['v']->value['ad_city'];?>

					</div>
					<div class="adress">
						<span>详细地址：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['ad_adress'];?>

					</div>
				</div>
			</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>
	</div>
	<div class="header2">
		<a href="/flowerAPP/index.php/adrAdd/index"><span>添加新地址</span></a>
	</div>
</body>
</html>
<?php }
}
