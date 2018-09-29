<?php
namespace core;

class Cooly{

    // 类静态常量
    public static $classMap = array();

    // 运行框架
    static public function run(){
        p(COOLY);
    }

//    // 自动加载类
//    static public function load($class){
//        if(self::$classMap[$class]){
//            return true;
//        }else{
//            // 转化文件路径结构
//            $class = str_replace("\\","/",$class);
//            $file = COOLY . '/' . $class . ".php";
//            if(is_file($file)){
//                include $file;
//                return self::$classMap[$class] = $file;
//            }else{
//                return false;
//            }
//        }
//    }
}
