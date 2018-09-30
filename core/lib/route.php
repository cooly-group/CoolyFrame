<?php

namespace core\lib;

use core\lib\config;

class route
{
    /**
     * 1、隐藏 index.php
     * 2、获取URL中的参数部分
     * 3、返回对应的控制器和方法
     */

    // xxx.com/index.php/index/index
    // xxx.com/index/index
    // 声明控制器和方法
    public $ctrl;
    public $method;

    /**
     * 处理控制器和方法
     * route constructor.
     */
    public function __construct()
    {
        // 通过$_SERVER['REQUEST_URI'] 处理后缀
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] !== '/'){
            $path = $_SERVER['REQUEST_URI'];
            $pathArr = explode("/",trim($path, '/'));
            // 处理控制器
            if(isset($pathArr[0])){
                $this -> ctrl = $pathArr[0];
            }
            unset($pathArr[0]); // 卸载控制器
            // 处理方法
            if(isset($pathArr[1])){
                $this -> method = $pathArr[1];
                unset($pathArr[1]); // 卸载方法
            }else{
                $this -> method = config::get('CTRL','route');
            }
            // 处理路由传值
            $count = count($pathArr) + 2;
            $i = 2;
            while ($i < $count){
                if(isset($pathArr[$i + 1])){
                    $_GET[$pathArr[$i]] = $pathArr[$i + 1];
                }
                $i = $i + 2;
            }
        }else{
            $this -> ctrl = config::get('CTRL','route');
            $this -> method = config::get('METHOD','route');
        }
    }
}