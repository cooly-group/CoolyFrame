<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/10/1
 * Time: 10:55
 */

namespace core\lib;


class cache
{
    static public $cacheClass;
    static public function init(){
        $drive = Config::get('DRIVE','cache');
        $class = 'core\lib\drive\cache\\'. $drive . 'Cache';
        self::$cacheClass = new $class;
    }

    /**
     * 缓存写入
     * @param $name string  缓存名称
     * @param  $value string 缓存值
     */
    static public function setCache($name,$value=""){
        self::$cacheClass -> setCache($name,$value);
    }

    /**
     * 读取缓存
     * @param $name string 缓存名称
     * @return mixed
     */
    static public function getCache($name){
        return self::$cacheClass -> getCache($name);
    }

    /**
     * 清除缓存
     * @param $name
     * @return mixed
     */
    static public function deleteCache($name){
        return self::$cacheClass -> deleteCache($name);
    }

    /**
     * 清空所有缓存
     */
    static public function deleteAllCache(){
        return self::$cacheClass -> deleteAllCache();
    }
}