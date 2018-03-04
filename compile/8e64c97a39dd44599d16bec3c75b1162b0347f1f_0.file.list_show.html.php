<?php
/* Smarty version 3.1.30, created on 2018-02-28 10:15:30
  from "D:\wamp\www\flowerAPP\app\view\index\list_show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a968142096be5_17107439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e64c97a39dd44599d16bec3c75b1162b0347f1f' => 
    array (
      0 => 'D:\\wamp\\www\\flowerAPP\\app\\view\\index\\list_show.html',
      1 => 1519812785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/index/header.html' => 1,
  ),
),false)) {
function content_5a968142096be5_17107439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/list_show.css">
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
     <a href="">
         <div class="huana1">
          <div class="xq_tu">
               <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
">
          </div>
          <div class="xq_zi">
               <div class="xq_zm"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
<br>
               <span>WEDDING FLOWER</span></div> 
               <div class="xq_jiage">
                   <?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['gspec'];
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('foo', explode(',',$_prefixVariable1));
?>
                       <?php echo $_smarty_tpl->tpl_vars['foo']->value[0];?>

                       <br>

                    价格:    <span><?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</span>  <br>
               </div>  
          </div>
          <a href="/flowerApp/index.php/details?gid=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
">
               <div class="xq_tyuan">商品详情</div>
          </a>
           <a href="">
               <div class="xq_tyuan">更多</div>
           </a>
     </div>
     </a>
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
