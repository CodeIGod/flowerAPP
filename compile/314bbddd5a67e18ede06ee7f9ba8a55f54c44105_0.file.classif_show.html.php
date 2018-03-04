<?php
/* Smarty version 3.1.30, created on 2018-03-03 11:37:43
  from "H:\wamp\wamp64\www\flowerApp\app\view\management\classif_show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9a8907d43ae3_57950233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '314bbddd5a67e18ede06ee7f9ba8a55f54c44105' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\management\\classif_show.html',
      1 => 1520077059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/management/left_tmp.html' => 1,
  ),
),false)) {
function content_5a9a8907d43ae3_57950233 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/management/left_tmp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
classif_show.js"><?php echo '</script'; ?>
>
    <div class="content">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>分类ID</th>
                    <th>分类展示图片</th>
                    <th>分类中文名称</th>
                    <th>分类英文名称</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tos']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <tr data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                    <td class="active"><?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
</td>
                    <td class="success"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" class="img img-thumbnail" style="width: 150px;height: 50px;"></td>
                    <td class="warning"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
" data-type="cname"></td>
                    <td class="info"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cenname'];?>
" data-type="cenname"></td>
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
