<?php
/* Smarty version 3.1.30, created on 2018-03-03 11:37:47
  from "H:\wamp\wamp64\www\flowerApp\app\view\management\goods_show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9a890b0ffc67_87735635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8d622e0e05836a7d0595d63ce5b920fac46758a' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\management\\goods_show.html',
      1 => 1520077059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/management/left_tmp.html' => 1,
  ),
),false)) {
function content_5a9a890b0ffc67_87735635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/management/left_tmp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
goods_show.js"><?php echo '</script'; ?>
>
    <div class="content">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>商品ID</th>
                    <th>商品名称</th>
                    <th>商品英文名称</th>
                    <th>商品价格</th>
                    <th>商品规格</th>
                    <th>商品缩略图</th>
                    <th>商品详情图</th>
                    <th>商品活动</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tos']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <tr data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
">
                    <td class="active"><?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
</td>
                    <td class="warning"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
" data-type="gname"></td>
                    <td class="info"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['genname'];?>
" data-type="genname"></td>
                    <td class="warning"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
" data-type="gprice"></td>
                    <td class="info"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['gspec'];?>
" data-type="gspec"></td>
                    <td class="success"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" class="img img-thumbnail" style="width: 150px;height: 50px;"></td>
                    <td class="success"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gimg'];?>
" class="img img-thumbnail" style="width: 150px;height: 50px;"></td>
                    <td class="info"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
" data-type="aid"></td>
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
