<?php
/**
 * Created by PhpStorm.
 * User: maizai1994
 * Date: 2018/10/1
 * Time: 10:55
 */

namespace core\lib\drive\cache;

use core\lib\model;

class dbCache
{
    static public $model;
    public function __construct(){
        self::$model = new model();
        $ret = self::$model -> query("show tables like config");
        p($ret);
    }

//    public function setCache($name,){
//
//    }
}