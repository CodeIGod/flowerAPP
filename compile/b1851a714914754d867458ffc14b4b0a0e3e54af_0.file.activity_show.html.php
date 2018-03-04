<?php
/* Smarty version 3.1.30, created on 2018-03-03 11:34:45
  from "H:\wamp\wamp64\www\flowerApp\app\view\management\activity_show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9a8855031754_20616593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1851a714914754d867458ffc14b4b0a0e3e54af' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\management\\activity_show.html',
      1 => 1520076882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/management/left_tmp.html' => 1,
  ),
),false)) {
function content_5a9a8855031754_20616593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/management/left_tmp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
activity_show.js"><?php echo '</script'; ?>
>
    <div class="content">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>活动ID</th>
                    <th>活动主题</th>
                    <th>活动主题英文</th>
                    <th>活动Banner图</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tos']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <tr data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
">
                    <td class="active"><?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
</td>
                    <td class="warning"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['aname'];?>
" data-type="aname"></td>
                    <td class="info"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['aenname'];?>
" data-type="aenname"></td>
                    <td class="success"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['abanner'];?>
" class="img img-thumbnail" style="width: 150px;height: 50px;"></td>
                    <td class="danger"><button type="button" class="del btn btn-danger">删除</button></td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
        </table>
    </div>
</div>
</body>
</html>
<?php }
}
