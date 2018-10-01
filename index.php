<?php

/**
 * 创建入口文件
 * 1、定义常量
 * 2、加载函数库
 * 3、启动框架
 */

// 定义框架所处目录
define("COOLY", realpath('./'));

// 定义核心文件所处目录
define("CORE", COOLY."/core");

// 项目所处目录
define("APP", COOLY."/app");

// 定义开发调试模式
define("DEBUG", true);

// 定义module
define("MODULE",'app');

// 引入自动加载类
include "vendor/autoload.php";

if(DEBUG){
    $whoops = new \Whoops\Run;
    $option = new Whoops\Handler\PrettyPageHandler();
    $option -> setPageTitle("框架出错了");
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set("display_errors","On");
}else{
    ini_set("display_errors","Off");
}

// 引入函数
include CORE . "/common/function.php";

//  加载核心文件
include CORE . "/cooly.php";

// 引用自动加载类
spl_autoload_register("\core\cooly::load");

// 启动框架
\core\Cooly::run();

