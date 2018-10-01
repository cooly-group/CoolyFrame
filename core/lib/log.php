<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/10/1
 * Time: 07:35
 */

namespace core\lib;


class log
{
    static public $class;

    /**
     * 初始化log
     */
    static public function init(){
        $drive = config::get('DRIVE','log');
        $class = '\core\lib\drive\log\\'. $drive .'Log';
        self::$class = new $class;
    }

    /**
     * 写入log
     * @param $message mixed 数据
     * @param string $file 文件
     */
    static public function log($message, $file = 'log'){
        self::$class -> log($message, $file);
    }

}