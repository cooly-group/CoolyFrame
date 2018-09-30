<?php
namespace core;

class cooly{

    // 类静态常量
    public static $classMap = array();

    // 运行框架
    static public function run(){
        $route = new \core\lib\route();
        $ctrlClass = $route -> ctrl;
        $method = $route -> method;
        $ctrlFile = APP . '/ctrl/'.$ctrlClass . 'Ctrl.php';
        $module = '\\' . MODULE . '\ctrl\\' . $ctrlClass . 'Ctrl';
        if(is_file($ctrlFile)){
            include $ctrlFile;
            $ctrl = new $module();
            $ctrl -> index();
        }else{
            throw new \Exception("找不到控制器");
        }
    }

    // 自动加载类
    static public function load($class){
        if(isset(self::$classMap[$class])){
            return true;
        }else{
            // 转化文件路径结构
            $class = str_replace("\\","/",$class);
            $file = COOLY . '/' . $class . ".php";
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }
    }
}
