<?php
/* Smarty version 3.1.30, created on 2018-03-01 01:40:40
  from "H:\wamp\wamp64\www\flowerApp\app\view\index\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a975a187297f9_49398408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98dec7aaf160bbf7ab40110819b4e9d119068f8b' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\index\\list.html',
      1 => 1519806680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/index/header.html' => 1,
  ),
),false)) {
function content_5a975a187297f9_49398408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/list.css">

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
     <div class="fen_banner ">
     	<a href="/flowerApp/index.php/list_show?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
               <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" border=0 width="670" height="380">
          	<div class="nei1"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>

			<div class="wenz"><?php echo $_smarty_tpl->tpl_vars['v']->value['cenname'];?>
</div>
          	</div>

          </a>
     </div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<footer>
	<a href="/flowerApp/index.php/index" ><i class="iconfont icon-shouye"></i></a>
	<a href="/flowerApp/index.php/lists/index" class="but_frist"><i class="iconfont icon-daohang"></i></a>
	<a href="/flowerApp/index.php/buy"><i class="iconfont icon-gouwuche"></i></a>
	<a href="/flowerApp/index.php/person"><i class="iconfont icon-iconfontgerenzhongxin"></i></a>
</footer>
</body>
</html>

<?php }
}