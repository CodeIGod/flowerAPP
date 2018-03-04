<?php
/* Smarty version 3.1.30, created on 2018-02-28 08:08:39
  from "D:\wamp\www\flowerAPP\app\view\management\goods.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a966387c5b554_69481494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0a9a30b506a4c61710788d4a04e9e1b3e9e76cf' => 
    array (
      0 => 'D:\\wamp\\www\\flowerAPP\\app\\view\\management\\goods.html',
      1 => 1519803026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/management/left_tmp.html' => 1,
  ),
),false)) {
function content_5a966387c5b554_69481494 (Smarty_Internal_Template $_smarty_tpl) {
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
                <label for="exampleInputPrice">商品价格</label>
                <input type="text" class="form-control" id="exampleInputPrice" placeholder="GOODS-PRICE" name="gprice">
            </div>
            <div class="form-group">
                <label for="exampleInputSpec">商品规格</label>
                <input type="text" id="exampleInputSpec" name="gspec">
            </div>
            <div class="form-group thumb">
                <label for="exampleInputThumbFile">商品缩略图</label>
                <input type="file" id="exampleInputThumbFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <input type="hidden" name="gthumb" class="gthumb">
            <div class="form-group imgs">
                <label for="exampleInputImgFile">商品详情图</label>
                <input type="file" id="exampleInputImgFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <input type="hidden" name="gimg" class="gimg">

            <div class="form-group">
                <label for="exampleInputSlideFile">商品展示图</label>
                <input type="file" id="exampleInputSlideFile" multiple>
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="slideBox" style="max-height: 200px;width: 100%;display: flex;flex-wrap: wrap;justify-content: space-around"></div>
            <input type="hidden" name="gslide" class="gslide">
            <div class="form-group">
                <label for="exampleInputPicFile">商品实拍图</label>
                <input type="file" id="exampleInputPicFile" multiple>
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="picBox" style="max-height: 200px;width: 100%;display: flex;flex-wrap: wrap;justify-content: space-around"></div>
            <input type="hidden" name="gpicture" class="gpicture">
            <div class="form-group">
                <label for="exampleInputDesc">商品实拍描述</label>
                <input type="text" class="form-control" id="exampleInputDesc" placeholder="描述需与实拍图片一一对应(用 ^ 隔开)，否则页面无法正常显示" name="gdesc">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
</body>
</html><?php }
}
