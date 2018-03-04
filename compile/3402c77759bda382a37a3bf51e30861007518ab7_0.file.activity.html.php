<?php
/* Smarty version 3.1.30, created on 2018-02-28 08:01:27
  from "D:\wamp\www\flowerAPP\app\view\management\activity.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9661d7c1d0e7_38586913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3402c77759bda382a37a3bf51e30861007518ab7' => 
    array (
      0 => 'D:\\wamp\\www\\flowerAPP\\app\\view\\management\\activity.html',
      1 => 1519791409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/management/left_tmp.html' => 1,
  ),
),false)) {
function content_5a9661d7c1d0e7_38586913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/management/left_tmp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
input.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
manage_activity.js"><?php echo '</script'; ?>
>
    <div class="content">
        <form action="">
            <div class="form-group">
                <label for="exampleInputName">活动（中文）主题</label>
                <input type="text" class="form-control" id="exampleInputName" placeholder="商品中文名称" name="aname">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">活动（英文）主题</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="GOODS-English-Name" name="aenname">
            </div>
            <div class="form-group banner">
                <label for="exampleInputBanner">活动banner图</label>
                <input type="file" id="exampleInputBanner">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <input type="hidden" name="abanner" class="abanner">
            <div class="form-group" >
                <label for="exampleInputSpec">商品</label>
                <select class="form-control" id="exampleInputSpec" multiple size="5" style="padding: 0;">
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <input type="hidden" name="gid" class="gid">
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
</body>
</html><?php }
}
