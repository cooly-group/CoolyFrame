<?php
namespace core;

use core\lib\log;
use core\lib\route;

class cooly{

    // 类静态常量
    public static $classMap = array();

    // 定义视图赋值变量
    public $assgin = array();

    /**
     * 框架运行
     * @throws \Exception
     */
    static public function run(){
        // 日志启动
        log::init();
        $route = new route();
        // 控制器和方法的赋值
        $ctrlClass = $route -> ctrl;
        $method = $route -> method;
        // 模块处理
        $ctrlFile = APP . '/ctrl/'.$ctrlClass . 'Ctrl.php';
        $module = '\\' . MODULE . '\ctrl\\' . $ctrlClass . 'Ctrl';  // 引入模块文件
        if(is_file($ctrlFile)){
            include $ctrlFile;
            // 实例化模块调用对应方法
            $ctrl = new $module();
            $ctrl -> $method();
            log::log('ctrl:' . $ctrlClass . '  action:' . $method ,'server');
        }else{
            throw new \Exception("找不到控制器".$ctrlClass);
        }
    }

    /**
     * 自动加载类
     * @param $class string 类名称
     * @return bool
     */
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

    /**
     * 视图赋值
     * @param $name string 变量名
     * @param $value mixed 值
     */
    public function assign($name, $value){
        $this -> assgin[$name] = $value;
    }

    /**
     * 视图变量渲染
     * @param $file string 文件名
     */
    public function display($file){
        $file = APP . '/view/' . $file;
        if(is_file($file)){
            $loader = new \Twig_Loader_Filesystem(APP."/view/");
            $twig = new \Twig_Environment($loader, array(
                'cache' => COOLY.'/log/twig/',
                'debug' => DEBUG
            ));
            $template = $twig->load('index.html');
            $template-> display($this -> assgin?$this -> assgin : "");
        }
    }
}
