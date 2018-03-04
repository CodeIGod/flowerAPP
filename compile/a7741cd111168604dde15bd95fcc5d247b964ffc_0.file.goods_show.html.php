<?php
/* Smarty version 3.1.30, created on 2018-02-28 07:49:16
  from "D:\wamp\www\flowerAPP\app\view\management\goods_show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a965efcdcc520_21396753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7741cd111168604dde15bd95fcc5d247b964ffc' => 
    array (
      0 => 'D:\\wamp\\www\\flowerAPP\\app\\view\\management\\goods_show.html',
      1 => 1519785101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/management/left_tmp.html' => 1,
  ),
),false)) {
function content_5a965efcdcc520_21396753 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'v');
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
