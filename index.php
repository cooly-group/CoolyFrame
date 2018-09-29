<?php

/**
 * 创建入口文件
 * 1、定义常量
 * 2、加载函数库
 * 3、启动框架
 */

// 定义框架所处目录
define("COOLY","Applications/XAMPP/xamppfiles/htdocs/coolyFrame");

// 定义核心文件所处目录
define("CORE",COOLY."/core");

// 项目所处目录
define("APP",COOLY."/app");

// 定义开发调试模式
define("DEBUG",true);


if(DEBUG){
    ini_set("display_errors","On");
}else{
    ini_set("display_errors","Off");
}

// 引入函数
include CORE."/common/function.php";
p(COOLY);

////  加载核心文件
//include  Core."/Cooly.php";
//
//// 引用自动加载类
//spl_autoload_register("Cooly::load");

// 启动框架
//\core\Cooly::run();


