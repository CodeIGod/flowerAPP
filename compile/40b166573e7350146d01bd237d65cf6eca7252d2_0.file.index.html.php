<?php
/* Smarty version 3.1.30, created on 2018-02-27 08:11:02
  from "H:\wamp\wamp64\www\flowerApp\app\view\management\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a951296bb4322_37765326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40b166573e7350146d01bd237d65cf6eca7252d2' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\flowerApp\\app\\view\\management\\index.html',
      1 => 1519715752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/management/left_tmp.html' => 1,
  ),
),false)) {
function content_5a951296bb4322_37765326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/management/left_tmp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
manage_index.js"><?php echo '</script'; ?>
>
    <div class="content">
        <form action="">
            <div class="form-group">
                <label for="exampleInputPassword1">分类（中文）名称</label>
                <input type="text" class="form-control" id="exampleInputName" placeholder="分类中文名称" name="cname">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">分类（英文）名称</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="class-English-Name" name="cenname">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">分类展示图片</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <input type="hidden" name="cthumb">
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
</body>
</html><?php }
}
