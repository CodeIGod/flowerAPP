<?php
/* 定义常量，
    文件的路径
 * 减轻文件引入的书写复杂问题
 * */
header('Content-type:text/html;charset=utf8');
////////
define('CSS_PUB', '/flowerApp/static/css/public/');
define('CSS_PATH', '/flowerApp/static/css/');
define('JS_PUB', '/flowerApp/static/js/public/');
define('JS_PATH', '/flowerApp/static/js/');
define('JS_INDEX_PATH', '/flowerApp/static/js/templete/');
define('IMG_PATH', '/flowerApp/static/image/');
define('IMG_INDEX_PATH', '/flowerApp/static/image/index/');
define('ICON_PATH', '/flowerApp/static/iconfont/');
define('FONT_PATH', __DIR__ . '/static/font/');
///////////
include "libs/router.php";
include "libs/page.php";
include "libs/smarty/Smarty.class.php";
include "libs/m_smarty.php";
include "libs/index_smarty.php";
include "libs/mysql.php";
include "libs/function.php";
include "libs/code.php";
///////////
router::index();