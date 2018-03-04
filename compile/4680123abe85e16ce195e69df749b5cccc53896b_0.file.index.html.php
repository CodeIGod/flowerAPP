<?php
/* Smarty version 3.1.30, created on 2018-02-28 03:05:06
  from "D:\wamp\www\flowerAPP\app\view\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a961c62a6ee81_40281083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4680123abe85e16ce195e69df749b5cccc53896b' => 
    array (
      0 => 'D:\\wamp\\www\\flowerAPP\\app\\view\\index\\index.html',
      1 => 1519786902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/index/header.html' => 1,
  ),
),false)) {
function content_5a961c62a6ee81_40281083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/index.css">
<nav>
    <div class="navs">
    <ul>

        <li>
            <div class="nav_frist"></div>
            <a href="#" class="write"><span>精选</span></a>
        </li>
        <li><a href="#"><span>优惠</span></a></li>
        <li><a href="#"><span>节日</span></a></li>
        <li><a href="#"><span>花言花语</span></a></li>
    </ul>
    </div>
</nav>
<div class="con">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo IMG_INDEX_PATH;?>
banner_03.png" alt=""></div>
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 1</div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <div class="hot">
        <div class="hot_title"><img src="<?php echo IMG_INDEX_PATH;?>
goods_title_03.png" alt=""></div>
        <div class="hot_goodsB">
            <div class="ones">
                <div class="hot_goods">
                    <a href="" class="top">
                        <img src="<?php echo IMG_INDEX_PATH;?>
goods_03.png" alt="">
                    </a>
                    <div class="bottom">
                        <p class="xu"> 粉玫瑰</p>
                        <p class="mon">
                            <span>PINK ROSE</span>
                            <span class="reds">360.00</span>
                        </p>
                        <div class="zan">
                            <span><i class="iconfont icon-xin"></i>273840</span>
                            <span><i class="iconfont icon-xin"></i>273840</span>
                        </div>
                    </div>
                </div>
                <div class="hot_goods">
                    <a href="" class="top">
                        <img src="<?php echo IMG_INDEX_PATH;?>
goods_03.png" alt="">
                    </a>
                    <div class="bottom">
                        <p class="xu"> 粉玫瑰</p>
                        <p class="mon">
                            <span>PINK ROSE</span>
                            <span class="reds">360.00</span>
                        </p>
                        <div class="zan">
                            <span><i class="iconfont icon-xin"></i>273840</span>
                            <span><i class="iconfont icon-xin"></i>273840</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ones">
                <div class="hot_goods">
                    <a href="" class="top">
                        <img src="<?php echo IMG_INDEX_PATH;?>
goods_03.png" alt="">
                    </a>
                    <div class="bottom">
                        <p class="xu"> 粉玫瑰</p>
                        <p class="mon">
                            <span>PINK ROSE</span>
                            <span class="reds">360.00</span>
                        </p>
                        <div class="zan">
                            <span><i class="iconfont icon-xin"></i>273840</span>
                            <span><i class="iconfont icon-xin"></i>273840</span>
                        </div>
                    </div>
                </div>
                <div class="hot_goods">
                    <a href="" class="top">
                        <img src="<?php echo IMG_INDEX_PATH;?>
goods_03.png" alt="">
                    </a>
                    <div class="bottom">
                        <p class="xu"> 粉玫瑰</p>
                        <p class="mon">
                            <span>PINK ROSE</span>
                            <span class="reds">360.00</span>
                        </p>
                        <div class="zan">
                            <span><i class="iconfont icon-xin"></i>273840</span>
                            <span><i class="iconfont icon-xin"></i>273840</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flow">
        <div class="title">
            <img src="<?php echo IMG_INDEX_PATH;?>
flow_07.png" alt="">
        </div>
        <a href="" class="gu">
            <div class="pos">
                <p>2017</p>
                <p>01 05</p>
            </div>
            <img src="<?php echo IMG_INDEX_PATH;?>
banner_bottom_07.png" alt="">
        </a>
        <a href="" class="gu">
            <div class="pos">
                <p>2017</p>
                <p>01 06</p>
            </div>
            <img src="<?php echo IMG_INDEX_PATH;?>
banner_bottom_10.png" alt="">
        </a>
    </div>
</div>
<footer>
    <a href="/flowerApp/index.php/index" class="but_frist"><i class="iconfont icon-shouye"></i></a>
    <a href="/flowerApp/index.php/lists/index"><i class="iconfont icon-daohang"></i></a>
    <a href="/flowerApp/index.php/buy"><i class="iconfont icon-gouwuche"></i></a>
    <a href="/flowerApp/index.php/person"><i class="iconfont icon-iconfontgerenzhongxin"></i></a>
</footer>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_INDEX_PATH;?>
index.js"><?php echo '</script'; ?>
><?php }
}
