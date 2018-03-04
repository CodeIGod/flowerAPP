<?php
/* Smarty version 3.1.30, created on 2018-02-28 01:31:55
  from "D:\wamp\www\flowerAPP\app\view\management\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a96068bd90f40_84434798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c7aa3ba175e962a5e6bc3af767b823be60d78a5' => 
    array (
      0 => 'D:\\wamp\\www\\flowerAPP\\app\\view\\management\\index.html',
      1 => 1519715752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/management/left_tmp.html' => 1,
  ),
),false)) {
function content_5a96068bd90f40_84434798 (Smarty_Internal_Template $_smarty_tpl) {
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
