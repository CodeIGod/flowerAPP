<?php
/* Smarty version 3.1.30, created on 2018-02-27 16:04:32
  from "H:\wamp\wamp64\www\flowerApp\app\view\management\goods.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a95819005e699_63653311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '966806b9c5943695e875a75b0109ad95381b3fe2' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\management\\goods.html',
      1 => 1519747465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/management/left_tmp.html' => 1,
  ),
),false)) {
function content_5a95819005e699_63653311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/management/left_tmp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
manage_goods.js"><?php echo '</script'; ?>
>
    <div class="content">
        <form action="">
            <div class="form-group">
                <label for="exampleInputCid">商品所属分类</label>
                <select class="form-control" id="exampleInputCid" name="cid">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['classif']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputName">商品（中文）名称</label>
                <input type="text" class="form-control" id="exampleInputName" placeholder="商品中文名称" name="gname">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">商品（英文）名称</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="GOODS-English-Name" name="genname">
            </div>
            <div class="form-group">
                <label for="exampleInputSpec">商品规格</label>
                <select class="form-control" id="exampleInputSpec" name="gspec">
                    <option>1</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputThumbFile">商品缩略图</label>
                <input type="file" id="exampleInputThumbFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="form-group">
                <label for="exampleInputImgFile">商品详情图</label>
                <input type="file" id="exampleInputImgFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="form-group">
                <label for="exampleInputSlideFile">商品展示图</label>
                <input type="file" id="exampleInputSlideFile" multiple>
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="form-group">
                <label for="exampleInputPicFile">商品实拍图</label>
                <input type="file" id="exampleInputPicFile" multiple>
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="form-group">
                <label for="exampleInputDesc">商品实拍描述</label>
                <input type="text" class="form-control" id="exampleInputDesc" placeholder="描述需与实拍图片一一对应(用 ^ 隔开)，否则页面无法正常显示" name="gdesc">
            </div>
            <input type="hidden" name="gthumb">
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
</body>
</html><?php }
}
